<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Models\product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = product::all(); // get all categories
        // dd($products);
        return view('admin.products.list', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.products.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductRequest $request)
    {
        //
        // dd($request->file('pimg'));
        // dd($request);
        $product = new product();
        $product->name = $request->pname;
        $product->slug = str_replace(' ', '_', strtolower($request->pname));
        $product->short_desc = $request->pshortdesc;
        $product->description = $request->pdesc;
        // $product->image = $request->pimg;
        // $path = Storage::putFile('photos', new File($request->file('pimg')));
        $path = $request->file('pimg')->store('uploads');
        $product->images = json_encode([$path]);
        $product->price = $request->pprice;
        $product->category_id = $request->pcat;
        $product->created_at = now();
        $product->updated_at = now();


        if($product->save()){
            return redirect('/product')->with('success', 'Product Added Successfully');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
        // $product = product::where('id',$product->id)->with('categories')->get();
        // $product = product::join('categories', 'categories.id', '=', 'products.category_id')
        //         ->select('products.name as Productname',
        //                 'products.description as ProductDescription',
        //                 'products.slug as ProductSlug',
        //                 'products.images as ProductImage',
        //                 'products.price as ProductPrice',
        //                 'categories.name as Categoryname',
        //                 'categories.slug as CategorySlug',
        //                 'categories.description as CategoryDescription',
        //                 'categories.id as CategoryId')
        //         ->where('products.id', $product->id)
        //         ->get();

        $product = product::find($product->id);


        // return $product;
        return view('admin.products.view', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
        $product = product::find($product->id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        //
        // dd($request);
        // dd(file('$request->pimgedit'));
        // dd($request->file('pimgedit'));

        $product->name = $request->pnameedit;
        $product->slug = str_replace(' ', '_', strtolower($request->pnameedit));
        $product->short_desc = $request->pshortdescedit;
        $product->description = $request->pdescedit;
        $path = isset($request->pimgedit) ? $request->pimgedit->store('uploads'):'';
        $product->images = json_encode([$path]);
        $product->price = $request->ppriceedit;
        $product->updated_at = now();
        product::where('id',$product->id)->update(array('name'=>$product->name,'slug'=>$product->slug,'short_desc'=>$product->short_desc,'description'=>$product->description,'images'=>$product->images,'price'=>$product->price,'updated_at'=>$product->updated_at));
        return redirect('/product')->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
        // dd($product);
        $product = product::find($product->id);
        $product->delete();
        return redirect('/product')->with('success', 'Product deleted Successfully');

    }
}

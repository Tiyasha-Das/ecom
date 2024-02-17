<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all(); // get all categories
        return view('admin.categories.list', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecategoryRequest $request)
    {
        //
        $category = new Category();
        $category->name = $request->cname;
        $category->slug = str_replace(' ', '_', strtolower($request->cname));
        $category->description = $request->cdesc;

        if($category->save()){
            return redirect('/category')->with('success', 'Category Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        $category = Category::where('id',$category->id)->with('products')->first();
        // return $category;
        return view('admin.categories.view', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
        $category = Category::find($category->id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecategoryRequest $request, Category $category)
    {
        //
        $category->name = $request->cname;
        $category->slug = str_replace(' ', '_', strtolower($request->cname));
        $category->description = $request->cdesc;
        Category::where('id', $category->id)->update(array('name'=>$category->name,'slug'=>$category->slug,'description'=>$category->description));
        return redirect('/category')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        // return "Inside the destroy method";
        $category = Category::find($category->id);
        $category->delete();
        return redirect('/category')->with('success', 'Category deleted Successfully');

    }
}

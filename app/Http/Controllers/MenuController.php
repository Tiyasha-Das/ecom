<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\customer;
use App\Models\order;
use App\Models\OrderDetail;
use App\Models\product;
use App\Models\Category;


class MenuController extends Controller
{
    public static $prods = [];
    //
    public function showlist($slug){
        // echo $slug;
        // exit;
        $category = new Category();
        $products = $category->getBySlug($slug)->products;
        return view('fooditemlist',compact('products'));

    }

    public function showMoreDetails($slug) {

        // $category = Category::getBySlug($slug);
        $product = new product();
        $products = $product->getBySlug($slug);
        // dd($products);

        return view('fooditemlist-details',compact('products'));

    }

    public function addTocart($slug) {

        if (!Session::has('cart')) {
            // echo 55555555;
            Session::put('cart', []);
        }
        // dd(session()->getId());
        $prod =  new product();
        $product = $prod->getBySlug($slug);
        $productArr = json_decode(json_encode($product), true);
        $cart = Session::get('cart');
        $found = array_search($productArr['slug'],array_column($cart, 'slug'));
            if($found === false || $found === null) {
            // echo 11111111111;
            $cart[] = $productArr;
            $keys = array_keys($cart);
            $lastKey = $keys[count($keys)-1];
            $cart[$lastKey]['qty'] = 1;
            // var_dump($cart);
            Session::put('cart', $cart);
            Session::save();

        }else{
            // echo 222222;
            $key = array_search($productArr,$cart);
            $cart[$key]['qty']+=1;
            // echo $cart[$key]['price'];
            $cart[$key]['price']+= $productArr['price'];
            Session::put('cart', $cart);
            Session::save();
        }
        $cart_item = Session::get('cart');
        return view('cartlist',compact('cart_item'));





    }

    public function checkout(Request $request) {

        $cart_item = Session::get('cart');
        return view('checkout',compact('cart_item'));
    }

    public function order(Request $request) {

        // return $request->all();
        $userChk = User::updateOrCreate(
            ['name' => $request->fullname,'email' => $request->email,],
        );

        // return $userChk;
        $cart_item = Session::get('cart');
        $cart = collect($cart_item);

        $order = new order();

        $order->user_id = $userChk->id;
        $order->quantity = $cart->sum('qty');
        $order->total = $cart->sum('price');
        $order->status = "NEW";
        $order->save();


        $customer = new customer();
        $customer->name = $request->fullname;
        $customer->email = $request->email;
        $customer->phone = $request->mobno;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->country = $request->country;
        $customer->zip = $request->zip;
        $customer->status = "ACTIVE";
        $customer->user_id = $userChk->id;
        $customer->created_at = now();
        $customer->updated_at = now();
        $customer->save();


        foreach ($cart_item as $key => $item) {

            $orderDtl = new OrderDetail();

            $orderDtl->order_id = $order->id;
            $orderDtl->product_id = $item['id'];
            $orderDtl->quantity = $item['qty'];
            $orderDtl->total = $item['price'];
            $orderDtl->status = "PENDING";
            $orderDtl->save();
        }

        // return('Order Placed Successfully');
        return redirect('/checkout')->with('success', 'Order Placed Successfully');


    }
}

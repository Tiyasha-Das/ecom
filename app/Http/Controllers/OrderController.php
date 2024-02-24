<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreorderRequest;
use App\Http\Requests\UpdateorderRequest;
use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $order = Order::all();
        return view('admin.orders.list',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.orders.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreorderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
        // dd($order);
        echo $order->id;
        // $orderDtl = OrderDetail::find($order->id);
        // $orderDtl = OrderDetail::where('order_id',$order->id)->get();
        // $orderDtl = $order->orderDetails();
        $orderDtl = OrderDetail::where('order_id',$order->id)->with('order','product')->get();
        // $category = Category::where('id',$category->id)->with('products')->first();



        // dd($orderDtl);
        // echo "<pre>";

        // var_dump($orderDtl);
        // return $orderDtl;



        // dd($order);
        return view('admin.orders.view',compact('orderDtl'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
        return view('admin.orders.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateorderRequest $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecustomerRequest;
use App\Http\Requests\UpdatecustomerRequest;
use App\Models\customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $customers = customer::all();
        return view('admin.customers.list',compact('customers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.customers.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecustomerRequest $request)
    {
        //
        $customer = new customer();
        $customer->name = $request->custname;
        $customer->email = $request->custemail;
        $customer->phone = $request->custphoneno;
        $customer->address = $request->custaddr;
        $customer->city = $request->custcity;
        $customer->state = $request->custstate;
        $customer->country = $request->custcountry;
        $customer->zip = $request->custzip;
        $customer->status = $request->custstatus;
        $customer->user_id = 2;
        $customer->created_at = now();
        $customer->updated_at = now();

        if($customer->save()){
            return redirect('/customer')->with('success', 'Customer Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer)
    {
        //
        $customer = customer::find($customer->id);
        return view('admin.customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecustomerRequest $request, customer $customer)
    {
        //
        $customer = customer::find($customer->id);
        $customer->name = $request->custnameedit;
        $customer->email = $request->custemailedit;
        $customer->phone = $request->custphnedit;
        $customer->address = $request->custaddredit;
        $customer->city = $request->custcityedit;
        $customer->state = $request->custstateedit;
        $customer->country = $request->custcountryedit;
        $customer->zip = $request->custzipedit;
        $customer->status = $request->custstatusedit;
        $customer->updated_at = now();
        customer::where('id',$customer->id)->update(array(
            'name'=>$customer->name,
            'email'=>$customer->email,
            'phone'=>$customer->phone,
            'address'=>$customer->address,
            'city'=>$customer->city,
            'state'=>$customer->state,
            'country'=>$customer->country,
            'zip'=>$customer->zip,
            'status'=>$customer->status,
            'updated_at'=>$customer->updated_at

        ));
        return redirect('/customer')->with('success', 'Customer Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer)
    {
        //
        $customer = customer::find($customer->id);
        $customer->delete();
        return redirect('/customer')->with('success', 'Customer deleted Successfully');
    }
}

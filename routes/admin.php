<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

Route::name('admin.')->group(function () {
    // Route::get('/orders/list', function () {
    //     // Route assigned name "admin.users"...
    //     return view('admin.dashboard');
    // })->name('order.list');
    Route::resource('order', OrderController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('customer', CustomerController::class);


});

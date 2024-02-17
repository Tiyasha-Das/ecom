<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/categorylist/{slug}', [MenuController::class, 'showlist']);
Route::get('/productlist/{slug}',[MenuController::class, 'showMoreDetails']);
Route::get('/addToCart/{slug}',[MenuController::class,'addTocart']);

Route::get('/cartlist', function () {

    $cart_item = Session::get('cart');
    return view('cartlist',compact('cart_item'));
});

// Route::get('/checkout', function () {

//     return view('checkout');
// });

Route::get('/checkout', [MenuController::class, 'checkout']);
Route::post('/paynow', [MenuController::class, 'order']);
Route::get('/test', function () {
    session::flush();
});



// Route::get('/dashboard', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';



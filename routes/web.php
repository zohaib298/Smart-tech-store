<?php

use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\ordercontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerOrders;
use App\Http\Controllers\user;
use Illuminate\Support\Facades\Route;

// User Auth
Route::view('/signup', 'user.signup');
Route::post('/signup', [user::class, 'register']);
Route::view('/login', 'user.login')->name('login');
Route::post('/login', [user::class, 'signin']);
Route::post('/logout', [user::class, 'signout']);

// Public
Route::get('/', [ProductController::class, 'getlaptops']);
Route::get('/singleproduct/{id}', [ProductController::class, 'getsingledata']);
Route::get('/company/{company}', [ProductController::class, 'getspecificdata']);
Route::view('/contact', 'user.contact');

// User Auth Routes
Route::middleware('auth')->group(function () {
    Route::get('/shop', [cartcontroller::class, 'viewCart'])->name('cart.view');
    Route::post('/shop', [cartcontroller::class, 'addToCart']);
    Route::post('/checkout', [ordercontroller::class, 'checkout'])->name('checkout');
});

// Seller Routes
Route::prefix('/seller')->middleware(['auth', 'seller'])->group(function () {
    Route::get('/admin', [SellerOrders::class, 'dashboard']);
    Route::post('/add-product', [ProductController::class, 'Addproducts']);
    Route::get('/orders', [SellerOrders::class, 'getorders']);
    Route::get('/products', [SellerOrders::class, 'myproducts']);
    Route::delete('/products/{id}', [SellerOrders::class, 'deleteproduct']);
});

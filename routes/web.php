<?php

use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\ordercontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\sellerOrders;
use App\Http\Controllers\user;
use Illuminate\Support\Facades\Route;
Route::view('/','welcome');
Route::view('/signup','user.signup');
Route::post('/signup',[user::class,'register']);
Route::post('/login',[user::class,'signin']);
Route::post('/logout',[User::class,'signout']);
Route::view('/login',view: 'user.login')->name('login');

 Route::view('/shop','user.shop');

Route::post('/shop',[CartController::class,'addtocart'])->middleware('auth');
Route::post('/checkout', [ordercontroller::class,'checkout'])->middleware('auth');

Route::post('/checkout', [OrderController::class, 'checkout'])
    ->middleware('auth')
    ->name('checkout');

    Route::view('/contact','user.contact');
    Route::view('/orders','seller.orders');
    Route::get('/orders',[sellerOrders::class,'getorders']);
Route::post('/logout',[User::class,'signout']);
Route::view('/Addproduct','user.singleproduct');
Route::get('/',[ProductController::class,'getlaptops']);
Route::prefix('/seller')->group(function(){
    Route::view('/admin','seller.adminPanel')->middleware(['auth','seller']);
Route::post('/add-product',[ProductController::class,'Addproducts']);
});

//get routes
Route::get('/singleproduct/{id}',[ProductController::class,'getsingledata']);
Route::get('/shop',[ProductController::class,'getcartdata']);

Route::get('/shop', [cartcontroller::class, 'viewCart'])->middleware('auth')->name('cart.view');

Route::get('/company/{company}',[ProductController::class,'getspecificdata']);

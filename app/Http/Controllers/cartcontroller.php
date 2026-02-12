<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;

class cartcontroller extends Controller
{
     public function viewCart()
{
    $cartItems = Cart::with('product')
        ->where('user_id', auth()->id())
        ->get();

    return view('user.shop', compact('cartItems'));
}




public function addToCart(Request $req){
    $user = auth()->user();

    $req->validate(['product_id'=>'required']);

    $existing = Cart::where('user_id',$user->id)
        ->where('product_id',$req->product_id)
        ->first();

    if($existing){
        $existing->increment('quantity');
    } else {
        cart::create([
            'user_id'=>$user->id,
            'product_id'=>$req->product_id,
            'quantity'=>1
        ]);
    }

    return redirect()->route('cart.view')->with('message','Added to Cart');
}
}

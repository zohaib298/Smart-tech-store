<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order;
use App\Models\orderitem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function checkout()
    {
        $cartItems = Cart::with('product')
            ->where('user_id', auth()->id())
            ->get();

        $total = 0;

        foreach ($cartItems as $item) {
            $total += $item->product->product_price * $item->quantity;
        }

        $order = order::create([
            'user_id' => auth()->id(),
            'total_price' => $total,
        ]);

        foreach ($cartItems as $item) {
            orderitem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'name' => $item->product->product_name,
                'image' => $item->product->product_image,
                'price' => $item->product->product_price,
                'quantity' => $item->quantity,
            ]);
        }

        cart::where('user_id', auth()->id())->delete();

        return redirect('/')->with('message','Order placed successfully');

    }
}

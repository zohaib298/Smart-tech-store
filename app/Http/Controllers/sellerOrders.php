<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class SellerOrders extends Controller
{
    public function getorders()
    {
        $sellerId = Auth::id();

        // Seller ke products ke IDs
        $productIds = Product::where('seller_id', $sellerId)->pluck('id');

        // OrderItems load karo
        $orders = OrderItem::with(['order.user', 'product'])
    ->whereIn('product_id', $productIds)
    ->get();

        return view('seller.orders', compact('orders')); // variable name same as Blade
    }
}
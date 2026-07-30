<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SellerOrders extends Controller
{
    public function dashboard()
    {
        $sellerId = Auth::id();
        $productIds = Product::where('seller_id', $sellerId)->pluck('id');

        $totalProducts = Product::where('seller_id', $sellerId)->count();
        $totalOrders = OrderItem::whereIn('product_id', $productIds)->count();
        $totalRevenue = OrderItem::whereIn('product_id', $productIds)->sum(DB::raw('price * quantity'));
        $recentOrders = OrderItem::with(['order.user', 'product'])
            ->whereIn('product_id', $productIds)
            ->latest()
            ->take(5)
            ->get();
        $lowStock = Product::where('seller_id', $sellerId)->where('stock', '<=', 5)->get();

        return view('seller.dashboard', compact(
            'totalProducts',
            'totalOrders',
            'totalRevenue',
            'recentOrders',
            'lowStock'
        ));
    }

    public function getorders()
    {
        $sellerId = Auth::id();
        $productIds = Product::where('seller_id', $sellerId)->pluck('id');
        $orders = OrderItem::with(['order.user', 'product'])
            ->whereIn('product_id', $productIds)
            ->latest()
            ->get();
        return view('seller.orders', compact('orders'));
    }

    public function myproducts()
    {
        $products = Product::where('seller_id', Auth::id())->latest()->get();
        return view('seller.products', compact('products'));
    }

    public function deleteproduct($id)
    {
        $product = Product::where('id', $id)->where('seller_id', Auth::id())->firstOrFail();
        $product->delete();
        return back()->with('message', 'Product deleted successfully');
    }
}

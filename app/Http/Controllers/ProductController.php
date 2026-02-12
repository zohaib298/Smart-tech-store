<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Addproducts(Request $req)
    {
        // Validation (only user input fields)
        $formfields = $req->validate([
            "product_name" => ['required','min:3'],
            "product_price" => ['required','numeric','min:1'],
            "stock" => ['required','integer','min:1','max:999'],
            "category" => ['required'],
            "product_image" => ['required','image','max:2048'],
            "product_description" => ['required','min:30'],
        ]);

        // Store the image
        $formfields['product_image'] = $req->file('product_image')->store('product_images','public');

        // Create product without fillable using new + save
        $product = new Product;
        $product->product_name = $formfields['product_name'];
        $product->product_price = $formfields['product_price'];
        $product->stock = $formfields['stock'];
        $product->category = $formfields['category'];
        $product->product_image = $formfields['product_image'];
        $product->product_description = $formfields['product_description'];
        $product->seller_id = auth()->id(); // MUST

        $product->save(); // insert into DB

        return back()->with('message','Product added successfully');
    }

    public function getlaptops()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function getsingledata($id)
    {
        $singledata = Product::find($id);
        return view('user.singleproduct', compact('singledata'));
    }

    public function getspecificdata($company)
    {
        $relevantproduct = Product::where('category', $company)->get();
        return view('user.company', compact('relevantproduct'));
    }
}
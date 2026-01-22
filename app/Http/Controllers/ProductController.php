<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 public function Addproducts(Request $req){
 $formfields = $req->validate([
 "product_name" => ['required','min:3'],
 "product_price" => ['required','string','min:4'],
 "stock" => ['required','string','min:1','max:3'],
 "category" => ['required'],
 "product_image" => ['required','max:2048'],
 "product_description" => ['required','min:30']
 ]);
 //store the image in the server
 $formfields['product_image'] = $req->file('product_image')->store('product_images','public');
 $formfields = products::create($formfields);
 return back()->with('message','product added successfully');
 }



 public function getlaptops(){
    $products = products::all();
    return view('welcome',compact('products'));
 }


 public function getsingledata($id){
   $singledata = products::find($id);
   return view('user.singleproduct',compact('singledata'));
 }


 public function getspecificdata($company){
 $relevantproduct = products::where('category',$company)->get();
 return view('user.company',compact('relevantproduct'));

 }
}

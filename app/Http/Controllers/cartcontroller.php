<?php

namespace App\Http\Controllers;

use App\Models\cartmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartcontroller extends Controller
{
public function addtocart(Request $req){
$formfields = $req->validate([
"name" =>  ['required'] ,
"image" => ['required'],
"price" => ['required'] ,
"user_id" => ['']
]);
$user = Auth::user();
$formfields['user_id'] = $user->id;
cartmodel::create($formfields);
return back()->with('message','Added to Cart');
}
}

<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user extends Controller
{
    public function register(Request $req){
      
    $formfields = $req->validate([
   "name" =>['required','min:3'],
   "email" =>['required','email'],
   "password" =>['required','min:8','regex:/^[A-z0-9!@£$%^&*()~*_+ -]+$/'] ,
   "role" =>['required']
    ]);

    // encrypt the password
    $formfields['password'] = bcrypt($formfields['password']);
    $user = ModelsUser::create($formfields);
   Auth::login($user);
   $user = Auth::user();
   
   if($user->role == 'seller'){
    return redirect('/seller/admin');
   } else if($user->role == 'user'){
    return redirect ('/');
   } else{
    return redirect ('/seller/dashboard');
   }
   
 }



 public function signin(Request $req)
{
 $user2 = Auth::user();
    $fields = $req->validate([
        'email' => ['required', 'email'],
        'password' => ['required']
    ]);

    if (Auth::attempt($fields)) {
       if($user2->role == 'seller'){
    return redirect('/seller/admin');
   } else if($user2->role == 'user'){
    return redirect ('/');
   } else{
    return redirect ('/seller/dashboard');
   }
    }
    else{
return back()->with('message','invalid credentials');
    }

    
}

 public function signout(){
    Auth::logout();
    return back();
 } 
}

<?php

namespace App\Http\Controllers;
use App\Models\Cart;

use Illuminate\Http\Request;

class cartController extends Controller
{
    public function addToCart(Request $req){
        $formFields = $req->validate([
            'name' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'category' => ['required'],
            'image' => ['required'],
        ]);
        $formFields['user_id'] = auth()->user()->id;
        Cart::create($formFields);
        // print_r($formFields);
        return back()->with('message','Added To cart successfully!');
        
    
    // echo "hello";
}

    public function showCart(){
        $user = auth()->user()->id;
        $cart = Cart::where('user_id',$user)->get();
        return view('pages.user.cart',compact('cart'));
    }


}

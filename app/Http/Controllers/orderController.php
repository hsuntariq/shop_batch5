<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function createOrders(Request $req){
        // get id of current user
        $id = auth()->user()->id;
        // get the cart of current user
        $cart = Cart::where('user_id',$id);
        // print_r($cart);
        foreach($cart as $data){
            Order::create([
                'name' => $req->input('name'),
                'price' => $req->input('price'),
                'category' => $req->input('category'),
                'image' => $req->input('image'),
                'user_id' => $id
            ]);
        }
        return back()->with('message','ordered successfully!!!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function register(Request $req){
        $formFields = $req->validate([
            'username' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'image' => ['required'],
        ]);


        // handle the image
        $formFields['image'] = $req->file('image')->store('user_images','public');
        // encrypt the passsword
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('message', 'Welcome ' . auth()->user()->username );
    }


    public function logout(Request $req){
        auth()->logout();
        $req->session()->regenerateToken();
        return redirect('/');
    }

    public function login(Request $req){
        $formFields = $req->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        // check if user exists
        if(auth()->attempt($formFields)){
            $req->session()->regenerateToken();
            return redirect('/');
        }else{
            return back()->with('bottom','Invalid Credentials');
        }


    }


}


<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function insertData(Request $req){
        // request the data from the form
        // validate the data
        $formFields = $req->validate([
            "name" => ['required','min:3'],
            "price" => ['required','min:2','max:5'],
            "description" => ['required','min:5'],
            "category" => ['required'],
            "image" => ['required','mimes:jpeg,png,jpg']
        ]);
        // store image in the local storage
        $formFields['image'] = $req->file('image')->store('product_images','public');
        // send to the backend
        Products::create($formFields);
        return back()->with('message','Data Inserted Successfully');
    }
}

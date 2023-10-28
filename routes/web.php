<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use App\Models\Products;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::view('route_name(any)','view you want to return');
// Route::request('route/action',function);
Route::view('/','welcome');
Route::view('/add-product','pages.admin.addProduct');
Route::post('/insert-prod',[productController::class,'insertData']);
Route::view('/register','pages.user.register')->name('register');
Route::post('/register',[userController::class,'register']);
Route::get('/',[productController::class,'getData']);
Route::get('/view-product/{id}',function($id){
    $item = Products::find($id);
    return view('pages.user.single',compact('item'));
});

Route::post('/add-to-cart',[cartController::class,'addToCart'])->middleware('auth');
Route::view('/login','pages.user.login')->name('login');
Route::post('/logout',[userController::class,'logout']);

Route::post('/login',[userController::class,'login']);
Route::view('/cart','pages.user.cart');
Route::get('/cart',[cartController::class,'showCart']);
Route::post('/delete/{id}',[cartController::class,'deleteItem']);
Route::view('/orders','pages.admin.viewOrders');
Route::post('/order',[orderController::class,'createOrders']);
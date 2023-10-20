<?php

use App\Http\Controllers\productController;
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
Route::view('/register','pages.user.register');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

//Database Customer & Products
Route::resource('/',App\Http\Controllers\CustomerController::class);
Route::resource('customers',App\Http\Controllers\CustomerController::class);
Route::resource('products',App\Http\Controllers\ProductController::class);
Route::post('/saveCustomer', [App\Http\Controllers\CustomerController::class, 'saveCustomer']);
Route::post('/saveProduct', [App\Http\Controllers\ProductController::class, 'saveProduct']);

//User
Route::get('/register', [UserController::class, 'register']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login/process', [UserController::class, 'process']);
Route::get('/logout', [UserController::class, 'logout']);



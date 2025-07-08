<?php

use Illuminate\Support\Facades\Route;
use App\Models\products;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Auth::routes();

Route::get('/',[App\Http\Controllers\HomeController::class ,'index'])->name('home');


Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products', function () {
//     return view('products');
// });



Route::get('/forgotpassword', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('auth.password.forgotpassword');



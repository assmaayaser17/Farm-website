<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use App\Models\products;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;


// Auth::routes();

Route::get('/',[App\Http\Controllers\HomeController::class ,'index'])->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/test', function () {
    return view('test');
})->name('test');


Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products', function () {
//     return view('products');
// });

Route::get('/debug-locale', function () {
    return session('locale');
});

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');






// Route::get('/forgotpassword', [ForgotPasswordController::class, 'showLinkRequestForm'])
//     ->name('auth.password.forgotpassword');



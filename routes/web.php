<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Models\products;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminProductController;


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

// Language Switching
Route::get('/lang/{locale}', [HomeController::class, 'switch'])
    ->name('lang.switch')
    ->where('locale', '[a-z]{2}');


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
Route::get('/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Route::middleware(['auth', 'isAdmin'])->group(function () {
//     Route::get('/admin/products', [AdminProductController::class, 'index'])->name('admin.products.index');
//     // باقي الراوتات
// });

Route::get('/debug-locale', function () {
    return session('locale');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

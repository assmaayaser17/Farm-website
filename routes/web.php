<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\About;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Models\Category;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExportController;


// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// About 
Route::get('/about', function () {
    $about = About::first(); // يجيب أول سجل
    return view('about', compact('about'));
})->name('about');

Route::get('abouts/{id}', [AboutController::class, 'edit'])->name('abouts.edit');
Route::put('abouts/{id}', [AboutController::class, 'update'])->name('abouts.update');




// Services
Route::get('/services', fn() => view('services'))->name('services');
Route::get('services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('services/{id}', [ServiceController::class, 'update'])->name('services.update');


Route::get('/export/edit', [ExportController::class, 'edit'])->name('export.edit');
Route::post('/export/update', [ExportController::class, 'update'])->name('export.update');


// Language Switching
Route::get('/lang/{locale}', [HomeController::class, 'switch'])
    ->name('lang.switch')
    ->where('locale', '[a-z]{2}');

// Categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

// Contact
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Products 
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Debug
Route::get('/debug-locale', fn() => session('locale'));

// Dashboard
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', function () {
        $categories = Category::all();
        $products = Product::with('category')->get();
        return view('dashboard', compact('categories','products'));
    })->name('dashboard');

    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
     Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('/team', [TeamController::class, 'store'])->name('team.store');
    Route::get('/team', [TeamController::class, 'index'])->name('team.index');
    Route::get('/team/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');
    Route::put('/team/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
});

// Auth routes
Route::middleware('web')->group(function () {
    require __DIR__.'/auth.php';
});





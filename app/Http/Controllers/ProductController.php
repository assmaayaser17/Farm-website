<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // جِيب كل المنتجات من قاعدة البيانات
        return view('products', compact('products'));
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function create()
    {
        // return view('products.create');
          $categories = Category::all();
    return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'season' => 'nullable|string|max:255',
            'variety' => 'nullable|string|max:255',
            'specification' => 'nullable|string',
            'sizes' => 'nullable|string|max:255',
            'package' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
           'imagepath' => 'nullable|file|max:2048',
        ]);

        // if ($request->hasFile('imagepath')) {
        //     $path = $request->file('imagepath')->store('products', 'public');
        //     $validated['imagepath'] = $path;
        // }
        if ($request->hasFile('imagepath')) {
    $file = $request->file('imagepath');
    $filename = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('images/products'), $filename);
    $validated['imagepath'] = 'images/products/' . $filename;
}

        $product = Product::create($validated);
return redirect('/categories/' . $product->category_id)->with('success', 'تم إضافة المنتج بنجاح!');

    }
}




// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Product;

// class ProductController extends Controller
// {
//     public function index()
//     {
//         $products = Product::all(); // جِيب كل المنتجات من قاعدة البيانات
//         return view('products', compact('products'));
//     }

//     public function create()
// {
//     return view('products.create');
// }

// } 
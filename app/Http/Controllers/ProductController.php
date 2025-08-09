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
        return view('products.index', compact('products'));
    }
    public function show(Product $product)
{
    return view('products.show', compact('product'));
}

public function edit($id)
{
    $product = Product::findOrFail($id);
    $categories = Category::all();
    return view('products.edit', compact('product', 'categories'));
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'season' => 'nullable|string',
        'variety' => 'nullable|string',
        'sizes' => 'nullable|string',
        'package' => 'nullable|string',
        'category_id' => 'required|exists:categories,id',
        'specification' => 'nullable|string',
        'imagepath' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $data = $request->all();

    if ($request->hasFile('imagepath')) {
        $data['imagepath'] = $request->file('imagepath')->storeAs('products', 'public');
    }

    $product->update($data);

    return redirect()->route('dashboard')->with('success', 'Product Updated Successfully');
}



public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('dashboard')->with('success', 'Product has been Deleted');
}


    public function create()
    {
          $categories = Category::all();
        $products = Product::with('category')->get();
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

        if ($request->hasFile('imagepath')) {
    $file = $request->file('imagepath');
    $filename = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('images/products'), $filename);
    $validated['imagepath'] = 'images/products/' . $filename;
}

        $product = Product::create($validated);
return redirect('/categories/' . $product->category_id)->with('success', 'Product Added Successfully!');

    }
}




@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center p-4">
    <div class="bg-green-100 shadow-lg rounded-lg p-8 w-full max-w-xl">
        <h2 class="text-2xl font-bold mb-6 text-center text-green-600">Add New Product</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 ">
            @csrf

            <div>
                <label class="block font-medium mb-1">Product Name:</label>
                <input type="text" name="name" class="border p-2 w-full rounded" required>
            </div>

            <div>
                <label class="block font-medium mb-1">Season:</label>
                <input type="text" name="season" class="border p-2 w-full rounded" required>
            </div>

            <div>
                <label class="block font-medium mb-1">Variety:</label>
                <input type="text" name="variety" class="border p-2 w-full rounded" required>
            </div>

            <div>
                <label class="block font-medium mb-1">Specification:</label>
                <textarea name="specification" class="border p-2 w-full rounded" required></textarea>
            </div>

            <div>
                <label class="block font-medium mb-1">Sizes:</label>
                <input type="text" name="sizes" class="border p-2 w-full rounded" required>
            </div>

            <div>
                <label class="block font-medium mb-1">Packaging:</label>
                <input type="text" name="package" class="border p-2 w-full rounded" required>
            </div>

            <div>
                <label class="block font-medium mb-1">Category:</label>
                <select name="category_id" class="border p-2 w-full rounded" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-medium mb-1">Product Image:</label>
                <input type="file" name="imagepath" class="border p-2 w-full rounded" >
                {{-- <img src="{{ asset('storage/'.$product->imagepath) }}" alt="{{ $product->name }}"> --}}
 
            </div>

            <div class="text-center">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded">
                    Add Product
                </button>
            </div>
        </form>
    </div>
</div>
@endsection


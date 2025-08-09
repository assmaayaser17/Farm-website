@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<div class="">
<div class="flex justify-end">
     <a href="{{ route('team.create') }}" 
       class=" px-4 py-2 bg-green-600 text-white rounded-full hover:bg-green-700 ">
        Add New Employee
    </a>
</div>


<div class="shadow-lg rounded-lg p-8 mt-5 bg-green-100">
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

   {{-- Add products --}}
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 mb-10">
        @csrf

        <div class="flex gap-6">
            <div class="flex-1">
                <label class="block font-medium mb-1">Product Name:</label>
                <input type="text" name="name" class="border border-green-400  focus:outline-none focus:border-green-600  p-2 w-full rounded" required>
            </div>

            <div class="flex-1">
                <label class="block font-medium mb-1">Season:</label>
                <input type="text" name="season" class="border p-2 w-full rounded" required>
            </div>
        </div>

        <div class="flex gap-6">
            <div class="flex-1">
                <label class="block font-medium mb-1">Variety:</label>
                <input type="text" name="variety" class="border p-2 w-full rounded" >
            </div>

            <div class="flex-1">
                <label class="block font-medium mb-1">Sizes:</label>
                <input type="text" name="sizes" class="border p-2 w-full rounded" >
            </div>
        </div>

        <div class="flex gap-6">
            <div class="flex-1">
                <label class="block font-medium mb-1">Packaging:</label>
                <input type="text" name="package" class="border p-2 w-full rounded" >
            </div>

            <div class="flex-1">
                <label class="block font-medium mb-1">Category:</label>
                <select name="category_id" class="border p-2 w-full rounded" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div>
            <label class="block font-medium mb-1">Specification:</label>
            <textarea name="specification" class="border p-2 w-full rounded" rows="4" ></textarea>
        </div>

        <div>
            <label class="block font-medium mb-1">Product Image:</label>
            <input type="file" name="imagepath" class="border p-2 w-full rounded">
        </div>

        <div class="text-center">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded">
                Add Product
            </button>
        </div>
    </form>

   {{-- Update & Delete Products --}}
    <h2 class="text-xl font-bold mb-4 text-green-600">Current Products</h2>
    <table class="w-full  border rounded-lg shadow">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left text-green-600">Name</th>
                <th class="p-3 text-left text-green-600">Category</th>
                <th class="p-3 text-left text-green-600">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr class="border-b">
                <td class="p-3">{{ $product->name }}</td>
                <td class="p-3">{{ $product->category->name }}</td>
                <td class="p-3 flex gap-2">
                   {{-- Update --}}
                    <a href="{{ route('products.edit', $product->id) }}" class="bg-green-500 text-black px-3 py-1 rounded-full">Update</a>

                    {{-- Delete --}}
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure from deleting?!')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-rose-400 text-black px-3 py-1 rounded-full">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>


@endsection














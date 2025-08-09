@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class=" shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6 text-green-600">Update Product</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            {{-- Name --}}
            <div>
                <label class="block text-green-600 font-medium mb-2">Product Name</label>
                <input type="text" name="name" value="{{ old('name', $product->name) }}"
                    class="w-full border p-2 rounded" required>
            </div>

            {{-- Season --}}
            <div>
                <label class="block font-medium mb-2 text-green-600">Season</label>
                <input type="text" name="season" value="{{ old('season', $product->season) }}"
                    class="w-full border p-2 rounded" required>
            </div>

            {{-- Type --}}
            <div>
                <label class="block text-green-600 font-medium mb-2">Variety</label>
                <input type="text" name="variety" value="{{ old('variety', $product->variety) }}"
                    class="w-full border p-2 rounded" required>
            </div>

           {{-- Size --}}
            <div>
                <label class="block text-green-600 font-medium mb-2">Sizes</label>
                <input type="text" name="sizes" value="{{ old('sizes', $product->sizes) }}"
                    class="w-full border p-2 rounded" >
            </div>

            {{-- Package --}}
            <div>
                <label class="block text-green-600 font-medium mb-2">Packaging</label>
                <input type="text" name="package" value="{{ old('package', $product->package) }}"
                    class="w-full border p-2 rounded">
            </div>

            {{-- Categories --}}
            <div>
                <label class="block text-green-600 font-medium mb-2">Category</label>
                <select name="category_id" class="w-full border p-2 rounded" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Description --}}
            <div>
                <label class="block text-green-600 font-medium mb-2">Specification</label>
                <textarea name="specification" class="w-full border p-2 rounded" rows="4" >{{ old('specification', $product->specification) }}</textarea>
            </div>

           {{-- Image --}}
            <div>
                <label class="block text-green-600 font-medium mb-2">Image</label>
                <input type="file" name="imagepath" class="w-full border p-2 rounded">
                @if($product->imagepath)
                    <div class="mt-3">
                        <p class="text-green-600 mb-1">Current Image:</p>
                        <img src="{{ asset('storage/'.$product->imagepath) }}" alt="Current Image" class="w-32 rounded shadow">
                    </div>
                @endif
            </div>

           {{-- Buttons --}}
            <div class="flex gap-6 items-center mt-6">
                <a href="{{ route('dashboard') }}"
                    class="px-4 py-2 bg-green-600 text-white rounded hover:bg-gray-400 transition">
                    Cancel
                </a>
                <button type="submit"
                    class="px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>
@endsection



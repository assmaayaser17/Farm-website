@extends('layouts.master')

@section('content')
<section class="min-h-screen bg-gray-100 p-10">
    <h2 class="text-3xl font-bold mb-8 text-center text-green-700">{{ $category->name }} Products</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($category->products as $product)
            <a href="{{ route('products.show', $product->id) }}" class="block bg-white rounded-lg shadow hover:shadow-lg transition p-4 text-center">
                @if($product->imagepath)
                    <img src="{{ asset($product->imagepath) }}" alt="{{ $product->name }}" 
                         class="w-48 h-48 object-cover mx-auto rounded-full mb-2">
                @else
                    <div class="w-48 h-48 bg-gray-200 rounded-full flex items-center justify-center text-gray-400 mx-auto mb-2">
                        No Image
                    </div>
                @endif
                <h3 class="text-xl font-semibold text-gray-800">{{ $product->name }}</h3>
            </a>
        @endforeach
    </div>
</section>
@endsection


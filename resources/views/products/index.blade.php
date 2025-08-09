@extends('layouts.master')

@section('content')
<section class="min-h-screen bg-[url('/images/products/servbg.jpg')] bg-cover bg-center px-4 py-16 relative">
    <div class="absolute inset-0 bg-black/50 z-0"></div>

    <div class="relative z-10 max-w-6xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold text-center text-green-100 mt-8">
            {{ isset($category) ? 'Products in ' . $category->name : 'All Products' }}
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
            @foreach ($products as $product)
                <div class="bg-white/30 backdrop-blur-md rounded-xl shadow-md p-6 text-center">
                    @if($product->imagepath)
                        <a href="{{ route('products.show', $product) }}">
                            <img src="{{ asset($product->imagepath) }}" 
                                alt="{{ $product->name }}" 
                                class="w-52 h-52 rounded-full mx-auto mb-4 object-cover border border-gray-300 shadow-sm">
                        </a>
                    @endif

                    <h3 class="text-xl font-bold text-white mb-2">
                        <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                    </h3>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

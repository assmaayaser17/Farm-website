@extends('layouts.master')

@section('content')
<section class="min-h-screen bg-gray-50 p-10">

    <div class="flex flex-col md:flex-row-reverse md:items-start gap-8 bg-white shadow-lg rounded-lg p-6 mt-20 ml-10 max-w-5xl">
        
        {{-- Image --}}
        @if($product->imagepath)
            <img src="{{ asset($product->imagepath) }}" 
                 alt="{{ $product->name }}" 
                 class="w-96 h-96 object-cover rounded shadow">
        @endif

        {{-- Text --}}
        <div class="w-full">
            <h2 class="text-3xl font-bold mb-4 text-green-600">{{ $product->name }}</h2>
            <div class="flex flex-col gap-4 text-gray-700 space-y-3 text-lg">
                @if($product->season)
                    <p><strong class="text-green-600">Season:</strong> {{ $product->season }}</p>
                @endif
                @if($product->variety)
                    <p><strong class="text-green-600">Variety:</strong> {{ $product->variety }}</p>
                @endif
                @if($product->specification)
                    <p><strong class="text-green-600">Specification:</strong> {{ $product->specification ?? 'No specification available.' }}</p>
                @endif
                @if($product->sizes)
                    <p><strong class="text-green-600">Sizes:</strong> {{ $product->sizes }}</p>
                @endif
                @if($product->package)
                    <p><strong class="text-green-600">Package:</strong> {{ $product->package }}</p>
                @endif

                {{-- Back button --}}
                <div class="mt-10">
                    <a href="{{ route('products.index') }}" 
                       class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                         Back to Products
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection


@extends('layouts.master')

@section('content')
<body>

<section class="min-h-screen bg-[url('/images/products/servbg.jpg')] bg-cover bg-center px-4 py-16 relative">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/50 z-0"></div>

  <div class="relative z-10 max-w-6xl mx-auto">
    <!-- Title -->
    <h2 class="text-4xl md:text-5xl font-bold text-center text-green-100 mt-8">Products</h2>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
        @foreach ($category->products as $product)
            <div class="bg-white/30 backdrop-blur-md rounded-xl shadow-md p-6 text-center">
                         @if($product->imagepath)
                    <img src="{{ asset($product->imagepath) }}" 
                         alt="{{ $product->name }}" 
                         class="w-52 h-52 rounded-full mx-auto mb-4 object-cover border border-gray-300 shadow-sm">
                @endif

                <h3 class="text-xl font-bold text-white mb-2">{{ $product->name }}</h3>

                <div class="text-base text-gray-300 space-y-1">
                    @if($product->season)
                        <p><span class="font-semibold">Season:</span> {{ $product->season }}</p>
                    @endif
                    @if($product->variety)
                        <p><span class="font-semibold">Variety:</span> {{ $product->variety }}</p>
                    @endif
                    @if($product->specification)
                        <p><span class="font-semibold">Specification:</span> {{ $product->specification }}</p>
                    @endif
                    @if($product->sizes)
                        <p><span class="font-semibold">Sizes:</span> {{ $product->sizes }}</p>
                    @endif
                    @if($product->package)
                        <p><span class="font-semibold">Package:</span> {{ $product->package }}</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
  </div>
</section>

</body>
@endsection


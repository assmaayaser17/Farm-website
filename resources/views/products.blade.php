@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-10">

    <h1 class="text-4xl font-bold text-center text-green-600 underline underline-offset-4 decoration-2 decoration-green-600 m-7">
        Products in {{ $category->name }}
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($category->products as $product)
            <div class="bg-gray-100 flex flex-col justify-center items-center shadow-md p-4 rounded-md hover:shadow-lg transition">
                @if($product->imagepath)
                    <img src="{{ asset($product->imagepath) }}" alt="{{ $product->name }}" class="w-50 h-50 object-cover rounded mb-3">
                @endif

                <h2 class="font-semibold text-green-600 text-2xl mb-3 underline underline-offset-4 decoration-2 decoration-green-600">
                    {{ $product->name }}
                </h2>

                <div class="text-md font-medium text-black space-y-1">
                    @if($product->season)
                        <p><span class="font-medium">Season:</span> {{ $product->season }}</p>
                    @endif
                    @if($product->variety)
                        <p><span class="font-medium">Variety:</span> {{ $product->variety }}</p>
                    @endif
                    @if($product->specification)
                        <p><span class="font-medium">Specification:</span> {{ $product->specification }}</p>
                    @endif
                    @if($product->sizes)
                        <p><span class="font-medium">Sizes:</span> {{ $product->sizes }}</p>
                    @endif
                    @if($product->package)
                        <p><span class="font-medium">Package:</span> {{ $product->package }}</p>
                    @endif
                </div>
            </div>
        @endforeach
</div>

</body>
</html>


@endsection
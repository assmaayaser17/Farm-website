@extends('layouts.master')

@section('content')


  {{-- Categories Section --}}
  @php
    $bgColors = ['bg-green-100', 'bg-blue-100', 'bg-yellow-100', 'bg-pink-100', 'bg-purple-100', 'bg-orange-100'];
  @endphp
 <div class="container mx-auto px-4 py-8 mt-16">
    <h1 class="text-3xl font-bold mb-8 text-center text-green-700">{{ __('messages.our products') }}</h1>
    <div class="flex flex-wrap justify-center gap-6">
        @foreach ($categories as $index => $category)
            <div class="flex items-center flex-col lg:flex-row-reverse gap-6 rounded-full border border-green-400 shadow-md hover:shadow-lg transition duration-300 p-6 {{ $bgColors[$index % count($bgColors)] }} w-fit max-w-full">
                @if($category->imagepath)
                    <img src="{{ asset($category->imagepath) }}" alt="{{ $category->name }}"
                         class="w-28 h-28 object-cover rounded-full shadow" />
                @else
                    <div class="w-28 h-28 bg-gray-200 rounded-full flex items-center justify-center text-gray-400 text-sm">
                        No Image
                    </div>
                @endif

                <div class="flex flex-col items-center lg:items-start text-center lg:text-left gap-2">
                    <h2 class="text-2xl font-bold text-green-700">{{ $category->name }}</h2>
                    <p class="text-gray-500 text-base font-normal">{{ __('messages.categories_subtitle') }}</p>
                   
                    <a href="{{ route('categories.show', $category->id) }}"
   class="mt-2 inline-block bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-3xl transition w-fit">
    {{ __('messages.shop_now') }}
</a>
</div>
</div>
@endforeach
</div>
</div>

@endsection
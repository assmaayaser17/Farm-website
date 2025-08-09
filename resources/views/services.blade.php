@extends('layouts.master')

@section('content')
<body>

<section class="min-h-screen bg-[url('/images/products/servbg.jpg')] bg-cover bg-center px-4 py-16 relative">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/50 z-0"></div>

  <div class="relative z-10 max-w-6xl mx-auto">
    <!-- Title -->
    <h2 class="text-4xl md:text-5xl font-bold text-center text-green-100 mt-8">{{ __('messages.our_services') }}</h2>
    <p class="text-center text-gray-200 max-w-2xl mx-auto mt-8">
      {{ __('messages.services_intro') }}
    </p>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
      <!-- Card 1 -->
      <div class="bg-white/30 backdrop-blur-md rounded-xl shadow-md p-6 text-center">
        <img src="/images/products/farmimg.jpg" alt="farm" class="w-52 h-52 rounded-full mx-auto mb-4">
        <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.our_farms') }}</h3>
        <p class=" text-base text-gray-300">
          {{ __('messages.our_farms_desc') }}
        </p>
      </div>

      <!-- Card 2 -->
      <div class="bg-white/30 backdrop-blur-md rounded-xl shadow-md p-6 text-center">
        <img src="/images/products/productsimg.jpg" alt="Export" class="w-52 h-52 rounded-full mx-auto mb-4">
        <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.our_products') }}</h3>
        <p class=" text-base text-gray-300">
          {{ __('messages.our_products_desc') }}
        </p>
      </div>

      <!-- Card 3 -->
      <div class="bg-white/30 backdrop-blur-md rounded-xl shadow-md p-6 text-center">
        <img src="/images/products/quality.jpg" alt="Traceability" class="w-52 h-52 rounded-full mx-auto mb-4">
        <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.quality') }}</h3>
        <p class="text-base text-gray-300">
          {{ __('messages.quality_desc') }}
        </p>
      </div>

      <!-- Card 4 -->
      <div class="bg-white/30 backdrop-blur-md rounded-xl shadow-md p-6 text-center">
        <img src="/images/products/logistic.jpg" alt="Farms" class="w-52 h-52 rounded-full mx-auto mb-4">
        <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.logistic') }}</h3>
        <p class="text-base text-gray-300">
          {{ __('messages.logistic_desc') }}
        </p>
      </div>

      <!-- Card 5 -->
      <div class="bg-white/30 backdrop-blur-md rounded-xl shadow-md p-6 text-center">
        <img src="/images/products/supply.jpg" alt="Packaging" class="w-52 h-52 rounded-full  mx-auto mb-4">
        <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.contracts_supply') }}</h3>
        <p class="text-base text-gray-300">
          {{ __('messages.contracts_supply_desc') }}
        </p>
      </div>

  </div>
</section>
</body>

@endsection

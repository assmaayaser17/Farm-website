{{-- @extends('layouts.master')


@section('content')
<body>

<section class="min-h-screen bg-[url('/images/products/servbg.jpg')] bg-cover bg-center px-4 py-16 relative">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/50 z-0"></div>

  <div class="relative z-10 max-w-6xl mx-auto">
    <!-- Title -->
    <h2 class="text-4xl md:text-5xl font-bold text-center text-green-100 mt-8">Our Services</h2>
    <p class="text-center text-gray-200 max-w-2xl mx-auto mt-8">
     Cultivation and packaging of products according to the highest quality standardsDirect export to global markets with the latest cooling and packaging technologiesFull traceability of the supply chain to ensure products arrive fresh and on time
    </p>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
      <!-- Card -->
      <div class="bg-white/30 backdrop-blur-md rounded-xl shadow-md p-6 text-center">
        <img src="/images/products/farmimg.jpg" alt="farm" class="w-52 h-52 rounded-full mx-auto mb-4">
        <h3 class="text-xl font-bold text-white mb-2">Our Farms</h3>
        <p class=" text-base text-gray-300">
          We are keen to prove the quality of our management system to our clients base. In addition to our farms, we have a very comprehensive and trustworthy supplying base to ensure a year-round supply of premium Egyptian fruits and vegetables.
        </p>
      </div>

      <!-- Card -->
      <div class="bg-white/30 backdrop-blur-md rounded-xl shadow-md p-6 text-center">
        <img src="/images/products/productsimg.jpg" alt="Export" class="w-52 h-52 rounded-full mx-auto mb-4">
        <h3 class="text-xl font-bold text-white mb-2">Our Products</h3>
        <p class=" text-base text-gray-300">
          Every successful journey starts with a single step, for Greenya EgyptEgypt, it began with its human elements who were able to turn that single step into a great project that started in 2002, flourishing and establishing itself as a remarkable producer in the market of fresh herbs, fruits and vegetables. 
        </p>
      </div>

      <!-- Card -->
      <div class="bg-white/30 backdrop-blur-md rounded-xl shadow-md p-6 text-center">
        <img src="/images/products/quality.jpg" alt="Traceability" class="w-52 h-52 rounded-full mx-auto mb-4">
        <h3 class="text-xl font-bold text-white mb-2">Quality</h3>
        <p class="text-base text-gray-300">
          Careful selection of agricultural crops and inspection of products for pesticide residues to provide safe and healthy food.
          Sorting products through a specialized team in sorting and packaging management to meet our clients' requests according to their wishes and requirements.
        </p>
      </div>

      <!-- Card -->
      <div class="bg-white/30 backdrop-blur-md rounded-xl shadow-md p-6 text-center">
        <img src="/images/products/logistic.jpg" alt="Farms" class="w-52 h-52 rounded-full mx-auto mb-4">
        <h3 class="text-xl font-bold text-white mb-2">Logistic</h3>
        <p class="text-base text-gray-300">
          
Our logistic operations run through a cycle of planning, implementing, and controlling procedures for an efficient and effective transportation and storage of goods including services, and related information from the point of origin to the point of consumption in order to meet our customer requirements. 
        </p>
      </div>

      <!-- Card -->
      <div class="bg-white/30 backdrop-blur-md rounded-xl shadow-md p-6 text-center">
        <img src="/images/products/supply.jpg" alt="Packaging" class="w-52 h-52 rounded-full  mx-auto mb-4">
        <h3 class="text-xl font-bold text-white mb-2">contracts & supply</h3>
        <p class="text-base text-gray-300">
          Contracting and Exporting with greenya Egypt has extensive experience in the cultivation and export of the finest fresh vegetables and fruits. From our own farms directly to your global markets, we offer you products of exceptional quality and unmatched freshness, harvested and packaged with utmost care to reach you in the best condition.
           
        </p>
      </div>

  </div>
</section>
</body>



@endsection --}}

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

@extends('layouts.master')

@section('content')

<head>
  <title>{{ __('messages.about_us') }} | Greenya</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/@fortawesome/fontawesome-free/css/all.css" rel="stylesheet">
  <style>
    html, body {
      margin: 0;
      padding: 0;
      min-height: 100%;
      background-image: url('{{ asset('images/products/aboutbg.jpg') }}');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
  </style>
</head>

<body class="text-gray-800">

  {{-- About Section --}}
  <section class="relative py-32 px-4 ">
    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black/20 z-0"></div>

    {{-- Title --}}
    <div class="mt-8 py-5 text-4xl font-bold text-center text-white/70">
        <h2>{{ __('messages.about_us') }}</h2>
    </div>

    {{-- Content Cards --}}
    <div class="relative max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 z-10">
      {{-- Vision --}}
      <div class="bg-white/40 backdrop-blur-sm p-6 rounded-xl shadow-lg">
        <div class="flex items-start gap-4">
          <i class="fas fa-eye text-3xl text-green-800"></i>
          <div>
            <h2 class="text-2xl font-bold mb-2 text-green-800">{{ __('messages.our_vision') }}</h2>
            <p class="text-green-800">{{ __('messages.our_vision_desc') }}</p>
          </div>
        </div>
      </div>

      {{-- Mission --}}
      <div class="bg-white/40 backdrop-blur-sm p-6 rounded-xl shadow-lg">
        <div class="flex items-start gap-4">
          <i class="fas fa-bullseye text-3xl text-green-800"></i>
          <div>
            <h2 class="text-2xl font-bold mb-2 text-green-800">{{ __('messages.our_mission') }}</h2>
            <p class="text-green-800">{{ __('messages.our_mission_desc') }}</p>
          </div>
        </div>
      </div>

      {{-- Customers --}}
      <div class="bg-white/40 backdrop-blur-sm p-6 rounded-xl shadow-lg">
        <div class="flex items-start gap-4">
          <i class="fas fa-users text-3xl text-green-800"></i>
          <div>
            <h2 class="text-2xl font-bold mb-2 text-green-800">{{ __('messages.our_customers') }}</h2>
            <p class="text-green-800">{{ __('messages.our_customers_desc') }}</p>
          </div>
        </div>
      </div>

      {{-- Values --}}
      <div class="bg-white/40 backdrop-blur-sm p-6 rounded-xl shadow-lg">
        <div class="flex items-start gap-4">
          <i class="fas fa-heart text-3xl text-green-800"></i>
          <div>
            <h2 class="text-2xl font-bold mb-2 text-green-800">{{ __('messages.our_values') }}</h2>
            <ul class="list-disc list-inside text-green-800 space-y-1">
              <li><strong>{{ __('messages.excellence') }}:</strong> {{ __('messages.excellence_desc') }}</li>
              <li><strong>{{ __('messages.quality') }}:</strong> {{ __('messages.quality_desc') }}</li>
              <li><strong>{{ __('messages.achievement') }}:</strong> {{ __('messages.achievement_desc') }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
@endsection


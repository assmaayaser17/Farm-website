@extends('layouts.master')

@section('content')

<head>
  <title>Categories</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-m...==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    .bg-slider {
      background-size: cover;
      background-position: center;
      transition: opacity 1s ease-in-out;
    }
  </style>
</head>

<section>
  {{-- Hero section --}}
  <div class="relative w-full min-h-screen sm:h-screen bg-center bg-cover">
    <!-- Background Slider -->
    <div id="slider" class="absolute inset-0 z-0">
        @foreach(['background1.jpg', 'background2.jpg', 'background3.jpg'] as $i => $img)
            <div class="bg-slider absolute inset-0 transition-opacity duration-1000 {{ $i === 0 ? 'opacity-100' : 'opacity-0' }}"
                 style="background-image: url('{{ asset('images/products/' . $img) }}');">
            </div>
        @endforeach
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Hero Content -->
    <div class="relative z-10 flex  items-center  h-full px-4 sm:px-8 text-white " dir="rtl">
      <div class="flex flex-col gap-6 max-w-xl p-4 sm:p-6 md:pt-28 text-right items-end" dir="ltr">
    <h3 class="text-[#00d084] text-2xl sm:text-4xl font-extrabold uppercase leading-tight">
        <span class="text-[#00D084]">{{ __('messages.greenya') }}</span> {{ __('messages.greenya_egypt_export') }}
    </h3>

    <h1 class="text-2xl sm:text-4xl md:text-5xl font-bold leading-tight">
        {!! __('messages.your_source') !!}
    </h1>

    <p class="text-lg sm:text-xl font-medium leading-relaxed">
        {{ __('messages.greenya_desc') }}
    </p>

    <!-- Buttons -->
    <div class="flex gap-4 flex-wrap justify-end w-full">
        <a href="{{ url('/views.products') }}"
           class="bg-white hover:bg-[#00D084] hover:text-white px-6 sm:px-10 py-2 sm:py-3 rounded-3xl text-[#00D084] text-base font-semibold shadow-md transition">
            {{ __('messages.watch_video') }}
        </a>

        <a href="{{ url('/contact') }}"
           class="bg-[#00D084] text-white border border-green-500 hover:bg-black hover:text-[#00D084] px-6 sm:px-10 py-2 sm:py-3 rounded-3xl text-base font-semibold shadow-md transition">
            {{ __('messages.contact_us') }}
        </a>
    </div>

    <!-- Social Icons -->
    <div class="flex items-center justify-end gap-10 mt-4 w-full">
        <a href="https://www.facebook.com/your-page" target="_blank"
           class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 hover:bg-[#00D084] transition text-white hover:text-white">
            <i class="fab fa-facebook-f"></i>
        </a>

        <a href="https://www.instagram.com/your-page" target="_blank"
           class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 hover:bg-[#00D084] transition text-white hover:text-white">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="https://www.linkedin.com/in/your-page" target="_blank"
           class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 hover:bg-[#00D084] transition text-white hover:text-white">
            <i class="fab fa-linkedin-in"></i>
        </a>

        <a href="https://maps.google.com/?q=your-location" target="_blank"
           class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 hover:bg-[#00D084] transition text-white hover:text-white">
            <i class="fas fa-map-marker-alt"></i>
        </a>
    </div>
  </div>
  </div>
  </div>
  <script>
    const slides = document.querySelectorAll("#slider > div");
    let current = 0;
    setInterval(() => {
        slides[current].classList.remove("opacity-100");
        slides[current].classList.add("opacity-0");
        current = (current + 1) % slides.length;
        slides[current].classList.remove("opacity-0");
        slides[current].classList.add("opacity-100");
    }, 3000);
  </script>

   {{-- About Section --}}
   <div id="About" class="py-16 px-4 sm:px-8 flex justify-center">
    <div class="container max-w-6xl mx-auto bg-gray-100 border border-gray-300 shadow-xl rounded-xl p-10 flex flex-col md:flex-row items-center gap-8">
        
       {{-- Text --}}
        <div class="w-full md:w-2/3 flex flex-col gap-6 text-center md:text-left" data-aos="fade-right">
            @if($about)
  
            {{-- Title --}}
            <h2 class="text-4xl sm:text-5xl font-bold text-green-600 mb-4">
                {{ $about->title }}
            </h2>

            {{-- Intro --}}
            <p class="text-gray-700 text-base leading-relaxed">
                <span class="text-green-600 text-xl font-bold">Greenya</span> 
                {{ $about->intro }}
            </p>

            {{--  Details --}}
            <p class="text-gray-700 text-base leading-relaxed">
                {{ $about->details }}
            </p>
            @endif

            {{-- Admin --}}
            <div class="flex gap-4">

                {{-- Read more --}}
            <a href="{{ route('about') }}"
               class="w-fit bg-yellow-400 hover:bg-yellow-500 text-green-600 font-semibold px-6 py-2 rounded-lg transition duration-200">
                Read More
            </a>
                  @auth
                @if(auth()->user()->is_admin)
                    <a href="{{ route('abouts.edit', $about->id) }}" 
                       class="bg-green-600 hover:bg-yellow-500 w-28 flex justify-center items-center  text-white px-4 py-2 rounded">
                        Update
                    </a>
                @endif
            @endauth


            </div>
        
        </div>

        {{-- Image --}}
        <div class="w-full md:w-1/3 flex justify-center" data-aos="fade-left">
            {{-- @if($about->image) --}}
            @if($about && $about->image)
                <img src="{{ asset('storage/'.$about->image) }}" 
                     alt="{{ $about->title }}"
                     class="w-60 h-60 rounded-full shadow-lg object-cover" />
            @else
                <img src="{{ asset('images/products/apple.jpg') }}" 
                     alt="Default Image"
                     class="w-60 h-60 rounded-full shadow-lg object-cover" />
            @endif
        </div>
    </div>
   </div>
 
  {{-- Services Section --}}
   <div id="services" class="py-16 px-4 sm:px-8 flex justify-center">
   <div class="container max-w-6xl mx-auto bg-gray-100 border border-gray-300 rounded-xl shadow-2xl p-10 flex flex-col md:flex-row items-center gap-8">

    {{-- Image --}}
    <div class="w-full md:w-1/3 flex justify-center items-center" data-aos="fade-right">
      {{-- @if($service->image) --}}
      @if($service && $service->image)
        <img src="{{ asset('storage/'.$service->image) }}" alt="Our Services" class="w-60 h-60 object-cover rounded-full shadow-lg">
      @else
        <img src="{{ asset('images/products/avocato.jpg') }}" alt="Default Image" class="w-60 h-60 object-cover rounded-full shadow-lg">
      @endif
    </div>

    {{-- Text Content --}}
    <div class="w-full md:w-2/3 flex flex-col gap-6 text-center md:text-left" data-aos="fade-left">
      
      {{-- Title --}}
      @if($service)
      <h2 class="text-4xl sm:text-5xl font-bold text-green-600 mb-4 uppercase">
        {{ $service->core_services_title }}
      </h2>

      {{-- Core Services --}}
      <div>
        <h4 class="text-2xl font-semibold text-green-600 mb-1">{{ $service->core_services_title }}</h4>
        <p class="text-gray-700 text-base leading-relaxed">{!! $service->core_services_content !!}</p>
      </div>

      {{-- Logistics --}}
      <div>
        <h4 class="text-2xl font-semibold text-green-600 mb-1">{{ $service->logistics_title }}</h4>
        <p class="text-gray-700 text-base leading-relaxed">{{ $service->logistics_content }}</p>
      </div>
      @endif

      {{-- Buttons --}}
      <div class="flex gap-5 mt-2 justify-center md:justify-start">
        <a href="{{ route('services') }}"
           class="w-fit bg-yellow-400 hover:bg-yellow-500 text-green-600 font-semibold px-6 py-2 rounded-lg transition duration-200">
          Read More
        </a>

        @auth
          @if(auth()->user()->is_admin)
            <a href="{{ route('services.edit', $service->id) }}"
               class="bg-green-600 hover:bg-yellow-500 text-white px-4 py-2 rounded w-28 flex justify-center items-center">
              Update
            </a>
          @endif
        @endauth
      </div>
    </div>

   </div>
   </div>

  {{-- Export Section --}}
  <div class="py-16 px-4 sm:px-8 flex justify-center ">
  <div class="container max-w-6xl mx-auto  bg-gray-50 border border-gray-300 rounded-xl shadow-2xl p-10 flex flex-col md:flex-row items-center gap-8">

    {{-- Image --}}
    <div class="w-full md:w-1/3 flex justify-center items-center" data-aos="fade-right">
      @if($export && $export->image)
        <img src="{{ asset('storage/'.$export->image) }}" alt="{{ $export->title }}" class="w-60 h-60 object-cover rounded-full shadow-lg">
      @else
        <img src="{{ asset('images/products/export.jpg') }}" alt="Greenya Egypt" class="w-60 h-60 object-cover rounded-full shadow-lg">
      @endif
    </div>

    {{-- Text --}}
    <div class="w-full md:w-2/3 flex flex-col gap-6 text-center md:text-left text-gray-700" data-aos="fade-left">
      <h2 class="text-4xl sm:text-5xl font-bold text-green-600 mb-4 uppercase">
        {{ $export->title ?? 'Greenya Egypt for Exporting' }}
      </h2>

      <p class="text-base leading-relaxed">
        {!! $export->content ?? 'Default content here' !!}
      </p>

      {{-- Buttons --}}
      <div class="flex gap-5 justify-center md:justify-start mt-2">
        <a href="{{ url('/contact') }}"
           class="bg-yellow-400 hover:bg-yellow-500 text-green-600 font-semibold px-6 py-2 rounded-lg transition duration-200">
          Contact Us
        </a>

        @auth
          @if(auth()->user()->is_admin)
            <a href="{{ route('export.edit') }}"
               class="bg-green-600 hover:bg-yellow-500 text-white font-semibold px-6 py-2 rounded-lg transition duration-200">
              Update
            </a>
          @endif
        @endauth
      </div>
    </div>

  </div>
  </div>

  {{-- Categories Section --}}
  @php
    $bgColors = ['bg-green-100', 'bg-blue-100', 'bg-yellow-100', 'bg-pink-100', 'bg-purple-100', 'bg-orange-100'];
  @endphp
   <div class="container bg-green-100 mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8 text-center text-green-700">{{ __('messages.categories_title') }}</h1>
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
                    <a href="{{ url('/categories/' . $category->id) }}"
                       class="mt-2 inline-block bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-3xl transition w-fit">
                        {{ __('messages.shop_now') }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
   </div>

   {{-- Certifacates Section --}}
   <div class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold text-center text-green-700 mb-10">Our Certificates</h2>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 place-items-center">
      <!-- Certificate 1 -->
      <img src="/images/products/cert1.jpg" alt="Certificate 1" class="h-40 rounded-full object-contain" />

      <!-- Certificate 2 -->
      <img src="/images/products/cert2.jpg" alt="Certificate 2" class="h-40  rounded-full object-contain" />

      <!-- Certificate 3 -->
      <img src="/images/products/cert3.jpg" alt="Certificate 3" class="h-40  rounded-full object-contain" />

      <!-- Certificate 4 -->
      <img src="/images/products/cert4.jpg" alt="Certificate 4" class="h-40  rounded-full object-contain" />

      <!-- Certificate 5 -->
      <img src="/images/products/cert5.jpg" alt="Certificate 5" class="h-40  rounded-full object-contain" />
    </div>
  </div>
</div>

   {{-- Team section  --}}
   <div id="team" class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-8 text-center text-green-600">Meet Our Team</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      @foreach($employees as $employee)
        <div class="bg-gray-100 rounded-2xl shadow-md p-4 flex flex-col items-center text-center hover:shadow-lg transition-shadow">
            <img src="{{ $employee->image ? asset('storage/'.$employee->image) : 'https://via.placeholder.com/150' }}" 
                alt="{{ $employee->name }}" 
                class="w-24 h-24 border border-green-500 rounded-full mb-4 object-cover">
            <h3 class="text-xl font-semibold">{{ $employee->name }}</h3>
            <p class="text-gray-500">{{ $employee->role }}</p>
            <a href="https://wa.me/{{ $employee->phone }}" target="_blank" 
                class="mt-3 text-green-500 text-2xl hover:text-green-600">
                <i class="fab fa-whatsapp"></i>
            </a>

           {{-- Update&&delete --}}
            @auth
                @if(auth()->user()->is_admin) 
                    <div class="mt-3 flex gap-2">
                        <a href="{{ route('team.edit', $employee->id) }}" 
                            class="bg-green-500 text-white px-3 py-1 rounded-full hover:bg-grren-600">Update</a>

                        <form action="{{ route('team.destroy', $employee->id) }}" method="POST" 
                              onsubmit="return confirm('Are you sure from deleting?!')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-rose-500 text-white px-3 py-1 rounded-full hover:bg-rose-400">Delete</button>
                        </form>
                    </div>
                @endif
            @endauth
        </div>
      @endforeach
    </div>
   </div>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: false
    });
  </script>
</section>
@endsection
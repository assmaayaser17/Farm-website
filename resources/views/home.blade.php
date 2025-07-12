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
  {{-- Hero Section --}}
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
    <div class="relative z-10 flex items-center justify-end h-full px-4 sm:px-8 text-white text-right">
      <div class="flex flex-col gap-6 max-w-xl p-4 sm:p-6 md:pt-28">
        <h3 class="text-[#00d084] text-2xl sm:text-4xl font-extrabold uppercase leading-tight">
          <span class="text-[#00D084]">Greenya</span> Egypt For Export
        </h3>

        <h1 class="text-2xl sm:text-4xl md:text-5xl font-bold leading-tight">
          Your Source for Fresh <span class="text-green-400">Organic</span> Products
        </h1>

        <p class="text-lg sm:text-xl font-medium leading-relaxed">
          Greenya Egypt for Export is an Egyptian owned company dealing with growing, packing and exporting fresh fruits, vegetables
        </p>

        <!-- Buttons -->
        <div class="flex gap-4 flex-wrap justify-end">
          <a href="{{ url('/views.products') }}"
             class="bg-white hover:bg-[#00D084] hover:text-white px-6 sm:px-10 py-2 sm:py-3 rounded-3xl text-[#00D084] text-base font-semibold shadow-md transition">
            Watch Video
          </a>

          <a href="{{ url('/contact') }}"
             class="bg-[#00D084] text-white border border-green-500 hover:bg-black hover:text-[#00D084] px-6 sm:px-10 py-2 sm:py-3 rounded-3xl text-base font-semibold shadow-md transition">
            Contact Us
          </a>
        </div>

        <!-- Social Icons -->
        <div class="flex items-center justify-end gap-10 mt-4">
          <a href="https://www.facebook.com/your-page" target="_blank"
             class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 hover:bg-[#00D084]  transition text-white hover:text-white">
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
      <div class="w-full md:w-2/3 flex flex-col gap-6 text-center md:text-left" data-aos="fade-right">
        <h2 class="text-4xl sm:text-5xl font-bold text-green-600 mb-4">About Us</h2>
        <p class="text-gray-700 text-base leading-relaxed">
          <span class="text-green-600 text-xl font-bold">Greenya</span> Egypt is a company owned by Egyptians that was established in 2002 (with its own farms) and processes and exports fresh fruits, vegetables, and herbs.
        </p>
        <p class="text-gray-700 text-base leading-relaxed">
          <span class="text-green-600 text-xl font-bold">Greenya</span> owns 3 farms in four locations in Egypt, certified by:
          Global G.A.P, ISO9001, and SEDEX. We are committed to providing high-quality and competitive products through an experienced team, strict ISO and HACCP standards.
        </p>
        <a href="{{ route('about') }}"
           class="w-fit bg-yellow-400 hover:bg-yellow-500 text-green-600 font-semibold px-6 py-2 rounded-lg transition duration-200">
          Read More..
        </a>
      </div>

      <div class="w-full md:w-1/3 flex justify-center" data-aos="fade-left">
        <img src="{{ asset('images/products/apple.jpg') }}" alt="About Greenya Egypt"
             class="w-60 h-60 rounded-full shadow-lg object-cover" />
      </div>
    </div>
  </div>

  {{-- Services Section --}}
  <div id="services" class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-gray-100  border border-gray-200 shadow-lg rounded-lg overflow-hidden flex flex-col lg:flex-row items-center">
        <div class="lg:w-1/3 flex justify-center items-center p-6" data-aos="fade-right">
          <img src="{{ asset('images/products/avocato.jpg') }}" alt="Our Services"
               class="w-52 h-52 object-cover rounded-full shadow-md">
        </div>

        <div class="lg:w-2/3 w-full p-8" data-aos="fade-left">
          <h2 class="text-4xl font-bold text-green-600 mb-4 uppercase">Services</h2>
          <div class="flex flex-col gap-4 text-gray-700">
            <div>
              <h4 class="text-2xl font-semibold text-green-600 mb-1">Our Core Services</h4>
              <p class="text-base leading-relaxed">
                Cultivation and packaging of products according to the highest quality standards.<br>
                Direct export to global markets with the latest cooling and packaging technologies.<br>
                Full traceability of the supply chain to ensure products arrive fresh and on time.
              </p>
            </div>
            <div>
              <h4 class="text-2xl font-semibold text-green-600 mb-1">Logistics</h4>
              <p class="text-base leading-relaxed">
                Our logistic operations follow strict planning and tracking to ensure timely and efficient transportation.
                We partner with trusted airlines like Fly Emirates, EgyptAir, Etihad, and major sea shipping companies like Maersk, CMA, MSC.
              </p>
            </div>
            <a href="{{ route('services') }}"
               class="w-fit bg-yellow-400 hover:bg-yellow-500 text-green-600 font-semibold px-6 py-2 rounded-lg transition duration-200">
              Read More..
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Categories Section --}}
  @php
    $bgColors = ['bg-green-100', 'bg-blue-100', 'bg-yellow-100', 'bg-pink-100', 'bg-purple-100', 'bg-orange-100'];
  @endphp

  <div class="container bg-green-100 mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8 text-center text-green-700">Categories</h1>
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
            <p class="text-gray-500 text-base font-normal">We Have Fresh Products</p>
            <a href="{{ url('/categories/' . $category->id) }}"
               class="mt-2 inline-block bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-3xl transition w-fit">
              Shop Now
            </a>
          </div>
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
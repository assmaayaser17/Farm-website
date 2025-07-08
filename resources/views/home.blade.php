@extends('layouts.master')

@section('content')
<head>

    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />


    <style>
      .bg-slider {
        background-size: cover;
        background-position: center;
        transition: opacity 1s ease-in-out;
      }
    </style>
</head>


<section>
    {{-- Hero --}}


<div class="relative w-full min-h-screen sm:h-screen bg-center bg-cover">

  <!-- Background slider -->
  <div id="slider" class="absolute inset-0 z-0">
    <div class="bg-slider absolute inset-0 opacity-100 transition-opacity duration-1000 bg-cover bg-center"
         style="background-image: url('{{ asset('images/products/background1.jpg') }}');"></div>

    <div class="bg-slider absolute inset-0 opacity-0 transition-opacity duration-1000 bg-cover bg-center"
         style="background-image: url('{{ asset('images/products/background2.jpg') }}');"></div>

    <div class="bg-slider absolute inset-0 opacity-0 transition-opacity duration-1000 bg-cover bg-center"
         style="background-image: url('{{ asset('images/products/background3.jpg') }}');"></div>
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

  <!-- Dark Overlay -->
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- Content -->
  <div class="relative z-10 flex items-center justify-end h-full px-4 sm:px-8 text-white text-right">
    <div class="flex flex-col gap-6 max-w-xl p-4 sm:p-6 md:pt-28">
      <h3 class="text-[#00d084] text-2xl sm:text-4xl font-extrabold uppercase leading-tight">
        <span class="text-[#00D084]">Greenya</span> Egypt For Export
      </h3>
      <h1 class="text-2xl sm:text-4xl md:text-5xl font-bold leading-tight">
        Your Source for Fresh <span class="text-green-400">Organic</span> Products
      </h1>
      <p class="text-lg sm:text-xl font-medium leading-relaxed">
        Greenya Egypt for Export is an Egyptian owned company dealing with growing, packing and exporting fresh fruits, vegetables
      </p>
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
    </div>
  </div>
</div>


{{-- About --}}
<section id="About" class="py-16 px-4 sm:px-8 bg-white">
  <div class="container mx-auto flex flex-col md:flex-row items-center gap-8">
    
    {{-- Text --}}
    <div class="md:w-1/2 flex flex-col gap-6 text-center md:text-left" data-aos="fade-right">
      <h2 class="text-5xl font-bold text-black mb-4 ">About Us</h2>
      <p class="text-gray-700 text-base  leading-relaxed">
      <span class="text-[#00d084] text-xl font-bold">Greenya </span>Egypt is a company owned by Egyptians that was established in 2002 (with its own farms) and processes and exports fresh fruits, vegetables, and herbs.

      </p>
      <p class="text-gray-700 text-base leading-relaxed">
           <span class="text-[#00d084] text-xl font-bold"> Greenya </span>  Egypt owns 3 farms in four different locations in Egypt certified by:Global G.A.P certificateISO9001 certificateMember of SEDEX as a supplier.We in Greenya Egypt are committed to provide high quality and competitive products through our experienced team. We do believe that our mission will only be accomplished by our authentic management system, our uncompromising processing methods and our strict implementation of ISO and HACCP Standards</p>
    </div>

    {{-- Image --}}
    <div class="md:w-1/2" data-aos="fade-left">
      <img
        src="{{ asset('images/products/about.jpg') }}"
        alt="About Greenya Egypt"
      
        class="w-full h-full rounded-xl shadow-lg object-cover  mx-auto"
      />
    </div>

  </div>
</section>




  {{-- Categories --}}
<div class="container flex justify-center flex-col items-center mx-auto p-6">
    <h1 class="text-3xl font-bold mb-8 text-center text-green-700">Categories</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-8">
        @foreach ($categories as $category)
            <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition duration-300 p-4 flex flex-col items-center text-center">
                @if($category->imagepath)
                    <img src="{{ asset($category->imagepath) }}" alt="{{ $category->name }}"
                         class="w-80 h-80 object-cover mb-4 rounded-full shadow">
                @else
                    <div class="w-40 h-40 bg-gray-200 rounded-full flex items-center justify-center text-gray-400 mb-4">
                        No Image
                    </div>
                @endif

                <h2 class="text-xl font-semibold text-green-600 mb-3">{{ $category->name }}</h2>

                <a href="{{ url('/categories/' . $category->id) }}"
                   class="mt-auto inline-block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded transition">
                    View Products
                </a>
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






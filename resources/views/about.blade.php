@extends('layouts.master')

@section('content')

<head>
  <title>About Us | Greenya</title>
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
        <h2>About Us</h2>
      
    </div>

    {{-- Content Cards --}}
    <div class="relative max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 z-10">
      {{-- Vision --}}
      <div class="bg-white/40 backdrop-blur-sm p-6 rounded-xl shadow-lg">
        <div class="flex items-start gap-4">
          <i class="fas fa-eye text-3xl text-green-800"></i>
          <div>
            <h2 class="text-2xl font-bold mb-2 text-green-800">Our Vision</h2>
            <p class="text-green-800">
              We grow our products for people who want to live a healthy lifestyle through what they eat, who appreciate good food and enjoy our fruits and vegetables. We make families happier by providing the highest quality, fresh produce.
            </p>
          </div>
        </div>
      </div>

      {{-- Mission --}}
      <div class="bg-white/40 backdrop-blur-sm p-6 rounded-xl shadow-lg">
        <div class="flex items-start gap-4">
          <i class="fas fa-bullseye text-3xl text-green-800"></i>
          <div>
            <h2 class="text-2xl font-bold mb-2 text-green-800">Our Mission</h2>
            <p class="text-green-800">
              To operate and grow our business to be an international business. 
We grow our products for people who want to live a healthy lifestyle through what they eat, who appreciate good food and enjoy our fruits and vegetables. We make families happier by providing the highest quality, fresh produce.
            </p>
          </div>
        </div>
      </div>

      {{-- Customers --}}
      <div class="bg-white/40 backdrop-blur-sm p-6 rounded-xl shadow-lg">
        <div class="flex items-start gap-4">
          <i class="fas fa-users text-3xl text-green-800"></i>
          <div>
            <h2 class="text-2xl font-bold mb-2 text-green-800">Our Customers</h2>
            <p class="text-green-800">
              Many of the world’s largest food retailers count on us every week for a steady and high-quality supply of fruit and vegetables to their stores. We build strong relationships with our customers, putting our expertise at their service to jointly develop a product offering that enhances our Long-Term relationships together.
            </p>
          </div>
        </div>
      </div>

      {{-- Values --}}
      <div class="bg-white/40 backdrop-blur-sm p-6 rounded-xl shadow-lg">
        <div class="flex items-start gap-4">
          <i class="fas fa-heart text-3xl text-green-800"></i>
          <div>
            <h2 class="text-2xl font-bold mb-2 text-green-800">Our Values</h2>
            <ul class="list-disc list-inside text-green-800 space-y-1">
                   <li><strong>Excellence:</strong> Excellence is the distinguishing feature in the business world, which is why we strive to offer the best agricultural products.</li>
      <li><strong>Quality:</strong>Meeting our clients' needs reliably and providing products free from pesticide residues.</li>
      <li><strong>Achievement:</strong> We fully recognize the importance of speed in execution and racing against time to achieve the aspirations of our partners.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

@endsection

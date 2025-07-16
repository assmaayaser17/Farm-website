@extends('layouts.master')

@section('content')
<head>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    body {
      background: url('{{ asset('images/products/backgroundcontact.jpg') }}') no-repeat center center fixed;
      background-size: cover;
    }

    @keyframes bounce-in-up {
      0% {
        transform: translateY(100px);
        opacity: 0;
      }
      60% {
        transform: translateY(-10px);
        opacity: 1;
      }
      80% {
        transform: translateY(5px);
      }
      100% {
        transform: translateY(0);
      }
    }

    .animate-bounce-in-up {
      animation: bounce-in-up 1s ease forwards;
    }
  </style>
</head>


{{-- Contact Card --}}
<div class="max-w-4xl ms-auto bg-gray-50 shadow-lg rounded-xl p-6 sm:p-10 space-y-8 mt-32" dir="ltr">

  {{-- Title --}}
  <h2 class="text-4xl font-bold text-green-600 text-center">{{ __('messages.get_in_touch') }}</h2>
  <p class="text-gray-600 text-sm sm:text-base text-center max-w-md mx-auto">
    {{ __('messages.contact_intro') }}
  </p>

  <div class="flex flex-col lg:flex-row gap-10 justify-between items-start">

    {{-- Left: Contact Info --}}
    <div class="lg:w-1/2 flex flex-col bg-green-100 gap-10 border rounded-2xl shadow-2xl p-6 text-gray-700">

      {{-- Location --}}
      <div class="flex flex-col items-center lg:items-start text-center lg:text-left gap-3">
        <i class="fas fa-map-marker-alt text-green-500 text-4xl"></i>
        <h3 class="text-xl font-bold">{{ __('messages.location') }}</h3>
        <p class="text-sm sm:text-base font-medium text-gray-600">
          {{ __('messages.address1') }}
        </p>
        <p class="text-sm sm:text-base font-medium text-gray-600">
          {{ __('messages.address2') }}
        </p>
      </div>

      {{-- Email --}}
      <div class="flex flex-col items-center lg:items-start text-center lg:text-left gap-3">
        <i class="fas fa-envelope text-green-500 text-4xl"></i>
        <h3 class="text-xl font-bold">{{ __('messages.email') }}</h3>
        <a href="mailto:sales@greenya-egypt.com" class="text-blue-600 underline text-sm sm:text-base">
          sales@greenya-egypt.com
        </a>
        <a href="mailto:info@greenya-egypt.com" class="text-blue-600 underline text-sm sm:text-base">
          info@greenya-egypt.com
        </a>
      </div>

      {{-- Phone --}}
      <div class="flex flex-col items-center lg:items-start text-center lg:text-left gap-3">
        <i class="fas fa-phone-alt text-green-500 text-4xl"></i>
        <h3 class="text-xl font-bold">{{ __('messages.phone') }}</h3>
        <p class="text-sm sm:text-base font-medium text-gray-600">+20100 015 03 65</p>
        <p class="text-sm sm:text-base font-medium text-gray-600">+2023 6913 911</p>
      </div>
    </div>

    {{-- Right: Contact Form --}}
    <div class="w-full lg:w-1/2 space-y-6">
      <div class="space-y-6">
        <h3 class="text-2xl font-bold text-green-600">{{ __('messages.send_your_message') }}</h3>
        <p class="text-gray-500 text-base font-medium sm:text-base text-center">
          {{ __('messages.contact_paragraph') }}
        </p>
      </div>

      @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded text-center">
          {{ session('success') }}
        </div>
      @endif

      <form action="{{ route('contact.submit') }}" method="POST" 
      class="space-y-4 animate-bounce-in-up flex flex-col {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">
    @csrf

    <input type="text" name="name" placeholder="{{ __('messages.your_name') }}"
           class="w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-green-400 {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}" required>

    <input type="email" name="email" placeholder="{{ __('messages.your_email') }}"
           class="w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-green-400 {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}" required>

    <input type="text" name="phone" placeholder="{{ __('messages.phone_number') }}"
           class="w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-green-400 {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}" required>

    <textarea name="message" rows="4" placeholder="{{ __('messages.your_message') }}"
              class="w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-green-400 {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}" required></textarea>

    <button type="submit"
            class="bg-[#00d084] hover:bg-green-700 text-white font-semibold px-4 py-2 rounded-2xl transition duration-200
            {{ app()->getLocale() == 'ar' ? 'self-end' : 'self-start' }}">
        {{ __('messages.send_message') }}
    </button>
</form>

    </div>

  </div>
</div>







{{-- WhatsApp Floating Button --}}
<a href="https://wa.me/201000150365" target="_blank"
   class="fixed bottom-5 right-5 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg z-50 transition-all duration-300 hover:scale-110">
  <i class="fab fa-whatsapp text-2xl"></i>
</a>
@endsection

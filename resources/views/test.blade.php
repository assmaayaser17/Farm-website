@extends('layouts.master')

@section('content')
    <div class="text-center py-10">
        <h1 class="text-3xl font-bold mb-4">{{ __('messages.Welcome') }}</h1>
          <p class="mb-4 text-gray-600">اللغة الحالية: {{ app()->getLocale() }}</p>

        <div class="space-x-4">
            <a href="{{ route('lang.switch', 'en') }}" class="text-blue-500 underline">English</a>
            <a href="{{ route('lang.switch', 'ar') }}" class="text-green-500 underline">العربية</a>
        </div>
    </div>
    <!-- Language Switcher -->
<!-- Replace your language switcher with this -->
<div class="flex space-x-2">
    <a href="{{ route('lang.switch', 'en') }}" 
       class="{{ app()->getLocale() === 'en' ? 'font-bold text-blue-600' : 'text-gray-600' }}">
        EN
    </a>
    <span class="text-gray-400">|</span>
    <a href="{{ route('lang.switch', 'ar') }}"
       class="{{ app()->getLocale() === 'ar' ? 'font-bold text-blue-600' : 'text-gray-600' }}">
        AR
    </a>
</div>

@endsection

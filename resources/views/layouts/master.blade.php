<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <title>Greenya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body[dir="rtl"] {
            text-align: right;
        }
        body[dir="ltr"] {
            text-align: left;
        }
    </style>
      <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <style>

    body {
        font-family: 'Gotham', sans-serif 
    }
</style>
  
</head>

<body class="bg-gray-100">
    {{-- Navbar --}}
    <nav id="navbar" class="fixed top-0 left-0 w-full z-50 px-6 py-4 border-b bg-white/80 backdrop-blur-md transition-all duration-500">
    <div class=" flex justify-around items-center relative">

        <!-- Logo -->
        <a href="/" class="flex items-center space-x-5">
            <span class="text-2xl md:text-4xl font-bold text-green-600">{{ __('messages.greenya') }}</span>
        </a>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex gap-6 items-center ">
            <li><a href="/" class="relative group text-lg md:text-xl font-medium text-green-600">{{ __('messages.home') }}</a></li>
            <li><a href="/about" class="relative group text-lg md:text-xl font-medium text-green-600">{{ __('messages.about_us') }}</a></li>
            <li> <a href="{{ url('/#certificates') }}" class="relative group text-lg md:text-xl font-medium text-green-600">{{ __('messages.certificates') }}</a> </li>
            <li><a href="/services" class="relative group text-lg md:text-xl font-medium text-green-600">{{ __('messages.services') }}</a></li>
            <li><a href="/contact" class="relative group text-lg md:text-xl font-medium text-green-600">{{ __('messages.contact_us') }}</a></li>
            <li><a href="{{ route('categories.index') }}" class="relative group text-lg md:text-xl font-medium text-green-600">{{ __('messages.our products') }}</a></li>

            @guest
                <li><a href="{{ route('login') }}" class="text-lg md:text-xl font-medium text-green-600">{{ __('messages.login') }}</a></li>
            @endguest

            @auth
                @if(auth()->user()->is_admin)
                    <li><a href="{{ route('dashboard') }}" class="text-lg md:text-xl font-medium text-green-600">{{ __('messages.dashboard') }}</a></li>
                @endif
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-lg md:text-xl font-medium text-green-600">{{ __('messages.logout') }}</button>
                    </form>
                </li>
            @endauth

            <!-- Language Switch -->
            <div class="flex space-x-2">
                <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'font-bold text-green-600' : 'text-green-600' }}">
                    {{ __('messages.en') }}
                </a>
                <span class="text-gray-400">|</span>
                <a href="{{ route('lang.switch', 'ar') }}" class="{{ app()->getLocale() === 'ar' ? 'font-bold text-green-600' : 'text-green-600' }}">
                    {{ __('messages.ar') }}
                </a>
            </div>
        </ul>

        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="md:hidden focus:outline-none z-50">
            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <ul id="mobile-menu" class="md:hidden px-6 pt-4 pb-4 space-y-3 hidden bg-white shadow-lg border-t">
        <li><a href="/" class="block text-green-600 text-lg font-medium hover:text-emerald-700">{{ __('messages.home') }}</a></li>
        <li><a href="/about" class="block text-green-600 text-lg font-medium hover:text-emerald-700">{{ __('messages.about_us') }}</a></li>
        <li><a href="/services" class="block text-green-600 text-lg font-medium hover:text-emerald-700">{{ __('messages.services') }}</a></li>
        <li><a href="/contact" class="block text-green-600 text-lg font-medium hover:text-emerald-700">{{ __('messages.contact_us') }}</a></li>
        <li><a href="{{ route('categories.index') }}" class="block text-green-600 text-lg font-medium hover:text-emerald-700">{{ __('messages.our products') }}</a></li>

        @guest
            <li><a href="{{ route('login') }}" class="block text-green-600 text-lg font-medium hover:text-emerald-700">Login</a></li>
        @endguest

        @auth
            @if(auth()->user()->is_admin)
                <li><a href="{{ route('dashboard') }}" class="block text-green-600 text-lg font-medium hover:text-emerald-700">Dashboard</a></li>
            @endif
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left text-red-600 text-lg font-medium hover:text-red-800">
                        Logout
                    </button>
                </form>
            </li>
        @endauth
    </ul>
    </nav>

    <!-- JavaScript -->
   <script>
   document.getElementById('menu-toggle').addEventListener('click', function () {
    document.getElementById('mobile-menu').classList.toggle('hidden');
     });
   </script>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="text-black bg-gray-100 py-10 mt-12 border shadow">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8 {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">
            
            {{-- Company Info --}}
            <div>
                <h2 class="text-3xl font-bold text-green-600 mb-4">{{ __('messages.greenya') }}</h2>
                <p class="text-sm text-gray-600">{{ __('messages.footer_desc') }}</p>
                <div class="flex gap-5 mt-4">
                    <a href="#" class="hover:text-[#00d084]"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-[#00d084]"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-[#00d084]"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="hover:text-[#00d084]"><i class="fas fa-map-marker-alt"></i></a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 class="text-lg font-semibold mb-4 text-green-600">{{ __('messages.quick_links') }}</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:text-[#00d084]">{{ __('messages.home') }}</a></li>
                    <li><a href="/about" class="hover:text-[#00d084]">{{ __('messages.about_us') }}</a></li>
                    <li><a href="/services" class="hover:text-[#00d084]">{{ __('messages.services') }}</a></li>
                    <li><a href="/contact" class="hover:text-[#00d084]">{{ __('messages.contact_us') }}</a></li>
                </ul>
            </div>

            {{-- Contact Info --}}
            <div>
                <h3 class="text-lg font-semibold mb-4 text-green-600">{{ __('messages.contact_info') }}</h3>
                <ul class="space-y-2 text-sm">
                    <li><i class="fas fa-phone-alt text-[#00d084]"></i> +20100 015 03 65</li>
                    <li><i class="fas fa-envelope text-[#00d084]"></i> info@greenya-egypt.com</li>
                    <li><i class="fas fa-map-marker-alt text-[#00d084]"></i> {{ __('messages.footer_address') }}</li>
                </ul>
            </div>

            {{-- Newsletter --}}
            <div>
                <h3 class="text-lg font-semibold mb-4 text-green-600">{{ __('messages.subscribe_newsletter') }}</h3>
                <form>
                    <input type="email" placeholder="{{ __('messages.enter_email') }}" class="w-full px-3 py-2 rounded text-black mb-2 focus:outline-none focus:ring-2 focus:ring-[#00d084]">
                    <button type="submit" class="bg-[#00d084] text-white px-4 py-2 rounded hover:bg-emerald-600 w-full">
                        {{ __('messages.subscribe') }}
                    </button>
                </form>
            </div>
        </div>

        <div class="text-center text-gray-500 text-sm mt-8 border-t border-gray-700 pt-4">
            &copy; {{ date('Y') }} Greenya Egypt. {{ __('messages.rights_reserved') }}
        </div>
    </footer>
</body>
</html>


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
</head>

<body class="bg-gray-100">
  <nav id="navbar" class="fixed top-0 left-0 w-full z-50 px-6 py-4 border-b bg-transparent transition-all duration-500">
    <div class="max-w-7xl mx-auto flex justify-between items-center relative">
      <a href="/" class="flex items-center space-x-2">
        <span class="text-4xl font-bold text-green-600">{{ __('messages.greenya') }}</span>
      </a>
      <ul class="hidden md:flex gap-6 items-center">
        <li><a href="/" class="relative group text-xl font-medium text-green-600 transition-colors">{{ __('messages.home') }}</a></li>
        <li><a href="/about" class="relative group text-xl font-medium text-green-600 transition-colors">{{ __('messages.about_us') }}</a></li>
        <li><a href="/services" class="relative group text-xl font-medium text-green-600 transition-colors">{{ __('messages.services') }}</a></li>
        <li><a href="/contact" class="relative group text-xl font-medium text-green-600 transition-colors">{{ __('messages.contact_us') }}</a></li>
        <li><a href="/create" class="relative group text-xl font-medium text-green-600 transition-colors">{{ __('messages.dashboard') }}</a></li>
        <div class="flex space-x-2">
    <a href="{{ route('lang.switch', 'en') }}" 
       class="{{ app()->getLocale() === 'en' ? 'font-bold text-green-600' : 'text-green-600' }}">
         {{ __('messages.en') }}
    </a>
    <span class="text-gray-400">|</span>
    <a href="{{ route('lang.switch', 'ar') }}"
       class="{{ app()->getLocale() === 'ar' ? 'font-bold text-green-600' : 'text-green-600' }}">
       {{ __('messages.ar') }}
    </a>
</div>
    </ul>

      <button id="menu-toggle" class="md:hidden focus:outline-none z-50">
        <svg class="w-6 h-6 stroke-current text-[#00d084]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <ul id="mobile-menu" class="md:hidden px-6 pt-4 pb-4 space-y-2 hidden bg-white shadow-lg">
      <li><a href="/" class="block text-[#00d084] text-base font-medium hover:text-emerald-700">{{ __('messages.home') }}</a></li>
      <li><a href="/about" class="block text-[#00d084] text-base font-medium hover:text-emerald-700">{{ __('messages.about_us') }}</a></li>
      <li><a href="/services" class="block text-[#00d084] text-base font-medium hover:text-emerald-700">{{ __('messages.services') }}</a></li>
      <li><a href="/contact" class="block text-[#00d084] text-base font-medium hover:text-emerald-700">{{ __('messages.contact_us') }}</a></li>
    </ul>
  </nav>

  <main>
    @yield('content')
  </main>

<footer class="text-black bg-gray-100 py-10 mt-12 border shadow">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8 {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">

        <!-- Company Info -->
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

        <!-- Quick Links -->
        <div>
            <h3 class="text-lg font-semibold mb-4 text-green-600 ">{{ __('messages.quick_links') }}</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="/" class="hover:text-[#00d084]">{{ __('messages.home') }}</a></li>
                <li><a href="/about" class="hover:text-[#00d084]">{{ __('messages.about_us') }}</a></li>
                <li><a href="/services" class="hover:text-[#00d084]">{{ __('messages.services') }}</a></li>
                <li><a href="/contact" class="hover:text-[#00d084]">{{ __('messages.contact_us') }}</a></li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div>
            <h3 class="text-lg font-semibold mb-4 text-green-600">{{ __('messages.contact_info') }}</h3>
            <ul class="space-y-2 text-sm">
                <li><i class="fas fa-phone-alt text-[#00d084]"></i> +20100 015 03 65</li>
                <li><i class="fas fa-envelope text-[#00d084]"></i> info@greenya-egypt.com</li>
                <li><i class="fas fa-map-marker-alt text-[#00d084]"></i> {{ __('messages.footer_address') }}</li>
            </ul>
        </div>

        <!-- Newsletter -->
        <div>
            <h3 class="text-lg font-semibold mb-4 text-green-600">{{ __('messages.subscribe_newsletter') }}</h3>
            <form>
                <input type="email" placeholder="{{ __('messages.enter_email') }}" class="w-full px-3 py-2 rounded  text-black mb-2 focus:outline-none focus:ring-2 focus:ring-[#00d084]">
                <button type="submit" class="bg-[#00d084] text-white px-4 py-2 rounded hover:bg-emerald-600 w-full">{{ __('messages.subscribe') }}</button>
            </form>
        </div>

    </div>

    <div class="text-center text-gray-500 text-sm mt-8 border-t border-gray-700 pt-4">
        &copy; {{ date('Y') }} Greenya Egypt. {{ __('messages.rights_reserved') }}
    </div>
</footer>


  <script>
    const toggleButton = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

</body>
</html>

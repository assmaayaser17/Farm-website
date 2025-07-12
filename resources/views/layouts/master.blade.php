<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <title>{{ __('messages.site_name') }}</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

  {{-- === Navbar === --}}
  <nav id="navbar" class="fixed top-0 left-0 w-full z-50 px-6 py-4 border-b bg-transparent transition-all duration-500">
    <div class="max-w-7xl mx-auto flex justify-between items-center relative">
      {{-- Logo --}}
      <a href="/" class="text-4xl font-bold text-green-500">{{ __('messages.site_name') }}</a>
     


      {{-- Desktop Menu --}}
      <ul class="hidden md:flex space-x-6">
        @php
          $navLinks = [
            ['name' => __('messages.home'), 'url' => '/'],
            ['name' => __('messages.about'), 'url' => '/about'],
            ['name' => __('messages.services'), 'url' => '/services'],
            ['name' => __('messages.contact'), 'url' => '/contact'],
          ];
        @endphp

        @foreach($navLinks as $link)
          <li>
            <a href="{{ $link['url'] }}" class="relative group text-xl font-medium text-green-500 transition-colors">
              {{ $link['name'] }}
              <span class="block h-[2px] w-0 transition-all duration-500 group-hover:w-full"></span>
            </a>
          </li>
        @endforeach

        {{-- Language Switcher --}}
        <li>
          <a href="{{ url('lang/en') }}" class="text-gray-700 hover:text-green-600 font-medium">{{ __('messages.english') }}</a>
        </li>
        <li>
          <a href="{{ url('lang/ar') }}" class="text-gray-700 hover:text-green-600 font-medium">{{ __('messages.arabic') }}</a>
        </li>
      </ul>

      {{-- Mobile Menu Toggle --}}
      <button id="menu-toggle" class="md:hidden focus:outline-none z-50">
        <svg class="w-6 h-6 stroke-current text-[#00d084]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    {{-- Mobile Menu --}}
    <ul id="mobile-menu" class="md:hidden px-6 pt-4 pb-4 space-y-2 hidden bg-white shadow-lg">
      @foreach($navLinks as $link)
        <li>
          <a href="{{ $link['url'] }}" class="block text-[#00d084] text-base font-medium hover:text-emerald-700">
            {{ $link['name'] }}
          </a>
        </li>
      @endforeach
<a href="{{ route('lang.switch', 'en') }}">English</a>
<a href="{{ route('lang.switch', 'ar') }}">عربي</a>

    </ul>
  </nav>

  {{-- === Page Content === --}}
  <main>
    @yield('content')
  </main>

  {{-- === Footer === --}}
  <footer class="bg-gray-800 text-white py-10 mt-20">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
      {{-- Logo & About --}}
      <div>
        <h2 class="text-2xl font-bold">{{ __('messages.site_name') }}</h2>
        <p class="mt-4 text-sm text-gray-400">{{ __('messages.footer_about') }}</p>
      </div>

      {{-- Links --}}
      <div>
        <h3 class="text-lg font-semibold mb-4">{{ __('messages.quick_links') }}</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="/" class="hover:text-gray-300">{{ __('messages.home') }}</a></li>
          <li><a href="/about" class="hover:text-gray-300">{{ __('messages.about') }}</a></li>
          <li><a href="/services" class="hover:text-gray-300">{{ __('messages.services') }}</a></li>
          <li><a href="/contact" class="hover:text-gray-300">{{ __('messages.contact') }}</a></li>
        </ul>
      </div>

      {{-- Newsletter --}}
      <div>
        <h3 class="text-lg font-semibold mb-4">{{ __('messages.subscribe_newsletter') }}</h3>
        <form class="flex flex-col sm:flex-row gap-2">
          <input type="email" placeholder="{{ __('messages.your_email') }}" class="px-4 py-2 rounded text-black w-full sm:w-auto">
          <button type="submit" class="bg-[#00d084] hover:bg-emerald-700 px-4 py-2 rounded text-white">
            {{ __('messages.subscribe') }}
          </button>
        </form>
      </div>
    </div>

    <div class="mt-8 text-center text-sm text-gray-500">
      © 2025 {{ __('messages.site_name') }}. {{ __('messages.rights_reserved') }}
    </div>
  </footer>

  {{-- === JS Scripts === --}}
  <script>
    // Toggle Mobile Menu
    const toggleBtn = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleBtn?.addEventListener('click', () => {
      mobileMenu?.classList.toggle('hidden');
    });

    // Scroll Color Change
    window.addEventListener("scroll", function () {
      const navbar = document.getElementById("navbar");
      const isWhite = navbar.classList.contains("bg-white");

      if (isWhite) return;

      if (window.scrollY > 50) {
        navbar.classList.remove("bg-transparent", "border-white");
        navbar.classList.add("bg-white", "border-gray-200");

        document.querySelectorAll("#navbar a").forEach(link => {
          link.classList.remove("text-white");
          link.classList.add("text-[#00d084]");
        });
      } else {
        navbar.classList.remove("bg-white", "border-gray-200");
        navbar.classList.add("bg-transparent", "border-white");

        document.querySelectorAll("#navbar a").forEach(link => {
          link.classList.remove("text-[#00d084]");
          link.classList.add("text-white");
        });
      }
    });
  </script>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenya</title>

    {{-- TailwindcSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">

   {{-- Font style --}}
    <style>
        body {
            font-family: 'Gotham', sans-serif;
        }
        body[dir="rtl"] {
            text-align: right;
        }
        body[dir="ltr"] {
            text-align: left;
        }
    </style>
  </head>
<body class="bg-gray-100">
    
    {{-- Navbar --}}
    <nav class="bg-white border-gray-200">
    <di v class="max-w-screen-xl mx-auto flex items-center justify-between flex-wrap p-4">

        {{-- Logo --}}
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-green-600">
                {{ __('messages.greenya') }}
            </span>
        </a>

       {{-- Mobile button --}}
        <button id="menu-toggle" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-green-600 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        {{-- Navbar menu --}}
        <div id="navbar-menu" class="hidden w-full md:flex md:w-auto mt-4 md:mt-0">
            <ul class="flex flex-col md:flex-row md:items-center gap-4 md:gap-6 p-4 md:p-0 bg-gray-50 md:bg-white border border-gray-100 md:border-0 rounded-lg md:rounded-none">

                <li><a href="/" class="text-xl text-green-600 hover:underline">{{ __('messages.home') }}</a></li>
                <li><a href="/about" class="text-xl text-green-600 hover:underline">{{ __('messages.about_us') }}</a></li>
                <li><a href="{{ url('/#certificates') }}" class="text-xl text-green-600 hover:underline">{{ __('messages.certificates') }}</a></li>
                <li><a href="/services" class="text-xl text-green-600 hover:underline">{{ __('messages.services') }}</a></li>
                <li><a href="/contact" class="text-xl text-green-600 hover:underline">{{ __('messages.contact_us') }}</a></li>
                <li><a href="{{ route('categories.index') }}" class="text-xl text-green-600 hover:underline">{{ __('messages.our products') }}</a></li>
                @guest
                    <li><a href="{{ route('login') }}" class="text-xl text-green-600 hover:underline">{{ __('messages.login') }}</a></li>
                @endguest
                
                {{-- Admin validation --}}
                @auth
                    @if(auth()->user()->is_admin)
                        <li><a href="{{ route('dashboard') }}" class="text-xl text-green-600 hover:underline">{{ __('messages.dashboard') }}</a></li>
                    @endif
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-xl text-green-600 hover:underline">{{ __('messages.logout') }}</button>
                        </form>
                    </li>
                @endauth

                {{-- Language switch --}}
                <li class="flex items-center gap-1">
                    <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'font-bold text-green-600' : 'text-green-600' }}">
                        {{ __('messages.en') }}
                    </a>
                    <span class="text-gray-400">|</span>
                    <a href="{{ route('lang.switch', 'ar') }}" class="{{ app()->getLocale() === 'ar' ? 'font-bold text-green-600' : 'text-green-600' }}">
                        {{ __('messages.ar') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
   </nav>

  {{-- Display toggle button --}}
  <script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('navbar-menu').classList.toggle('hidden');
    });
   </script>

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="text-black bg-gray-100 py-10 mt-12 border shadow">
        <div
            class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8 {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">
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
                    <input type="email" placeholder="{{ __('messages.enter_email') }}"
                        class="w-full px-3 py-2 rounded text-black mb-2 focus:outline-none focus:ring-2 focus:ring-[#00d084]">
                    <button type="submit"
                        class="bg-[#00d084] text-white px-4 py-2 rounded hover:bg-emerald-600 w-full">
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

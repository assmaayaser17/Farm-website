<!-- Navbar ,Footer -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tailwind Navbar</title>
  <!-- Tailwind via CDN (Runtime) -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">

 {{-- Navbar --}}
  <nav id="navbar" class="fixed top-0 left-0 w-full z-50 px-6 py-4  border-b border-white bg-transparent transition-all duration-500">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
     {{-- Logo --}}
      <a href="#" class="text-4xl text-[#00d084] font-bold">Greenya</a>

      <ul class="hidden md:flex space-x-6">
  <li>
    <a href="/" class="relative group text-[#00d084] text-xl font-medium">
      Home
      <span class="block h-[2px] w-0 bg-[#00d084] transition-all duration-500 group-hover:w-full"></span>
    </a>
  </li>
  <li>
    <a href="#About" class="relative group text-[#00d084] text-xl font-medium">
      About
      <span class="block h-[2px] w-0 bg-[#00d084] transition-all duration-500 group-hover:w-full"></span>
    </a>
  </li>
  <li>
    <a href="#" class="relative group text-[#00d084] text-xl font-medium">
      Services
      <span class="block h-[2px] w-0 bg-[#00d084] transition-all duration-500 group-hover:w-full"></span>
    </a>
  </li>
  <li>
    <a href="#" class="relative group text-[#00d084] text-xl font-medium">
      Contact
      <span class="block h-[2px] w-0 bg-[#00d084] transition-all duration-500 group-hover:w-full"></span>
    </a>
  </li>
</ul>


      <!-- Menu -->
      
{{-- 
           @guest
                          @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest --}}
      

     

      <!--  (Mobile) -->
      <button id="menu-toggle" class="md:hidden focus:outline-none">
        <svg class="w-6 h-6 stroke-current text-[#00d084]" viewBox="0 0 24 24">
          <path d="M4 5h16M4 12h16M4 19h16"/>
        </svg>
      </button>
    </div>

    <!-- Mobile Menu -->
    <ul id="mobile-menu" class="md:hidden text px-4 pt-4 pb-2 space-y-2 hidden">
      <li><a href="#" class="block text-[#00d084] hover:text-gray-300">Home</a></li>
      <li><a href="#" class="block text-[#00d084] hover:text-gray-300">About</a></li>
      <li><a href="#" class="block text-[#00d084] hover:text-gray-300">Services</a></li>
      <li><a href="#" class="block text-[#00d084] hover:text-gray-300">Contact</a></li>
    </ul>
  </nav>

  <!-- Content -->
 @yield('content')

 <!-- Footer -->
  <footer class="bg-gray-800 text-white py-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <!-- Column 1: Logo + Description -->
      <div>
        <h2 class="text-2xl font-bold">MyBrand</h2>
        <p class="mt-4 text-sm text-gray-400">
          تابعنا لكل جديد، نحن نحب مساعدتك!
        </p>
      </div>

      <!-- Column 2: Links -->
      <div>
        <h3 class="text-lg font-semibold mb-4">روابط سريعة</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:text-gray-300">الرئيسية</a></li>
          <li><a href="#" class="hover:text-gray-300">عنّا</a></li>
          <li><a href="#" class="hover:text-gray-300">خدماتنا</a></li>
          <li><a href="#" class="hover:text-gray-300">تواصل معنا</a></li>
        </ul>
      </div>

      <!-- Column 3: Newsletter -->
      <div>
        <h3 class="text-lg font-semibold mb-4">اشترك في النشرة البريدية</h3>
        <form class="flex flex-col sm:flex-row gap-2">
          <input type="email" placeholder="بريدك الإلكتروني" class="px-4 py-2 rounded text-black w-full sm:w-auto">
          <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded text-white">اشترك</button>
        </form>
      </div>

    </div>

    <div class="mt-8 text-center text-sm text-gray-500">
      © 2025 MyBrand. جميع الحقوق محفوظة.
    </div>
  </div>
</footer>

  <!-- Toggle Script -->
  <script>
    const toggleBtn = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>

  <script>

    window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");

  if (window.scrollY > 50) {
    navbar.classList.remove("bg-transparent", "border-white");
    navbar.classList.add("bg-white", "border-gray-200");

    document.querySelectorAll("#navbar a").forEach(link => {
      link.classList.remove("text-white");
      link.classList.add("text-emerald-500"); // ✅ استخدمي اسم كلاس جاهز
    });
  } else {
    navbar.classList.remove("bg-white", "border-gray-200");
    navbar.classList.add("bg-transparent", "border-white");

    document.querySelectorAll("#navbar a").forEach(link => {
      link.classList.remove("text-emerald-500"); // ✅ زي هنا
      link.classList.add("text-white");
    });
  }
});

  </script>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-green-50">

    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Sidebar -->
        <aside 
            id="sidebar" 
            class="w-64 bg-green-100 fixed md:relative z-50 h-full shadow transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">
            
            <div class="p-3 text-lg font-bold text-green-600 flex justify-between items-center border-b">
                Admin Dashboard
                <!-- Close btn (Mobile Only) -->
                <button data-action="closeSidebar" class="relative z-50 md:hidden text-2xl font-bold text-gray-700 hover:text-green-600">&times;</button>
            </div>

            <nav class="px-4 py-2 space-y-2">
                <a href="{{ route('home') }}" class="block py-2 px-2 rounded hover:bg-green-100 text-gray-700 hover:text-green-600">Home</a>
                <a href="{{ route('categories.index') }}" class="block py-2 px-2 rounded hover:bg-green-100 text-gray-700 hover:text-green-600">Categories</a>
                <a href="{{ route('products.index') }}" class="block py-2 px-2 rounded hover:bg-green-100 text-gray-700 hover:text-green-600">Products</a>

                @auth
                    @if(auth()->user()->is_admin)
                        <a href="{{ route('dashboard') }}" class="block py-2 px-2 rounded hover:bg-green-100 text-gray-700 hover:text-green-600">Admin</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}" class="py-2">
                        @csrf
                        <button type="submit" class="w-full text-left py-2 px-2 rounded hover:bg-green-100 text-green-600">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="block py-2 px-2 rounded hover:bg-green-100 text-gray-700 hover:text-green-600">Login</a>
                @endauth
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Bar (Mobile Only) -->
            <header class="bg-white shadow p-4 flex justify-between items-center md:hidden">
                <h1 class="text-lg font-bold text-green-600">Dashboard</h1>
                <button data-action="openSidebar" class="text-2xl text-gray-700 hover:text-green-600">&#9776;</button>
            </header>

            <!-- Content Area -->
            <main class="flex-1 p-4 md:p-8">
                <div class="max-w-5xl mx-auto">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <script>
    
        document.addEventListener("click", (e) => {
    const sidebar = document.getElementById('sidebar');
    if (e.target.closest('[data-action="open-sidebar"]')) {
        sidebar.classList.remove('-translate-x-full');
    }

    if (e.target.closest('[data-action="close-sidebar"]')) {
        sidebar.classList.add('-translate-x-full');
    }
});

 </script>
</body>
</html>


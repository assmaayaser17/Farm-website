<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
           {{-- Logo --}}
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-lg font-bold text-gray-800 dark:text-gray-200">
                     Admin Dashboard
                </a>
            </div>

           {{-- Links --}}
            <div class="flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-gray-700 dark:text-gray-300 hover:text-green-600">Home</a>
                <a href="{{ route('categories.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-green-600">Categories</a>
                <a href="{{ route('products.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-green-600">Products</a>

                @auth
                    @if(auth()->user()->is_admin)
                        <a href="{{ route('dashboard') }}" class="text-gray-700 dark:text-gray-300 hover:text-green-600">Admin</a>
                    @endif

                {{-- Logout --}}
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-600 hover:underline">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-300 hover:text-green-600">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>


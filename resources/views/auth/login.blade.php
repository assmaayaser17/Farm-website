<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="mt-4 flex flex-col space-y-4">
        <!-- Links Row -->
    <div class="flex items-center justify-between text-sm">
        <!-- Link to Register -->
        <a href="{{ route('register') }}"
           class="text-indigo-600 dark:text-indigo-400 hover:underline">
            {{ __("Don't have an account? Register") }}
        </a>

        <!-- Forgot Password -->
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}"
               class="text-gray-600 dark:text-gray-400 hover:underline">
                {{ __('Forgot your password?') }}
            </a>
        @endif
    </div>

    <!-- Login Button -->
    <x-primary-button class="w-full py-2 text-center justify-center">
        {{ __('Log in') }}
    </x-primary-button>
</div>

    </form>
</x-guest-layout>

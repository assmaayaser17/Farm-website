<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        \Log::debug('Middleware Start - Current App Locale: '.app()->getLocale());
        \Log::debug('Session Locale: '.Session::get('locale'));
        
        $locales = config('app.available_locales', ['en', 'ar']);
        $locale = $this->determineLocale($request, $locales);
        
        \Log::debug('Setting App Locale to: '.$locale);
        App::setLocale($locale);
        
        \Log::debug('Verifying App Locale After Set: '.app()->getLocale());
        
        return $next($request);
    }

    /**
     * Determine the locale from request, session, or fallback to app default
     */
    protected function determineLocale(Request $request, array $locales)
    {
        // 1. Check request query param ?lang=xx
        $locale = $request->get('lang');

        // 2. Check if session has locale
        if (!$locale && Session::has('locale')) {
            $locale = Session::get('locale');
        }

        // 3. Validate locale is in available locales
        if ($locale && in_array($locale, $locales)) {
            return $locale;
        }

        // 4. Fallback to default
        return config('app.locale', 'en');
    }
}


// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Support\Facades\App;
// use Illuminate\Support\Facades\Session;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

// class SetLocale
// {
//     public function handle($request, Closure $next)
//     {
//            \Log::debug('Middleware Start - Current App Locale: '.app()->getLocale());
//     \Log::debug('Session Locale: '.Session::get('locale'));
    
//     $locales = config('app.available_locales', ['en', 'ar']);
//     $locale = $this->determineLocale($request, $locales);
    
//     \Log::debug('Setting App Locale to: '.$locale);
//     App::setLocale($locale);
    
//     \Log::debug('Verifying App Locale After Set: '.app()->getLocale());
    
//     return $next($request);

//     }
// }

 

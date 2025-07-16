<?php

namespace App\Providers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    
    {
       if (!session()->get('locale')) {
            session()->put('locale', 'ar');
        }

        $lang = "";
        $languages = ['ar', 'en'];
        $lang = request()->header('lang');
        if ($lang) {
            if (in_array($lang, $languages)) {
                App::setLocale($lang);
            }
        }
    }
}

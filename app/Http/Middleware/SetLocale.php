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
        $locale = Session::get('locale', 'en');
        // لو فيه لغة محفوظة في السيشن، استعملها، وإلا خليه على الإنجليزية
        $locale = Session::get('locale', 'en');
        App::setLocale($locale);

        return $next($request);
    }
}



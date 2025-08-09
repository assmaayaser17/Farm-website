<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
{
    
    if (!Auth::check()) {
        return redirect()->route('login');
    }

    if (Auth::user()->is_admin != 1) {
        Auth::logout(); 
        return redirect()->route('home')
                         ->with('error', 'You are not authorized to access the dashboard.');
    }

   
    return $next($request);
}

}

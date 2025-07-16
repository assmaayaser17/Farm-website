<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('auth');
//     }

//     /**
//      * Show the application dashboard.
//      *
//      * @return \Illuminate\Contracts\Support\Renderable
//      */
//     public function index()
//     {
//         return view('home');
//     }
// }




// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Category;

// class HomeController extends Controller
// {
//     // public function __construct()
//     // {
//     //     $this->middleware('auth'); 
//     // }


// public function index()
// {
//     $categories = Category::all();
//     return view('home', compact('categories'));
// }

// }


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('home', compact('categories'));
    }
    public function switch($locale)
    {
        if (!in_array($locale, ['en', 'ar'])) {
            abort(400, 'Invalid language');
        }

        App::setLocale($locale);
        Session::put('locale', $locale);
        
        return redirect()->back();
    }
    
}
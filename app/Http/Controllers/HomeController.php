<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Employee;
use App\Models\About;
use App\Models\Service;
use App\Models\Export;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{


    public function index()
    {
        $categories = Category::all();
        $employees = Employee::all();
        $about = About::first();
        $service = Service::first();
        $export = Export::first();

        return view('home', compact('categories', 'employees','about','service','export'));
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
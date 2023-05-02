<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.pages.index');
        # code...
    }

    public function about()
    {
        return view('site.pages.about');
        # code...
    }

    public function accommodations()
    {
        return view('site.pages.accommodations');
        # code...
    }

    public function events()
    {
        return view('site.pages.events');
        # code...
    }

    public function contact()
    {
        return view('site.pages.contact');
        # code...
    }
}

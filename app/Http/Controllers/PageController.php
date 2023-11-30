<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages/home');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function system()
    {
        return view('pages/system');
    }
    public function paket()
    {
        return view('pages/paket');
    }

    public function testimonials()
    {
        return view('pages/testimonials');
    }

    public function contact()
    {
        return view('pages/contact');
    }
}

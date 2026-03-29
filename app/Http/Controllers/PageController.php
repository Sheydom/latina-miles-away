<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.hom');
    }

    public function about()
    {
        return view('about');
    }

    public function consultation()
    {
        return view('consultation');
    }
}

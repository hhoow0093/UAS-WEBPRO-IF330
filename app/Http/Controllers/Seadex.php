<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Seadex extends Controller
{

    public function index()
    {
        return view('components.index-page');
    }

    public function services()
    {
        return view('components.services-page');

    }

    public function product()
    {
        return view('components.product-page');
    }

    public function contact()
    {
        return view('components.contact-us-page');
    }

    public function article()
    {
        return view('components.articles-page');
    }

    public function about()
    {
        return view('components.about-us-page');
    }
}

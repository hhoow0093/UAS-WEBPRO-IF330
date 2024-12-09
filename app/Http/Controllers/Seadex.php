<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function showForm()
    {
        return view('components.contact-us-page');
    }

    public function submitForm(Request $request)
    {
        {
            // Validasi input
            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
                'subject' => 'required|max:255',
                'message' => 'required',
            ]);
    
        }
    }


    public function about()
    {
        return view('components.about-us-page');
    }
}

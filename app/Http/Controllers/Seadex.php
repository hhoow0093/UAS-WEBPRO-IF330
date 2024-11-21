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
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

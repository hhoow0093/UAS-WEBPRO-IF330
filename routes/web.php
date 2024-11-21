<?php

use App\Http\Controllers\Seadex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/seadex/home');
});

Route::controller(Seadex::class)->group(function(){
    Route::get('/seadex/home', 'index');
    Route::get('/seadex/services', 'services');
    Route::get('/seadex/products', 'product');
    Route::get('/seadex/aboutus', 'about');
    Route::get('/seadex/contactus', 'contact');
    Route::get('/seadex/articles', 'article');
});

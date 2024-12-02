<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Seadex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/seadex/home');
});

Route::controller(Seadex::class)->group(function(){
    Route::get('/seadex/home', 'index');
    Route::get('/seadex/services', 'services');
    Route::get('/seadex/aboutus', 'about');
    Route::get('/seadex/products', 'product');
    Route::get('/seadex/contactus', 'contact');
    Route::get('/seadex/articles', 'article');
});

Route::get('/adminpage', [LoginController::class])->middleware(['Auth', 'User']);

Route::get('/seadex/products', [ProductController::class, 'index'])->name('products.index'); 
Route::get('/seadex/products/create/{category}', [ProductController::class, 'create'])->name('products.create.category'); 
Route::post('/seadex/products', [ProductController::class, 'store'])->name('products.store'); 
Route::get('/seadex/products/{id}', [ProductController::class, 'show'])->name('products.show'); 
Route::get('/seadex/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); 
Route::put('/seadex/products/{id}', [ProductController::class, 'update'])->name('products.update'); 
Route::delete('/seadex/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); 
Route::get('/seadex/products/createcategory/{category}', [ProductController::class, 'create'])->name('products.create.category');
Route::post('/categories/store', [categoryController::class, 'store'])->name('categories.store');
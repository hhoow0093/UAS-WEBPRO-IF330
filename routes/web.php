<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\Seadex;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect('/seadex/home');
});

Route::controller(Seadex::class)->group(function(){
    Route::get('/seadex/home', 'index')->name('seadex-index');
    Route::get('/seadex/services', 'services');
    Route::get('/seadex/aboutus', 'about');
    Route::get('/seadex/products', 'product');
    Route::post('/products/{product}/interested', [ProductController::class, 'toggleInterest'])->name('product.interested');
    Route::get('/seadex/contactus', 'showForm')->name('contact.form');
    Route::post('/seadex/contactus', 'submitForm')->name('contact.submit');
});

// Admin Routes
Route::middleware(['auth', 'Admin'])->group(function () {
    Route::get('/admin/products', [AdminController::class, 'index'])->name('admin.products');
    Route::get('/admin/interesteduser', [AdminController::class, 'adminIntUser'])->name('admin.IntUser');
});

//crud products
Route::get('/seadex/products', [ProductController::class, 'index'])->name('products.index'); 
Route::get('/seadex/products/create/{category}', [ProductController::class, 'create'])->name('products.create.category'); 
Route::post('/seadex/products', [ProductController::class, 'store'])->name('products.store'); 
Route::get('/seadex/products/{id}', [ProductController::class, 'show'])->name('products.show'); 
Route::get('/seadex/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); 
Route::put('/seadex/products/{id}', [ProductController::class, 'update'])->name('products.update'); 
Route::delete('/seadex/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); 
Route::delete('/seadex/deleteCategory/{id}', [ProductController::class, 'destroyCategory'])->name('products.destroy.category'); 
Route::get('/seadex/products/createcategory/{category}', [ProductController::class, 'create'])->name('products.create.category');
Route::post('/categories/store', [categoryController::class, 'store'])->name('categories.store');

//login & register
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login-post');
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register-post');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\Seadex;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;


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


// Route::get('/adminpage', [ad::class])->middleware(['Auth', 'User']);


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', [UserController::class, 'admin'])->name('admin.index');
    });
});



require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);

Route::get('/test', function () {
    return "Hello World I'm driss";
});

Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
// Route::get('products', [ProductController::class, 'store'])->name('products.store');

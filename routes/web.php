<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index']); // => App\Http\Controllers\homeController = homeController::class

// Route::resource('products', ProductController::class);


// Route::get('/test', function () {

//     dd($_REQUEST);
//     return "Hello World I'm driss";
// });
// Creat ->
// Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

// edit ->
// Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Update ->
// Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');

// delete ->
// Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


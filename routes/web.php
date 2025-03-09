<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\infoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index'])->name('homepage.index'); // => App\Http\Controllers\homeController = homeController::class

// Route::resource('products', ProductController::class);

Route::get("/profiles", [profileController::class, 'index'])->name('profiles.index');
Route::get('/info', [infoController::class, 'index'])->name('info.index');
Route::get('/profiles/{id}', [profileController::class, 'show'])->name('info.show');

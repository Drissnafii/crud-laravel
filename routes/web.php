<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\infoController;
use App\Http\Controllers\LogingController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index'])->name('homepage.index'); // => App\Http\Controllers\homeController = homeController::class

// Route::resource('products', ProductController::class);

Route::get('/login', [LogingController::class, 'show'])->name('login.show');
// Route::post('/login', [LogingController::class, 'index'])->login('login');

Route::get("/profiles", [profileController::class, 'index'])->name('profiles.index');
Route::get('/info', [infoController::class, 'index'])->name('info.index');
Route::get('/profile/create', [profileController::class, 'create'])->name('create');

// Show the detail of a Profile
Route::get('/profiles/{profile}', [profileController::class, 'show'])
->where('id','\d+')
->name('info.show');



Route::post('/profile/store', [profileController::class, 'store'])->name('store');

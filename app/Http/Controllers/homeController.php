<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Type\NullType;

class homeController extends Controller
{
    public function index (Request $request) {
        return view('home');
    }
    // compact('name', 'language');
}

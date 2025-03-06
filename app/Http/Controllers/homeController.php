<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index (Request $request) {
        $name = "Driss";
        $laguages = ['dkfjqkjfhjqsfdhk'];
        $lastName = 'Nafii';
        return view('home', compact('name', 'laguages', 'lastName'));
    }
    // compact('name', 'language');
}

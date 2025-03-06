<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Type\NullType;

class homeController extends Controller
{
    public function index (Request $request) {
        $nadfqfme = Null;
        $name = "rachid";
        $laguages = ['rr', 'dfqsdf', 'jj'];
        $color = 'jkFKJDQFHJQDH';
        $lastName = 'Nafii';
        $x = 23;
        $y = 7;
        $f = 2023;
        return view('home', compact('name', 'laguages', 'lastName', 'color', 'x', 'y', 'f'));
    }
    // compact('name', 'language');
}

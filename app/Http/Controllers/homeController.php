<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Type\NullType;

class homeController extends Controller
{

    public function index (Request $request) {
        $users = [
            ['id' => '1' ,'nom'=> 'Driss', 'metier' => 'Software Developer'],
            ['id' => '2' ,'nom'=> 'Ayoub', 'metier' => 'Cuisinier'],
            ['id' => '3' ,'nom'=> 'Rachid', 'metier' => 'Ingineer'],
        ];
        return view('home', compact('users'));
    }
    // compact('name', 'language');
}

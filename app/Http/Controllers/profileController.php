<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profiler;

class profileController extends Controller
{
    public function index() {
        $profiles = Profile::paginate(10);
        return view('profiles.index', compact('profiles'));
    }

    public function show(Request $request) {
        // dd($request->id);
        $profile = Profile::findOrFail($request->id);
        return view('profiles.show', compact('profile'));
    }

    public function create()   {
        // dd('salam');
        return view('profiles.create');
    }

    public function store(Request $request)   {
        // dd($request->all());
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $bio = $request->bio;

        // validatio
        $request->validate([
            'name'=> 'required|string|max:255',
            'email'=> 'required|email',
        ]);
        // inserssion
        Profile::create([
            'name'=> $name,
            'email'=> $email,
            'password'=> bcrypt($password),
            'bio'=> $bio
        ]);
    }
}

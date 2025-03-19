<?php

namespace App\Http\Controllers;

use App\Http\Requests\profileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profiler;

class profileController extends Controller
{
    public function index() {
        $profiles = Profile::paginate(10);
        return view('profiles.index', compact('profiles'));
    }

    public function show(Profile $profile) {

        // $profile = $id;
        // $profile = Profile::findOrFail($request->id);
        return view('profiles.show', compact('profile'));
    }

    public function create()   {
        // dd('salam');
        return view('profiles.create');
    }

    public function store(profileRequest $profileRequest)   {

        // dd($request->all());
        $name = $profileRequest->name;
        $email = $profileRequest->email;
        $password = $profileRequest->pass;
        $bio = $profileRequest->bio;
        // inserssion
        Profile::create([
            'name'=> $name,
            'email'=> $email,
            'pass'=> bcrypt($password),
            'bio'=> $bio
        ]);
        // return redirect()->route('profiles.index')->with('success','Profile created successfully.');
        //  return back();
        return to_route('profiles.index')->with('success', 'Profile created successfully');
    }
}

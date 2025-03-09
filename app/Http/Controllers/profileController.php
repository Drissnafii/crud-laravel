<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profiler;

class profileController extends Controller
{
    public function index() {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    public function show($id) {
        $profile = Profile::find($id);
        // dd($profile);
        return view('profiles.show', compact('profile'));
    }
}

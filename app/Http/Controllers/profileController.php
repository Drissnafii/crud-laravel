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
        $profile = Profile::find($request->id);
        if ($profile === NULL) {
            return abort(403);
        }
        return view('profiles.show', compact('profile'));
    }
}

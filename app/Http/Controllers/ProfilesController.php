<?php

namespace App\Http\Controllers;

use App\Models\profiles;
use App\Models\ChefEquipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function index()
    {
        $email= Auth::user()->email;
        $chef=ChefEquipe::where('mail',$email)->first();
        return view('profiles.profiles',compact('chef'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(profiles $profiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, profiles $profiles)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(profiles $profiles)
    {
        //
    }
}

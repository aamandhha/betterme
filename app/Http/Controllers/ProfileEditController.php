<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileEditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sessionUser = session('sessionUser');
        $fullUser = User::where('Username', $sessionUser)->first();

        $dublUsername = "";
        $dublEmail = "";

        return view('profile_edit', compact('sessionUser', 'fullUser', 'dublUsername', 'dublEmail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sessionUser = session('sessionUser');
        $fullUser = User::where('Username', $sessionUser)->first();

        $existingUsername = User::where('Username', $request->info_username_input)->first();
        if($existingUsername && $existingUsername->Email != $fullUser->Email)
        {
            $dublUsername = "This username has already been taken!";
            $dublEmail = "";
            return view('profile_edit', compact('sessionUser', 'fullUser', 'dublUsername', 'dublEmail'));
        }

        $existingEmail = User::where('Email', $request->info_email_input)->first();
        if($existingEmail && $existingEmail->Username != $fullUser->Username)
        {
            $dublUsername = "";
            $dublEmail = "An account already exists for this email address!";
            return view('profile_edit', compact('sessionUser', 'fullUser', 'dublUsername', 'dublEmail'));
        }

        $fullUser->FullName = $request->info_name_input;
        $fullUser->Username = $request->info_username_input;
        $fullUser->Email = $request->info_email_input;
        $fullUser->Language = $request->language;

        $request->session()->forget('sessionUser');
        $request->session()->put('sessionUser', $fullUser->Username);

        $fullUser->save();

        return view('profile', compact('sessionUser', 'fullUser'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

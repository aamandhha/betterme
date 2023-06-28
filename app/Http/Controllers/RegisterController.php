<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dublUsername = "";
        $dublEmail = "";
        return view('register', compact('dublUsername', 'dublEmail'));
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
        $user = new User();
        $user->FullName = $request->fullname;
        $user->Username = $request->username;
        $user->Email = $request->email;
        $user->Password = $request->psw;

        $allUsers = User::all();
        foreach($allUsers as $instanceUser)
        {
            if($instanceUser->Username == $user->Username)
            {
                $dublUsername = "This username has already been taken!";
                $dublEmail = "";
                return view('register', compact('dublUsername', 'dublEmail'));
            }

            if($instanceUser->Email == $user->Email)
            {
                $dublUsername = "";
                $dublEmail = "An account already exists for this email address!";
                return view('register', compact('dublUsername', 'dublEmail'));
            }
        }

        $user->save();

        #to perform a redirect back, we need country code from ID
        #$country = Country::findOrFail($request->country_id);

        return view('login');
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

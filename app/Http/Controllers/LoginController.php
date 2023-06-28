<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loginFail = "";
        return view('login', compact('loginFail'));
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
        $allUsers = User::all();
        foreach($allUsers as $instanceUser)
        {
            if(($request->email == $instanceUser->Email || $request->email == $instanceUser->Username) && $request->psw == $instanceUser->Password)
            {
                $request->session()->put('sessionUser', $instanceUser->Username);
                $sessionUser = session('sessionUser');
                return view('profile', compact('sessionUser'));
            }
        }

        $loginFail = "Incorrect password or email!";
        return view('login', compact('loginFail'));
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

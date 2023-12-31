<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AvatarEditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sessionUser = session('sessionUser');
        $fullUser = User::where('Username', $sessionUser)->first();

        return view('avatar_edit', compact('sessionUser', 'fullUser'));
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

        $fullUser->Avatar = $request->info_pic_input;

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

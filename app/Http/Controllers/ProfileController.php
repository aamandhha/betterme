<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*Izveido mainīgo sessionUser, lai būtu iespējams saglabāt lietotāja username, kas ir pieteicies
        un mainīgo fullUser, lai caur sessionUser objektu būtu iespēja piekļūt pārējiem lietotāja datiem*/
        $sessionUser = session('sessionUser');
        $fullUser = User::where('Username', $sessionUser)->first();

        /*padod uz profile skatu abus izveidotos mainīgos, lai ar tiem būtu iespēja darboties*/
        return view('profile', compact('sessionUser', 'fullUser'));
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
        //
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Progress;
use App\Models\Habbit;

class HabbitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sessionUser = session('sessionUser');
        $fullUser = User::where('Username', $sessionUser)->first();

        $allHabbits = Habbit::where('Owner_FK', $fullUser->User_ID)->get();

        return view('habbit', compact('sessionUser', 'allHabbits'));
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

        $progress = new Progress();
        $progress->save();
        $latestProgress = Progress::latest('Progress_ID')->first();

        $habbit = new Habbit();
        $habbit->HabbitName = $request->habbit_input;
        $habbit->Year = 2023;
        $habbit->Month = 6;
        $habbit->Owner_FK = $fullUser->User_ID;
        $habbit->Progress_FK = $latestProgress->Progress_ID;
        $habbit->save();

        $allHabbits = Habbit::where('Owner_FK', $fullUser->User_ID)->get();
        return view('habbit', compact('sessionUser', 'allHabbits'));
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
    public function destroy(Request $request)
    {
        $habbit = Habbit::where('Habbit_ID', $request->delHabbit)->first();
        $habbitProgressId = $habbit->Progress_FK;
        Habbit::findOrfail($request->delHabbit)->delete();
        Progress::findOrfail($habbitProgressId)->delete();

        $sessionUser = session('sessionUser');
        $fullUser = User::where('Username', $sessionUser)->first();
        $allHabbits = Habbit::where('Owner_FK', $fullUser->User_ID)->get();
        return view('habbit', compact('sessionUser', 'allHabbits'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Progress;
use App\Models\Habbit;

class GoalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $request->newGoal;

        $goal = new Goals();
        $goal->DaysNow = 0;
        $goal->DaysEnd = $request->days_end;
        $goal->save();

        $latestGoal = Goals::latest('Goal_ID')->first();
        $targetHabbit = Habbit::where('Owner_FK', $fullUser->User_ID)
            ->where('Month', $request->habbit_month)->first();

        $targetHabbit->Goal_FK = $latestGoal->Goal_ID;
        $targetHabbit->save();

        return redirect('/' . $sessionUser . '/habbits' . '/' . $request->habbit_month);
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

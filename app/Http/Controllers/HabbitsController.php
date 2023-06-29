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

        $progress = array();
        foreach($allHabbits as $habbit)
        {
            $p = Progress::where('Progress_ID', $habbit->Progress_FK)->first();
            array_push($progress, $p->Day_1, $p->Day_2, $p->Day_3, $p->Day_4,
            $p->Day_5, $p->Day_6, $p->Day_7, $p->Day_8, $p->Day_9, $p->Day_10,
            $p->Day_11, $p->Day_12, $p->Day_13, $p->Day_14, $p->Day_15, $p->Day_16,
            $p->Day_17, $p->Day_18, $p->Day_19, $p->Day_20, $p->Day_21, $p->Day_22,
            $p->Day_23, $p->Day_24, $p->Day_25, $p->Day_26, $p->Day_27, $p->Day_28,
            $p->Day_29, $p->Day_30, $p->Day_31);
        }

        return view('habbit', compact('sessionUser', 'allHabbits', 'progress'));
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

        return redirect('/' . $sessionUser . '/habbit');
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

    public function save(Request $request)
    {
        $habbitChecks = $request->habbit_check;

        foreach ($habbitChecks as $habbitId => $days) 
        {
            // $habbitId represents the habit ID
            $instanceHabbit = Habbit::where('Habbit_ID', $habbitId)->first();
            $instanceProgress = Progress::where('Progress_ID', $instanceHabbit->Progress_FK)->first();

            $instanceProgress->Day_1 = 0;
            $instanceProgress->Day_2 = 0;
            $instanceProgress->Day_3 = 0;
            $instanceProgress->Day_4 = 0;
            $instanceProgress->Day_5 = 0;
            $instanceProgress->Day_6 = 0;
            $instanceProgress->Day_7 = 0;
            $instanceProgress->Day_8 = 0;
            $instanceProgress->Day_9 = 0;
            $instanceProgress->Day_10 = 0;
            $instanceProgress->Day_11 = 0;
            $instanceProgress->Day_12 = 0;
            $instanceProgress->Day_13 = 0;
            $instanceProgress->Day_14 = 0;
            $instanceProgress->Day_15 = 0;
            $instanceProgress->Day_16 = 0;
            $instanceProgress->Day_17 = 0;
            $instanceProgress->Day_18 = 0;
            $instanceProgress->Day_19 = 0;
            $instanceProgress->Day_20 = 0;
            $instanceProgress->Day_21 = 0;
            $instanceProgress->Day_22 = 0;
            $instanceProgress->Day_23 = 0;
            $instanceProgress->Day_24 = 0;
            $instanceProgress->Day_25 = 0;
            $instanceProgress->Day_26 = 0;
            $instanceProgress->Day_27 = 0;
            $instanceProgress->Day_28 = 0;
            $instanceProgress->Day_29 = 0;
            $instanceProgress->Day_30 = 0;
            $instanceProgress->Day_31 = 0;

            foreach ($days as $dayNumber => $checked) 
            {
                // $dayNumber represents the day number
                if($dayNumber == 1) $instanceProgress->Day_1 = 1;
                if($dayNumber == 2) $instanceProgress->Day_2 = 1;
                if($dayNumber == 3) $instanceProgress->Day_3 = 1;
                if($dayNumber == 4) $instanceProgress->Day_4 = 1;
                if($dayNumber == 5) $instanceProgress->Day_5 = 1;
                if($dayNumber == 6) $instanceProgress->Day_6 = 1;
                if($dayNumber == 7) $instanceProgress->Day_7 = 1;
                if($dayNumber == 8) $instanceProgress->Day_8 = 1;
                if($dayNumber == 9) $instanceProgress->Day_9 = 1;
                if($dayNumber == 10) $instanceProgress->Day_10 = 1;
                if($dayNumber == 11) $instanceProgress->Day_11 = 1;
                if($dayNumber == 12) $instanceProgress->Day_12 = 1;
                if($dayNumber == 13) $instanceProgress->Day_13 = 1;
                if($dayNumber == 14) $instanceProgress->Day_14 = 1;
                if($dayNumber == 15) $instanceProgress->Day_15 = 1;
                if($dayNumber == 16) $instanceProgress->Day_16 = 1;
                if($dayNumber == 17) $instanceProgress->Day_17 = 1;
                if($dayNumber == 18) $instanceProgress->Day_18 = 1;
                if($dayNumber == 19) $instanceProgress->Day_19 = 1;
                if($dayNumber == 20) $instanceProgress->Day_20 = 1;
                if($dayNumber == 21) $instanceProgress->Day_21 = 1;
                if($dayNumber == 22) $instanceProgress->Day_22 = 1;
                if($dayNumber == 23) $instanceProgress->Day_23 = 1;
                if($dayNumber == 24) $instanceProgress->Day_24 = 1;
                if($dayNumber == 25) $instanceProgress->Day_25 = 1;
                if($dayNumber == 26) $instanceProgress->Day_26 = 1;
                if($dayNumber == 27) $instanceProgress->Day_27 = 1;
                if($dayNumber == 28) $instanceProgress->Day_28 = 1;
                if($dayNumber == 29) $instanceProgress->Day_29 = 1;
                if($dayNumber == 30) $instanceProgress->Day_30 = 1;
                if($dayNumber == 31) $instanceProgress->Day_31 = 1;
            }

            $instanceProgress->save();
        }

        $sessionUser = session('sessionUser');
        return redirect('/' . $sessionUser . '/habbit');
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
        return redirect('/' . $sessionUser . '/habbit');
    }
}

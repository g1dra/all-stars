<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class MatchController extends Controller
{
    public function scheduleMatch(Request $request)
    {

        $dateString = strtotime($request->datepicker);
        $date = date('Y-m-d',$dateString);
        $time = str_replace(' ', '', $request->timepicker);

        DB::table('schedule')->insert([
            'league' => $request->league,
            'location' => $request->location,
            'home' => $request->home,
            'guest' => $request->guest,
            'date' => $date,
            'time' => $time,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('/')->with('notifications','Countdown set!');
    }
}

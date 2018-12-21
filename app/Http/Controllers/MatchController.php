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

    public function storeResult(Request $request)
    {
        //dd($request->all());
        $dateString = strtotime($request->datepicker);
        $date = date('Y-m-d',$dateString);
        $time = str_replace(' ', '', $request->timepicker);
        DB::table('results')->insert([
            'league' => $request->league,
            'round' => $request->round,
            'location' => $request->location,
            'home' => $request->home,
            'guest' => $request->guest,
            'date' => $date,
            'time' => $time,
            "home_points" => $request->home_points,
            "guest_points" => $request->guest_points,
            "home_quarter_points" => $request->home_quarter_points,
            "home_assists" => $request->home_assists,
            "home_rebounds" => $request->home_rebounds,
            "home_steals" => $request->home_steals,
            "guest_quarter_points" => $request->guest_quarter_points,
            "guest_assists" => $request->guest_assists,
            "guest_rebounds" => $request->guest_rebounds,
            "guest_steals" => $request->guest_steals,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

    public function storeTable(Request $request)
    {
        $clubs = DB::table('clubs')->get();
        $array = array();
        for ( $i=0; $i<count($clubs); $i++)
        {
            $array[]= ['name' => $clubs[$i]->name,
                    'wins' => $request->wins[$i],
                    'losses' => $request->losses[$i],
                    'points' => $request->wins[$i] * 2 + $request->losses[$i],
                    'round' => $request->round
            ];
        }
        DB::table('table')->insert($array);
    }
}

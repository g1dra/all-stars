<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use DB;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function teamGrid()
    {
        $players = Player::all();
        return view('pages.team-grid',compact('players'));
    }

    public function setForm()
    {
        $lastMatch = DB::table('schedule')->get()->last();
        $clubs = DB::table('clubs')->get();
        $homeTeam = DB::table('clubs')->where('name','=', $lastMatch->home)->get()->first();
        $guestTeam = DB::table('clubs')->where('name','=', $lastMatch->guest)->get()->first();
        //dd($lastMatch->date);
        $date = date_create($lastMatch->date);
        $date = date_format($date, 'F d, Y H:i:s');
        $lastMatch->date = $date;
        //dd($lastMatch);
        return view('pages.set-form',compact(['lastMatch','clubs','homeTeam','guestTeam']));
    }


}

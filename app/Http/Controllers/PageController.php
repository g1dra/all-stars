<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use DB;
use App\Schedule;

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
        dd($lastMatch);
        return view('pages.set-form',compact(['lastMatch','clubs','homeTeam','guestTeam']));
    }




}

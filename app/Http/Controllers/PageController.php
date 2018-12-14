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
        $lastMatch = DB::table('schedule')->get()->last();
        $clubs = DB::table('clubs')->get();
        $homeTeam = DB::table('clubs')->where('name','=', $lastMatch->home)->get()->first();
        $guestTeam = DB::table('clubs')->where('name','=', $lastMatch->guest)->get()->first();
        $date = date_create($lastMatch->date);
        $date = date_format($date, 'F d, Y');
        $lastMatch->date = $date;
        //dd($lastMatch);
        return view('pages.home',compact(['lastMatch','clubs','homeTeam','guestTeam']));
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
        return view('pages.set-form',compact(['lastMatch','clubs','homeTeam','guestTeam']));
    }

    public function mckl()
    {
        $lastMatch = DB::table('schedule')->get()->last();
        $clubs = DB::table('clubs')->get();
        $homeTeam = DB::table('clubs')->where('name','=', $lastMatch->home)->get()->first();
        $guestTeam = DB::table('clubs')->where('name','=', $lastMatch->guest)->get()->first();
        $date = date_create($lastMatch->date);
        $date = date_format($date, 'F d, Y');
        $lastMatch->date = $date;
        return view('pages.mckl',compact(['lastMatch','clubs','homeTeam','guestTeam']));
    }

    public function setResult()
    {
        $clubs = DB::table('clubs')->get();
        return view('pages.set-result',compact('clubs'));
    }




}

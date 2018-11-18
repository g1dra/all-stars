<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teamGrid()
    {
        $players = Player::all();
        return view('pages.team-grid',compact('players'));
    }
}

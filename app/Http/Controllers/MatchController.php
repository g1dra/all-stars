<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function scheduleMatch(Request $request)
    {
        $input = $request->all();
        dd($input);
    }
}

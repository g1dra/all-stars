<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\Contact;
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

    public function setCountdown()
    {
        return view('pages.set-countdown');
    }

    public function mckl()
    {
        return view('pages.mckl');
    }

    public function setResult()
    {
        return view('pages.set-result');
    }

    public function setTable()
    {
        return view('pages.set-table');
    }

    public function history()
    {
        return view('pages.history');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sendMail(Request $request)
    {
        $contactInfo = [ 'name' => $request->name,
                          'email'=>$request->email,
                          'subject' =>$request->subject,
                          'message' =>$request->message
            ];

        Mail::to('darko.vucetic7@gmail.com')->send(
          new Contact($contactInfo)
        );
        //return 'success';
    }


}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $lastMatch = DB::table('schedule')->get()->last();
        $clubs = DB::table('clubs')->get();
        $homeTeam = DB::table('clubs')->where('name','=', $lastMatch->home)->get()->first();
        $guestTeam = DB::table('clubs')->where('name','=', $lastMatch->guest)->get()->first();
        $date = date_create($lastMatch->date);
        $date = date_format($date, 'F d, Y');
        $lastMatch->date = $date;
        $table = DB::table('table')->where('round','=', DB::table('table')->max('round'))->orderBy('points','desc')->get();
        $logos = DB::table('clubs')->pluck('img','name');
        $latestResults = DB::table('results')->where('home','=','All Stars')->orWhere('guest','=','All stars')
                                                    ->orderBy('date','desc')->get();
        $latestResult = $latestResults->first();
        View::share(['lastMatch' => $lastMatch,
                    'clubs' => $clubs,
                    'homeTeam' => $homeTeam,
                    'guestTeam' => $guestTeam,
                    'table' => $table,
                    'logos' => $logos,
                    'latestResults' => $latestResults,
                    'latestResult' => $latestResult
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

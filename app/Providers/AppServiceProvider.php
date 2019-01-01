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
        $lastMatch = DB::table('schedule')->get()->last();
        $clubs = DB::table('clubs')->get();
        $homeTeam = DB::table('clubs')->where('name','=', $lastMatch->home)->get()->first();
        $guestTeam = DB::table('clubs')->where('name','=', $lastMatch->guest)->get()->first();
        $date = date_create($lastMatch->date);
        $date = date_format($date, 'F d, Y');
        $lastMatch->date = $date;
        Schema::defaultStringLength(191);
        View::share(['lastMatch'=>$lastMatch,
                    'clubs'=>$clubs,
                    'homeTeam'=>$homeTeam,
                    'guestTeam'=>$guestTeam,
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

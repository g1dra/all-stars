<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use DB;
use App\Post;
use Laravel\Telescope\TelescopeServiceProvider;

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
        $lastMatch = DB::table('schedule')->orderBy('date')->get()->last();
        dd($lastMatch);
        $clubs = DB::table('clubs')->get();
        $homeTeam = DB::table('clubs')->where('name','=', $lastMatch->home)->get()->first();
        $guestTeam = DB::table('clubs')->where('name','=', $lastMatch->guest)->get()->first();
        $date = date_create($lastMatch->date);
        $date = date_format($date, 'F d, Y');
        $lastMatch->date = $date;
        $table = DB::table('table')->where('round','=', DB::table('table')->max('round'))->orderBy('points','desc')->get();
        $logos = DB::table('clubs')->pluck('img','name');
        $latestResults = DB::table('results')->where('home','=','All Stars')->orWhere('guest','=','All Stars')
                                                    ->orderBy('date','desc')->get();
        $latestResult = $latestResults->first();
        $posts = Post::orderBy('id', 'desc')
            ->take(3)
            ->get();

        View::share(['lastMatch' => $lastMatch,
                    'clubs' => $clubs,
                    'homeTeam' => $homeTeam,
                    'guestTeam' => $guestTeam,
                    'table' => $table,
                    'logos' => $logos,
                    'latestResults' => $latestResults,
                    'latestResult' => $latestResult,
                    'posts' => $posts
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(TelescopeServiceProvider::class);
        }
    }
}

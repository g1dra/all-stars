<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/team', function () {
    return view('team-roster');
});

Route::get('/team2', function () {
    return view('team-roster-1');
});

Route::get('/gallery', function () {
    return view('team-roster');
});

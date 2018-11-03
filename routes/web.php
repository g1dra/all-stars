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
Route::get('/',function (){
    return view('pages.home');
})->name('home');

Route::get('/staff',function (){
    return view('pages.staff');
})->name('staff');

Route::get('/history',function (){
    return view('pages.history');
})->name('history');






Route::get('/team', function () {
    return view('team-roster');
})->name('team');

Route::get('/team2', function () {
    return view('team-roster-1');
});

Route::get('/gallery', function () {
    return view('team-gallery');
});


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

Route::resource('team', 'PlayerController')->name('index','team');

Route::get('/grid','PageController@teamGrid')->name('teamGrid');

Route::get('/set-form','PageController@setForm')->name('setForm');

Route::post('/schedule-match', 'MatchController@scheduleMatch')->name('scheduleMatch');






Route::get('/team3', function () {
    return view('team-roster-1');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/video-gallery', function () {
    return view('pages.video-gallery');
})->name('video-gallery');;

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

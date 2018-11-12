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

//Route::get('/team', function () {
//    return view('pages.team');
//})->name('team');



Route::resource('team', 'PlayerController')->name('index','team');

Route::get('team2','PlayerController@index2')->name('team2');








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

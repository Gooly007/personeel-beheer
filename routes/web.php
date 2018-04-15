<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/* Route to login */
Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/main', 'HomeController@index')->name("main")->middleware('auth');
Route::get('/minor', 'HomeController@minor')->name("minor")->middleware('auth');

/* Routes to Personeel information */
Route::get('/registratie', 'HomeController@registratie')->name("registratie")->middleware('auth');

Route::get('/perszoeken', function() {
    return view('personeel/pers_zoeken');
});

/* Routes to Mutaties */
Route::get('/overtime', function() {
    return view('mutaties/overtime');
});
Route::get('/vakantie', function() {
    return view('mutaties/vakantie');
});
Route::get('/verzuim', function() {
    return view('mutaties/verzuim');
});
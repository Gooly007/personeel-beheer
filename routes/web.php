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
Route::get('/', 'HomeController@index')->name("main")->middleware('auth');
Route::get('/main', 'HomeController@index')->name("main")->middleware('auth');
Route::get('/minor', 'HomeController@minor')->name("minor")->middleware('auth');
/* Test old */
Route::get('/welcome','HomeController@welcome')->name("welcome")->middleware('auth');

/* Routes to Administratie */
Route::get('/bureaus','bureausController@index')->name("bureaus")->middleware('auth');
Route::post('/bureaus','bureausController@store')->middleware('auth');

/* Routes to Personeel information Registration */
Route::get('/registratie', 'pers_controller@personeel_registratie')->name("registratie")->middleware('auth');
Route::get('/pers_zoeken', 'pers_controller@personeel_zoeken')->name("pers_zoeken")->middleware('auth');
Route::get('/teamleider', 'pers_controller@personeel_teamleider')->name("teamleider");

/* Routes to Mutaties */
/* overtime mutatie */
Route::get('/overtime', 'mutaties_controller@overtime')->name("overtime")->middleware('auth');
/* vakantie mutatie */
Route::get('/vakantie', 'mutaties_controller@vakantie')->name("vakantie")->middleware('auth');
/* verzuim mutatie */
Route::get('/verzuim', 'mutaties_controller@verzuim')->name("verzuim")->middleware('auth');




/*
| 
|--------------------------------------------------------------------------
| Sample Codes for other functions
|--------------------------------------------------------------------------
|
|
*/

/* Route to query all personeel in DB */
Route::get('/test_perszoeken', function() {
    $personeel = DB::table('personeel_gegevens')->get();
    // return $personeel;
    return view('test_personeel/pers_zoeken', compact('personeel'));
})->middleware('auth');

/* Route to query personeel op id in DB */
Route::get('/test_perszoeken/{id}', function($id) {
    $personeelid = personeel_id::find($id);
    // return $personeelid;
    return view('test_personeel/pers_zoeken.show', compact('personeelid'));
});
/* verzuim mutatie */
Route::get('/sample', function() {
    return view('mutaties/verzuim');
})->middleware('auth');

/* Sample test Routes */
Route::get('foo', function () {
    return 'Bar';
});
Route::get('personeel', 'pers_controller@index');
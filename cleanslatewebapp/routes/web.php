<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/home/{werknemerID}/{name}', function ($werknemerID, $name) {
    return 'This is user '.$name.' with an ID of '.$werknemerID;
});
*/

//webpages
Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'WebpagesController@home');
Route::get('trainingen', 'TrainingenController@index');
Route::get('inschrijven', 'WebpagesController@inschrijven');
Route::get('boeken', 'WebpagesController@boeken');

//crud
Route::resource('Logingegeven', 'LogingegevensController');
Route::resource('Training', 'TrainingenController');
Route::resource('Les', 'LessenController');



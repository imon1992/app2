<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','Task2Controller@showArtists' 
);

Route::get('/artist/{id?}', 'Task2Controller@showAlbums');

Route::get('/album/{id?}', 'Task2Controller@showTracks');

Route::get('/track/{id?}', 'Task2Controller@showTrackInfo');

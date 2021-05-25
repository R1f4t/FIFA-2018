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

//Pages
Route::get('/','PagesController@home');
Route::get('/home','PagesController@home');
Route::get('/a{slug}', 'PagesController@show');

//Matches
Route::get('/matchcreate', 'MatchesController@create');
Route::post('/matchcreate', 'MatchesController@store');
Route::get('/match', 'MatchesController@match');
Route::get('/filter', 'MatchesController@filter');
Route::get('/m{slug}', 'MatchesController@show');

//Teams
Route::get('/teamcreate', 'TeamsController@create');
Route::post('/teamcreate', 'TeamsController@store');
Route::get('/team', 'TeamsController@team');
Route::get('/t{slug}', 'TeamsController@show');

//Players
Route::get('/playercreate', 'PlayersController@create');
Route::post('/playercreate', 'PlayersController@store');
Route::get('/player', 'PlayersController@player');
Route::get('/p{slug}', 'PlayersController@show');

//Stadiums
Route::get('/stadiumcreate', 'StadiumsController@create');
Route::post('/stadiumcreate', 'StadiumsController@store');
Route::get('/stadium', 'StadiumsController@stadium');
Route::get('/s{slug}', 'StadiumsController@show');

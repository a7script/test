<?php
Route::get('/', 'PagesController@index');
Route::get('/players', 'HomeController@players');
Route::get('/teams', 'HomeController@teams');
Route::get('/management', 'HomeController@management');

// Ajax
Route::get('/get-players', 'HomeController@getPlayers');
Route::post('addPlayer', 'HomeController@addPlayer');

Route::get('/get-teams', 'HomeController@getTeams');
Route::post('addTeam', 'HomeController@addTeam');


Route::post('removePlayerFromTeam', 'HomeController@removePlayerFromTeam');
Route::post('get-all-players', 'HomeController@getAllPlayers');
Route::post('assignPlayer', 'HomeController@assignPlayer');

Route::get('/get-teams-and-players', 'HomeController@getTeamsAndPlayers');

Route::post('upload22', 'HomeController@upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

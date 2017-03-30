<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'uses' => 'PagesController@getIndex', 
	'as' => 'index'
]);

Route::get('primero', [
	'uses' => 'PagesController@getprimero', 
	'as' => 'primero'
]);
Route::get('segundo', [
	'uses' => 'PagesController@getsegundo', 
	'as' => 'segundo'
]);
Route::get('tercero', [
	'uses' => 'PagesController@gettercero', 
	'as' => 'tercero'
]);
Route::get('cuarto', [
	'uses' => 'PagesController@getcuarto', 
	'as' => 'cuarto'
]);
Route::get('quinto', [
	'uses' => 'PagesController@getquinto', 
	'as' => 'quinto'
]);
Route::get('sexto', [
	'uses' => 'PagesController@getsexto', 
	'as' => 'sexto'
]);
Route::get('septimo', [
	'uses' => 'PagesController@getseptimo', 
	'as' => 'septimo'
]);

Route::get('octavo', [
	'uses' => 'PagesController@getoctavo', 
	'as' => 'octavo'
]);

Route::get('noveno', [
	'uses' => 'PagesController@getnoveno', 
	'as' => 'noveno'
]);
Route::get('decimo', [
	'uses' => 'PagesController@getdecimo', 
	'as' => 'primero'
]);
Route::get('once', [
	'uses' => 'PagesController@getonce', 
	'as' => 'segundo'
]);
Route::get('doce', [
	'uses' => 'PagesController@getdoce', 
	'as' => 'tercero'
]);
Route::get('trece', [
	'uses' => 'PagesController@gettrece', 
	'as' => 'cuarto'
]);
Route::get('catorce', [
	'uses' => 'PagesController@getcatorce', 
	'as' => 'quinto'
]);
Route::get('quince', [
	'uses' => 'PagesController@getquince', 
	'as' => 'sexto'
]);
Route::get('dicesiseis', [
	'uses' => 'PagesController@getdicesiseis', 
	'as' => 'septimo'
]);

Route::get('diecisiete', [
	'uses' => 'PagesController@getdiecisiete', 
	'as' => 'octavo'
]);

Route::get('dieciocho', [
	'uses' => 'PagesController@getdieciocho', 
	'as' => 'noveno'
]);


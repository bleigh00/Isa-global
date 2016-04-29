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

Route::get('/', function () {
    return view('home');
});
Route::get('/', [
	'uses' => '\Isa\Http\Controllers\HomeController@index',
	'as' => 'home',
	]);
Route::get('/about', [
	'uses' => '\Isa\Http\Controllers\HomeController@getAbout',
	'as' => 'about',
	]);
Route::get('/lesotho', [
	'uses' => '\Isa\Http\Controllers\HomeController@getLesotho',
	'as' => 'lesotho',
	]);
Route::get('/aikido', [
	'uses' => '\Isa\Http\Controllers\HomeController@getAikido',
	'as' => 'aikido',
	]);
Route::get('/enterprise', [
	'uses' => '\Isa\Http\Controllers\HomeController@getEnterprise',
	'as' => 'enterprise',
	]);
Route::get('/people', [
	'uses' => '\Isa\Http\Controllers\HomeController@getPeople',
	'as' => 'people',
	]);
Route::get('/contactus', [
	'uses' => '\Isa\Http\Controllers\HomeController@getContactus',
	'as' => 'contactus',
	]);
Route::get('/donate', [
	'uses' => '\Isa\Http\Controllers\HomeController@getDonate',
	'as' => 'donate',
	]);
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

Route::get('/', array( "as"=>"home",  function()
{
	return View::make('index');
}));

//AUTHENTICATION
//GET
Route::get('account/register', 'AuthController@getRegister');
Route::get('account/login', 'AuthController@getLogin');
Route::get('account/logout', 'AuthController@doLogout');

//POST
Route::post('account/create', 'AuthController@doRegister');
Route::post('account/authenticate', 'AuthController@doLogin');
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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('index', function() {
            phpinfo();
            exit;
    return View::make("index");
});

Route::get('player/new', array('as' => 'player.form', 'uses' => 'PlayerController@newPlayerForm'));

Route::post('player/create', array('as' => 'player.create', 'uses' => 'PlayerController@newPlayer'));
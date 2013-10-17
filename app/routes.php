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


/*
 * Loads the landing page
 */
Route::get('/', function()
{
	return View::make('hello');
});

/*
 * Route Models
 * These routes are used to access and update data models
 */
Route::model('player', 'Player');
Route::model('transaction', 'Transaction');


Route::get('index', function() {
            
    return View::make("index");
});

Route::get('player', array('as' => 'player.main', 'uses' => 'PlayerController@playerMain'));

Route::get('player/new', array('as' => 'player.form', 'uses' => 'PlayerController@newPlayerForm'));

Route::post('player/create', array('as' => 'player.create', 'uses' => 'PlayerController@newPlayer'));

Route::get('player/login', 'PlayerController@login');

Route::post('login', array('as' => 'player.login', 'uses' => 'PlayerController@validate'));

Route::get('admin', array('as' => 'admin', 'uses' => 'AdminController@adminMain'));

Route::get('admin/transaction', 'AdminController@transaction');

Route::post('trans', array('as' => 'admin.trans', 'uses' => 'AdminController@newTransaction'));
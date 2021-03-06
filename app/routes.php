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
Route::model('user', 'User');
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

Route::get('admin/transaction', array('as' => 'new.trans', 'uses' => 'AdminController@transaction'));

Route::post('trans', array('as' => 'admin.trans', 'uses' => 'AdminController@newTrans'));

Route::get('admin/transaction/all', array('as' => 'all.trans', 'uses' => 'AdminController@allTrans'));

Route::get('admin/transaction/due', array('as' => 'due.trans', 'uses' => 'AdminController@dueTrans'));
    //will collect all names that haven't paid
/*
 * For data analysis, let's create a control that generates the new round of dues.
 * use this to add a balance to all 'player' type users.
 * balance --> is generated and updated from dashboard
 */

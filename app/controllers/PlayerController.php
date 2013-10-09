<?php

class PlayerController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function newPlayerForm()
	{
		return View::make('player.newPlayer')->with('message',Session::get('message',false));
	}
        public function newPlayer()
        {
                $player = new Player();
                $player->username = Input::get('username');
                $player->first = Input::get('firstname');
                $player->last = Input::get('lastname');
                $player->email = Input::get('email');
                $player->save();
                
                Session::flash('message', 'User Created');
                return Redirect::route('player.form')->with('message',Session::get('message',false));
        }

}
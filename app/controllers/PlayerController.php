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
            $pass = Input::get('password');
            $check = Input::get('passcheck');
            if ($pass == $check) { //Password and passcheck match
                $player = new Player();
                $player->username = Input::get('username');
                $player->first = Input::get('firstname');
                $player->last = Input::get('lastname');
                $player->email = Input::get('email');
                $player->password = Hash::make($pass);
                $player->usauaccount = Input::get('usauacct');
                $player->usauexpdate = Input::get('usauexpdate');
                $player->save();
                
                Session::flash('message', 'User Created');
                return Redirect::route('player.form')->with('message',Session::get('message',false));
            }
            //password didn't match
            Session::flash('message', 'Your passwords didn\'t match, please retype your password.');
            return Redirect::route('player.form')->with('message',Session::get('message',false));
                
        }

}
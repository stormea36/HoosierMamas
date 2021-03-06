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

    public function playerMain() {
        $player = PlayerService::playerList();
           return View::make('player.playerMain')->with('player',$player); 
        
    }

    public function newPlayerForm() {
        return View::make('player.newPlayer')->with('message', Session::get('message', false));
    }

    public function login() {
        If (Auth::check()) {
            return Redirect::to('user');
        }
        return View::make('player.login')->with('message', Session::get('message', false));
    }

    public function validate() {
        $username = Input::get('username');
        $password = Input::get('password');
        $login = array(
            'username' => $username,
            'password' => $password
        );
        if (Auth::attempt($login)) {
            Session::put('user', Auth::user($login));
            return Redirect::intended('player');
            //implement flash line
        }
        return Redirect::route('player.login')->with('flash_error', 'Your username/password combination was incorrect.')->withInput();
    }

    public function newPlayer() {
        $pass = Input::get('password');
        $check = Input::get('passcheck');
        if ($pass == $check) { //Password and passcheck match
            $player = new User();
            $player->username = Input::get('username');
            $player->name = Input::get('name');
            $player->user_type = 'player';
            $player->email = Input::get('email');
            $player->password = Hash::make($pass);
            $player->save();

            Session::flash('message', 'User Created');
            return Redirect::route('player.form')->with('message', Session::get('message', false));
        }
        //password didn't match
        Session::flash('message', 'Your passwords didn\'t match, please retype your password.');
        return Redirect::route('player.form')->with('message', Session::get('message', false));
    }

    public function update(User $player) {
        $player = PlayerService::updatePlayer($player);
        Session::flash('message', 'User Updated');
        //return Redirect::route('user.detail',array($player->id));
    }

}
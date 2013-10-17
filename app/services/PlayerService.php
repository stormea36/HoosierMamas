<?php

class PlayerService {
    
    public static function updatePlayer() {
        $username = DB::table('players')->select('username')->where('username', Input::get('username'))->get();
        if($username) { //if username exists
            return 1;
        }
        
        return 0;
    }
    
    public static function playerList() {
        $players = Player::all();
        return $players;
    }
    
}

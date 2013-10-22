<?php

class PlayerService {
    
    public static function updatePlayer() {
        $username = DB::table('users')->select('username')->where('username', Input::get('username'))->get();
        if($username) { //if username exists
            return 1;
        }
        
        return 0;
    }
    
    public static function playerList() {
        $players = User::where('user_type','player')->get();
        
        return $players;
    }
    
}

<?php

class AdminController extends BaseController {
    
    public function adminMain() {
        return View::make('admin.adminMain');
    }
    public function transaction() {
        
        $username = Player::all();
        
        return View::make('admin.transaction')->with('username',$username);
    }
}
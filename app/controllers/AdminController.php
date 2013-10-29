<?php

class AdminController extends BaseController {
    
    public function adminMain() {
        return View::make('admin.adminMain');
    }
    public function transaction() {
        
        $username = User::all();
        $transactions = Transaction::where('trans_type','dues')->get();
        return View::make('admin.transaction')->with('username',$username)->with('trans',$transactions)->with('message', Session::get('message', false));;
    }
    public function newTrans() {
        $user = User::where('name',Input::get('user'))->get();
        
        if ($user[0]) { //a user was found in the Database
            $trans = new Transaction();
            $trans->user_id = $user[0]->id;
            $trans->date = Input::get('date');
            $trans->trans_type = Input::get('type');
            $trans->amount = Input::get('amount');
            $trans->income_expense = Input::get('inc_exp');
            $trans->save();

            Session::flash('message', 'Transaction Saved!');
            return Redirect::route('new.trans')->with('message', Session::get('message', false));
        }
        //password didn't match
        Session::flash('message', 'The user entered does not seem to exist, please reenter the information.');
        return Redirect::route('player.form')->with('message', Session::get('message', false));
        
    }
}
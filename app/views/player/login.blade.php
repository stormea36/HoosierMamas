@extends('layout')
@section('content') 

<div class="container">
    <div class='col-lg-12'>
        {{ Form::open(array('route' => 'player.login', 'method' => 'POST', 'class' => 'form-horizontal')) }}
        <fieldset>
            <div class="form-group">
                <label for="username" class="control-label">Username</label>
                {{ Form::text('username', Input::old('username'),array('placeholder' => 'Username', 'class' => 'form-control')) }}
                </div>

                <div class="form-group"> 
                    <label for="inputPassword1" class="control-label">Password</label>
                    {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}

                </div>

            
            <div class="form-group">
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>


        </fieldset>
    </div>


{{Form::close() }}

</div>

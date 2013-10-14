@extends('layout')
@section('content') 

<div class="container">
    <div class='col-lg-12'>
       {{ Form::open(array('route' => 'player.login', 'method' => 'POST')) }}
       <fieldset>
       {{ Form::text('username', Input::old('username'),array('placeholder' => 'Username')) }}
            </br>
            {{ Form::password('password', array('placeholder' => 'Password')) }}

            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div> <!-- /form-actions -->
            </div>
        </fieldset>
        
        {{Form::close() }}
    </div>
</div>

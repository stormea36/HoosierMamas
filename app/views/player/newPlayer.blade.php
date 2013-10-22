@extends('layout')
@section('content') 
<div class='container'>
    <div class="row">
        @if($message)
        <div id='message'>{{$message}}</div>
        @endif   

        {{ Form::open(array('route' => 'player.create', 'id' => 'signupform')) }}

        <fieldset>
            <div class="control-group">											
                <label class="control-label" for="name">Name</label>
                <div class="controls">
                    {{ Form::text('name') }}
                </div> <!-- /controls -->
                <td class="status"></td>
            </div> <!-- /control-group -->

            <div class="control-group">											
                <label class="control-label" for="username">Username</label>
                <div class="controls">
                    {{ Form::text('username') }}
                </div> <!-- /controls -->
                <td class="status"></td>
            </div> <!-- /control-group -->

            <div class="control-group">											
                <label class="control-label" for="username">Password</label>
                <div class="controls">
                    {{ Form::password('password') }}
                </div> <!-- /controls -->
                <td class="status"></td>
            </div> <!-- /control-group -->

            <div class="control-group">											
                <label class="control-label" for="username">Confirm Password</label>
                <div class="controls">
                    {{ Form::password('passcheck') }}
                </div> <!-- /controls -->
                <td class="status"></td>
            </div> <!-- /control-group -->

            <div class="control-group">											
                <label class="control-label" for="email">Email Address</label>
                <div class="controls">
                    {{ Form::text('email') }}
                </div> <!-- /controls -->
                <td class="status"></td>
            </div> <!-- /control-group -->

            <br />


            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save</button> 
                <button class="btn">Cancel</button>
            </div> <!-- /form-actions -->

            {{ Form::close() }}
        </fieldset> 
    </div>

</div>

@stop
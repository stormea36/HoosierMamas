@extends('layout')
@section('content') 
<script>
$(function() {
   var players = [
       @foreach($username as $user)"{{$user->name}}",@endforeach] 
   $( "#user" ).autocomplete({
      source: players
    });
});
</script>
<div class="container">
    <div class='col-lg-12'>
        <h1>
            HoosierMama's Admin Dashboard
        </h1>
        @if(Auth::check())
    <h3>Logged in: {{Auth::user()->username}}</h3>
    @endif
    </div>
    
    <hr>
    <div class='row'>
        <div class='col-lg-3'>
            <ul class="nav nav-pills nav-stacked">
  <li><a href="#">All Transactions</a></li>
  <li class='active'><a href="#">New Transaction</a></li>
  <li><a href="#">Late Payees</a></li>
</ul>
        </div>
        
        <div class='col-lg-9'>
            <h2>Hello World</h2>
            @if($message)
            <div id='message'>{{$message}}</div>
            @endif
            
            
            {{ Form::open(array('route' => 'admin.trans', 'id' => 'transaction')) }}
            
            <div class="control-group">											
                <label class="control-label" for="user">User's Name</label>
                <div class="controls">
            {{ Form::text('user', null, array('id' => 'user')) }}
                </div>
            </div>
            
            <div class="control-group">											
                <label class="control-label" for="amount">Amount</label>
                <div class="controls">
            {{ Form::text('amount') }}
                </div>
            </div>
            
            <div class="control-group">											
                <label class="control-label" for="amount">Transaction Type:</label>
                <div class="controls">
            {{ Form::select('type', array('dues' => 'dues', 'tournament' => 'tournament', 'fronted' => 'fronted', 'past' => 'past owed')) }}
                </div>
            </div>
            
            <div class="control-group">											
                <label class="control-label" for="datepicker">Transaction Date</label>
                <div class="controls">
                    {{ Form::text('date', null, array('id' => 'datepicker')) }}
                </div> <!-- /controls -->
                <div class="status"></div>
            </div> <!-- /date -->
            
            
             <div class="control-group">											
                <label class="control-label" for="incExp"></label>
                <div class="controls">
            Income {{ Form::radio('inc_exp','1') }}
            Expense {{ Form::radio('inc_exp','0') }}
                </div>
            </div>
            <br>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Submit Transaction</button> 
                <button class="btn">Cancel</button>
            </div> <!-- /form-actions -->
            
            {{ Form::close() }}
        </div>
    </div>

</div>
<script>
    $(function() {
    $("#datepicker").datepicker();
  });
</script>
@stop
@extends('layout')
@section('content') 
<script>
$(function() {
   var players = [
       @foreach($username as $user)"{{$user->first}} {{$user->last}}",@endforeach] 
   $( "#tags" ).autocomplete({
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
  <li><a href="#">All</a></li>
  <li class='active'><a href="#">Mama?s</a></li>
  <li><a href="#">Daddy?s</a></li>
</ul>
        </div>
        
        <div class='col-lg-9'>
            <h2>Hello World</h2>
            
            
            {{ Form::open(array('route' => 'admin.trans', 'id' => 'transaction')) }}
            
            <div class="control-group">											
                <label class="control-label" for="datepicker">Player</label>
                <div class="controls">
            <input type="text" id="tags">
            
            <div class="control-group">											
                <label class="control-label" for="datepicker">Transaction Date</label>
                <div class="controls">
                    {{ Form::text('usauexp', null, array('id' => 'datepicker')) }}
                </div> <!-- /controls -->
                <div class="status"></div>
            </div> <!-- /date -->
            
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
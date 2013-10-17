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
            HoosierMama's Player Dashboard
        </h1>
        @if(Auth::check())
    <h3>Logged in: {{Auth::user()->username}}</h3>
    @endif
    </div>
    
    <hr>
    <div class='row'>
        <input type="text" id="tags">
        <div class='col-lg-3'>
            <ul class="nav nav-pills nav-stacked">
  <li><a href="#">All</a></li>
  <li class='active'><a href="#">Mama?s</a></li>
  <li><a href="#">Daddy?s</a></li>
</ul>
        </div>
        
        <div class='col-lg-9'>
            <table class='table'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        
                    </tr>
                </thead>
                <tbody>
                   @foreach($player as $player)
                   <tr>
                       <td>{{ $player->id }}</td>
                       <td>{{ $player->first }}</td>
                       <td>{{ $player->last }}</td>
                       <td>{{ $player->username }}</td>
                   </tr>
                   @endforeach
                </tbody>
                
            </table>
        </div>
    </div>

</div>
<script>
$('.typeahead').typeahead()
</script>
@stop
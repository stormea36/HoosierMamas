@extends('layout')
@section('content') 

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
        <input type="text" id="tags">
        <div class='col-lg-3'>
            <ul class="nav nav-pills nav-stacked">
  <li><a href="#">All</a></li>
  <li class='active'><a href="#">Mama?s</a></li>
  <li><a href="#">Daddy?s</a></li>
</ul>
        </div>
        
        <div class='col-lg-9'>
            <h2>Hello World</h2>
        </div>
    </div>

</div>
@stop
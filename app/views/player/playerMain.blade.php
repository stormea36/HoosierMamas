@extends('layout')
@section('content') 

<div class="container">
    <div class='col-lg-12'>
        <h1>
            HoosierMama's Player Dashboard
        </h1>
        @if(Auth::check())
    <h3>Logged in/h3>
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
            <table class='table'>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        
                    </tr>
                </thead>
                <tbody>
                   <tr>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>Table Data</td>
                </tr>
                <tr>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>Table Data</td>
                </tr>
                <tr>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>Table Data</td>
                </tr>
                <tr>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>Table Data</td>
                </tr> 
                </tbody>
                
            </table>
        </div>
    </div>

</div>

@stop
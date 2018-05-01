@extends('layouts.default')

@section('content')

    <h1> Add the Player with the next most sixes </h1>
    
    
    <form action="/cricketers/store" method= "post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" >

        <div>
        <label for="name">Player Name:</label>
        <input type="text" id="name">
        </div>

        <div>
        <label for="number_of_sixes">Number of Sixes:</label>
        <input type="number" id="number_of_sixes">
        </div>

        <div>
        <label for="number_of_matches">Number of Matches:</label>
        <input type="number" id="number_of_matches">                
        </div>

        <div>
        <label for="age">Age:</label>
        <input type="number" id="age">
        </div>
        <br> <input type="submit"> </br>
    </form>

    

@stop
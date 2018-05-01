@extends('layouts.default')

@section('content')
    
    <h1>Cricketers with the most sixes in their international career</h1>

    @foreach ($cricketers as $cricketer)
      <li> <a href="/cricketers/{{$cricketer->name}}"> {{ $cricketer->name }} </a></li>
    @endforeach

    <p> <a href="/cricketers/create"> Add the cricketer with next most sixes </a></p>

@stop
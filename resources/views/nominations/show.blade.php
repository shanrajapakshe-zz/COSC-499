@extends('main')
@section('title', 'Nominations')


@section('content')

    <div class="row">	
        <h1>Nomination #{{$nomination->id}}</h1>
        	{{$nomination->studentFirstName}} {{$nomination->studentLastName}} - {{$nomination->studentNum}}
    </div>
@endsection
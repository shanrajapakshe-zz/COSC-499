@extends('main')
@section('title', 'Nominations')


@section('content')

    <div class="row">	
        <h1>All Nominations</h1>

        @foreach ($nominations as $nomination)
	        <li>
	        	{{$nomination->studentFirstName}} {{$nomination->studentLastName}} - {{$nomination->studentNum}}
	        </li>
        @endforeach

    </div>
@endsection
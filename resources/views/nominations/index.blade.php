@extends('main')
@section('title', 'Nominations')


@section('content')

    <div class="row">	
        <h1>All Posts</h1>
        @foreach ($nominations as $nomination)
        <div>
        	{{$nomination->studentNum}}
        </div>
        @endforeach
    </div>
@endsection
@extends('main')
@section('title', 'Nominations')


@section('content')

    <div class="row">	
        <h1>All Nominations</h1>
		
		<table style="width:75%">
			<tr>
				<th>Student Number</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Course</th>
				<th>Section</th>
				<th>Grade</th>
				<th>Description</th>
			</tr>
	        
	        <tr>
	        @foreach ($nominations as $nomination)
		        <td>{{$nomination->studentNum}}</td>
		        <td>{{$nomination->studentFirstName}}</td>
		        <td>{{$nomination->studentLastName}}</td>
{{-- 		        <td>{{$course->course}}</td>
		        <td>{{$course->section}}</td>
		        <td>{{$course->actGrade}}</td>
		        <td>{{$course->description}}</td> --}}
		    </tr>      
	        @endforeach

		</table>
    </div>
@endsection
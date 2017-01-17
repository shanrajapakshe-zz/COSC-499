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
				<th>Email</th>
				<th>Grad This Year?</th>
				<th>Description</th>
				<th>Professor Number</th>
			</tr>
	        
	        <tr>
	        @foreach ($nominations as $nomination)
		        <td>{{$nomination->studentNumber}}</td>
		        <td>{{$nomination->studentFirstName}}</td>
		        <td>{{$nomination->studentLastName}}</td>
		        <td>{{$nomination->email}}</td>
		        <td>{{$nomination->gradThisYear}}</td>
		        <td>{{$nomination->description}}</td>
		        <td>{{$nomination->professorNo}}</td>
		    </tr>      
	        @endforeach

		</table>
    </div>
@endsection
@extends('main')
@section('title', 'Nominations')


@section('content')

    <div class="row">	
        <h1>All Nominations</h1>
		
		<table style="width:75%">
			<tr>
				<th>Award</th>
				<th>Student Number</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Description</th>
				<th>Professor Name</th>
			</tr>
	        
	        <tr>
	        @foreach ($nominations as $nomination)
	        	<td>{{$nomination->award->name}}</td>
		        <td>{{$nomination->studentNumber}}</td>
		        <td>{{$nomination->studentFirstName}}</td>
		        <td>{{$nomination->studentLastName}}</td>
		        <td>{{$nomination->email}}</td>
		        <td>{{$nomination->description}}</td>
		        <td>{{$nomination->prof->firstName}}</td>
		    </tr>      
	        @endforeach
		</table>
    </div>
@endsection
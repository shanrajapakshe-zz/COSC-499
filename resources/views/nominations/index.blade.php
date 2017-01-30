@extends('main')
@section('title', 'Nominations')


@section('content')

    <div class="row">	
        <h1>All Nominations</h1>
		
		<table class="table table-striped table-bordered" style="width:85%">
			<tr>
				<th>Award</th>
				<th>Student Number</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Description</th>
				<th>Professor Name</th>
				<th>Delete</th>
				<th>Edit</th>
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
		        <td>
	              <form class="form-horizontal" action="{{url ('#')}}" method="POST">
	                <input type="hidden" name="_method" value="DELETE">
	                {{ csrf_field() }}
	                <div class="form-group">
	                  <div class="col-sm-10">
	                    <button type="submit" class="btn btn-danger">X</button>
	                  </div>
	                </div>
	              </form>
	            </td>
	            <td>
	              <form class="form-horizontal" action="{{url ('#') }}" method="GET">
	                {{ csrf_field() }}
	                <div class="form-group">
	                  <div class="col-sm-10">
	                    <button type="submit" class="btn btn-primary">Edit</button>
	                  </div>
	                </div>
	              </form>
	            </td>
        </tr>
		    </tr>      
	        @endforeach
		</table>
    </div>
@endsection
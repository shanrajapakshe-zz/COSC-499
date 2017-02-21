@extends('main')
@section('title', 'My Nominations')


@section('content')

    <div class="row">	
        <h1>My Nominations</h1>
		
		<table class="table table-striped table-bordered" style="width:85%">
			<tr>
				<th>Award</th>
				<th>Student Number</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Description</th>
				<th>Professor Name</th>
				<th>Course Grades</th>
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
		        <td>Dr. {{$nomination->prof->firstName}} {{$nomination->prof->lastName}}</td>
		        <td>
		        	@foreach ($nomination->course as $course)
		        	<ul>
		        		<li>
		        			<p>Course: {{$course->courseName}}	{{$course->courseNumber}}</p>
		        			<p>Grade: {{$course->finalGrade}}</p>
		        			<p>Rank: {{$course->rank}}</p>
		        		</li>
		        	</ul>	
		        	@endforeach
		        </td>
		        <td>
	              <form class="form-horizontal" action="{{url ('/nominations/destroy/'.$nomination->id) }}" method="POST">
	                <input type="hidden" name="_method" value="DELETE">
	                {{ csrf_field() }}
	                <div class="form-group">
	                  <div class="col-sm-10">
	                    <button type="submit" class="btn btn-danger" onclick="return confirmDelete()">X</button>
	                  </div>
	                </div>
	              </form>
	            </td>
	            <td>
	              <form class="form-horizontal" action="{{url ('/nominations/'.$nomination->id.'/edit') }}" method="GET">
	                {{ csrf_field() }}
	                <div class="form-group">
	                  <div class="col-sm-10">
	                    <button type="submit" class="btn btn-primary">Edit</button>
	                  </div>
	                </div>
	              </form>
	            </td>
		    </tr>   
	        @endforeach
		</table>
    </div>

<script>
function confirmDelete() {
    var result = confirm('Are you sure you want to delete this nomination?')
    if (result) {
      return true;
    }
    else {
      return false;
    }
  }
</script>
@endsection
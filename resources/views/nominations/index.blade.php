@extends('main')
@section('title', 'My Nominations')

@section('content')

<div class="row">
	<h1>My Nominations</h1>

	<table id= "myTable" class="table table-striped table-bordered" style="width:85%">
      	<thead>
      		<tr>
				<th>Award</th>
				<th>Student Number</th>
				<th>Name</th>
				<th>Email</th>
				<th>Description</th>
				<th>Professor Name</th>
				<th>Course Grades</th>
				<th>Remove</th>
				<th>Edit</th>
			</tr>
    	</thead>
		<tbody>
	        <tr>
	        @foreach ($nominations as $nomination)
	        	<td>{{$nomination->award->name}} {{$nomination->award->category->name}}</td>
		       	<td>{{$nomination->studentNumber}}</td>
		        <td>{{App\Nominee::find($nomination->studentNumber)['firstName']}} {{App\Nominee::find($nomination->studentNumber)['lastName']}}
		        </td>
		        <td>{{App\Nominee::find($nomination->studentNumber)['email']}}</td>
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
	                    <button type="submit" class="btn btn-danger" onclick="return confirmDelete()">Remove</button>
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
    	</tbody>
	</table>
</div>

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
<script type="text/javascript">
function confirmDelete() {
    var result = confirm('Are you sure you want to remove this nomination?')
    if (result) {
      return true;
    }
    else {
      return false;
    }
  }
  $(document).ready( function () {
      $('#myTable').DataTable();
  } );
</script>
@endsection

@extends('main')
@section('title', 'Professor Report')

@section('content')

@include('partials._adminNav')

<div class="row">
    <div class="col-md-12">
        <h1>Professor Report</h1>
	</div>
</div>

<table class="table table-striped table-bordered" style="width:75%">
    <tr>
    	<th>Professor First Name</th>
        <th>Professor Last Name</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <tr>
        @foreach ($profs as $prof)
        <td>{{$prof->firstName}}</td>
        <td>{{$prof->lastName}}</td>
        <td>
            <form class="form-horizontal" action="{{url ('/admin/prof/'.$prof->id.'/edit') }}" method="GET">
        	    {{ csrf_field() }}
                <div class="form-group">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </div>
            	</div>
            </form>
        </td>
        <td>
        	<form class="form-horizontal" action="{{url ('/admin/prof/destroy/'.$prof->id)}}" method="POST">
            	<input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <div class="form-group">
                 	<div class="col-sm-10">
                   		<button type="submit" class="btn btn-danger" onclick="return confirmDelete()">Delete</button>
                	</div>
                </div>
            </form>
        </td>
    </tr>
    	@endforeach
</table>
    <h3>Add new Prof</h3>
  	<form class="form-horizontal" action="{{url ('/admin/prof/store') }}" method="POST">
    	{{ csrf_field() }}

	    <div class="form-group">
	      <label class="control-label col-sm-2" for="firstName">Prof First Name*:</label>
	      <div class="col-sm-4">
	        <input type="textarea" class="form-control" id="firstName" placeholder="Enter Prof First Name" required  name="firstName">
	      </div>
	    </div>

	    <div class="form-group">
	      <label class="control-label col-sm-2" for="firstLast">Prof Last Name*:</label>
	      <div class="col-sm-4">
	        <input type="textarea" class="form-control" id="lastName" placeholder="Enter Prof Last Name" required  name="lastName">
	      </div>
	    </div>

      <div class="form-group">
	      <label class="control-label col-sm-2" for="email">Prof Email*:</label>
	      <div class="col-sm-4">
	        <input type="textarea" class="form-control" id="email" placeholder="Enter Prof Email" required  name="email">
	      </div>
	    </div>

      <div class="form-group" id="askAdmin">
        <label class="control-label col-sm-4" for="admin">Is this Professor an Admin?</label>
        <div class="checkbox">
          <label><input type="checkbox" id ="admin" name="admin" >Yes</label>
          </div>
      </div >

	    <div class="form-group">
	    	<div class="col-sm-10">
	    		<button type="submit" class="btn btn-primary">Add</button>
	    	</div>
	    </div>
  	</form>


    <script type="text/javascript">
    function confirmDelete() {
      var result = confirm('Are you sure you want to delete this professor?')
      if (result) {
        return true;
      }
      else {
        return false;
      }
    }
  </script>
@endsection

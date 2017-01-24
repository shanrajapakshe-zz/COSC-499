@extends('main')
@section('title', 'Admin Report')

@section('content')
<h3>Edit Award: {{$award->name}}</h3>
  <form class="form-horizontal" action="{{url ('/admin/report/award/'.$award->id.'/update') }}" method="POST">
  	<input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Award Name*:</label>
      <div class="col-sm-4">
        <input type="textarea" class="form-control" id="name" placeholder="Enter Award Name" required  name="name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="category">Award Category*:</label>
      <div class="col-sm-4">
        <select class="form-control" id="category" name="category">
              <option>First Year</option>
              <option>Second Year</option>
              <option>Upper Year</option>
              <option>Graduating</option>
              <option>Other</option>
            </select>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit Changes</button>
      </div>
    </div>
  </form>

@endsection
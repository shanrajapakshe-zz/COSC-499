@extends('main')
@section('title', 'Edit Prof Information')

@section('content')
<h3>Edit Prof: {{$prof->firstName}} {{$prof->lastName}}</h3>

  <form class="form-horizontal" action="{{url ('/admin/award/'.$prof->id.'/update') }}" method="POST">
  	<input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">First Name*:</label>
      <div class="col-sm-4">
        <input type="textarea" class="form-control" id="firstName" placeholder="Enter Prof First Name" required  name="firstName">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Last Name*:</label>
      <div class="col-sm-4">
        <input type="textarea" class="form-control" id="lastName" placeholder="Enter Prof Last Name" required  name="lastName">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit Changes</button>
      </div>
    </div>
  </form>

@endsection
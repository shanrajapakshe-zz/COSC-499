@extends('main')
@section('title', 'Edit Prof Information')

@section('content')
<h3>Edit Prof: {{$prof->firstName}} {{$prof->lastName}}</h3>

  <form class="form-horizontal" action="{{url ('/admin/award/'.$prof->id.'/update') }}" method="POST">
  	<input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}

    <div class="form-group">
      <label class="control-label col-sm-2" for="firstName">First Name*:</label>
      <div class="col-sm-4">
        <input type="textarea" class="form-control" id="firstName" value= {{$prof->firstName}} required  name="firstName">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="lastName">Last Name*:</label>
      <div class="col-sm-4">
        <input type="textarea" class="form-control" id="lastName" value= {{$prof->lastName}} required  name="lastName">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email*:</label>
      <div class="col-sm-4">
        <input type="textarea" class="form-control" id="email" value= {{$prof->email}} required  name="email">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit Changes</button>
      </div>
    </div>
  </form>

@endsection

@extends('main')
@section('title', 'Edit Prof Information')

@section('content')

<div class="container">
    <ul class="nav nav-tabs nav-justified">
      <li class="{{Request::is('admin/awardReport') ? "active" : "" }}"><a href="/admin/awardReport">Award Report</a></li>
      <li class="{{Request::is('admin/nominations') ? "active" : "" }}"><a href="/admin/nominations">All Nominations</a></li>
      <li class="{{Request::is('admin/nomineeInfo') ? "active" : "" }}"><a href="/admin/nomineeInfo">Nominee Info</a></li>
      <li class="{{Request::is('admin/award') ? "active" : "" }}"><a href="/admin/award">Edit Awards</a></li>
      <li class="{{Request::is('admin/categories') ? "active" : "" }}"><a href="/admin/categories">Edit Categories</a></li>
      <li class="active"><a href="/admin/prof">Edit Professors</a></li>
    </ul>
</div>
<h3>Edit Prof: {{$prof->firstName}} {{$prof->lastName}}</h3>

  <form class="form-horizontal" action="{{url ('/admin/prof/'.$prof->id.'/update') }}" method="POST">
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

    <div class="form-group" id="askAdmin">
      <label class="control-label col-sm-4" for="admin">Is this Professor an Admin?</label>
      <div class="checkbox">
        <label><input type="checkbox" id ="admin" name="admin" >Yes</label>
        </div>
    </div>

    <div class="form-group">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit Changes</button>
      </div>
    </div>
  </form>

@endsection

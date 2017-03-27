@extends('main')
@section('title', 'Edit Award Information')

@section('content')

<!-- Hard Code admin navbar to show where user currently is -->

<div class="container">
    <ul class="nav nav-tabs nav-justified">
      <li class="{{Request::is('admin/awardReport') ? "active" : "" }}"><a href="/admin/awardReport">Award Report</a></li>
      <li class="{{Request::is('admin/nominations') ? "active" : "" }}"><a href="/admin/nominations">All Nominations</a></li>
      <li class="{{Request::is('admin/nomineeInfo') ? "active" : "" }}"><a href="/admin/nomineeInfo">Nominee Info</a></li>
      <li class="active"><a href="/admin/award">Edit Awards</a></li>
      <li class="{{Request::is('admin/categories') ? "active" : "" }}"><a href="/admin/categories">Edit Categories</a></li>
      <li class="{{Request::is('admin/prof') ? "active" : "" }}"><a href="/admin/prof">Edit Professors</a></li>
    </ul>
</div>
<!--  END HARDCODED NAVBAR -->

<h3>Edit Award: {{$award->name}}</h3>
  <form class="form-horizontal" action="{{url ('/admin/award/'.$award->id.'/update') }}" method="POST">
  	<input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Award Name*:</label>
      <div class="col-sm-4">
        <input type="textarea" class="form-control" id="name" placeholder= "Enter new Award Name" required  name="name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="category">Award Category*:</label>
      <div class="col-sm-4">
        <select class="form-control" id="category" name="category">
          @foreach ($categories as $category)
              <option>{{$category->name}}</option>
          @endforeach
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

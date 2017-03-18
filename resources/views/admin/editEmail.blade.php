@extends('main')
@section('title', 'Edit Nominee Email')

@section('content')
<h3>Edit Nominee Email for Student: {{$nominee->studentNumber}}</h3>

  <form class="form-horizontal" action="{{url ('/admin/nomineeInfo/'.$nominee->studentNumber.'/update') }}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}

    <!-- Add all nominee info to the page but only allow email edits -->

    <div class="form-group">
      <label class="control-label col-sm-2" for="oldEmail">Old Nominee Email :</label>
      <p class="control-label col-sm-1" style="font-weight: 100px" for="oldEmail">{{$nominee->email}}</p>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">New Nominee Email*:</label>
      <div class="col-sm-4">
        <input type="textarea" class="form-control" id="email" placeholder="Enter Nominee Email" required  name="email">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit Changes</button>
      </div>
    </div>
  </form>

@endsection

@extends('main')
@section('title', 'Edit Nominee Email')

@section('content')
<h3>Edit Nominee Email: {{$nominee->email}}</h3>

  <form class="form-horizontal" action="{{url ('/admin/award/'.$nomineeInfo->email.'/update') }}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}

    <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="name">Nominee Student Number:</label>
      <div class="col-sm-4">
        <input type="textarea" class="form-control" id="studentNumber" placeholder="Given Student Number" required  name="studentNumber">
      </div>
    </div> -->

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Nominee Email*:</label>
      <div class="col-sm-4">
        <input type="textarea" class="form-control" id="nomineeInfo" placeholder="Enter Nominee Email" required  name="email">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit Changes</button>
      </div>
    </div>
  </form>

@endsection

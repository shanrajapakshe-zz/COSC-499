@extends('main')
@section('title', 'Admin Report')


@section('content')

<div class="container">
    <ul class="nav nav-tabs nav-justified">
      <li class="active"><a href="report">Report</a></li>
      <li><a href="nominations">Nominations</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-md-12">
        <h1>Awards Report</h1>
		</div>
</div>

<table style="width:75%">
      <tr>
        <th>Award Name</th>
        <th>Category</th>
      </tr>
        <tr>
          @foreach ($awards as $award)
            <td>{{$award->name}}</td>
            <td>{{$award->category}}</td>
        </tr>
          @endforeach

</table>

<h3>Add new Award</h3>
  <form class="form-horizontal" action="{{url ('/admin/report/store') }}" method="POST">
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
        <input type="textarea" class="form-control" id="name" placeholder="Enter Award Category" required name="category">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </div>
  </form>

<h3>Remove Award</h3>
  <form class="form-horizontal" action="{{url ('/admin/report/award/destroy') }}" method="DELETE">
      {{ csrf_field() }}

      <div class="form-group">
        <label class="control-label col-sm-2" for="award">Award*:</label>
        <div class="col-sm-3">
          <select class="form-control" id="award" name="award">
            @foreach ($awards as $award)
              <option>{{$award->name}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Remove</button>
        </div>
      </div>
    </form>

@endsection

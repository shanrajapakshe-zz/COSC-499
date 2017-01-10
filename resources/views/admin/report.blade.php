@extends('main')
@section('title', 'Admin Report')


@section('content')

<div class="container">
    <ul class="nav nav-tabs nav-justified">
      <li class="active"><a href="report">Report</a></li>
      <li><a href="portal">Portal</a></li>
      <li><a href="nominations">Nominations</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-md-12">
        <h1>Awards Report</h1>
        <p>Report Page should include:</p>
        <ul>
          <li>List of Awards with the number of nominations made</li>
          <li>Can have different views of it</li>
        </ul>
			</div>
</div>

<br>

<table style="width:75%">
      <tr>
        <th>Award ID</th>
        <th>Award Name</th>
      </tr>
    
        <tr>
          @foreach ($awards as $award)
            <td>{{$award->id}}</td>
            <td>{{$award->name}}</td>
        </tr>      
          @endforeach

@endsection

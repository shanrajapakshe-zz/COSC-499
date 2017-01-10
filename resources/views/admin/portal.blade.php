@extends('main')
@section('title', 'Admin Portal')


@section('content')

  <div class="container">
      <ul class="nav nav-tabs nav-justified">
        <li><a href="report">Report</a></li>
        <li class="active"><a href="portal">Portal</a></li>
        <li><a href="nominations">Nominations</a></li>
      </ul>
  </div>


<div class="row">
    <div class="col-md-12">
        <h1>Admin Portal</h1>
        <p>Portal Page should include:</p>
        <ul>
        	<li>Search Box with Search Button</li>
        	<li>Awards Report Download Buttton</li>
        	<li>Columns --> Number - Award - ID# - Course - Year</li>
        	<li>Fields with editable links</li>
        </ul>
	</div>
</div>
@endsection

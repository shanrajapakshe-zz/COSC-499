@extends('main')
@section('title', 'Nominations')


@section('content')

<div class="container">
    <ul class="nav nav-tabs nav-justified">
      <li><a href="report">Report</a></li>
      <li><a href="portal">Portal</a></li>
      <li class="active"><a href="nominations">Nominations</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-md-12">
        <h1>Nominations</h1>
        <p>Nominations Should include</p>
        <ul>
        	<li>List of approved Nominations</li>
        	<li>List of approved awards</li>
				</ul>
                <p> Nomination Report
			</div>
</div>

Order By
<select>
  <option value="Year">Year</option>
  <option value="Course">Course</option>
</select>

<br>

Filter By...
<br>
<br>
<input type="checkbox"> 2016
<input type="checkbox"> 2017
<input type="checkbox"> 2018
<br>

<br>

<input type="checkbox">DATA
<input type="checkbox">COSC
<input type="checkbox">STAT
<input type="checkbox">MATH
<br>
<br>

        <div class="form-group">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Apply Filters!</button>
          </div>
        </div>

<br>
<br>

<div class="row"> 
        <h1>All Nominations</h1>
    
    <table style="width:75%">
      <tr>
        <th>Student Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Course</th>
        <th>Section</th>
        <th>Grade</th>
        <th>Description</th>
      </tr>
          
          <tr>
          @foreach ($nominations as $nomination)
            <td>{{$nomination->studentNum}}</td>
            <td>{{$nomination->studentFirstName}}</td>
            <td>{{$nomination->studentLastName}}</td>
            <td>{{$nomination->course}}</td>
            <td>{{$nomination->section}}</td>
            <td>{{$nomination->actGrade}}</td>
            <td>{{$nomination->description}}</td>
        </tr>      
          @endforeach

    </table>
    </div>

@endsection

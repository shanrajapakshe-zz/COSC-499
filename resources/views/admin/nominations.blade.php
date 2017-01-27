@extends('main')
@section('title', 'Nominations')


@section('content')


<div class="container">
    <ul class="nav nav-tabs nav-justified">
      <li><a href="report">Report</a></li>
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

<select name="award">

    <option value="">Select...</option>

    @foreach ($awards as $award)

    <option value={{$award->awardName}}>{{$award->awardName}}</option>

    @endforeach

</select>

<div class="row">
        <h1>All Nominations</h1>

    <table style="width:75%">
      <tr>
        <th>Award</th>
        <th>Student Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Description</th>
        <th>Professor Name</th>
      </tr>

          <tr>
          @foreach ($nominations as $nomination)
            <td>{{$nomination->award->name}}</td>
            <td>{{$nomination->studentNumber}}</td>
            <td>{{$nomination->studentFirstName}}</td>
            <td>{{$nomination->studentLastName}}</td>
            <td>{{$nomination->email}}</td>
            <td>{{$nomination->description}}</td>
            <td>{{$nomination->prof->firstName}}</td>
        </tr>      
          @endforeach

    </table>
    </div>

@endsection

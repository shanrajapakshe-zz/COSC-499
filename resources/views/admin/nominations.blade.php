@extends('main')
@section('title', 'Nominations Report')

@section('content')

@include('partials._adminNav')

<div class="row">
    <div class="col-md-12">
        <h1>Nomination Report</h1>
		</div>

    <div class="col-md-12">
      <select>
        <option value="Year">Year</option>
        <option value="Course">Course</option>
      </select>
    </div>
</div>


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

<br>

<!-- nav bar  -->

<nav class="navbar navbar-default">
<div class="col-sm-12 col-sm-offset-2">


<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Course(s) <span class="caret"></span></button>
<ul class="dropdown-menu">
  @foreach ($awards as $award)
    <li><a href="#" class="small" data-value="{{$award->name}}"+" tabIndex="-1"><input type="checkbox"/>&nbsp;<option>{{$award->name}}</option></a></li>
  @endforeach
 </ul>




</div>
</nav>



<!-- nav bar  -->
<div class="row">
        <h1>All Nominations</h1>

    <table class="table table-striped table-bordered" style="width:75%">
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



<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript">

var options = [];
$( '.dropdown-menu a' ).on( 'click', function( event ) {

 var $target = $( event.currentTarget ),
     val = $target.attr( 'data-value' ),
     $inp = $target.find( 'input' ),
     idx;

 if ( ( idx = options.indexOf( val ) ) > -1 ) {
    options.splice( idx, 1 );
    setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
 } else {    options.push( val );
    setTimeout( function() { $inp.prop( 'checked', true ) }, 0); }

 $( event.target ).blur();

 console.log( options );
 return false;
});
    </script>



@endsection

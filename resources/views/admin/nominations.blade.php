@extends('main')
@section('title', 'Nominations Report')

@section('content')

@include('partials._adminNav')



<br>
<br>

<!-- nav bar  -->


<nav class="navbar navbar-default">



<div class="btn-group">
<button type="button" class="btn btn-default btn-sm dropdown-toggle"  data-toggle="dropdown">Award(s) <span class="caret"></span></button>
<span class="dropdown-menu" id= "awardOptions">
  @foreach ($awards as $award)
    <li><a href="#" class="small" data-value="{{$award->name}}"+" tabIndex="-1"><input type="checkbox"/>&nbsp; <option>{{$award->name}}</option></a></li>"
  @endforeach
</span></div>



<div class="btn-group">
<button type="button" class="btn btn-default btn-sm dropdown-toggle"  data-toggle="dropdown">Date(s) <span class="caret"></span></button>
 <span class="dropdown-menu"  id="dateOptions">
   @foreach  ($nominations as $nomination)
     <li><a href="#" class="small" data-value="{{$nomination->created_at}}"+" tabIndex="-1"><input type="checkbox"/>&nbsp;<option>{{$nomination->created_at}}</option></a></li>"
   @endforeach
 </span> </div>


<div class="btn-group">
 <button type="button" class="btn btn-default btn-sm dropdown-toggle"  data-toggle="dropdown">Course(s) <span class="caret"></span></button>
  <span class="dropdown-menu"  id="courseOptions">
    @foreach  ($courses as $course)
      <li><a href="#" class="small" data-value="{{$course->courseName0}}"+" tabIndex="-1"><input type="checkbox"/>&nbsp;<option>{{$course->courseName0}}</option></a></li>"
    @endforeach
  </span> </div>
 <div class="btn-group">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
</nav>




    <table id="myTable" class="table table-striped table-bordered" style="width:75%">
<thead>
      <tr>
        <th>Award</th>
        <th>Professor Name</th>
        <th>Student Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Nomination Date</th>

        </tr>
      </thead>
<tbody>
          <tr>
          @foreach ($nominations as $nomination)
            <td>{{$nomination->award->name}}</td>
            <td>{{$nomination->prof->firstName}}</td>
            <td>{{$nomination->studentNumber}}</td>
            <td>{{$nomination->studentFirstName}}</td>
            <td>{{$nomination->studentLastName}}</td>
            <td>{{$nomination->created_at}}</td>
            </tr>
          @endforeach

</tbody>

    </table>
    </div>


<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
<script type="text/javascript">



var awardOptions = [];
$( '#awardOptions a' ).on( 'click', function( event ) {

 var $target = $( event.currentTarget ),
     val = $target.attr( 'data-value' ),
     $inp = $target.find( 'input' ),
     idx;

 if ( ( idx = awardOptions.indexOf( val ) ) > -1 ) {
    awardOptions.splice( idx, 1 );
    setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
 } else {    awardOptions.push( val );
    setTimeout( function() { $inp.prop( 'checked', true ) }, 0); }

 $( event.target ).blur();

 console.log( awardOptions );
 return false;
});


var dateOptions = [];
$( '#dateOptions a' ).on( 'click', function( event ) {

 var $target = $( event.currentTarget ),
     val = $target.attr( 'data-value' ),
     $inp = $target.find( 'input' ),
     idx;

 if ( ( idx = dateOptions.indexOf( val ) ) > -1 ) {
    dateOptions.splice( idx, 1 );
    setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
 } else {    dateOptions.push( val );
    setTimeout( function() { $inp.prop( 'checked', true ) }, 0); }

 $( event.target ).blur();

 console.log( dateOptions );
 return false;
});



var courseOptions = [];
$( '#courseOptions a' ).on( 'click', function( event ) {

 var $target = $( event.currentTarget ),
     val = $target.attr( 'data-value' ),
     $inp = $target.find( 'input' ),
     idx;

 if ( ( idx = courseOptions.indexOf( val ) ) > -1 ) {
    courseOptions.splice( idx, 1 );
    setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
 } else {    courseOptions.push( val );
    setTimeout( function() { $inp.prop( 'checked', true ) }, 0); }

 $( event.target ).blur();

 console.log( courseOptions );
 return false;
});

$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>





@endsection

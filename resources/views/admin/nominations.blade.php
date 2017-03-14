@extends('main')
@section('title', 'Nominations Report')

@section('content')

@include('partials._adminNav')


<script type="text/javascript">

$(document).ready(function() {
    $('#myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>


<div class="row">
    <div class="col-md-12">
        <h1>Nominations Report</h1>
  </div>
</div>
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
   @foreach  ($unique_Years as $unique_Year)
     <li><a href="#" class="small" data-value="{{$unique_Year->uniqueYears}}"+" tabIndex="-1"><input type="checkbox"/>&nbsp;<option>{{$unique_Year->uniqueYears}}</option></a></li>"
   @endforeach
 </span> </div>


<div class="btn-group">
 <button type="button" class="btn btn-default btn-sm dropdown-toggle"  data-toggle="dropdown">Course(s) <span class="caret"></span></button>
  <span class="dropdown-menu"  id="courseOptions">

    @foreach  ($courses as $course)
      <li><a href="#" class="small" data-value="{{$course->courseName}}"+" tabIndex="-1"><input type="checkbox"/>&nbsp;<option>{{$course->courseName}}</option></a></li>"
    @endforeach
  </span> </div>
 <div class="btn-group">
          <button id="sortIt" type="button" class="btn btn-default">Filter</button>
        </div>
</nav>

    <table id="myTable" class="table table-striped table-bordered" style="width:75%">
<thead>
      <tr>
        <th>Award</th>
        <th>Nominated by</th>
        <th>Student Number</th>
        <th>Student Name</th>
        <th>Nomination Date</th>
        <th>Course</th>
        <th>Grade</th>
        <th>Delete</th>
        <th>Edit</th>

        </tr>
      </thead>
<tbody>
          <tr>
          @foreach ($nominations as $nomination)
            <td>{{$nomination->award->name}}</td>
            <td>Dr. {{$nomination->prof->firstName}} {{$nomination->prof->lastName}}</td>
            <td>{{$nomination->studentNumber}}</td>
            <td>{{$nomination->studentFirstName}} {{$nomination->studentLastName}}</td>
            <td>{{$nomination->created_at}}</td>
            <td>
              @foreach ($nomination->course as $course)
              <p>{{$course->courseName}}  {{$course->courseNumber}}</p>
              @endforeach
            </td>
            <td>
              @foreach ($nomination->course as $course)
              <p>Final Grade:{{$course->finalGrade}}</p>
              <p>Rank: {{$course->rank}}</p>
              @endforeach
            </td>
            <td>
               <form class="form-horizontal" action="{{url ('/nominations/destroy/'.$nomination->id)}}" method="POST">
                 <input type="hidden" name="_method" value="DELETE">
                 {{ csrf_field() }}
                 <div class="form-group">
                   <div class="col-sm-10">
                     <button type="submit" class="btn btn-danger" onclick="return confirmDelete()">X</button>
                   </div>
                 </div>
               </form>
             </td>
             <td>
               <form class="form-horizontal" action="{{url ('/nominations/'.$nomination->id.'/edit') }}" method="GET">
                 {{ csrf_field() }}
                 <div class="form-group">
                   <div class="col-sm-10">
                     <button type="submit" class="btn btn-primary">Edit</button>
                   </div>
                 </div>
               </form>
             </td>

          </tr>
          @endforeach

</tbody>

    </table>
    </div>


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


  function confirmDelete() {
    var result = confirm('Are you sure you want to delete this award?')
    if (result) {
      return true;
    }
    else {
      return false;
    }
  }

    $(document).on('click', '#sortIt', function ()  {
        var table = $('#myTable').DataTable();

        var filteredData = table
        .columns( [0, 7] )
        .data()
        .eq( 0 )
        .filter( function ( value, index ) {
          return awardOptions.includes(value)  ? true : false;
        } );

        table.draw();
    });

</script>





@endsection

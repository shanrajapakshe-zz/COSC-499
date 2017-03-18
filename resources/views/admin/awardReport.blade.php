@extends('main')
@section('title', 'Award Report')

@section('content')

@include('partials._adminNav')



<div class="row">
    <div class="col-md-12">
        <h1>Awards Report</h1>
		</div>
</div>
{{--
<nav class="navbar navbar-default">

<div class="btn-group">
<button type="button" class="btn btn-default btn-sm dropdown-toggle"  data-toggle="dropdown">Year(s) <span class="caret"></span></button>
<span class="dropdown-menu" id= "uniqueYears">
  @foreach ($unique_Years as $unique_Year)
    <li><a href="#" class="small" data-value="{{$unique_Year->uniqueYears}}"+" tabIndex="-1"><input type="checkbox"/>&nbsp; <option>{{$unique_Year->uniqueYears}}</option></a></li>"
  @endforeach
</span></div>
    <button type="submit" class="btn btn-primary" onclick="myFilter()">Filter</button>
</nav>
--}}

<table class="table table-striped table-bordered" style="width:75%">
      <tr>
        <th>Award Name</th>
        <th>Category</th>
        <th>Count</th>
      </tr>

<tr>
  @foreach ($awards as $award )
          <td><a href="{{url ('/admin/allAwardNominee/' . $award->id)}}"> {{$award->name}} {{$award->category->name}} </a></td>
            <td> {{$award->category->name}} </td>
          <td>
            @php ($theCount= 0 )
           @foreach ($countNoms as $countNom )
              @if ($countNom->award_id == $award->id)
              @php ($theCount =$countNom->countID )
              @endif
            @endforeach
            {{$theCount}}
      </td> </a>
      </tr>
      @endforeach
</table>





  <script type="text/javascript">

  $.ajaxSetup({
   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
  });

var inSetString = '';
  function myFilter() {


    var requestData = JSON.stringify(uniqueYears);

for (var i = 0; i < uniqueYears.length; i++) {
  inSetString= inSetString + "'" + uniqueYears[i] + "'" ;
  if (i != uniqueYears.length -1 ) {
    inSetString = inSetString + "," ;
  }
}

    var requestData = JSON.stringify(inSetString);

       console.log(requestData);
       //logs correct json object


       var request;
       console.log("test");

       request = $.ajax({

           url: "/admin/awardReport/filter",
           method: "GET",
           dataType: "JSON",
             data: {data : requestData}
       });
     }


  var uniqueYears = [];
  $( '#uniqueYears a' ).on( 'click', function( event ) {

   var $target = $( event.currentTarget ),
       val = $target.attr( 'data-value' ),
       $inp = $target.find( 'input' ),
       idx;

   if ( ( idx = uniqueYears.indexOf( val ) ) > -1 ) {
      uniqueYears.splice( idx, 1 );
      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
   } else {    uniqueYears.push( val );
      setTimeout( function() { $inp.prop( 'checked', true ) }, 0); }

   $( event.target ).blur();

   console.log( uniqueYears );
   return false;
  });

  </script>
@endsection

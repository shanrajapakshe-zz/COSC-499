@extends('main')
@section('title', 'Award Report')

@section('content')

@include('partials._adminNav')



<div class="row">
    <div class="col-md-12">
        <h1>Awards Report</h1>
		</div>
</div>

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

<table class="table table-striped table-bordered" style="width:75%">
      <tr>
        <th>Award Name</th>
        <th>Category</th>
        <th>Count</th>
      </tr>

<tr>
        @foreach ($awards as $award )

          <td> {{$award->name}} </td>
            <td> {{$award->category}} </td>
          <td>
{{-- blade does not handle php assigmnets so will have to use php tags--}}
            <?php $theCount= 0  ?>
           @foreach ($countNoms as $countNom )
              @if ($countNom->award_id == $award->id)
              <?php $theCount =$countNom->countID ?>
              @endif
            @endforeach
            {{$theCount}}
      </td>
      </tr>
        @endforeach
</table>





  <script type="text/javascript">

  function myFilter() {
    var requestData = JSON.stringify(uniqueYears);
       console.log(requestData);
       //logs correct json object
       var request;
       console.log("test");
       //what are you trying ot do here?VVV
       //depending on if youre trying to do a get for a json document
       //youll want to parse for a specific part of the json first
       //then get that specific part and stringify that.
       //or search trough the json string with a string parsing library

       //I think I know what you might be doing wrong. You might
       //not be getting the right item specifically in the ajax request
       //it probably thinks you want the entire json object as a filter
       //(which wont work). You'd need to find the exact item in the json object first.
       request = $.ajax({
           url: "/admin/award/filter",
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

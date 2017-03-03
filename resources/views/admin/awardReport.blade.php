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


</nav>

<table class="table table-striped table-bordered" style="width:75%">
      <tr>
        <th>Award Name</th>
        <th>Category</th>
        <th>Count</th>
      </tr>

<tr>
        @foreach ($awards as $award )
          <td>{{$award->name}}</td>
          <td>{{$award->category}}</td>
          <td>
            $key = array_search( {{$award->id}},$countNoms->award_id);
              if( $key !== false ) { array_search( {{$award->id}}  ,$countNoms->countID);}
              else {0;}  </td>
        </tr>
          @endforeach

</table>





  <script type="text/javascript">

  </script>
@endsection

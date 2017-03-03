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

<tr>      @php
        foreach ($awards as $award ){
          echo "<td>" . $award->name . "</td>";
           echo "<td>" . $award->category . "</td>";
          echo "<td>";

              $theCount= 0;
            foreach ($countNoms as $countNom ){

            if ($countNom->award_id == $award->id) {
             $theCount =$countNom->countID;
            }
          }
          echo $theCount;
        echo  "</td>";
      echo  "</tr>";
}
 @endphp
</table>





  <script type="text/javascript">

  </script>
@endsection

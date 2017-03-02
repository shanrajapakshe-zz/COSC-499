@extends('main')
@section('title', 'Award Report')

@section('content')

@include('partials._adminNav')


<div class="row">
    <div class="col-md-12">
        <h1>Awards Report</h1>
		</div>
</div>
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

                </tr>
          @endforeach

</table>





  <script type="text/javascript">

  </script>
@endsection

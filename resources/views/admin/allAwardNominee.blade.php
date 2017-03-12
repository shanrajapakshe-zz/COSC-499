@extends('main')
@section('title', 'Edit Award')

@section('content')



<div class="row">
    <div class="col-md-12">
        <h1>All Nominations for {{$award->name}}</h1>
		</div>
</div>

<table class="table table-striped table-bordered" style="width:75%">
      <tr>
        <th>Student Name</th>
        <th>ID No.</th>


          @foreach ($uniqueCourse as $course )<th>
        {{$course-> courseName }} {{$course->courseNumber}}</th> @endforeach

      </tr>

      <tr>
      @foreach ($studentForAward as $student )
      <td>
        {{$student-> firstName }} </td>

          <td>
            {{$student-> studentNumber }} </td>
            </tr>@endforeach

</table>






@endsection

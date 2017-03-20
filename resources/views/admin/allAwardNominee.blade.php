@extends('main')
@section('title', 'Award Nominee')

@section('content')

<script type="text/javascript" src="../../js/DataTables/media/js/jquery.datatables.js"></script>
<div class="row">
    <div class="col-md-12">
        <h1>All Nominations for {{$award->name}} {{$award->category->name}}</h1>
		</div>
</div>

<table id="myTable" class="table table-striped table-bordered" style="width:75%">
      <thead>
      <tr>
        <th>Student Name</th>
        <th>ID No.</th>
        @foreach ($uniqueCourse as $uCourse )
        <th>{{$uCourse-> courseName }} {{$uCourse->courseNumber}}</th> @endforeach
        <th>Description</th>
      </tr>
      </thead>
  <tbody>
      <tr>@foreach ($studentForAward as $student)
      <td>{{$student-> firstName }} </td>
      <td>{{$student-> studentNumber }} </td>



                    @foreach($uniqueCourse as $uCourse )

                                      <td>@php ($grade = 'N/A')
                                          @php ($rank = 'N/A')
                    @foreach ($studentCourses as $course)

                        @if ($course-> studentNumber  === $student->studentNumber  )
                        @if ($uCourse->courseName === $course->courseName )
                        @if ($course ->courseNumber === $uCourse->courseNumber  )
                            @if  (is_null($course->estimatedGrade) )
                            @php ($grade = 'Final Grade = ' . $course-> finalGrade)
                            @php ($rank = 'Rank = ' . $course -> rank)
                            @else
                            @php ($grade = 'Est Grade = ' . $course-> estimatedGrade)
                            @php ($rank = 'Rank = ' . $course -> rank)
                            @endif
                        @endif
                        @endif
                        @endif
                    @endForeach

                    {{$grade}} <hr>
                    {{$rank}}</td>
                  @endforeach


          <td>
                @foreach ($studentCourses as $studentCourse )
                  @if ($studentCourse-> studentNumber  === $student->studentNumber )
                    {{$studentCourse->description}} <hr>
                  @endif
                @endforeach

          </td>
        </tr>@endforeach
</tbody>
</table>

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
@endsection

@extends('main')
@section('title', 'Edit Award')

@section('content')

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
</script>
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
        @foreach ($uniqueCourse as $uniqueCourse )
        <th>{{$uniqueCourse-> courseName }} {{$uniqueCourse->courseNumber}}</th> @endforeach
        <th>Description</th>
      </tr>
      </thead>
  <tbody>
      <tr>@foreach ($studentForAward as $student)
      <td>{{$student-> firstName }} </td>
      <td>{{$student-> studentNumber }} </td>@foreach ($studentCourses as $studentCourse )
      <td> @php ($grade = 'N/A')
            @php ($rank = 'N/A')
              @if ($studentCourse-> studentNumber  === $student->studentNumber )

                  @if  (is_null($studentCourse->estimatedGrade) )
                    @php ($grade = 'Final Grade = ' . $studentCourse-> finalGrade)
                    @php ($rank = 'Rank = ' . $studentCourse -> rank)
                  @else
                    @php ($grade = 'Est Grade = ' . $studentCourse-> estimatedGrade)
                    @php ($rank = 'Rank = ' . $studentCourse -> rank)
                  @endif
              @endif
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

@endsection

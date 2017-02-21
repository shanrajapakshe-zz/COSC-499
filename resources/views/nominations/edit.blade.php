@extends('main')
@section('title', 'Edit Nomination')

@section('content')
<h3>Edit Nomination: {{$nomination->studentFirstName}} {{$nomination->studentLastName}} by {{$nomination->prof->firstName}} {{$nomination->prof->lastName}}</h3>

<form class="form-horizontal" action="{{url ('/nominations/'.$nomination->id.'/update') }}" method="POST">
		<input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

        <div class="form-group">
          <label class="control-label col-sm-2" for="award">Award*:</label>
          <div class="col-sm-8">
            <select class="form-control" id="award" name="award">
              @foreach ($awards as $award)
                <option>{{$award->name}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentNumber">Student Number*:</label>
          <div class="col-sm-8">
            <input type="textarea" class="form-control" id="studentNumber" placeholder="Enter Student Number" required pattern='[0-9]{8}' name="studentNumber" value={{$nomination->studentNumber}}>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentFirstName">First Name*:</label>
          <div class="col-sm-8">
            <input type="textarea" class="form-control" id="studentFirstName" placeholder="Enter First Name" required name = "studentFirstName" value={{$nomination->studentFirstName}}>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentLastName">Last Name*:</label>
          <div class="col-sm-8">
            <input type="textarea" class="form-control" id="studentLastName" placeholder="Enter Last Name" required name = "studentLastName" value={{$nomination->studentLastName}}>
          </div>
        </div>

        <div class="form-group" id="askGrad">
          <label class="control-label col-sm-4" for="checkbox">Also nominate for Distinguished Graduating student?:</label>
          <div class="checkbox" >
            <label><input type="checkbox" name="askGrad" onclick="toggle(confirmGradNom, $(this))">Yes</label>
            </div>

        </div >


          <div class="form-group" id="confirmGradNom" >

              <div class="form-group">
                <label class="control-label col-sm-2" for="gradDescription">Distinguished Graduate Student Award Description:</label>
                <div class="col-sm-8">
                  <textarea rows='4' cols='80'class="form-control" id="gradDescription" placeholder="Why are you nominating this student for the graduating student award and did they TA any courses?  Please state" name = "gradDescription"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-10" >This student will automatically be nominated for the graduating student award</label>
              </div>


          </div>

{{--                             grid starts  --}}
        <div class="container-fluid form-group">
            <div class="row clearfix">
                <div class="col-md-10 column">
                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>
                            <tr >
                                <th class="text-center">
                                    #
                                </th>
                                <th class="text-center">
                                    Course Name
                                </th>
                                <th class="text-center">
                                    Course Number
                                </th>
                                <th class="text-center">
                                    Section Number
                                </th>
                                <th class="text-center" title="This or predicted grade" >
                                    Final Grade
                                </th>
                                <th class="text-center" title="This or final grade">
                                    Predicted Grade
                                </th>

                                <th class="text-center">
                                    Class Rank
                                </th>
                            </tr>
                        </thead>
                        @foreach ($nomination->course as $course)
                        <tbody>
                            <tr id='addr0'>
                                <td>
                                1
                                </td>
                                <td>
                                <input type="text" name='courseName0'  placeholder='Eg. COSC' class="form-control" value={{$course->courseName}}>
                                </td>
                                <td>
                                <input type="text" name='courseNumber0' placeholder='Eg. 499' required name = "courseNumber0" class="form-control" value={{$course->courseNumber}}>
                                </td>
                                <td>
                                <input type="text" name='sectionNumber0' placeholder='Eg. 001' required pattern='[0-9]{3}' class="form-control" value={{$course->sectionNumber}}>
                                </td>
                                <td title="This or predicted grade">
                                <input type="text" name='finalGrade0' placeholder='Eg. 98' pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' class="form-control" value={{$course->finalGrade}}>
                                </td>
                                <td title="This or final grade">
                                <input type="text" name='estimatedGrade0' placeholder='Eg.90' pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' class="form-control" value={{$course->estimatedGrade}}>
                                </td>
                                <td>
                                <input type="text" name='rank0' placeholder='Eg. 1' class="form-control" value={{$course->rank}}>
                                </td>
                            </tr>
                            <tr id='addr1'></tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
            <a id="add_row" class="btn btn-default pull-left" title="Max 6">Add Course </a><a id='delete_row' class="btn btn-default pull-left">Delete Course</a>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="description">Description:</label>
          <div class="col-sm-8">
            <textarea rows='4' cols='80'class="form-control" id="description" placeholder="Enter Description" name = "description" value={{$nomination->description}}></textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-8">
            <button type="submit" class="btn btn-primary">Submit Changes</button>
          </div>
        </div>
      </form>

  </fieldset>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
  window.onload = function(){
  // your code here

  $(confirmGradNom).hide()
  $(askGrad).hide()
};

  //function for adding and removing rows, limited to 6 rows total
  var i=1;
  $("#add_row").click(function(){
    if (i<6) {

  $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='courseName"+i+"' type='text' placeholder='Eg. COSC' class='form-control input-md'  /></td><td><input  name='courseNumber"+i
  +"' type='text' placeholder='Eg. 499'  class='form-control input-md'></td><td><input  name='sectionNumber"+i
  +"' type='text' placeholder='Eg. 001' required pattern='[0-9]{3}'  class='form-control input-md'></td><td><input  name='finalGrade"+i
  +"' type='text' placeholder='Eg. 98' pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' class='form-control input-md' title='This or predicted grade'></td><td><input  name='estimatedGrade"+i
  +"' type='text' placeholder='Eg. 98' pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' class='form-control input-md' title='This or final grade'></td><td><input  name='rank"+i
  +"' type='text' placeholder='Eg. 1' class='form-control input-md'></td>");

  $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
  i++;}
  });

  $("#delete_row").click(function(){
     if(i>1){
     $("#addr"+(i-1)).html('');
     i--;
     }
  });

  function toggle(className, obj) {
    var $input = $(obj);
    if ($input.prop('checked')) $(className).show();
    else {
         $(className).hide();
     $(confirmGradNom).hide() ;

      }
};


// only runs when doc is loaded and ready
$(document).ready(function(){

  // for hover option put its <a title="string"> in tag and it will show in hover
    $('[data-toggle="tooltip"]').tooltip();

    // to check if a grad award has beeen selected
    document.getElementById('award').addEventListener('change',function(){
    if ( ($('#award option:selected').text().toLowerCase().indexOf("graduating")>-1) || ($('#award option:selected').text().toLowerCase().indexOf("graduate")>-1)) {
      //show
    $(askGrad).show()

    } else if (($('#award option:selected').text().toLowerCase().indexOf("distinguished")>-1)) {
      //hide if distinguish grad
      $(askGrad).hide()

    }
    else {
      // hide if not grad
      $(askGrad).hide()
    }
  })


});








  </script>

</body>
@endsection
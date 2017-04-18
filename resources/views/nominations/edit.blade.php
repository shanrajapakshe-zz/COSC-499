@extends('main')
@section('title', 'Edit Nomination')

@section('content')
<h3>Edit Nomination: {{App\Nominee::find($nomination->studentNumber)['firstName']}} {{App\Nominee::find($nomination->studentNumber)['lastName']}} by {{$nomination->user->firstName}} {{$nomination->user->lastName}}</h3>

<form class="form-horizontal" action="{{url ('/nominations/'.$nomination->id.'/update') }}" method="POST">
		<input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

        <div class="form-group">
          <label class="control-label col-sm-2" for="award">Award*:</label>
          <div class="col-sm-8">
            <select class="form-control" id="award" name="award" required>
							<option disabled selected value> -- select an option -- </option>
              @foreach ($awards as $award)
                <option>{{$award->name}} {{$award->category['name']}}</option>
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
            <input type="textarea" class="form-control" id="studentFirstName" placeholder="Enter First Name" required name = "studentFirstName" value={{App\Nominee::find($nomination->studentNumber)['firstName']}}>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentLastName">Last Name*:</label>
          <div class="col-sm-8">
            <input type="textarea" class="form-control" id="studentLastName" placeholder="Enter Last Name" required name = "studentLastName" value={{App\Nominee::find($nomination->studentNumber)['lastName']}}>
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
                <label class="control-label col-sm-10">This student will automatically be nominated for the graduating student award</label>
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
												@for ($i = 0; $i < count($nomination->course); $i++)
												<tbody>
													<tr id= 'addr{{$i}}'>
														<td>{{ $i+1 }}</td>
														<td><input type="text" name='courseName{{$i}}'  class="form-control" value= {{$nomination->course[$i]->courseName}}></td>
														<td><input type="text" name='courseNumber{{$i}}'  class="form-control" value= {{$nomination->course[$i]->courseNumber}}></td>
														<td><input type="text" name='sectionNumber{{$i}}'  class="form-control" value= {{$nomination->course[$i]->sectionNumber	}}></td>
														<td><input type="text" onkeyup="disableEst({{$i}})" name='finalGrade{{$i}}'  class="form-control" value= {{$nomination->course[$i]->finalGrade	}}></td>
														<td><input type="text"  onkeyup="disableFinal({{$i}})" name='estimatedGrade{{$i}}'  class="form-control" value= {{$nomination->course[$i]->estimatedGrade	}}></td>
														<td><input type="text" name='estimatedRank{{$i}}'  class="form-control" value= {{$nomination->course[$i]->estimatedRank	}}></td>
													<tr id='addr{{$i}}'></tr>
												</tbody>
												@endfor
                    </table>
                </div>
            </div>
            <a id="add_row" class="btn btn-default pull-left" title="Max 6">Add Course </a><a id='delete_row' class="btn btn-default pull-left">Delete Course</a>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="description">Description:</label>
          <div class="col-sm-8">
						<textarea maxlength="1600" rows='8' cols='80' id = "description" name="description">{{ $nomination->description }}</textarea>
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
  $(askGrad).hide();
  $(confirmGradNom).hide();
};
  //function for disableing one or the other estimated grade or final grade

function disableEst(i) {
  if (  document.getElementsByName('finalGrade'+i)[0].value.length  > 0 ) {

    document.getElementsByName('estimatedGrade'+i)[0].disabled = true;
    } else {

      document.getElementsByName('estimatedGrade'+i)[0].disabled = false;
  }
}
function disableFinal(i) {

  if (  document.getElementsByName('estimatedGrade'+i)[0].value.length > 0) {
    document.getElementsByName('finalGrade'+i)[0].disabled = true;
  } else {

      document.getElementsByName('finalGrade'+i)[0].disabled = false;
  }
}



  //function for adding and removing rows, limited to 6 rows total
  var i=1;
  $("#add_row").click(function(){
    if (i<6) {

  $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='courseName"+i+"' type='text' placeholder='Eg. COSC' class='form-control input-md'  /></td><td><input  name='courseNumber"+i
  +"' type='text' placeholder='Eg. 499'  class='form-control input-md'></td><td><input  name='sectionNumber"+i
  +"' type='text' placeholder='Eg. 001' required pattern='[0-9]{3}'  class='form-control input-md'></td><td><input  name='finalGrade"+i
  +"' type='text' onkeyup='disableEst("+i+")' placeholder='Eg. 98' pattern='[0-9]+(\.[0-9]{0,4})?%?' class='form-control input-md' title='This or predicted grade'></td><td><input  name='estimatedGrade"+i
  +"' type='text' onkeyup='disableFinal("+i+")' placeholder='Eg. 98' pattern='[0-9]+(\.[0-9]{0,4})?%?' class='form-control input-md' title='This or final grade'></td><td><input  name='rank"+i
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
         $(confirmGradNom).hide();
      }
};


// only runs when doc is loaded and ready
$(document).ready(function(){
	if (  document.getElementsByName('finalGrade0')[0].value.length  > 0 ) {

		document.getElementsByName('estimatedGrade0')[0].disabled = true;
		} else {

			document.getElementsByName('estimatedGrade0')[0].disabled = false;
	}
	if (  document.getElementsByName('estimatedGrade'+0)[0].value.length > 0) {
    document.getElementsByName('finalGrade'+0)[0].disabled = true;
  } else {

      document.getElementsByName('finalGrade'+0)[0].disabled = false;
  }


    // for hover option put its <a title="string"> in tag and it will show in hover
    $('[data-toggle="tooltip"]').tooltip();

    // to check if a grad award has beeen selected
    document.getElementById('award').addEventListener('change',function(){
    if ( (($('#award option:selected').text().toLowerCase().indexOf("graduating")>-1) || ($('#award option:selected').text().toLowerCase().indexOf("graduate")>-1 )) &&
    !($('#award option:selected').text().toLowerCase().indexOf("graduating student  distinguished")>-1)) {
      $(askGrad).show()


            document.getElementById('description').placeholder='Enter Description';

    } else if (($('#award option:selected').text().toLowerCase().indexOf("graduating student  distinguished")>-1)) {
      //hide if distinguish grad
      document.getElementById('description').placeholder='Please explain the reason for nominating this student for The distinguished graduating student award. The award in Unit 5 is given to a student who has: excelled academically as evidenced by their outstanding GPA, shown exceptional promise in research as evidenced by their contributions to published work and/or research recognition, has contributed service to the unit, usually in the form of teaching, and is a recognition of the student’s overall performance.  ';


      $(confirmGradNom).hide();
      $(askGrad).hide();
      $(checkForDis).prop('checked', false);

    }
    else {
      // hide if not grad

      document.getElementById('description').placeholder='Enter Description';
      $(confirmGradNom).hide();
      $(askGrad).hide();
      $(checkForDis).prop('checked', false);
    }
  })
});

// adding both text field if text box checked
document.getElementById("myForm").onsubmit = function() {
if (document.getElementById('checkForDis').checked) {
  $('#disGradNomDis').val($('#description').val()+ ' Distinguished Graduate Award Discription: ' +
                               $('#gradDescription').val());
}

};


// Listener for choosing distinguished graduating student from dropdown - shows the additional text box for distinguished graduating student
document.getElementById('award').addEventListener('change',function(){
  console.log($('#award option:selected').text().toLowerCase().indexOf("graduating student  distinguished"));
  if (($('#award option:selected').text().toLowerCase().indexOf("graduating student  distinguished")>-1)) {
    // console.log('in loop');
    $(confirmGradNom).show()
  }
});

</script>
</body>
@endsection

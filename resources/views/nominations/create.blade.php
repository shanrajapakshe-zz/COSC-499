@extends('main')
@section('title', 'Create Nomination')
@section('content')


  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create New Nomination</h1>
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
         @foreach ($errors ->all() as $error)
         <li>{{$error}}</li>
         @endforeach
       </ul>
      </div>
     @endif

      <form class="form-horizontal" action="{{url ('/nominations') }}" method="POST">
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
            <input type="textarea" class="form-control" id="studentNumber" placeholder="Enter Student Number" required pattern='[0-9]{8}' name="studentNumber">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentFirstName">First Name*:</label>
          <div class="col-sm-8">
            <input type="textarea" class="form-control" id="studentFirstName" placeholder="Enter First Name" required name = "studentFirstName">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentLastName">Last Name*:</label>
          <div class="col-sm-8">
            <input type="textarea" class="form-control" id="studentLastName" placeholder="Enter Last Name" required name = "studentLastName">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="checkbox">Graduating this Year?:</label>
          <div class="col-sm-8">
            <div class="checkbox">
              <label><input type="checkbox" value="">Yes</label>
            </div>
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
                                <th class="text-center">
                                    Final Grade
                                </th>
                                <th class="text-center">
                                    Predicted Grade
                                </th>

                                <th class="text-center">
                                    Class Rank
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id='addr0'>
                                <td>
                                1
                                </td>
                                <td>
                                <input type="text" name='courseName0'  placeholder='Eg. COSC' class="form-control"/>
                                </td>
                                <td>
                                <input type="text" name='courseNumber0' placeholder='Eg. 499' required name = "courseNumber0" class="form-control"/>
                                </td>
                                <td>
                                <input type="text" name='sectionNumber0' placeholder='Eg. 001' required pattern='[0-9]{3}' class="form-control"/>
                                </td>
                                <td>
                                <input type="text" name='finalGrade0' placeholder='Eg. 98' pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' class="form-control"/>
                                </td>
                                <td>
                                <input type="text" name='estimatedGrade0' placeholder='Eg.90' pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' class="form-control"/>
                                </td>
                                <td>
                                <input type="text" name='rank0' placeholder='Eg. 1' class="form-control"/>
                                </td>
                            </tr>
                            <tr id='addr1'></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <a id="add_row" class="btn btn-default pull-left">Add Course</a><a id='delete_row' class="btn btn-default pull-left">Delete Course</a>
        </div>
{{--                             grid end  --}

        {{--                             grid starts
        <div class="row">
<div class="col-sm-2">

        <div class="form-group">
          <label class="control-label col-sm-2" for="courseNumber">Course Number*:</label>
          <div class="col-sm-2">
            <input type="textarea" class="form-control" id="courseNumber" placeholder="Enter Course Number" required name = "courseNumber">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="section">Section*:</label>
          <div class="col-sm-2">
            <input type="textarea" class="form-control" id="section" placeholder="Enter Section" required pattern='[0-9]{3}'name = "section">
          </div>
        </div>

        <div>
               <label><input type="radio" name="colorRadio" value="FinalGrade" > Final Grade</label><br>
               <label><input type="radio" name="colorRadio" value="PredictedGradeAndRank"> Predicted Grade And Rank</label>

           </div>


  <div class="form-group">
           <div class="FinalGrade box">
             <label class="control-label col-sm-2" for="grade">Grade:</label>
             <div class="col-sm-2">
               <input type="textarea" class="form-control" id="grade" placeholder="Enter Grade"  pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' name = "grade">
             </div>
           </div>
  </div>


<div class="form-group">
           <div class="PredictedGradeAndRank box">
             <label class="control-label col-sm-2" for="estimatedGrade">Estimated Grade:</label>
             <div class="col-sm-2">
               <input type="textarea" class="form-control" id="estimatedGrade" placeholder="Enter Estimated Grade" pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' name = "estimatedGrade">
             </div>
           </div>
</div>

<div class="form-group">
           <div class="PredictedGradeAndRank box">
             <label class="control-label col-sm-2" for="estimatedRank">Rank:</label>
             <div class="col-sm-2">
               <input type="textarea" class="form-control" id="estimatedRank" placeholder="Enter Rank" name = "estimatedRank">
             </div>
           </div>
         </div>
 </div>
   </div>

                           grid ends                                                   --}}

        <div class="form-group">
          <label class="control-label col-sm-2" for="description">Description:</label>
          <div class="col-sm-8">
            <textarea rows='4' cols='80'class="form-control" id="description" placeholder="Enter Description" name = "description"></textarea>
          </div>
        </div>


        <div class="form-group">
          <div class="col-sm-8">
            <button type="submit" class="btn btn-primary">Nominate!</button>
          </div>
        </div>
      </form>

  </fieldset>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>

  //function for adding and removing rows, limited to 6 rows total
  var i=1;
  $("#add_row").click(function(){
    if (i<6) {


  $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='courseName"+i+"' type='text' placeholder='Eg. COSC' class='form-control input-md'  /></td><td><input  name='courseNumber"+i
  +"' type='text' placeholder='Eg. 499'  class='form-control input-md'></td><td><input  name='sectionNumber"+i
  +"' type='text' placeholder='Eg. 001' required pattern='[0-9]{3}'  class='form-control input-md'></td><td><input  name='finalGrade"+i
  +"' type='text' placeholder='Eg. 98' pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' class='form-control input-md'></td><td><input  name='estimatedGrade"+i
  +"' type='text' placeholder='Eg. 98' pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' class='form-control input-md'></td><td><input  name='rank"+i
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

  //$(function(){
  //  $(".box").not(".FinalGrade").hide();
  //   $(".box").not(".PredictedGradeAndRank").hide();
  //});
  </script>

</body>
@endsection

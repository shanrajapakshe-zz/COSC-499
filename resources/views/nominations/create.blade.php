@extends('main')
@section('title', 'Create Nomination')


@section('content')

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script>

$(function(){
  $(".box").not(".FinalGrade").hide();
   $(".box").not(".PredictedGradeAndRank").hide();
});

$(document).ready(function(){
   $('input[type="radio"]').click(function(){
       if($(this).attr("value")=="FinalGrade"){
           $(".box").not(".FinalGrade").hide();
           $(".FinalGrade").show();
       }
       if($(this).attr("value")=="PredictedGradeAndRank"){
           $(".box").not(".PredictedGradeAndRank").hide();
           $(".PredictedGradeAndRank").show();
       }

   });
});
</script>

  <script>
    $(function() {
    $("[name=toggler]").click(function(){
            $('.toHide').hide();
            $("#visible"+$(this).val()).show('slow');
    });
 });
  </script>

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
          <div class="col-sm-10">
            <select class="form-control" id="award" name="award">
              @foreach ($awards as $award)
                <option>{{$award->name}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentNumber">Student Number*:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="studentNumber" placeholder="Enter Student Number" required pattern='[0-9]{8}' name="studentNumber">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentFirstName">First Name*:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="studentFirstName" placeholder="Enter First Name" required name = "studentFirstName">
          </div>
        </div>



        <div class="form-group">
          <label class="control-label col-sm-2" for="studentLastName">Last Name*:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="studentLastName" placeholder="Enter Last Name" required name = "studentLastName">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="checkbox">Graduating this Year?:</label>
          <div class="col-sm-10">
            <div class="checkbox">
              <label><input type="checkbox" value="">Graduating</label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="courseNumber">Course Number*:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="courseNumber" placeholder="Enter Course Number" required name = "courseNumber">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="section">Section*:</label>
          <div class="col-sm-10">
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
             <div class="col-sm-10">
               <input type="textarea" class="form-control" id="grade" placeholder="Enter Grade"  pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' name = "grade">
             </div>
           </div>
  </div>


<div class="form-group">
           <div class="PredictedGradeAndRank box">
             <label class="control-label col-sm-2" for="estimatedGrade">Estimated Grade:</label>
             <div class="col-sm-10">
               <input type="textarea" class="form-control" id="estimatedGrade" placeholder="Enter Estimated Grade" pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' name = "estimatedGrade">
             </div>
           </div>
</div>

<div class="form-group">
           <div class="PredictedGradeAndRank box">
             <label class="control-label col-sm-2" for="estimatedRank">Rank:</label>
             <div class="col-sm-10">
               <input type="textarea" class="form-control" id="estimatedRank" placeholder="Enter Rank" name = "estimatedRank">
             </div>
           </div>
         </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="description">Description:</label>
          <div class="col-sm-10">
            <textarea rows='4' cols='80'class="form-control" id="description" placeholder="Enter Description" name = "description"></textarea>
          </div>
        </div>


        <div class="form-group">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Nominate!</button>
          </div>
        </div>
      </form>

  </fieldset></body>
  </form>
  </div>
  </div>
@endsection

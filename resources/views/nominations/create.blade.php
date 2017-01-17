@extends('main')
@section('title', 'Create Nomination')


@section('content')

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
        <label class="control-label col-sm-2" for="awardName">Award Name</label>
          <div class="col-sm-10">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Award
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                @foreach ($awards as $award)
                <li><option value={{$award->awardName}}>{{$award->awardName}}</option></li>
                @endforeach
              </ul>
            </div>
        </div>
      

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentNum">Student Number:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="studentNum" placeholder="Enter Student Number" required pattern='[0-9]{8}' name="studentNum">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentFirstName">First Name:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="studentFirstName" placeholder="Enter First Name" required name = "studentFirstName">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentLastName">Last Name:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="studentLastName" placeholder="Enter Last Name" required name = "studentLastName">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentNum">Grad Date:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="gradDate" placeholder="Enter Graduation Date" name="gradDate">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="course">Course:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="course" placeholder="Enter Course" required name = "course">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="section">Section:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="section" placeholder="Enter Section" required pattern='[0-9]{3}'name = "section">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="gradeCheck">Grades:</label>
          <div class="col-sm-10">
            <div class ="radio">
              <label>
                <input type="radio" id = "radio1" name="gradeToggle" onclick="getResults()" value="actGrade" checked="checked">Grade
              </label>

              <label>
                <input type="radio" id = "radio2" name="gradeToggle" value="estGrade">Estimated Grade
              </label>
            </div>
          </div>
        </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="actGrade">Grade:</label>
            <div class="col-sm-10">
              <input type="textarea" class="form-control" id="actGrade" placeholder="Enter Grade"  required pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' name = "actGrade">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="esttGrade">Estimated Grade:</label>
            <div class="col-sm-10">
              <input type="textarea" class="form-control" id="estGrade" placeholder="Enter Estimated Grade"  required pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' name = "estGrade">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="rank">Rank:</label>
            <div class="col-sm-10">
              <input type="textarea" class="form-control" id="rank" placeholder="Enter Rank" name = "Rank">
            </div>
          </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="description">Description:</label>
          <div class="col-sm-10">
            <textarea  rows='4' cols='80'class="form-control" id="description" placeholder="Enter Description" name = "description"></textarea>
          </div>
        </div>

      
        <div class="form-group">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Nominate!</button>
          </div>
        </div>
      </form>


      {{-- <form method="post" action="preview">
       <fieldset>              

         <script type="text/javascript">

          function actualOrEst() {
           if (document.getElementById('gradeCheck').checked) {
             document.getElementById('ifGrade').style.display = 'block';

           }
           else document.getElementById('ifGrade').style.display = 'none';
           if (document.getElementById('estCheck').checked) {
             document.getElementById('ifEst').style.display = 'block';

           }
           else document.getElementById('ifEst').style.display = 'none';
         }

       </script>


       <p><strong>Grades:</strong><br/>
         <input type="radio" onclick="javascript:actualOrEst();" name="yesno" id="gradeCheck">  Grade
         <div id="ifGrade" style="display:none">
          Grade<input type='text' id='grade' name='grade' min='1' max ='100'>
        </div></p>

        <input type="radio" onclick="javascript:actualOrEst();" name="yesno" id="estCheck">  Estimated Grade</p>
        <div id="ifEst" style="display:none">
          Estimated Grade <input type='text' id='estgrade' name='estgrade' min='1' max='100'> 
          Rank <input type='text' id='yes' name='yes' min='1' max='5'>

        </div>


        <p><strong>Nominations:</strong><br/>
         <input type="checkbox" name="nA" value="nA"> Nomination A</p>
         <input type="checkbox" name="nB" value="nB"> Nomination B</p>
         <input type="checkbox" name="nC" value="nC"> Nomination C</p>
         <input type="checkbox" name="nD" value="nD"> Nomination D</p>
         <input type="checkbox" name="nE" value="nE"> Nomination E</p>
         <input type="checkbox" name="nGrad" value="nGrad"> Graduate Nomination</p>

         <script type="text/javascript">

  //                function ifGraduate() {
  //                   if (document.getElementById('graduationCheck').checked) {
  //                       document.getElementById('graduate').style.display = 'block';
  //                       
  //                   }
  //                   else document.getElementById('graduate').style.display = 'none';
  //                }

  </script>

  <p><strong>Graduates:</strong><br/>
    <input type="checkbox"  onclick="javascript:ifGraduate();" name="gradCheck" value="gradCheck" id="graduationCheck"> Yes</p>
    <div id="graduate" style="display:none">                    
      <select>
        <option value="winterGrad">Winter 2016</option>
        <option value="springGrad">Spring 2017</option>
      </select>
    </div>  --}}

  </fieldset></body>
  </form>
  </div>
  </div>
@endsection
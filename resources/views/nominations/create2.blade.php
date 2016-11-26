@extends('main')
@section('title', 'Create Nomination')


@section('content')
session_start();
$snumValue= "";
$fnameValue= "";
$lnameValue= "";
$courseValue= "";
$sectionValue= "";
$gradeValue= "";
$estgradeValue= "";
$estrankValue= "";
$nomValue= "";
$descValue= "";

$_SESSION['snum'] = $snumValue;
$_SESSION['fname'] = $fnameValue;
$_SESSION['lname'] = $lnameValue;
$_SESSION['course'] = $courseValue;
$_SESSION['section'] = $sectionValue;
$_SESSION['grade'] = $gradeValue;
$_SESSION['estgrade'] = $estgradeValue;
$_SESSION['estrank'] = $estrankValue;
$_SESSION['nom'] = $nomValue;
$_SESSION['desc'] = $descValue;

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


      <form class="form-horizontal" action="{{url ('/') }}" method="POST">
       <!-- {{ csrf_field() }} -->

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentNumber">Student Number:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="studentNumber" name="snum" placeholder="Enter Student Number!" required pattern='.{8}' name="studentNumber">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentFirstname">First Name:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="studentFirstName" name="fname" placeholder="Enter First Name">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentLastname">Last Name:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="studentLastname" name="lname" placeholder="Enter Last Name">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="course">Course:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="course" name="course" placeholder="Enter Course">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="section">Section:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="section" name="section" placeholder="Enter Section">
          </div>
        </div>
      </form>


      <form method="post" action="preview">
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
         <input type="checkbox" name="nom[]" value="nA"> Nomination A</p>
         <input type="checkbox" name="nom[]" value="nB"> Nomination B</p>
         <input type="checkbox" name="nom[]" value="nC"> Nomination C</p>
         <input type="checkbox" name="nom[]" value="nD"> Nomination D</p>
         <input type="checkbox" name="nom[]" value="nE"> Nomination E</p>
         <input type="checkbox" name="nom[]" value="nGrad"> Graduate Nomination</p>

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
    </div> 

    <!-- This is for the description box-->
    <!-- This is for the description box-->
	<p><strong>Description</strong></p>
	   <textarea name='desc'> 
	   </textarea>
	   <!-- <textarearows='4' cols='80'> -->


    <div class="form-group">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Nominate!</button>
      </div>
    </div>

  </fieldset></body>
  </form>
  </div>
  </div>
@endsection
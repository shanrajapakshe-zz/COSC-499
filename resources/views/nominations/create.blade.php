@extends('main')
@section('title', 'Posts')


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

            <form class="form-horizontal" action="{{url ('/post') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label class="control-label col-sm-2" for="studentNumber">Student Number:</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" id="studentNumber" placeholder="Enter Student Number!">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="body">Body:</label>
                    <div class="col-sm-10">
                        <textarea name="body" type="textarea" class="form-control" id="body" placeholder="Nomination!"></textarea> 
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Nominate!</button>
                    </div>
                </div>


                <form method="post" action="preview">
           <fieldset>              
            <p><strong>Student Number:</strong><br/>
                   <input type="text" name="snum"required pattern='.{8}'/></p>  
                      
               <p><strong>First Name:</strong><br/>
                   <input type="text" name="fname" required /></p>
                   
               <p><strong>Last Name:</strong><br/>
                   <input type="text" name="lname" required /></p> 
                   
               <p><strong>Course:</strong><br/>
                   <input type="text" name="course"required /></p>  
                   
               <p><strong>Section:</strong><br/>
                   <input type="text" name="section"required /></p>
                   
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
                    </div> 
                    
               <!-- This is for the description box-->
               <p><strong>Description</strong></p>
               <textarea rows='4' cols='80'> 
               </textarea>
               
               
               <p><input type="submit" name="preview" value="Preview"/></p>
                   
           </fieldset></body>
            </form>
        </div>
    </div>
@endsection
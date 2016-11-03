<?php
/**
 * Created by PhpStorm.
 * User: omercheema
 * Date: 2016-10-18
 * Time: 6:50 PM
 */

$display_block = "<form method=\"post\" action=\"preview\">
           <fieldset> <legend><h3> Unit 5 - Award Nomination Portal </h3></legend>
           
              <p><strong>Student Number:</strong>
                   <input type=\"number\" name=\"snum\"required pattern='.{8}'/> 
                      
               <strong>First Name:</strong>
                   <input type=\"text\" name=\"fname\" required />
                   
               <strong>Last Name:</strong>
                   <input type=\"text\" name=\"lname\" required /></p> 
                   
               <p><strong>Course:</strong>
                   <input type=\"text\" name=\"course\"required />
                   
               <strong>Section:</strong>
                   <input type=\"text\" name=\"section\"required /></p>
                   
               </form>   
               
              
                <script>
                    $(document).ready(function () {
                        $(\"#text1\").hide(); 
                        $(\"#text2\").hide();  //keeps the extra boxes hidden
                                                              
                        $(\"#r1\").click(function () {
                            $(\"#text1\").show();
                            $(\"#text2\").hide();       //if grade is selected, show grade attributes                      
                        });
                        
                   
                        
                        $(\"#r2\").click(function () {
                            $(\"#text1\").hide();       // if estimate is selected, show estimate attributes
                            $(\"#text2\").show();   
                        });
                    });  
                </script>
                
               <strong>Grades:</strong><br/>

                <input type=\"radio\" name=\"radio1\" id=\"r1\" value=\"Actual\" onClick=\"getResults()\">
                Grade 
                

                    
                <input type=\"radio\" name=\"radio1\" id=\"r2\" value=\"Estimate\">
                Estimated Grade
 
                <div class=\"text1\" id='text1'>
                    <p>Grade
                        <input type='number' id='actgrade' name='actgrade' min='1' max ='100'>
                        Rank 
                        <input type='number' id='actrank' name='actrank' min='1' max='5'>  
                    </p>
                </div>
               
                
                <div class=\"text\" id='text2'>
                    <p>Estimated Grade 
                        <input type='number' id='estgrade' name='estgrade' min='1' max='100'> 
                        Rank 
                        <input type='number' id='estrank' name='estrank' min='1' max='5'>
                    </p>
                </div>
                
                
             
                              
              <!--
               <p><strong>Nominations:</strong><br/>
                   <input type=\"checkbox\" name=\"nA\" value=\"nA\"> Nomination A</p>
                   <input type=\"checkbox\" name=\"nB\" value=\"nB\"> Nomination B</p>
                   <input type=\"checkbox\" name=\"nC\" value=\"nC\"> Nomination C</p>
                   <input type=\"checkbox\" name=\"nD\" value=\"nD\"> Nomination D</p>
                   <input type=\"checkbox\" name=\"nE\" value=\"nE\"> Nomination E</p>
                   <input type=\"checkbox\" name=\"nGrad\" value=\"nGrad\"> Graduate Nomination</p>
               -->
                   
                  
               <!-- This is for the description box-->
               <p><strong>Description</strong></p>
               <textarea rows='4' cols='80'> 
               </textarea>
               
               
               <p><input type=\"submit\" name=\"preview\" value=\"Preview\"/></p>
                   
           </fieldset>";


?>

<!DOCTYPE html>

<html>
<head>
    <script src="jquery-3.1.1.js"></script>
    <title>Account Creation</title>
</head>
<body>
<?php
echo  "$display_block" . "</body>";

?>


</body>
</html>
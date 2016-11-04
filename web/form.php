<?php
/**
 * Created by PhpStorm.
 * User: omercheema
 * Date: 2016-10-18
 * Time: 6:50 PM
 */

/** Here is the codes we need to use */
session_start();

$snumValue= "";
$fnameValue= "";
$lnameValue= "";
$courseValue= "";
$sectionValue= "";
$actgradeValue= "";
$actrankValue= "";
$estgradeValue= "";
$estrankValue= "";
$descValue= "";

$_SESSION['snum'] = $snumValue;
$_SESSION['fname'] = $fnameValue;
$_SESSION['lname'] = $lnameValue;
$_SESSION['course'] = $courseValue;
$_SESSION['section'] = $sectionValue;
$_SESSION['actgrade'] = $actgradeValue;
$_SESSION['actrank'] = $actrankValue;
$_SESSION['estgrade'] = $estgradeValue;
$_SESSION['estrank'] = $estrankValue;
$_SESSION['desc'] = $descValue;

/**
 * End of Additional code
 */

$display_block = "<form method=\"post\" action=\"preview2.php\">
           <fieldset> <legend><h3> Unit 5 - Award Nomination Portal </h3></legend>
           
           <script> 
                   $(document).ready(function () {
                       $('#sInfo').hide();  //keeps the extra boxes hidden
                       
                       $('#c1').click(function() {
                           $(\"#sInfo\").toggle(this.checked);
                       });
                                                            
                   }); 
  
               </script>           
               
             Award A <input type='checkbox' id='c1'>
          
             <div id='sInfo'>


           
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
                           <textarea name='desc'> 
                           </textarea>
                           <!-- <textarearows='4' cols='80'> -->
               
               
               <p><input type=\"submit\" name=\"submit\" value=\"submit\"/></p>
                   
           </fieldset>
           
           </form> ";



?>

<!DOCTYPE html>
<!-- Additional Styling code -->
<style>
    form{
        width 80%;
        align-content: center;
    }
    textarea {
        width: 50%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        resize: none;
    }
</style>
<!-- Additional Styling code -->

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
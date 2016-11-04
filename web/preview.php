<?php
/**
 * Created by PhpStorm.
 * User: omercheema
 * Date: 2016-11-04
 * Time: 7:53 AM
 */

session_start();

$snumValue= $_POST['snum'];
$fnameValue= $_POST['fname'];
$lnameValue= $_POST['lname'];
$courseValue= $_POST['course'];
$sectionValue= $_POST['section'];
$actgradeValue = $_POST['actgrade'];
$actrankValue = $_POST['actrank'];
$estgradeValue = $_POST['estgrade'];
$estrankValue = $_POST['estrank'];
$descValue = $_POST['desc'];

//echo "Your Student Number is: ".$snumValue.".
//Your registration is: ".$fnameValue.".
//Your registration is: ".$lnameValue.".
//Your registration is: ".$courseValue.".
//Your registration is: ".$sectionValue.".";


?>

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 60%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    table{
        align-content: center;
    }
</style>
<table>
<tr>
    <th>Student #</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Course</th>
    <th>Section</th>
    <th>Grade</th>
    <th>Rank</th>
    <th>Est. Grade</th>
    <th>Est. Rank</th>
    <th>Description</th>

</tr>
<tr>
    <td><?php echo $snumValue?></td>
    <td><?php echo $fnameValue?></td>
    <td><?php echo $lnameValue?></td>
    <td><?php echo $courseValue?></td>
    <td><?php echo $sectionValue?></td>
    <td><?php echo $actgradeValue?></td>
    <td><?php echo $actrankValue?></td>
    <td><?php echo $estgradeValue?></td>
    <td><?php echo $estrankValue?></td>
    <td><?php echo $descValue?></td>
</tr>
</table>


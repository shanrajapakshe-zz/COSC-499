<?php
/**
 * Created by PhpStorm.
 * User: Brand
 * Date: 11/3/2016
 * Time: 12:31 PM
 */

echo "hello world </br>";
echo phpversion();


if (isset($_POST['submit'])) { //if submission form pressed

    $targetsid = filter_input(INPUT_POST, 'snum');
    $targetfname = filter_input(INPUT_POST, 'fname');
    $targetlname = filter_input(INPUT_POST, 'lname');
    $targetcourse = filter_input(INPUT_POST, 'course');
    $targetsection = filter_input(INPUT_POST, 'section');

    $display_block  = "<table > <tr> "
        . "<th>Student Number</th>"
        . "<th>First Name</th>"
        . "<th>Last Name</th>"
        . "<th>Course</th> "
        . "<th>Section</th>"
        . "<th>Actual Grade</th>"
        . "<th>Actual Rank</th>"
        . "<th>Estimated Grade</th>"
        . "<th>Estimated Rank </th>"
        . "<th>Description</th></tr>";


    $display_block .= "<tr>"
        . "<td>" . $targetsid . "</td>"
        . "<td>" . $targetfname . "</td>"
        . "<td>" . $targetlname . "</td>"
        . "<td>" . $targetcourse . "</td>"
        . "<td>" . $targetsection . "</td>"
        . "<td>" . $targetsid . "</td>"
        . "<td>" . $targetsid . "</td>"
        . "<td>" . $targetsid . "</td>"
        . "<td>" . $targetsid . "</td>"
        . "<td>" . $targetsid . "</td>"
        . "</tr>";


    $display_block .= "</table>";

}


?>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            color : blue;
        }
        th, td {
            padding: 5px;
        }
    </style>
    <title>Preview Entry</title>
</head>
<body>
<?php
echo "$display_block";
?>
</body>
</html>
@extends('main')
@section('title', 'Preview')


@section('content')

$snumValue = $_POST['snum'];
$fnameValue = $_POST['fname'];
$lnameValue = $_POST['lname'];
$courseValue = $_POST['course'];
$sectionValue = $_POST['section'];
$gradeValue = $_POST['grade'];
$estgradeValue = $_POST['estgrade'];
$estrankValue = $_POST['estrank'];
$nomValue = $_POST['nom'];
$descValue = $_POST['desc'];
		
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
		
    </div>
@endsection
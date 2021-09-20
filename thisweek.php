<?php
session_start();
if(!isset($_SESSION['teacher_name']))
header("location:home.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Classes | this week</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	session_start();
	?>
	<table border="5" cellpadding="5" cellspacing="20" class="myclasses">
		<tr>
			<td>Monday</td>
		</tr>
		<tr>
			<td>class1</td>
			<td>class2</td>
			<td>class3</td>
		</tr>
		<tr>
			<td>Tuesday</td>
		</tr>
		<tr>
			<td>class1</td>
			<td>class2</td>
			<td>class3</td>
		</tr>
		<tr>
			<td>Wednesday</td>
		</tr>
		<tr>
			<td>class1</td>
			<td>class2</td>
			<td>class3</td>
		</tr>
		<tr>
			<td>Thursday</td>
		</tr>
		<tr>
			<td>class1</td>
			<td>class2</td>
			<td>class3</td>
		</tr>
		<tr>
			<td>Friday</td>
		</tr>
		<tr>
			<td>class1</td>
			<td>class2</td>
			<td>class3</td>
		</tr>
		<tr>
			<td>Saturday</td>
		</tr>
		<tr>
			<td>class1</td>
			<td>class2</td>
			<td>class3</td>
		</tr>
	</table>
	<a href="logout.php"></a>
</body>
</html>
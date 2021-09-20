<?php
session_start();
if (!isset($_SESSION['teacher_name']))
header("location:home.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add schedule | add your time table</title>
</head>
<body>
	<form action="save_schedule.php" method="post">
		<table>
			<tr>
				<th>Time</th>
				<th>Class</th>
			</tr>
			<tr>
				<td><input type="text" name="time" id="" placeholder="enter time"></td>
				<td><input type="text" name="class" id="" placeholder="enter class"></td>
			</tr>
			<tr>
				<td><input type="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Teacher's Page | Attendance System</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	session_start();	
	?>
	<select name="classes" id="classes">
		<option value="my classes">My Classes</option>
		<option value="today">Today</option>
		<option value="this week">This Week</option>
		<option value="this month">This Month</option>
		<option value="other days">Other Days</option>
	</select>
	<select name="students" id="students">
		<option value="my students">My Students</option>
		<option value="12">Grade 12</option>
		<option value="11">Grade 11</option>
	</select>
</body>
</html>
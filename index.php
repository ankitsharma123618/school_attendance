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
	<title><?php echo $_SESSION['teacher_name']; ?> | Teacher's Page | Attendance System</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="main">
		<div class="menu" id="menu1">
			<h3>My Classes</h3>
			<div class="menu-items">
				<a href="today.php"><h3>Today</h3></a>
				<a href="thisweek.php"><h3>This Week</h3></a>
				<a href="thismonth.php"><h3>This Month</h3></a>
				<a href="otherdays.php"><h3>Other Days</h3></a>
			</div>
		</div>
		<div class="menu" id="menu2">
			<h3>My Students</h3>
			<div class="menu-items">
				<a href="class12.php"><h3>Grade 12</h3></a>
				<a href="class11.php"><h3>Grade 11</h3></a>
			</div>
		</div>
	</div>
	<a class="logout" href="logout.php">logout</a>
</body>
</html>
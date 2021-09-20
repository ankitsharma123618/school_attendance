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
	<title>My Classes | Other Days</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<table border="5" cellpadding="5" cellspacing="20" class="myclasses">
		<tr>
			<td>January</td>
		</tr>
		<tr>
			<td>February</td>
		</tr>
		<tr>
			<td>March</td>
		</tr>
		<tr>
			<td>Aprail</td>
		</tr>
		<tr>
			<td>May</td>
		</tr>
		<tr>
			<td>June</td>
		</tr>
		<tr>
			<td>July</td>
		</tr>
		<tr>
			<td>August</td>
		</tr>
		<tr>
			<td>September</td>
		</tr>
		<tr>
			<td>October</td>
		</tr>
		<tr>
			<td>November</td>
		</tr>
		<tr>
			<td>December</td>
		</tr>
	</table>
	<a href="logout.php"></a>
</body>
</html>
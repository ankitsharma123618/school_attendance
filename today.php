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
	<title>My Classes | Today</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
	$host="localhost";
	$user="root";
	$password="";
	$database="freelance_school_attendance";
	$conn=mysqli_connect($host,$user,$password,$database);
	$t_id = $_SESSION['teacher_id'];
	echo $t_id;
	$today = date("D");
	echo $today;

	$query = "select * from schedule where teacher_id = '$t_id' && day = '$today'";
	$result = mysqli_query($conn,$query);
	$num = mysqli_num_rows($result);
	echo $num;
	if ($num == 1) {
		$row = mysqli_fetch_array($result);
		echo "<h4>".$row['time']."</h4> ";
		echo $row['class']." ";
	}
	else
	header("location:add_schedule.php");

	mysqli_close($conn);
	?>
	<a href="logout.php"></a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validate_login | Attendance System</title>
</head>
<body>
	<?php
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$connect=mysqli_connect("localhost","root","","freelance_school_attendance");
	$query="select * from teachers where name='$username' && password='$password'";
	$result=mysqli_query($connect,$query);
	$num=mysqli_num_rows($result);
	if($num==1){
		$row=mysqli_fetch_array($result);
		echo $row['name'];
		header("location:last.php");
	}
	else
	header("location:login.html");
	mysqli_close($connect);
	?>
</body>
</html>
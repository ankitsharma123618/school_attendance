<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validate Registration | Attendance System</title>
</head>
<body>
	<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	$connect=mysqli_connect("localhost","root","","freelance_school_attendance");
	$query="insert into teachers(name,password,confirm_password) values('$username','$password','$confirmpassword')";
	$i=mysqli_query($connect,$query);
	if($i==1)
	header("location:login.php");
	mysqli_close($connect);
	?>
</body>
</html>
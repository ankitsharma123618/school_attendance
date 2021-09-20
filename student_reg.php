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
	<title>Student registration | School attendance</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form">
	<form action="student_reg.php" method="post">
		<input type="text" placeholder="name" name="student_name" required><br>
		<input type="text" placeholder="rollno" name="student_rollno" required><br>
		<input type="text" placeholder="class" name="student_class" required><br>
		<input type="submit" value="register"><br>
	</form>
</div>
<?php
$host="localhost";
$user="root";
$password="";
$database="freelance_school_attendance";
$sname=$_POST['student_name'];
$sroll=$_POST['student_rollno'];
$sclass=$_POST['student_class'];
$conn=mysqli_connect($host,$user,$password,$database);
if(!$conn)
echo "connection denied";
$query="insert into students(name,rollno,class) values('$sname','$sroll','$sclass')";
$i=mysqli_query($conn,$query);
if($i)
header("location:index.php");
?>
<?php mysqli_close($conn); ?>
</body>
</html>
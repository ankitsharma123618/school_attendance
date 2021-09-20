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
	<title>class - 11th | students</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	$host="localhost";
	$user="root";
	$password="";
	$database="freelance_school_attendance";
	$conn=mysqli_connect($host,$user,$password,$database);
	$query="select name,rollno from students where class=11";
	$result=mysqli_query($conn,$query);
	$num=mysqli_num_rows($result);
	if($num==0)
	header("location:student_reg.php");
	else
	{
		for($i=0;$i<$num;$i++){
			$row=mysqli_fetch_array($result);
	?>
	<form class="form" action="attendance.php" method="post">
		<span>name</span><br>
		<?php echo $row['name'];?>
		<span>rollno</span><br>
		<?php  echo $row['rollno']."<br>";}} ?>
	</form>
	<?php mysqli_close($conn); ?>
	<a class="logout" href="logout.php">logout</a>
	<a href="student_reg.php">add more</a>
</body>
</html>
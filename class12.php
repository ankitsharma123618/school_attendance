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
	<title><?php echo $_SESSION['teacher_name']; ?> | class 12th | students</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	$host="localhost";
	$user="root";
	$password="";
	$database="freelance_school_attendance";
	
	$conn=mysqli_connect($host,$user,$password,$database);
	$query="select * from students where class=12";
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
		<?php echo $row['name']; ?>
		<?php echo $row['rollno']."<br>";echo "P<input type='radio' value='present' name='attendance'>";echo "
		A<input type='radio' value='absent' name='attendance'>.<br>";}} ?>
	</form>
	<?php mysqli_close($conn); ?>
	<a href="logout.php">logout</a>
	<a href="student_reg.php">add more</a>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION['teacher_name']))
header("location:home.php");

$host="localhost";
$user="root";
$password="";
$database="freelance_school_attendance";
$conn=mysqli_connect($host,$user,$password,$database);
$t_id = $_SESSION['teacher_id'];
echo $t_id;
$today = date("D");
echo $today;

$time=$_POST['time'];
$class=$_POST['class'];

$q="insert into schedule (day,time,class,teacher_id) values('$today','$time','$class','$t_id')";
$query=mysqli_query($conn, $q);
if($query)
header("location:index.php");
else
echo "failed to add";
?>

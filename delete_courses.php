<?php 
$a=$_REQUEST['a'];
include_once("connect.php");
$data=mysqli_query($con,"delete from coursesfee where id='$a'")
or die(mysqli_error($con));
header("location:showcourses.php");
?>
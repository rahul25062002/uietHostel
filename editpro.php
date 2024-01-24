<?php 
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
	$f=$_POST['t6'];
	$g=$_POST['t7'];
	include_once("connect.php");
	mysqli_query($con,"update newuser set name='$a',fname='$b',mname='$c',no='$d',pwd='$f',dob='$g' where email='$e'")or die(mysqli_error($con));
		$msg="Edit Profile SuccessFully";
		header("location:msg.php?a=".$msg);
?>


	
?>	
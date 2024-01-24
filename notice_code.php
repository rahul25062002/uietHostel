<?php 
	include_once("connect.php");
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
		mysqli_query($con,"insert into addnotice(title,date,cls,notice,user) 
		values('$a','$b','$c','$d','clk')")
		or die(mysqli_error($con));
		$msg="Add Notice SuccessFully";
		header("location:msg.php?a=".$msg);
	
?>


	
?>	
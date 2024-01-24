<?php 
	include_once("connect.php");
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
	$f=$_POST['t6'];
	$total=$c+$d+$e+$f;
		mysqli_query($con,"insert into hostelfee(r_cat,r_type,r_price,sec_price,main_price,ele_price,total) 
		values('$a','$b','$c','$d','$e','$f','$total')")
		or die(mysqli_error($con));
		$msg="Add Room Charges SuccessFully";
		header("location:msg.php?a=".$msg);
	
?>


	
?>	
<?php 
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
	$f=$_POST['t6'];
	$g=$_POST['t7'];
	$h=$_POST['t8'];
	$i=$_POST['t9'];
	$j=$_POST['t10'];
	$k=$_POST['t11'];
	$l=$_POST['t12'];
	$total=$e+$f+$g+$h+$i+$j+$k+$l;
	include_once("connect.php");
	mysqli_query($con,"insert into coursesfee(cat,cls,dept,sem,	s1,	s2,	s3,	s4,	s5,	s6,	s7,	s8,	total) 
			values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$total')")
		or die(mysqli_error($con));
		$msg="Courses Fee are Register";
		header("location:msg.php?a=".$msg);
?>


	
?>	
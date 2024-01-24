<?php 
	include_once("connect.php");
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
	$f=$_POST['t6'];
	$data=mysqli_query($con,"select * from room where r_no='$c' and hostel_no='$f'")
	or die(mysqli_error($con));
	if(mysqli_num_rows($data)>0){	
		$msg="This Room-no is already inserted";
		header("location:msg.php?a=".$msg);
	}
	else{
		mysqli_query($con,"insert into room(type,floor,r_no,no_seat,no_person,status,hostel_no) 
		values('$a','$b','$c','$d','$e','FREE','$f')")
		or die(mysqli_error($con));
		$msg="Add Room SuccessFully";
		header("location:msg.php?a=".$msg);
	}
?>


	
?>	
<?php 
session_start();
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
include_once("connect.php");
if($c=="stu"){
	$data=mysqli_query($con,"select * from newuser where email='$a' and pwd='$b'")
	or die(mysqli_error($con));
	if(mysqli_num_rows($data)>0){
		$_SESSION['user']=$a;
		header("location:user.php");
	}
	else{
		$msg="Not Match";
		header("location:msg.php?a=".$msg);
	}
}
else if($c=="wad"){
	$data=mysqli_query($con,"select * from wardan where email='$a' and pwd='$b'")
	or die(mysqli_error($con));
	if(mysqli_num_rows($data)>0){
		$_SESSION['wad']=$a;
		header("location:wad.php");
	}
	else{
		$msg="Not Match";
		header("location:msg.php?a=".$msg);
	}
}
else if($c=="mess"){
	$data=mysqli_query($con,"select * from mess where email='$a' and pwd='$b'")
	or die(mysqli_error($con));
	if(mysqli_num_rows($data)>0){
		$_SESSION['mess']=$a;
		header("location:mess.php");
	}
	else{
		$msg="Not Match";
		header("location:msg.php?a=".$msg);
	}
}
else if($c=="clk"){
	$data=mysqli_query($con,"select * from clk where email='$a' and pwd='$b'")
	or die(mysqli_error($con));
	if(mysqli_num_rows($data)>0){
		$_SESSION['clk']=$a;
		header("location:clk.php");
	}
	else{
		$msg="Not Match";
		header("location:msg.php?a=".$msg);
	}
}
else{
	$msg="Select Type";
	header("location:msg.php?a=".$msg);
}

?>
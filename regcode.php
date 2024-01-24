<?php 
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$f=$_POST['t6'];
	$g=$_POST['t7'];
	$h=$_POST['t8'];
	$i=$_POST['t9'];
	$j=$_POST['t10'];
	$k=$_POST['t11'];
	$l=$_POST['t12'];
	$name=$_FILES['t5']['name'];
	$name=str_replace(" ", "_", $name);
	$location=$_FILES['t5']['tmp_name'];
	$fname="upload";
	if(file_exists($fname)){}
		else{ mkdir($fname); }
	$path=$fname."/".$name;
	move_uploaded_file($location, $path);
	include_once("connect.php");
	$data=mysqli_query($con,"select * from newuser where email='$f'")
	or die(mysqli_error($con));
	if(mysqli_num_rows($data)>0){
		$msg="Already Register";
		header("location:msg.php?a=".$msg);
	}
	else{
		mysqli_query($con,"insert into newuser(name,fname,mname,no,img,email,pwd,dob,cls,dept,cat,gender,status) 
			values('$a','$b','$c','$d','$path','$f','$g','$h','$i','$j','$k','$l','pending')")
		or die(mysqli_error($con));
		$msg="Thank You Are Register";
		header("location:msg.php?a=".$msg);
	}
?>


	
?>	
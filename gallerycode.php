<?php 
	include_once("connect.php");
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t4'];
	for($i=0;$i<count($_FILES['t3']['name']);$i++){
		echo"<br/>".$name=$_FILES['t3']['name'][$i];
		$name=str_replace(" ", "_", $name);
		$location=$_FILES['t3']['tmp_name'][$i];
		$fname="upload";
		if(file_exists($fname)){}
			else{ mkdir($fname); }
		$path=$fname."/".$name;
		move_uploaded_file($location, $path);	
		mysqli_query($con,"insert into gallery(date,place,img,title) 
		values('$a','$b','$path','$c')")
		or die(mysqli_error($con));
		$msg="Add Gallery SuccessFully";
		header("location:msg.php?a=".$msg);
	}
	
?>	
<?php 
	include_once("connect.php");
	$a=$_POST['t1'];
	echo $b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$data=mysqli_query($con,"select * from room where hostel_no='$a' and r_no='$b'")
	or die(mysql_error($con));
    while($data2=mysqli_fetch_assoc($data)){
		$no_seat=$data2['no_seat'];
	}
	$no_seat--;
	if($no_seat==0){
		$status="BOOKED";
	}
	else{
		$status="FREE";
	}
	$data=mysqli_query($con,"update room set no_seat='$no_seat',status='$status' where hostel_no='$a' and r_no='$b'")or die(mysql_error($con));
	mysqli_query($con,"insert into booking(h_no,r_no,name,email) values('$a','$b','$c','$d')")
	or die(mysqli_error($con));
	$data=mysqli_query($con,"update newuser set r_no='$b',h_no='$a' where email='$d'")or die(mysql_error($con));
	$msg="Room Allow Successfully";
		header("location:msg.php?a=".$msg);
    

?>	
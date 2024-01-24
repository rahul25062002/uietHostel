<?php 
  include_once("connect.php");
  $a=$_POST['t1'];
  $b=$_POST['t2'];
  $c=$_POST['t3'];
  $d=$_POST['t4'];
  $e=$_POST['t5'];
  $f=$_POST['t6'];
    mysqli_query($con,"insert into addrequest(name,email,date,cls,dept,request1,status) 
    values('$a','$b','$c','$d','$e','$f','Pending')")
    or die(mysqli_error($con));
    $msg="Add Request SuccessFully";
    header("location:msg.php?a=".$msg);
?>  
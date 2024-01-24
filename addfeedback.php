<?php 
  include_once("connect.php");
  $a=$_POST['t1'];
  $b=$_POST['t2'];
  $c=$_POST['t3'];
  $d=$_POST['t4'];
  $e=$_POST['t5'];
  $f=$_POST['t6'];
  $g=$_POST['t7'];
    mysqli_query($con,"insert into feedback(name,email,cls,img,dept,msg,type) 
    values('$a','$b','$d','$g','$e','$f','$c')")
    or die(mysqli_error($con));
    $msg="Add Feedback SuccessFully";
    header("location:msg.php?a=".$msg);
?>  
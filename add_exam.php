<?php 
  include_once("connect.php");
  $a=$_POST['t1'];
  $b=$_POST['t2'];
  $c=$_POST['t3'];
  $d=$_POST['t4'];
  $e=$_POST['t5'];
    mysqli_query($con,"insert into examfee(cat,cls,dept,sem,fee) 
    values('$a','$b','$c','$d','$e')")
    or die(mysqli_error($con));
    $msg="Add Notice SuccessFully";
    header("location:msg.php?a=".$msg);
?>  
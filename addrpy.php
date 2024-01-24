<?php 
  include_once("connect.php");
  $a=$_POST['t1'];
  $b=$_POST['t2'];
    mysqli_query($con,"update addrequest set status='$b' where id='$a'")
    or die(mysqli_error($con));
    $msg="Add Reply SuccessFully";
    header("location:msg.php?a=".$msg);
?>  
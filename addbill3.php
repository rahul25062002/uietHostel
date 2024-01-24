<?php 
  include_once("connect.php");
  $a=$_POST['t1'];
  $b=$_POST['t2'];
  $c=$_POST['t3'];
    mysqli_query($con,"update newuser set att='$b', mess='$c' where id='$a'")
    or die(mysqli_error($con));
    $msg="Add Bill SuccessFully";
    header("location:msg.php?a=".$msg);
?>  
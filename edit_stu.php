<?php 
$a=$_REQUEST['a'];
include_once("connect.php");
$data=mysqli_query($con,"select * from newuser where id='$a'")
or die(mysqli_error($con));
if($single=mysqli_fetch_assoc($data)){ 
  $status=$single['status'];
  if($status=="pending"){
    $final="Active";
  }
  else{
    $final="pending";
  }
}
mysqli_query($con,"update newuser set status='$final' where id='$a'")
or die(mysqli_error($con));
header("location:showstu.php");
?>
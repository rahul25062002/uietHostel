<?php
$a=$_REQUEST['data'];
include_once("connect.php");
      $data=mysqli_query($con,"select * from room where status='FREE' and hostel_no='$a'")
      or die(mysql_error($con));
      while($data2=mysqli_fetch_assoc($data)){
      	echo"<option value=".$data2['r_no'].">".$data2['r_no']."(".$data2['no_seat'].")</option>";
      }
?>
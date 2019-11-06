<?php
include 'Connect.php';
$Type1=$_POST['education'];
$s=implode(" and ",$Type1);
$num=$_SESSION['Type'];
$sol=$_SESSION['email'];
$read=$_SESSION['name'];
$gain=$_SESSION['id'];
$r="select  amount as Amount from storage where Type='$num' and  Shoot_type='$s'";
$get=  mysqli_query($con,$r) or die(mysqli_error($con));
$show=  mysqli_num_rows($get);
$put=  mysqli_fetch_array($get);
$sum=$put['Amount'];
$solve="INSERT into order_placed(name,Type,Shoot_type,Amount,User_id)values('$read','$num','$s','$sum','$gain')";
$result=  mysqli_query($con,$solve) or die(mysqli_error($con));
$r="select  id from storage where Type='$num' and  Shoot_type='$s'";
header("location:Success1.php");
 ?>


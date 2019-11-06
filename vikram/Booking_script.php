<?php
require 'Connect.php';
$Type=$_POST['optradio'];
$name=  mysqli_real_escape_string($con,$_POST['name']);
$email1=  mysqli_real_escape_string($con,$_POST['email']);
$contact=  mysqli_real_escape_string($con,$_POST['Mobile']);
$contact1=  mysqli_real_escape_string($con,$_POST['Reference']);
$address=mysqli_real_escape_string($con,$_POST['Home']);
$address1=mysqli_real_escape_string($con,$_POST['Venue']);
$Others=mysqli_real_escape_string($con,$_POST['Others']);
$insert="insert into booking(Type,name,email,Contact,Reference_No,Home_address,Venue_Address,Others)values('$Type','$name','$email1','$contact','$contact1','$address','$address1','$Others')";
$restore= mysqli_query($con,$insert)or die(mysqli_error($con)); 
$id=  mysqli_insert_id($con);
$_SESSION['pid']=$id;
$_SESSION['email']=$email1;
$_SESSION['name']=$name;
$_SESSION['id']=$id;
$_SESSION['Type']=$Type;
if($Type=="Fashion Shoot")
{
    header("location:Fashion.php");
}
else if($Type=="Wedding")
{
    header("location:Wedding.php");
}
else if($Type=="PreWedding")
{
    header("location:PreWedding.php");
}
else if($Type=="Baby-Shoot")
{
    header("location:BabyShoot.php");
}
else if($Type=="Others")
{
    header("location:Others.php");
}
?>



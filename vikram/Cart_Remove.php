<?php
include 'Connect.php';
$id4=$_GET['id1'];
echo $id4;
$add=$_SESSION['name'];
$max="delete from order_placed where User_id='$id4' and name='$add'";
$read=mysqli_query($con,$max) or die(mysqli_error($con));
$cave=  mysqli_num_rows($read);
echo $cave;
if($cave==0)
{
    echo"<label>Items Successfully Removed</label>";
}
else
{}
header("location:Success1.php");
?>

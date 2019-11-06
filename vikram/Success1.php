<?php
include 'Connect.php';
$rep=$_SESSION['name'];
$store=$_SESSION['id'];
?>
<html>
    <head>
        <title>
            Success
        </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php 
        $go="select name as Name,User_id as id from order_placed where User_id=$store";
        $get=  mysqli_query($con,$go) or die(mysqli_error($con));
       $put1= mysqli_fetch_array($get);
       $save=  mysqli_num_rows($get);
       $s=$put1['Name'];
                ?>
        <div class="container">
            <div class="jumbotron">
                <h1 disabled>Thankyou for Booking with us <?php echo $s;?></h1>
                <div class="row">
                <a href="index.php" class="btn btn-warning">click here to Book an Another Appointment</a>
                <?php
                if($save>0)
                {   
                echo "<a href='Cart_Remove.php?id1={$put1['id']}' class='btn btn-danger' class='remove_item_link'>Remove</a>";
                }
                else 
                    {
                    echo "<a href='Cart_Remove.php?id1={$put1['id']}' class='btn btn-danger' class='remove_item_link' disabled>Remove</a>";
                    }
                ?>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </body>
</html>
<?php
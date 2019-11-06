<?php
include 'Connect.php';
?>
<html>
<head>
	<meta charset="UTF-8">
 
  <title>Ankit Photography</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/main-logo.png">
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="menu.js"></script>
 <link rel="stylesheet" type="text/css" href="navbar.css">
  <script src="Sample.js"></script>
</head>
<body>
    
<?php
include 'navbar.php';
?>
    
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="booking-cta">
<h1>Book your order today</h1>
<p>We Believe in giving our best.That's Why we are best</p>
</div>
</div>
<div class="col-md-7 col-md-offset-1">
<form name="myform" onsubmit="return Save()" action="Booking_script.php" method="POST">
<div class="form-group">
<div class="radio">
<label class="radio-inline" >
<input type="radio" name="optradio" value="Fashion Shoot">
<span>Fashion Shoot</span>
</label>
<label class="radio-inline">
<input type="radio" name="optradio" value="Wedding" >
<span>Wedding</span>
</label>
<label class="radio-inline">
<input type="radio" name="optradio" value="PreWedding">
<span>PreWedding</span>
</label>
<label class="radio-inline">
<input type="radio" name="optradio" value="Baby-Shoot">
<span>Baby Shoot</span>
</label>  
</div>
</div>
<br>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Name</span>
<input class="form-control" type="text" name="name" placeholder="Enter Your Name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Email</span>
<input class="form-control" type="text" name="email" placeholder="Enter Your Email">
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Mobile No</span>
<input class="form-control" type="Telephone" name="Mobile" placeholder="Enter your Mobile Number">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Reference No</span>
<input class="form-control" type="Telephone" name="Reference" placeholder="Enter Your Reference Number">
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Home Address</span>
<input class="form-control" type="Address" name="Home" placeholder="Enter  Address">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Venue Address</span>
<input class="form-control" type="Address" name="Venue" placeholder="Enter Venue Address">
</div>
</div>
</div>
<div class="row">    
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Others</span>
<input class="form-control" type="Address" name="Others" placeholder="Enter Your Shoot type">
</div>
</div>
</div>
<div class="row">
<div class="container1">
  <button class="pack">Submit</button>
  <div class="overlay">
      <div class="text"><button type="Submit" class="button1">Submit</button></div>
  </div>
</div>
</div>    
</form>
   
</div>
</div>   
</div>
    <br><br><br><br><br><br>
    <?php
  include 'footer.php';
    ?> 
</body>
</html>
<?php
include 'Connect.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="Fashion.css"/>
        <script src="Verify.js"></script>
        <script> 
    $(document).ready(function(){
     $("#flip").click(function(){
    $("#panel").slideToggle("slow");  
  });
    }
  );
</script>
<style>
#panel{
  padding: 3px;
  display: none;
  background-color:#3e485c;
}
#Ray
{
    padding:3px;
    display:none;
    background-color:#3e485c;
}
#stone
{
    padding:3px;
    display:none;
    background-color:#3e485c;
}
p
{
    color:white;
}
</style>
</head>
<body class="booking">
<div class="container">
<div class="row">
<div class="col-md-7 col-md-push-5">
<div class="booking-cta">
<h1>FASHION SHOOT</h1>
</div>
</div>
<div class="col-md-4 col-md-pull-7">
<form method="POST" action="check_if_1.php" onsubmit="return Jumbo();">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="checkbox-inline">
    <input type="checkbox" value="Photos" name="education[]" id="flip"/><label>Photo shoot</label>.<br>
<caption class="colors">Rs 3000</caption>
<div id="panel">
    <p>Photos Only</p>..
    <p>= Rs 3000</p>
</div>
</label>
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
</body>
</html>
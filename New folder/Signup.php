<!DOCTYPE html>
<html>
<head>
<title> FlyHigh Airlines </title>
<link rel="stylesheet" type="text/css" href="signup.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
  <h1 class="text-light brand mt-2">
			<img src="assets/images/airtic.png" 
				height="105px" width="105px" alt="">				
		FlyHigh Airlines </h1>
  <p>Life is short and The World is Wide!</p>
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="#">About</a>
  <a href="Signup.php">Signup</a>
  <a href="login.php" style="float:center-right">Login</a>
</div>

<div class="row">
<h2 align='center'>Singup</h2>
  <div class="container">
  <form action="Signup.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="username">Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Your email..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="password">Password</label>
    </div>
    <div class="col-75">
      <input type="password" id="password" name="password" placeholder="Your password.."required>
    </div>
	 <div class="row">
    <input type="submit" value="Submit" name="submit">
  </div>
  </div>
<div class="footer">
  <h2>Copyright@puc.cse</h2>
  
</div>

</body>
</html>

<?php
include("connection.php");
if(isset($_POST['submit']))
{
    $userid=$_POST['user_id'];
	$name=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$query="insert into users values('$userid','$name','$email','$password')";
	if(mysqli_query($con,$query))
	{
		echo "Successfully inserted!";
    }
	else
	{
		echo "error!".mysqli_error($con);
	}
}
?>
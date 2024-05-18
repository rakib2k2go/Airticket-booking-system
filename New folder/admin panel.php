<?php
session_start();
?>
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
<div class="header">
  <h1>Administrator</h1>
</div>


<div class="row">
  <div class="container">
  <form action="login.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="admin_uname">Admin Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="admin_uname" name="admin_uname" placeholder="admin name...">
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="admin_email">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="admin_email" name="admin_email" placeholder="admin email...">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="admin_pwd">Password</label>
    </div>
    <div class="col-75">
      <input type="password" id="admin_pwd" name="admin_pwd" placeholder="Password">
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Signin" name="login">
  </div>
  </form>
</div>
</div>

<div class="footer">
  <h2>Copyright@puc.cse</h2>
  
</div>

</body>
</html>

<?php
include("connection.php");
if(isset($_POST['login']))
{
	$name=$_POST['admin_uname'];
	$pass=$_POST['admin_pwd'];

	$sql="select userid,pass from userinfo where admin_id='$name' and admin_pwd='$pass'";

            $ur=mysqli_query($con,$sql);
            if(mysqli_num_rows($ur)==1)
            {
                $_SESSION['userid']=$id;
                $_SESSION['user_login_status']="loged in";
                header("Location:home.php");
            }
            else
            {
                echo "<p style='color: red;'>Incorrect UserId or Password</p>";
            }
	
}
?>
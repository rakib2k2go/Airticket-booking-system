<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="signup.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
  <h1>Passenger details</h1>
</div>

<div class="row">
  <div class="container">
  <form action="login.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="f_name">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="f_name" name="f_name" placeholder="Enter your first name...">
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="l_name">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="l_name" name="l_name" placeholder="Enter your last name...">
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="dob">Date Of Birth</label>
    </div>
    <div class="col-75">
      <input type="Date" id="dob" name="dob">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="mobile">Mobile No</label>
    </div>
    <div class="col-75">
      <input type="text" id="mobile" name="mobile" placeholder="contact number...">
    </div>
  </div>
  <div class="row">
    <input type="submit" value="submit" name="submit">
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
	$id=$_POST['userid'];
	$pass=$_POST['pass'];

	$sql="select userid,pass from userinfo where userid='$id' and pass='$pass'";

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
<?php
session_start();
include('db.php');

if(isset($_REQUEST['Login']))
{
	$email=$_REQUEST['Email'];
	$pass=$_REQUEST['Password'];
	
	
	$sql="select *from register where Email='$email' AND Password='$pass' ";
	$chk=mysqli_query($db,$sql);
	
	 if(mysqli_num_rows($chk))
	 {
		 $_SESSION['login_user']=$email;
		 echo "Success";
		 header("location:index.html");
	 }
	 else
	 {
		 echo "Invalid";
	 }
	
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Apolo Shopping</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Login.CSS" />

</head>

<body>
  <form class="Box" id="form" method="post">
    <h1>Customer Login</h1>
    <br />
    <div id="Control " class="Control ">
      <input type="text" placeholder=" Username" id="Uname " name="Email" />
      <small>*Error</small>
    </div>
    <br />
    <br />
    <div id=" Control " class="Control ">
      <input type="password" placeholder="Password" id="Password " name="Password" />
      <small>*Error</small>
    </div>

    <br />
    <br />
    <button class="submit" id="submit" name="Login">Login</button>
    <br />
    <a href="" class="Forgot">Forgot Password</a>
    <br />
    <br />

    <label>No Account?</label>
    <a href="Register.php" class="Register">Create one!</a>
  </form>
  <script src="Valid_Login.js"></script>
</body>

</html>
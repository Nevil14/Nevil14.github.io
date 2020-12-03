<?php
include('db.php');echo "ach";
session_start();echo "ach";
if(!isset($_SESSION['login_user']))
{
	header("location:Login.php");
}echo "each";
if(isset($_REQUEST['insert']))
{
	$email=$_REQUEST['Email'];
	$pass=$_REQUEST['Password'];
	$mob=$_REQUEST['Mobile_No'];
	$name=$_REQUEST['Name'];
	
  $sql="insert into register (Name,Mobile_No,Email,Password) values('$name','$mob','$email','$pass')";
  echo "Reach";
  print_r($sql);
  echo "ok";
	mysqli_query($db,$sql);
	header("location:Register.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Registration</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Register.css" />

</head>

<body>
  <h1>New Registration</h1>

  <form class="Box " id="form" name="form" method="post">


    <div class="Control" id="Control">
      <label>Name </label>
      <input type="text" placeholder="Username" id="Username" name="Name" />
      <small>Error Message*</small>
    </div>
    <div class="Control" id="Control">
      <label>Mobile Number </label>
      <input type="number" placeholder=" Mobile Number" id="PhNo" name="Mobile_No" />
      <small>Error Message*</small>
    </div>
    <div class="Control" id="Control">
      <label>Email </label>
      <input type="email" placeholder="Email" id="Email" name="Email" />
      <small>Error Message*</small>
    </div>
    <div class="Control" id="Control">
      <label>Password </label>
      <input type="password" placeholder="Password" id="Password"  name="Password" />
      <small>Error Message*</small>
    </div>
    <div class="Control" id="Control">
      <label>Conform Password </label>
      <input type="password" placeholder="Conform Password" id="ConPassword" />
      <small>Error Message*</small>
    </div>
    <button class="submit" id="submit" name="insert">Register</button>
      </form>


  <script src="Validation _Register.js"></script>
</body>

</html>










<!--




<tbody>
  <tr>
    <td>
      <h1>New Registration</h1>
    </td>
  </tr>
  <tr class="Control  ">
    <td>
      <label for="Name">Name :</label>
    </td>
    <td>
      <input type="text" placeholder="Username" id="Username" />
      <small>Error Message*</small>
    </td>
  </tr>
  <tr class="Control ">
    <td>
      <label for="Number">Mobile No :</label>
    </td>
    <td>
      <input type="number" placeholder="Mobile Number" id="Number" />
      <small>Error Message*</small>
    </td>
  </tr>
  <tr class="Control">
    <td>
      <label for="email">Email :</label>
    </td>
    <td>
      <input type="email" placeholder="Email**" id="Email" />
      <small>Error Message*</small>
    </td>
  </tr>
  <tr class="Control">
    <td>
      <label for="Password">Password :</label>
    </td>
    <td>
     c
    </td>
  </tr>
  <tr class="Control">
    <td>
      <label for="conform Password">Conform Password :</label>
    </td>
    <td>
      <input type="password" placeholder="At Least 8 Digit" id="ConPassword" />
      <small>Error Message*</small>
    </td>
  </tr>
  <tr>
    <td>

      <button id="submit" type="button">Continue</button>
    </td>
  </tr>
</tbody>
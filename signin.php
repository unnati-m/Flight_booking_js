<?php
session_start();
// include Function  file
include_once('function.php');
// Object creation
$usercredentials=new DB_con();
if(isset($_POST['signin']))
{
// Posted Values
$uname=$_POST['username'];
$pasword=($_POST['password']);
//Function Calling
$ret=$usercredentials->signin($uname,$pasword);
$num=mysqli_fetch_array($ret);
if($num>0)
{
  $_SESSION['uid']=$num['id'];
  $_SESSION['fname']=$num['name'];
  header("Location:dash.php");  
}
else
{
// Message for unsuccessfull login
echo "<script>alert('Invalid details. Please try again');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Registraion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/signup.css" rel="">
   <script src="assests/jquery-1.11.1.min.js"></script>
    <script src="assests/bootstrap.min.js"></script>
</head>
<body>


  <div id="loginn">
    <div class="animated animatedFadeInUp fadeInUp">
<form class="form-horizontal" action='' method="POST">
  
    <div id="legend">
      <br>
      <legend class="">User Signin</legend>
    </div>

<div class="control-group">
      <!-- Fullname -->
      <br>
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="" required="true">
      </div>
    </div>


    <div class="control-group">
      <!-- Password-->
      <br>
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="" required="true">
      </div>
    </div>
 

 
    <div class="control-group">
      <!-- Button -->
      <br>
      <div class="controls">
        <a href="#" ><button id="login" class="btn" type="submit" name="signin">Signin</button></a>
      </div>
    </div>

 <div class="control-group">
      <!-- Button -->
      <br>
      <div class="controls">
      Not Registered yet? <a href="index.php">Register Here</a>
      </div>
    </div>

 
</form>
<!--<script type="text/javascript">-->

</script>
</div>
</div>
</body>
</html>

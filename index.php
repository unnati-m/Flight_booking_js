<?php
// include Function  file
include_once('function.php');
// Object creation
$userdata=new DB_con();
if(isset($_POST['submit']))
{
// Posted Values
$fname=$_POST['fullname'];
$uname=$_POST['username'];
$email=$_POST['email'];
$pasword=($_POST['password']);

//Function Calling
$sql=$userdata->registration($fname,$uname,$email,$pasword);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>User Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/login.css">
  <!--<script src="assests/jquery-1.11.1.min.js"></script>
  <script src="assests/bootstrap.min.js"></script>-->
<script>
function checkusername(va) {
  $.ajax({
  type: "POST",
  url: "check_availability.php",
  data:'username='+va,
  success: function(data)
  {
    $("#usernameavailblty").html(data);
  }
  });
}

</script>
</head>
<body>
  
  <div id="loginn">
    <div class="animated animatedFadeInUp fadeInUp">
<form class="form-horizontal" action='' method="POST">
  <div class="animated animatedFadeInUp fadeInUp">
  <div class="formm">
  <div id="legend" align="center">
    <div class="animated animatedFadeInUp fadeInUp">
    <legend class="">User Registration </legend></div>
  </div>

<div class="control-group">
    <!-- Fullname --><div class="animated animatedFadeInUp fadeInUp">
    <label class="control-label"  for="username">Fullname</label>
    <div class="controls">
      <input type="text" id="username" name="fullname" placeholder="" class="input" required="true">
    </div></div>
  </div>


  <div class="control-group">
    <!-- Username --><div class="animated animatedFadeInUp fadeInUp">
    <label class="control-label"  for="username">Username</label>
    <div class="controls">
<input type="text" id="username" name="username" onblur="checkusername(this.value)" class="input" required="true">
        <span id="usernameavailblty"></span>
    </div>
  </div></div>

  <div class="control-group">
    <!-- Email--><div class="animated animatedFadeInUp fadeInUp">
    <label class="control-label" for="email">Email</label>
    <div class="controls">
    <input type="email" id="email" name="email" placeholder="" class="input" required="true">
    </div>
  </div></div>

  <div class="control-group">
    <!-- Password--><div class="animated animatedFadeInUp fadeInUp">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
    <input type="password" id="password" name="password" placeholder="" class="input" required="true">
    </div>
  </div></div>

  <div class="control-group">
    <!-- Button --><div class="animated animatedFadeInUp fadeInUp">
    
    <div class="controls">
      <button class="btn" type="submit" id="submit" name="submit">Register</button>
    </div>
  </div></div>

<div class="control-group">
    <div class="controls"><div class="animated animatedFadeInUp fadeInUp">
      Already registered? <a href="signin.php">Signin</a>
    </div></div>
  </div>


</form>
</div>
</div>
</div>
</body>
</html>

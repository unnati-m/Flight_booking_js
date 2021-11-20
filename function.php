<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'flightdb');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}

// for username availblty
public function usernameavailblty($uname) {
$result =mysqli_query($this->dbh,"SELECT username FROM logininfo WHERE username='$uname'");
return $result;

}

// Function for registration
public function registration($fname,$uname,$email,$pasword)
	{
	$ret=mysqli_query($this->dbh,"INSERT into logininfo(name,username,email,password) values('$fname','$uname','$email','$pasword')");
	return $ret;
	}

// Function for signin
public function signin($uname,$pasword)
	{
	$result=mysqli_query($this->dbh,"SELECT * from logininfo where username='$uname' and password='$pasword'");
	return $result;
	}
}
?>
<?php 
	session_set_cookie_params(0, "/~sas238/", "web.njit.edu");
	session_start(); 
?>
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
ini_set('display_errors' , 1);

include ("functions.php");
include("signup.php");
include("account.php");
$db = mysqli_connect($hostname,$username, $password ,$project);
connect();

$user = $_GET["username"]; echo "<br>User is $user<br>";
$pass = $_GET["password"]; echo "<br>Password is $pass<br>";
//$fname = $_GET["fname"]; echo "<br>First name is $fname<br>";
//$lname = $_GET["lname"]; echo "<br>Last name is $lname<br>";
//$college = $_GET["college"]; echo "<br>College is $college<br>";
//$major = $_GET["major"]; echo "<br>Major is $major<br>";

if (auth($user, $pass)){
	$_SESSION['user']   = $user;
	$_SESSION['logged'] = true;
	$_SESSION['fname'] = $fname;
	$_SESSION['lname'] = $lname;
	$_SESSION['college'] = $college;
	$_SESSION['major'] = $major;
	redirect ("Logged in! Redirecting to user profile.", "profile.php", 3);
}

else{
	gatekeeper();
}

?>
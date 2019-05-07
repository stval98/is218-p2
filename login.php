<?php 
	session_set_cookie_params(0, "/~sas238/", "web.njit.edu");
	session_start(); 
?>
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
ini_set('display_errors' , 1);

include ("functions.php");
include("account.php");
$db = mysqli_connect($hostname,$username, $password ,$project);
connect();

$user = $_GET["username"]; echo "<br>User is $user<br>";
$pass = $_GET["password"]; echo "<br>Password is $pass<br>";

if (auth($user, $pass)){
	$_SESSION['user']   = $user;
	$_SESSION['logged'] = true;
	redirect ("Logged in! Redirecting to user profile.", "profile.php", 3);
}

else{
	gatekeeper();
}

?>
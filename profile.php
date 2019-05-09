<?php 
	session_set_cookie_params(0, "/~sas238/", "web.njit.edu");
?>
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
ini_set('display_errors' , 1);

echo "<!DOCTYPE html>";
echo "<html>";
	echo "<body>";
		echo "<h1>User Profile</h1>";
		echo "<form action='logout.php'>";
			echo "<button type='submit'>Logout</button>";
		echo "</form>";
	echo "</body>";
echo "</html>";

//var_dump($_GET);

/*
$user = $_GET["username"]; echo "<br>User is $user<br>";
$pass = $_GET["password"]; echo "<br>Password is $pass<br>";
$fname = $_GET["fname"]; echo "<br>First name is $fname<br>";
$lname = $_GET["lname"]; echo "<br>Last name is $lname<br>";
$college = $_GET["college"]; echo "<br>College is $college<br>";
$major = $_GET["major"]; echo "<br>Major is $major<br>";
*/
?>
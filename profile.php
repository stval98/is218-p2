<?php 
	session_set_cookie_params(0, "/~sas238/", "web.njit.edu");
	session_start();
?>
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
ini_set('display_errors' , 1);
//include ("functions.php");
//include("account.php");
//include ("signup.php");

echo "<!DOCTYPE html>";
echo "<html>";
	echo "<body>";
		echo "<h1>User Profile</h1>";
		echo $_SESSION['user'] . "<br>";
		echo $_SESSION['fname'] . "<br>";
		echo $_SESSION['lname'] . "<br>";
		echo $_SESSION['college'] . "<br>";
		echo $_SESSION['major'] . "<br>";
		echo "<form action='logout.php'>";
			echo "<button type='submit'>Logout</button>";
		echo "</form>";
	echo "</body>";
echo "</html>";
?>
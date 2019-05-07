<?php 
session_set_cookie_params(0, "/~sas238/");
session_start();
?>
<?php
include ("functions.php");

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
ini_set('display_errors' , 1);
include ("functions.php");
include ( "account.php") ;
$db = mysqli_connect($hostname,$username, $password ,$project);
if (mysqli_connect_errno())
  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
  }
print "<br>Hello! You have successfully connected to MySQL.<br><br>";
mysqli_select_db( $db, $project ); 
$user = $_SESSION['user'];
$_SESSION['logged'] = true;

//$account = getdata("account");
$pass = getdata("password");
$fname = getdata("fname"); 
$lname = getdata("lname");
$college = getdata("college"); 
$major = getdata("major"); 

mysqli_close($db);
exit ( "<br>Interaction completed.<br><br>"  ) ;
?>
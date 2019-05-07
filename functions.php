<?php 

//establish database connection
function connect (){
	global $db;
	global $project;
	if (mysqli_connect_errno())
	  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  exit();
	  }  
	echo "<br>Successfully connected to MySQL database.<br>";
	mysqli_select_db( $db, $project );
}

//authentication
function auth ($user, $pass){
	global $db; 
	$s   =  "select * from  accounts000 where email = '$user' and password = '$pass' " ;
	echo  "<br>SQL statement is: $s<br>"; 
	($t = mysqli_query( $db,  $s ) ) or die( mysqli_error($db) );
	$num = mysqli_num_rows($t);
	if ($num == 0 ){ return false;}
	return true ;
}

//keep out unauthorized users
function gatekeeper(){
	if (! isset ($_SESSION['logged'])){
		redirect("Please login using valid credentials!", "login.html", 3);
	}
}

//sign user out
function logout(){
	session_set_cookie_params(0, "/~sas238/download/", "web.njit.edu");
	session_start();
	$_SESSION = array(); 
	session_destroy(); 
	setcookie("PHPSESSID", "", time()-60, "/~sas238/", "", 0, 0);
	echo "Your session is terminated";
}

//get data from forms
function getdata($name){
	global $db;
	if (isset ($_GET [$name])){
		$temp = $_GET[$name];
		$temp = trim($temp);
		$temp = mysqli_real_escape_string($db, $temp);
		return $temp;
	}
}

//redirect to different page
function redirect($message, $url, $delay){
	echo "<br> $message <br><br>";
	header ("refresh:$delay url = $url");
	exit(); 
}
?>

<?php 
session_set_cookie_params(0, "/~sas238/", "web.njit.edu");
?>
<?php 
include ('functions.php');

echo 'LOGOUT<br>';
logout();
?>
<?php
//get access to account info
include('account.php');

//connect to mysql database
$db = mysqli_connect($hostname,$username, $password ,$project);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>

<?php
require('connect.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>User Profile</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
    <div class="form">
        <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
        <p>This is secure area.</p>
        <a href="logout.php">Logout</a>
    </div>
    </body>
</html>
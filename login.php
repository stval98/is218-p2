<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
include('connect.php');
include('functions.php');
session_start();
//check if username & password is in database
if (isset($_POST['username'])){
    $username = $_REQUEST['username'];
    $username = mysqli_real_escape_string($db,$username);
    $password = $_REQUEST['password'];
    $password = mysqli_real_escape_string($db,$password);
    $query = "SELECT * FROM accounts000 WHERE email='$username' and password='$password'";
    $result = mysqli_query($db,$query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['college'] = $row['college'];
            $_SESSION['major'] = $row['major'];
        }

        redirect('Loading user profile...', 'profile.php', 3);
    }else{
        echo "<div class='form'>
        <h3>Please enter valid username and password.</h3>
        <br/>Click here to <a href='login.php'>Login</a></div>";
    }
}else{
    ?>
    <!-- LOGIN FORM -->
    <div class="form">
        <h1>Login</h1>
        <form action="" method="post" name="login">
            <input id="username" type="email" name="username" placeholder="Enter username" required/><br>
            <input id="password" type="password" name="password" placeholder="Enter password" required/><br>
            <input name="submit" type="submit" value="Login" />
        </form>
        <p>Don't have an account? <a href='signup.php'>Signup Here</a></p>
    </div>
<?php } ?>
</body>
</html>
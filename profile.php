<?php
require('connect.php');
include("auth.php");
include('functions.php');
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
    <h1>Welcome <?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>!</h1>
    <h2>To-do List:</h2>
        <?php
        //display all tasks for this user
            $username = $_SESSION['username'];
            $query = "SELECT todos000.message, todos000.id, todos000.duedate FROM todos000 JOIN accounts000 ON todos000.owneremail = accounts000.email WHERE email= '$username' && isdone = 0 ORDER BY todos000.createddate ASC";
            $result = mysqli_query($db,$query) or die(mysqli_error());
            $rows = mysqli_num_rows($result);
            if($rows > 0){
                echo "<ul>";
                    while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            taskid($rows);
                            echo "<div class='list'><li>";
                            echo $rows["message"];
                            echo "<form id='markdone' action='status.php' method='post'><input type=\"hidden\" name=\"taskid\" value='$taskid' /><input id='done' type='submit' name='done' value='Complete' /></form>";
                            echo "<form id='edit' action='edittask.php' method='post'><input type=\"hidden\" name=\"taskid\" value='$taskid' /><input id='edittask' type='submit' name='edittask' value='Edit Task' /></form>";
                            echo "<form id='delete' action='deletetask.php' method='post'><input type=\"hidden\" name=\"taskid\" value='$taskid' /><input id='deletetask' type='submit' name='deletetask' value='Delete Task' style='float: end;' /></form>";
                            echo "</li></div>";
                    }
                echo "</ul>";
            }
            else{
                echo "<p>You have no incomplete tasks.</p>";
            }
        ?>

    <h2 style="padding-top: 20px;">Completed To-do List:</h2>
        <?php
        $query = "SELECT todos000.message, todos000.id, todos000.duedate FROM todos000 JOIN accounts000 ON todos000.owneremail = accounts000.email WHERE email= '$username' && isdone = 1 ORDER BY todos000.createddate ASC";
        $result = mysqli_query($db,$query) or die(mysqli_error());
        $rows = mysqli_num_rows($result);
        if($rows > 0){
            echo "<ul>";
            while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                taskid($rows);
                echo "<div class='list'><li>";
                echo $rows["message"];
                echo "<form id='markdone' action='status.php' method='post'><input type=\"hidden\" name=\"taskid\" value='$taskid' /><input id='done' type='submit' name='done' value='Incomplete' /></form>";
                echo "<form id='edit' action='edittask.php' method='post'><input type=\"hidden\" name=\"taskid\" value='$taskid' /><input id='edittask' type='submit' name='edittask' value='Edit Task' /></form>";
                echo "<form id='delete' action='deletetask.php' method='post'><input type=\"hidden\" name=\"taskid\" value='$taskid' /><input id='deletetask' type='submit' name='deletetask' value='Delete Task' style='float: end;' /></form>";
                echo "</li>";
            }
            echo "</ul></div>";
        }
        else{
            echo "<p>You have no completed tasks.</p>";
        }
        ?>

    <form action="addtask.php" style="padding-top: 20px">
        <input name="newtask" type="submit" value="New Task" />
    </form>

    <p><br><a href="logout.php">Logout</a></p>
</div>
</body>
</html>
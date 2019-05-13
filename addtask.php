<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Task</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <?php
        include('connect.php');
        include('functions.php');
        include("auth.php");

        //insert input values into table
        if(isset($_REQUEST['title'])){
            $username = $_SESSION['username'];
            $id = $_SESSION['id'];
            $timestamp = date('Y-m-d G:i:s');

            $title = $_REQUEST['title'];
            $title = mysqli_real_escape_string($db, $title);
            $_SESSION['title'] = $title;
            $_SESSION['default-title'] = $title;

            $description = $_REQUEST['description'];
            $description = mysqli_real_escape_string($db, $description);
            $_SESSION['description'] = $description;
            $_SESSION['default-desc'] = $description;

            $duedate = $_REQUEST['duedate'];
            $duedate = date("Y-m-d H:i:s",strtotime($duedate));
            $duedate = mysqli_real_escape_string($db, $duedate);
            $_SESSION['duedate'] = $duedate;
            $_SESSION['default-date'] =  $duedate;

            $query = "INSERT into todos000 (id, owneremail, ownerid, createddate, duedate, message, isdone) VALUES ('NULL', '$username', '$id', '$timestamp', '$duedate', '$title', 0)";
            $result = mysqli_query($db,$query);

            if($result){
                redirect('Adding new task to to-do list...', 'profile.php', 3);
                echo "</body></html>";
            }
        }else{
    ?>
    <a href='profile.php'>View lists</a>
    <!-- NEW TASK FORM -->
    <div class="form">
        <h1>New Task</h1>
        <form name="newtask" action="" method="post">
            <input id="title" type="text" name="title" placeholder="Enter title" required />
            <div class="ta" style="padding: 10px 25px 8px;">
                <textarea id="description" name="description" placeholder="Enter description" rows="10" cols="30" maxlength="144" required ></textarea>
            </div>
            <input id="duedate" name="duedate" type="datetime-local" placeholder="Enter due date" required /><br>
            <input type="submit" name="submit" value="Add Task" />
        </form>
    </div>
<?php } ?>
</body>
</html>

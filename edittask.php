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

//set default form values to task item info
$_POST['default-date'] = $_SESSION['default-date'];
$_POST['default-desc'] = $_SESSION['default-desc'];
$_POST['default-title'] = $_SESSION['default-title'];

//update task in table
if(isset($_REQUEST['title'])){
    $taskid = $_SESSION['taskid'];

    $title = $_REQUEST['title'];
    $title = mysqli_real_escape_string($db, $title);
    $_SESSION['title'] = $title;

    $description = $_REQUEST['description'];
    $description = mysqli_real_escape_string($db, $description);
    $_SESSION['description'] = $description;

    $duedate = $_REQUEST['duedate'];
    $duedate = date("Y-m-d H:i:s",strtotime($duedate));
    $duedate = mysqli_real_escape_string($db, $duedate);
    $_SESSION['duedate'] = $duedate;

    $query = "UPDATE todos000 SET message = '$title', duedate = '$duedate' WHERE id = '$taskid'";
    $result = mysqli_query($db,$query);
    if($result){
        redirect('Updating to-do list...', 'profile.php', 3);
        echo "</body></html>";
    }
}else{
    ?>
    <a href='profile.php'>View lists</a>
    <!-- NEW TASK FORM -->
    <div class="form">
        <h1>Edit Task</h1>
        <form name="newtask" action="" method="post">
            <input id="title" type="text" name="title" placeholder="Enter title" value="<?php echo $_POST['default-title'] ?>" required />
            <div class="ta" style="padding: 10px 25px 8px;">
                <textarea id="description" name="description" placeholder="Enter description" rows="10" cols="30" maxlength="144" required ><?php echo $_POST['default-desc'] ?></textarea>
            </div>
            <input id="duedate" name="duedate" type="datetime-local" value="<?php echo $_POST['default-date'] ?>" required /><br>
            <input type="submit" name="submit" value="Edit Task" />
        </form>
    </div>
<?php } ?>
</body>
</html>



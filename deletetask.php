<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Delete Task</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <?php
        include('connect.php');
        include('functions.php');
        include("auth.php");

        //delete task from table
        if(isset($_REQUEST['answer'])){
            if($_REQUEST['answer'] == 'yes'){
                $taskid = $_SESSION['taskid'];
                $query = "DELETE FROM todos000 WHERE id='$taskid'";
                $result = mysqli_query($db,$query);

                if($result){
                    redirect('Deleting task...', 'profile.php', 3);
                    echo "</body></html>";
                }
            }
            else{
                    echo "<a href='profile.php'>View lists</a><br>";
                    echo "<b>Are you sure you want to delete this task?</b><br>";
                        echo "<form action=\"\" method=\"post\">";
                            echo "<input id=\"yes\" name=\"answer\" type=\"radio\" value=\"yes\" />";
                            echo "<label for=\"yes\">Yes</label><br>";
                            echo "<input id=\"no\" name=\"answer\" type=\"radio\" value=\"no\" />";
                            echo "<label for=\"no\">No</label><br>";
                            echo "<input type=\"submit\" value=\"Delete Task\" />";
                        echo "</form>";
                    echo "</body>";
                echo "</html>";
            }
        }else{
        ?>
            <a href='profile.php'>View lists</a><br>
    <b>Are you sure you want to delete this task?</b><br>
    <form action="" method="post">
        <input id="yes" name="answer" type="radio" value="yes" />
        <label for="yes">Yes</label><br>
        <input id="no" name="answer" type="radio" value="no" />
        <label for="no">No</label><br>
        <input type="submit" value="Delete Task" />
    </form>
        <?php } ?>
</body>
</html>

<?php
require('connect.php');
include("auth.php");
include('functions.php');

//get task completion status
if(isset($_SESSION['username'])) {
    $taskid = $_POST['taskid'];
    $query = "SELECT todos000.isdone FROM todos000 WHERE id = '$taskid'";
    $result = mysqli_query($db,$query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
    if($rows > 0){
        while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $status = $rows['isdone'];
            //update task in table if not done -> move to completed list
            if ($status == 0){
                $query = "UPDATE todos000 SET isdone = 1 WHERE id = '$taskid'";
                $result = mysqli_query($db, $query);
                if ($result) {
                    redirect('', 'profile.php', 0);
                    echo "</body></html>";
                }
                else{
                    echo 'Something went wrong!';
                }
            }
            //update task in table if done -> move to to-do list
            if($status == 1){
                $query = "UPDATE todos000 SET isdone = 0 WHERE id = '$taskid'";
                $result = mysqli_query($db, $query);
                if ($result) {
                    redirect('', 'profile.php', 0);
                    echo "</body></html>";
                }
                else{
                    echo 'Something went wrong!';
                }
            }
        }
    }
}
?>
<?php
//redirect to different page
function redirect($message, $url, $delay){
	echo "<br> $message <br><br>";
	header ("refresh:$delay url = $url");
	exit();
}

//get task id
function taskid($rows){
    global $taskid;
    $taskid = $rows["id"];
    $_SESSION['taskid'] = $taskid;
    return $taskid;
}
?>
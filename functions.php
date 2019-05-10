<?php
//redirect to different page
function redirect($message, $url, $delay){
	echo "<br> $message <br><br>";
	header ("refresh:$delay url = $url");
	exit();
}
?>
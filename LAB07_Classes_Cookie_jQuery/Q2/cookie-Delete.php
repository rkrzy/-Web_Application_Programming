<?php
	$cookie_name = "LastAccess";
	
	// your code goes here
	setcookie($cookie_name, "", time() - 3600);
	echo "Cookie delete for \$_COOKIE[" . $cookie_name . "] is done";
?>
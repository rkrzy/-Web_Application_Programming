<!-- 
Complete the code below!
<?php
$currentTime = date('Y/m/d h:i:s a', time());
$lastAccessTime = isset($_COOKIE['LastAccess']) ? $_COOKIE['LastAccess'] : "unknown";
setcookie('LastAccess', $currentTime, time() + 3600);
?>
Some useful info:
  * Printing out the current time: echo date('Y/m/d h:i:s a', time())
  *  The setcookie() function must appear BEFORE the <html> tag
-->
<html>
<body>
<hr><h3>Checking the last access time using cookie</h3><hr>
<p>Current time: <?php echo $currentTime; ?></p>
<p>Last access time: <?php echo $lastAccessTime; ?></p>
</body>
</html>
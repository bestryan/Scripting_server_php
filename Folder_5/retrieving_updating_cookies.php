<!DOCTYPE html>

<?php
	$visits= 1; 
	if(isset($_COOKIE["visits"])) { 
	    $visits= (int)$_COOKIE["visits"]; 
	} 
	setcookie("visits", $visits+ 1, time() + (60 * 60 * 24 * 30)); 
	echo "You have visited this page $visits time(s).";

    // $expiry= time() - 60; 
	// setcookie("FirstCookie", $firstcookie, $expiry, "/");


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Cookie</title>
</head>
<body>
    
</body>
</html>
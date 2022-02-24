<!DOCTYPE html>

<?php
$firstcookie= "my first cookie"; 
$expiry= time() + (60 * 60 * 8); 


// $expiry= time() - (60 * 60 * 8); 
setcookie("FirstCookie", $firstcookie, $expiry, "/");
echo "your first cookie is set and the value is '$firstcookie'";

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Cookie</title>
</head>
<body>
    
</body>
</html>
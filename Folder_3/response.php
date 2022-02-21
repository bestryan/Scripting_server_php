<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Response</title>
</head>
<body>
<?php
//Create variables for our posted values 
$title = $_POST['title']; 
$name = $_POST['name']; 
$service = $_POST['service']; 
$comments = $_POST['comments']; 
// Print the received data: 
echo"<p>Thank you, $title $name, for your response.</p>
<p>You said that the service was '$service' and commented that:<br>$comments</p>"; 
?>
</body>
</html>

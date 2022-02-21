<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Display</title>
</head>
<body>

<?php
//Create variables for our posted values 
$name = $_POST['name']; 
$colour = $_POST['colour']; 
$comments = $_POST['comments']; 
$extras = $_POST['extras']; 

// Print the received data: 
echo "<p>Thank you, $name, for your comments</p>";
echo "<p>You stated that you purchased a $colour car and added:</p>";
echo "$comments";
echo "<p>You selected ".count($extras)." extras:</p>";

foreach($extras as $extra)
{
echo "$extra<br>";
}
?>

</body>
</html>
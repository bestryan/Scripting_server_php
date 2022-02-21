<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Response</title>
</head>
<body>
<?php
//Create variables for our posted values 
$class = $_POST['class']; 
$number = $_POST['number']; 
$service = $_POST['service']; 
$comments = $_POST['comments']; 
// Print the received data: 
echo"<h1>Class: $class<h1>";
echo"<h2> Student number: $number<h2>";
echo"<p>You stated that you thought the class was '$service' and commented that:<br>$comments</p>"; 
?>
</body>
</html>

<style>
body{
    color: blue;
    background-color: #ababab;
}
P{
    font-size:15px;
}

</style>
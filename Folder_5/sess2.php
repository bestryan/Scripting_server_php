<?php	
// initiate session	
session_start();	
// check that form has been submitted and	that name is not empty
if(isset($_POST['submit']) && !empty($_POST['name'])) {					
// set session variable, give it a name
    $_SESSION['name'] = $_POST['name'];
}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Session test2</title>
</head>
<body>

<?php
// check session variable is set
if(isset($_SESSION['name']))    {
    // if set, greet the user by name
    echo'Hi,'.$_SESSION['name'].'.<a href="sess3.php">Next</a>';
}else {
// if not set, send back to login
    echo'Who are you?<a href="sess1.php">Login</a>';
}

?>
</body>
</html>

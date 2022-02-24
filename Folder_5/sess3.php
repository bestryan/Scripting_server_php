<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Session test 3</title>
</head>
<body>
<?php
// check whether session variable is set
if (isset($_SESSION['name'])) {
  // if set, greet by name using concatenation
echo 'Hi, ' . $_SESSION['name'] . '. See, I remembered your name!<br>';
  // unset session variable
unset($_SESSION['name']);
  // invalidate the session cookie
if (isset($_COOKIE[session_name()])) {
setcookie(session_name(), '', time()-86400, '/');
  }
  // end session
session_destroy();
echo '<a href="sess2.php">Page 2</a>';
} else {
  // display if not recognized
echo "Sorry, I don't know you.<br>";
echo '<a href="sess1.php">Login</a>';
}

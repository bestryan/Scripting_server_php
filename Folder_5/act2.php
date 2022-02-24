<?php 
session_start();
if (empty($_SESSION['pageurls'])) {
    $_SESSION['pageurls'] = array_fill(0,5,'') ;

}
function trackPage($url) {
    array_unshift($_SESSION['pageurls'], $url);
    array_pop($_SESSION['pageurls']);
}
trackPage($_SERVER['REQUEST_URI']);
foreach($_SESSION['pageurls'] as $page) {
    $cut = explode('/', $page);
    echo end($cut)."<br>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>act2</title>
</head>
<body>
<p>
    <a href="act1.php"> Go to page 1</a><br>
    <a href="act3.php"> Go to page 3</a>
</p>
</body>
</html>
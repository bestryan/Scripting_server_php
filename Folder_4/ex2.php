<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercise_1</title>
</head>
<body>
<?php

$okay = TRUE;
$post = $_POST['comments'];

// Validate the first name:
if(empty($_POST["first_name"])){
    echo "<p class='error'>Your first name is required</p>";
    $okay = FALSE;
}
// Validate the last name:
if(empty($_POST["last_name"])){
    echo "<p class='error'>Your last name is required</p>";
    $okay = FALSE;
}
// Validate the posting:
if(empty($post)){
    echo "<p class='error'>Your posting is required</p>";
    $okay = FALSE;
}

if($okay){
    echo 
    "<h1>Posting</h1>
    <p>Thank you for your feeback</p>
    <p>You posted the foloowing comment:</p>
    <p>$post</p>";
}
?>
<p>
<a href="<?php echo $_SERVER['HTTP_REFERER']?>">Back</a>
</p>

</body>
</html>

<style>
.error{
    color: red;
}
</style>
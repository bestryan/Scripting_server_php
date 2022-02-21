<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise_8</title>
</head>
<body>

<form method="GET">
Enter a string:
<input type="text" name="string">
<br>
<input type="submit" value="Submit">
</form>
<br>
<br>
<p>The result:</P>

<?php 

$str = str_split($_GET["string"]);

echo "<table border='1' style='border-collapse: collapse'>";

echo "<tr>";
foreach( $str as $key => $value){
    echo "<td>$key</td>";
}
echo "</tr>";

echo "<tr>";
foreach( $str as $key => $value){
    echo "<td>$value</td>";        
}
echo "</tr>";
echo "</table><br>";

?>

<a href="excr_8.php">Reset</a>

</body>
</html>

<style>
    table{
        font-size: 30px;
    }
</style>
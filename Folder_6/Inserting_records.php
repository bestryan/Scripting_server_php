<?php

require_once("conn.php");

$res = mysqli_query($con,"INSERT INTO products VALUES (null, 'Stein', '800 ml Beer Mug', '40', '8.99')");
$res = mysqli_query($con,"SELECT * FROM products");

while ($arrProdRecords = mysqli_fetch_array($res)) 
    { 
    echo "<p>" . $arrProdRecords["Id"] . " ";
    echo $arrProdRecords["Name"] . " ";
    echo $arrProdRecords["Description"] . " ";
    echo $arrProdRecords["Quantity"] . " ";
    }   

    echo $arrProdRecords["Cost"] . "</p>";

    mysqli_free_result($res);
    mysqli_close($con);


?>
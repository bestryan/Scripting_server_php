<?php

require_once("conn.php");

$dbCustRecords = mysqli_query($con,"UPDATE products SET Description='400 ml Tall Glass' WHERE Id='6'")
or die("Problem updating table: " . mysqli_error($con));

$dbProdRecords = mysqli_query($con,"SELECT * FROM products") 
or die("Problem reading table: " . mysqli_error($con));

while ($arrProdRecords = mysqli_fetch_array($dbProdRecords)) 
    { 
    echo "<p>" . $arrProdRecords["Id"] . " ";
    echo $arrProdRecords["Name"] . " ";
    echo $arrProdRecords["Description"] . " ";
    echo $arrProdRecords["Quantity"] . " ";
    echo $arrProdRecords["Cost"] . "</p>";
    }
mysqli_free_result($dbProdRecords);
mysqli_close($con);

?>



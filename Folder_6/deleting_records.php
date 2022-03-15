<?php

require_once("conn.php");
$dbCustRecords = mysqli_query($con,"DELETE FROM products WHERE Id='10' ");

$dbCustRecords = mysqli_query($con,"SELECT * FROM customers") or die("Problem reading table: " . mysqli_error($con));


while ($arrCustRecords = mysqli_fetch_array($dbCustRecords))
    { 
    echo "<p>" . $arrCustRecords["Id"] . " ";
    echo $arrCustRecords["Title"] . " ";
    echo $arrCustRecords["Surname"] . " ";
    echo $arrCustRecords["Firstname"] . "</p>";
    }


?>
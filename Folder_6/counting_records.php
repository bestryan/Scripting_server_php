<?php

// require_once("conn.php");

// $dbProdRecords = mysqli_query($con,"SELECT * FROM products WHERE Name='Shot Glass' ")
// or die("Problem reading table: " . mysqli_error($con)); 

// $intProductCount = mysqli_num_rows($dbProdRecords);

// echo "<p>We currently have $intProductCount products</p>";
// mysqli_close($con);


require_once("conn.php");

$dbProdRecords = mysqli_query($con,"SELECT * FROM products WHERE Name='Shot Glass' ")
or die("Problem reading table: " . mysqli_error($con)); 

// $intProductCount = mysqli_num_rows($dbProdRecords);

$arrProdRecords = mysqli_fetch_array($dbProdRecords);

    if ($arrProdRecords['Quantity'] > 0)
    echo "<p>Yes we have a Shot Glass</p>";
    else
    echo "<p>No, we have no Shot Glasses</p>";


// while ($arrProdRecords = mysqli_fetch_array($dbProdRecords))
// {
//     if ($arrProdRecords["Quantity"] > 0)
//     echo "<p>Yes we have a Shot Glass</p>";
//     else
//     echo "<p>No, we have no Shot Glasses</p>";
// }




// echo "<p>$dbProdRecords</p>";

// if ($intProductCount > 0)
//     echo "<p>Yes we have a Shot Glass</p>";
// else
//     echo "<p>No, we have no Shot Glasses</p>";


mysqli_close($con);





?> 
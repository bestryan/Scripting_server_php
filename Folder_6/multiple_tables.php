<?php

require_once("conn.php");
$strSurname = "jones";
$dbCustRecords = mysqli_query($con,"SELECT * FROM customers WHERE Surname = '$strSurname'")
or die("Problem reading table: " . mysqli_error($con));
//all customers with surname ‘Smith’ stored in $dbCustRecords

while ($arrCustRecords = mysqli_fetch_array($dbCustRecords)) 
    { 
    $intId = $arrCustRecords["Id"];
    echo "<p>Customer: ";
    echo $arrCustRecords["Title"] . " ";
    echo $arrCustRecords["Surname"] . " ";
    echo $arrCustRecords["Firstname"] . "</p>";
//fetches each of these customer records and displays the customer details
//customer Id is stored in variable $intId for later use.

    $dbPurRecords = mysqli_query($con,"SELECT * FROM purchases WHERE customers_Id = '$intId'")
    or die("Problem reading table: " . mysqli_error($con));

    //within the while loop, another query selects all purchases which match the customer Id
    while ($arrPurRecords = mysqli_fetch_array($dbPurRecords)) 
        { 
        $intPurId = $arrPurRecords["Id"];
        echo "<p>Purchased On: ";
        echo $arrPurRecords["Day"] . "/";
        echo $arrPurRecords["Month"] . "/";
        echo $arrPurRecords["Year"] . "</p>";
        //the above loop fetches these purchases and displays when they were purchased. 
        //Purchase Id is stored in variable $intPurId

            $dbProRecords = mysqli_query($con,"SELECT * FROM purchaseproducts WHERE purchases_Id = '$intPurId'")
            or die("Problem reading table: " . mysqli_error($con));

            //inside this while loop, another query selects all purchaseProducts which match the purchase Id.
            while ($arrProRecords = mysqli_fetch_array($dbProRecords)) 
                {
                $intProductId = $arrProRecords["products_Id"]; 
                echo "<p>" . $arrProRecords["Quantity"] . " ";
                //above loop fetches these purchase products and displays them. Also stores products_Id field in variable $intProductId
                $dbProductRecords = mysqli_query($con,"SELECT * FROM products WHERE Id = '$intProductId'")
                or die("Problem reading table: " . mysqli_error($con));
                //Another query obtains all products which match the key stored in variable
                $arrProductRecord = mysqli_fetch_array($dbProductRecords);
                echo $arrProductRecord["Name"] . " " . $arrProductRecord["Description"] . " at &#36;";
                echo $arrProRecords["Cost"] . " each.</p>";
            } 
         }
    }


?>
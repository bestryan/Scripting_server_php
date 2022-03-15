<?php

$conn = mysqli_connect('localhost',"root","","db1");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {

    $dbRecords = mysqli_query($conn,"SELECT * FROM Username") or die("Problem reading table: " . mysqli_error($conn));

    while ($arr = mysqli_fetch_array($dbRecords)) { 
        $id = $arr["id"];
        $first = $arr["firstname"];
        $last = $arr["lastname"];
        $email = $arr["email"];

        echo "ID is: ".$id." and name is: " .$first." ".
        $last."<br>"."Your email address is: ".$email."<br><br>";
    }

    mysqli_free_result($dbRecords);
    mysqli_close($conn);

}
?>
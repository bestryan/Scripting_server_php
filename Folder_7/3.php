<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];


// create connection & check connection
$conn = mysqli_connect('localhost',"root","","db1");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {
    $clean_first = mysqli_real_escape_string($conn, $fname);
    $clean_last = mysqli_real_escape_string($conn, $lname);
    $clean_email = mysqli_real_escape_string($conn, $email);

    $sql = "INSERT INTO Username (firstname, lastname, email)
            VALUES ('$clean_first', '$clean_last', '$clean_email')";

    if (mysqli_query($conn, $sql)) {
        echo "A record has been inserted. Thank you $clean_first $clean_last";
    } else {
        echo "Could not insert record:" . mysqli_error($conn);
    }

    $mysqli_close($conn);
}

?>
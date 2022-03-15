<?php

// $dbname = "db1";

// // create connection & check connection
// $conn = mysqli_connect('localhost',"root","",$dbname);

// if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
// } 


//     $sql = "CREATE TABLE Username (
//     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
//     firstname VARCHAR(15) NOT NULL,
//     lastname VARCHAR(15) NOT NULL,
//     email VARCHAR(30) NOT NULL
//     ) ";

//     try {
//         $conn->query($sql) === FALSE;
//     }catch (mysqli_sql_exception $e) {
//     echo "Error Message <br>".$e->getMessage();
// }

//     if (mysqli_query($conn, $sql)) {
//         echo "Table Username created successfully";
//     } else {
//         echo "Error creating table: ".mysqli_error($conn);
//     }



// MySQLi Object-oriented
$conn = mysqli_connect('localhost',"root","","db1");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $sql = "CREATE TABLE Username (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    firstname VARCHAR(15) NOT NULL,
    lastname VARCHAR(15) NOT NULL,
    email VARCHAR(30) NOT NULL
    ) ";

    try {
        if ($conn->query($sql) === TRUE) {
            echo "Table Username created successfully";
        }
    }catch (mysqli_sql_exception $e) {
            echo "Error Message: ".$e->getMessage();
    }

    $conn->close();
?>
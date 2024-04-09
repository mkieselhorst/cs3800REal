<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername     = "localhost";
$username       = "root";
$password       = "";
$dbname         = "csdept";
// create connection
$conn           = mysqli_connect($servername, $username, $password);

// Check connections
if(!$conn){
    die("could not connect to db" . mysqli_connect_error());
}else{
    echo("connection established");
}


// create db
$sql            = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}


// select the database
mysqli_select_db($conn, $dbname);

// create the table
$sql            = "CREATE TABLE IF NOT EXISTS tblStudents
                ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstName   VARCHAR(30) NOT NULL,
                lastName    VARCHAR(30) NOT NULL,
                email       VARCHAR(50),
                city        VARCHAR(50),
                state       VARCHAR(50),
                zipCode     VARCHAR(30),
                imagePath   VARCHAR(100),
                reg_date    TIMESTAMP
                )";
if(!mysqli_query($conn, $sql)){
    echo("Error CREATING TABLE: " . mysqli_error($conn));
}

?>
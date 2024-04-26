<?php
$servername     ="localhost";
$username       = "root";
$password       = "";
$dbname         = "Maxwell_Kieselhorst_finalProject";
//connectiion variable
$conn           = mysqli_connect($servername, $username, $password);

//checking
if(!$conn){
    die("could not connect to db" . mysqli_connect_error());
}else{
    // echo("connection established");
}

//creation
$sql            = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql)) {
    // echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

//selection
mysqli_select_db($conn, $dbname);

//creation-table
$sql            = "CREATE TABLE IF NOT EXISTS tblBlog
                ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                userName   VARCHAR(12) NOT NULL ,
                password    VARCHAR(30) NOT NULL,
                message       VARCHAR(10000) NOT NULL,
                imagePath   VARCHAR(100),
                reg_date    TIMESTAMP,
                UNIQUE(userName)
                )";
if(!mysqli_query($conn, $sql)){
    echo("Error CREATING TABLE: " . mysqli_error($conn));
}


?>
<?
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "csDept";
// create connection
$conn       = mysqli_connect($servername, $username, $password);

// Check connections
if(!$conn){
    die("could not connect to db" . mysqli_connect_error());
}


// create db
$sql        = "CREATE DATABASE IF NOT EXISTS $dbname ";
$name = "max";
echo $name;
// run the creation of db
if(!mysqli_query($conn, $sql)){
    echo("Error processing the query to creat the database: " . mysqli_error($conn));
}

// select the database
mysqli_select_db($conn, $dbname);

// create the table
$sql        = "CREATE TABLE IF NOT EXISTS tblStudents 
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
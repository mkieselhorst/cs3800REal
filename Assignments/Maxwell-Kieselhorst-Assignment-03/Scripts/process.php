<?php
    // include connection.php
    require 'connection.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // retrieve and sanitize input
        $firstName = mysqli_real_escape_string($connect, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($connect, $_POST['lastName']);
        $occupation = mysqli_real_escape_string($connect, $_POST['occupation']);

        
        // define table and columns
        $sql = "CREATE TABLE IF NOT EXISTS TBLUSERS(
            userId INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            firstName VARCHAR(50) NOT NULL, 
            lastName VARCHAR(50) NOT NULL, 
            occupation VARCHAR(25) NOT NULL, 
            REG_DATE TIMESTAMP)";

        // SQL QUERY INSTER DATA INTIO TABLE
        $sql = "INSERT INTO TBLSTUDENT(studentFirstName, studentLastName, studentMajor) VALUES('$firstName', '$lastName', '$occupation')";


        if(mysqli_query($connect, $sql)){
            echo("New record has been created, and connection established ");
            exit();
        }else{
            echo("Error creating new record or connection not established" . $sql . mysqli_error($connect));
            exit();
        }
    };
?>
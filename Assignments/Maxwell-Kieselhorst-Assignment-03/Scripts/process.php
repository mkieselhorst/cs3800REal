<?php
    // include connection.php
    require 'connection.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        // retrieve and sanitize input
        $firstName  = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName   = mysqli_real_escape_string($conn, $_POST['lastName']);
        $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
        $basketBall = isset($_POST['basketball']);
        $baseBall = isset($_POST['baseball']);
        $soccer = isset($_POST['soccer']);
        $other = isset($_POST['other']);
        // $activities = isset($_POST['activities']) ? $_POST['activities'] : [];
        // $checkBox = implode(',', $_POST['activities']);
        

        
        // define table and columns
        $tblUsers = "CREATE TABLE IF NOT EXISTS TBLUSERS(
            userId INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            firstName VARCHAR(50) NOT NULL, 
            lastName VARCHAR(50) NOT NULL, 
            occupation VARCHAR(25) NOT NULL,
            basketball VARCHAR(255),
            baseball VARCHAR(255),
            soccer VARCHAR(255),
            other VARCHAR(255),
            REG_DATE TIMESTAMP)";

        // SQL QUERY INSTER DATA INTIO TABLE
        $sql = "INSERT INTO TBLUSERS(firstName, lastName, occupation, basketball, baseball, soccer, other) VALUES('$firstName', '$lastName', '$occupation', '$basketBall', '$baseBall', '$soccer', '$other')";


        if(mysqli_query($conn, $tblUsers)){
            echo("TBLUSERS created or already eists <br />");
        }else{
            echo("Error, could not create or find table");
        };

        if(mysqli_query($conn, $sql)){
            echo("New record has been created, and connection established<br /> ");
            echo "first Name: " . $firstName ."<br />last Name: " . $lastName . "<br />occupation: " . $occupation . "<br />Basketball: " . $basketBall . "<br />Baseball: " . $baseBall . "<br />Soccer: " . $soccer . "<br />Other: " . $other ;
            exit();
        }else{
            echo("Error creating new record or connection not established" . $sql . mysqli_error($conn));
            exit();
        }
    };
    
?>

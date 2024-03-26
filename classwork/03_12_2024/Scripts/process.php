<?php
    // include connection.php
    require 'connection.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // retrieve and sanitize input
        $studentFirstName = mysqli_real_escape_string($connect, $_POST['studentFirstName']);
        $studentLastName = mysqli_real_escape_string($connect, $_POST['studentLastName']);
        $studentMajor = mysqli_real_escape_string($connect, $_POST['studentMajor']);


        // SQL QUERY INSTER DATA INTIO TABLE
        $sql = "INSERT INTO TBLSTUDENT(studentFirstName, studentLastName, studentMajor) VALUES('$studentFirstName', '$studentLastName', '$studentMajor')";
        // execute the query
        if(mysqli_query($connect, $sql)){
            echo("New record has been created, and connection established ");
            exit();
        }else{
            echo("Error creating new record or connection not established" . $sql . mysqli_error($connect));
            exit();
        }
    };

?>
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $database='maxwellk';
    // create connection with mysqli_connect method
    $connect = mysqli_connect($servername, $username, $password, $database);

    if(!$connect){
        echo("connection failed" . mysqli_connect_error());
    }
    else{
        echo("connected successfully" . $database);
    }
// sql create table
    $sql = "CREATE TABLE IF NOT EXISTs TBLSTUDENT(
        studentId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        studentFirstName VARCHAR(50) NOT NULL, 
        studentLastName VARCHAR(50) NOT NULL, 
        studentMajor VARCHAR(25) NOT NULL, 
        REG_DATE TIMESTAMP)";
    // CREATE WITH BUILT IN  FUNCTION
    // $connect and $sql
    if(mysqli_query($connect, $sql)){
        echo("tblStudent created or already eists");
    }else{
        echo("Error, could not create or find table");
    };

?>

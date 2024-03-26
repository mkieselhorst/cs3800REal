<?php
// define server and other credentials
    $servername = "localhost";
    $username= "root";
    $password = "";
    $dbname = "lastName_01";

    // pass connection variables
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("Connection Failed:  " . mysqli_connect_error());
    }else{
        echo("You are Connected successfully <br />");
    };
    


?>
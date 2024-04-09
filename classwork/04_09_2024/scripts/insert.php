<?php
// include connection.php in useage
include "../scripts/connection.php";

$target_dir     = "uploads/";
$target_file    = $target_dir . basename($_FILES['image']["name"]);
$uploadOk       = 1;
$imageFIleType  = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


// attempt to upload
if(move_uploaded_file($_FILES['image']["tmp_name"], $target_file)){
    echo("The file " . htmlspecialchars(basename($_FILES['image']["name"])) . "has been uploaded");

    $firstName  = $_POST['firstName'];
    $lastName   = $_POST['lastName'];
    $email      = $_POST['email'];
    $city       = $_POST['city'];
    $state      = $_POST['state'];
    $zipCode    = $_POST['zipCode'];
    $imagePath  = $target_file;

    $sql        = "INSERT INTO tblStudents(firstName, lastName, email, city, state, zipCode, imagePath)
                            VALUES('$firstName, $lastName, $email, $city, $state, $zipCode, $imagePath')";


    if(!mysqli_query($conn, $sql)){
        echo("Error inserting values into TABLE: " . mysqli_error($conn));
    }else{
        echo("New record created");
    }
}
?>
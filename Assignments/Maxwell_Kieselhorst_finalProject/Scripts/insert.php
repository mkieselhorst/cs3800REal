<?php
include "connection.php";

//PATH of file destination
$target_dir     = "../uploads/";
$target_file    = $target_dir . basename($_FILES['image']["name"]);
$uploadOk       = 1;
$imageFIleType  = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//uploading
// check if real or fake image
if(isset($_POST['submit'])){
// get size
    $checkSize = getimagesize($_FILES["image"]['tmp_name']);
    if($checkSize !== false){
//if image ok then checksum
        echo("File is an image - " . $checkSize["mime"] . ".");
        $uploadOk = 1;
    }else{
//if image not ok
        echo("File is not an image");
        $uploadOk = 0;
    }
    
}
//if not ok, do not upload
if($uploadOk == 0){
    echo("Sorry, your file was not uploaded");
}else{
//else upload
    move_uploaded_file($_FILES['image']["tmp_name"], $target_file);
};
//store all items in vars
    $userName  = $_POST['userName'];
    $password   = $_POST['password'];
    $message      = $_POST['message'];
    $imagePath  = $target_file;
//inserting int the table
    $sql        = "INSERT INTO tblBlog(userName, password, message, imagePath)
                            VALUES('$userName', '$password', '$message', '$imagePath')";

//if not connected, send error
    if(!mysqli_query($conn, $sql)){
        echo("Error inserting values into TABLE: " . mysqli_error($conn));
    }else{
        // echo("New record created");
    }
//closeconnection

mysqli_close($conn);
//send user to postPage
header('Location: postPage.php');
?>
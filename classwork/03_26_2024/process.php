<?php

    $target_dir="uploaded/";
    // path
    $target_file = $target_dir . basename($_FILES['fileUploaded']['name']);
    // chekc upload
    $uploadOk= 1;

    // get the file extension
    $imgFIleType=strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // check if real or fake image
    if(isset($_POST['submit'])){
        // get size
        $checkSize = getimagesize($_FILES["fileUploaded"]['tmp_name']);
        if($checkSize !== false){
            echo("File is an image - " . $checkSize["mime"] . ".");
            $uploadOk = 1;
        }else{
            echo("File is not an image");
            $uploadOk = 0;
        }
        // file is an image
    }
    if($uploadOk == 0){
        echo("Sorry, your file was not uploaded");
    }else{
        if(move_uploaded_file($_FILES["fileUploaded"]['tmp_name'], $target_file)){
            echo("The file " . htmlspecialchars(basename($_FILES['fileUploaded']['name'])) . "has been uploaded");

        }else{
            echo("Sorry, your file was not uploaded");
        }
    }
?>
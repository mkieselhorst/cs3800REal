<?
// include connection.php in useage
include "../scripts/connection.php";

$target_dir     = "uploads/";
$target_file    = $target_dir . basename($_FILES['image']["name"]);
$uploadOk       = 1;
$imageFIleType  = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


// attempt to upload
if(move_uploaded_file($_FILES['image']["tmp_name"], $target_file)){
    echo("The file " . htmlspecialchars(basename($_FILES['image']["name"])) . "has been uploaded");
}
?>
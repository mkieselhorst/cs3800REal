<!-- Local Variables, global variables,  -->
<?php

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email=$_POST['email'];

    echo("Full Name: ". $name . "<br />" . 
        "Phone Number: " . $phone . "<br />" . 
        "Email: " . $email . "<br />");
?>
<?php
    session_start();
    // check if session is open
    if(!isset($_SESSION['userResponses'])){
        echo"No submission data found. Please submit the form";
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>THank You Page</h1>
    <p>Hello, <?php echo$userResponses['name'] ?></p>
    <p>Phone: <?php echo$userResponses['tel'] ?></p>
    <p>Email: <?php echo$userResponses['email'] ?></p>

</body>
</html>
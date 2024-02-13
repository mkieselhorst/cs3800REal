<?php
session_start();
// check of items are submitted
if (!isset($_SESSION["Responses"])){
    echo "No data found";
    exit;
}
// get submissions into var
$Responses = $_SESSION["Responses"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
</head>
<body>
    <!-- echo name -->
    <h1>Thank You, <?php echo$Responses['name'] ?></h1>
    <p>Your responses have been recorded:</p>
    <!-- echo all folloiwing information submitted -->
    <p>Email: <?php echo$Responses['email'] ?></p>
    <p>Feedback: <?php echo$Responses['feedback'] ?></p>
    <p>Attendance: <?php echo$Responses['attendance'] ?></p>
    <p>Dietary: <?php if (isset($Responses['diet'])) {
            if (is_array($Responses['diet'])) {
                echo htmlspecialchars(implode(', ', $Responses['diet']));
            } else {
                echo htmlspecialchars($Responses['diet']);
            }
        }?></p>
</html>
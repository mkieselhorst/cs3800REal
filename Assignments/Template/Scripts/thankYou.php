<?PHP
include 'process.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    
</head>
<body>
    <h1>Thank You For Your Submission</h1>
    <?PHP
        if(isset($_SESSION['Student_Info'])) {
            
            $studentInfo = $_SESSION['Student_Info'];
            echo $studentInfo;
        } else{
            echo "notsent";
        }
    ?>

</body>
</html>
<?PHP
include 'process.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thank You For Your Submission</h1>
    <?PHP
        if(isset($_SESSION['book_details'])) {
            
            $bookDetails = $_SESSION['book_details'];
            echo $bookDetails;
        } else{
            echo "notsent";
        }
    ?>

</body>
</html>
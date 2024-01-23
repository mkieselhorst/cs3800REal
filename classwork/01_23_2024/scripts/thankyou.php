<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thank You For Your Submission</h1>
    <p>Name: <?php echo $name; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Phone: <?php echo $phone; ?></p>
    <p>Check Options: </p>
    <ul>
        <?php 
        foreach($checkboxes as $checkbox){
            echo "$checkbox <br />";
        }
            
        ?>
    </ul>
    <p>Selected Radio: <?php echo $radio; ?></p>
    <p>Selected Option: <?php echo $select;?></p>
</body>
</html>
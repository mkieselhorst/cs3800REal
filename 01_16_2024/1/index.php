<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <form action="scripts/process.php" method="post">
        <div>
            <label for="name">full Name:</label>
            <input type="text" name="name" id="name" require >
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone" require >
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" require >
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>

    </form>
</body>
</html>
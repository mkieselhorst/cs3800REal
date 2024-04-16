<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php

        $sql = 'SELECT * FROM tblstudents';

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)){
            echo('<table class="table table-border ">');
            echo('<thead class="thead-dark">
                    <tr>
                    <th>First Name</th> 
                    <th>Last Name</th> 
                    <th>Email</th>
                    <th>City</th> 
                    <th>State</th> 
                    <th>Zip Code</th> 
                    <th>PFP</th>
                    </tr>
                  </thead>');
            while($row = mysqli_fetch_assoc($result)){
                echo("<tr>"
                    ."<td>" .$row["firstName"] . "</td>"
                    ."<td>" .$row["lastName"]  . "</td>"
                    ."<td>" .$row["email"]     . "</td>"
                    ."<td>" .$row["city"]      . "</td>"
                    ."<td>" .$row["state"]     . "</td>"
                    ."<td>" .$row["zipCode"]   . "</td>"
                    ."<td>" .'<img style="width:70px; height:70px;" src="' . $row["imagePath"] .'">' . "</td>"
                    ."</tr>");

            };
            echo("</table>");
        };


        ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>




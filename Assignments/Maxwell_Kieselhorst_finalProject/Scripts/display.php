<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/main.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="container mt-5">
        <?php
// select all from tbl
        $sql = 'SELECT * FROM tblBlog';
        //store in result var
        $result = mysqli_query($conn, $sql);
//if rows, then print in this table
        if(mysqli_num_rows($result)){
            echo('<table class="table table-border text-wrap table-striped ">');
            echo('<thead class="thead-dark border">
                    <tr>
                    <th>Posts</th> 
                    </tr>
                  </thead>');
//print each row
            while($row = mysqli_fetch_assoc($result)){
                echo('<tr class="username  border">'
                    ."<td>" .
                    "<h1>".$row["userName"] . "</h1>".
                    "<h6>".$row["reg_date"] . "</h6>".   
                    '<p class="text-break" style="width:100%;">'.$row["message"]. "<p>".  
                    '<img class="img-fluid " style="width:75%; height:auto;" src="' . 
                    $row["imagePath"] .'">' .
                    "</td>".
                    "</tr>");

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




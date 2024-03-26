<?php
    include 'process.php';
    $sql = "SELECT userId, firstName, lastName, occupation, basketBall, baseBall, soccer, other, REG_DATE FROM TBLUSERS ORDER BY userId ASC";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users list Information</title>
    <link rel="stylesheet" href="../CSS/main.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>User Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>occupation</th>
                <th>Basketball</th>
                <th>Baseball</th>
                <th>Soccer</th>
                <th>Other</th>
                <th>REG_Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                // go through the tbale rows  and output content
                if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['userId']) . "</td>" .
                    "<td>" . htmlspecialchars($row['firstName']) . "</td>" . 
                    "<td>" . htmlspecialchars($row['lastName']) . "</td>" . 
                    "<td>" . htmlspecialchars($row['occupation']) . "</td>" . 
                    "<td>" . htmlspecialchars($row['basketBall']) . "</td>" . 
                    "<td>" . htmlspecialchars($row['baseBall']) . "</td>" . 
                    "<td>" . htmlspecialchars($row['soccer']) . "</td>" . 
                    "<td>" . htmlspecialchars($row['other']) . "</td>" .
                    "<td>" . htmlspecialchars($row['REG_DATE']) . "</td>";
                    echo "</tr>";
                    
                };
            }else{
                echo("<tr><td colspan='10'>No Result</td></tr>");
            }
            ?>
        </tbody>
    </table>
    <input type="button" class="return"value="return to Form" onclick="location.href = '../index.html'">
</body>
</html>
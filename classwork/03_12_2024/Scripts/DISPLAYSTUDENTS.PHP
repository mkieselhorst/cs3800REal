<?php
    require 'connection.php';
    $sql = "SELECT studentFirstName, studentLastName, studentMajor, REG_DATE FROM TBLSTUDENT ORDER BY studentFirstName ASC";
    $result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student list Information</title>
    <style>
        table{
            width: 450px;
            margin: 150px;
        }
        table, td, th{
            border: 1px solid grey;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Major</th>
                <th>Reg Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(mysqli_num_rows($result) > 0){
                // go through the tbale rows  and output content
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['$studentFirstName']) . "</td>" . 
                    "<td>" . htmlspecialchars($row['$studentLastName']) . "</td>" . 
                    "<td>" . htmlspecialchars($row['$studentMajor']) . "</td>" . 
                    "<td>" . htmlspecialchars($row['$REG_DATE']) . "</td>";
                    echo "</tr>";
                    
                }
            
            }else{
                echo("<tr><td colspan='4'>No Result</td></tr>");
            }
            ?>
        </tbody>
    </table>
</body>
</html>
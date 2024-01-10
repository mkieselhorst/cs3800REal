<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- commenting in html --> 
    <h1>this is my first php  say hello</h1>

    <?php
        //  XAMPP stands for : Cross-platform Apache MySQL php perl
        // commenting in php
        /* also commenting*/
        # also commenting
        /*
            Variables in php declared by starting with $
            php is loose language 
         */
       
        $name = "Max ";
        echo '<p style="font-size: 1.35em";> Name: $name </p>';
        echo $name;
        echo "<br />";
        $quantity = 10;
        $name = 65;
        echo $name;
        // print and echo are not  methods or functions; they are known as constructs

        // example of double quotes vs single
        echo("<p style=\"color: red\";>Quantity:  $quantity </p>");

        $collegeName = "Wright State University";
        $first_name = "Max ";
        print("<p>College Name: $collegeName </p>");
        echo "2 + 3 = " . (2 + 3);
    ?>
</body>
</html>
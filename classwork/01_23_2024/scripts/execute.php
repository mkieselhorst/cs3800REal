<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // $num1 = if(isset($_POST['num1'])){

        // }
        $num1 = isset($_POST['num1']) ? (float)$_POST['num1']: 0;
        $num2 = isset($_POST['num2']) ? (float)$_POST['num2']: 0;
            echo"<h2> Built In Math Functions </h2>";
            echo "Absolute value of a numb: " . abs($num1) . "<br/>";
            echo "ceiling of a numb: " . ceil($num1) . "<br/>";
            echo "power of num 1 to num 2: " . pow($num1, $num2) . "<br/>";
            echo "square root value of a numb: " . sqrt($num1) . "<br/>";


    };




?>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email'], FILTER_SANITIZE_EMAIL);
        $phone = htmlspecialchars($_POST['phone'],);

        $checkboxes = [];

        for( $i = 1; $i <= 3 ; $i++ ){
            if(!empty($_POST['checkbox$i'])){
                $checkboxes[] = htmlspecialchars($_POST['checkbox$i']);
            };
        };
    $radio = htmlspecialchars($_POST['radio']);
    
    $select = htmlspecialchars($_POST['select']);


    include 'thankyou.php';
    }
<?php
    if($_SERVER['$_REQUEST_METHOD']){

        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

        $phone = preg_replace('/[0-9]/', '', $phone);

            echo("Name: " .htmlspecialchars($name) . "<br/>" .
            "Phone: " .htmlspecialchars($phone) . "<br/>" .
            "Email: " . htmlspecialchars($email) . "<br/>");
    }
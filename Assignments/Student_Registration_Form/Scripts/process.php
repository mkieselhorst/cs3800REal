<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" ){

        $name       = filter_input(INPUT_POST, 'name');
        $email      = filter_input(INPUT_POST, 'email');
        $phone      = filter_input(INPUT_POST, 'phone');
        $status   = filter_input(INPUT_POST, 'status');
        // Handle checking, for 0 choice, 1, 2, or all
        $interests   = $_POST['interest'] ?? [];

        $phone      = preg_replace('/[0-9]/', '', $phone);

            echo("Name: " . htmlspecialchars($name) . "<br/>" .
            "Email: " . htmlspecialchars($email) . "<br/>" .
            "Phone: " . htmlspecialchars($phone) . "<br/>" .
            "Status: " . htmlspecialchars($status) . "<br/>" .
            "Interests: " . htmlspecialchars(implode(", " , $interest)) . "<br/>" 
    );
    }

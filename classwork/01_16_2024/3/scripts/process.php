<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" ){

        $name       = filter_input(INPUT_POST, 'name');
        $phone      = filter_input(INPUT_POST, 'phone');
        $email      = filter_input(INPUT_POST, 'email');
        $document   = filter_input(INPUT_POST, 'document');
        // Handle checking, for 0 choice, 1, 2, or all
        $services   = $_POST['services'] ?? [];

        $phone      = preg_replace('/[0-9]/', '', $phone);

            echo("Name: " .htmlspecialchars($name) . "<br/>" .
            "Phone: " .htmlspecialchars($phone) . "<br/>" .
            "Email: " . htmlspecialchars($email) . "<br/>" .
            "Document: " . htmlspecialchars($document) . "<br/>" .
            "Services: " . htmlspecialchars(implode(", " , $services)) . "<br/>" 
    );
    }
?>
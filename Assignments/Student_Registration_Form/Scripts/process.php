<?php
// request
    if($_SERVER['REQUEST_METHOD'] == "POST" ){

// get all input values as vars
        $name       = filter_input(INPUT_POST, 'name', );
        $email      = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $phone      = filter_input(INPUT_POST, 'phone');
        $status   = filter_input(INPUT_POST, 'status');

// get arrays for interests and majors
        $interests   = $_POST['interests'] ?? [];
        $major   = $_POST['major'] ?? [];

// phone number sanitization
        $phone      = preg_replace('/[^0-9]/', '', $_POST['phone']);

// echo all values necessary
            echo("Name: " . htmlspecialchars($name) . "<br/>" .
            "Email: " . htmlspecialchars($email) . "<br/>" .
            "Phone: " . htmlspecialchars($phone) . "<br/>" .
            "Status: " . htmlspecialchars($status) . "<br/>" .
            "Interests: " . htmlspecialchars(implode(', ', $interests)) . "<br/>" . 
            "Majors: " . htmlspecialchars(implode(', ', $major)) . "<br/>"
    );
    }
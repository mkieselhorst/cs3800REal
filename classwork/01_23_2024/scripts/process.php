<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    
        $name = $email = $phone = $radio = $select = "";
        $checkboxes = [];
        foreach($_POST as $key => $value){
            $sanitizedValues = htmlspecialchars($value);
            switch($key){
                case 'name':
                        $name = $sanitizedValues;
                        break;
                    case 'email':
                        $email = filter_var($sanitizedValues, FILTER_SANITIZE_EMAIL);
                        break;
                    case 'phone':
                        $phone = $sanitizedValues;
                        break;
                    case 'checkbox1':
                    case 'checkbox2':
                    case 'checkbox3':
                            $checkboxes[] = $sanitizedValues;
                            break;
                    case 'radio':
                        $radio = $sanitizedValues;
                        break;
                    case 'select':
                        $select = $sanitizedValues;
                        break;
            };
        };


    include 'thankyou.php';
    }
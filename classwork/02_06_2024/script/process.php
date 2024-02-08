<?php
session_start();
//function validateInput body
function validateInput($data){
    $errors = [];
    if (empty($data['name'])){
        $errors[] = "Name is required.";
    }
    if (empty($data['tel'])){
        $errors[] = "Tel is required.";
    }
    if (empty($data['email'])){
        $errors[] = "Email is required.";
    }
    //validate gender
    if(!isset($data['gender'])){
        $errors[] = "Gender selection is required";
    }
    //validate sports
    if(!isset($data['sports'])){
        $errors[] = "Favorite sport selection is required";
    }
    if(!isset($data['reference'])){
        $errors[] = "References selection is required";
    }
    return($errors);
}




// call a function, validateInput
$errors = validateInput($_POST);

if(!empty($errors)){
    echo"please fill in ALL requred fields <br />" . implode("<br />", $errors);
    exit;
}

$name       = htmlspecialchars($_POST['name']);
$tel        = htmlspecialchars($_POST['tel']);
$email      = htmlspecialchars($_POST['email']);
$gender     = htmlspecialchars($_POST['gender']);
$source     = htmlspecialchars($_POST['reference']);
$sports     = isset($_POST['sports']) ? $_POST['sports'] : [];
// echo "THank you, $name, <br />";
// echo "$tel, <br />";
// echo "$email, <br />";
// echo "$gender, <br />";
// echo "$source, <br />";
// echo "Sports:" .implode(" , " , $sports) ;

$__SESSION['userResponses'] = [
    'name' => htmlspecialchars($_POST['name']),
    'tel' => htmlspecialchars($_POST['tel']),
    'email' =>htmlspecialchars($_POST['email'])
];



header('location: ThankYou.php');
?>
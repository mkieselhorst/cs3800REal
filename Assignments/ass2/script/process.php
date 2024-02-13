<?php
session_start();
// check for errors
function checkInput($data){
    $errors = [];
    if (empty($data['name'])) {
        $errors[] = 'Please enter name';
    }
    if (empty($data['email'])) {
        $errors[] = 'Please enter email';
    }
    if (empty($data['feedback'])) {
        $errors[] = 'Please enter any feedback';
    }
    if (empty($data['attendance'])) {
        $errors[] = 'Please select attendance';
    }
    if (empty($data['diet'])) {
        $errors[] = 'Please select dietary options';
    }
    
    return $errors;
}

// call error checking func
$errors = checkInput($_POST);
if(!empty($errors)){
    // exit if there is an error
    echo "Please fill out all fields <br />" . implode("<br />", $errors);
    exit;
}

// getting input from form _POST
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$feedback = htmlspecialchars($_POST['feedback']);
$attendance = htmlspecialchars($_POST['attendance']);
$diet = isset($_POST['diet']) && is_array($_POST['diet']) ? array_map('htmlspecialchars',$_POST['diet']) : [];
// filter emails
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address");
  } else {
    echo("$email is not a valid email address");
    exit;
  }

// put items into session['REesponses'] for calling in thankyou page
$_SESSION['Responses'] = [
    'name' => $name,
    'email' => $email,
    'feedback' => $feedback,
    'attendance' => $attendance,
    'diet' => $diet
];
// head to the thankyoupage
header('location: ThankYou.php');
exit;
?>
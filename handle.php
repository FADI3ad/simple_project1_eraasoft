<?php 
    session_start();
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

//name validation
$name = trim($_POST['name']) ?? "";
$name = htmlspecialchars($name);

//email validation
$email = $_POST['email'] ?? "";
$email = filter_var($email, FILTER_VALIDATE_EMAIL );
$email = filter_var($email , FILTER_SANITIZE_EMAIL);

//phone validation
$phone = $_POST['phone'];
$password = $_POST['password'];




$errors = [];
 
if (empty($name)) {
    $errors[] = "Name is required";
}

if (empty($email)) {
    $errors[] = "Email is required";
} elseif (!$email) { 
    $errors[] = "Email is invalid";
}

if (empty($phone)) {
    $errors[] = "Phone is required";
}

if (empty($password)) {
    $errors[] = "Password is required";
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    exit;
}



$_SESSION['userName'] = $name;
$_SESSION['email'] = $email;
$_SESSION['phone'] = $phone; 
$_SESSION['password'] = $password;

header("Location: profile.php");









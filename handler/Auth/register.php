<?php
    session_start();
    include "../../helpers/valdation.php";






    if ($_SERVER['REQUEST_METHOD'] !== "POST") {
        die("METHOD NOT ALLOWED");
    }

    //to avoid xss attack and trim 
    function htmlSafe($input)
    {
        return htmlspecialchars(trim($input));
    }
    $name = htmlSafe($_POST['name']);
    $email = htmlSafe($_POST['email']);
    $phone = htmlSafe($_POST['phone']);
    $password = trim($_POST['password']);




    $errors = validataData($name, $email , $phone , $password);
    if (!empty($errors)) {
        
        $_SESSION['errors'] = $errors;
        header("location:../../index.php");
        exit;   
    }




    $user = [
        "name" => $name,
        "email" => $email,
        "phone" => $phone
    ];

    $_SESSION['user'] = $user;
    header("location:../../views/profile.php");
    exit;




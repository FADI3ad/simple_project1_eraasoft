<?php





$errors = [];   
function validataData($name, $email, $phone, $password)
{
    // -----------------------------
    // NAME VALIDATION
    // -----------------------------
    if (empty($name)) {
        $errors['name'] = "The name field is required";
    } elseif (strlen($name) < 3) {
        $errors['name'] = "The name must be at least 3 characters";
    } elseif (strlen($name) > 20) {
        $errors['name'] = "The name must be less than 20 characters";
    }

    // -----------------------------
    // EMAIL VALIDATION
    // -----------------------------
    if (empty($email)) {
        $errors['email'] = "The email field is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    } elseif (strlen($email) > 60) {
        $errors['email'] = "Email must not exceed 60 characters";
    }

    // -----------------------------
    // PHONE VALIDATION
    // -----------------------------
    // if (!empty($phone)) {
    //     if (!preg_match("/^[0-9]{10-15}$/", $phone)) {
    //         $errors['phone'] = "Phone must be digits only and only numbers";
    //     }
    // }



    // -----------------------------
    // PASSWORD VALIDATION
    // -----------------------------
    if (empty($password)) {
        $errors['password'] = "The password field is required";
    } elseif (strlen($password) < 8) {
        $errors['password'] = "Password must be at least 8 characters";
    } elseif (strlen($password) > 20) {
        $errors['password'] = "Password must be less than 20 characters";
    }


    return $errors;
}




if (!empty($errors)) {
    $_SESSION['errors'] = $errors;

}

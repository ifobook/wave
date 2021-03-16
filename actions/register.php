<?php
require_once('../app.php');
require_once (APP_ROOT.DS.'mail'.DS.'mailhandle.php');
global $conn;

if (isset($_POST['submit'])) {
    //getting user inputs

    $username = $_POST['user_name'];
    $email = $_POST['user_email'];
    $phone = $_POST['user_phone'];
    $password = $_POST['user_password'];
    $conf_pass = $_POST['password_retype'];
    $terms = $_POST['user_terms'];

    $data = ['username' => $username, 'email' => $email,'phone number' => $phone, 'password' => $password, 'confirm password' => $conf_pass, 'terms' => $terms];

    $error = emptyField($data);
    if (!empty($error)) {
        createSession('error', $error);
        redirect('account');
    }

    $error = "Password and confirm password those not match";
    if (!password_match($data['password'], $data['confirm password'])) {
        createSession('error', $error);
        redirect('account');
    }

    $error = "Email is not valid";
    if (!validEmail($data['email'])) {
        createSession('error', $error);
        redirect('account');
    }

    $user = validUser($username, $email, $conn);

    if (!empty($user)) {
        createSession('error', 'Username or Email already exists....');
        redirect('account');
    }

    $securePassword = passwordHash($data['password']);

    $success = "Registeration Successful, go to login!!!";
    if (addUserToDatabase($params = [$data['username'], $data['email'],$data['phone number'], $securePassword], $conn)) {
        welcome_mail($email,$username);
        $_SESSION["success"] = $success;
        redirect('account');
    }
}

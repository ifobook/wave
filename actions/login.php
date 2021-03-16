<?php
require_once '../app.php';
global $conn;

if (isset($_POST['login'])) {

    $username = $_POST['user_login'];
    $password = $_POST['user_password'];

    $data = ['username' => $username, 'password' => $password];

    $error = emptyField($data);
    if (!empty($error)) {
        createSession('error', $error);
        redirect('account');
    }

    if (verifyPassword($username,$password, $conn)) {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();
        createSession('user', $login);
        $_SESSION['myuser'] = $data;
        redirect('account');
        
    } else {

        createSession('error', 'Login failed...Check username and Password');
        redirect('account');
    }
}

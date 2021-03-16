<?php

require_once("../app.php");
global $conn;

if (isset($_POST['submit'], $_POST['user_id'])) {
    $user_id = $_POST["user_id"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $total_invest = $_POST["total_invest"];
    $net_return = $_POST["net_return"];
    $property1 = $_POST["property1"];
    $property2 = $_POST["property2"];
    $property3 = $_POST["property3"];

    $success = "user updated successfuly";

    $sql = "UPDATE users SET username = '$username', email = '$email', phone = '$phone', property1 = '$property1', property2 = '$property2', property3 = '$property3', total_invest = '$total_invest', net_return = '$net_return' WHERE id = $user_id";

    if ($conn->query($sql)) {
        $_SESSION['success'] = $success;
        redirect('admin/index.php');
    } else {
        $_SESSION['success'] = "Sorry somthing went wrong, please try again";
        redirect('admin/index.php');
    }
}

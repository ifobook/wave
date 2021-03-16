<?php
require_once('../app.php');
require_once(APP_ROOT . DS . 'mail' . DS . 'mailhandle.php');
global $conn;

if (isset($_POST['submit_ab'])) {
    $name = $_POST["your_name"];

    $email = $_POST["your_email"];

    $msg = $_POST["your_message"];

    $data = ['Name' => $name, 'Email' => $email, 'Message' => $msg];

    $error = emptyField($data);
    if (!empty($error)) {
        createSession('error', $error);
        redirect('about');
    }

    $error = "Email is not valid";
    if (!validEmail($email)) {
        createSession('error', $error);
        redirect('about');
    }

    $error = "Your Message has been sent, We will contact you withing 24hrs";
    if (contactus_mail($email, $name, $msg)) {
        createSession('error', $error);
        redirect('about');
    } else {
        $error = "your mail could not be sent, please try again latter";
        createSession('error', $error);
        redirect('about');
    }

} elseif (isset($_POST['submit_ct'])) {
    $name = $_POST["your_name"];

    $email = $_POST["your_email"];

    $msg = $_POST["your_message"];

    $data = ['Name' => $name, 'Email' => $email, 'Message' => $msg];

    $error = emptyField($data);
    if (!empty($error)) {
        createSession('error', $error);
        redirect('contact');
    }

    $error = "Email is not valid";
    if (!validEmail($email)) {
        createSession('error', $error);
        redirect('contact');
    }

    $error = "Your Message has been sent, We will contact you withing 24hrs";
    if (contactus_mail($email, $name, $msg)) {
        createSession('error', $error);
        redirect('contact');
    } else {
        $error = "your mail could not be sent, please try again latter";
        createSession('error', $error);
        redirect('contact');
    }
}elseif (isset($_POST['submit_view'])) {
   
    $prop = $_POST['target_prop'];
    $name = $_POST["sender_name"];

    $email = $_POST["sender_email"];
    $Phone = $_POST["sender_phone"];

    $msg = $_POST["sender_msg"];

    $data = ['Name' => $name, 'Email' => $email,'Phone' => $Phone, 'Message' => $msg];

    $error = emptyField($data);
    if (!empty($error)) {
        createSession('error', $error);
        redirect('view.php?property='.$prop);
    }

    $error = "Email is not valid";
    if (!validEmail($email)) {
        createSession('error', $error);
        redirect('view.php?property='.$prop);
    }

    $error = "Your Message has been sent, We will contact you withing 24hrs";
    if (property_mail($email,$name,$msg,$prop,$Phone)) {
        createSession('error', $error);
        redirect('view.php?property='.$prop);
    } else {
        $error = "your mail could not be sent, please try again latter";
        createSession('error', $error);
        redirect('view.php?property='.$prop);
    }
}else{
    redirect('home');
}

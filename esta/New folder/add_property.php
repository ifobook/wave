<?php
require_once("../app.php");
global $conn;
if (isset($_POST['submit'])) {
    $property_id = $_POST['property_id'];
    $property_name = $_POST['property_name'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $type = $_POST['type'];
    $status = $_POST['status'];
    $bedroom = $_POST['bedroom'];
    $bathroom = $_POST['bathroom'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $running_cost = $_POST['running_cost'];
    $investment_return = $_POST['investment_return'];
    $description = $_POST['description'];
    $img1 = $_FILES['img1'];
    $img2 = $_FILES['img2'];
    $img3 = $_FILES['img3'];
    $img4 = $_FILES['img4'];
    $img5 = $_FILES['img5'];

    $data = ['property id' => $property_id, 'property name' => $property_name, 'address' => $address, 'country' => $country, 'city' => $city, 'state' => $state, 'property type' => $type, 'bedrooms' => $bedroom, 'bathroom' => $bathroom, 'size' => $size, 'price' => $price, 'running cost' => $running_cost, 'investment return' => $investment_return, 'description' => $description];

    $error = emptyField($data);
    if (!empty($error)) {
        createSession('error', $error);
        redirect('admin/all_properties.php');
    }

    $p_id = valid_id($property_id, $country, $conn);

    if (!empty($p_id)) {
        createSession('error', 'The property Id you enterd already exists....');
        redirect('admin/all_properties.php');
    }

    $img1 = img_saver($img1, $img_name = "image-1");
    $img2 = img_saver($img2, $img_name = "image-2");
    $img3 = img_saver($img3, $img_name = "image-3");
    $img4 = img_saver($img4, $img_name = "image-4");
    $img5 = img_saver($img5, $img_name = "image-5");

    $success = "property added successfuly";
    if (add_property_to_Database($params = [$data['property id'], $data['property name'], $data['address'], $data['country'], $data['city'], $data['state'], $data['property type'], $status, $data['bedrooms'], $data['bathroom'], $data['size'], $data['price'], $data['running cost'], $data['investment return'], $data['description'], $img1, $img2,$img3,$img4, $img5], $conn)) {
        $_SESSION['success'] = $success;
        redirect('admin/all_properties.php');
    }else{
        $_SESSION['success'] = "Sorry somthing went wrong, please try again";
        redirect('admin/all_properties.php');
    }


}

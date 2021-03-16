<?php
require_once("../app.php");
global $conn;

if (isset($_POST['submit'], $_POST['prop_id'])) {
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
    $img_locate1 = $_POST['img_locate1'];

    $img2 = $_FILES['img2'];
    $img_locate2 = $_POST['img_locate2'];

    $img3 = $_FILES['img3'];
    $img_locate3 = $_POST['img_locate3'];

    $img4 = $_FILES['img4'];
    $img_locate4 = $_POST['img_locate4'];

    $img5 = $_FILES['img5'];
    $img_locate5 = $_POST['img_locate5'];

    $prop_id = $_POST['prop_id'];

    // $data = ['property id' => $property_id, 'property name' => $property_name, 'address' => $address, 'country' => $country, 'city' => $city, 'state' => $state, 'property type' => $type, 'bedrooms' => $bedroom, 'bathroom' => $bathroom, 'size' => $size, 'price' => $price, 'running cost' => $running_cost, 'investment return' => $investment_return, 'description' => $description, 'new property Id' => $prop_id];

    // $error = emptyField($data);
    // if (!empty($error)) {
    //     createSession('error', $error);
    //     redirect('admin/all_properties.php');
    // }

    // $p_id = valid_id($property_id, $country, $conn);

    // if (!empty($p_id)) {
    //     createSession('error', 'The property Id you enterd already exists....');
    //     redirect('admin/all_properties.php');
    // }

    $img1 = img_update($img1, $img_name = "image-1", $img_locate1);
    $img2 = img_update($img2, $img_name = "image-2", $img_locate2);
    $img3 = img_update($img3, $img_name = "image-3", $img_locate3 );
    $img4 = img_update($img4, $img_name = "image-4", $img_locate4);
    $img5 = img_update($img5, $img_name = "image-5", $img_locate5);

    $success = "property updated successfuly";

    // dnd($_POST);
    $sql = "UPDATE properties SET p_id = '$property_id', name = '$property_name', address = '$address', country = '$country', city = '$city', state = '$state', type = '$type', status = '$status', bedroom = '$bedroom', bathroom = '$bathroom', size = '$size', price = '$price', running = '$running_cost', net_return = '$investment_return', description = '$description', image1 = '$img1', image2 = '$img2', image3 = '$img3', image4 = '$img4', image5 = '$img5' WHERE p_id = $prop_id";
    // dnd($_POST);
    // $sql = $conn->prepare("UPDATE properties  (firstname, lastname, email) VALUES (?, ?, ?)");
    // $sql->bind_param("sss", $firstname, $lastname, $email);

    // execute the query
    if ($conn->query($sql)) {
        $_SESSION['success'] = $success;
        redirect('admin/all_properties.php');
    } else {
        $_SESSION['success'] = "Sorry somthing went wrong, please try again";
        redirect('admin/all_properties.php');
    }
}

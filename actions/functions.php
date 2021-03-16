<?php

function dnd($data)
{
    echo ('<pre>');
    var_dump($data);
    echo ('</pre>');
    die();
}

function createSession($name, $msg)
{
    $_SESSION[$name] = $msg;
}

function redirect($url)
{
    header('Location: ' . ROOT . $url);

    die();
}

function alertMsg($msgType, $msg)
{
?>
    <p style="color:red; font-size:20px;">
        <?php print $msgType; ?>
        <?php if (is_array($msg)) { ?>
            <ul>
                <?php foreach ($msg as $error) : ?>
                    <li> <strong><?= $error ?></strong></li>
                <?php endforeach; ?>
            </ul>
        <?php } else { ?>
            <strong><?= $msg ?></strong>
        <?php } ?>
    </p>
<?php
}

// register funtions

function emptyField($inputs)
{
    foreach ($inputs as $k => $v) {
        if (empty($v)) {
            $error[$k] = "$k field is empty";
            return $error;
        }
    }
}

function password_match($pass1, $pass2)
{
    if ($pass1 == $pass2) {
        return true;
    }
    return false;
}

function validEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) return true;
    return false;
}

function query($sql, $params, $db)
{

    // create an SQL query with placeholders and prepare it
    $in    = str_repeat('?,', count($params) - 1) . '?'; //  returns ?,?,?...
    //  $sql = "SELECT * FROM users WHERE username = ? OR email = ?"; 
    $stmt  = $db->prepare($sql);

    // create the types string dynamically and bind an array
    $types = str_repeat('s', count($params)); // returns sss...
    $stmt->bind_param($types, ...$params);

    return $stmt;
}

function passwordHash($password)
{

    $hashed =  password_hash($password, PASSWORD_DEFAULT);
    return $hashed;
}

function validUser($params, $mail, $db)
{

    // $stmt = query("SELECT * FROM users WHERE username = ? OR email = ?", $params, $db);
    // $stmt->execute();

    // $result = $stmt->get_result(); // get the mysqli result
    // $data = $result->fetch_all(MYSQLI_ASSOC); // fetch the data  
    $sql = "SELECT * FROM users WHERE username = '$params' OR email = '$mail'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();
    extract($data);

    return $data;
}

function addUserToDatabase($params, $db)
{

    $stmt =  query("INSERT INTO users(username,email,phone,password) VALUES(?,?,?,?)", $params, $db);

    // execute and fetch the rows
    if ($stmt->execute()) {
        $db = null;
        return true;
    } else {
        $db = null;
        return false;
    }
}

// login funtions

function verifyPassword($params, $pass, $db)
{

    // $stmt =  query("SELECT * FROM users WHERE username = ?", $params, $db);

    $sql = "SELECT * FROM users WHERE username = '$params'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();
    if (!empty($data)) {
        // $data = $result->fetch_assoc();

        extract($data);
        if (password_verify($pass, $password)) {
            return true;
        }
    } else {
        return false;
    }
}

// funtions for uploading/updating images

function img_saver($img, $img_name)
{
    $f_name = $img['name'];
    $f_type = $img['type'];
    $f_tmp = $img['tmp_name'];
    $f_error = $img['error'];
    $f_size = $img['size'];

    if (empty($f_name)) {
        $error = $img_name . " field is empty";
        createSession('error', $error);
        redirect('admin/all_properties.php');
    }

    $terget_f = APP_ROOT . DS . 'uploads' . DS;
    $new_fname = uniqid('', true);

    $file_extention = explode('.', $f_name);
    $file_extention = strtolower(end($file_extention));

    $white_list = ['jpg', 'jpeg', 'png'];
    $fname = $new_fname . '.' . $file_extention;
    $locate =  $terget_f . $fname;
    if (in_array($file_extention, $white_list)) {
        if (!$f_error) {
            $move_f = move_uploaded_file($f_tmp, $locate);

            if ($move_f) {
                $locate = ROOT . 'uploads/' . $fname;
                return $locate;
            }
        }
    } else {
        $error = $img_name . " file type is not an image";
        createSession('error', $error);
        redirect('admin/all_properties.php');
    }
}

function img_update($img, $img_name, $img_locate)
{
    $f_name = $img['name'];
    $f_type = $img['type'];
    $f_tmp = $img['tmp_name'];
    $f_error = $img['error'];
    $f_size = $img['size'];

    if (empty($f_name)) {
        return $img_locate;
    }

    $terget_f = APP_ROOT . DS . 'uploads' . DS;
    $new_fname = uniqid('', true);

    $file_extention = explode('.', $f_name);
    $file_extention = strtolower(end($file_extention));

    $white_list = ['jpg', 'jpeg', 'png'];
    $fname = $new_fname . '.' . $file_extention;
    $locate =  $terget_f . $fname;
    if (in_array($file_extention, $white_list)) {
        if (!$f_error) {
            $move_f = move_uploaded_file($f_tmp, $locate);

            if ($move_f) {
                $locate = ROOT . 'uploads/' . $fname;
                return $locate;
            }
        }
    } else {
        $error = $img_name . " file type is not an image";
        createSession('error', $error);
        redirect('admin/all_properties.php');
    }
}

// funtions for handling adding properties to database

function valid_id($params, $country, $db)
{

    if ($country == "property country") {
        createSession('error', 'No property country selected');
        redirect('admin/all_properties.php');
    } else {
        $sql = "SELECT * FROM properties WHERE p_id = '$params' ";
        $result = $db->query($sql);
        $data = $result->fetch_assoc();
        extract($data);

        return $data;
    }
}

function add_property_to_Database($params, $db)
{

    $stmt =  query("INSERT INTO properties(p_id,name,address,country,city,state,type,status,bedroom,bathroom,size,price,running,net_return,description,image1,image2,image3,image4,image5) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", $params, $db);

    // execute and fetch the rows
    if ($stmt->execute()) {
        $db = null;
        return true;
    } else {
        $db = null;
        return false;
    }
}

// listing database contents
function users_listing($db)
{
    $listing = " ";

    $sql = "SELECT * FROM users";
    $result = $db->query($sql);
    while ($data = $result->fetch_assoc()) {

        extract($data);
        $listing .= "
            <tr>
                <td>$id</td>
                <td>$username</td>
                <td>$email</td>
                <td>$phone</td>
                <td> <a class='mr-3' href='javascript:void(0);'><i class='fe fe-edit'></i></a><a href='javascript:void(0);'><i class='fe fe-trash-2'></i></a></td> 
            </tr>
        ";
    }
    return $listing;
}

function property_image($country, $db)
{
    $listing = " ";
    $sql = "SELECT * FROM properties WHERE country = '$country' LIMIT 1";
    $result = $db->query($sql);
    while ($data = $result->fetch_assoc()) {
        extract($data);
        $listing .= "
                $image1
        ";
    };
    return $listing;
}

function find_property($db)
{
    $listing = " ";
    $sql = "SELECT * FROM properties LIMIT 9";
    $result = $db->query($sql);
    while ($data = $result->fetch_assoc()) {
        extract($data);
        $listing .= "
        <div class='ere-item-wrap property-item'>
        <div class='property-inner'>
            <div class='property-image '> <img width='330' height='180' src='$image1' onerror='this.src = '';' alt='Single House Near, Los Angeles'>
                <div class='property-action block-center'>
                    <div class='block-center-inner'>
                        <div class='property-view-gallery-wrap' data-toggle='tooltip' title='(5) Photos'> <a data-property-id='771' href='javascript:void(0)' class='property-view-gallery'><i class='fa fa-camera'></i></a>
                        </div>
                    </div> <a class='property-link' href='view.php?property=$p_id'></a>
                </div>
                <div class='property-label property-featured'>
                    <p class='label-item'></span>
                    </p>
                </div>
                <div class='property-status'>
                    <p class='status-item'></p>
                </div>
                <div class='property-label property-featured'>
                    <p class='label-item'> 
                        <span class='property-label-bg'>$status <span class='property-arrow'></span>
                        </span>
                    </p>
                </div>
            </div>
            <div class='property-item-content '>
                <div class='property-heading'>
                    <h2 class='property-title'><a href='view.php?property=$p_id'>$name</a></h2>
                    <div class='property-price'> <span> <span class='property-price-prefix'>Start
                                from </span> $price </span>
                    </div>
                    <div class='property-price'> <span> <span class='property-price-prefix'>ID:</span> $p_id </span>
                    </div>
                </div>
                <div class='property-location'>
                    <i class='fa fa-map-marker'></i> <a><span>$address</span></a></div>
                <div class='property-element-inline'>
                    <div class='property-type-list'> <i class='fa fa-tag'></i> <a><span>$type
                            </span></a></div>
                    <div class='property-agent'> <a> <i class='fa fa-home'></i>
                            <span>$country</span> </a></div>
                    <div class='property-date'><i class='fa fa-location-arrow'></i>$state</div>
                </div>
                <div class='property-excerpt'>
                    <a>$description</a>
                </div>
                <div class='property-info'>
                    <div class='property-info-inner'>
                        <div class='property-area'>
                            <div class='property-area-inner property-info-item-tooltip' data-toggle='tooltip' title='Size'> <span class='fa fa-arrows'></span>
                                <span class='property-info-value'>$size
                                    SqFt </span></div>
                        </div>
                        <div class='property-bedrooms'>
                            <div class='property-bedrooms-inner property-info-item-tooltip' data-toggle='tooltip' title='Bedrooms'> <span class='fa fa-hotel'></span>
                                <span class='property-info-value'>$bedroom</span>
                            </div>
                        </div>
                        <div class='property-bathrooms'>
                            <div class='property-bathrooms-inner property-info-item-tooltip' data-toggle='tooltip' title='Bathrooms'> <span class='fa fa-bath'></span>
                                <span class='property-info-value'>$bathroom</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     ";
    };
    return $listing;
}

// searhing properties

function search_property($selected, $inputs, $db)
{
    if ($selected == 'prop_id') {

        $sql = "SELECT * FROM properties WHERE p_id = '$inputs'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    } elseif ($selected == 'country') {

        $sql = "SELECT * FROM properties WHERE country = '$inputs'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            $sql = "SELECT * FROM properties WHERE country = 'others'";
            $result = $db->query($sql);
            return $result;
        }
    } elseif ($selected == 'type') {

        $sql = "SELECT * FROM properties WHERE type = '$inputs'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {

            return $result;
        } else {
            $sql = "SELECT * FROM properties WHERE type = 'others'";
            $result = $db->query($sql);
            return $result;
        }
    } elseif ($selected == 'bed') {

        $sql = "SELECT * FROM properties WHERE bedroom = '$inputs'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    } elseif ($selected == 'bath') {

        $sql = "SELECT * FROM properties WHERE bathroom = '$inputs'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
}

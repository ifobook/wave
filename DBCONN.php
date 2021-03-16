<?php

// Create connection
$conn = new mysqli(HOST,USERNAME,PASSWORD,DBNAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $conn;
?>
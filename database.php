<?php

$conn = mysqli_connect("localhost", "root", "", "breweries");

if (!$conn) {
    echo "Error: Unable to connect to database. ";
    echo "Debugging errno: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}

?>

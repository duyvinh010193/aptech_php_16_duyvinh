<?php

function connectDatabase(){
    
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "aptech_php_16_vinh";
    
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;


}
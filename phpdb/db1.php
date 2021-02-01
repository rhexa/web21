<?php

    $servername = "localhost:3306";
    $username = "root";
    $pass = "Mysq123!";
    $dbname = "test1";
    $conn = new mysqli ($servername, $username, $pass, $dbname);

    if ($conn -> connect_error){
        die("Connection failed: " . $conn -> connect_error);
    }
?>
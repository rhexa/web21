<?php
    include 'db1.php';

    $fn = $_POST['fname'];
    $ln = $_POST['lname'];
    $city = $_POST['city'];
    $gid = $_POST['groupid'];
    $sql = "insert into table1 (fname, lname, city, groupid)
    values ( '$fn', '$ln', '$city', '$gid' )";

    if ($conn -> query($sql) === TRUE){
        echo "New record added";
    }
    else {
        echo "Error:-" . $sql . "<br>" . $conn -> error;
    }

    $conn -> close();

?>
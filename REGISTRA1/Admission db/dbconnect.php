<?php
    $server = "Localhost";
    $user = "root";
    $password = "steve";
    $dbname = "student";

    $conn = mysqli_connect($server,$user,$password,$dbname);
    if(!$conn){
        die("Connection failed: ".mysqli_connect_errno());
    }
    // else{
    //     echo "Mysql Connected Succesfully";
    // }

?>
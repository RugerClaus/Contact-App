<?php 
    $server = 'localhost';
    $username = 'root';
    $password = "";
    $database = "contactapp";
    

    $conn = new mysqli($server,$username,$password,$database) or die($conn->error);

    if($conn->connect_error){
        die("Connection failed!: " . $conn->connect_error);
    }

    $logindb = 'loginsystem';

    $login = new mysqli($server,$username,$password,$logindb);


?>
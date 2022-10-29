<?php

    include 'connection.php';

    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $conn->query("INSERT INTO contact (name,email,phone) values('$name','$email','$phone')", 1);
        header('location:../index.php');
    }
?>
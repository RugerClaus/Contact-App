<?php 
    include 'connection.php';
    include 'functions.php';
    include '../contacts.php';

    $id = $_POST['id'];

    function deleteItem($contact_id,$conn) {
        $conn->query("DELETE FROM contact WHERE id = '$contact_id' ");
    }
    
    deleteItem($id,$conn);
    header('location: ../contacts.php');
    
    
?>
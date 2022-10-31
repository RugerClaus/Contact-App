<?php 
    session_start();

    include 'backend/connection.php';
    include 'backend/functions.php';
    
    $result = $conn->query('SELECT * FROM contact');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend/css/index.css" />
    <title>Contacts</title>
    <script src="frontend/js/contacts.js" defer></script>
</head>
<body>
    <div class="wrapper">
        <table>
            <tr>
                <td>Name: </td>
                <td>Email: </td>
                <td>Phone Number: </td>
            </tr>
            <?php 
                while($row = $result->fetch_assoc()){
                    contactTable($row);
                }
            ?>
        </table>
    </div>
</body>
</html>
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
    <table>
        <?php 
            while($row = $result->fetch_assoc()){

                echo '<tr class="contact" id="' . $row['id'] . '">';
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>";
                echo "<form action='email.php' method='post'>";
                echo "<input type='hidden' name='to' value='" . $row['Name'] . "' />";
                echo "<button type='submit' name='email' value='" . $row['email'] . "'>Email</button>";
                echo "</form>";
                echo "</td>";
                echo "<td>";
                echo "<form action='backend/call.php' method='post'>";
                echo "<input type='hidden' name='to' value='" . $row['Name'] . "' />";
                echo "<button type='submit' name='phone' value='" . $row['phone'] . "'>Call</button>";
                echo "</form>";
                echo "</td>";
                echo "<td>";
                echo "<form action='backend/delete.php' method='post'>";
                echo "<button type='submit' name='id' value='" . $row['id'] ."'>Delete</button>";
                echo "</form>";
                echo "</td>";
                echo '</tr>';
            }
        ?>
        
    </table>
</body>
</html>
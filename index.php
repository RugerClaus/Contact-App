<?php

    include 'backend/connection.php';
    include 'backend/functions.php';

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="frontend/css/index.css">
    <script src="frontend/js/index.js" type="module" defer></script>
</head>
<body>
    <header>
        <h1>Add Contact</h1>
        <a class="contactsLink" href="contacts.php">Contacts</a>
    </header>
    <form action="backend/addContact.php" class="addContact" method="post">
        <input type="text" name="name" placeholder="Name Of Contact" />
        <input type="text" name="email" placeholder="email address" />
        <input type="text" name="phone" placeholder="phone number">
        <button type="submit" value="Add Contact" name="add">Add Contact</button>
    </form>
</body>
</html>
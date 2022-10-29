

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link rel="stylesheet" href="frontend/css/index.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }
    </style>
</head>
<body>

    <?php 
        if(isset($_POST)){
            $to = $_POST['email'];
            $name = $_POST['to'];
            echo '<form action="backend/send.php" method="post" class="emailForm">';
            echo '<p>To: ' . $name . '</p>';
            echo '<p>Destination: '. $to . '</p>' ;
            echo '<input type="hidden" name="to" value="' . $to . '" />';
            echo '<label for="subject">Subject: </label><input type="text" name="subject" id="subject">';
            echo '<label for="message">Message: </label><textarea name="message" style="font-family: arial;" id="message" cols="30" rows="10"></textarea>';
            echo '<button type="submit" name="submit">Send</button>';
            echo '</form>';
        }
    ?>
    <script src="frontend/js/email.js"></script>
</body>
</html>
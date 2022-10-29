<?php 
    $subsalt = md5('didyouKnowThatpasswordsareReallyFuckIngimportantLOl');

    $salt = sha1($subsalt);

    $password = $_POST['password'];

    $passwordHash = crypt($password, $salt );

    $databass
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <p></p>
    <form action=""></form>
    <script>
        let x = Math.floor((Math.random() + 5000000000) * (5 * (Math.floor(Math.random()* 100000000000000000000))))
        document.querySelector('p').innerHTML = BigInt(x)
    </script>
</body>
</html>
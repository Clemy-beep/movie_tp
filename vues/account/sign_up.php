<?php
require_once '../../config/config.php';
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="https://img.icons8.com/stickers/100/000000/film-reel.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/styles/header.css">
    <link rel="stylesheet" href="../../assets/styles/footer.css">
    <link rel="stylesheet" href="../../assets/styles/anonym.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
    <title>CMDB</title>
</head>

<body>
    <?php include '../../assets/templates/header_an.html' ?>

    <main>
        <div id="container">
            <h1>Create an account</h1>
            <h2>Already have one ? <a href="./sign_in.php">Sign in</a>!</h2>
            <form action="../../controller/signupController.php" method="POST">
                <label for="username"><span class="material-icons-outlined" style="color: #3b3947;">badge</span> Username</label>
                <input type="text" name="username" id="username" required>
                <label for="email"><span class="material-icons-outlined" style="color: #3b3947;"> email</span> Email</label>
                <input type="email" name="email" id="email" required>
                <label for="age"><span class="material-icons-outlined" style="color: #3b3947;">cake</span> Age</label>
                <input type="number" name="age" id="age" min="12" max="99" required>
                <label for="password"><span class="material-icons-outlined" style="color: #3b3947;">lock</span> Password</label>
                <input type="password" name="password" id="password" required>
                <input type="submit" value="Sign up!">
            </form>
            <div id="error" style="height: 2em;"></div>
            <p>By clicking on "Sign up !", you accept our <a href="#">Terms of Use</a></p>
        </div>

    </main>
    <?php
    include '../../assets/templates/footer.html'
    ?>
</body>

</html>
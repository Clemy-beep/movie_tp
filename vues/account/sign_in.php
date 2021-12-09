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
            <h1>Log in to your account</h1>
            <h2>Don't have one ? <a href="./sign_up.php">Sign up</a>!</h2>
            <form action="../../controller/signInController.php" method="POST">
                <label for="email"><span class="material-icons-outlined" style="color: #3b3947;"> email</span> Email</label>
                <input type="email" name="email" id="email" required>
                <label for="password"><span class="material-icons-outlined" style="color: #3b3947;">lock</span> Password</label>
                <input type="password" name="password" id="password" required>
                <input type="submit" value="Sign in!">
            </form>
        </div>

    </main>
    <?php
    include '../../assets/templates/footer.html'
    ?>
</body>

</html>
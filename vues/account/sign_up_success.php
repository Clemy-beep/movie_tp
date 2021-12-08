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
    <header>
        <div id="logo">
            <span class="material-icons-outlined">
                movie
            </span>
            <a href="../../index.php" style="text-decoration: none; color:#625FFF"><span id="textlogo">CMBD</span></a>
        </div>
        <div id="sign-in">
            <a href="#">
                <span class="material-icons-outlined">
                    login
                </span>
                <span id="logtext">Sign In</span>
            </a>
        </div>
        <div id="sign-up">
            <a href="#">
                <span class="material-icons-outlined">
                    person_add_alt_1
                </span>
                <span id="regtext">Sign Up</span>
            </a>
        </div>
    </header>
    <main>
        <div id="container">
            <h1>Account created !</h1>
            <h2>Your account have successfully been created ! You can now <a href="./sign_in.php">Log in</a>!</h2>
        </div>

    </main>
    <?php
    include '../../assets/templates/footer.html'
    ?>
</body>

</html>
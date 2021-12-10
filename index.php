<?php
require_once './config/config.php';
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
    <link rel="stylesheet" href="./assets/styles/header.css">
    <link rel="stylesheet" href="./assets/styles/footer.css">
    <link rel="stylesheet" href="./assets/styles/anonym.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
    <title>CMDB</title>
</head>

<body>
    <header>
        <div id="logo">
            <span class="material-icons-outlined">
                movie
            </span>
            <span id="textlogo">CMBD</span>
        </div>
        <div id="sign-in">
            <a href="./vues/account/sign_in.php">
                <span class="material-icons-outlined">
                    login
                </span>
                <span id="logtext">Sign In</span>
            </a>
        </div>
        <div id="sign-up">
            <a href="./vues/account/sign_up.php">
                <span class="material-icons-outlined">
                    person_add_alt_1
                </span>
                <span id="regtext">Sign Up</span>
            </a>
        </div>
    </header>
    <main>
        <div id="welcome">
            <h1>Welcome !</h1>
            <p>Welcome to ClemyMovieDataBase or <span id="bold">CMBD</span> for short !</p>
            <p>Here you can browse films, watch their trailers, browse films by gender and much more ! Have a good time exploring all our resources. </p>
            <div id="buttons">
                <a href="./vues/account/sign_in.php" id="sign-in_button">
                    <span class="material-icons-outlined">
                        login
                    </span>
                    Sign in
                </a>
                <a href="./vues/account/sign_up.php" id="sign-up_button">
                    <span class="material-icons-outlined">
                        person_add_alt_1
                    </span>
                    Sign up
                </a>
            </div>
        </div>
    </main>
    <?php
    include './assets/templates/footer.html';
    ?>

</body>

</html>
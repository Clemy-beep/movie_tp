<?php 
session_start();
?>

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
    <?php include '../../assets/templates/header_log.php' ?>

    <main>
        <div id="container">
            <h1>Oh no !</h1>
            <h2>Your list couldn't be created. Please try again later and return to <a href="./user.php">your lists</a>!</h2>
        </div>

    </main>
    <?php
    include '../../assets/templates/footer.html'
    ?>
</body>

</html>
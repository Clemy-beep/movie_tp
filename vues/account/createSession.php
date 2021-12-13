<?php
require_once '../../config/config.php';
session_start();

$token = $_GET['token'];
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>CMDB</title>
</head>

<body>
    <?php include '../../assets/templates/header_an.html' ?>
    <main>
        <div id="container">
            <h1>Creating session...</h1>
            <h2>We are currently setting your session so you can access to awesome functionnalities.</h2>
            <input type="hidden" name="token" id="token" value="<?= $token ?>">

    </main>
    <?php
    include '../../assets/templates/footer.html'
    ?>
  <script src="./createSession.js"></script>
</body>

</html>
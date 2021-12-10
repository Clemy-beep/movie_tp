<?php
session_start();
if (!isset($_SESSION)) header('Location: /index.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="https://img.icons8.com/stickers/100/000000/film-reel.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://img.icons8.com/stickers/100/000000/film-reel.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/styles/header.css">
    <link rel="stylesheet" href="../../assets/styles/logged.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../../assets/styles/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>User Infos</title>
</head>

<body>
    <?php
    include '../../assets/templates/header_log.php';
    ?>
    <main>
        <div class="container">
            <h1><span class="material-icons-outlined">account_circle</span> User informations</h1>

            <div id="userinfos">
                <div id="text">
                    <h2><span class="material-icons-outlined">badge</span> Username</h2>
                    <p><?= $_SESSION['user']['username'] ?></p>
                    <h2><span class="material-icons-outlined">email</span> Email</h2>
                    <p><?= $_SESSION['user']['email'] ?></p>
                    <h2><span class="material-icons-outlined">cake</span> Age</h2>
                    <p><?= $_SESSION['user']['age'] ?> years</p>
                </div>
                <img src="../../assets/img/people_illu.webp" alt="illu">
            </div>
        </div>
        <div class="container">
            <h1><span class="material-icons-outlined">list_alt</span> Your lists</h1>
            <div id="lists"></div>
        </div>
    </main>
    <?php
    include '../../assets/templates/footer.html';
    ?>
    <script src="lists.js"></script>

</body>

</html>
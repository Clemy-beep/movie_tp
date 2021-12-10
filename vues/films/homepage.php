<?php
session_start();
if (!isset($_SESSION)) header('Location: /index.php');
$isMajor = "true";
if ($_SESSION['user']['age'] < 18) $isMajor = "false";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.icons8.com/stickers/100/000000/film-reel.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/styles/header.css">
    <link rel="stylesheet" href="../../assets/styles/logged.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../../assets/styles/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Homepage</title>
</head>

<body>
    <?php include '../../assets/templates/header_log.php' ?>

    <main>
        <input type="hidden" name="major" id="major" value="<?= $isMajor ?>">
        <div class="container" id="today">
            <h1><span class="material-icons-outlined">
                    auto_awesome
                </span>Most popular today</h1>
            <div id="carousel1">
            </div>
        </div>
        <div class="container" id="week">
            <h1><span class="material-icons-outlined">
                    auto_graph
                </span>Most popular this week</h1>
            <div id="carousel2">
            </div>
        </div>
    </main>
    <?php
    include '../../assets/templates/footer.html'
    ?>
</body>
<script src="mostpop.js"></script>


</html>
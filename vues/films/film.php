<?php
session_start();
if (!isset($_SESSION)) header('Location: /index.php');
$isMajor = true;
if ($_SESSION['user']['age'] < 18) $isMajor = false;

$film_id= $_GET['id'];
if(!isset($film_id)){
    header('Location: /vues/films/homepage.php');
}
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
    <link rel="stylesheet" href="../../assets/styles/logged.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../../assets/styles/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Film</title>
</head>
<body>
<header>
        <div id="major" style="display: none;"><?= $isMajor ?></div>
        <div id=movie_id style="display: none;"><?=$film_id?></div>
        <div id="logo">
            <span class="material-icons-outlined">
                movie
            </span>
            <a href="./homepage.php" style="text-decoration: none; color:#625FFF"><span id="textlogo">CMBD</span></a>
        </div>
        <div class="menuitem">
            <a href="#">
                <span class="material-icons-outlined">
                    account_circle
                </span>
                <span class="headertext"><?= $_SESSION['user']['username'] ?></span>
            </a>
        </div>
        <div class="menuitem">
            <a href="#">
                <span class="material-icons-outlined">
                    category
                </span>
                <span class="headertext">Genders</span>
            </a>
        </div>
    </header>
    <main>
        <div class="container">
        <div id="movietitle"></div>

            <div id="movie-infos">
                <div id="movie-specs"></div>
            </div>
        </div>
    </main>
    <?php
    include '../../assets/templates/footer.html'
    ?>
    <script src="getfilm.js"></script>
</body>
</html>

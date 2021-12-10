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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="https://img.icons8.com/stickers/100/000000/film-reel.png">
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
    <?php
    include '../../assets/templates/header_log.php';
    ?>
    <main>
        <div class="container">
            <h1> <span class="material-icons-outlined">manage_search</span>Search a movie</h1>
            <div id="input-icon">
                <input type="hidden" name="major" id="major" value="<?= $isMajor ?>">
                <input type="text" name="query" id="searchbar" onkeyup="setPage()" placeholder="Ex : Hawkeye"><span style="font-size: 24px; color:#3b3947" class="material-icons-outlined">search</span>
            </div>
        </div>
        <div class="container">
            <h1><span class="material-icons-outlined">find_in_page</span> Result of your research</h1>
            <div id="queryResult"></div>
            <div id="pagination">
                <button id="previous"><span class="material-icons-outlined">arrow_left</span>Previous Page</button>
                <div id="marks"></div>
                <button id="next">Next Page<span class="material-icons-outlined">arrow_right</span></button>
            </div>
        </div>
    </main>
    <?php
    include '../../assets/templates/footer.html';
    ?>
    <script src="search.js"></script>
</body>

</html>
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
    <title>Create List</title>
</head>

<body>
    <?php
    include '../../assets/templates/header_log.php';
    ?>
    <main>
        <div class="container">
            <h1><span class="material-icons-outlined">note_add</span> New list</h1>
            <form>
                <input type="hidden" name="session_id" id="session_id" value="<?=$_SESSION['user']['sessionID'] ?>">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
                <label for="description">Description</label>
                <input type="text" name="description" id="description" required>
                <input type="submit" name="createList" id="createList" value="Create list">
            </form>
        </div>

    </main>
    <?php
    include '../../assets/templates/footer.html';
    ?>
    <script src="createList.js"></script>

</body>

</html>
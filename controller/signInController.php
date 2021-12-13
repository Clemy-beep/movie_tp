<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <?php
    require_once '../config/config.php';
    require_once '../models/signInModel.php';

    if (isset($_POST['email'], $_POST['password'])) {
        $isValid = checkLogin(
            $_POST['email'],
            $_POST['password']
        );
        if (!$isValid['exist']) {
            echo '
            <script>
                $.ajax({
                    type: "GET",
                    url: "https://api.themoviedb.org/3/authentication/token/new?api_key=a1204f7b9fa1c61fcda4e1f2ebc1553c",
                    dataType: "JSON",
                    success: function(response) {
                        window.location.replace(`https://www.themoviedb.org/authenticate/${response.request_token}?redirect_to=http://localhost/vues/account/createSession.php?token=${response.request_token}`);
                    }
                });
            </script>';
        } else header("Location:/vues/account/no_user.php");
    }

    ?>
</body>

</html>
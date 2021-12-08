<?php
require_once '../config/config.php';
require_once '../models/signInModel.php';

if(isset($_POST['email'], $_POST['password'])){
    $isValid=checkLogin(
        $_POST['email'],
        $_POST['password']
    );
    if($isValid['exist']){
        header("Location: /vues/account/no_user.php");
    }
    else {
        header('Location: /vues/films/homepage.php');
    }
}
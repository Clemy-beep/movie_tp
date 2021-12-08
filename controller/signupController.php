<?php

require_once '../config/config.php';
require_once '../models/signUpModel.php';

if (isset($_POST['username'], $_POST['email'], $_POST['age'], $_POST['password'])) {
    $isValid = checkSignUp($_POST['username'], $_POST['email'], $_POST['age'], $_POST['password']);

    if ($isValid['exist']) {
        header('Location: /vues/account/sign_up_error.php');
       
    } else header('Location: /vues/account/sign_up_success.php');
} 

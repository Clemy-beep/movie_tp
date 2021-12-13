<?php
require_once("../config/config.php");

$error = [
    "message" => "",
    "exist" => false
];

function checkLogin($email, $password)
{
    global $error;
    $email =  htmlspecialchars(strip_tags($email));
    $password =  htmlspecialchars(strip_tags($password));

    if (empty($email) || empty($password)) {
        $error["message"] = "Veuillez remplir tous les champs. Merci ! </br>";
        $error["exist"] = true;

        return $error;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error["message"] .= "Saisissez un adresse email valide";
        $error["exist"] = true;

        return $error;
    }

    getPasswordUser($email, $password);

    return $error;
}

function getPasswordUser($email, $password)
{
    global $connexion;
    global $error;

    $query = $connexion->prepare("SELECT *  FROM `users` WHERE email=:email;");
    $response = $query->execute(["email" => $email]);
    if (!$response) {
        $error["message"] = "No account found.";
        $error["exist"] = true;
        return $error;
    }

    $aDatas = $query->fetchAll();


    verifyPassword($aDatas, $password);

    return $error;
}

function verifyPassword($aDatas, $password)
{
    global $error;
    $aDatas = $aDatas[0];

    if (!isset($aDatas['pwd'])) {
        $error["message"] = "No user found.";
        $error["exist"] = true;

        return $error;
    }

    $passwordVerified = password_verify($password, $aDatas['pwd']);

    if (!$passwordVerified) {
        $error["message"] = "Wrong password.";
        $error["exist"] = true;

        return $error;
    }
    createSession($aDatas);
}

function createSession($aDatas)
{
    session_start();
    $_SESSION['user']['username'] = $aDatas['username'];
    $_SESSION['user']['email'] = $aDatas['email'];
    $_SESSION['user']['password'] = $aDatas['pwd'];
    $_SESSION['user']['id'] = $aDatas['user_id'];
    $_SESSION['user']['age'] = $aDatas['age'];
}
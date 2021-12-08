<?php

require_once '../config/config.php';

if (!isset($_SERVER["HTTP_REFERER"])) {
    die("access restricted");
}

if (!$_SERVER["HTTP_REFERER"] === "AccountController.php") {
    die("access restricted");
}

$error = [
    "message" => "",
    "exist" => false
];

function checkSignUp($username, $email, $age, $password)
{

    global $error;

    $username = htmlspecialchars(strip_tags($username));
    $email = htmlspecialchars(strip_tags($email));
    $age = htmlspecialchars(strip_tags($age));
    $password = htmlspecialchars(strip_tags($password));

    if (
        empty($username) || empty($password) || empty($email) || empty($age)
    ) {
        $error["message"] .= "Veuillez remplir tous les champs. Merci ! </br>";
        $error["exist"] = true;

        return $error;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error["message"] .= "Saisissez un adresse email valide";
        $error["exist"] = true;
        echo $email;
        die();
        return $error;
    }

    verifyEmail($email);
    verifyUsername($username);

    $password = passwordHash($password);

    if (!$error['exist'])    
        addUser($username, $email, $age, $password);


    return $error;
}

function verifyEmail($email)
{
    global $connexion;
    global $error;

    $query = $connexion->prepare("SELECT * FROM `users` WHERE `email` = :email");
    $query->execute(["email" => $email]);
    $datas = $query->fetchAll();

    if (!empty($datas)) {
        $error['message'] = "Email already exists";
        $error['exist'] = true;

        return $error;
    }
}

function verifyUsername($username)
{
    global $connexion;
    global $error;

    $query = $connexion->prepare("SELECT * FROM `users` WHERE `username` = :username");
    $query->execute(["username" => $username]);
    $datas = $query->fetchAll();

    if (!empty($datas)) {
        $error['message'] = "User already exists";
        $error['exist'] = true;

        return $error;
    }
}

function passwordHash($password)
{
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    return $hash_password;
}

function addUser($username, $email, $age, $password)
{
    global $connexion;
    global $error;

    $query = $connexion->prepare("INSERT INTO `users`(`username`,`email`, `age`,`pwd`)  VALUES (:username, :email, :age, :pwd)");
    $response = $query->execute(["username" => $username, "age" => $age, "pwd" => $password,  "email" => $email]);
    if (!$response) {
        $error["message"] = "Une erreur s'est produite durant l'insertion";
        $error["exist"] = true;

        return $error;
    }
}

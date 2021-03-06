<?php
    require_once 'dotenv.php';

    /**
     * Config
     * Author: Agence Surf
     */

    // $protocol = 'https';

    // $host= $protocol . '://' . $_SERVER['SERVER_NAME'];

    (new DotEnv())->load();
    // echo getenv('APP_ENV');
    // dev
    // echo getenv('DATABASE_DNS');

    $host = getenv('APP_HOST');
    $db   = getenv('APP_BDD');
    $user = getenv('APP_USER');
    $password='';
    $port = getenv('APP_PORT');
    $charset = getenv('APP_CHARSET');


    $options = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

    try {
        $connexion = new \PDO($dsn, $user, $password, $options);
    } catch (\PDOException $e) {
            $u = $e->getMessage();
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }


?>

 <!-- github token : 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 -->


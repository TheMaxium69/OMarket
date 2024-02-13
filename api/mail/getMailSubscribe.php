<?php

var_dump($_POST);



    $dsn = 'mysql:dbname=subscribe_mail;host=127.0.0.1;charset=utf8mb4';
    $user = 'maxime';
    $password = 'maxime';

    try {
        $pdo = new PDO ($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée :' . $e->getMessage();
    }

    if (isset($_POST['email'])) {
        $email = $_POST['email'];

    }

    INSERT INTO email (email) VALUES (email)




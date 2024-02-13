<?php

include "db.php";
require "../../app/env.php";
var_dump($_POST);
var_dump($_GET);

if (!empty($_POST['email'])){

    // bloqué l'injection
    $emailPro = protectedString($_POST['email']);

    // envoyé a la db
    $requeteEnvoie = $db->prepare("INSERT INTO `subscribe` (`email`) VALUES (:email); ");
    $requeteEnvoie->execute([
        ":email" => $emailPro
    ]);


    //rediriger l'utilisateur sur sa page
    if (!empty($_GET['page'])){
            $pageId = $_GET['page'];
            header("location: ../../" . $env_page[$pageId] . "?notif=true#footer");
    } else {
            header("location: ../../?notif=true#footer");
    }




}

function protectedString($variable){

    $variableProtected = "*" . $variable . "*";

    return $variableProtected;
}



//
//    $dsn = 'mysql:dbname=subscribe_mail;host=127.0.0.1;charset=utf8mb4';
//    $user = 'maxime';
//    $password = 'maxime';
//
//    try {
//        $pdo = new PDO ($dsn, $user, $password);
//    } catch (PDOException $e) {
//        echo 'Connexion échouée :' . $e->getMessage();
//    }
//
//    if (isset($_POST['email'])) {
//        $email = $_POST['email'];
//
//    }
//
//    INSERT INTO email (email) VALUES (email)
//
//


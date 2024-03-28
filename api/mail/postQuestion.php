<?php


function addQuestion($sessionQuestion){


    include "db.php";

//    var_dump($sessionQuestion);


    $email = $sessionQuestion['q1'];
    $json = json_encode($sessionQuestion);


    $requeteEnvoie = $db->prepare("INSERT INTO `question` (`email`, `question`) VALUES (:email, :question); ");
    $requeteEnvoie->execute([
        ":email" => $email,
        ":question" => $json
    ]);


    header("location: https://localhost/5-persona1");

}
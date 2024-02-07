<?php

//PROD or DEV
$APP_ENV = "PROD";
$ENV_LANG = "fr"; // fr or en


//Variable Share

$env_urlFile = "./extension/";
$env_urlLogo = "https://getbootstrap.com/docs/4.6/assets/img/favicons/favicon-32x32.png";

// Formulaire

$env_question = [


    // Premier question
    1 => [

        "fr" => [
            "question" => "Tout d'abord, quel est votre nom ?",
            "sub_question" => "En cochant cette case, j'accepte que les données personnelles fournies à Ø Market soient traitées pour créer ma liste de courses personnalisée.",
            "select" => [
                "Oui",
                "Non"
            ],
            "reponse" => "",
        ],

        "en" => [
            "question" => "",
            "sub_question" => "",
            "select" => [
                "Yes",
                "No"
            ],
            "reponse" => "",
        ],

        "type" => "selector",
    ],


    // Deuxieme question
    2 => [
        "fr" => [
            "question" => "",
            "select" => [],
            "reponse" => "",
        ],

        "en" => [
            "question" => "",
            "select" => [],
            "reponse" => "",
        ],

        "type" => "selector",
    ],

    // troisieme question
    3 => [
        "fr" => [
            "question" => "",
            "champ" => "",
            "reponse" => "",
        ],

        "en" => [
            "question" => "",
            "champ" => "",
            "reponse" => "",
        ],

        "type" => "champ",
    ],


];
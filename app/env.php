<?php

//PROD or DEV
$APP_ENV = "PROD";
$ENV_LANG = "fr"; // fr or en


//Variable Share

$env_urlFile = "./extension/";
$env_urlLogo = "assets/DA/onglet.png";
$env_urlPrestashop = "https://localhost/";

// Page

$env_page = [

    "1" => "index.php",
    "2" => "article.php",
    "3" => "form.php",
    "4" => "about.php",
    "5" => "contact.php",
    "7" => "term.php",


];

// Formulaire

$env_question = [


    // Mail
    1 => [

        "fr" => [
            "question" => "Tout d'abord, quel est votre email ?",
            "sub_question" => "En cochant cette case, j'accepte que les données personnelles fournies à Ø Market soient traitées pour créer ma liste de courses personnalisée.",
            "champ" => "Entrez votre mail",
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

        "type" => "champ",
    ],

    2 => [

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
    3 => [
        "fr" => [
            "question" => "Quel est votre régime alimentaire préféré ?",
            "select" => [
                "Omnivore",
                "Végétarien",
                "Végétalien ",
                "Pesco-végétarien",
                "Protéiné ",
                "Sans gluten",
                "Sans produits laitiers",
                "Sans sucre ajouté",
                "Flexitarien"
            ],
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
    4 => [
        "fr" => [
            "question" => "Quel âge avez-vous ?",
            "champ" => "Entrez votre âge",
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


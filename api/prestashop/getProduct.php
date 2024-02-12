<?php


function getProductAll(){

    include "db.php";

    $productAll = [];


//    RECUPERE LA TABLE PRODUCT LANG

    $requeteRecup = $db->prepare("SELECT * FROM `ps_product_lang` ");
    $requeteRecup->execute();
    $resultRecup = $requeteRecup->fetchAll();

    foreach ($resultRecup as $productLang){

        $productAll[$productLang['id_product']] = [
            "id" => $productLang['id_product'],
            "link" => $productLang['link_rewrite'],
            "name" => $productLang['name'],
        ];

    }

//    RECUPERE LA TABLE PRODUCT BASE

    $requeteRecup2 = $db->prepare("SELECT * FROM `ps_product` ");
    $requeteRecup2->execute();
    $resultRecup2 = $requeteRecup2->fetchAll();


    foreach ($resultRecup2 as $productBase){

        $productAll[$productBase['id_product']]['price'] = $productBase['price'];
        $productAll[$productBase['id_product']]['active'] = $productBase['active'];

    }

//    RETURN

    return $productAll;

}


var_dump(getProductAll());
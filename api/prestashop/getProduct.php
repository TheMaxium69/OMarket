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

        $productAll[$productBase['id_product']]['priceHT'] = $productBase['price'];
        $productAll[$productBase['id_product']]['taxe'] = $productBase['id_tax_rules_group'];
        $productAll[$productBase['id_product']]['active'] = $productBase['active'];

    }

//    RECUPERE LA TABLE PRODUCT BASE

    $requeteRecup3 = $db->prepare("SELECT * FROM `ps_layered_price_index` ");
    $requeteRecup3->execute();
    $resultRecup3 = $requeteRecup3->fetchAll();

    foreach ($resultRecup3 as $productPrice){

        $productAll[$productPrice['id_product']]['priceTTC'] = $productPrice['price_max'];

    }


//    RETURN
    return $productAll;

}

function getProductImage($idProduct){
    include "db.php";

    $imageID = "";

    $requeteImage = $db->prepare("SELECT * FROM `ps_image` WHERE `id_product` = :id ");
    $requeteImage->execute([
        ":id" => $idProduct
    ]);
    $resultImage = $requeteImage->fetchAll();

    foreach ($resultImage as $image){
        if ($image['cover'] == "1"){
            $imageID = $image['id_image'];
        }
    }

    return $imageID;

}
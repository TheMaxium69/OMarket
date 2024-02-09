<?php include "app/app.php"; $page = 3; head($page); ?>
<body id="formBody">

<header>

    <?php /*navbar($page); */?>
    <img onclick="window.location.href = '.';" src="assets/DA/logoOMARKET.png">

    <div class="closeForm">
        <i class="fa-solid fa-xmark"></i>
    </div>

</header>


<?php

/*
 *
 * REDIRECTION ET CHARGEMENT DE QUESTION
 *
 */

$totalQuestion = count($env_question);

if (!empty($_GET['q'])){

    $nbQuestion = $_GET['q'];

} else if (!empty($_POST['goQuestion'])){


    if ($_POST['goQuestion'] > $totalQuestion){

        $_SESSION["reponseFormulaire"]['final'] = true;
        $nbQuestion = $_POST['goQuestion'];

    } else {

        $nbQuestion = $_POST['goQuestion'];

    }

} else {

    $nbQuestion = "1";

}

$_POST['hereQuestion'] = $nbQuestion;
//var_dump($_POST);


/*
 *
 * ENREGISTREMENT DE DONNER
 *
 */

if ($nbQuestion !== "1" && $nbQuestion <= $totalQuestion) {

    // Recuperation de la response a la question precedente
    $oldQuestion = $nbQuestion-1;
    $reponseDonner = $_POST['q'.$oldQuestion];

    // Recuperation des anciennes reponses
    $SESSSION_FORM = $_SESSION["reponseFormulaire"];

    //Création du nouveaux tableau
    $SESSSION_FORM['q'.$oldQuestion] =  $reponseDonner;

    //Set le nouveau tableau dans sesssion
    $_SESSION["reponseFormulaire"] = $SESSSION_FORM;

} else if(!empty($_SESSION["reponseFormulaire"]['final'])) {


    // Recuperation de la response a la question precedente
    $oldQuestion = $nbQuestion-1;
    $reponseDonner = $_POST['q'.$oldQuestion];

    // Recuperation des anciennes reponses
    $SESSSION_FORM = $_SESSION["reponseFormulaire"];

    //Création du nouveaux tableau
    $SESSSION_FORM['q'.$oldQuestion] =  $reponseDonner;

    //Set le nouveau tableau dans sesssion
    $_SESSION["reponseFormulaire"] = $SESSSION_FORM;



    //FINAL
    $nbFinalTemp = 0;
    if (!empty($_SESSION["reponseFormulaireFinal"]['finalCount'])){

        $nbFinalTemp = $_SESSION["reponseFormulaireFinal"]['finalCount'];
        $_SESSION["reponseFormulaireFinal"] = $_SESSION["reponseFormulaire"];
        $_SESSION["reponseFormulaireFinal"]['finalCount'] = $nbFinalTemp+1;

    } else {

        $_SESSION["reponseFormulaireFinal"] = $_SESSION["reponseFormulaire"];
        $_SESSION["reponseFormulaireFinal"]['finalCount'] = 1;
    }
    $_SESSION["reponseFormulaire"] = [];

}  else {

    $_SESSION["reponseFormulaire"] = [];

}

//var_dump($_SESSION["reponseFormulaire"]);
//var_dump($_SESSION["reponseFormulaireFinal"]);
?>

<?php if (empty($_POST['goQuestion']) || $_POST['goQuestion'] <= $totalQuestion){ ?>
<main id="form">
    <form action="form.php" method="POST">


        <input type="hidden" >

<!--    QUESTION     -->
        <div class="row">
            <prefix><?= $nbQuestion ?><i class="fa-solid fa-arrow-right"></i></prefix>
            <h1><?= $env_question[$nbQuestion][$ENV_LANG]["question"] ?> </h1>
        </div>

<!--    SUB QUESTION    -->
        <?php if (!empty($env_question[$nbQuestion][$ENV_LANG]["sub_question"])){ ?>
            <h6><?= $env_question[$nbQuestion][$ENV_LANG]["sub_question"] ?></h6>
        <?php } ?>

<!--  REPONSE POSSIBLE  -->
        <?php if ($env_question[$nbQuestion]["type"] == "selector") { ?>

            <div class="question-radio">

                <?php
                $index = 0;
                foreach ($env_question[$nbQuestion][$ENV_LANG]["select"] as $selectOne) { $index = $index+1; ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q<?= $nbQuestion ?>" id="flexRadioDefault1" value="<?= $index ?>">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <?= $selectOne ?>
                        </label>
                    </div>

                <?php } ?>

            </div>


        <?php } else if ($env_question[$nbQuestion]["type"] == "champ") { ?>

            <div class="question-champ">

                <input class="champ" type="text" name="q<?= $nbQuestion ?>" placeholder="<?= $env_question[$nbQuestion][$ENV_LANG]["champ"] ?>">

            </div>

        <?php } ?>

<!--  BUTTOM VALIDATION  -->


    <div class="footer-form row">


        <?php if($nbQuestion-1 !== 0){ ?>

            <button type="submit" name="goQuestion" value="<?= $nbQuestion - 1 ?>" class="footer-form-left btn btn-danger ">
                <i class="fa-solid fa-circle-chevron-left"></i> Précédent
            </button>
        <?php } else { ?>

            <button class="footer-form-left btn btn-danger desactive">
                <i class="fa-solid fa-circle-xmark"></i> Précédent
            </button>

        <?php } ?>

            <h2><?= $nbQuestion ?> / <?= $totalQuestion ?></h2>

        <?php if($nbQuestion+1 <= $totalQuestion){ ?>

            <button type="submit" name="goQuestion" value="<?= $nbQuestion + 1 ?>" class="footer-form-right btn btn-danger">
                Suivant <i class="fa-solid fa-circle-chevron-right"></i>
            </button>
        <?php } else { ?>

            <button type="submit" name="goQuestion" value="<?= $nbQuestion + 1 ?>" class="footer-form-right btn btn-danger">
                Finish <i class="fa-solid fa-circle-chevron-right"></i>
            </button>

        <?php } ?>

    </div>

</form>
<?php } else { ?>

    <div class="row">
        <h1>Final </h1>
    </div>

<?php } ?>

</main>

<style>






    #formBody {
        background-color: #f6f2e8;
        width: 100%;
        height: 100%;
    }

    #formBody header img{
        width: 235px;
        margin: 20px;
    }

    #form{
        /*padding-left: 18%;*/
        /*padding-top: 14%;*/
        width: 60%;
        /*margin-top: calc(20% - 110px);*/margin-top: 16vh; 
        margin-right: 20%;
        /*margin-bottom: calc(20% - 110px);*/
        margin-left: 20%;
    }

    /*Question*/
    #formBody h1{

        font-weight: bold;
        text-align: left;

    }


    #formBody prefix {
        font-size: 19px;
        margin-left: -32px;
        margin-top: 16px;
        margin-right: 13px;
    }
    #formBody prefix i{
        margin-left: 5px;
        font-size: 15px;
        color: red;
    }

    #formBody input.champ{
        width: 100%;
        border: none;
        border-bottom: 2px solid #000000;
        padding-left: 13px;
        padding-bottom: 15px;
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
        transition: border 0s;
        background: transparent;
        color: #000000;
        margin-top: 70px;
        margin-right: 0px;
        margin-bottom: 70px;
        margin-left: 0px;
        margin-left: 10px;
    }

    #formBody input.champ:focus{
        border-bottom: 4px solid #000000;
    }

    #formBody .question-radio{
        padding: 5px 0px;

    }

    #formBody .form-check {
        display: flex;
        align-items: center;
        margin: 10px;
        border-bottom: 4px solid black;
        padding-bottom: 18px;
        padding-top: 30px;
        /*width: 80%;*/
    }

    #formBody .form-check-input {
        width: 30px;
        height: 30px;
    }

    #formBody .form-check-label {
        font-size: 27px;
        margin-left: 27px;
    }

    #formBody .form-check-input:checked {

        accent-color: #ff0024 !important;
    }

    #formBody .footer-form{
        /*background-color: red;*/
        /*position: absolute;*/
        height: 182px;
        width: 100%;
        bottom: 0;
        left: 0;
    }

    #formBody .footer-form button{
        margin: auto 88px;
        background-color: red;
        border-color: red;
        border-radius: 10px;
    }

    #formBody .footer-form button.desactive{
        background-color: #ff000026!important;
        border-color: rgba(255, 0, 0, 0) !important;
    }

    #formBody .footer-form h2{
        margin: auto;
    }

    #formBody .closeForm{

        position: absolute;
        top: 2%;
        right: 2%;
        font-size: 30px;

    }




</style>

</body> </html>
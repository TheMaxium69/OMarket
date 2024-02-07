<?php include "app/app.php"; $page = 3; head($page); ?>
<body id="formBody">

<!--<header> --><?php //navbar($page); ?><!-- </header>-->

<main id="form">


    <?php if (empty($_GET['q'])){ ?>

        <h1>1) <?= $env_question[1][$ENV_LANG]["question"] ?> </h1>
        <small><?= $env_question[1][$ENV_LANG]["sub_question"] ?></small>

    <?php } else {

        $nbQuestion = $_GET['q'];

    ?>


<!--    QUESTION        -->
        <h1><?= $nbQuestion ?>) <?= $env_question[$nbQuestion][$ENV_LANG]["question"] ?> </h1>

<!--    SUB QUESTION    -->
        <?php if (!empty($env_question[$nbQuestion][$ENV_LANG]["sub_question"])){ ?>
            <small><?= $env_question[$nbQuestion][$ENV_LANG]["sub_question"] ?></small>
        <?php } ?>






    <?php } ?>



</main>

<style>

    #formBody {
        background-color: #f6f2e8;
        width: 100%;
        height: 100%;
    }

    #form{
        padding-left: 16%;
        padding-top: 20%;
    }

    /*Question*/
    #formBody h1{

        font-weight: bold;
        text-align: left;

    }



</style>

</body> </html>
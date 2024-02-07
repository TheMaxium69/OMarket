<?php include "app/app.php"; $page = 3; head($page); ?>
<body id="formBody">

<header>

    <?php /*navbar($page); */?>
    <img src="assets/DA/logoOMARKET.png">

</header>

<main id="form">

    <?php if (empty($_GET['q'])){ ?>

        <h1>1) <?= $env_question[1][$ENV_LANG]["question"] ?> </h1>
        <h6><?= $env_question[1][$ENV_LANG]["sub_question"] ?></h6>

    <?php } else {

        $nbQuestion = $_GET['q'];

    ?>


<!--    QUESTION        -->
        <h1><?= $nbQuestion ?>) <?= $env_question[$nbQuestion][$ENV_LANG]["question"] ?> </h1>

<!--    SUB QUESTION    -->
        <?php if (!empty($env_question[$nbQuestion][$ENV_LANG]["sub_question"])){ ?>
            <h6><?= $env_question[$nbQuestion][$ENV_LANG]["sub_question"] ?></h6>
        <?php } ?>

<!--  REPONSE POSSIBLE  -->
        <?php if ($env_question[$nbQuestion]["type"] == "selector") { ?>







        <?php } else if ($env_question[$nbQuestion]["type"] == "champ") { ?>





        <?php } ?>











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
        padding-left: 18%;
        padding-top: 14%;
    }

    /*Question*/
    #formBody h1{

        font-weight: bold;
        text-align: left;

    }



</style>

</body> </html>
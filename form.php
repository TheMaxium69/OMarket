<?php include "app/app.php"; $page = 3; head($page); ?>
<body id="formBody">

<header>

    <?php /*navbar($page); */?>
    <img src="assets/DA/logoOMARKET.png">

</header>

<main id="form">

    <?php if (empty($_GET['q'])){

        $nbQuestion = "1";

    } else {

        $nbQuestion = $_GET['q'];

    }

    ?>


<!--    QUESTION        -->
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

                <?php foreach ($env_question[$nbQuestion][$ENV_LANG]["select"] as $selectOne) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q<?= $nbQuestion ?>" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <?= $selectOne ?>
                        </label>
                    </div>

                <?php } ?>

            </div>


        <?php } else if ($env_question[$nbQuestion]["type"] == "champ") { ?>

            <div class="question-champ">

                <input class="champ" type="text" placeholder="<?= $env_question[$nbQuestion][$ENV_LANG]["champ"] ?>">

            </div>

        <?php } ?>

<!--  BUTTOM VALIDATIOn  -->


    <div style="background-color: red">





    </div>






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


    #formBody prefix {
        font-size: 19px;
        margin-left: -32px;
        margin-top: 16px;
        margin-right: 13px;
    }
    #formBody prefix i{
        margin-left: 5px;
        font-size: 15px;
    }

    #formBody input.champ{
        width: 80%;
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
        width: 80%;
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

        accent-color: #000000 !important;
    }





</style>

</body> </html>
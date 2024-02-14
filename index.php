<?php include "app/app.php"; $page = 1; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main id="home">

    <div class="container-fluid p-0 m-0 illustration"></div>

    <?php howItWorks(); ?>
    <?php aboutomarket(); ?>
    <?php FAQ(); ?>

</main>

<?php footer($page); ?>

</body>
</html>
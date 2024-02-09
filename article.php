<?php include "app/app.php"; $page = 2; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main id="article">

    <div class="container-fluid p-0 m-0"></div>

    <?php articleCard(); ?>

    <?php aboutomarket(); ?>

    <?php FAQ(); ?>

</main>

<?php  footer(); ?>

</body> </html>
<?php include "app/app.php"; $page = 1; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main id="home">

    <div class="container-fluid p-0 m-0" class="container-image-vitrine">
        <img src="./assets/DA/vitrine-resize.png" class="img-fluid" alt="image vitrine">
    </div>

    <?php howItWorks(); ?>
    <?php aboutomarket(); ?>
    <?php FAQ(); ?>

</main>

<?php  footer(); ?>

</body> </html>
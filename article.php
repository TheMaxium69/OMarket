<?php include "app/app.php"; $page = 2; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main id="article">

<div class="container-fluid p-0 m-0"></div>

<div class="container searchbar">              
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="border mb-3">
                <form action="">
                    <input type="text" placeholder="Rechercher votre produit">
                    <button type="submit" id="searchbar-button">
                        <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

    <?php articleCard(); ?>

    <?php aboutomarket(); ?>

    <?php FAQ(); ?>

</main>

<?php  footer(); ?>

</body> </html>
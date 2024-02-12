<?php include "app/app.php"; $page = 2; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main id="article">

<div class="container-fluid p-0 m-0"></div>

<div class="container searchbar">              
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="mb-3">
                <form action="">
                    <input type="text" placeholder="Rechercher votre produit" id="searchbar">
                    <button type="submit" id="searchbar-button">
                        <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

    <?php articleCard(); ?>
<div class="viewmore">
    <div class="row justify-content-center button-container">
        <div class="colspan-6" id="button-view">
            <button onclick="window.location.href = '';">View more</button>
        </div>
    </div>
</div>

    <?php aboutomarket(); ?>

    <?php FAQ(); ?>

</main>

<?php  footer(); ?>
<script src="javascript/search.js"></script>
</body> </html>
<?php require('./components/header.php'); ?>

<body class="composition">

    <div id="page-content">

        <section id="main" class="main">
            <?php require('./components/internal_menu.php'); ?>
        </section>

        <section class="composition-content wrapper">
            <h2 class="composition__title page-title">COMPOSIÇÃO DO SUPERVITA KIDS</h2>

            <h3 class="composition__description">Informação nutricional do Supervita Kids</h3>

            <div class="composition__content">
                <div class="composition__image-div">
                    <img src="/images/composition-product.png" alt="" class="composition__image">
                </div>

                <div class="composition__table-div">
                <img src="/images/composition.png" alt="" class="composition__table">  </div>
            </div>
        </section>

        <?php require('./components/offer.php'); ?>
    </div>
    
    <?php require('./components/footer.php'); ?>
</body>
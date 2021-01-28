<?php require('./components/header_upsell.php'); ?>

<body class="upsell">

    <div id="page-content">

        <section id="main" class="main">
            <?php //require('./components/internal_menu.php'); ?>
        </section>

        <section class="upsell-content wrapper">
        <h2 class="upsell__title">PARABÉNS PELA COMPRA DO SEU PRODUTO!</h2>       
        </section>

        <?php
    $currentRelease = [];
    $arrayRelease = [
      [
        'url' => '08cbba8c5168676b74a63c2a30383723',
        'image_url' => '/images/kit-3.png',
        'price' => '52',
        'price_cents' => '20',
        'selling_champion' => true,
        'off' => false,
        'free_freight' => true,
        'ammount' => 3,
        'total' => 'De: <span class="striked">434,10</span class="striked"> Por: 313,20'
      ]
    ];
  ?>


    <section id="release" class="release">
        <h2 class="release__title">Você Acabou de <span class="bold purple">Ganhar MAIS 10% de Desconto</span> na compra do pacote adicional de SuperVita Kids C, D e Zinco!</h2>

        <div class="wrapper column__container">
        <div class="column"> </div>
        <?php foreach($arrayRelease as $currentRelease) :  ?>
        
        <div class="column">
            <span class="column__title">Compre mais <?= $currentRelease['ammount'] == 1 ? $currentRelease['ammount']. ' mês': $currentRelease['ammount']. ' meses'?> de SuperVita Kids</span>
            <div class="column__card">
            <?php if($currentRelease['selling_champion']) : ?>
                <span class="column__subtitle">MAIS PEDIDO</span>
            <?php endif; ?>

            <?php if($currentRelease['free_freight']) : ?>
                <span class="column__freight">
                <span class="column__freight-text">FRETE GRÁTIS</span>
                </span>
            <?php endif; ?>

            <div class="column__image-div">
                <img src="<?= $currentRelease['image_url'] ?>" alt="" class="column__image">

                <?php if($currentRelease['off'] != false) : ?>
                <div class="discount__badge">
                    <span class="discount__row discount__value">21<span class="small">%</span></span>
                    <span class="discount__row discount__text">OFF</span>
                </div>
                <?php endif; ?>
            </div>
            <div class="column__data-row">
                <div class="column__data column__data--parcels-div">
                <span class="column__data--parcels">
                    <span class="bold"><span class="big">6</span>X</span> SEM JUROS DE</span></div>
                <div class="column__data">
                <span class="column__data--value">
                    <span class="column__data--cypher">R$</span><?= $currentRelease['price'] ?></span><span class="column__data--cents">,<?= $currentRelease['price_cents'] ?></span>
                </div>
            </div>

            <span class="column__total"><?= $currentRelease['total'] ?></span>

            <a href="#monetizzeCompra" data-upsell="<?= $currentRelease['url'] ?>" class="btn  btn-blue column__button">COMPRAR AGORA</a>
            </div>
        </div>

        <?php endforeach; ?>
        <div class="column"> </div>
        </div>
    </section>
    </div>
    <script type="text/javascript" src="https://app.monetizze.com.br/1buyclick.php?u=08cbba8c5168676b74a63c2a30383723"></script>

    <?php require('./components/footer_upsell.php'); ?>
</body>
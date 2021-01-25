<?php require('./components/header.php'); ?>

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
        'url' => 'http://mon.net.br/144hmc',
        'image_url' => '/images/kit-1.png',
        'price' => '24',
        'price_cents' => '12',
        'selling_champion' => false,
        'off' => false,
        'free_freight' => true,
        'ammount' => 1,
        'total' => 'Total: 144,70'
      ],
      [
        'url' => 'http://mon.net.br/144i3g',
        'image_url' => '/images/kit-3.png',
        'price' => '58',
        'price_cents' => '00',
        'selling_champion' => true,
        'off' => false,
        'free_freight' => true,
        'ammount' => 3,
        'total' => 'De: <span class="striked">434,10</span class="striked"> Por: 348,00'
      ],
      [
        'url' => 'http://mon.net.br/144icq',
        'image_url' => '/images/kit-5.png',
        'price' => '101',
        'price_cents' => '92',
        'selling_champion' => false,
        'off' => false,
        'free_freight' => true,
        'ammount' => 5,
        'total' => 'De: <span class="striked">723,50</span class="striked"> Por: 611,50'
      ]
    ];
  ?>


    <section id="release" class="release">
        <h2 class="release__title">Você Acabou de <span class="bold yellow">Ganhar 20% de Desconto</span> em <span class="bold">QUALQUER</span>  pacote adicional de SuperVita Kids!</h2>

        <div class="wrapper column__container">
        
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

            <a href="<?= $currentRelease['url'] ?>" class="btn  btn-blue column__button">COMPRAR AGORA</a>
            </div>
        </div>

        <?php endforeach; ?>

        </div>
    </section>
    </div>
    
    <?php require('./components/footer_upsell.php'); ?>
</body>
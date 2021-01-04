<?php require('./components/header.php'); ?>

<body class="doubts">
    <div id="page-content">
    <section id="main" class="main">
        <?php require('./components/internal_menu.php'); ?>
    </section>

    <section class="doubts wrapper">
        <h2 class="page-title doubts__title">DÚVIDAS FREQUENTES SOBRE SUPERVITA KIDS</h2>

        <h3 class="doubts__description">Tire todas suas dúvidas sobre o Supervita Kids:</h3>

        <div class="doubts__container">
            <?php
                $doubts = [
                    [
                        'title' => 'O que é Supervita Kids?',
                        'description' => 'Supervita Kids é um <strong>polivitamínico feito de pectina (natural)</strong>, possui <strong>10 vitaminas e 4 minerais</strong> que ajudam na complementação da alimentação infantil.'
                    ],

                    [
                        'title' => 'Do que é feito o Supervita Kids?',
                        'description' => 'Supervita Kids é feito de <strong>pectina uma substância natural</strong>, saudável e baseada em plantas, ou seja não contém gelatina animal em sua composição. Estando comprometidos em produzir gomas usando ingredientes da mais alta qualidade nosso produto contém <strong>vitaminas (A, D3, C, E, K, B6, B9, B12, B5, Biotina, Iodo, Selênio, Zinco, Sódio.)</strong>'
                    ],

                    [
                        'title' => 'Quantas gomas ingerir?',
                        'description' => 'Ingerir <strong>duas gomas por dia</strong> proporciona uma complementação das vitaminas e minerais que são importantes para um desenvolvimento saudável para nossas crianças.'
                    ],

                    [
                        'title' => 'Quem pode consumir o Supervita Kids?',
                        'description' => 'Recomendado para <strong>crianças de 2 anos a 10 anos</strong>, adultos podem consumir mais o produto foi desenvolvido para atender as necessidades das crianças na faixa etária mencionada.'
                    ],

                    [
                        'title' => 'Supervita Kids engorda?',
                        'description' => 'Supervita Kids é um polivitamínico infantil formulado para ajudar a complementar as vitaminas e minerais de nossas crianças, apesar de conter açúcar <strong>ele não engorda</strong>, pois possui <strong>28 calorias</strong> em sua dose diária de 2 gomas.'
                    ],

                    [
                        'title' => 'Como posso armazenar o produto?',
                        'description' => 'Armazene as vitaminas Supervita Kids em áreas <strong>mais frias ou em temperatura ambiente</strong>. Mantenha afastado de locais que tenha incidência constante de sol.'
                    ],

                    [
                        'title' => 'Supervita kids causa alergia?',
                        'description' => 'Por questões de regulação técnica da Anvisa e segurança do fabricante, foi inserido no rótulo do <strong>Supervita Kids</strong> (saiba mais), assim como vários outros produtos no mercado, que pode conter: leite, soja e peixe, devido a outros produtos que também são criados na fábrica. Porém não contém nenhum desses ingredientes em nossa fórmula, ele é feito <strong>a base de pectina vegetal</strong>.'
                    ],
                ];

                foreach($doubts as $doubt) {
                    require('./components/doubt_label.php');
                } ?>
        </div>
    </section>
    
    <?php require('./components/offer.php'); ?>

    </div>
    
    <?php require('./components/footer.php'); ?>
    
</body>
</html>
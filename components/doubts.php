<section class="doubts wrapper">
        <h2 class="doubts__title">DÚVIDAS FREQUENTES SOBRE SUPERVITA KIDS</h2>

        <h3 class="doubts__description">Tire todas suas dúvidas sobre o <strong>Supervita Kids C, D e Zinco</strong>:</h3>

        <div class="doubts__container">
            <?php
                $doubts = [
                    [
                        'title' => 'O que é Supervita Kids C, D e Zinco?',
                        'description' => '<strong>Supervita Kids C, D e Zinco</strong> é um suplemento infantil que possui em sua fórmula as vitaminas C e D e o mineral Zinco, que em conjunto atuam para de forma eficaz aumentando a imunidade e protegendo seu filho.'
                    ],

                    [
                        'title' => 'Do que é feito o Supervita Kids C, D e Zinco?',
                        'description' => '<strong>Supervita Kids C, D e Zinco</strong> foi desenvolvido em formato de goma de pectina, ou seja, de origem vegetal, que além de ser saudável, proporciona uma fácil ingestão e absorção dos nutrientes e tem um sabor delicioso. Comprometidos em produzir gomas usando ingredientes da mais alta qualidade Supervita Kids contém vitaminas: C, D3 e o mineral Zinco.'
                    ],

                    [
                        'title' => 'Quantas gomas ingerir?',
                        'description' => '2 (duas) gominhas por dia são o suficiente para que a criança tenha uma complementação eficaz de acordo com a necessidade diária recomendada.'
                    ],

                    [
                        'title' => 'Quem pode consumir o <strong>Supervita Kids C, D e Zinco</strong>?',
                        'description' => 'Recomendado para <strong>crianças de 2 anos a 10 anos</strong>, adultos podem consumir mais o produto foi desenvolvido para atender as necessidades das crianças na faixa etária mencionada.'
                    ],

                    [
                        'title' => '<strong>Supervita Kids C, D e Zinco</strong> engorda?',
                        'description' => '<strong>Supervita Kids C, D e Zinco</strong> é um polivitamínico infantil formulado para ajudar a complementar as vitaminas e minerais de nossas crianças, apesar de conter açúcar <strong>ele não engorda</strong>, pois possui <strong>28 calorias</strong> em sua dose diária de 2 gomas.'
                    ],

                    [
                        'title' => 'Como posso armazenar o produto?',
                        'description' => '<strong>Supervita Kids C, D e Zinco</strong> deve ser conservado em local fresco, fora da geladeira, longe da umidade e da luz solar.'
                    ],

                    [
                        'title' => '<strong>Supervita Kids C, D e Zinco</strong> causa alergia?',
                        'description' => 'Sua fórmula não possui ingredientes alergênicos, porém, por questões de regulação técnica da Anvisa e segurança do fabricante, o produto pode conter resquícios de: leite, soja e peixe, devido a outros produtos que também são criados na fábrica (linha de produção). Apesar de o produto não possuir efeitos colaterais, recomendamos fortemente que crianças com restrições em sua dieta por alguma causa, consultem primeiro o seu médico pediatra antes de consumi-lo.'
                    ],
                    [
                        'title' => 'Quantas gomas vem em cada embalagem?',
                        'description' => 'Cada embalagem possui 60 gomas.'
                    ],
                ];

                foreach($doubts as $doubt) {
                    require('./components/doubt_label.php');
                } ?>
        </div>
    </section>
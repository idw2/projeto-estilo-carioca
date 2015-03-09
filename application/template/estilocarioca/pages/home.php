<?php head(); ?>

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel">
                    <h2>CONHEÇA A ESTILO CARIOCA</h2>
                    <p>Andar para frente é fundamental na vida, traz mudanças, novidades e acompanha evolução. E, como bom carioca, ESTILO CARIOCA não se opõem a esse pensamento, nem tão pouco a evolução. </p>
                    <div class="hr"></div>
                    <p>
                        <a href="" class="btn btn-lg">Compre agora</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo assets('img/hero.png'); ?>" width="500">
            </div>
        </div>
    </div>
    <a href="" data-target=".section" class="scroll-down"></a>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="title">FIQUE POR DENTRO DAS NOVIDADES</h2>
                    <p class="subtitle">Preencha com seu nome e email para receber nossa Newsletter.</p>
                </div>
            </div>
        </div>
        <form action="" method="post" class="ajax-form" novalidate>
            <div class="row">
                <div class="col-sm-4">
                    <input type="text" placeholder="Seu Nome" class="form-control">
                </div>
                <div class="col-sm-4">
                    <input type="email" placeholder="Seu Email" class="form-control">
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-default btn-block">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</section>

<div class="container"><hr></div>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="title">Nossos Produtos</h2>
                    <p class="subtitle">COMPRE AGORA</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php for ($i = 1; $i <= 4; $i++) { ?>
                <div class="col-sm-3">
                    <div class="thumb">
                        <div class="thumb-img">
                            </a>
                            <img src="//placehold.it/400x400" width="312" height="312">
                        </div>
                        <div class="thumb-holder">
                            <div class="thumb-holder-out">
                                <div class="thumb-holder-in">
                                    <h2 class="price">R$ 159,90</h2>
                                    <p class="name">Nilton Santos Regata</p>
                                    <a href="<?php echo link_to('produto'); ?>" class="btn btn-default btn-buy">COMPRAR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php footer(); ?>
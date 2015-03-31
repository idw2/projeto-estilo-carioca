<?php head(); ?>

<section class="section product">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <figure class="product-img">
                    <div class="slider-for product-slider">
                        <div><img src="//placehold.it/500x500"></div>
                        <div><img src="//placehold.it/500x500"></div>
                        <div><img src="//placehold.it/500x500"></div>
                    </div>
                    <div class="slider-nav product-slider-nav">
                        <div><img src="//placehold.it/200x200"></div>
                        <div><img src="//placehold.it/200x200"></div>
                        <div><img src="//placehold.it/200x200"></div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-7">
                <div class="product-infos">
                    <div class="product-infos-row">
                        <h1 class="title">Camisa Junior Rubro Negra 92</h1>
                        <div class="price-rating">
                            <span class="estrelas e-5"></span>
                            <span class="price">R$ 159,00</span>
                        </div>
                    </div>
                    <div class="product-infos-row">
                        <div class="label-top inline-middle">
                            <label>TAMANHO</label>
                            <select name="tamanho" id="tamanho" class="select">
                                <option selected>P - Pequeno</option>
                                <option>M - Médio</option>
                                <option>G - Grande</option>
                                <option>GG - Extra-Grande</option>
                                <option>GGG - Extra-Extra-Grande</option>
                            </select>
                        </div>
                        <div class="label-top inline-middle">
                            <label>QUANTIDADE</label>
                            <select name="tamanho" id="tamanho" class="select">
                                <option selected>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="product-infos-row">
                        <a href="" class="btn btn-default btn-buy btn-block comprar">INCLUIR NO CARRINHO</a>
                    </div>
                    <div class="product-infos-row">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at purus vestibulum, rutrum
                            nunc id, auctor sapien. Duis sed ligula dapibus sem tincidunt dignissim. Nullam pharetra
                            interdum purus, eu lacinia metus finibus ac.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at purus vestibulum, rutrum
                            nunc id, auctor sapien. Duis sed ligula dapibus sem tincidunt dignissim. Nullam pharetra
                            interdum purus, eu lacinia metus finibus ac.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="share">
                    <span>COMPARTILHE:</span>
                    <ul class="list-inline list-social">
                        <li><a href=""><i class="sprite sprite-twitter-2"></i></a></li>
                        <li><a href=""><i class="sprite sprite-facebook-2"></i></a></li>
                        <li><a href=""><i class="sprite sprite-email"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section section-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="title">Produtos Relacionados</h2>
                    <a href="" class="subtitle">VEJA TODOS</a>
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

<div class="section-gray">
    <div class="container">
        <hr>
    </div>
</div>

<?php footer(); ?>
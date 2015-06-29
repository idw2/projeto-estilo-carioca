{include file="header.tpl"}


<!--[if lt IE 9]>
    <script type="text/javascript">
        alert('Atenção: Você está usando um navegador obsoleto!');
    </script>
<![endif]-->

<!-- SLIDER  -->
<!--
<section class="container-slider">
    <div id="slider">
        <ul>

            <li data-transition="fade" data-slotamount="7">
                <img src="{$web_files}/img/slider/slide_03.jpg" alt="-" />
                <div class="caption lfl str" data-x="30" data-hoffset="0" data-y="120" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="{$web_files}/img/slider/slider4/banner-liqui-novo_08.png" alt="-" width="350" />
                </div>
                <div class="caption lfr str" data-x="900" data-hoffset="0" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
                    <img src="{$web_files}/img/slider/slider4/banner-liqui-novo_05.png" alt="-" width="250" />
                </div>
                <div class="caption lft str" data-x="center" data-hoffset="0" data-y="30" data-speed="500" data-start="900" data-easing="easeOutExpo">
                    <img src="{$web_files}/img/slider/slider4/banner-liqui-novo_03.png"  width="350" />
                </div>
            </li>

            <li data-transition="fade" data-slotamount="7">
                <img src="{$web_files}/img/slider/slide_03.jpg" alt="-" />
                <div class="caption lfl str" data-x="30" data-hoffset="0" data-y="110" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="{$web_files}/img/slider/slide_03/img-3.png" alt="-" width="380" />
                </div>
                <div class="caption lfr str" data-x="900" data-hoffset="-80" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
                    <img src="{$web_files}/img/slider/slide_03/img-1.png" alt="-" width="300" />
                </div>
                <div class="caption lft str" data-x="center" data-hoffset="0" data-y="0" data-speed="500" data-start="900" data-easing="easeOutExpo">
                    <img src="{$web_files}/img/slider/slide_03/img-2.png"  width="250" />
                </div>
            </li>

            <li data-transition="fade" data-slotamount="7">
                <img src="{$web_files}/img/slider/slide_03.jpg" alt="-" />
                <div class="caption lfl str" data-x="30" data-hoffset="-30" data-y="0" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="{$web_files}/img/slider/slide_03-item-1.png" alt="-" width="300" />
                </div>
                <div class="caption lfr str" data-x="900" data-hoffset="-30" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
                    <img src="{$web_files}/img/slider/slide_03-item-2.png" alt="-" width="250" />
                </div>
                <div class="caption lft str" data-x="center" data-hoffset="0" data-y="80" data-speed="500" data-start="900" data-easing="easeOutExpo">
                    <img src="{$web_files}/img/slider/slide_03-item-3.png"  width="500" />
                </div>
                <div class="caption lfl str" data-x="center" data-hoffset="-30" data-y="290" data-speed="500" data-start="200" data-easing="easeOutExpo">
                    <img src="{$web_files}/img/slider/slide_03-item-4.png" alt="-" width="800" />
                </div>
            </li>



        </ul>	      
    </div>
</section>
-->
<!-- /SLIDER  -->
<!-- 3 PRODUTOS  -->
<!--
<section class="pag-section hide-mobile">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="{$web_files}/img/b-1.png" alt="" border="0" title="" class="img-responsive" style="width:360px;height:185px;" />
            </div>
            <div class="col-sm-4">
                <img src="{$web_files}/img/slider/banner-menor-central2.jpg" alt="Frete grátis nas compras acima de R$149,00" border="0" title="" class="img-responsive" />
            </div>
            <div class="col-sm-4">
                <img src="{$web_files}/img/b-2.png" alt="" border="0" title="" class="img-responsive" style="width:360px;height:185px;" />
            </div>
        </div>
    </div>
</section>
-->
<!-- /3 PRODUTOS  -->
<!-- RECEM CHEGADOS  -->

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel">
                    <h2>CONHEÇA A ESTILO CARIOCA</h2>
                    <p>Andar para frente é fundamental na vida, traz mudanças, novidades e acompanha evolução. E, como bom carioca, ESTILO CARIOCA não se opõem a esse pensamento, nem tão pouco a evolução. </p>
                    <div class="hr"></div>
                    <p>
                        <a href="/{$language}/nossos-produtos" class="btn btn-lg">Compre agora</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/hero.png" width="500">
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

        <form action="" method="post"  novalidate="" class="ajax-form">
            <div class="row">
                <div class="col-sm-4">
                    <input type="text" placeholder="Seu Nome" name="nome" id="nome_newsletter_2" class="form-control" required>
                </div>
                <div class="col-sm-4">
                    <input type="email" placeholder="Seu Email" name="email" id="email_newsletter_1" class="form-control" required>
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-default btn-block" style="width: 100%; border-radius: 0;">Enviar</button>
                </div>
                <div id="erro_newsletter_1"> </div>
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
            {foreach item=produto from=$arr}
                {if $produto->CODPRODUTO != ""}
                    <div class="col-sm-3">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}">
                                    <img src="{$produto->CROP268}" alt="{$produto->NOME}" title="{$produto->NOME}" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ {$produto->PRECO}</h2>
                                        <p class="name">{$produto->NOME}<br/>
                                            {if $produto->CATEGORIA eq 'junior'}Junior{else}Nilton Santos{/if}
                                        </p>
                                        <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {/if}
            {/foreach}
        </div>
    </div><hr style="margin-top: 5%;">
</section>
<!--
<section class="pag-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>
                        <a href="/{$language}/novos-produtos">
                            <strong>Novos</strong> Produtos
                        </a>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
{foreach item=produto from=$arr}
    {if $produto->CODPRODUTO != ""}
        <div class="col-thumb col-xs-6 col-sm-3">
            <div class="thumbnail">
                <div class="thumbnail-img">
                    <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}">
        {if $produto->IS_NOVO eq "1"}
            <span class="thumbnail-tag">Novo</span>
        {/if}
        <img src="{$produto->CROP268}" alt="{$produto->NOME}" title="{$produto->NOME}"/>
    </a>
</div>
<div class="thumbnail-infos">
    <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}">
        <div class="thumbnail-title">{if $produto->IS_PROMOCAO eq 1}<span class="price-through">R$ {$produto->DE}</span>{/if} R$ {$produto->PRECO}</div>
    </a>
    <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}">
        <div class="thumbnail-subtitle">{$produto->NOME}</div>
    </a>
    
    <span class="seis-vezes"><b>6x</b> de <b>R$ {$produto->PRECO_6}</b></span>
    
        {*<div class="thumbnail-btn">
        <a onclick="javascript:add_checkout_list('{$lista_desejos}{$produto->CODPRODUTO}', '/{$language}/produtos/checkout/', 'Loader_{$produto->CODPRODUTO}')" class="btn btn-light eu-quero" data-id="{$produto->CODPRODUTO}">
        <span>Eu quero</span>
        </a>
        <span class="Loader_{$produto->CODPRODUTO} Load_paralelo hide">
        <img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" width="25" height="25"/>
        </span>
        </div>*}
    </div>
</div>
</div>
    {/if}
{/foreach}
</div>
{*<div class="row">
<div class="col-lg-12">
<ul class="pagination">
<li class="disabled"><a href="#">«</a></li>

{counter assign=i start=1 print=false} 
{foreach item=pgn from=$paginacao}  
{if $acao == "geral"}
{if $compara_paginacao == $pgn}
<li class="active"><a href="/{$language}/categoria/{$acao}/mais_produtos/{$pgn}">{$i}</a></li>
{else}
<li><a href="/{$language}/categoria/{$acao}/mais_produtos/{$pgn}">{$i}</a></li>
{/if}   
{/if}   
{counter}    
{/foreach}
</ul>
</div>
</div>*}
</div>
</section>

<!-- /RECEM CHEGADOS  -->
<!-- MAIS VENDIDOS  -->
<!--
<section class="pag-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>
                        <a href="/{$language}/mais-vendidos">
                            <strong>Mais</strong> Vendidos
                        </a>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">

{foreach item=produto from=$arr_mais_vendidos}
    {if $produto->CODPRODUTO != ""}
        <div class="col-thumb col-xs-6 col-sm-3">
            <div class="thumbnail">
                <div class="thumbnail-img">
                    <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}">
        {if $produto->IS_NOVO eq "1"}
            <span class="thumbnail-tag">Novo</span>
        {/if}
        <img src="{$produto->CROP268}" alt="{$produto->NOME}" border="0" title="{$produto->NOME}" class="img-responsive" width="261" height="289"/>
    </a>
</div>
<div class="thumbnail-infos">
    <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}">
        <div class="thumbnail-title">{if $produto->IS_PROMOCAO eq 1}<span class="price-through">R$ {$produto->DE}</span>{/if} R$ {$produto->PRECO}</div>
    </a>
    <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}">
        <div class="thumbnail-subtitle">{$produto->NOME}</div>
    </a>
    
    <span class="seis-vezes"><b>6x</b> de <b>R$ {$produto->PRECO_6}</b></span>
        {*<div class="thumbnail-btn">
        <a onclick="javascript:add_checkout_list('{$lista_desejos}{$produto->CODPRODUTO}', '/{$language}/produtos/checkout/', 'Loader_{$produto->CODPRODUTO}')" class="btn btn-light eu-quero" data-id="{$produto->CODPRODUTO}">
        <span>Eu quero</span>
        </a>
        <span class="Loader_{$produto->CODPRODUTO} Load_paralelo hide">
        <img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" width="25" height="25"/>
        </span>
        </div>*}
    </div>
</div>
</div>
    {/if}
{/foreach}


</div>
</div>
</section>

<!-- /MAIS VENDIDOS  -->
<!-- EM PROMOCÃO  -->
<!--
<section class="pag-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>
                        <a href="/{$language}/promocoes">
                            <strong>Itens</strong> em Promoção
                        </a>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">

{foreach item=produto from=$arr_promocoes}
    {if $produto->CODPRODUTO != ""}
        <div class="col-thumb col-xs-6 col-sm-3">
            <div class="thumbnail">
                <div class="thumbnail-img">
                    <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}">
        {if $produto->IS_NOVO eq "1"}
            <span class="thumbnail-tag">Novo</span>
        {/if}
        <img src="{$produto->CROP268}" alt="{$produto->NOME}" border="0" title="{$produto->NOME}" class="img-responsive" width="261" height="289"/>
    </a>
</div>
<div class="thumbnail-infos">
    <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}">
        <div class="thumbnail-title">{if $produto->IS_PROMOCAO eq 1}<span class="price-through">R$ {$produto->DE}</span>{/if} R$ {$produto->PRECO}</div>
    </a>
    <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}">
        <div class="thumbnail-subtitle">{$produto->NOME}</div>
    </a>
    
    <span class="seis-vezes"><b>6x</b> de <b>R$ {$produto->PRECO_6}</b></span>
        {*<div class="thumbnail-btn">
        <a onclick="javascript:add_checkout_list('{$lista_desejos}{$produto->CODPRODUTO}', '/{$language}/produtos/checkout/', 'Loader_{$produto->CODPRODUTO}')" class="btn btn-light eu-quero" data-id="{$produto->CODPRODUTO}">
        <span>Eu quero</span>
        </a>
        <span class="Loader_{$produto->CODPRODUTO} Load_paralelo hide">
        <img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" width="25" height="25"/>
        </span>
        </div>*}
    </div>
</div>
</div>
    {/if}
{/foreach}


</div>
</div>
</section>

<!-- /EM PROMOCÃO  -->
<!-- INSTAGRAM  -->
<!--
<section class="pag-section hide-mobile">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                        <a href="#">
                            <strong>Instagram da</strong> Maria
                        </a>
                    </h2>
                </div>

            </div>
        </div>                        
        <div id="instagram" data-type="liked" class="pongstagrm row"></div>  
    </div>
</section>

<!-- /INSTAGRAM  -->

{include file="footer.tpl"}
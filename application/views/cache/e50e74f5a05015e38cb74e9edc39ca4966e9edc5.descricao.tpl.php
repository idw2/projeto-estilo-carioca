<?php /*%%SmartyHeaderCode:2016893693544a643f975a47-37628823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e50e74f5a05015e38cb74e9edc39ca4966e9edc5' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/descricao.tpl',
      1 => 1414161398,
      2 => 'file',
    ),
    '6a0d8cd5da5366cd163c1096d3e3a62591b34250' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/header.tpl',
      1 => 1414160863,
      2 => 'file',
    ),
    'dddb63286e4a273b560ff992665e7d4c506e6fdb' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/navbar.tpl',
      1 => 1414159653,
      2 => 'file',
    ),
    '9c6368fa7ae30d46a3ff6d19316b23707d94dba8' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/footer.tpl',
      1 => 1414159509,
      2 => 'file',
    ),
    '90e90a97284dec988adac3b7318a019a6b5d1ff6' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/atendimento_online.tpl',
      1 => 1412097035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2016893693544a643f975a47-37628823',
  'variables' => 
  array (
    'fotos_full' => 0,
    'i' => 0,
    'fful' => 0,
    'source' => 0,
    'nome' => 0,
    'descricao' => 0,
    'quantidade' => 0,
    'is_promocao' => 0,
    'de' => 0,
    'preco' => 0,
    'lista_desejos' => 0,
    'produto' => 0,
    'FOTO_SM' => 0,
    'language' => 0,
    'site' => 0,
    'ctgr' => 0,
    'url_amigavel' => 0,
    'titulo' => 0,
    'url' => 0,
    'especificacoes' => 0,
    'facebook' => 0,
    'fb_post_url' => 0,
    'promocoes' => 0,
    'promocao' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a643fe80d13_42993615',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a643fe80d13_42993615')) {function content_544a643fe80d13_42993615($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Colares | Colar com pingente de cruz </title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        <meta property="og:title" content="Colar com pingente de cruz  - mariadebarro.com" />        <meta property="og:type" content="product" />        <meta property="og:site_name" content="mariadebarro.com" />        <meta property="og:description" content="Colar dourado com pingente de cruz cravejado com zirc&ocirc;nia.

Dimens&otilde;es: A 3 x L 2 cm" />        <meta property="og:email" content="maria@mariadebarro.com.br"/>        <meta property="og:phone_number" content="21 32835265"/>        <meta property="og:street-address" content="Edifício Global 7000 Offices, Estrada dos Bandeirantes, 7000 - Rio de Janeiro/RJ - CEP: 22780-084, Bloco C Sala 290"/>        <meta property="og:locality" content="Rio de Janeiro"/>        <meta property="og:region" content="Rio de Janeiro — Capital"/>        <meta property="og:country-name" content="Brasil"/>        <meta property="og:postal-code" content="22780-084"/>
        <link rel="icon" type="image/vnd.microsoft.icon" href="/novo/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/novo/web-files/img/favicon.ico"/>

        <link rel="stylesheet" href="/novo/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/novo/web-files/plugins/rs-plugin/css/settings.css"/>
        <link rel="stylesheet" href="/novo/web-files/plugins/flexslider/flexslider.css"/>
        <link rel="stylesheet" href="/novo/web-files/plugins/fancybox/jquery.fancybox.css"/>
        <link rel="stylesheet" href="/novo/web-files/pongstagr.am-master/source/pongstagr.am.css"/>		
        <link rel="stylesheet" href="/web-files/css/plugins/magnific-popup.css"/>		
        
        
        
        <link rel="stylesheet" href="/novo/web-files/css/joker.css"/>

    </head>
    <body style="padding-top: 52px" class="theme-default">

        <header class="header">
            <div class="navbar navbar-fixed-top" role="navigation">
                <div class="container">
                    <a href="#" class="brand-circle"><img src="/novo/web-files/img/brand-circle.png"></a>
                    <ul class="nav navbar-nav">
                        <li><a href="/novo/pt/produtos/checkout/" id="nav-login">Login e Cadastro</a></li>
                        <li><a onclick="open_atendimento()" style="cursor: pointer;">Atendimento Online</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/novo/pt/produtos/checkout/">Wishlist</a></li>
                        <li>
                            <a id="shopping-cart" href="/novo/pt/produtos/checkout/" class="btn-with-icon fa fa-shopping-cart">
                                                                                                Meu Carrinho
                            </a>
                        </li>

                        

                        
                        

                    </ul>
                </div>
            </div>
            <div class="container header-brand">
                <div class="row">
                    <div class="col-sm-6 col-brand">
                        <a href="/novo/pt/" class="brand"><img src="/novo/web-files/img/logo.png" alt="Maria de Barro" border="0" title="" class="img-responsive"/></a>
                    </div>
                    <div class="col-sm-6 text-right col-chart">
                        <p>
                            <a href="tel:+5521995765038"><span class="icon-whatsapp"></span> 21 99576.5038</a>
                            <a href="tel:+552132835265"><span class="fa fa-phone" style="margin-right: 12px"></span> 21 3283.5265</a>
                        </p>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header">
                            <a href="#" class="hamburger">
                                <span class="sr-only">Menu</span>
                                <span class="bar"></span>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">

    <li  class="" ><a href="/novo/pt/">Home</a></li>
    <li  class="" ><a href="/novo/pt/aneis/">Anéis</a></li>            
    <li  class="" ><a href="/novo/pt/brincos/">Brincos</a></li>           
    <li  class="active" ><a href="/novo/pt/colares/">Colares</a></li>           
    <li  class="" ><a href="/novo/pt/pulseiras/">Pulseiras</a></li>                       
    <li  class="" ><a href="/novo/pt/conjuntos/">Conjuntos</a></li>                       
    <li  class="" ><a href="/novo/pt/promocoes/">Promoções</a></li>                       

  </ul>
  <form class="navbar-form pull-right search-wrap" role="search">
    <input type="search" class="form-control" placeholder="BUSCAR">
    <button type="submit" class="btn eu-quero"><span class="fa fa-search"></span></button>
  </form>  
</div>
                    </div>
                </div>
            </nav>
        </header>



<!-- PRODUTO / INFORMAÇÕES -->

<section class="pag-section pag-section-top">
    <div class="container">

        

        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="row">

                    

                    <div class="col-sm-5">

                        <div class="produto-img">
                            <a href="#" class="produto-img-lupa fa fa-search"></a>
                            <div id="produto-slider" class="flexslider">
                                <ul class="slides">
                                     
                                                                                                                                                                                                        <li>
                                            <a href="/novo//web-files/upload/thumbs/BB0B011A6B75A007495CB4DA5A2211CF/E28346E1E5E785F133DF976444BE9E71.jpg" class="fancybox-gallery" rel="gallery"><img src="/novo//web-files/upload/thumbs/E2F7C593F94662C09E8815BA5A9104AD/912AEC5BD25305F4C49FF37D3C670C89.jpg" alt="Colar com pingente de cruz " border="0" title="Colar com pingente de cruz " /></a>
                                        </li>
                                    
                                                                    </ul>
                            </div>
                        </div>
                        <div id="produto-slider-thumbs" class="flexslider">
                            <ul class="slides">
                                
                                    
                                    <li>
                                        <img src="/novo//web-files/upload/thumbs/C91B4AD173C1519286094026392EA204/29C63B9F43FF6C3C2C3B0AED558D3F0E.jpg" alt="Colar com pingente de cruz " border="0" title="Colar com pingente de cruz " />
                                    </li>
                                
                                                            </ul>
                        </div>
                    </div>

                    

                    <div class="col-sm-7">

                        <h3 class="title-condensed">Colar com pingente de cruz </h3>
                        <p><p><span style="font-size: medium;" data-sheets-value="[null,2," data-sheets-userformat="[null,null,2111746,null,[null,2,16777164],null,null,null,null,null,null,0,null,null,[null,2,0],">Colar dourado com pingente de cruz cravejado com zirc&ocirc;nia.</span></p>
<p><span style="font-size: medium;" data-sheets-value="[null,2," data-sheets-userformat="[null,null,2111746,null,[null,2,16777164],null,null,null,null,null,null,0,null,null,[null,2,0],"><br /></span></p>
<p><span style="font-size: medium;" data-sheets-value="[null,2," data-sheets-userformat="[null,null,2111746,null,[null,2,16777164],null,null,null,null,null,null,0,null,null,[null,2,0],">Dimens&otilde;es: A 3 x L 2 cm</span></p></p>
                        <hr>
                        <label style="margin-bottom: 15px;">
                            Quantidade: <input type="text" name="quantidade" id="quantidade"  class="form-control" style="width: 42px;text-align: center;padding: 0;" value="1" maxlength="3" />
                        </label>
                        <div>
                        <div class="label-outline label-outline-light">Disponibilidade: <strong>Em Estoque</strong></div>
                        </div>
                        <hr>
                        <h2 class="title-lg"><span class="price-through" style="position: relative; top: -2px; color: #9a9a9a; font-size: 14px; font-size: 1.4rem; font-weight: 400; line-height: 1;">R$ 75,00</span> R$ 45,00</h2>
                        <hr>
                                                    <button href="#" class="btn btn-primary comprar" data-params="CLIENT_HIDDEN=F2991EB694A15170FA748B7AD19B2049&CODPRODUTO=3955A4B8D9BBCACF6FED71D3FCDD63F4" data-id="" data-img="/web-files/upload/thumbs/E2F7C593F94662C09E8815BA5A9104AD/912AEC5BD25305F4C49FF37D3C670C89.jpg" data-redirect="/novo/pt/produtos/checkout/" data-name="Colar com pingente de cruz ">
                                ADOREI, QUERO COMPRAR
                            </button>
                            <!--
                            <a href="#" class="btn btn-heart fa fa-heart">
                                <span class="fa fa-heart"></span>
                            </a>
                            -->
                            <span class="Loader hide">
                                <img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..."/>
                            </span>
                                            </div>
                </div>

                

                <div class="row">
                    <div class="col-lg-12">
                        
                        <p style="margin: 12px 0 28px;">
                            Compartilhe: 
                            <a href="http://www.facebook.com/sharer.php?u=http://www.mariadebarro.com.br/novo/pt/colares/colar-com-pingente-de-cruz?news=s&utm_source=fbBTshare" target="_blank" class="social social-fb fa fa-facebook"></a>
                            <a  href="http://twitter.com/share?text=&url=&via=maria_de_barro" target="_blank" target="_blank" class="social social-twitter fa fa-twitter"></a>
                        </p>
                    </div>
                </div>

                

                <div class="row">
                    <div class="col-lg-12">


                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active">
                                <a href="#mais-informacoes" role="tab" data-toggle="tab" >Mais Informações</a>
                            </li>
                            <li>
                                <a href="#comentarios" role="tab" data-toggle="tab" >Comentários</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="mais-informacoes">
                                <div id="maisinfo">
<p><span style="font-size: medium;">Pe&ccedil;as com 1 ano de garantia com&nbsp;7 mil&eacute;simos em banho de ouro.</span><br /><span style="font-size: medium;">*Troca de produtos n&atilde;o vendidos prazo de 30 dias</span></p>
<p><span style="font-size: small;"><em>*Devido a configura&ccedil;&atilde;o do seu monitor, pode ser que haja uma varia&ccedil;&atilde;o na cor e n&atilde;o representar com fidelidade a tonalidade real do produto.</em></span></p>
</div>
<div class="compartilha">&nbsp;</div>
                            </div>
                            <div class="tab-pane" id="comentarios">
                                <div id="fb-root"></div>
                                <script>
                                    (function (d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id))
                                            return;
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=256162091228883&version=v2.0";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                </script>
                                <div class="fb-comments" data-width="100%" data-href="https://www.facebook.com/mariadebarroacessorios?href=http://www.mariadebarro.com.br/novo/ptcolares/colar-com-pingente-de-cruz" data-numposts="15" data-colorscheme="light"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            

            <div class="col-md-4 col-lg-3 produto-sidebar hidden-sm">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="thumbs-slider" style="margin-top: -8px;">
                            <div class="thumbs-slider-header">
                                <div class="thumbs-slider-controls pull-right">
                                    <ul class="nav nav-pills">
                                        <li><a href="#" class="btn btn-light btn-simple fa fa-chevron-left previous"></a></li>
                                        <li><a href="#" class="btn btn-light btn-simple fa fa-chevron-right next"></a></li>
                                    </ul>
                                </div>
                                <h3 class="thumbs-slider-title title-condensed">EM PROMOÇÃO</h3>
                            </div>
                            <ul class="slides">
                                 
                                    <li>
                                        <div class="thumbnail">
                                            <div class="thumbnail-img">
                                                <a href="/novo/pt/pulseiras/bracelete-dourado-com-pedra-branca">
                                                                                                            <span class="thumbnail-tag">Novo</span>
                                                                                                        <img src="/novo//web-files/upload/thumbs/9D2496C083064B34CEFBEC34709642D3/28249707BB90F2350EB2358D70B7F8B4.jpg" alt="Bracelete dourado com pedra branca" border="0" title="Bracelete dourado com pedra branca" class="img-responsive" width="261" height="289"/>
                                                </a>
                                            </div>
                                            <div class="thumbnail-infos">
                                                <a href="/novo/pt/pulseiras/bracelete-dourado-com-pedra-branca">
                                                    <div class="thumbnail-title"><span class="price-through">R$ 129,00</span> R$ 77,40</div>
                                                </a>
                                                <a href="/novo/pt/pulseiras/bracelete-dourado-com-pedra-branca">
                                                    <div class="thumbnail-subtitle">Bracelete dourado com pedra branca</div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                 
                                    <li>
                                        <div class="thumbnail">
                                            <div class="thumbnail-img">
                                                <a href="/novo/pt/brincos/brinco-dourado-de-estrela">
                                                                                                            <span class="thumbnail-tag">Novo</span>
                                                                                                        <img src="/novo//web-files/upload/thumbs/B6AB3931EA34631D9739F6FEF3F5B795/DC265F6EC37AA563FC1DAB2D62876A68.jpg" alt="Brinco dourado de estrela" border="0" title="Brinco dourado de estrela" class="img-responsive" width="261" height="289"/>
                                                </a>
                                            </div>
                                            <div class="thumbnail-infos">
                                                <a href="/novo/pt/brincos/brinco-dourado-de-estrela">
                                                    <div class="thumbnail-title"><span class="price-through">R$ 49,00</span> R$ 29,40</div>
                                                </a>
                                                <a href="/novo/pt/brincos/brinco-dourado-de-estrela">
                                                    <div class="thumbnail-subtitle">Brinco dourado de estrela</div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                 
                                    <li>
                                        <div class="thumbnail">
                                            <div class="thumbnail-img">
                                                <a href="/novo/pt/brincos/brinco-dourado-pequeno-de-cruz-1">
                                                                                                            <span class="thumbnail-tag">Novo</span>
                                                                                                        <img src="/novo//web-files/upload/thumbs/C4AC8F42D326040A52E98B3A62A423D7/B14DC93BC123473ACF845DE74FE98A57.jpg" alt="Brinco dourado pequeno de cruz" border="0" title="Brinco dourado pequeno de cruz" class="img-responsive" width="261" height="289"/>
                                                </a>
                                            </div>
                                            <div class="thumbnail-infos">
                                                <a href="/novo/pt/brincos/brinco-dourado-pequeno-de-cruz-1">
                                                    <div class="thumbnail-title"><span class="price-through">R$ 57,00</span> R$ 34,20</div>
                                                </a>
                                                <a href="/novo/pt/brincos/brinco-dourado-pequeno-de-cruz-1">
                                                    <div class="thumbnail-subtitle">Brinco dourado pequeno de cruz</div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                 
                                    <li>
                                        <div class="thumbnail">
                                            <div class="thumbnail-img">
                                                <a href="/novo/pt/pulseiras/pulseira-de-couro-com-canutilhos-1">
                                                                                                            <span class="thumbnail-tag">Novo</span>
                                                                                                        <img src="/novo//web-files/upload/thumbs/13ED6F63D03FE306E35229593A21C592/F2EE57A1AF131B87C31163EB03B7EACC.jpg" alt="Pulseira de Couro com canutilhos" border="0" title="Pulseira de Couro com canutilhos" class="img-responsive" width="261" height="289"/>
                                                </a>
                                            </div>
                                            <div class="thumbnail-infos">
                                                <a href="/novo/pt/pulseiras/pulseira-de-couro-com-canutilhos-1">
                                                    <div class="thumbnail-title"><span class="price-through">R$ 118,00</span> R$ 70,80</div>
                                                </a>
                                                <a href="/novo/pt/pulseiras/pulseira-de-couro-com-canutilhos-1">
                                                    <div class="thumbnail-subtitle">Pulseira de Couro com canutilhos</div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                 
                                    <li>
                                        <div class="thumbnail">
                                            <div class="thumbnail-img">
                                                <a href="/novo/pt/colares/colar-de-couro-com-detalhe-triangular">
                                                                                                            <span class="thumbnail-tag">Novo</span>
                                                                                                        <img src="/novo//web-files/upload/thumbs/E76CE38329DDD6D04015B6A1C9336817/850C7C86ADAB2F9CF26FE6791A520317.jpg" alt="Colar de Couro com detalhe triangular" border="0" title="Colar de Couro com detalhe triangular" class="img-responsive" width="261" height="289"/>
                                                </a>
                                            </div>
                                            <div class="thumbnail-infos">
                                                <a href="/novo/pt/colares/colar-de-couro-com-detalhe-triangular">
                                                    <div class="thumbnail-title"><span class="price-through">R$ 54,00</span> R$ 29,40</div>
                                                </a>
                                                <a href="/novo/pt/colares/colar-de-couro-com-detalhe-triangular">
                                                    <div class="thumbnail-subtitle">Colar de Couro com detalhe triangular</div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                 
                                    <li>
                                        <div class="thumbnail">
                                            <div class="thumbnail-img">
                                                <a href="/novo/pt/colares/colar-dourado-com-pingente-pai-nosso">
                                                                                                            <span class="thumbnail-tag">Novo</span>
                                                                                                        <img src="/novo//web-files/upload/thumbs/BBDAF3C6AA87D9AB83C46FC092B2B324/43F25552DAAFCB271BAC5AA6861C58C0.jpg" alt="Colar dourado com pingente Pai Nosso" border="0" title="Colar dourado com pingente Pai Nosso" class="img-responsive" width="261" height="289"/>
                                                </a>
                                            </div>
                                            <div class="thumbnail-infos">
                                                <a href="/novo/pt/colares/colar-dourado-com-pingente-pai-nosso">
                                                    <div class="thumbnail-title"><span class="price-through">R$ 64,00</span> R$ 38,40</div>
                                                </a>
                                                <a href="/novo/pt/colares/colar-dourado-com-pingente-pai-nosso">
                                                    <div class="thumbnail-subtitle">Colar dourado com pingente Pai Nosso</div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                 
                                    <li>
                                        <div class="thumbnail">
                                            <div class="thumbnail-img">
                                                <a href="/novo/pt/colares/colar-dourado-com-pingente-circulos">
                                                                                                            <span class="thumbnail-tag">Novo</span>
                                                                                                        <img src="/novo//web-files/upload/thumbs/1EC8BE38A7B348253E4FBEC658FD6244/AF2DA05DB09E678AE7B73014ACB0585F.jpg" alt="Colar dourado com pingente círculos" border="0" title="Colar dourado com pingente círculos" class="img-responsive" width="261" height="289"/>
                                                </a>
                                            </div>
                                            <div class="thumbnail-infos">
                                                <a href="/novo/pt/colares/colar-dourado-com-pingente-circulos">
                                                    <div class="thumbnail-title"><span class="price-through">R$ 118,00</span> R$ 70,80</div>
                                                </a>
                                                <a href="/novo/pt/colares/colar-dourado-com-pingente-circulos">
                                                    <div class="thumbnail-subtitle">Colar dourado com pingente círculos</div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                 
                                    <li>
                                        <div class="thumbnail">
                                            <div class="thumbnail-img">
                                                <a href="/novo/pt/aneis/anel-dourado-gotas">
                                                                                                            <span class="thumbnail-tag">Novo</span>
                                                                                                        <img src="/novo//web-files/upload/thumbs/36F6E8D08D3B12F303C4A18725A56441/65785DC205395D1FDDDD81E8BD9625F6.jpg" alt="Anel dourado Gotas" border="0" title="Anel dourado Gotas" class="img-responsive" width="261" height="289"/>
                                                </a>
                                            </div>
                                            <div class="thumbnail-infos">
                                                <a href="/novo/pt/aneis/anel-dourado-gotas">
                                                    <div class="thumbnail-title"><span class="price-through">R$ 42,00</span> R$ 25,20</div>
                                                </a>
                                                <a href="/novo/pt/aneis/anel-dourado-gotas">
                                                    <div class="thumbnail-subtitle">Anel dourado Gotas</div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <span class="panel-title">Wishlist</span>
                            </div>
                            <div class="panel-body">
                                Nenhum produto
                                <hr>
                                <div class="text-right">
                                    <a href="#" class="btn-link">&raquo; Meus Desejos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /PRODUTO / INFORMAÇÕES -->
<!-- RELACIONADOS -->

<section class="pag-section">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="section-title">
                    <h2>
                        <strong>Produtos</strong> Relacionados
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
             
                <div class="col-thumb col-xs-6 col-sm-3">
                    <div class="thumbnail">
                        <div class="thumbnail-img">
                            <a href="/novo/pt/colares/colar-com-pingente-oval-nossa-senhora">
                                                                    <span class="thumbnail-tag">Novo</span>
                                                                <img src="/novo//web-files/upload/thumbs/D312E12031E5BEC037C7AFA4313BEC3F/159FC6BC3062B14800F7285B66AC6AD1.jpg" alt="Colar com pingente oval Nossa Senhora" border="0" title="Colar com pingente oval Nossa Senhora" class="img-responsive" width="261" height="289"/>
                            </a>
                        </div>
                        <div class="thumbnail-infos">
                            <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                            <a href="/novo/pt/colares/colar-com-pingente-oval-nossa-senhora">
                                <div class="thumbnail-title"><span class="price-through">R$ 61,00</span> R$ 36,60</div>
                                <a href="/novo/pt/colares/colar-com-pingente-oval-nossa-senhora">
                                    <div class="thumbnail-subtitle">Colar com pingente oval Nossa Senhora</div>
                                </a>
                                
                        </div>
                    </div>
                </div>
             
                <div class="col-thumb col-xs-6 col-sm-3">
                    <div class="thumbnail">
                        <div class="thumbnail-img">
                            <a href="/novo/pt/colares/colar-dourado-com-pingente-de-ave-maria-1">
                                                                    <span class="thumbnail-tag">Novo</span>
                                                                <img src="/novo//web-files/upload/thumbs/A1732CE39E7F4B7C3B91073D8DE34B6D/65D9AB3FB9DFB78704D75FF5218C8257.jpg" alt="Colar dourado com pingente de Ave Maria " border="0" title="Colar dourado com pingente de Ave Maria " class="img-responsive" width="261" height="289"/>
                            </a>
                        </div>
                        <div class="thumbnail-infos">
                            <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                            <a href="/novo/pt/colares/colar-dourado-com-pingente-de-ave-maria-1">
                                <div class="thumbnail-title"><span class="price-through">R$ 139,00</span> R$ 83,40</div>
                                <a href="/novo/pt/colares/colar-dourado-com-pingente-de-ave-maria-1">
                                    <div class="thumbnail-subtitle">Colar dourado com pingente de Ave Maria </div>
                                </a>
                                
                        </div>
                    </div>
                </div>
             
                <div class="col-thumb col-xs-6 col-sm-3">
                    <div class="thumbnail">
                        <div class="thumbnail-img">
                            <a href="/novo/pt/colares/colar-de-couro-com-canutilhos-dourados">
                                                                    <span class="thumbnail-tag">Novo</span>
                                                                <img src="/novo//web-files/upload/thumbs/0202BBECF8D09F2272F95AF559F36583/420BA26C6F530A9AB14533273416C0EE.jpg" alt="Colar de couro com canutilhos dourados" border="0" title="Colar de couro com canutilhos dourados" class="img-responsive" width="261" height="289"/>
                            </a>
                        </div>
                        <div class="thumbnail-infos">
                            <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                            <a href="/novo/pt/colares/colar-de-couro-com-canutilhos-dourados">
                                <div class="thumbnail-title"><span class="price-through">R$ 91,00</span> R$ 54,60</div>
                                <a href="/novo/pt/colares/colar-de-couro-com-canutilhos-dourados">
                                    <div class="thumbnail-subtitle">Colar de couro com canutilhos dourados</div>
                                </a>
                                
                        </div>
                    </div>
                </div>
             
                <div class="col-thumb col-xs-6 col-sm-3">
                    <div class="thumbnail">
                        <div class="thumbnail-img">
                            <a href="/novo/pt/colares/colar-dourado-com-pingente-de-bola">
                                                                    <span class="thumbnail-tag">Novo</span>
                                                                <img src="/novo//web-files/upload/thumbs/A03933789C3236621ECA69EDC43EF2B4/D9091BE6418CC0D72EF24B51A7F1F0C3.jpg" alt="Colar dourado com pingente de bola" border="0" title="Colar dourado com pingente de bola" class="img-responsive" width="261" height="289"/>
                            </a>
                        </div>
                        <div class="thumbnail-infos">
                            <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                            <a href="/novo/pt/colares/colar-dourado-com-pingente-de-bola">
                                <div class="thumbnail-title"><span class="price-through">R$ 86,00</span> R$ 51,60</div>
                                <a href="/novo/pt/colares/colar-dourado-com-pingente-de-bola">
                                    <div class="thumbnail-subtitle">Colar dourado com pingente de bola</div>
                                </a>
                                
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</section>

<!-- /RELACIONADOS -->

<!-- FOOTER  -->

<div class="body_atendimento" id="body_atendimento" style="position:fixed; bottom:0; z-index: 1000; right: 0">
    <input type="hidden" id="language" value="pt"/>
    <span class="btn_close" style="position: relative; cursor: pointer; z-index: 2000; left: 310px; top: 51px;"><img src="/web-files/img/Close.png" alt="Fechar" title="Fechar" border="0"></span>
    <div style="cursor: pointer; z-index: 1000; position: relative;" id="btn_atendimento"><img src="/web-files/img/posso_ajudar.png" alt="Atendimento-online" title="Atendimento-online" border="0"/></div>
    <div style="overflow-x: auto; height: 541px; background: #fff; left: 16px; position: relative; bottom: 58px; width: 314px;" class="window_atendimento hide">
        <div style='text-align: center; padding-top: 220px;' class='load_atendimento hide'><img src='/web-files/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style="opacity:1"/></div>
        <div class='text_atendimento hide'></div>
    </div>
</div>

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=1404136649848973&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<footer class="footer">
    <div class="container">
        <a href="#" class="footer-borboleta"></a>
    </div>
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 footer-group">
                    <h2 class="footer-title">Institucional</h2>
                    <ul class="footer-lista">
                        <li><a href="/novo/pt/informacoes/quem-somos">Quem somos</a></li>
                        <li><a href="#">Nosso blog</a></li>
                        <li><a href="/novo/pt/informacoes/politica-privacidade">Política de privacidade</a></li>
                        <li><a href="/novo/pt/informacoes/entrega-devolucao">Política de entrega</a></li>
                        <li><a href="/novo/pt/informacoes/procon-rj">Procon/RJ</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-group">
                    <h2 class="footer-title">Dúvidas</h2>
                    <ul class="footer-lista">
                        <li><a href="/novo/pt/informacoes/contato">Atendimento</a></li>
                        <li><a href="/novo/pt/informacoes/trocas-e-devolucoes">Trocas e devoluções</a></li>
                        <li><a href="/novo/pt/informacoes/direito-de-arrependimento">Direito de arrependimento</a></li>
                        <li><a href="/novo/pt/informacoes/termos-servicos">Termos de serviço</a></li>
                        <li><a href="/novo/pt/informacoes/perguntas-frequentes">Perguntas frequentes</a></li>
                        <li><a href="/novo/pt/informacoes/cuidados-produtos">Cuidados com os produtos</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-3 footer-group">
                    <h2 class="footer-title">Eu quero!</h2>
                    <ul class="footer-lista">
                        <li><a href="/novo/pt/novos-produtos/">Nossos produtos</a></li>
                        <li><a href="/novo/pt/informacoes/promocoes">Promoções</a></li>
                        <li><a href="/novo/pt/informacoes/programa-vantagens">Programa de vantagens</a></li>
                        <li><a href="/novo/pt/informacoes/programa-fidelidade">Programa de fidelidade</a></li>
                        <li><a href="#" class="tag-novo">Guia de presentes</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-group">
                    <div class="fb-box-out">
                        <div class="fb-box">
                            <div class="fb-like-box" data-href="https://www.facebook.com/mariadebarroacessorios" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-7 footer-group">
                    <h2 class="footer-title">Formas de pagamento</h2>
                    <p>
                        <img src="/novo/web-files/img/assets/band_visa.png">
                        <img src="/novo/web-files/img/assets/band_master.png">
                        <img src="/novo/web-files/img/assets/band_american.png">
                        <img src="/novo/web-files/img/assets/band_diners.png">
                        <img src="/novo/web-files/img/assets/band_elo.png">
                        <img src="/novo/web-files/img/assets/band_boleto.png">
                    </p>
                </div>
                <div class="col-sm-5 footer-group">
                    <h2 class="footer-title">Certificados</h2>
                    <p>
                        <img src="/novo/web-files/img/assets/band_ebit.png">
                        <img src="/novo/web-files/img/assets/siteblindado.gif">
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
                        <strong>MARIA DE BARRO ACESSÓRIOS FEMININOS LTDA</strong>
                        <br>CNPJ: 18.611.490/0001-28
                        <br>&copy; Todos os direitos reservados - Edifício Global 7000 Offices - Estrada dos Bandeirantes nº 7000 Bloco C Sala 290, Rio de Janeiro / RJ - CEP: 22780-084 
                        <br>Atendimento ao cliente: maria@mariadebarro.com.br
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class='footer-bottom'>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-6 col-sm-push-6 text-right'>
                    <div class="redes-sociais">
                        <a target="_blank" href="http://instagram.com/mariadebarro" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="https://www.facebook.com/mariadebarroacessorios" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/Maria_de_barro" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://plus.google.com/u/0/113176039094986209102/posts" class="gplus"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                <div class='col-sm-6 col-sm-pull-6'>
                    <p class="copyright">Desenvolvido por <a href="http://designlab.com.br/ " target="_blank"><img src="/novo/web-files/img/assets/dl.png" width="90" class="dl"></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- /FOOTER  -->

<script language="javascript" src="/novo/web-files/js/jquery-1.11.1.min.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

<script language="javascript" src="/novo/web-files/js/vendor/jquery.easing.1.3.js"></script>


<script language="javascript" src="/novo/web-files/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script language="javascript" src="/novo/web-files/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script language="javascript" src="/novo/web-files/plugins/flexslider/jquery.flexslider-min.js"></script>
<script language="javascript" src="/novo/web-files/plugins/fancybox/jquery.fancybox.js"></script>

<script language="javascript" src="/novo/web-files/js/funcoes.js"></script>
<script language="javascript" src="/novo/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/novo/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/novo/web-files/js/vendor/jquery.payment.js"></script>
<script language="javascript" src="/novo/web-files/js/vendor/jquery.mask.min.js"></script>
<script language="javascript" src="/novo/web-files/pongstagr.am-master/source/pongstagr.am.js"></script>
<script language="javascript" src="/novo/web-files/js/vendor/jquery.magnific-popup.min.js"></script>
<script language="javascript" src="/novo/web-files/js/joker.js"></script>
<script language="javascript" src="/novo/web-files/js/default.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="/novo/resources/demos/style.css">


</body>
</html><?php }} ?>

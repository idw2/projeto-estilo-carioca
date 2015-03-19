<?php /*%%SmartyHeaderCode:2098414219544a7ba4abad84-73865796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a2333c3c08f729af823cc1337ec940bc6668107' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/index.tpl',
      1 => 1414165330,
      2 => 'file',
    ),
    '6a0d8cd5da5366cd163c1096d3e3a62591b34250' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/header.tpl',
      1 => 1414165340,
      2 => 'file',
    ),
    'dddb63286e4a273b560ff992665e7d4c506e6fdb' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/navbar.tpl',
      1 => 1414165334,
      2 => 'file',
    ),
    '9c6368fa7ae30d46a3ff6d19316b23707d94dba8' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/footer.tpl',
      1 => 1414165346,
      2 => 'file',
    ),
    '90e90a97284dec988adac3b7318a019a6b5d1ff6' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/atendimento_online.tpl',
      1 => 1412097035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2098414219544a7ba4abad84-73865796',
  'variables' => 
  array (
    'language' => 0,
    'arr' => 0,
    'produto' => 0,
    'arr_mais_vendidos' => 0,
    'arr_promocoes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a7ba5280492_42104371',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a7ba5280492_42104371')) {function content_544a7ba5280492_42104371($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Página Inicial</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

                                                                                        
        <link rel="icon" type="image/vnd.microsoft.icon" href="/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/web-files/img/favicon.ico"/>

        <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/web-files/plugins/rs-plugin/css/settings.css"/>
        <link rel="stylesheet" href="/web-files/plugins/flexslider/flexslider.css"/>
        <link rel="stylesheet" href="/web-files/plugins/fancybox/jquery.fancybox.css"/>
        <link rel="stylesheet" href="/web-files/pongstagr.am-master/source/pongstagr.am.css"/>		
        <link rel="stylesheet" href="/web-files/css/plugins/magnific-popup.css"/>		
        
        
        
        <link rel="stylesheet" href="/web-files/css/joker.css"/>

    </head>
    <body style="padding-top: 52px" class="theme-default">

        <header class="header">
            <div class="navbar navbar-fixed-top" role="navigation">
                <div class="container">
                    <a href="#" class="brand-circle"><img src="/web-files/img/brand-circle.png"></a>
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
                        <a href="/novo/pt/" class="brand"><img src="/web-files/img/logo.png" alt="Maria de Barro" border="0" title="" class="img-responsive"/></a>
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

    <li  class="active" ><a href="/novo/pt/">Home</a></li>
    <li  class="" ><a href="/novo/pt/aneis/">Anéis</a></li>            
    <li  class="" ><a href="/novo/pt/brincos/">Brincos</a></li>           
    <li  class="" ><a href="/novo/pt/colares/">Colares</a></li>           
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


<!-- SLIDER  -->

<section class="container-slider">
    <div id="slider">
        <ul>

            <li data-transition="fade" data-slotamount="7">
                <img src="/web-files/img/slider/slide_01.jpg" alt="-" />
                <div class="caption lfr str" data-x="right" data-hoffset="-30" data-y="0" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_01-item.png" alt="-" />
                </div>
                <div class="big-title-row caption lfl ltb" data-x="left" data-hoffset="30" data-y="160" data-speed="500" data-start="200" data-easing="easeInExpo">
                    Chegou o Natal
                </div>	
                <div class="layer-h2-tran caption lfl ltb" data-x="left" data-hoffset="30" data-y="230" data-speed="500" data-start="300" data-easing="easeInExpo">
                    Itens com até 50% de desconto!
                </div>
                <div class="layer-buttons primary caption lfl ltb" data-x="left" data-hoffset="30" data-y="300" data-speed="500" data-start="400" data-easing="easeInExpo">
                    <a href="#">Eu quero!</a>
                </div>
            </li>

            <li data-transition="fade" data-slotamount="7">
                <img src="/web-files/img/slider/slide_02.jpg" alt="-" />
                <div class="caption lfr str" data-x="right" data-hoffset="-30" data-y="0" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_02-item.png" alt="-" />
                </div>
                <div class="big-title-row caption lfl ltb" data-x="left" data-hoffset="30" data-y="160" data-speed="500" data-start="200" data-easing="easeInExpo">
                    Colar com pingente
                </div>	
                <div class="layer-h2-tran caption lfl ltb" data-x="left" data-hoffset="30" data-y="230" data-speed="500" data-start="300" data-easing="easeInExpo">
                    A partir de R$50,00
                </div>
                <div class="layer-buttons primary caption lfl ltb" data-x="left" data-hoffset="30" data-y="300" data-speed="500" data-start="400" data-easing="easeInExpo">
                    <a href="#">Eu quero!</a>
                </div>
            </li>

            <li data-transition="fade" data-slotamount="7">
                <img src="/web-files/img/slider/slide_03.jpg" alt="-" />
                <div class="caption lfl str" data-x="-100" data-hoffset="-30" data-y="0" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_03-item-1.png" alt="-" width="300" />
                </div>
                <div class="caption lfr str" data-x="850" data-hoffset="-30" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_03-item-2.png" alt="-" width="250" />
                </div>
                <div class="caption lft str" data-x="center" data-hoffset="0" data-y="80" data-speed="500" data-start="900" data-easing="easeOutExpo">
                    <a href="#"><img src="/web-files/img/slider/slide_03-item-3.png"  width="500" /></a>
                </div>
                <div class="caption lfl str" data-x="center" data-hoffset="-30" data-y="290" data-speed="500" data-start="200" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_03-item-4.png" alt="-" width="800" />
                </div>
            </li>



        </ul>	      
    </div>
</section>

<!-- /SLIDER  -->
<!-- 3 PRODUTOS  -->

<section class="pag-section hide-mobile">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="/novo/pt/"><img src="/web-files/img/b-0.png" alt="" border="0" title="" class="img-responsive" /></a>
            </div>
            <div class="col-sm-4">
                <a href="/novo/pt/"><img src="/web-files/img/b-1.png" alt="" border="0" title="" class="img-responsive" /></a>
            </div>
            <div class="col-sm-4">
                <a href="/novo/pt/"><img src="/web-files/img/b-2.png" alt="" border="0" title="" class="img-responsive" /></a>
            </div>
        </div>
    </div>
</section>

<!-- /3 PRODUTOS  -->
<!-- RECEM CHEGADOS  -->

<section class="pag-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>
                        <a href="/novo/pt/novos-produtos">
                            <strong>Novos</strong> Produtos
                        </a>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/novo/pt/brincos/brinco-prata-de-argola-pequeno">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/2FA00A79EA2870CF2F42C304A24AD888/DAE605B32E2E3B8344DF10A17BC9950A.jpg" alt="Brinco prata de argola pequeno " title="Brinco prata de argola pequeno "/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/novo/pt/brincos/brinco-prata-de-argola-pequeno">
                                    <div class="thumbnail-title"><span class="price-through">R$ 87,00</span> R$ 52,20</div>
                                </a>
                                <a href="/novo/pt/brincos/brinco-prata-de-argola-pequeno">
                                    <div class="thumbnail-subtitle">Brinco prata de argola pequeno </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/novo/pt/pulseiras/pulseira-dourada-rabo-de-rato-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/39FA68B526938687755643428A2AD03D/095BE64DF6B7EE2402BDF496FEEEF13D.jpg" alt="Pulseira dourada rabo de rato" title="Pulseira dourada rabo de rato"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/novo/pt/pulseiras/pulseira-dourada-rabo-de-rato-1">
                                    <div class="thumbnail-title"> R$ 42,00</div>
                                </a>
                                <a href="/novo/pt/pulseiras/pulseira-dourada-rabo-de-rato-1">
                                    <div class="thumbnail-subtitle">Pulseira dourada rabo de rato</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/novo/pt/aneis/anel-dourado-lago-com-faixas-de-zirconia-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/49D5079A7FE867D71CC1FBB4276819FD/BF54179D0711BFCF45498048D50901DA.jpg" alt="Anel dourado lago com faixas de zircônia" title="Anel dourado lago com faixas de zircônia"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/novo/pt/aneis/anel-dourado-lago-com-faixas-de-zirconia-1">
                                    <div class="thumbnail-title"><span class="price-through">R$ 93,00</span> R$ 55,80</div>
                                </a>
                                <a href="/novo/pt/aneis/anel-dourado-lago-com-faixas-de-zirconia-1">
                                    <div class="thumbnail-subtitle">Anel dourado lago com faixas de zircônia</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/novo/pt/aneis/anel-dourado-cruz-preta">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/9AD9FDEB41483ACCCDFD83E96CBAC2A7/A3115E2D4CAA91CB8F2D4A243364EA38.jpg" alt="Anel dourado cruz - preta" title="Anel dourado cruz - preta"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/novo/pt/aneis/anel-dourado-cruz-preta">
                                    <div class="thumbnail-title"><span class="price-through">R$ 52,00</span> R$ 34,20</div>
                                </a>
                                <a href="/novo/pt/aneis/anel-dourado-cruz-preta">
                                    <div class="thumbnail-subtitle">Anel dourado cruz - preta</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                    </div>
        
    </div>
</section>

<!-- /RECEM CHEGADOS  -->
<!-- MAIS VENDIDOS  -->

<section class="pag-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>
                        <a href="/novo/pt/mais-vendidos">
                            <strong>Mais</strong> Vendidos
                        </a>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">

                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/novo/pt/aneis/kit-3-aneis-de-coracoes-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/3F170236F5517DEF35A12171C7200BC8/57AAFFA16392F21EC399DC13146A44FC.jpg" alt=" Kit 3 anéis de corações " border="0" title=" Kit 3 anéis de corações " class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/novo/pt/aneis/kit-3-aneis-de-coracoes-1">
                                    <div class="thumbnail-title"><span class="price-through">R$ 216,00</span> R$ 129,60</div>
                                </a>
                                <a href="/novo/pt/aneis/kit-3-aneis-de-coracoes-1">
                                    <div class="thumbnail-subtitle"> Kit 3 anéis de corações </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/novo/pt/aneis/anel-coracao-regulavel">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/60A951897FBAE1B3EB7463D8509532F9/B7F4949BD328699A9B7E6FE316157741.jpg" alt="Anel coração regulável" border="0" title="Anel coração regulável" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/novo/pt/aneis/anel-coracao-regulavel">
                                    <div class="thumbnail-title"><span class="price-through">R$ 97,00</span> R$ 58,20</div>
                                </a>
                                <a href="/novo/pt/aneis/anel-coracao-regulavel">
                                    <div class="thumbnail-subtitle">Anel coração regulável</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/novo/pt/aneis/anel-circulos-de-zirconia-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/4D2854FBF0A85CD697FD507C06825BB8/133D6BDAE667148D3F21A7A5D9F81546.jpg" alt="Anel círculos de zircônia " border="0" title="Anel círculos de zircônia " class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/novo/pt/aneis/anel-circulos-de-zirconia-1">
                                    <div class="thumbnail-title"><span class="price-through">R$ 108,00</span> R$ 64,80</div>
                                </a>
                                <a href="/novo/pt/aneis/anel-circulos-de-zirconia-1">
                                    <div class="thumbnail-subtitle">Anel círculos de zircônia </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/novo/pt/aneis/anel-dourado-liso-regulavel-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/FB88559A60EAA6B6A399389BDD22C0EB/9162398B0F5B184E51F970F1B8C21C80.jpg" alt="Anel dourado liso regulável" border="0" title="Anel dourado liso regulável" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/novo/pt/aneis/anel-dourado-liso-regulavel-1">
                                    <div class="thumbnail-title"><span class="price-through">R$ 53,00</span> R$ 31,80</div>
                                </a>
                                <a href="/novo/pt/aneis/anel-dourado-liso-regulavel-1">
                                    <div class="thumbnail-subtitle">Anel dourado liso regulável</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                            

        </div>
    </div>
</section>

<!-- /MAIS VENDIDOS  -->
<!-- EM PROMOCÃO  -->

<section class="pag-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>
                        <a href="/novo/pt/promocoes">
                            <strong>Itens</strong> em Promoção
                        </a>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">

                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/novo/pt/colares/colar-fume-com-pingente-de-cruz">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/7833FB048683DCA975714A81CC3AF79B/EC2757C572C73D490DF7F85370A98D4A.jpg" alt="Colar fumê com pingente de cruz" border="0" title="Colar fumê com pingente de cruz" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/novo/pt/colares/colar-fume-com-pingente-de-cruz">
                                    <div class="thumbnail-title"><span class="price-through">R$ 86,00</span> R$ 51,60</div>
                                </a>
                                <a href="/novo/pt/colares/colar-fume-com-pingente-de-cruz">
                                    <div class="thumbnail-subtitle">Colar fumê com pingente de cruz</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/novo/pt/aneis/anel-dourado-com-fios-de-zircionia">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/49DB4B5355EAE8EBCCEBF689D77218C4/3F661068FA32D4C9BF7B511FEDD13F55.jpg" alt="Anel dourado com fios de zirciônia" border="0" title="Anel dourado com fios de zirciônia" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/novo/pt/aneis/anel-dourado-com-fios-de-zircionia">
                                    <div class="thumbnail-title"><span class="price-through">R$ 98,00</span> R$ 98,00</div>
                                </a>
                                <a href="/novo/pt/aneis/anel-dourado-com-fios-de-zircionia">
                                    <div class="thumbnail-subtitle">Anel dourado com fios de zirciônia</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/novo/pt/brincos/brinco-dourado-com-circulos-de-laco-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/4EEF417C5EAE7EBB1A5BB0B54FDCCA00/0304D6FFEE0BFF6EA5506ACB9B08737E.jpg" alt="Brinco dourado com círculos de laço " border="0" title="Brinco dourado com círculos de laço " class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/novo/pt/brincos/brinco-dourado-com-circulos-de-laco-1">
                                    <div class="thumbnail-title"><span class="price-through">R$ 28,00</span> R$ 16,80</div>
                                </a>
                                <a href="/novo/pt/brincos/brinco-dourado-com-circulos-de-laco-1">
                                    <div class="thumbnail-subtitle">Brinco dourado com círculos de laço </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/novo/pt/brincos/brinco-dourado-com-gota-de-cristal">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/32EBA34CCB7BCA0A8389A09A11DFBBCA/D4699753F712751C9E61661EF72C4BB3.jpg" alt="Brinco dourado com gota de cristal" border="0" title="Brinco dourado com gota de cristal" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/novo/pt/brincos/brinco-dourado-com-gota-de-cristal">
                                    <div class="thumbnail-title"><span class="price-through">R$ 150,00</span> R$ 97,80</div>
                                </a>
                                <a href="/novo/pt/brincos/brinco-dourado-com-gota-de-cristal">
                                    <div class="thumbnail-subtitle">Brinco dourado com gota de cristal</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                            

        </div>
    </div>
</section>

<!-- /EM PROMOCÃO  -->
<!-- INSTAGRAM  -->

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

<!-- FOOTER  -->

<div class="body_atendimento" id="body_atendimento" style="position:fixed; bottom:0; z-index: 1000; right: 0">
    <input type="hidden" id="language" value="novo/pt"/>
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
                        <img src="/web-files/img/assets/band_visa.png">
                        <img src="/web-files/img/assets/band_master.png">
                        <img src="/web-files/img/assets/band_american.png">
                        <img src="/web-files/img/assets/band_diners.png">
                        <img src="/web-files/img/assets/band_elo.png">
                        <img src="/web-files/img/assets/band_boleto.png">
                    </p>
                </div>
                <div class="col-sm-5 footer-group">
                    <h2 class="footer-title">Certificados</h2>
                    <p>
                        <img src="/web-files/img/assets/band_ebit.png">
                        <img src="/web-files/img/assets/siteblindado.gif">
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
                    <p class="copyright">Desenvolvido por <a href="http://designlab.com.br/ " target="_blank"><img src="/web-files/img/assets/dl.png" width="90" class="dl"></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- /FOOTER  -->

<script language="javascript" src="/web-files/js/jquery-1.11.1.min.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

<script language="javascript" src="/web-files/js/vendor/jquery.easing.1.3.js"></script>


<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script language="javascript" src="/web-files/plugins/flexslider/jquery.flexslider-min.js"></script>
<script language="javascript" src="/web-files/plugins/fancybox/jquery.fancybox.js"></script>

<script language="javascript" src="/web-files/js/funcoes.js"></script>
<script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.payment.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.mask.min.js"></script>
<script language="javascript" src="/web-files/pongstagr.am-master/source/pongstagr.am.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.magnific-popup.min.js"></script>
<script language="javascript" src="/web-files/js/joker.js"></script>
<script language="javascript" src="/web-files/js/default.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">


</body>
</html><?php }} ?>

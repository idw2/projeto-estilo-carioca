<?php /*%%SmartyHeaderCode:1512640185460d73dcee126-97451008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dbdad2f772412a4f461f40a42d7e8f9f2e81a04' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/index.tpl',
      1 => 1415211359,
      2 => 'file',
    ),
    '27f9a7a3179d1f7292a60ba13c6a64d672873ee0' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/header.tpl',
      1 => 1415211731,
      2 => 'file',
    ),
    '0b07c4222b2a38d9dc09bbf5ff933afa59e6bd20' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/navbar.tpl',
      1 => 1415221960,
      2 => 'file',
    ),
    '6faaabf2e71bebda07a190870503cd27e94da1d6' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/footer.tpl',
      1 => 1415365941,
      2 => 'file',
    ),
    '664eb11e5e87b30f38f0ffe594bbda9642eba0cf' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/atendimento_online.tpl',
      1 => 1414499263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1512640185460d73dcee126-97451008',
  'variables' => 
  array (
    'web_files' => 0,
    'language' => 0,
    'arr' => 0,
    'produto' => 0,
    'arr_mais_vendidos' => 0,
    'arr_promocoes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460d73e58a213_20794875',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d73e58a213_20794875')) {function content_5460d73e58a213_20794875($_smarty_tpl) {?><!DOCTYPE HTML>
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
                                                    <li><a href="/pt/conta/login-cadastro/" id="nav-login">Login e Cadastro</a></li>
                                                
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                                                <li>
                            <a id="shopping-cart" href="/pt/produtos/checkout/" class="btn-with-icon fa fa-shopping-cart">
                                                                
                                                                Meu Carrinho
                            </a>
                        </li>
                                                

                        
                        

                    </ul>
                </div>
            </div>
            <div class="container header-brand">
                <div class="row">
                    <div class="col-sm-6 col-brand">
                        <a href="/pt/" class="brand"><img src="/web-files/img/logo.png" alt="Maria de Barro" border="0" title="" class="img-responsive"/></a>
                    </div>
                    <div class="col-sm-6 text-right col-chart">
                        <p>
                            <a href="tel:+5521995765038"><span class="icon-whatsapp"></span> 21 99576.5038</a><br/>
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

        <li  class="active" ><a href="/pt/">Home</a></li>
        <li  class="" ><a href="/pt/aneis/">Anéis</a></li>            
        <li  class="" ><a href="/pt/brincos/">Brincos</a></li>           
        <li  class="" ><a href="/pt/colares/">Colares</a></li>           
        <li  class="" ><a href="/pt/pulseiras/">Pulseiras</a></li>                       
        <li  class="" ><a href="/pt/conjuntos/">Conjuntos</a></li>                       
        <li  class="" ><a href="/pt/promocoes/">Promoções</a></li>                       

    </ul>
    <div style="position: relative">
        <form class="navbar-form pull-right search-wrap" role="search" action="/pt/novos-produtos" method="post">
            <input type="search" name="search" id="search" class="form-control" placeholder="BUSCAR" autocomplete="off"/>
            <button type="submit" class="btn eu-quero"><span class="fa fa-search"></span></button>
        </form>  
        <div class="sugestao"> </div>
    </div>
    <style>
        .sugestao{
            position: absolute;
            background: #fff;
            height: auto;
            right: 0;
            top: 40px;
            width: auto;
            min-width: 250px;
            /*padding: 0.5%;*/
            text-align: left;
            z-index: 500;
            /*max-height: 200px;
            overflow-x: auto;*/
            box-shadow: 0 1px 2px rgba(0,0,0,.2);
        }
    </style>
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
                <img src="/web-files/img/slider/slide_03.jpg" alt="-" />
                <div class="caption lfl str" data-x="-50" data-hoffset="0" data-y="120" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slider4/banner-liqui-novo_08.png" alt="-" width="350" />
                </div>
                <div class="caption lfr str" data-x="right" data-hoffset="0" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slider4/banner-liqui-novo_05.png" alt="-" width="250" />
                </div>
                <div class="caption lft str" data-x="center" data-hoffset="0" data-y="30" data-speed="500" data-start="900" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slider4/banner-liqui-novo_03.png"  width="350" />
                </div>
            </li>

            <li data-transition="fade" data-slotamount="7">
                <img src="/web-files/img/slider/slide_03.jpg" alt="-" />
                <div class="caption lfl str" data-x="-80" data-hoffset="0" data-y="110" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_03/img-3.png" alt="-" width="380" />
                </div>
                <div class="caption lfr str" data-x="right" data-hoffset="-80" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_03/img-1.png" alt="-" width="300" />
                </div>
                <div class="caption lft str" data-x="center" data-hoffset="0" data-y="0" data-speed="500" data-start="900" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_03/img-2.png"  width="250" />
                </div>
            </li>

            <li data-transition="fade" data-slotamount="7">
                <img src="/web-files/img/slider/slide_03.jpg" alt="-" />
                <div class="caption lfl str" data-x="-80" data-hoffset="-30" data-y="0" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_03-item-1.png" alt="-" width="300" />
                </div>
                <div class="caption lfr str" data-x="right" data-hoffset="-30" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_03-item-2.png" alt="-" width="250" />
                </div>
                <div class="caption lft str" data-x="center" data-hoffset="0" data-y="80" data-speed="500" data-start="900" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_03-item-3.png"  width="500" />
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
                <a href="/pt/"><img src="/web-files/img/b-0.png" alt="" border="0" title="" class="img-responsive" /></a>
            </div>
            <div class="col-sm-4">
                <a href="/pt/"><img src="/web-files/img/b-1.png" alt="" border="0" title="" class="img-responsive" /></a>
            </div>
            <div class="col-sm-4">
                <a href="/pt/"><img src="/web-files/img/b-2.png" alt="" border="0" title="" class="img-responsive" /></a>
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
                        <a href="/pt/novos-produtos">
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
                                <a href="/pt/pulseiras/bracelete-italiano-preto-com-fivela-prat-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/82820467D3C2A9FA1CE24741A28BB0B0/01110741D5CEBB9176AB026DC3D3A4F2.jpg" alt="Bracelete italiano preto com fivela prat" title="Bracelete italiano preto com fivela prat"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/pt/pulseiras/bracelete-italiano-preto-com-fivela-prat-1">
                                    <div class="thumbnail-title"> R$ 93,00</div>
                                </a>
                                <a href="/pt/pulseiras/bracelete-italiano-preto-com-fivela-prat-1">
                                    <div class="thumbnail-subtitle">Bracelete italiano preto com fivela prat</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/aneis/anel-fume-de-falange-coroa">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/360A1C36ED57A8866E6C42273554C21A/B2F5C93FC98084B86041D67871B483E0.jpg" alt="Anel fumê de falange coroa" title="Anel fumê de falange coroa"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/pt/aneis/anel-fume-de-falange-coroa">
                                    <div class="thumbnail-title"> R$ 32,00</div>
                                </a>
                                <a href="/pt/aneis/anel-fume-de-falange-coroa">
                                    <div class="thumbnail-subtitle">Anel fumê de falange coroa</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/colares/pingente-dourado-de-menina">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/FF402B0E19714BB5E718700749697F55/DFFF8447B318CC87276D43782A340526.jpg" alt="Pingente dourado de menina" title="Pingente dourado de menina"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/pt/colares/pingente-dourado-de-menina">
                                    <div class="thumbnail-title"><span class="price-through">R$ 64,00</span> R$ 38,00</div>
                                </a>
                                <a href="/pt/colares/pingente-dourado-de-menina">
                                    <div class="thumbnail-subtitle">Pingente dourado de menina</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/brincos/brinco-dourado-com-pendende-de-leque-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/002113E5AAB312E1DDFC2DB7183934A5/19AAE6D6D81BC4B766218FE5B55F2C74.jpg" alt="Brinco dourado com pendende de leque" title="Brinco dourado com pendende de leque"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/pt/brincos/brinco-dourado-com-pendende-de-leque-1">
                                    <div class="thumbnail-title"> R$ 75,00</div>
                                </a>
                                <a href="/pt/brincos/brinco-dourado-com-pendende-de-leque-1">
                                    <div class="thumbnail-subtitle">Brinco dourado com pendende de leque</div>
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
                        <a href="/pt/mais-vendidos">
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
                                <a href="/pt/aneis/kit-3-aneis-de-coracoes">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/57DB7D8130FAFFBFD93035F104C795A9/7C1B51865E8E7BEE44EEE92D14866F62.jpg" alt="Kit 3 anéis de corações " border="0" title="Kit 3 anéis de corações " class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/pt/aneis/kit-3-aneis-de-coracoes">
                                    <div class="thumbnail-title"><span class="price-through">R$ 216,00</span> R$ 130,00</div>
                                </a>
                                <a href="/pt/aneis/kit-3-aneis-de-coracoes">
                                    <div class="thumbnail-subtitle">Kit 3 anéis de corações </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/aneis/anel-coracao-regulavel-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/60A951897FBAE1B3EB7463D8509532F9/B7F4949BD328699A9B7E6FE316157741.jpg" alt="Anel coração regulável" border="0" title="Anel coração regulável" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/pt/aneis/anel-coracao-regulavel-1">
                                    <div class="thumbnail-title"><span class="price-through">R$ 97,00</span> R$ 58,00</div>
                                </a>
                                <a href="/pt/aneis/anel-coracao-regulavel-1">
                                    <div class="thumbnail-subtitle">Anel coração regulável</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/aneis/anel-circulos-de-zirconia">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/4D2854FBF0A85CD697FD507C06825BB8/133D6BDAE667148D3F21A7A5D9F81546.jpg" alt="Anel círculos de zircônia " border="0" title="Anel círculos de zircônia " class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/pt/aneis/anel-circulos-de-zirconia">
                                    <div class="thumbnail-title"><span class="price-through">R$ 108,00</span> R$ 65,00</div>
                                </a>
                                <a href="/pt/aneis/anel-circulos-de-zirconia">
                                    <div class="thumbnail-subtitle">Anel círculos de zircônia </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/brincos/brinco-dourado-indiano-com-pedra-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/CEB32F32D62DE5B73707BDFA03B3D0F4/1DB6A8E86804050DD9815BC1D5DAB9EF.jpg" alt="Brinco dourado indiano com pedra" border="0" title="Brinco dourado indiano com pedra" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/pt/brincos/brinco-dourado-indiano-com-pedra-1">
                                    <div class="thumbnail-title"><span class="price-through">R$ 140,00</span> R$ 84,00</div>
                                </a>
                                <a href="/pt/brincos/brinco-dourado-indiano-com-pedra-1">
                                    <div class="thumbnail-subtitle">Brinco dourado indiano com pedra</div>
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
                        <a href="/pt/promocoes">
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
                                <a href="/pt/brincos/brinco-dourado-argola-achatado-medio">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/89A4753C45C9AD9F9BD3351A35459F09/5BD5F4A8DD3711EF8ED77DADCADAC3CD.jpg" alt="Brinco dourado argola achatado médio" border="0" title="Brinco dourado argola achatado médio" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/pt/brincos/brinco-dourado-argola-achatado-medio">
                                    <div class="thumbnail-title"><span class="price-through">R$ 49,00</span> R$ 29,00</div>
                                </a>
                                <a href="/pt/brincos/brinco-dourado-argola-achatado-medio">
                                    <div class="thumbnail-subtitle">Brinco dourado argola achatado médio</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/aneis/anel-dourado-caixa-alta">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/EDEFF94EEB190800CCC2F46179DE703A/868C87A55113B2F764037EA298268945.jpg" alt="Anel dourado caixa alta" border="0" title="Anel dourado caixa alta" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/pt/aneis/anel-dourado-caixa-alta">
                                    <div class="thumbnail-title"><span class="price-through">R$ 42,00</span> R$ 25,00</div>
                                </a>
                                <a href="/pt/aneis/anel-dourado-caixa-alta">
                                    <div class="thumbnail-subtitle">Anel dourado caixa alta</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/colares/colar-com-pingente-de-nossa-senh">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/2B31D51EF00D33239CAC4C25A7916E27/74F0F2C3E82CCB6405943B5E031D88B9.jpg" alt="Colar com pingente de Nossa Senh" border="0" title="Colar com pingente de Nossa Senh" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/pt/colares/colar-com-pingente-de-nossa-senh">
                                    <div class="thumbnail-title"><span class="price-through">R$ 53,00</span> R$ 32,00</div>
                                </a>
                                <a href="/pt/colares/colar-com-pingente-de-nossa-senh">
                                    <div class="thumbnail-subtitle">Colar com pingente de Nossa Senh</div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/pt/brincos/brinco-prata-argola-rendado-com-zirconia">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/8DDB75D6B4BB206919239A404B96127C/EECD96A6498AB30186543246DF2C27EA.png" alt="Brinco prata argola rendado com zircônia" border="0" title="Brinco prata argola rendado com zircônia" class="img-responsive" width="261" height="289"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/pt/brincos/brinco-prata-argola-rendado-com-zirconia">
                                    <div class="thumbnail-title"><span class="price-through">R$ 87,00</span> R$ 52,00</div>
                                </a>
                                <a href="/pt/brincos/brinco-prata-argola-rendado-com-zirconia">
                                    <div class="thumbnail-subtitle">Brinco prata argola rendado com zircônia</div>
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
                        <li><a href="/pt/informacoes/quem-somos">Quem somos</a></li>
                        
                        <li><a href="/pt/informacoes/politica-privacidade">Política de privacidade</a></li>
                        <li><a href="/pt/informacoes/entrega-devolucao">Política de entrega</a></li>
                        <li><a href="/pt/informacoes/procon-rj">Procon/RJ</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-group">
                    <h2 class="footer-title">Dúvidas</h2>
                    <ul class="footer-lista">
                        <li><a href="/pt/informacoes/contato">Atendimento</a></li>
                        <li><a href="/pt/informacoes/trocas-e-devolucoes">Trocas e devoluções</a></li>
                        
                        <li><a href="/pt/informacoes/termos-servicos">Termos de serviço</a></li>
                        <li><a href="/pt/informacoes/perguntas-frequentes">Perguntas frequentes</a></li>
                        <li><a href="/pt/informacoes/cuidados-produtos">Cuidados com os produtos</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-3 footer-group">
                    <h2 class="footer-title">Eu quero!</h2>
                    <ul class="footer-lista">
                        <li><a href="/pt/novos-produtos/">Novos produtos</a></li>
                        <li><a href="/pt/informacoes/promocoes">Promoções</a></li>
                        <li><a href="/pt/informacoes/programa-vantagens">Programa de vantagens</a></li>
                        <li><a href="/pt/informacoes/programa-fidelidade">Programa de fidelidade</a></li>
                        
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

<script language="javascript" src="/web-files/js/jquery-1.11.1.min.js"></script>

<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

<script language="javascript" src="/web-files/js/vendor/jquery.easing.1.3.js"></script>


<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script language="javascript" src="/web-files/plugins/flexslider/jquery.flexslider-min.js"></script>
<script language="javascript" src="/web-files/plugins/fancybox/jquery.fancybox.js"></script>

<script language="javascript" src="/web-files/js/vendor/underscore-min.js"></script>
<script language="javascript" src="/web-files/js/funcoes.js"></script>
<script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.payment.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.mask.min.js"></script>
<script language="javascript" src="/web-files/pongstagr.am-master/source/pongstagr.am.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.magnific-popup.min.js"></script>
<script language="javascript" src="/web-files/js/joker.js"></script>
<script language="javascript" src="/web-files/js/default.js"></script>




<script> var link  = window.location.href; if( link.indexOf('https://') ){ window.location='https://www.mariadebarro.com.br/homolog/';} </script>

</body>
</html><?php }} ?>

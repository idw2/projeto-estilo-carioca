<?php /*%%SmartyHeaderCode:2018229794551aee3aacd5f8-64013986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce574022439a6251fc8f971e7e0df2d5318c8a3f' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/index.tpl',
      1 => 1427145363,
      2 => 'file',
    ),
    'b328a4f46471bc44c56ee38cf77378840002f421' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/header.tpl',
      1 => 1427145313,
      2 => 'file',
    ),
    '4d2de6ad92c5aedda0e6493fbd91cfdf532f9709' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/top.tpl',
      1 => 1427144954,
      2 => 'file',
    ),
    'dd144524c1ce788ab7336884af3554568f467dc4' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/footer.tpl',
      1 => 1427145033,
      2 => 'file',
    ),
    'b7e80b9e8a12b11b84750db106bce9809482853b' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/atendimento_online.tpl',
      1 => 1417455048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2018229794551aee3aacd5f8-64013986',
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
  'unifunc' => 'content_551aee3b057015_21423982',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551aee3b057015_21423982')) {function content_551aee3b057015_21423982($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Página Inicial</title>

        <meta name="title" content="Estilo Carioca"><meta name="description" content=""><meta name="author" content="Designlab">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
           

        <link rel="shortcut icon" href="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5">
        <link rel="stylesheet" href="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/slick.css">
        <link rel="stylesheet" href="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/sweet-alert.css">
        <link rel="stylesheet" href="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/jquery.raty.css">
        <link rel="stylesheet" href="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="/web-files/css/sweet-alert.css?v=2"/>
        <link rel="stylesheet" href="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/css/style.css">
        
        <script src="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/js/modernizr.custom.js"></script>
        <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <style>
            
            .sugestao a  { font-size: 16px; display: block; background: #f4f4f4 !important; color:#1f3c8a !important; height: 100% !important; padding: 15px !important;margin-top: 0.3em !important; width: 100% !important;  }
.sugestao a:hover { font-size: 16px; background: #1f3c8a !important; text-decoration: none; color:#fff !important; height: 100% !important; padding: 15px  !important; margin-top: 0.3em !important; width: 100% !important;  }
            
        
        @font-face {
            font-family: helveticaneue;
            src: local('HelveticaNeueLTStd-UltLt.otf'), url('HelveticaNeueLTStd-UltLt.otf');
        }
        
        body, .font-default, .footer-title{
            font-family: helveticaneue, Helvetica, sans-serif !important;
        }
        
        .footer-title{
            font-weight: 600 !important;
            color: #293751 !important;
        }
        
        body{
            line-height: 1.90rem !important;
        }
        
        
        
        
        .title-tag{
            background: #8795ae !important;
        }
        
        .theme-default .section-title3 > h2{
            box-shadow: 0 2px #8795ae !important;
        }
        
        </style>
        <!--[if IE 8]>
        <link rel="stylesheet" href="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/css/ie8.css" /><script src="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/js/respond.js" ></script>        <![endif]-->

        <script type="text/javascript">
            var App = window.App || {
                base_path: ''
            };
        </script>
        
        <script>$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
}) </script>

                                                                                            </head>
    <body class="theme-default ">

        <div class="search-popup">
            <div class="search-popup-out popup-close">
                <div class="search-popup-inner">
                    <div class="search-popup-container">
                        <div class="relative">
                            <form class="form search-popup-form" role="search" action="/en/novos-produtos" method="post">
                                <input type="search" placeholder="Buscar" name="search" class="input" autocomplete="off">
                                <button type="submit"><i class="sprite sprite-search"></i></button>
                                 
                            </form>
                            <div class="search-sugestao"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="stt_logado_print">
            <header id="header" class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="header-bar"></div>
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="hamburger"><span></span></a>
            <a class="brand" href="/en/">
                <img src="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/img/estilocarioca2.png" width="71" height="68">
            </a>
        </div>
        <nav class="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-social">
                    <a href="https://www.facebook.com/estilocarioca">
                        <b class="entypo-facebook"></b>
                    </a>
                    <a href="https://instagram.com/estilocarioca/">
                        <b class="entypo-instagrem"></b>
                    </a>
                    
                    <!--<a href="">
                        <i class="sprite sprite-twitter"></i>
                    </a>-->
                </li>
                <li class="navbar-search">
                    <a href="" class="search">
                        <i class="sprite sprite-search"></i>
                    </a>
                </li>
                                    <li>
                        <a href="/en/conta/login-cadastro/">
                            <i class="icon sprite sprite-user"></i>
                        </a>
                    </li>
                                <li class="navbar-cart">
                    <a href="/en/produtos/checkout/">
                        <i class="icon sprite sprite-cart"></i>
                        <span class="value">0</span>
                    </a>
                </li>
            </ul>
                    
            <ul class="nav navbar-nav">
                <li  class="active">
                    <a href="/en/">Home</a>
                </li>
                <li >
                    <a href="/en/informacoes/quem-somos">A Estilo Carioca</a>
                </li>
                <li >
                    <a href="/en/junior/">Junior</a>
                </li>
                <li >
                    <a href="/en/nilton-santos">Nilton Santos</a>
                </li>
            </ul>
        </nav>
    </div>
</header>  
        </section>


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
                <img src="/web-files/img/slider/slide_03.jpg" alt="-" />
                <div class="caption lfl str" data-x="30" data-hoffset="0" data-y="120" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slider4/banner-liqui-novo_08.png" alt="-" width="350" />
                </div>
                <div class="caption lfr str" data-x="900" data-hoffset="0" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slider4/banner-liqui-novo_05.png" alt="-" width="250" />
                </div>
                <div class="caption lft str" data-x="center" data-hoffset="0" data-y="30" data-speed="500" data-start="900" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slider4/banner-liqui-novo_03.png"  width="350" />
                </div>
            </li>

            <li data-transition="fade" data-slotamount="7">
                <img src="/web-files/img/slider/slide_03.jpg" alt="-" />
                <div class="caption lfl str" data-x="30" data-hoffset="0" data-y="110" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_03/img-3.png" alt="-" width="380" />
                </div>
                <div class="caption lfr str" data-x="900" data-hoffset="-80" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_03/img-1.png" alt="-" width="300" />
                </div>
                <div class="caption lft str" data-x="center" data-hoffset="0" data-y="0" data-speed="500" data-start="900" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_03/img-2.png"  width="250" />
                </div>
            </li>

            <li data-transition="fade" data-slotamount="7">
                <img src="/web-files/img/slider/slide_03.jpg" alt="-" />
                <div class="caption lfl str" data-x="30" data-hoffset="-30" data-y="0" data-speed="500" data-start="500" data-easing="easeOutExpo">
                    <img src="/web-files/img/slider/slide_03-item-1.png" alt="-" width="300" />
                </div>
                <div class="caption lfr str" data-x="900" data-hoffset="-30" data-y="0" data-speed="500" data-start="700" data-easing="easeOutExpo">
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
-->
<!-- /SLIDER  -->
<!-- 3 PRODUTOS  -->
<!--
<section class="pag-section hide-mobile">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="/web-files/img/b-1.png" alt="" border="0" title="" class="img-responsive" style="width:360px;height:185px;" />
            </div>
            <div class="col-sm-4">
                <img src="/web-files/img/slider/banner-menor-central2.jpg" alt="Frete grátis nas compras acima de R$149,00" border="0" title="" class="img-responsive" />
            </div>
            <div class="col-sm-4">
                <img src="/web-files/img/b-2.png" alt="" border="0" title="" class="img-responsive" style="width:360px;height:185px;" />
            </div>
        </div>
    </div>
</section>
-->
<!-- /3 PRODUTOS  -->
<!-- RECEM CHEGADOS  -->

<section class="hero ">
    <div class="container ">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel">
                    <h2>CONHEÇA A ESTILO CARIOCA</h2>
                    <p style='font-family: "Roboto Condensed", Helvetica, sans-serif; font-weight: 300'>Andar para frente é fundamental na vida, traz mudanças, novidades e acompanha evolução. E, como bom carioca, ESTILO CARIOCA não se opõem a esse pensamento, nem tão pouco a evolução. </p>
                    <div class="hr"></div>
                    <p>
                        <a style="display: inline-block; max-width: 42%;" href='/en/nossos-produtos' class="btn btn-lg">Compre agora</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/img/hero.png" width="500">
            </div>
        </div>
    </div>
    <a href="" data-target=".section" class="scroll-down"></a>
</section>

<section class="section">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="section-title2 ">
                    <h2 class="title">FIQUE POR DENTRO DAS NOVIDADES</h2>
                    <p class="subtitle">Preencha com seu nome e email para receber nossa Newsletter.</p>
                </div>
            </div>
        </div>
       
        <form action="" method="post"  novalidate="" class="ajax-form">
            <div class="row ">
                <div class="col-sm-4  ">
                    <input type="text" placeholder="Seu Nome" name="nome" id="nome_newsletter_2" class="form-control" required>
                </div>
                <div class="col-sm-4 ">
                    <input type="email" placeholder="Seu Email" name="email" id="email_newsletter_1" class="form-control" required>
                </div>
                <div class="col-sm-4 ">
                    <button type="submit" class="btn btn-default btn-block" style="width: 100%; border-radius: 0;">Enviar</button>
                </div>
                <div id="erro_newsletter_1"> </div>
            </div>
        </form>
    </div>
</section>

<div class="container "><hr></div>

<section class="section">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title2">
                    <h2 class="title">Nossos Produtos</h2>
                    <p class="subtitle">COMPRE AGORA</p>
                </div>
            </div>
        </div>
        <div class="row ">
                                            <div class="col-sm-3">
                    <div class="thumb">
                        <div class="thumb-img ">
                            <a href="/en/junior/vestido-mangueira">
                            <img src="/web-files/upload/thumbs/147AD9647EFA3C0821C56AB07E160DBF/34F117BBD985411D30EAB23715E8963A.jpg" alt="Vestido Mangueira" title="Vestido Mangueira" width="312" height="312">
                            </a>
                        </div>
                        <div class="thumb-holder">
                            <div class="thumb-holder-out">
                                <div class="thumb-holder-in">
                                    <h2 class="price">R$ 149,90</h2>
                                    <p class="name">Junior<br/><span style="font-size: 18px !important;">Vestido Mangueira</span></p>
                                    <a href="/en/junior/vestido-mangueira" class="btn btn-default btn-buy">COMPRAR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                                         <div class="col-sm-3">
                    <div class="thumb">
                        <div class="thumb-img ">
                            <a href="/en/junior/camisa-60-anos-1">
                            <img src="/web-files/upload/thumbs/36A823AC9B17E853F36A76AB07D374E7/4E3C66D4F4BD4FE03BB12E376B3D5DF4.jpg" alt="Camisa 60 Anos" title="Camisa 60 Anos" width="312" height="312">
                            </a>
                        </div>
                        <div class="thumb-holder">
                            <div class="thumb-holder-out">
                                <div class="thumb-holder-in">
                                    <h2 class="price">R$ 69,00</h2>
                                    <p class="name">Junior<br/><span style="font-size: 18px !important;">Camisa 60 Anos</span></p>
                                    <a href="/en/junior/camisa-60-anos-1" class="btn btn-default btn-buy">COMPRAR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                                         <div class="col-sm-3">
                    <div class="thumb">
                        <div class="thumb-img ">
                            <a href="/en/junior/camisa-masculina-4">
                            <img src="/web-files/upload/thumbs/BBDC8985EB1D1684197A5209BAF5B03E/285D5FACCABCD1FAEA6DBEEF02E825FB.jpg" alt="Camisa Masculina" title="Camisa Masculina" width="312" height="312">
                            </a>
                        </div>
                        <div class="thumb-holder">
                            <div class="thumb-holder-out">
                                <div class="thumb-holder-in">
                                    <h2 class="price">R$ 139,90</h2>
                                    <p class="name">Junior<br/><span style="font-size: 18px !important;">Camisa Masculina</span></p>
                                    <a href="/en/junior/camisa-masculina-4" class="btn btn-default btn-buy">COMPRAR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                                         <div class="col-sm-3">
                    <div class="thumb">
                        <div class="thumb-img ">
                            <a href="/en/nilton-santos/camisa-masculina-2">
                            <img src="/web-files/upload/thumbs/2129F89E8463C2550AECD8D376B65698/58A4FF37E40C5F55A5BC9B8E68AA9114.jpg" alt="Camisa Maculina" title="Camisa Maculina" width="312" height="312">
                            </a>
                        </div>
                        <div class="thumb-holder">
                            <div class="thumb-holder-out">
                                <div class="thumb-holder-in">
                                    <h2 class="price">R$ 129,90</h2>
                                    <p class="name">Junior<br/><span style="font-size: 18px !important;">Camisa Maculina</span></p>
                                    <a href="/en/nilton-santos/camisa-masculina-2" class="btn btn-default btn-buy">COMPRAR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                 </div>
    </div>
</section>
        <div style="margin-bottom: 5%;"></div>
        <!--
<section class="pag-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>
                        <a href="/en/novos-produtos">
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
                                <a href="/en/junior/vestido-mangueira">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/147AD9647EFA3C0821C56AB07E160DBF/34F117BBD985411D30EAB23715E8963A.jpg" alt="Vestido Mangueira" title="Vestido Mangueira"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/en/junior/vestido-mangueira">
                                    <div class="thumbnail-title"> R$ 149,90</div>
                                </a>
                                <a href="/en/junior/vestido-mangueira">
                                    <div class="thumbnail-subtitle">Vestido Mangueira</div>
                                </a>
                                
                                <span class="seis-vezes"><b>6x</b> de <b>R$ 24,98</b></span>
                                
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/en/junior/camisa-60-anos-1">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/36A823AC9B17E853F36A76AB07D374E7/4E3C66D4F4BD4FE03BB12E376B3D5DF4.jpg" alt="Camisa 60 Anos" title="Camisa 60 Anos"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/en/junior/camisa-60-anos-1">
                                    <div class="thumbnail-title"> R$ 69,00</div>
                                </a>
                                <a href="/en/junior/camisa-60-anos-1">
                                    <div class="thumbnail-subtitle">Camisa 60 Anos</div>
                                </a>
                                
                                <span class="seis-vezes"><b>6x</b> de <b>R$ 11,50</b></span>
                                
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/en/junior/camisa-masculina-4">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/BBDC8985EB1D1684197A5209BAF5B03E/285D5FACCABCD1FAEA6DBEEF02E825FB.jpg" alt="Camisa Masculina" title="Camisa Masculina"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/en/junior/camisa-masculina-4">
                                    <div class="thumbnail-title"> R$ 139,90</div>
                                </a>
                                <a href="/en/junior/camisa-masculina-4">
                                    <div class="thumbnail-subtitle">Camisa Masculina</div>
                                </a>
                                
                                <span class="seis-vezes"><b>6x</b> de <b>R$ 23,32</b></span>
                                
                                
                            </div>
                        </div>
                    </div>
                                                                <div class="col-thumb col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <div class="thumbnail-img">
                                <a href="/en/nilton-santos/camisa-masculina-2">
                                                                            <span class="thumbnail-tag">Novo</span>
                                                                        <img src="/web-files/upload/thumbs/2129F89E8463C2550AECD8D376B65698/58A4FF37E40C5F55A5BC9B8E68AA9114.jpg" alt="Camisa Maculina" title="Camisa Maculina"/>
                                </a>
                            </div>
                            <div class="thumbnail-infos">
                                <a href="/en/nilton-santos/camisa-masculina-2">
                                    <div class="thumbnail-title"> R$ 129,90</div>
                                </a>
                                <a href="/en/nilton-santos/camisa-masculina-2">
                                    <div class="thumbnail-subtitle">Camisa Maculina</div>
                                </a>
                                
                                <span class="seis-vezes"><b>6x</b> de <b>R$ 21,65</b></span>
                                
                                
                            </div>
                        </div>
                    </div>
                                    </div>
        
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
                        <a href="/en/mais-vendidos">
                            <strong>Mais</strong> Vendidos
                        </a>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">

                                        

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
                        <a href="/en/promocoes">
                            <strong>Itens</strong> em Promoção
                        </a>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">

                                        

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

<!-- FOOTER  -->



<footer class="footer ">
    <div class="container ">

        <div class="row footer-content">
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">LOGIN E CADASTRO</h2>
                <ul class="list-unstyled">
                    <li><a href="/en/conta/">Acompanhe seu pedido</a></li>
                    <li><a href="/en/conta/login-cadastro/">Login e Cadastro</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">ATENDIMENTO AO CLIENTE</h2>
                <ul class="list-unstyled">
                    <li><a href="/en/informacoes/contato">Entre em contato</a></li>
                    <li><a href="/en/informacoes/trocas-e-devolucoes">Trocas e devoluções</a></li>
                    <li><a href="/en/informacoes/termos-servicos">Termos de serviço</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">SIGA A EC</h2>
                <ul class="list-unstyled list-inline list-social">
                    <!--<li><a href=""><i class="sprite sprite-twitter-2"></i></a></li>-->
                    <li><a href="https://www.facebook.com/estilocarioca" target="blank"><b class="entypo-facebook"></b></a></li>
                    <li><a href="https://instagram.com/estilocarioca/" target="blank"><b class="entypo-instagrem"></b></a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">

                <h2 class="footer-title">FIQUE POR DENTRO DA EC</h2>
                <form action="" method="post" class="newsletter-form ajax-form" novalidate="">
                    <div class="form-row">
                        <input name="nome_newsletter_2" id="nome" type="text" class="form-control" placeholder="Seu nome" required>
                    </div>
                    <div class="form-row">
                        <input name="email_newsletter_2" id="email" type="text" class="form-control" placeholder="Seu e-mail" required>
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-default btn-block">Enviar</button>
                    </div>
                    <div id="erro_newsletter_2"> </div>
                </form>
            </div>
        </div>
        <hr>
        
        
        <div class="row footer-bottom">
            <div class="col-sm-6 col-sm-push-6 text-right">
                <span class="selo-es sprite sprite-selo-es"></span>
                <span class="cartoes sprite sprite-cartoes"></span>
                <img src="/web-files/img/bandeiras.png" alt=""/>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <p class="copy">Desenvolvido por <span id="dl"></span></p>
                <script type="text/javascript">
                    var _dl = _dl || {};
                    _dl.width = "80";
                    _dl.color = "gray";
                    (function () {
                        var a = document.createElement("script");
                        a.type = "text/javascript";
                        a.async = !0;
                        a.src = "//static.designlab.com.br/js/bydl.js";
                        var b = document.getElementsByTagName("script")[0];
                        b.parentNode.insertBefore(a, b)
                    })();
                </script>
            </div>
                    
        </div>
                <hr>
                    
                    <div class="row footer-content text-center">
            <p style="line-height: 1.8em;font-size: 1.2rem;">
                <strong>RMGSPORT COMERCIO EIRELI - ME</strong>
                <br>CNPJ: 21.468.076/0001-16
                <br>&copy; Todos os direitos reservados - Rua Gazzi de Sá, nº17 - Lote 17 Quadra G , Barra da Tijuca / RJ - CEP: 22.793-210 
                <br>Atendimento ao cliente: rodrigo@estilocarioca.com.br - 21 3326.1986
            </p>
        </div>
    </div>
</footer>                

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script language="javascript" src="/web-files/js/funcoes.js"></script>
<script src="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/slick.min.js"></script>
<script src="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/jquery.raty.js"></script>
<script src="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/underscore-min.js"></script>
<script src="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/mustache.min.js"></script>
<script src="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/js/scripts.js"></script>
<script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.payment.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.mask.min.js"></script>
<script language="javascript" src="/web-files/js/joker.js"></script>
<script language="javascript" src="/web-files/js/default.js"></script>
<script language="javascript" src="/web-files/js/sweet-alert.js"></script>
<script language="javascript" src="/web-files/js/stickyfloat.js"></script>
 <script language="javascript"> jQuery('.checkout-panel-2').stickyfloat({ duration: 0, easing:"linear",   startOffset: 60,   }); </script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.3.0/es5-shim.js'></script>



</body>
</html><?php }} ?>

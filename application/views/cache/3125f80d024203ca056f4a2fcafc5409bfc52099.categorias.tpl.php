<?php /*%%SmartyHeaderCode:558990597550748e4ed0355-00253155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3125f80d024203ca056f4a2fcafc5409bfc52099' => 
    array (
      0 => '/home/estil450/public_html/application/views/categorias.tpl',
      1 => 1426115124,
      2 => 'file',
    ),
    '9915484c49efae1e853c1be7aa9d8b2c159a82c4' => 
    array (
      0 => '/home/estil450/public_html/application/views/header.tpl',
      1 => 1425767056,
      2 => 'file',
    ),
    '21ad6c09fd0cb3d807b70a3f24dfe7c8b337e8c6' => 
    array (
      0 => '/home/estil450/public_html/application/views/top.tpl',
      1 => 1425916446,
      2 => 'file',
    ),
    '176fac5985d5dc4b43edea6c0618ca1f6996d998' => 
    array (
      0 => '/home/estil450/public_html/application/views/footer.tpl',
      1 => 1426115679,
      2 => 'file',
    ),
    'e42802b9f9225092d26556a5ec1f3ebf37f60366' => 
    array (
      0 => '/home/estil450/public_html/application/views/atendimento_online.tpl',
      1 => 1417455048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '558990597550748e4ed0355-00253155',
  'variables' => 
  array (
    'btn_anterior' => 0,
    'paginacao' => 0,
    'total_produto' => 0,
    'pagina' => 0,
    'pgn' => 0,
    'search' => 0,
    'categoria' => 0,
    'language' => 0,
    'sort' => 0,
    'qntdd' => 0,
    'btn_proximo' => 0,
    'page' => 0,
    'arr' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550748e5806bc0_79798000',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550748e5806bc0_79798000')) {function content_550748e5806bc0_79798000($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Categoria | Junior</title>

        <meta name="title" content="Estilo Carioca"><meta name="description" content=""><meta name="author" content="Designlab">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
           

        <link rel="shortcut icon" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/slick.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/sweet-alert.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/jquery.raty.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="/web-files/css/sweet-alert.css?v=2"/>
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/style.css">
        
        <script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/modernizr.custom.js"></script>
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
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/ie8.css" /><script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/respond.js" ></script>        <![endif]-->

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
                <img src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/estilocarioca2.png" width="71" height="68">
            </a>
        </div>
        <nav class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li >
                    <a href="/en/">Home</a>
                </li>
                <li >
                    <a href="/en/informacoes/quem-somos">A Estilo Carioca</a>
                </li>
                <li  class="active">
                    <a href="/en/junior/">Junior</a>
                </li>
                <li >
                    <a href="/en/nilton-santos">Nilton Santos</a>
                </li>
            </ul>
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
                        <span class="value">1</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>  
        </section>


<style>

    .divisor-dashed {
        display: block;
        border-bottom: dashed 1px #e9e9e9;
        margin: 0 0 15px;
    }

    .theme-default .pagination > li > a, .theme-default .pagination > li > span {
        color: #919191;
        background-color: #e9e9e9;
        border: none;
        font-weight: 400;
        font-size: 13px;
        font-size: 1.3rem;
        border-radius: 2px;
    }

    .theme-default .pagination > li:last-child > a, .theme-default .pagination > li:last-child > span {
        border-radius: 0;
    }

    .theme-default .pagination > li {
        display: inline-block;
        float: left;
        margin-left: 4px;
    }

    .theme-default .pagination > .active > a, .theme-default .pagination > .active > span, .theme-default .pagination > .active > a:hover, .theme-default .pagination > .active > span:hover, .theme-default .pagination > .active > a:focus, .theme-default .pagination > .active > span:focus {
        color: #fff;
        border-color: #8795ae;
        background: #8795ae;
    }

    .theme-default .pagination > .active > a, .theme-default .pagination > .active > span, .theme-default .pagination > .active > a:hover, .theme-default .pagination > .active > span:hover, .theme-default .pagination > .active > a:focus, .theme-default .pagination > .active > span:focus {
        color: #fff;
        border-color: #8795ae;
        background: #8795ae;
    }

</style>

<section class="pag-section">
    <div class="container">

        <div class="row">
            <div class="col col-lg-6 col-md-6">
                <div class="page-controls">
                    <ul class="pagination">
                        <li class="disabled" ><span>« Anterior</span></li>
                                                                                                                                    <li class="active"><a href="#">1 <span class="sr-only">(atual)</span></a></li>
                                                            
                                                     
                        
                        

                        <li class="disabled"><a href="#">Próxima »</a></li>
                    </ul>

                </div>
            </div>
            <div class="col col-lg-6 col-md-6 text-right">
                <div class="page-controls">
                    <p></p>
                    <div class="form-inline page-controls-options">
                        <label>Mostrar por: <select name="selectPrductSort" id="selectPrductSort" class="form-control">
                                <option value="">--</option>
                                <option value="mais-novos" selected>Mais novos</option>
                                <option value="preco-crescente" >Preço: Menor para o maior</option>
                                <option value="preco-decrescente" >Preço: Maior para o menor</option>
                                <option value="nome-crescente" >Listar por nome: A para o Z</option>
                                <option value="nome-decrescente" >Listar por nome: Z para o A</option>
                                <option value="quantidade" >Em estoque</option>
                            </select>
                        </label>
                                                    <input type="hidden" name="url" id="url" value="/en/junior"/>
                                                <input type="hidden" name="pagina" id="pagina" value="1"/>
                        <input type="hidden" name="qntdd_produtos" id="qntdd_produtos" value="16"/>
                    </div>
                </div>
            </div>
            <div class="col col-lg-12 col-md-12 divisor-dashed"></div>        
        </div>

        <div class="row">
            <div class="col-lg-12 section-title">
                <h2 class="title">Junior</h2>
                <p class="subtitle">Produtos</p>
            </div>
        </div>            

        <div class="row">

                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/junior/junior-regata-branca">
                                    <img src="/web-files/upload/thumbs/A746BD1552ECC4FF45158ADA120810AD/A0F8383D9519FD53AF62363CDCE75786.jpg" alt="Junior Regata Branca " title="Junior Regata Branca " width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 139,00</h2>
                                        <p class="name">Junior<br/><span style="font-size: 18px !important;">Junior Regata Branca </span></p>
                                        <a href="/en/junior/junior-regata-branca" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/junior/vestido-sem-manga">
                                    <img src="/web-files/upload/thumbs/98395B3825EA1D9DFA2BA9CF52029DE6/2B481BDE6EBB51D8754B86DD5034553A.jpg" alt="Vestido sem Manga" title="Vestido sem Manga" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 159,00</h2>
                                        <p class="name">Junior<br/><span style="font-size: 18px !important;">Vestido sem Manga</span></p>
                                        <a href="/en/junior/vestido-sem-manga" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/junior/vestido-com-manga-1">
                                    <img src="/web-files/upload/thumbs/2589C7B5621C04ED9D8DCEE9CB7A330B/198850B2E95329E81CFEE0318A535560.jpg" alt="Vestido com Manga" title="Vestido com Manga" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 159,00</h2>
                                        <p class="name">Junior<br/><span style="font-size: 18px !important;">Vestido com Manga</span></p>
                                        <a href="/en/junior/vestido-com-manga-1" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/junior/casaco-moletom">
                                    <img src="/web-files/upload/thumbs/F2709D160014427803A16089530BE42F/7AB97A585531D69AB265F524E2D256AD.jpg" alt="Casaco Moletom" title="Casaco Moletom" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 269,90</h2>
                                        <p class="name">Junior<br/><span style="font-size: 18px !important;">Casaco Moletom</span></p>
                                        <a href="/en/junior/casaco-moletom" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/junior/camisa-masculina-1">
                                    <img src="/web-files/upload/thumbs/BBDC8985EB1D1684197A5209BAF5B03E/285D5FACCABCD1FAEA6DBEEF02E825FB.jpg" alt="Camisa Masculina" title="Camisa Masculina" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 159,00</h2>
                                        <p class="name">Junior<br/><span style="font-size: 18px !important;">Camisa Masculina</span></p>
                                        <a href="/en/junior/camisa-masculina-1" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/junior/camisa-regata-1">
                                    <img src="/web-files/upload/thumbs/D483012B3FFC796D2C28D4A46C73AAA0/F89257F1A9C9E4CADE9F3C7A03A8BE53.jpg" alt="Camisa Regata" title="Camisa Regata" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 159,00</h2>
                                        <p class="name">Junior<br/><span style="font-size: 18px !important;">Camisa Regata</span></p>
                                        <a href="/en/junior/camisa-regata-1" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
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
                                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/junior/baby-look">
                                    <img src="/web-files/upload/thumbs/3485F00DBDB2CD9489F6FB8F0C59A490/C5B7BB9B6C9331AA7140A48807D33778.jpg" alt="Baby Look" title="Baby Look" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 159,00</h2>
                                        <p class="name">Junior<br/><span style="font-size: 18px !important;">Baby Look</span></p>
                                        <a href="/en/junior/baby-look" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                                    </div>

        <div class="row"  style="margin-top: 6%;">
            <div class="col col-lg-12 col-md-12 divisor-dashed"></div>
            <div class="col col-lg-6 col-md-6">
                <div class="page-controls">
                    <ul class="pagination">
                        <li class="disabled" ><span>« Anterior</span></li>
                                                                                                                                    <li class="active"><a href="#">1 <span class="sr-only">(atual)</span></a></li>
                                                            
                                                     
                        
                        <li class="disabled"><a href="#">Próxima »</a></li>
                    </ul>
                </div>
            </div>
            <div class="col col-lg-6 col-md-6 text-right">
                <div class="page-controls">
                    <div class="form-inline page-controls-options">
                        <p></p>
                        <label>Mostrar por: <select name="selectPrductSort_2" id="selectPrductSort_2" class="form-control">
                                <option value="">--</option>
                                <option value="mais_novos" selected>Mais novos</option>
                                <option value="preco-crescente" >Preço: Menor para o maior</option>
                                <option value="preco-decrescente" >Preço: Maior para o menor</option>
                                <option value="nome-crescente" >Listar por nome: A para o Z</option>
                                <option value="nome-decrescente" >Listar por nome: Z para o A</option>
                                <option value="quantidade" >Em estoque</option>
                            </select>
                        </label>


                                                    <input type="hidden" name="url" id="url" value="/en/junior"/>
                        
                        <input type="hidden" name="pagina" id="pagina" value="1"/>
                    </div>
                </div>
            </div>
        </div>





    </div>
</section>

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
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/slick.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/jquery.raty.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/underscore-min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/mustache.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/scripts.js"></script>
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

<?php /*%%SmartyHeaderCode:4322478235519749e1d8db5-23999859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76f2d5b26ff57b84ad4d70c0eac3f440dab9b672' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/categorias.tpl',
      1 => 1426115124,
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
  'nocache_hash' => '4322478235519749e1d8db5-23999859',
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
  'unifunc' => 'content_5519749e75fd59_89967978',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5519749e75fd59_89967978')) {function content_5519749e75fd59_89967978($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Categoria | Nilton Santos</title>

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
                        <a href="/en/conta/" id="nav-login" style="display: inline-block;"> Minha conta</a>
                    </li>
                    <li>
                        <a href="/en/conta/sair" id="nav-login" style="display: inline-block;">Sair</a>
                    </li>   
                                <li class="navbar-cart">
                    <a href="/en/produtos/checkout/">
                        <i class="icon sprite sprite-cart"></i>
                        <span class="value">0</span>
                    </a>
                </li>
            </ul>
                    
            <ul class="nav navbar-nav">
                <li >
                    <a href="/en/">Home</a>
                </li>
                <li >
                    <a href="/en/informacoes/quem-somos">A Estilo Carioca</a>
                </li>
                <li >
                    <a href="/en/junior/">Junior</a>
                </li>
                <li  class="active">
                    <a href="/en/nilton-santos">Nilton Santos</a>
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
                                                    <input type="hidden" name="url" id="url" value="/en/nilton-santos"/>
                                                <input type="hidden" name="pagina" id="pagina" value="1"/>
                        <input type="hidden" name="qntdd_produtos" id="qntdd_produtos" value="16"/>
                    </div>
                </div>
            </div>
            <div class="col col-lg-12 col-md-12 divisor-dashed"></div>        
        </div>

        <div class="row">
            <div class="col-lg-12 section-title">
                <h2 class="title">Nilton Santos</h2>
                <p class="subtitle">Produtos</p>
            </div>
        </div>            

        <div class="row">

                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/nilton-santos/camisa-masculina-3">
                                    <img src="/web-files/upload/thumbs/B57D9770DDC8E281B42EDDAA76528A61/6EEA28499DD6A26FBBDAE56CB6B8A332.jpg" alt="Camisa Masculina" title="Camisa Masculina" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 159,00</h2>
                                        <p class="name">Nilton Santos<br/><span style="font-size: 18px !important;">Camisa Masculina</span></p>
                                        <a href="/en/nilton-santos/camisa-masculina-3" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/nilton-santos/nilton-santos-manga-longa-1">
                                    <img src="/web-files/upload/thumbs/AC529423034079FBCF30C78986410318/C0B5B61FF6B28BC796FB7C80BF9E9482.jpg" alt="Nilton Santos Manga Longa" title="Nilton Santos Manga Longa" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 149,90</h2>
                                        <p class="name">Nilton Santos<br/><span style="font-size: 18px !important;">Nilton Santos Manga Longa</span></p>
                                        <a href="/en/nilton-santos/nilton-santos-manga-longa-1" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/nilton-santos/baby-look-1">
                                    <img src="/web-files/upload/thumbs/D502690F150ADE901D99AA478472DC6B/7FC1C20D4E8D8D0A108C1806FC67959F.jpg" alt="Baby Look" title="Baby Look" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 159,00</h2>
                                        <p class="name">Nilton Santos<br/><span style="font-size: 18px !important;">Baby Look</span></p>
                                        <a href="/en/nilton-santos/baby-look-1" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/nilton-santos/camisa-masculina-2">
                                    <img src="/web-files/upload/thumbs/3EB20EA3705800DCDA50232E0C45D8DC/69D44DFC22D874536A1F71F3AC53DC54.jpg" alt="Camisa Bi Mundial" title="Camisa Bi Mundial" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 129,90</h2>
                                        <p class="name">Nilton Santos<br/><span style="font-size: 18px !important;">Camisa Bi Mundial</span></p>
                                        <a href="/en/nilton-santos/camisa-masculina-2" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/nilton-santos/camisa-masculina">
                                    <img src="/web-files/upload/thumbs/38D0F94FF10F2B3C9AD0CBAA3BEA94C0/F2D1B7D77429934D67A442AC1463EBA7.jpg" alt="Camisa Masculina" title="Camisa Masculina" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 159,00</h2>
                                        <p class="name">Nilton Santos<br/><span style="font-size: 18px !important;">Camisa Masculina</span></p>
                                        <a href="/en/nilton-santos/camisa-masculina" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/nilton-santos/camisa-maculina">
                                    <img src="/web-files/upload/thumbs/2129F89E8463C2550AECD8D376B65698/58A4FF37E40C5F55A5BC9B8E68AA9114.jpg" alt="Camisa Maculina" title="Camisa Maculina" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 149,90</h2>
                                        <p class="name">Nilton Santos<br/><span style="font-size: 18px !important;">Camisa Maculina</span></p>
                                        <a href="/en/nilton-santos/camisa-maculina" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/nilton-santos/vestido-feminino-botafogo">
                                    <img src="/web-files/upload/thumbs/4659296EA562CF1684D07C234118D705/60BE9FB38569B6CBCF6D3899D4B63611.jpg" alt="Vestido Feminino Botafogo" title="Vestido Feminino Botafogo" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 159,00</h2>
                                        <p class="name">Nilton Santos<br/><span style="font-size: 18px !important;">Vestido Feminino Botafogo</span></p>
                                        <a href="/en/nilton-santos/vestido-feminino-botafogo" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                                                                <div class="col-xs-6 col-sm-3" style="margin-bottom: 30px;">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/en/nilton-santos/camisa-feminina-regata">
                                    <img src="/web-files/upload/thumbs/3B97CA9002B5850A760E9BB3F92B792C/67C5982F2743A44C67B90AE6E3857672.jpg" alt="Camisa Feminina Regata" title="Camisa Feminina Regata" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ 159,00</h2>
                                        <p class="name">Nilton Santos<br/><span style="font-size: 18px !important;">Camisa Feminina Regata</span></p>
                                        <a href="/en/nilton-santos/camisa-feminina-regata" class="btn btn-default btn-buy">COMPRAR</a>
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


                                                    <input type="hidden" name="url" id="url" value="/en/nilton-santos"/>
                        
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

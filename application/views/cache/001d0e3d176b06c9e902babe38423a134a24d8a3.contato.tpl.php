<?php /*%%SmartyHeaderCode:5822898275508a2abe04627-32419611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '001d0e3d176b06c9e902babe38423a134a24d8a3' => 
    array (
      0 => '/home/estil450/public_html/application/views/contato.tpl',
      1 => 1424813759,
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
      1 => 1426628688,
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
  'nocache_hash' => '5822898275508a2abe04627-32419611',
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'nome' => 0,
    'email' => 0,
    'assunto' => 0,
    'mensagem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5508a2ac0d4c00_37838779',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508a2ac0d4c00_37838779')) {function content_5508a2ac0d4c00_37838779($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Fale conosco</title>

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
                            <form class="form search-popup-form" role="search" action="/pt/novos-produtos" method="post">
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
            <a class="brand" href="/pt/">
                <img src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/estilocarioca2.png" width="71" height="68">
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
                        <a href="/pt/conta/login-cadastro/">
                            <i class="icon sprite sprite-user"></i>
                        </a>
                    </li>
                                <li class="navbar-cart">
                    <a href="/pt/produtos/checkout/">
                        <i class="icon sprite sprite-cart"></i>
                        <span class="value">0</span>
                    </a>
                </li>
            </ul>
                    
            <ul class="nav navbar-nav">
                <li >
                    <a href="/pt/">Home</a>
                </li>
                <li >
                    <a href="/pt/informacoes/quem-somos">A Estilo Carioca</a>
                </li>
                <li >
                    <a href="/pt/junior/">Junior</a>
                </li>
                <li >
                    <a href="/pt/nilton-santos">Nilton Santos</a>
                </li>
            </ul>
        </nav>
    </div>
</header>  
        </section>



<div class="container"></div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">FALE CONOSCO</h2>
                <p class="subtitle">--//--</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

            <div class="jumbotron">
                <div class="container">

                    <!-- h1 e p que já tínhamos -->
                    <h2>Ainda está com problemas?</h2>
                    <br/>
                    <p><strong>E-mail:</strong><br/>
                        <span style='font-size: 20'>contato@estilocarioca.com.br</span>
                    </p><br/>
                    <br/>
                    <p><strong>Obs:</strong><br/>O prazo de respostas para as solicitações é de até 24h.</p><br/>

                </div>
            </div>
        </div> 

        <div class="col-md-6">
            <form class="navbar-form navbar-left" style="width: 100%" action="/pt/informacoes/contato" method="post">

                
                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

                                
                <p><input type="text" class="form-control" style="min-width: 100%" id="nome" name="nome" maxlength="40" value="" placeholder="Nome completo"/></p>
                <p><input type="text" class="form-control" style="max-width: 47%" id="email" name="email" maxlength="70" value="" placeholder="E-mail"/></p>
                <p><input type="text" class="form-control" style="min-width: 100%" id="assunto" name="assunto" maxlength="70" value="" placeholder="Assunto"/></p>
                <p><textarea class="form-control" rows="5" style="min-width: 100%" id="mensagem" name="mensagem"></textarea></p>
                <p><button type="submit" class="btn btn-primary btn-primary-maria" name="enviar">ENVIAR</button></p>

            </form>
        </div>
        </div>
    </div>
</section>

<div class="container">
    <br/>   
 <div class="row">
        
    </div>
</div>
<div style="clear: both;"></div>

<!-- FOOTER  -->



<footer class="footer ">
    <div class="container ">

        <div class="row footer-content">
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">LOGIN E CADASTRO</h2>
                <ul class="list-unstyled">
                    <li><a href="/pt/conta/">Acompanhe seu pedido</a></li>
                    <li><a href="/pt/conta/login-cadastro/">Login e Cadastro</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2 class="footer-title">ATENDIMENTO AO CLIENTE</h2>
                <ul class="list-unstyled">
                    <li><a href="/pt/informacoes/contato">Entre em contato</a></li>
                    <li><a href="/pt/informacoes/trocas-e-devolucoes">Trocas e devoluções</a></li>
                    <li><a href="/pt/informacoes/termos-servicos">Termos de serviço</a></li>
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
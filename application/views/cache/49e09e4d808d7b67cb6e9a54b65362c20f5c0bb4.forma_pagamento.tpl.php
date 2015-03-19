<?php /*%%SmartyHeaderCode:1572120910543599552fdf46-05843805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49e09e4d808d7b67cb6e9a54b65362c20f5c0bb4' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/forma_pagamento.tpl',
      1 => 1412180236,
      2 => 'file',
    ),
    '6a0d8cd5da5366cd163c1096d3e3a62591b34250' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/header.tpl',
      1 => 1412798759,
      2 => 'file',
    ),
    'dddb63286e4a273b560ff992665e7d4c506e6fdb' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/navbar.tpl',
      1 => 1412200448,
      2 => 'file',
    ),
    '9c6368fa7ae30d46a3ff6d19316b23707d94dba8' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/footer.tpl',
      1 => 1412797174,
      2 => 'file',
    ),
    '90e90a97284dec988adac3b7318a019a6b5d1ff6' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/atendimento_online.tpl',
      1 => 1412097035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1572120910543599552fdf46-05843805',
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54359955574be1_42342677',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54359955574be1_42342677')) {function content_54359955574be1_42342677($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Forma de Pagamento</title>

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
                        <li><a href="/pt/produtos/autenticacao/" id="nav-login">Login e Cadastro</a></li>
                        <li><a onclick="open_atendimento()" style="cursor: pointer;">Atendimento Online</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-center">
                        <li><a href="tel:+552132835265">Tel: 21 3283.5265</a></li>
                        <li><span>Menu</span></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/pt/produtos/checkout/">Wishlist</a></li>
                        <li>
                            <a id="shopping-cart" href="/pt/produtos/checkout/" class="btn-with-icon fa fa-shopping-cart">
                                                                    <span class="label label-primary">1</span>
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
                        <a class="carrinho-wrap" href="/pt/produtos/checkout/">
                            <img src="/web-files/img/carrinho.png" alt="" border="0" title="" />
                            <span id="item_carrinho">1 Item                             </span>
                        </a>
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

    <li  class="" ><a href="/pt/">Home</a></li>
    <li  class="" ><a href="/pt/aneis/">Anéis</a></li>            
    <li  class="" ><a href="/pt/brincos/">Brincos</a></li>           
    <li  class="" ><a href="/pt/colares/">Colares</a></li>           
    <li  class="" ><a href="/pt/pulseiras/">Pulseiras</a></li>                       
    <li  class="" ><a href="/pt/conjuntos/">Conjuntos</a></li>                       
    <li  class="" ><a href="/pt/promocoes/">Promoções</a></li>                       

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


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>Forma</strong> de Pagamento
                    </h2>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p><strong>Formas de Pagamento</strong></p>
<p>O pagamento pode ser efetuado atrav&eacute;s de cart&atilde;o de cr&eacute;dito, d&eacute;bito via conta PayPal ou boleto banc&aacute;rio.</p>
<p>&nbsp;</p>
<p><strong>&hearts; Cart&atilde;o de Cr&eacute;dito</strong></p>
<p>Aceitamos os seguintes cart&otilde;es de cr&eacute;dito: Amex, Hipercard, Visa, Mastercard, Diners e Discover.</p>
<p><strong>Parcelamento no Cart&atilde;o de Cr&eacute;dito</strong>&nbsp;- v&aacute;lido somente para Amex, Visa, Mastercard, Diners e Hipercard.</p>
<p>&nbsp;</p>
<ul>
<li>As compras acima de R$ 80,00 podem ser parceladas em 2x sem juros.</li>
<li>As compras acima de R$ 120,00 podem ser parceladas em at&eacute; 3x sem juros.</li>
<li>As compras acima de R$ 160,00 podem ser parceladas em at&eacute; 4x sem juros.</li>
</ul>
<p>&nbsp;</p>
<p>A an&aacute;lise realizada pela Maria de Barro, do pagamento realizado atrav&eacute;s de cart&atilde;o de cr&eacute;dito, leva de 1 a 3 dias uteis em an&aacute;lise, mesmo que o pagamento seja autorizado pela administradora. Veja mais informa&ccedil;&otilde;es abaixo.</p>
<p>&nbsp;</p>
<p><strong>D&eacute;bito Online - Bankline</strong></p>
<p>Aceitamos somente d&eacute;bito, transfer&ecirc;ncia banc&aacute;ria online, atrav&eacute;s dos bancos Ita&uacute;, Bradesco, Banco do Brasil e Banrisul.</p>
<p>&nbsp;</p>
<p><strong>Boleto Banc&aacute;rio - V&aacute;lido para Todos os Bancos</strong></p>
<p>Voc&ecirc; poder&aacute; optar pela op&ccedil;&atilde;o de pagamento por boleto banc&aacute;rio. Caso n&atilde;o possa imprimir o boleto, fa&ccedil;a o pagamento do boleto pelo Home Banking de seu banco. Para isso, utilize a representa&ccedil;&atilde;o num&eacute;rica/c&oacute;digo de barras localizada na parte superior da ficha de compensa&ccedil;&atilde;o do boleto. Voc&ecirc; ter&aacute; at&eacute; 2(dois) dias &uacute;teis para efetuar o pagamento, ap&oacute;s a emiss&atilde;o do boleto. Sendo que o boleto deve ser impresso no mesmo dia ou dia subsequente da realiza&ccedil;&atilde;o do pedido.</p>
<p>Importante: Caso opte pelo pagamento por boleto banc&aacute;rio, o envio do produto escolhido em seu pedido ser&aacute; feito apenas ap&oacute;s o recebimento por parte da AmoMuito.com do comprovante de Pagamento.</p>
<p>O prazo de identifica&ccedil;&atilde;o dos pagamentos por boleto leva em m&eacute;dia 3 dias &uacute;teis, pois pode variar dependendo do retorno do banco com a valida&ccedil;&atilde;o/compensa&ccedil;&atilde;o do pagamento do boleto.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Seguran&ccedil;a</strong></p>
<p>A Plataforma &eacute; desenvolvida com as mesmas tecnologias e as mesmas demandas de seguran&ccedil;a e performance que os websites utilizados para servi&ccedil;os banc&aacute;rios. Os dados de acesso &agrave; sua conta, as informa&ccedil;&otilde;es pessoais e todas as transa&ccedil;&otilde;es realizadas dentro do ambiente do nosso site s&atilde;o processadas utilizando tecnologia SSL (Secure Socked Layer) com criptografia de 128bits.</p>
            </div>
        </div>
    </div>
</section>

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

<footer class="footer">
    <div class="bs-docs-featurette x-footer mftoot">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="mH3">Maria de Barro</h3>
                    <div class="m-footer" id="resume-somos">

                    </div>
                    <div style="text-align: left; color: #fff">
                        <i class="fa fa-angle-double-right"></i><a href="/pt/informacoes/quem-somos"> leia mais ...</a><br/>     
                    </div>
                </div>
                <div class="col-sm-3">
                    <h3 class="mH3">Fale com a Maria</h3>
                    <ul class="m-footer">
                        <li>
                            <p class="big-message fale-com-maria-vzap">
                                <span class="circled"><i class="icon-whatsapp"></i></span>
                                + 55 21 <strong>99576.5038</strong>
                            </p>
                        </li>
                        <li>
                            <p class="big-message fale-com-maria-vphone">
                                <span class="circled"><i class="fa fa-phone"></i></span>
                                + 55 21 <strong>3283.5265</strong>
                            </p>
                        </li>
                        <li>
                            <p style="font-size: 14px;font-size: 1.4rem;" class="fale-com-maria-vmail">
                                <span class="circled"><i class="fa fa-envelope-o"></i></span>
                                maria@mariadebarro.com.br
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3 class="mH3">Minhas compras</h3>
                    <ul class="m-footer">
                        <li><a href="/pt/">Minha conta</a></li>
                        <li><a href="/pt/">Meus pedidos</a></li>
                        <li><a href="/pt/">Lista de desejos</a></li>
                    </ul>
                </div>
                <div class="col-sm-3"> 
                    <h3 class="mH3">Eu Quero!</h3>
                    <ul class="m-footer">
                        <li><a href="#">Novos Produtos</a></li>
                        <li><a href="/pt/informacoes/promocoes">Promoções</a></li>
                        <li><a href="/pt/informacoes/programa-vantagens">Programa de vantagens</a></li>
                        <li><a href="/pt/informacoes/programa-fidelidade">Programa de fidelidade</a></li>
                        <li><a href="#">Guia de presentes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bs-docs-featurette x-footer footer-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-4"> 
                    <h3 class="mH3">Precisa de Ajuda?</h3>
                    <ul class="m-footer-2">
                        <li><a href="/pt/informacoes/forma-pagamento">Formas de Pagamento</a></li>
                        <li><a href="/pt/informacoes/entrega-devolucao">Entrega e devolução</a></li>
                        <li><a href="/pt/informacoes/procon_rj">Procon-RJ</a></li>
                        <li><a href="/pt/informacoes/perguntas-frequentes">Perguntas Frequentes</a></li>
                        <li><a href="/pt/informacoes/cuidados-produtos">Cuidados com o produto</a></li>
                        <li><a href="/pt/informacoes/contato">Fale conosco</a></li>                    
                    </ul>
                </div>
                <div class="col-sm-4"> 
                    <h3 class="mH3">Sobre a Maria</h3>
                    <ul class="m-footer-2">
                        <li><a href="/pt/informacoes/quem_somos">Quem somos</a></li>
                        <li><a href="#">Nosso Blog</a></li>
                        <li><a href="/pt/informacoes/politica-privacidade">Política de Privacidade</a></li>
                        <li><a href="/pt/informacoes/termos-servicos">Termos de serviço</a></li>
                    </ul>
                    <div class="row">
                        <div class="col-sm-12" style="text-align: left;">
                            <form name="myNewsletter" class="navbar-form navbar-left form-inline form-newsletter" method="post" action="/pt/informacoes/newsletter" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <p style="margin-bottom: 0">Receba nossa Newsletter</p>
                                    <input type="text" name="email" class="form-control form-control-gray" placeholder="SEU EMAIL">
                                    <button type="submit" class="btn">
                                        <img src="/web-files/img/envelope.gif" border="0" alt="newsletter" title="newsletter" width="31px" height="32px" />  
                                    </button>
                                </div>
                            </form>                     
                        </div>    
                    </div>    
                </div>
                <div class="col-sm-4 text-right"> 
                    <img src="/web-files/img/footer-selos.jpg">
                </div>

            </div>
        </div>
    </div>
    <div class="direitos" style="border-top: #dcdcdc 1px solid; background: #fff;">
        <div class="container">
            <div class="row"> 
                <div class="col-sm-6" style="line-height: 6; font-size: 14px;"> 
                    Desenvolvido por <strong><a href="http://www.designlab.com.br" target="_blank"><img src="/web-files/img/designlab.png" border="0" alt="" title="" style="position: relative; bottom: 2px;"/></a></strong>
                </div> 
                <div class="col-sm-6 text-right"> 
                    <div class="redes-sociais">
                        <a target="_blank" href="http://instagram.com/mariadebarro" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="http://instagram.com/mariadebarro" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#" class="gplus"><i class="fa fa-google-plus"></i></a>                
                    </div>
                </div> 
            </div> 
        </div> 
    </div>
</footer>
<!-- /FOOTER  -->

<script language="javascript" src="/web-files/js/jquery-2.1.1.min.js"></script>

<script language="javascript" src="/web-files/js/vendor/jquery.easing.1.3.js"></script>


<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script language="javascript" src="/web-files/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script language="javascript" src="/web-files/plugins/flexslider/jquery.flexslider-min.js"></script>
<script language="javascript" src="/web-files/plugins/fancybox/jquery.fancybox.js"></script>

<script language="javascript" src="/web-files/js/funcoes.js"></script>
<script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
<script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
<script language="javascript" src="/web-files/pongstagr.am-master/source/pongstagr.am.js"></script>
<script language="javascript" src="/web-files/js/vendor/jquery.magnific-popup.min.js"></script>
<script language="javascript" src="/web-files/js/default.js"></script>
<script language="javascript" src="/web-files/js/joker.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">


</body>
</html><?php }} ?>

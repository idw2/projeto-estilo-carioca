<?php /*%%SmartyHeaderCode:139417226054ecf24a2c4bf3-64377918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5e95ca83fe41e377c94727d7e86fe8f35b435f4' => 
    array (
      0 => '/home/estil450/public_html/application/views/termos_servicos.tpl',
      1 => 1423600192,
      2 => 'file',
    ),
    '9915484c49efae1e853c1be7aa9d8b2c159a82c4' => 
    array (
      0 => '/home/estil450/public_html/application/views/header.tpl',
      1 => 1423834677,
      2 => 'file',
    ),
    '21ad6c09fd0cb3d807b70a3f24dfe7c8b337e8c6' => 
    array (
      0 => '/home/estil450/public_html/application/views/top.tpl',
      1 => 1423763695,
      2 => 'file',
    ),
    '176fac5985d5dc4b43edea6c0618ca1f6996d998' => 
    array (
      0 => '/home/estil450/public_html/application/views/footer.tpl',
      1 => 1423836722,
      2 => 'file',
    ),
    'e42802b9f9225092d26556a5ec1f3ebf37f60366' => 
    array (
      0 => '/home/estil450/public_html/application/views/atendimento_online.tpl',
      1 => 1417455048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139417226054ecf24a2c4bf3-64377918',
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ecf24a4a19b3_93524153',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ecf24a4a19b3_93524153')) {function content_54ecf24a4a19b3_93524153($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Termos de Serviço</title>

        <meta name="title" content="Estilo Carioca"><meta name="description" content=""><meta name="author" content="Designlab">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link rel="shortcut icon" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/slick.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/sweet-alert.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/jquery.raty.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/style.css">
        <script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/modernizr.custom.js"></script>
        <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>

        <!--[if IE 8]>
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/ie8.css" /><script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/respond.js" ></script>        <![endif]-->

        <script type="text/javascript">
            var App = window.App || {
                base_path: ''
            };
        </script>

                                                                                            </head>
    <body class="theme-default">

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
        <nav class="collapse navbar-collapse">
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
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-social">
                    <a href="">
                        <i class="sprite sprite-instagram"></i>
                    </a>
                    <a href="">
                        <i class="sprite sprite-facebook"></i>
                    </a>
                    <a href="">
                        <i class="sprite sprite-twitter"></i>
                    </a>
                </li>
                <li class="navbar-search">
                    <a href="" class="search">
                        <i class="sprite sprite-search"></i>
                    </a>
                </li>
                                    <li>
                        <a href="/pt/conta/" id="nav-login" style="display: inline-block;"> Minha conta</a>
                    </li>
                    <li>
                        <a href="/pt/conta/sair" id="nav-login" style="display: inline-block;">Sair</a>
                    </li>   
                                <li class="navbar-cart">
                    <a href="/pt/produtos/checkout/">
                        <i class="icon sprite sprite-cart"></i>
                        <span class="value">2</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>  
        </section>


<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Termos de Serviço</h2>
                <p class="subtitle">--//--</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2><span>Bem-vinda &agrave; Estilo Carioca!</span></h2>
<p><span>A presta&ccedil;&atilde;o de servi&ccedil;os da Estilo Carioca est&aacute; sujeita &agrave;s condi&ccedil;&otilde;es listadas nesta p&aacute;gina. Ao visitar o site ou comprar na Estilo Carioca, voc&ecirc; automaticamente aceita essas condi&ccedil;&otilde;es. Leia com cuidado essas condi&ccedil;&otilde;es, que detalham o que nossos usu&aacute;rios podem esperar de n&oacute;s e o que esperamos de nossos usu&aacute;rios. Ao acessar qualquer se&ccedil;&atilde;o do site, voc&ecirc; aceita o contrato vinculante e os termos estabelecidos abaixo.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>SUA CONTA</span></strong></p>
<p><span>A RMGSPORT COMERCIO EIRELI - ME&nbsp;reserva-se o direito de, &agrave; sua discri&ccedil;&atilde;o, recusar o servi&ccedil;o, encerrar contas, remover ou editar conte&uacute;do e cancelar pedidos.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Copyright</span></strong></p>
<p><span>Todo o design do site, textos, gr&aacute;ficos, logotipos, &iacute;cones, imagens, clipes de &aacute;udio, v&iacute;deos, a sele&ccedil;&atilde;o e organiza&ccedil;&atilde;o dos mesmos s&atilde;o de propriedade da RMGSPORT COMERCIO EIRELI - ME, TODOS OS DIREITOS RESERVADOS. N&atilde;o &eacute; dada permiss&atilde;o para copiar e reproduzir para fins comerciais sem a pr&eacute;via autoriza&ccedil;&atilde;o da RMGSPORT COMERCIO EIRELI - ME. Todo o material e informa&ccedil;&atilde;o apresentados pela RMGSPORT COMERCIO EIRELI - ME&nbsp;se destina a ser utilizado para fins informativos e descri&ccedil;&atilde;o de produtos. O uso deste site est&aacute; sujeito a estes termos e condi&ccedil;&otilde;es. Este site &eacute; apenas uma loja online de artigos esportivos. Conte&uacute;do de Terceiros: RMGSPORT COMERCIO EIRELI - ME&nbsp;pode fornecer conte&uacute;do de terceiros como um servi&ccedil;o para aqueles interessados em informa&ccedil;&otilde;es. RMGSPORT COMERCIO EIRELI - ME&nbsp;n&atilde;o acompanha, aprova ou tem qualquer controle sobre qualquer conte&uacute;do de terceiro. RMGSPORT COMERCIO EIRELI - ME&nbsp;n&atilde;o garante, endossa ou aprova com precis&atilde;o ou integridade de qualquer conte&uacute;do de Terceiro conte&uacute;do. RMGSPORT COMERCIO EIRELI - ME&nbsp;n&atilde;o &eacute; respons&aacute;vel pela atualiza&ccedil;&atilde;o ou revis&atilde;o do conte&uacute;do de terceiros. Todos os links de terceiros citados no site ou no blog da RMGSPORT COMERCIO EIRELI - ME&nbsp;n&atilde;o s&atilde;o de nossa responsabilidade e n&atilde;o garantimos que o conte&uacute;do ainda esteja dispon&iacute;vel.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Responsabilidade</span></strong></p>
<p><span>A RMGSPORT COMERCIO EIRELI - ME&nbsp;N&Atilde;O GARANTE QUE AS INFORMA&Ccedil;&Otilde;ES publicadas neste site s&atilde;o exatas, completas ou correntes. As informa&ccedil;&otilde;es sobre pre&ccedil;os e disponibilidade est&atilde;o sujeitas a altera&ccedil;&otilde;es sem aviso pr&eacute;vio. RMGSPORT COMERCIO EIRELI - ME&nbsp;N&Atilde;O SER&Aacute; RESPONS&Aacute;VEL POR DANOS DE QUALQUER TIPO DECORRENTES DE CONEX&Atilde;O COM O USO DO SITE. Este site foi criado e &eacute; controlado por RMGSPORT COMERCIO EIRELI - ME&nbsp;e reserva-se o direito de fazer mudan&ccedil;as em seu site, em sua pol&iacute;tica de privacidade e nos termos e condi&ccedil;&otilde;es a qualquer momento.</span></p>
<p><span>Nosso dados:&nbsp;</span></p>
<p><span>RMGSPORT COMERCIO EIRELI - ME</span></p>
<p>CNPJ: 21.468.076/0001-16</p>
<p><span>Rua Gazzi de S&aacute;, n&ordm;17 - Lote 17 Quadra G , Barra da Tijuca / RJ - CEP: 22.793-210</span></p>
<p><span>Atendimento ao cliente: rodrigo@estilocarioca.com.br - 21 3326.1986</span></p>
<p><strong><span>Informa&ccedil;&otilde;es sobre o produto</span></strong></p>
<p><span>As descri&ccedil;&otilde;es dos produtos oferecidos pela RMGSPORT COMERCIO EIRELI - ME&nbsp;s&atilde;o as mais corretas poss&iacute;veis. Se um produto vendido pela RMGSPORT COMERCIO EIRELI - ME&nbsp;n&atilde;o corresponder &agrave; descri&ccedil;&atilde;o fornecida, solicitamos que o devolva sem uso e em perfeitas condi&ccedil;&otilde;es. Os produtos apresentados neste site podem ser encomendados e entregues somente dentro do Brasil, desde que seja uma &aacute;rea coberta pelos Correios.</span></p>
<p><span>As refer&ecirc;ncias a produtos, servi&ccedil;os, processos ou outras informa&ccedil;&otilde;es pelo nome comercial, marca registrada, fabricante, fornecedor ou de outra forma, seja em nosso site ou em nosso blog, n&atilde;o constituem nem implicam endosso, patroc&iacute;nio ou recomenda&ccedil;&atilde;o por parte da RMGSPORT COMERCIO EIRELI - ME. Alguns produtos possuem imagens meramente ilustrativas, para que os usu&aacute;rios possam ter ideia de tamanho ou detalhes dos produtos.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Cores dos produtos</span></strong></p>
<p><span>A RMGSPORT COMERCIO EIRELI - ME&nbsp;tenta reproduzir e exibir com precis&atilde;o as cores dos produtos, mas sabemos que as cores reais dos produtos est&atilde;o sujeitas a pequenas varia&ccedil;&otilde;es por conta do seu monitor. Cada monitor est&aacute; configurado de uma forma diferente.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Ofertas e Promo&ccedil;&otilde;es</span></strong></p>
<p><span>As ofertas ser&atilde;o v&aacute;lidas durante determinado tempo ou enquanto houver estoque dispon&iacute;vel. Todos os produtos est&atilde;o sujeitos &agrave; disponibilidade de entrega.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Programa de prote&ccedil;&atilde;o &agrave; fraude e atividades n&atilde;o autorizadas</span></strong></p>
<p><span>Como parte de nossos procedimentos de prote&ccedil;&atilde;o &agrave; fraude ou outros tipos de atividades n&atilde;o autorizadas, nos reservamos no direito de recusar a processar uma compra, devido &agrave; suspeita de fraude, ato il&iacute;cito, atividade ilegal ou em casos que haja suspeita de m&aacute; f&eacute;. Caso ocorra alguma suspeita, podemos rejeitar o seu pedido e cancelar a sua compra, ou o nosso Servi&ccedil;o de Atendimento ao Cliente pode entrar em contato com voc&ecirc; no n&uacute;mero de telefone ou atrav&eacute;s do e-mail fornecido para confirmar o seu pedido e solicitar documentos para comprova&ccedil;&atilde;o/aprova&ccedil;&atilde;o da titularidade do propriet&aacute;rio do cart&atilde;o. Tamb&eacute;m nos reservamos o direito de cancelar quaisquer contas, pedidos ou se recusar a enviar para determinados endere&ccedil;os, devido &agrave; suspeita de fraude, ato il&iacute;cito, atividade ilegal ou em casos que haja suspeita de m&aacute; f&eacute;. N&oacute;s tomamos essas medidas para proteger os nossos clientes, bem como nos proteger de fraude ou atividades n&atilde;o autorizadas.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Coment&aacute;rios, Sugest&otilde;es e Outros</span></strong></p>
<p><span>RMGSPORT COMERCIO EIRELI - ME&nbsp;agradece seus coment&aacute;rios e feedback sobre este site, nossos produtos e servi&ccedil;os. Todas as informa&ccedil;&otilde;es, materiais, sugest&otilde;es, ideias ou coment&aacute;rios enviados para RMGSPORT COMERCIO EIRELI - ME&nbsp;n&atilde;o ser&atilde;o tratadas como confidenciais, propriet&aacute;rias ou informa&ccedil;&otilde;es sobre segredo comercial e, mediante a apresenta&ccedil;&atilde;o de tais informa&ccedil;&otilde;es, o usu&aacute;rio estar&aacute; concedendo a RMGSPORT COMERCIO EIRELI - ME&nbsp;uma licen&ccedil;a irrevog&aacute;vel e irrestrita para utilizar, modificar, reproduzir, transmitir, exibir e distribuir essas informa&ccedil;&otilde;es para qualquer finalidade. A menos que exigido por lei, a RMGSPORT COMERCIO EIRELI - ME&nbsp;n&atilde;o vai usar seu nome em conex&atilde;o com tais informa&ccedil;&otilde;es, materiais, sugest&otilde;es, ideias ou coment&aacute;rios sem o seu consentimento pr&eacute;vio por escrito.</span></p>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER  -->



<footer class="footer">
    <div class="container">

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
                    <li><a href=""><i class="sprite sprite-twitter-2"></i></a></li>
                    <li><a href=""><i class="sprite sprite-facebook-2"></i></a></li>
                    <li><a href=""><i class="sprite sprite-instagram-2"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">

                <h2 class="footer-title">FIQUE POR DENTRO DA EC</h2>
                <form action="" method="post" class="newsletter-form ajax-form" novalidate="" onsubmit="return false">
                    <div class="form-row">
                        <input name="nome_newsletter_2" id="nome_newsletter_2" type="text" class="form-control" placeholder="Seu nome">
                    </div>
                    <div class="form-row">
                        <input name="email_newsletter_2" id="email_newsletter_2" type="text" class="form-control" placeholder="Seu e-mail">
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-default btn-block" onclick="javascript:newsletter_footer(2);">Enviar</button>
                    </div>
                    <div id="erro_newsletter_2"> </div>
                </form>
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
        <hr>
        <div class="row footer-bottom">
            <div class="col-sm-6 col-sm-push-6 text-right">
                <span class="selo-es sprite sprite-selo-es"></span>
                <span class="cartoes sprite sprite-cartoes"></span>
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
</body>
</html><?php }} ?>

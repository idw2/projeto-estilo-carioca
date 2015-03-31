<?php /*%%SmartyHeaderCode:163925984754ecf088ee4395-22809896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cead529392872dcc6847a4680d08eb4720f0a3c1' => 
    array (
      0 => '/home/estil450/public_html/application/views/entrega_devolucao.tpl',
      1 => 1423230070,
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
  'nocache_hash' => '163925984754ecf088ee4395-22809896',
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ecf08922b4f7_18047387',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ecf08922b4f7_18047387')) {function content_54ecf08922b4f7_18047387($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Entrega e Devolução</title>

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


<div class="container"><hr></div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Política de Entrega e Devolução</h2>
                <p class="subtitle">--//--</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p>Oferecemos aos nossos clientes 2 tipos de entrega: Normal e Expressa. E al&eacute;m dessas, a op&ccedil;&atilde;o de buscar o pedido em nossa Loja. O prazo para entrega dos produtos varia de acordo com regi&atilde;o de entrega, volume e peso do pedido. N&atilde;o h&aacute; cobran&ccedil;a de frete para a op&ccedil;&atilde;o Buscar na loja.</p>
<p>&nbsp;</p>
<p><strong>EXPRESSA:</strong>&nbsp;As entregas EXPRESSAS s&atilde;o realizadas no prazo de 1 (um) a 4 (quatro) dias &uacute;teis ap&oacute;s a postagem. Para a Regi&atilde;o Norte, a entrega pode ser realizada em at&eacute; 6 (seis) dias &uacute;teis, ap&oacute;s a postagem da mesma.</p>
<p><strong>NORMAL:</strong>&nbsp;As entregas NORMAIS s&atilde;o realizadas entre 03(tr&ecirc;s) &agrave; 23 (vinte e tr&ecirc;s) dias &uacute;teis ap&oacute;s a postagem, dependendo cidade de destino. Regi&atilde;o Sudeste a entrega pode ser realizada entre 3 (tr&ecirc;s) at&eacute; 10 (dez) dias &uacute;teis, demais regi&otilde;es entre 3 (tr&ecirc;s) at&eacute; 23 (vinte e tr&ecirc;s) dias &uacute;teis.</p>
<p><strong>Buscar em Nossa Loja:</strong>&nbsp;O pedido dever&aacute; ser feito e conclu&iacute;do atrav&eacute;s do nosso site e estar&aacute; dispon&iacute;vel em at&eacute; 1 dia &uacute;til ap&oacute;s a compensa&ccedil;&atilde;o do pagamento, quando estiver tudo ok com o pedido. O cliente receber&aacute; um e-mail informando que o pedido j&aacute; est&aacute; pronto para retirada.</p>
<p>Para buscar o seu pedido basta agendar atrav&eacute;s do e-mail contato@estilocarioca.com.br Nosso endere&ccedil;o:&nbsp;Rua Gazzi de S&aacute;, n&ordm;17 - Lote 17 Quadra G , Barra da Tijuca / RJ - CEP: 22.793-210</p>
<p>Os pedidos ser&atilde;o processados em at&eacute; 2 (dois) dias &uacute;teis ap&oacute;s a confirma&ccedil;&atilde;o do pagamento junto as institui&ccedil;&otilde;es financeiras.</p>
<p>&nbsp;</p>
<p><strong>Embalagem:</strong>&nbsp;Os pedidos s&atilde;o embalados e enviados em caixas de papel&atilde;o. Os produtos s&atilde;o embalados em uma embalagem especial, que al&eacute;m de proteger o produto, pode ser utilizado como presente. Caso voc&ecirc; esteja presenteando algu&eacute;m, informe qual(is) produto(s) s&atilde;o para presente, pois dessa forma, podemos embalar individualmente cada produto.</p>
<p>Ao ser informado da data de entrega do seu pedido, &eacute; importante que voc&ecirc;, ou uma pessoa de sua confian&ccedil;a, esteja no local para receber e assinar o protocolo de entrega da mercadoria. Nossos portadores s&atilde;o instru&iacute;dos a n&atilde;o efetuar a entrega, quando n&atilde;o houver um respons&aacute;vel no local pelo recebimento.</p>
<p>Importante: ap&oacute;s a 2&ordf; (segunda) tentativa de entrega, caso n&atilde;o haja algu&eacute;m para receber, o pedido &eacute; devolvido para o Nossa Loja. Para que o pedido seja enviado novamente, ser&aacute; cobrada uma taxa com o mesmo valor do frete para reenvio do produto. Caso aconte&ccedil;a esse tipo de situa&ccedil;&atilde;o com voc&ecirc;, entre em contato atrav&eacute;s do e-mail <a href=\"mailto:contato@estilocarioca.com.br\">contato@estilocarioca.com.br</a> e informe o n&uacute;mero do seu pedido. A taxa do frete paga no primeiro envio n&atilde;o &eacute; reembolsada, pois houve tentativa de entrega.</p>
<p>&nbsp;</p>
<p><strong>Custos com frete</strong></p>
<p>O frete ser&aacute; calculado automaticamente pelo sistema direto no carrinho de compras, de acordo com a op&ccedil;&atilde;o escolhida, seja ela NORMAL ou EXPRESSA, variando de acordo com o peso total das mercadorias, o volume da caixa e o local de entrega.</p>
<p>N&atilde;o h&aacute; cobran&ccedil;a de frete para a op&ccedil;&atilde;o \"Retirar na Loja\"</p>
<p>N&atilde;o h&aacute; cobran&ccedil;a adicional pela embalagem, basta solicitar qual produto deseja que seja embalado para presente.</p>
<p>Dica: Recomendamos agrupar os produtos em um pedido &uacute;nico. N&atilde;o podemos agrupar dois pedidos distintos efetuados separadamente, assim as taxas de envio ser&atilde;o aplicadas a cada um deles.</p>
<p>&nbsp;</p>
<p><strong>Pol&iacute;tica de Trocas</strong></p>
<p>Os produtos podem ser trocados, devolvidos por arrependimento do comprador ou defeito. Se ocorrer qualquer das hip&oacute;teses abaixo, recuse o recebimento do produto:</p>
<ul>
<li>Embalagem aberta ou avariada;</li>
<li>Produto avariado;</li>
<li>Produto em desacordo com o pedido.</li>
</ul>
<p>&nbsp;</p>
<p><strong>Troca por op&ccedil;&atilde;o ou arrependimento</strong></p>
<p>O c&oacute;digo do consumidor assegura o direito de troca do produto no caso de desist&ecirc;ncia/arrependimento ou op&ccedil;&atilde;o desde que ocorra em at&eacute; 7(sete) dias, logo ap&oacute;s o recebimento do mesmo. Arcaremos com a despesa de postagem do produto para an&aacute;lise, atrav&eacute;s de autoriza&ccedil;&atilde;o de postagem, que ser&aacute; informado pelo nosso SAC. Para trocar um produto &eacute; necess&aacute;rio que voc&ecirc; comunique nossa Central de Atendimento pelo e-mail maria@mariadebarro.com.br, informando o n&uacute;mero do pedido, a data da compra e a refer&ecirc;ncia do item que ser&aacute; trocado ou devolvido nos explicando o motivo, ent&atilde;o responderemos o e-mail, j&aacute; informando uma autoriza&ccedil;&atilde;o de postagem dos Correios e como deve proceder. O produto dever&aacute; ser devolvido protegido na embalagem tnt do envio e em caixa adequada, obrigatoriamente deve estar protegido e com a tag da Maria de Barro. Importante: s&oacute; aceitamos devolu&ccedil;&otilde;es depois de confirmada essa comunica&ccedil;&atilde;o e dentro do prazo. Caso contr&aacute;rio, n&atilde;o aceitaremos a devolu&ccedil;&atilde;o e sua compra ser&aacute; reenviada sem consulta pr&eacute;via. A autoriza&ccedil;&atilde;o de postagem &eacute; v&aacute;lida somente 1(uma) vez por pedido (para devolu&ccedil;&atilde;o ou troca de produtos do mesmo pedido), devendo postar no dia seguinte ao recebimento da autoriza&ccedil;&atilde;o de postagem, para que a mesma n&atilde;o perca validade. N&atilde;o arcaremos com uma segunda autoriza&ccedil;&atilde;o de postagem, e caso perca o prazo da primeira autoriza&ccedil;&atilde;o, o custo do envio do(s) produto(s) ser&aacute; responsabilidade do cliente. Ao recebermos a devolu&ccedil;&atilde;o, caso seja detectado que o cliente fez uso ou o(s) produto(s) volte(m) danificado(s), o valor da autoriza&ccedil;&atilde;o da postagem ser&aacute; descontado no valor do(s) produto(s) a ser(em) reembolsado(s) para o cliente. Ap&oacute;s nossa an&aacute;lise, e se estiver tudo ok, o reembolso se dar&aacute; atrav&eacute;s de cr&eacute;ditos na loja ou estorno da compra, excluindo o valor frete do frete pago pelo cliente para o envio do pedido, isto &eacute;, caso tenha sido cobrado frete para envio do pedido.</p>
<p>&nbsp;</p>
<p><strong>Troca de itens com defeito</strong></p>
<p>N&oacute;s asseguramos o direito de troca do produto no caso de defeito em at&eacute; 7(sete) dias ap&oacute;s a entrega do mesmo. Ap&oacute;s a an&aacute;lise e comprova&ccedil;&atilde;o de que o produto foi entregue com defeito, a RMGSPORT COMERCIO EIRELI - ME&nbsp;arca com as despesas de recolhimento/postagem do produto para an&aacute;lise e reenvio de um novo produto em perfeito estado para o cliente (caso esteja dispon&iacute;vel em estoque e seja o desejo do cliente).</p>
<p>Para solicitar a troca de um produto que tenha sido enviado com defeito, &eacute; necess&aacute;rio que voc&ecirc; comunique nosso SAC pelo e-mail contato@estilocarioca.com.br, informando o n&uacute;mero do pedido, a data da compra, fotos do defeito do produto e a refer&ecirc;ncia do item que ser&aacute; devolvido, realizando este procedimento imediatamente ap&oacute;s o recebimento do mesmo.</p>
<p>N&oacute;s iremos enviar o produto para an&aacute;lise e caso n&atilde;o haja conserto, providenciaremos a troca pelo mesmo ou por outro item de sua escolha, desde que seja o mesmo valor do produto. Havendo diferen&ccedil;a de valores entre os produtos, o cliente poder&aacute; optar pelo pagamento da diferen&ccedil;a ou receber a diferen&ccedil;a como cr&eacute;dito na loja. O prazo para an&aacute;lise &eacute; de 30 dias corridos, mas pode ser definido antes deste per&iacute;odo.</p>
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

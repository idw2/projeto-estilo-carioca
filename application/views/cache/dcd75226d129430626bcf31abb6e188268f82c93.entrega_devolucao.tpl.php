<?php /*%%SmartyHeaderCode:655390740544e915523bfe0-60203119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcd75226d129430626bcf31abb6e188268f82c93' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/entrega_devolucao.tpl',
      1 => 1409584014,
      2 => 'file',
    ),
    '73de0111ee301fe0c7a0419067a6092ee8c2473b' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/header.tpl',
      1 => 1414431093,
      2 => 'file',
    ),
    '89191d4af7112164523e47456832e67e5aa51378' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/navbar.tpl',
      1 => 1412107046,
      2 => 'file',
    ),
    'e582154db7903ebcd42f80d3c4df27150912bdbe' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/logo.tpl',
      1 => 1414178488,
      2 => 'file',
    ),
    'f0007e1a8726954198693ec45edf0d82173b1411' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/tinymce_1.tpl',
      1 => 1414178733,
      2 => 'file',
    ),
    'b5516564ae08b3778b5b55911ea33638d41d12c5' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/footer.tpl',
      1 => 1409231605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '655390740544e915523bfe0-60203119',
  'variables' => 
  array (
    'language' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544e9155584b24_34483192',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544e9155584b24_34483192')) {function content_544e9155584b24_34483192($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Entrega e Devolvolução</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        <link rel="icon" type="image/vnd.microsoft.icon" href="/homolog/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/homolog/web-files/img/favicon.ico"/>

        <link rel="stylesheet" href="/homolog/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/homolog/web-files/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="/homolog/web-files/bootstrap/css/bootstrap-theme.css"/>		
        <link rel="stylesheet" href="/homolog/web-files/css/docs.min.css"/>
        <link rel="stylesheet" href="/homolog/web-files/css/style.css"/>

        <script language="javascript" src="/homolog/web-files/js/funcoes.js"></script>
        <script language="javascript" src="/homolog/web-files/js/jquery-2.1.1.min.js"></script>
        <script language="javascript" src="/homolog/web-files/js/jQuery-Mask-Plugin.js"></script>
        <script language="javascript" src="/homolog/web-files/bootstrap/js/bootstrap.js"></script>
        <script language="javascript" src="/homolog/web-files/bootstrap/js/bootstrap-tooltip.js"></script>
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="/homolog/web-files/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="/homolog/web-files/fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Upload -->
        <script type="text/javascript" src="/homolog/web-files/js/jquery.uploadfile.js"></script>
        <link rel="stylesheet" href="/homolog/web-files/css/uploadfile.css" type="text/css" media="screen" />
        <!-- JQuery UI -->
        <script type="text/javascript" src="/homolog/web-files/jquery-ui-1.11.1.custom/jquery-ui.js"></script>
        <link rel="stylesheet" href="/homolog/web-files/jquery-ui-1.11.1.custom/jquery-ui.css"/>
        <link rel="stylesheet" href="/homolog/web-files/jquery-ui-1.11.1.custom/jquery-ui.structure.css"/>
        <link rel="stylesheet" href="/homolog/web-files/jquery-ui-1.11.1.custom/jquery-ui.theme.css"/>
        <!-- Drag -->
        <script type="text/javascript" src="/homolog/web-files/js/jquery-sortable.js"></script>
        <!-- PLUGIN CROP -->
        <link rel="stylesheet" href="/homolog/web-files/crop/cropper.css" type="text/css" media="screen" />
        <script type="text/javascript" src="/homolog/web-files/crop/cropper.js"></script>
        <script type="text/javascript" src="/homolog/web-files/js/highlight.min.js"></script>
        <script type="text/javascript" src="/homolog/web-files/js/jquery.tablednd.0.7.js"></script>
        <script type="text/javascript" src="/homolog/web-files/js/default.js"></script>

        <script type="text/javascript">
            if (window.hljs) {
                hljs.tabReplace = '    ';
                hljs.initHighlightingOnLoad();
            }
        </script>

        <style>

            @font-face {
                font-family: Gotham-Black;
                src: url(/homolog/web-files/css/gotham/Gotham-Black.otf);
            }
            @font-face {
                font-family: Gotham-BlackIta;
                src: url(/homolog/web-files/css/gotham/Gotham-BlackIta.otf);
            }
            @font-face {
                font-family: Gotham-Bold;
                src: url(/homolog/web-files/css/gotham/Gotham-Bold.otf);
            }
            @font-face {
                font-family: Gotham-BoldIta;
                src: url(/homolog/web-files/css/gotham/Gotham-BoldIta.otf);
            }
            @font-face {
                font-family: Gotham-Book;
                src: url(/homolog/web-files/css/gotham/Gotham-Book.otf);
            }
            @font-face {
                font-family: Gotham-BookIta;
                src: url(/homolog/web-files/css/gotham/Gotham-BookIta.otf);
            }
            @font-face {
                font-family: Gotham-Light;
                src: url(/homolog/web-files/css/gotham/Gotham-Light.otf);
            }
            @font-face {
                font-family: Gotham-LightIta;
                src: url(/homolog/web-files/css/gotham/Gotham-LightIta.otf);
            }
            @font-face {
                font-family: Gotham-Medium;
                src: url(/homolog/web-files/css/gotham/Gotham-Medium.otf);
            }
            @font-face {
                font-family: Gotham-MediumIta;
                src: url(/homolog/web-files/css/gotham/Gotham-MediumIta.otf);
            }
            @font-face {
                font-family: Gotham-Thin;
                src: url(/homolog/web-files/css/gotham/Gotham-Thin.otf);
            }
            @font-face {
                font-family: Gotham-ThinIta;
                src: url(/homolog/web-files/css/gotham/Gotham-ThinIta.otf);
            }
            @font-face {
                font-family: Gotham-Ultra;
                src: url(/homolog/web-files/css/gotham/Gotham-Ultra.otf);
            }
            @font-face {
                font-family: Gotham-UltraIta;
                src: url(/homolog/web-files/css/gotham/Gotham-UltraIta.otf);
            }
            @font-face {
                font-family: Gotham-XLight;
                src: url(/homolog/web-files/css/gotham/Gotham-XLight.otf);
            }
            @font-face {
                font-family: Gotham-XLightIta;
                src: url(/homolog/web-files/css/gotham/Gotham-XLightIta.otf);
            }

            html,body{
                height: 100%;
            }

            .box-login{
                margin-top: 25%
            }
            .area-restrita{
                margin-bottom: 4%; 
                display: inline-block;
            }

            .panel-heading{
                color: #e9c92e; 
                font-family: "Gotham-Bold";
            }

            .nav > li > a:hover, .nav > li > a:focus {
                text-decoration: none;
                background-color: #e9c92e; 
                color: #395aa4;
            }

            .nav > li > a {
                position: relative; 
                display: block; 
                padding: 10px 15px; 
                color: #fff; 
                text-transform: uppercase; 
            }

            .nav > li.active > a{ 
                color: #395aa4; 
                background: #e9c92e; 
                text-transform: uppercase
            }

            .sidebar{
                position: absolute;
                top:0;
                bottom:0;
                left:0;
                width: 250px;
                background: #395aa4;
            }
            .content{
                position: absolute;
                top:0;
                bottom:0;
                left:250px;
                right: 0;
                background: #fff;
                padding: 0 15px;
            }

            .navbar-form .search-input{
                width: 250px;
            }

            .navbar-default {
                border: none !important; 
            }

            .x-label{
                color: #5d5d5d;
                padding: 1px 0;
            }

            .ico-default-trophy, .ico-default-dolar, .ico-default-heart, .ico-default-star, .ico-default-eye, .ico-default-trash, .ico-default-photo, .ico-default-edit{
                display: inline-block;
                width: 32px;
                height: 29px;
                border-radius: 50%;
                background: #e9c92e;
                cursor: pointer;
                color: #fff;
                text-align:  center;
                font-size: 14px;
                line-height: 26px;
                padding: 0 0 0 1px;

            }

            .ico-default-trash{  background: #58595A; }
            
            .ico-default-heart{ background: #EC8ED6; color: #fff;  border: none; }            
            .ico-default-heart i{ color: #fff; }            
            .ico-default-heart.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-heart.desative i{ color: #57574b; }
            
            .ico-default-eye{ background: #e9c92e; color: #fff;  border: none; }            
            .ico-default-eye i{ color: #fff; }            
            .ico-default-eye.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-eye.desative i{ color: #57574b; }
            
            .ico-default-dolar{ background: #81B4D1; color: #fff;  border: none; }            
            .ico-default-dolar i{ color: #fff; }            
            .ico-default-dolar.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-dolar.desative i{ color: #57574b; }
            
            .ico-default-trophy{ background: #D1819B; color: #fff;  border: none; }            
            .ico-default-trophy i{ color: #fff; }            
            .ico-default-trophy.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-trophy.desative i{ color: #57574b; }

            .ico-default-photo{
                background: #395aa4;                
            }

            .ico-default-edit{
                background: #18CAEC;
            }

            .ico-default-star{ background: #2ac364; color: #fff;  border: none; }            
            .ico-default-star i{ color: #fff; }            
            .ico-default-star.desative{ background: #fff; border: 1px solid #57574b; }
            .ico-default-star.desative i{ color: #57574b; }

            .ico-default-eye a, .ico-default-trash a, .ico-default-photo a, .ico-default-edit a{ 
                color: #fff;
                text-decoration: none;
            } 

            .ico-default-star a:hover, .ico-default-eye a:hover, .ico-default-trash a:hover, .ico-default-photo a:hover{ 
                text-decoration: none;
            } 

            .ico-default-trash.desative, .ico-default-photo.desative{
                background: #ad2138;
            }

            .hidex{
                max-height: 0;
                overflow: hidden;
                box-shadow: none;
                opacity: 0;
                margin-bottom: 0;
            }

            .myDragClass{
                background-color: #ecf6fc;
            } 
            .myDragClass.active{
                background-color: #333;
            }

            body{
                font-family: 'Gotham-Book' !important;
                font-size: 18px;
            }
            
            table{ font-size: 16px }

        </style>

    </head>
    <body>

<div class="sidebar">
    <nav class="navbar navbar-default" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" style="padding-bottom: 3%; background: #e25f66">
        <div class="panel-heading"><h4>Painel Administrativo</h4></div>
        <ul class="nav nav-stacked" style="font-size: 14px;">
            <li  class="" ><a href="/homolog/en/admin/welcome">Home</a></li>
                            <div class="panel-heading"><h4>Produtos</h4></div>
                <li  class="" ><a href="/homolog/en/produtos/produtos-lista">Lista</a></li> 
                <div class="panel-heading"><h4>Pagamentos</h4></div>
                <li  class="" ><a href="/homolog/en/pedidos/pedidos-lista">Lista</a></li>
                <div class="panel-heading"><h4>Newsletter</h4></div>
                <li  class="" ><a href="/homolog/en/informacoes/newsletter-lista">Lista</a></li>
                <div class="panel-heading"><h4>Atendentes</h4></div>
                <li  class="" ><a href="/homolog/en/admin/atendentes-lista">Lista</a></li>
                <div class="panel-heading"><h4>Páginas</h4></div>
                <li  class="" ><a href="/homolog/en/html/quem_somos">Quem somos</a></li>
                <li  class="" ><a href="/homolog/en/html/promocoes">Promoções</a></li>
                <li  class="" ><a href="/homolog/en/html/programa-vantagens">Programa de Vantagens</a></li>              
                <li  class="" ><a href="/homolog/en/html/programa-fidelidade">Programa de Fidelidade</a></li>              
                <li  class="" ><a href="/homolog/en/html/politica-privacidade">Política de Privacidade</a></li>              
                <li  class="" ><a href="/homolog/en/html/termos-servicos">Termos de serviço</a></li>              
                <li  class="" ><a href="/homolog/en/html/forma-pagamento">Forma de Pagamento</a></li>              
                <li  class="active" ><a href="/homolog/en/html/entrega-devolucao">Entrega e Devolução</a></li>              
                <li  class="" ><a href="/homolog/en/html/procon-rj">PROCON-RJ</a></li>              
                <li  class="" ><a href="/homolog/en/html/perguntas-frequentes">Perguntas Frequentes</a></li>              
                <li  class="" ><a href="/homolog/en/html/cuidados-produtos">Cuidado com os Produtos</a></li>              
                        <div class="panel-heading"><h4>Serviços</h4></div>
            <li  class="" ><a href="/homolog/en/admin/alterar-senha">Alterar senha</a></li>              
            <li  class="" ><a href="/homolog/en/admin/logout">Sair</a></li>              
            
        </ul>     
    </div><!-- /.navbar-collapse -->
</nav>
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <img class="area-restrita img-responsive center-block" src="/homolog/web-files/img/logo.png" alt="" border="0" title="" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <form class="navbar-form navbar-left" style="width: 100%" action="/homolog/en/html/entrega_devolucao" method="post">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h2><span class="label label-default">Entrega e Devolução</span></h2>
                    </div>
                    <br/>
                    <div class="col-md-6 text-right">
                        <a href="#" onclick="javascript:window.history.go(-1)" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                    </div>
                </div>
                <br/>
                <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo"><p>Oferecemos aos nossos clientes 2 tipos de entrega: Normal e Expressa. E al&eacute;m dessas, a op&ccedil;&atilde;o de buscar o pedido na Maria de Barro (em nosso escrit&oacute;rio). O prazo para entrega dos produtos varia de acordo com regi&atilde;o de entrega, volume e peso do pedido. N&atilde;o h&aacute; cobran&ccedil;a de frete para a op&ccedil;&atilde;o Buscar na loja.</p>
<p>&nbsp;</p>
<p><strong>EXPRESSA:</strong>&nbsp;As entregas EXPRESSAS s&atilde;o realizadas no prazo de 1 (um) a 4 (quatro) dias &uacute;teis ap&oacute;s a postagem. Para a Regi&atilde;o Norte, a entrega pode ser realizada em at&eacute; 6 (seis) dias &uacute;teis, ap&oacute;s a postagem da mesma.</p>
<p><strong>NORMAL:</strong>&nbsp;As entregas NORMAIS s&atilde;o realizadas entre 03(tr&ecirc;s) &agrave; 23 (vinte e tr&ecirc;s) dias &uacute;teis ap&oacute;s a postagem, dependendo cidade de destino. Regi&atilde;o Sudeste a entrega pode ser realizada entre 3 (tr&ecirc;s) at&eacute; 10 (dez) dias &uacute;teis, demais regi&otilde;es entre 3 (tr&ecirc;s) at&eacute; 23 (vinte e tr&ecirc;s) dias &uacute;teis.</p>
<p><strong>Buscar na Maria de Barro:</strong>&nbsp;O pedido dever&aacute; ser feito e conclu&iacute;do atrav&eacute;s do nosso site e estar&aacute; dispon&iacute;vel em at&eacute; 1 dia &uacute;til ap&oacute;s a compensa&ccedil;&atilde;o do pagamento, quando estiver tudo ok com o pedido. O cliente receber&aacute; um e-mail informando que o pedido j&aacute; est&aacute; pronto para retirada.</p>
<p>Para buscar o seu pedido basta agendar atrav&eacute;s do e-mail maria@mariadebarro.com.br Nosso endere&ccedil;o:&nbsp;<span>Global 7000 Offices Estrada dos Bandeirantes, 7000 - Bloco C Sala 290 - Rio de Janeiro, RJ CEP: 22780-084</span></p>
<p>Os pedidos ser&atilde;o processados em at&eacute; 2 (dois) dias &uacute;teis ap&oacute;s a confirma&ccedil;&atilde;o do pagamento junto as institui&ccedil;&otilde;es financeiras.</p>
<p>&nbsp;</p>
<p><strong>Embalagem:</strong>&nbsp;Os pedidos s&atilde;o embalados e enviados em caixas de papel&atilde;o. Os produtos s&atilde;o embalados em uma embalagem especial, que al&eacute;m de proteger o produto, pode ser utilizado como presente. Caso voc&ecirc; esteja presenteando algu&eacute;m, informe qual(is) produto(s) s&atilde;o para presente, pois dessa forma, podemos embalar individualmente cada produto.</p>
<p>Ao ser informado da data de entrega do seu pedido, &eacute; importante que voc&ecirc;, ou uma pessoa de sua confian&ccedil;a, esteja no local para receber e assinar o protocolo de entrega da mercadoria. Nossos portadores s&atilde;o instru&iacute;dos a n&atilde;o efetuar a entrega, quando n&atilde;o houver um respons&aacute;vel no local pelo recebimento.</p>
<p>Importante: ap&oacute;s a 2&ordf; (segunda) tentativa de entrega, caso n&atilde;o haja algu&eacute;m para receber, o pedido &eacute; devolvido para o nosso escrit&oacute;rio. Para que o pedido seja enviado novamente, ser&aacute; cobrada uma taxa com o mesmo valor do frete para reenvio do produto. Caso aconte&ccedil;a esse tipo de situa&ccedil;&atilde;o com voc&ecirc;, entre em contato atrav&eacute;s do e-mail <a href="mailto:maria@mariadebarro.com.br">maria@mariadebarro.com.br</a> e informe o n&uacute;mero do seu pedido. A taxa do frete paga no primeiro envio n&atilde;o &eacute; reembolsada, pois houve tentativa de entrega.</p>
<p>&nbsp;</p>
<p><strong>&hearts; Custos com frete</strong></p>
<p>O frete ser&aacute; calculado automaticamente pelo sistema direto no carrinho de compras, de acordo com a op&ccedil;&atilde;o escolhida, seja ela NORMAL ou EXPRESSA, variando de acordo com o peso total das mercadorias, o volume da caixa e o local de entrega.</p>
<p>N&atilde;o h&aacute; cobran&ccedil;a de frete para a op&ccedil;&atilde;o Buscar Maria de Barro</p>
<p>N&atilde;o h&aacute; cobran&ccedil;a adicional pela embalagem, basta solicitar qual produto deseja que seja embalado para presente.</p>
<p>Dica: Recomendamos agrupar os produtos em um pedido &uacute;nico. N&atilde;o podemos agrupar dois pedidos distintos efetuados separadamente, assim as taxas de envio ser&atilde;o aplicadas a cada um deles.</p>
<p>&nbsp;</p>
<p><strong>&hearts; Pol&iacute;tica de Trocas</strong></p>
<p>Os produtos podem ser trocados, devolvidos por arrependimento do comprador ou defeito. Se ocorrer qualquer das hip&oacute;teses abaixo, recuse o recebimento do produto:</p>
<ul>
<li>Embalagem aberta ou avariada;</li>
<li>Produto avariado;</li>
<li>Produto em desacordo com o pedido.</li>
</ul>
<p>&nbsp;</p>
<p><strong>&hearts; Troca por op&ccedil;&atilde;o ou arrependimento</strong></p>
<p>O c&oacute;digo do consumidor assegura o direito de troca do produto no caso de desist&ecirc;ncia/arrependimento ou op&ccedil;&atilde;o desde que ocorra em at&eacute; 7(sete) dias, logo ap&oacute;s o recebimento do mesmo. Arcaremos com a despesa de postagem do produto para an&aacute;lise, atrav&eacute;s de autoriza&ccedil;&atilde;o de postagem, que ser&aacute; informado pelo nosso SAC. Para trocar um produto &eacute; necess&aacute;rio que voc&ecirc; comunique nossa Central de Atendimento pelo e-mail maria@mariadebarro.com.br, informando o n&uacute;mero do pedido, a data da compra e a refer&ecirc;ncia do item que ser&aacute; trocado ou devolvido nos explicando o motivo, ent&atilde;o responderemos o e-mail, j&aacute; informando uma autoriza&ccedil;&atilde;o de postagem dos Correios e como deve proceder. O produto dever&aacute; ser devolvido protegido na embalagem tnt do envio e em caixa adequada, obrigatoriamente deve estar protegido e com a tag da Maria de Barro. Importante: s&oacute; aceitamos devolu&ccedil;&otilde;es depois de confirmada essa comunica&ccedil;&atilde;o e dentro do prazo. Caso contr&aacute;rio, n&atilde;o aceitaremos a devolu&ccedil;&atilde;o e sua compra ser&aacute; reenviada sem consulta pr&eacute;via. A autoriza&ccedil;&atilde;o de postagem &eacute; v&aacute;lida somente 1(uma) vez por pedido (para devolu&ccedil;&atilde;o ou troca de produtos do mesmo pedido), devendo postar no dia seguinte ao recebimento da autoriza&ccedil;&atilde;o de postagem, para que a mesma n&atilde;o perca validade. N&atilde;o arcaremos com uma segunda autoriza&ccedil;&atilde;o de postagem, e caso perca o prazo da primeira autoriza&ccedil;&atilde;o, o custo do envio do(s) produto(s) ser&aacute; responsabilidade do cliente. Ao recebermos a devolu&ccedil;&atilde;o, caso seja detectado que o cliente fez uso ou o(s) produto(s) volte(m) danificado(s), o valor da autoriza&ccedil;&atilde;o da postagem ser&aacute; descontado no valor do(s) produto(s) a ser(em) reembolsado(s) para o cliente. Ap&oacute;s nossa an&aacute;lise, e se estiver tudo ok, o reembolso se dar&aacute; atrav&eacute;s de cr&eacute;ditos na loja ou estorno da compra, excluindo o valor frete do frete pago pelo cliente para o envio do pedido, isto &eacute;, caso tenha sido cobrado frete para envio do pedido.</p>
<p>&nbsp;</p>
<p><strong>&hearts; Troca de itens com defeito</strong></p>
<p>N&oacute;s asseguramos o direito de troca do produto no caso de defeito em at&eacute; 7(sete) dias ap&oacute;s a entrega do mesmo. Ap&oacute;s a an&aacute;lise e comprova&ccedil;&atilde;o de que o produto foi entregue com defeito, a Maria de Barro arca com as despesas de recolhimento/postagem do produto para an&aacute;lise e reenvio de um novo produto em perfeito estado para o cliente (caso esteja dispon&iacute;vel em estoque e seja o desejo do cliente).</p>
<p>Para solicitar a troca de um produto que tenha sido enviado com defeito, &eacute; necess&aacute;rio que voc&ecirc; comunique nosso SAC pelo e-mail maria@mariadebarro.com.br, informando o n&uacute;mero do pedido, a data da compra, fotos do defeito do produto e a refer&ecirc;ncia do item que ser&aacute; devolvido, realizando este procedimento imediatamente ap&oacute;s o recebimento do mesmo.</p>
<p>N&oacute;s iremos enviar o produto para an&aacute;lise e caso n&atilde;o haja conserto, providenciaremos a troca pelo mesmo ou por outro item de sua escolha, desde que seja o mesmo valor do produto. Havendo diferen&ccedil;a de valores entre os produtos, o cliente poder&aacute; optar pelo pagamento da diferen&ccedil;a ou receber a diferen&ccedil;a como cr&eacute;dito na loja. O prazo para an&aacute;lise &eacute; de 30 dias corridos, mas pode ser definido antes deste per&iacute;odo.</p></textarea></p>
                <p><button type="submit" class="btn btn-primary btn-primary-maria" name="enviar">ENVIAR</button></p>

            </form>

        </div>
    </div>
</div>
<script type="text/javascript" src="/homolog/web-files/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">

    tinyMCE.init({
        // General options

        mode: "textareas",
        theme: "advanced",
        plugins: "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
        // Theme options

        theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4: "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location: "top",
        theme_advanced_toolbar_align: "left",
        theme_advanced_statusbar_location: "bottom",
        theme_advanced_resizing: true,
        // Skin options

        skin: "o2k7",
        skin_variant: "silver",
        // Example content CSS (should be your site CSS)

        content_css: "css/example.css",
        // Drop lists for link/image/media/template dialogs

        template_external_list_url: "js/template_list.js",
        external_link_list_url: "js/link_list.js",
        external_image_list_url: "js/image_list.js",
        media_external_list_url: "js/media_list.js",
        // Replace values for the template plugin

        template_replace_values: {
            username: "Some User",
            staffid: "991234"

        }

    });

</script>

<script>
    $(function() {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>
</body>
</html><?php }} ?>

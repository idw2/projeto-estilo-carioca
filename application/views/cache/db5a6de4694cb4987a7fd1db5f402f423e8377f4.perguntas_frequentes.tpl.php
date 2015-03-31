<?php /*%%SmartyHeaderCode:706038063544915c4592e92-08734031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db5a6de4694cb4987a7fd1db5f402f423e8377f4' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/perguntas_frequentes.tpl',
      1 => 1409585152,
      2 => 'file',
    ),
    'c6982c052fcb863c3429c9a12c41006977b75c81' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/header.tpl',
      1 => 1410533859,
      2 => 'file',
    ),
    '0731b73a1e7144101fd76a90427ad49520238e95' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/navbar.tpl',
      1 => 1412107046,
      2 => 'file',
    ),
    '3354c23c2b0994231c448d214524b943620d6cf8' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/logo.tpl',
      1 => 1409231611,
      2 => 'file',
    ),
    '3c4f122be03838dc468135021358a9a0079d2471' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/tinymce_1.tpl',
      1 => 1409231616,
      2 => 'file',
    ),
    'e803ed1d8fd7cbcd1694b5fbd5b39c1efa8f8ac4' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/footer.tpl',
      1 => 1409231605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '706038063544915c4592e92-08734031',
  'variables' => 
  array (
    'language' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544915c48a2402_54163571',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544915c48a2402_54163571')) {function content_544915c48a2402_54163571($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Perguntas Frequentes</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        <link rel="icon" type="image/vnd.microsoft.icon" href="/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/web-files/img/favicon.ico"/>

        <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap-theme.css"/>		
        <link rel="stylesheet" href="/web-files/css/docs.min.css"/>
        <link rel="stylesheet" href="/web-files/css/style.css"/>

        <script language="javascript" src="/web-files/js/funcoes.js"></script>
        <script language="javascript" src="/web-files/js/jquery-2.1.1.min.js"></script>
        <script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
        <script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
        <script language="javascript" src="/web-files/bootstrap/js/bootstrap-tooltip.js"></script>
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="/web-files/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="/web-files/fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Upload -->
        <script type="text/javascript" src="/web-files/js/jquery.uploadfile.js"></script>
        <link rel="stylesheet" href="/web-files/css/uploadfile.css" type="text/css" media="screen" />
        <!-- JQuery UI -->
        <script type="text/javascript" src="/web-files/jquery-ui-1.11.1.custom/jquery-ui.js"></script>
        <link rel="stylesheet" href="/web-files/jquery-ui-1.11.1.custom/jquery-ui.css"/>
        <link rel="stylesheet" href="/web-files/jquery-ui-1.11.1.custom/jquery-ui.structure.css"/>
        <link rel="stylesheet" href="/web-files/jquery-ui-1.11.1.custom/jquery-ui.theme.css"/>
        <!-- Drag -->
        <script type="text/javascript" src="/web-files/js/jquery-sortable.js"></script>
        <!-- PLUGIN CROP -->
        <link rel="stylesheet" href="/web-files/crop/cropper.css" type="text/css" media="screen" />
        <script type="text/javascript" src="/web-files/crop/cropper.js"></script>
        <script type="text/javascript" src="/web-files/js/highlight.min.js"></script>
        <script type="text/javascript" src="/web-files/js/jquery.tablednd.0.7.js"></script>
        <script type="text/javascript" src="/web-files/js/default.js"></script>

        <script type="text/javascript">
            if (window.hljs) {
                hljs.tabReplace = '    ';
                hljs.initHighlightingOnLoad();
            }
        </script>

        <style>

            @font-face {
                font-family: Gotham-Black;
                src: url(/web-files/css/gotham/Gotham-Black.otf);
            }
            @font-face {
                font-family: Gotham-BlackIta;
                src: url(/web-files/css/gotham/Gotham-BlackIta.otf);
            }
            @font-face {
                font-family: Gotham-Bold;
                src: url(/web-files/css/gotham/Gotham-Bold.otf);
            }
            @font-face {
                font-family: Gotham-BoldIta;
                src: url(/web-files/css/gotham/Gotham-BoldIta.otf);
            }
            @font-face {
                font-family: Gotham-Book;
                src: url(/web-files/css/gotham/Gotham-Book.otf);
            }
            @font-face {
                font-family: Gotham-BookIta;
                src: url(/web-files/css/gotham/Gotham-BookIta.otf);
            }
            @font-face {
                font-family: Gotham-Light;
                src: url(/web-files/css/gotham/Gotham-Light.otf);
            }
            @font-face {
                font-family: Gotham-LightIta;
                src: url(/web-files/css/gotham/Gotham-LightIta.otf);
            }
            @font-face {
                font-family: Gotham-Medium;
                src: url(/web-files/css/gotham/Gotham-Medium.otf);
            }
            @font-face {
                font-family: Gotham-MediumIta;
                src: url(/web-files/css/gotham/Gotham-MediumIta.otf);
            }
            @font-face {
                font-family: Gotham-Thin;
                src: url(/web-files/css/gotham/Gotham-Thin.otf);
            }
            @font-face {
                font-family: Gotham-ThinIta;
                src: url(/web-files/css/gotham/Gotham-ThinIta.otf);
            }
            @font-face {
                font-family: Gotham-Ultra;
                src: url(/web-files/css/gotham/Gotham-Ultra.otf);
            }
            @font-face {
                font-family: Gotham-UltraIta;
                src: url(/web-files/css/gotham/Gotham-UltraIta.otf);
            }
            @font-face {
                font-family: Gotham-XLight;
                src: url(/web-files/css/gotham/Gotham-XLight.otf);
            }
            @font-face {
                font-family: Gotham-XLightIta;
                src: url(/web-files/css/gotham/Gotham-XLightIta.otf);
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
            <li  class="" ><a href="/pt/admin/welcome">Home</a></li>
                            <div class="panel-heading"><h4>Produtos</h4></div>
                <li  class="" ><a href="/pt/produtos/produtos-lista">Lista</a></li> 
                <div class="panel-heading"><h4>Pagamentos</h4></div>
                <li  class="" ><a href="/pt/pedidos/pedidos-lista">Lista</a></li>
                <div class="panel-heading"><h4>Newsletter</h4></div>
                <li  class="" ><a href="/pt/informacoes/newsletter-lista">Lista</a></li>
                <div class="panel-heading"><h4>Atendentes</h4></div>
                <li  class="" ><a href="/pt/admin/atendentes-lista">Lista</a></li>
                <div class="panel-heading"><h4>Páginas</h4></div>
                <li  class="" ><a href="/pt/html/quem_somos">Quem somos</a></li>
                <li  class="" ><a href="/pt/html/promocoes">Promoções</a></li>
                <li  class="" ><a href="/pt/html/programa-vantagens">Programa de Vantagens</a></li>              
                <li  class="" ><a href="/pt/html/programa-fidelidade">Programa de Fidelidade</a></li>              
                <li  class="" ><a href="/pt/html/politica-privacidade">Política de Privacidade</a></li>              
                <li  class="" ><a href="/pt/html/termos-servicos">Termos de serviço</a></li>              
                <li  class="" ><a href="/pt/html/forma-pagamento">Forma de Pagamento</a></li>              
                <li  class="" ><a href="/pt/html/entrega-devolucao">Entrega e Devolução</a></li>              
                <li  class="" ><a href="/pt/html/procon-rj">PROCON-RJ</a></li>              
                <li  class="active" ><a href="/pt/html/perguntas-frequentes">Perguntas Frequentes</a></li>              
                <li  class="" ><a href="/pt/html/cuidados-produtos">Cuidado com os Produtos</a></li>              
                        <div class="panel-heading"><h4>Serviços</h4></div>
            <li  class="" ><a href="/pt/admin/alterar-senha">Alterar senha</a></li>              
            <li  class="" ><a href="/pt/admin/logout">Sair</a></li>              
            
        </ul>     
    </div><!-- /.navbar-collapse -->
</nav>
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <img class="area-restrita img-responsive center-block" src="/web-files/img/logo.png" alt="" border="0" title="" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <form class="navbar-form navbar-left" style="width: 100%" action="/pt/html/perguntas_frequentes" method="post">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h2><span class="label label-default">Perguntas Frequentes</span></h2>
                    </div>
                    <br/>
                    <div class="col-md-6 text-right">
                        <a href="#" onclick="javascript:window.history.go(-1)" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                    </div>
                </div>
                <br/>
                <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo"><p><strong>Como comprar?</strong></p>
<p>Comprar na Maria de Barro &eacute; muito simples, basta seguir os passos abaixo:</p>
<p>1. Selecione a categoria que voc&ecirc; deseja no menu superior.</p>
<p>2. Escolha o produto e defina a quantidade que voc&ecirc; deseja, em seguida clique em "Adorei,quero comprar". Para adicionar mais produtos, selecione a op&ccedil;&atilde;o "Ver outros produtos".</p>
<p>3. Para finalizar sua compra, &eacute; necess&aacute;rio que voc&ecirc; preencha o nosso cadastro, com seus dados de entrega e pagamento. Caso voc&ecirc; j&aacute; esteja cadastrado, fa&ccedil;a o login utilizando o seu e-mail e senha.</p>
<p>4. Para fechar a compra basta ir em "Minhas compras", ou apenas dar continuidade ao processo de pagamento. Siga as instru&ccedil;&otilde;es que ir&atilde;o aparecer nas p&aacute;ginas.</p>
<p>Caso tenha mais alguma d&uacute;vida, entre em contato conosco ou envie um e-mail para maria@mariadebarro.com.br</p>
<p>&nbsp;&nbsp;</p>
<p><strong>Frete Gr&aacute;tis?</strong></p>
<p>O frete &eacute; gr&aacute;tis para a regi&atilde;o Sudeste e Paran&aacute; nas compras acima de R$99,00 (noventa e nove reais). Demais regi&otilde;es, o frete &eacute; gr&aacute;tis nas compras acima de R$180,00 (cento e oitenta reais). O valor final da compra deve ser igual ou acima de R$99,00 (noventa e reais) para regi&atilde;o Sudeste e Paran&aacute;, e igual ou acima de R$180,00 (cento e oitenta reais) para demais regi&otilde;es, para que ent&atilde;o tenha direito ao envio gratuito, mesmo que fa&ccedil;a uso de cupom promocional. Ao finalizar a compra deve optar por envio via Frete Gr&aacute;tis que &eacute; realizado via PAC dos Correios e tem um prazo para entrega (ap&oacute;s a postagem) de at&eacute; 23 (vinte e tr&ecirc;s) dias uteis, dependendo da localiza&ccedil;&atilde;o.</p>
<p>&nbsp;</p>
<p><strong>Troca Gr&aacute;tis?</strong></p>
<p>Para que tenha direito &agrave; troca gr&aacute;tis, deve realizar uma compra igual ou acima de R$200,00 (duzentos reais), sendo que esse deve ser o valor m&iacute;nimo da compra, mesmo que fa&ccedil;a uso de cupom promocional. A primeira troca do seu pedido ser&aacute; realizada gratuitamente at&eacute; 7 (sete) dias ap&oacute;s o recebimento do mesmo pelo cliente, que deve enviar e-mail dentro desse per&iacute;odo para nosso Atendimento ao Cliente, atrav&eacute;s do e-mail <a href="mailto:maria@mariadebarro.com.br">maria@mariadebarro.com.br</a> . Informe que deseja realizar uma troca e o n&uacute;mero do pedido, e ent&atilde;o receber&aacute; maiores detalhes sobre como proceder. Dependendo de onde more, podemos solicitar o recolhimento do(s) produto(s) (deve estar devidamente embalado) pelo carteiro ou postagem em uma ag&ecirc;ncia pr&oacute;pria dos Correios. Assim que tivermos o(s) produto(s) em m&atilde;os, iremos analisar o estado do mesmo e se estiver tudo ok, enviaremos um novo produto no mesmo valor pago pelo produto (para o mesmo endere&ccedil;o de envio do primeiro pedido) ou podemos disponibilizar o valor como cr&eacute;dito na loja. Esta op&ccedil;&atilde;o s&oacute; &eacute; dispon&iacute;vel para a primeira troca do seu pedido, no caso de devolu&ccedil;&atilde;o/desist&ecirc;ncia do(s) produto(s), o custo do envio dos mesmos para a Maria de Barro ser&aacute; por conta do cliente.</p>
<p>&nbsp;</p>
<p><strong>Meu pedido ainda n&atilde;o chegou, o que devo fazer?</strong></p>
<p>Se voc&ecirc; n&atilde;o recebeu o seu pedido ap&oacute;s o prazo m&aacute;ximo de entrega informado, por favor, entre em contato conosco pelo email maria@mariadebarro.com.br, informando a data de compra, o n&uacute;mero do pedido e seu nome. Ent&atilde;o o auxiliaremos da melhor forma poss&iacute;vel, para solucionar o ocorrido.</p>
<p>&nbsp;</p>
<p><strong>Como pagar com cart&atilde;o de cr&eacute;dito?</strong></p>
<p>Na tela de pagamento, voc&ecirc; selecionar&aacute; o Cart&atilde;o de Cr&eacute;dito de sua prefer&ecirc;ncia. O valor total de sua compra aparecer&aacute; junto com a bandeira dos cart&otilde;es e as op&ccedil;&otilde;es de parcelamento. Selecione o cart&atilde;o desejado e preencha os dados, como operadora, nome do titular, n&uacute;mero e validade, que est&atilde;o impressos na face do seu cart&atilde;o.</p>
<p>&nbsp;</p>
<p><strong>Como pagar com boleto banc&aacute;rio?</strong></p>
<p>Na tela de "Formas de Pagamento", selecione "Boleto Banc&aacute;rio". Imprima o boleto e o pague em qualquer ag&ecirc;ncia da rede banc&aacute;ria na data de vencimento. Se preferir, utilize os servi&ccedil;os online que o seu banco oferece. A data de vencimento est&aacute; impressa no boleto (vencimentos em feriados ou fins-de-semana podem ser pagos no dia &uacute;til seguinte). O processo de libera&ccedil;&atilde;o do pedido ocorrer&aacute; somente ap&oacute;s a confirma&ccedil;&atilde;o do pagamento. Se por algum motivo voc&ecirc; n&atilde;o pagar o boleto dentro do prazo original estabelecido, seu pedido ser&aacute; cancelado automaticamente, ser&aacute; necess&aacute;rio que voc&ecirc; selecione os produtos desejados e escolha novamente a op&ccedil;&atilde;o de pagar por boleto banc&aacute;rio ou ent&atilde;o deve solicitar uma segunda via atrav&eacute;s do e-mail maria@mariadebarro.com.br</p>
<p>&nbsp;</p>
<p><strong>Quero efetuar o pagamento atrav&eacute;s de boleto mas n&atilde;o tenho como imprimir, &eacute; poss&iacute;vel?</strong></p>
<p>Voc&ecirc; dever&aacute; escolher a op&ccedil;&atilde;o "Boleto banc&aacute;rio" no processo de pagamento. Quando o boleto banc&aacute;rio for exibido na tela do seu computador, anote a seq&uuml;&ecirc;ncia num&eacute;rica, que s&atilde;o aproximadamente 40 algarismos. Com esses n&uacute;meros, voc&ecirc; poder&aacute; pagar o boleto direto na sua conta, os processos de pagamento variam de banco para banco, mas normalmente podemos classific&aacute;-los como ficha de compensa&ccedil;&atilde;o. Voc&ecirc; tamb&eacute;m poder&aacute; efetuar o pagamento em uma ag&ecirc;ncia banc&aacute;ria que aceite o pagamento utilizando esta seq&uuml;&ecirc;ncia num&eacute;rica. Em qualquer um dos casos, voc&ecirc; receber&aacute; um comprovante que atesta o pagamento e n&oacute;s receberemos a confirma&ccedil;&atilde;o de que o pagamento foi feito, sem a necessidade de enviar comprovante algum.</p>
<p>&nbsp;</p>
<p><strong>Como efetuar o pagamento atrav&eacute;s da internet?</strong></p>
<p>Selecione o banco de sua prefer&ecirc;ncia na p&aacute;gina de pagamento. Um link se abrir&aacute; automaticamente para o site de seu &ldquo;Internet banking&rdquo;. A partir da&iacute;, voc&ecirc; deve selecionar o pagamento do tipo "ficha de compensa&ccedil;&atilde;o" e digitar a seq&uuml;&ecirc;ncia num&eacute;rica do boleto nos campos solicitados.</p></textarea></p>
                <p><button type="submit" class="btn btn-primary btn-primary-maria" name="enviar">ENVIAR</button></p>

            </form>

        </div>
    </div>
</div>
<script type="text/javascript" src="/web-files/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

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

<?php /*%%SmartyHeaderCode:969620278544932336c7a96-11294798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0553b8dba3e8d377b2f5488cee9825313604dad' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/politica_privacidade.tpl',
      1 => 1409581426,
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
  'nocache_hash' => '969620278544932336c7a96-11294798',
  'variables' => 
  array (
    'language' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54493233a158a1_73380442',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54493233a158a1_73380442')) {function content_54493233a158a1_73380442($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Política de Privacidade</title>

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
                <li  class="active" ><a href="/pt/html/politica-privacidade">Política de Privacidade</a></li>              
                <li  class="" ><a href="/pt/html/termos-servicos">Termos de serviço</a></li>              
                <li  class="" ><a href="/pt/html/forma-pagamento">Forma de Pagamento</a></li>              
                <li  class="" ><a href="/pt/html/entrega-devolucao">Entrega e Devolução</a></li>              
                <li  class="" ><a href="/pt/html/procon-rj">PROCON-RJ</a></li>              
                <li  class="" ><a href="/pt/html/perguntas-frequentes">Perguntas Frequentes</a></li>              
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

            <form class="navbar-form navbar-left" style="width: 100%" action="/pt/html/politica_privacidade" method="post">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h2><span class="label label-default">Política de Privacidade</span></h2>
                    </div>
                    <br/>
                    <div class="col-md-6 text-right">
                        <a href="#" onclick="javascript:window.history.go(-1)" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                    </div>
                </div>
                <br/>
                <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo"><p><strong>Pol&iacute;tica de privacidade Maria de Barro</strong></p>
<p>Esta Pol&iacute;tica de Privacidade abrange toda e qualquer informa&ccedil;&atilde;o pessoal que a Maria de Barro obt&eacute;m quando voc&ecirc; usa os servi&ccedil;os no nosso site.</p>
<p>A Maria de Barro reserva-se o direito de modificar a presente pol&iacute;tica para adapt&aacute;-la a altera&ccedil;&otilde;es legislativas ou jurisprud&ecirc;ncias, ou aquelas relativas &agrave;s pr&aacute;ticas comerciais.&nbsp;Verifique periodicamente para saber se houve ou n&atilde;o tais altera&ccedil;&otilde;es. Se fizermos quaisquer altera&ccedil;&otilde;es materiais, colocaremos um aviso em nossa home page.</p>
<p>Ao utilizar este site, voc&ecirc; concorda com os termos de nossa pol&iacute;tica. Para obter mais informa&ccedil;&otilde;es sobre os termos de utiliza&ccedil;&atilde;o deste site, por favor, visite a nossa p&aacute;gina "Termos de Servi&ccedil;o".</p>
<p>&nbsp;</p>
<p><strong>Informa&ccedil;&otilde;es Pessoais</strong></p>
<p>A Maria de Barro garante a seus clientes total transpar&ecirc;ncia e controle sobre a coleta, armazenagem e uso das Informa&ccedil;&otilde;es Pessoais contidas em seus Bancos de Dados.</p>
<p>Para se cadastrar em nossa newsletter, &eacute; preciso informar alguns dados pessoais, como nome e endere&ccedil;o de e-mail. Voc&ecirc; n&atilde;o precisa ser um usu&aacute;rio registrado para visitar o site da Maria de Barro, mas voc&ecirc; ter&aacute; que se registrar caso queira fazer pedidos ou fazer uso pleno dos nossos servi&ccedil;os.</p>
<p>Para fazer uma compra, voc&ecirc; tem que fornecer um endere&ccedil;o de cobran&ccedil;a, n&uacute;mero de telefone, endere&ccedil;o e informa&ccedil;&otilde;es de cart&atilde;o de cr&eacute;dito. Ao fazer uma compra, voc&ecirc; se torna um usu&aacute;rio registrado da Maria de Barro.</p>
<p>Sorteios, concursos e pesquisas. Se voc&ecirc; participar de algum sorteio ou concurso, ou responder a uma pesquisa, automaticamente voc&ecirc; se tornar&aacute; um usu&aacute;rio registrado (se voc&ecirc; n&atilde;o for j&aacute; um). Podemos solicitar algumas informa&ccedil;&otilde;es adicionais caso sejam necess&aacute;rias.</p>
<p>Nossos Rankings &amp; Coment&aacute;rios dos produtos e servi&ccedil;os. Ao participar emitindo sua opini&atilde;o, voc&ecirc; automaticamente ir&aacute; se tornar um usu&aacute;rio registrado (se voc&ecirc; n&atilde;o for j&aacute; um) e qualquer informa&ccedil;&atilde;o pessoal que voc&ecirc; enviar passar&aacute; a fazer parte do seu perfil.</p>
<p>&nbsp;</p>
<p><strong>Como protegemos suas informa&ccedil;&otilde;es</strong></p>
<p>Nossos clientes confiam em n&oacute;s e por isso fazemos o que est&aacute; ao nosso alcance para proteger suas informa&ccedil;&otilde;es pessoais. N&oacute;s usamos o Secure Sockets Layer ("SSL" autentica&ccedil;&atilde;o) para garantir a confidencialidade das transa&ccedil;&otilde;es feitas online no nosso site.&nbsp;</p>
<p>Infelizmente, apesar de todos nossos esfor&ccedil;os, sempre h&aacute; um risco de que terceiros possam interceptar transmiss&otilde;es ilegais. Esta realidade &eacute; verdadeira de todo o uso da Internet. Como resultado, n&atilde;o podemos garantir a seguran&ccedil;a de qualquer informa&ccedil;&atilde;o que voc&ecirc; transmita, e voc&ecirc; transmite todas as informa&ccedil;&otilde;es ao seu pr&oacute;prio risco.</p>
<p>&nbsp;</p>
<p><strong>Como a Maria de Barro usa suas informa&ccedil;&otilde;es pessoais</strong></p>
<p>Maria de Barro coleta informa&ccedil;&otilde;es pessoais, principalmente, para tornar nossos servi&ccedil;os mais gratificantes para voc&ecirc;. Costumamos usar essa informa&ccedil;&atilde;o para fins internos, como estudar as prefer&ecirc;ncias dos nossos clientes. N&oacute;s tamb&eacute;m podemos usar suas informa&ccedil;&otilde;es para contat&aacute;-lo por conta e fins promocionais. No caso de outra empresa comprar os ativos da Maria de Barro, suas informa&ccedil;&otilde;es pessoais pertencer&atilde;o a outra entidade.</p>
<p>&nbsp;</p>
<p><strong>Como evitar o recebimento de boletins e outros comunicados da Maria de Barro</strong></p>
<p>N&oacute;s usamos e-mail para enviar boletins informativos e outros comunicados com informa&ccedil;&otilde;es sobre a Maria de Barro ou parceiros, tais como promo&ccedil;&otilde;es, lan&ccedil;amentos, novas parcerias, novos produtos e presentes. Voc&ecirc; poder&aacute; decidir se deseja ou n&atilde;o continuar recebendo tais comunicados e boletins, para isso, basta enviar um e-mail para nosso SAC, no endere&ccedil;o <span>maria@mariadebarro.com.br</span>&nbsp;Se voc&ecirc; recebeu um e-mail e quer evitar novas mensagens, v&aacute; at&eacute; o final do e-mail para obter instru&ccedil;&otilde;es sobre como remov&ecirc;-lo da lista de discuss&atilde;o.</p>
<p>&nbsp;</p>
<p><strong>Suas informa&ccedil;&otilde;es pessoais</strong></p>
<p>A Maria de Barro pode compartilhar suas informa&ccedil;&otilde;es pessoais com empresas que prestam servi&ccedil;os para n&oacute;s, como o preenchimento de encomendas, pacotes, envio de correio postal e e-mails, analisando os dados do cliente, prestando assist&ecirc;ncia de marketing, processando pagamentos de cart&atilde;o de cr&eacute;dito, investigando a atividade fraudulenta, a realiza&ccedil;&atilde;o de inqu&eacute;ritos aos clientes e servi&ccedil;o ao cliente.</p>
<p>Eles t&ecirc;m acesso a informa&ccedil;&otilde;es pessoais necess&aacute;rias para desempenhar as suas fun&ccedil;&otilde;es, mas n&atilde;o pode divulgar suas informa&ccedil;&otilde;es pessoais para outros fins. Algumas informa&ccedil;&otilde;es pessoais poder&atilde;o ser armazenadas em servidores de outras companhias. Apenas a Maria de Barro tem o direito de acesso a essa informa&ccedil;&atilde;o.</p>
<p>N&oacute;s n&atilde;o compartilhamos informa&ccedil;&otilde;es individuais sobre nossos clientes com os anunciantes e parceiros de marketing. Qualquer informa&ccedil;&atilde;o pessoal que voc&ecirc; incluir em seu perfil ou em qualquer conte&uacute;do submetido ao usar o Ratings &amp; Reviews ou a perguntas e respostas dos servi&ccedil;os ser&aacute; exibido na Maria de Barro, &eacute; necess&aacute;rio que esteja ciente antes de submeter tais conte&uacute;dos. As informa&ccedil;&otilde;es pessoais podem ser reveladas se tal for exigido por lei.</p>
<p>&nbsp;</p>
<p><strong>Fazer uma compra</strong></p>
<p>Quando voc&ecirc; compra algo na Maria de Barro, voc&ecirc; tem que fornecer um endere&ccedil;o de faturamento, n&uacute;mero de telefone, endere&ccedil;o e informa&ccedil;&otilde;es de cart&atilde;o de cr&eacute;dito ou outra forma de pagamento. Ao fazer uma compra, voc&ecirc; se torna um usu&aacute;rio registrado da Maria de Barro.</p>
<p>&nbsp;</p>
<p><strong>Perguntas sobre esta pol&iacute;tica</strong></p>
<p>Se voc&ecirc; tiver alguma d&uacute;vida sobre esta pol&iacute;tica de privacidade ou pelo conte&uacute;do ou pr&aacute;ticas do nosso site, voc&ecirc; pode entrar em contato diretamente conosco:&nbsp;<span>maria@mariadebarro.com.br</span></p>
<p>www.mariadebarro.com.br</p></textarea></p>
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

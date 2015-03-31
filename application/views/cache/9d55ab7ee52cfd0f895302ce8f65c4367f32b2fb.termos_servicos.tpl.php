<?php /*%%SmartyHeaderCode:8876937445449323736c149-51416539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d55ab7ee52cfd0f895302ce8f65c4367f32b2fb' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/termos_servicos.tpl',
      1 => 1409581504,
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
  'nocache_hash' => '8876937445449323736c149-51416539',
  'variables' => 
  array (
    'language' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54493237739934_20885526',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54493237739934_20885526')) {function content_54493237739934_20885526($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Termos de serviço</title>

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
                <li  class="active" ><a href="/pt/html/termos-servicos">Termos de serviço</a></li>              
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

            <form class="navbar-form navbar-left" style="width: 100%" action="/pt/html/termos_servicos" method="post">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h2><span class="label label-default">Termos de Serviço</span></h2>
                    </div>
                    <br/>
                    <div class="col-md-6 text-right">
                        <a href="#" onclick="javascript:window.history.go(-1)" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                    </div>
                </div>
                <br/>
                <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo"><h2><span>Bem-vinda &agrave; Maria de Barro!</span></h2>
<p><span>A presta&ccedil;&atilde;o de servi&ccedil;os da Maria de Barro est&aacute; sujeita &agrave;s condi&ccedil;&otilde;es listadas nesta p&aacute;gina. Ao visitar o site ou comprar na Maria de Barro, voc&ecirc; automaticamente aceita essas condi&ccedil;&otilde;es. Leia com cuidado essas condi&ccedil;&otilde;es, que detalham o que nossos usu&aacute;rios podem esperar de n&oacute;s e o que esperamos de nossos usu&aacute;rios. Ao acessar qualquer se&ccedil;&atilde;o do site, voc&ecirc; aceita o contrato vinculante e os termos estabelecidos abaixo.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>SUA CONTA</span></strong></p>
<p><span>A Maria de Barro reserva-se o direito de, &agrave; sua discri&ccedil;&atilde;o, recusar o servi&ccedil;o, encerrar contas, remover ou editar conte&uacute;do e cancelar pedidos.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Copyright</span></strong></p>
<p><span>Todo o design do site, textos, gr&aacute;ficos, logotipos, &iacute;cones, imagens, clipes de &aacute;udio, v&iacute;deos, a sele&ccedil;&atilde;o e organiza&ccedil;&atilde;o dos mesmos s&atilde;o de propriedade da Maria de Barro, TODOS OS DIREITOS RESERVADOS. N&atilde;o &eacute; dada permiss&atilde;o para copiar e reproduzir para fins comerciais sem a pr&eacute;via autoriza&ccedil;&atilde;o da Maria de Barro. Todo o material e informa&ccedil;&atilde;o apresentados pela Maria de Barro se destina a ser utilizado para fins informativos e descri&ccedil;&atilde;o de produtos. O uso deste site est&aacute; sujeito a estes termos e condi&ccedil;&otilde;es. Este site &eacute; apenas uma loja online de acess&oacute;rios femininos. Conte&uacute;do de Terceiros: Maria de Barro pode fornecer conte&uacute;do de terceiros como um servi&ccedil;o para aqueles interessados em informa&ccedil;&otilde;es. Maria de Barro n&atilde;o acompanha, aprova ou tem qualquer controle sobre qualquer conte&uacute;do de terceiro. Maria de Barro n&atilde;o garante, endossa ou aprova com precis&atilde;o ou integridade de qualquer conte&uacute;do de Terceiro conte&uacute;do. Maria de Barro n&atilde;o &eacute; respons&aacute;vel pela atualiza&ccedil;&atilde;o ou revis&atilde;o do conte&uacute;do de terceiros. Todos os links de terceiros citados no site ou no blog da Maria de Barro n&atilde;o s&atilde;o de nossa responsabilidade e n&atilde;o garantimos que o conte&uacute;do ainda esteja dispon&iacute;vel.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Responsabilidade</span></strong></p>
<p><span>A Maria de Barro N&Atilde;O GARANTE QUE AS INFORMA&Ccedil;&Otilde;ES publicadas neste site s&atilde;o exatas, completas ou correntes. As informa&ccedil;&otilde;es sobre pre&ccedil;os e disponibilidade est&atilde;o sujeitas a altera&ccedil;&otilde;es sem aviso pr&eacute;vio. Maria de Barro N&Atilde;O SER&Aacute; RESPONS&Aacute;VEL POR DANOS DE QUALQUER TIPO DECORRENTES DE CONEX&Atilde;O COM O USO DO SITE. Este site foi criado e &eacute; controlado por Maria de Barro e reserva-se o direito de fazer mudan&ccedil;as em seu site, em sua pol&iacute;tica de privacidade e nos termos e condi&ccedil;&otilde;es a qualquer momento.</span></p>
<p><span>Nosso dados: XXXXXXXXXXXX</span></p>
<p><span>&nbsp;XXXXX</span></p>
<p><span>XXXXXXX</span></p>
<p><strong><span>Informa&ccedil;&otilde;es sobre o produto</span></strong></p>
<p><span>As descri&ccedil;&otilde;es dos produtos oferecidos pela Maria de Barro s&atilde;o as mais corretas poss&iacute;veis. Se um produto vendido pela Maria de Barro n&atilde;o corresponder &agrave; descri&ccedil;&atilde;o fornecida, solicitamos que o devolva sem uso e em perfeitas condi&ccedil;&otilde;es. Os produtos apresentados neste site podem ser encomendados e entregues somente dentro do Brasil, desde que seja uma &aacute;rea coberta pelos Correios.</span></p>
<p><span>As refer&ecirc;ncias a produtos, servi&ccedil;os, processos ou outras informa&ccedil;&otilde;es pelo nome comercial, marca registrada, fabricante, fornecedor ou de outra forma, seja em nosso site ou em nosso blog, n&atilde;o constituem nem implicam endosso, patroc&iacute;nio ou recomenda&ccedil;&atilde;o por parte da Maria de Barro. Alguns produtos possuem imagens meramente ilustrativas, para que os usu&aacute;rios possam ter ideia de tamanho ou detalhes dos produtos.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Cores dos produtos</span></strong></p>
<p><span>A Maria de Barro tenta reproduzir e exibir com precis&atilde;o as cores dos produtos, mas sabemos que as cores reais dos produtos est&atilde;o sujeitas a pequenas varia&ccedil;&otilde;es por conta do seu monitor. Cada monitor est&aacute; configurado de uma forma diferente.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Ofertas e Promo&ccedil;&otilde;es</span></strong></p>
<p><span>As ofertas ser&atilde;o v&aacute;lidas durante determinado tempo ou enquanto houver estoque dispon&iacute;vel. Todos os produtos est&atilde;o sujeitos &agrave; disponibilidade de entrega.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Programa de prote&ccedil;&atilde;o &agrave; fraude e atividades n&atilde;o autorizadas</span></strong></p>
<p><span>Como parte de nossos procedimentos de prote&ccedil;&atilde;o &agrave; fraude ou outros tipos de atividades n&atilde;o autorizadas, nos reservamos no direito de recusar a processar uma compra, devido &agrave; suspeita de fraude, ato il&iacute;cito, atividade ilegal ou em casos que haja suspeita de m&aacute; f&eacute;. Caso ocorra alguma suspeita, podemos rejeitar o seu pedido e cancelar a sua compra, ou o nosso Servi&ccedil;o de Atendimento ao Cliente pode entrar em contato com voc&ecirc; no n&uacute;mero de telefone ou atrav&eacute;s do e-mail fornecido para confirmar o seu pedido e solicitar documentos para comprova&ccedil;&atilde;o/aprova&ccedil;&atilde;o da titularidade do propriet&aacute;rio do cart&atilde;o. Tamb&eacute;m nos reservamos o direito de cancelar quaisquer contas, pedidos ou se recusar a enviar para determinados endere&ccedil;os, devido &agrave; suspeita de fraude, ato il&iacute;cito, atividade ilegal ou em casos que haja suspeita de m&aacute; f&eacute;. N&oacute;s tomamos essas medidas para proteger os nossos clientes, bem como nos proteger de fraude ou atividades n&atilde;o autorizadas.</span></p>
<p><span>&nbsp;</span></p>
<p><strong><span>Coment&aacute;rios, Sugest&otilde;es e Outros</span></strong></p>
<p><span>Maria de Barro agradece seus coment&aacute;rios e feedback sobre este site, nossos produtos e servi&ccedil;os. Todas as informa&ccedil;&otilde;es, materiais, sugest&otilde;es, ideias ou coment&aacute;rios enviados para Maria de Barro n&atilde;o ser&atilde;o tratadas como confidenciais, propriet&aacute;rias ou informa&ccedil;&otilde;es sobre segredo comercial e, mediante a apresenta&ccedil;&atilde;o de tais informa&ccedil;&otilde;es, o usu&aacute;rio estar&aacute; concedendo a Maria de Barro uma licen&ccedil;a irrevog&aacute;vel e irrestrita para utilizar, modificar, reproduzir, transmitir, exibir e distribuir essas informa&ccedil;&otilde;es para qualquer finalidade. A menos que exigido por lei, a Maria de Barro n&atilde;o vai usar seu nome em conex&atilde;o com tais informa&ccedil;&otilde;es, materiais, sugest&otilde;es, ideias ou coment&aacute;rios sem o seu consentimento pr&eacute;vio por escrito.</span></p></textarea></p>
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

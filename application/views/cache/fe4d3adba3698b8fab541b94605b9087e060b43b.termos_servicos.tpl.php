<?php /*%%SmartyHeaderCode:17936800654ef7305226151-92512323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe4d3adba3698b8fab541b94605b9087e060b43b' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/termos_servicos.tpl',
      1 => 1417206320,
      2 => 'file',
    ),
    'ac2c18a5081edc217b9c4be02e595167eff25d93' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/header.tpl',
      1 => 1424978146,
      2 => 'file',
    ),
    '7eb677adcd7c0d82e647c09ecee716de8729db60' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/navbar.tpl',
      1 => 1424977920,
      2 => 'file',
    ),
    '96a8ddce0d67da5c866b6fbb6bc0382bff5ef8e7' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/logo.tpl',
      1 => 1424972165,
      2 => 'file',
    ),
    '74f29788f84d56bb4b3c9113c1fc503799b04dd3' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/tinymce_1.tpl',
      1 => 1417206320,
      2 => 'file',
    ),
    '5d845aeca603183216c663abda55568885594a7e' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/footer.tpl',
      1 => 1424978683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17936800654ef7305226151-92512323',
  'variables' => 
  array (
    'language' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ef73057f9569_90516188',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef73057f9569_90516188')) {function content_54ef73057f9569_90516188($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Termos de serviço</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        <link rel="shortcut icon" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5">
        <link rel="shortcut icon" type="image/x-icon" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5"/>

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
        
        <!-- //CSS DO TEMA RESPONSIVO EM BOOTSTRAP -->
        <link href="/web-files/startbootstrap-sb-admin-1.0.2/css/sb-admin.css" rel="stylesheet">
        <link href="/web-files/startbootstrap-sb-admin-1.0.2/css/plugins/morris.css" rel="stylesheet">
        
        

        <script type="text/javascript">
            if (window.hljs) {
                hljs.tabReplace = '    ';
                hljs.initHighlightingOnLoad();
            }
        </script>

        <style>


        </style>

    </head>
    <body>
        <div id="wrapper"><div id="page-wrapper"><div class="container-fluid">

<div class="sidebar">
    <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/pt/admin/welcome">rodrigo@estilocarioca.com.br</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        
        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Estilo Carioca <b class="caret"></b></a>
            <ul class="dropdown-menu">
                
                <li>
                    <a href="/pt/admin/alterar-senha"><i class="fa fa-fw fa-gear"></i> Alterar senha</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="/pt/admin/logout"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">


            <li  class="" ><a href="/pt/admin/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>
            <li  class="" ><a href="/pt/produtos/produtos-lista"><i class="fa fa-paper-plane"></i> Produtos</a></li> 
            <li  class="" ><a href="/pt/produtos/estoque"><i class="fa fa-bars"></i> Estoque</a></li> 
            <li  class=""  ><a href="/pt/produtos/estoque-baixo" style="position: relative; "><i class="fa fa-sort-alpha-asc"></i> Estoque Baixo </a></li>
            <li  class=""  ><a href="/pt/produtos/avise-me" style="position: relative; "><i class="fa fa-bell"></i> Avise-me Quando Chegar </a></li>  
            <li  class="" ><a href="/pt/produtos/mais-vendidos-site"><i class="fa fa-plus-circle"></i> Produtos Mais Vendidos</a></li> 
            <li  class="" ><a href="/pt/conta/lista"><i class="fa fa-users"></i> Clientes</a></li>
            <li  class="" ><a href="/pt/informacoes/newsletter-lista"><i class="fa fa-paper-plane"></i> Newsletter</a></li>
            <li  class=""  ><a href="/pt/conta/aniversariantes" style="position: relative; "><i class="fa fa-users"></i> Aniversariantes </a></li>
            <li  class="" ><a href="/pt/pedidos/pedidos-lista"><i class="fa fa-file-text"></i> Pedidos</a></li>
            <li  class="" ><a href="/pt/pedidos/exportar"><i class="fa fa-expand"></i> Exportar Pedidos</a></li>
                
            <li  class=""  ><a href="/pt/nota-fiscal/exportar" style="position: relative; "><i class="fa fa-expand"></i> Exportar Nota Fiscal</a></li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Páginas HTML <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li  class="" ><a href="/pt/html/quem_somos"><i class="fa fa-code"></i> Quem somos</a></li>
                    <li  class="" ><a href="/pt/html/entrega-devolucao"><i class="fa fa-code"></i> Entrega e Devolução</a></li>              
                    <li  class="active" ><a href="/pt/html/termos-servicos"><i class="fa fa-code"></i> Termos de Serviço</a></li>              
                    
                    
                    
                </ul>
            </li>


                      


            
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">


       
        
    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>



<!--
<nav class="navbar navbar-default" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" style="padding-bottom: 3%; background: #1f3c8a">
        <div class="panel-heading"><h4>Painel Administrativo</h4></div>
        <ul class="nav nav-stacked" style="font-size: 14px;">
            <li  class="" ><a href="/pt/admin/welcome">Home</a></li>
            
   
    <div class="panel-heading"><h4>Produtos</h4></div>
    <li  class="" ><a href="/pt/produtos/produtos-lista">Lista</a></li> 
        <li  class="" ><a href="/pt/produtos/estoque">Estoque</a></li> 
    <li  class=""  ><a href="/pt/produtos/estoque-baixo" style="position: relative; ">Estoque Baixo </a></li> 
        <li  class=""  ><a href="/pt/produtos/avise-me" style="position: relative; ">Avise-me quando chegar </a></li>  
    <li  class="" ><a href="/pt/produtos/mais-vendidos-site">Mais Vendidos</a></li> 
    <div class="panel-heading"><h4>Contas</h4></div>
    <li  class="" ><a href="/pt/conta/lista">Clientes</a></li>
    <li  class=""  ><a href="/pt/conta/aniversariantes" style="position: relative; ">Aniversariantes </a></li>
    
    
    <div class="panel-heading"><h4>Pagamentos</h4></div>
    <li  class="" ><a href="/pt/pedidos/pedidos-lista">Lista</a></li>
    <li  class="" ><a href="/pt/pedidos/exportar">Exportar</a></li>
    
     <div class="panel-heading"><h4>Newsletter</h4></div>
     <li  class="" ><a href="/pt/informacoes/newsletter-lista">Lista</a></li>
    
        <div class="panel-heading"><h4>Nota Fiscal</h4></div>
    <li  class=""  ><a href="/pt/nota-fiscal/exportar" style="position: relative; ">Exportar </a></li>
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
</div>
</nav>-->
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <img class="area-restrita img-responsive" src="/web-files/img/logo.png" alt="" border="0" title="" />
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
                <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo"><h2><span>Bem-vinda &agrave; Estilo Carioca!</span></h2>
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
<p><span>RMGSPORT COMERCIO EIRELI - ME&nbsp;agradece seus coment&aacute;rios e feedback sobre este site, nossos produtos e servi&ccedil;os. Todas as informa&ccedil;&otilde;es, materiais, sugest&otilde;es, ideias ou coment&aacute;rios enviados para RMGSPORT COMERCIO EIRELI - ME&nbsp;n&atilde;o ser&atilde;o tratadas como confidenciais, propriet&aacute;rias ou informa&ccedil;&otilde;es sobre segredo comercial e, mediante a apresenta&ccedil;&atilde;o de tais informa&ccedil;&otilde;es, o usu&aacute;rio estar&aacute; concedendo a RMGSPORT COMERCIO EIRELI - ME&nbsp;uma licen&ccedil;a irrevog&aacute;vel e irrestrita para utilizar, modificar, reproduzir, transmitir, exibir e distribuir essas informa&ccedil;&otilde;es para qualquer finalidade. A menos que exigido por lei, a RMGSPORT COMERCIO EIRELI - ME&nbsp;n&atilde;o vai usar seu nome em conex&atilde;o com tais informa&ccedil;&otilde;es, materiais, sugest&otilde;es, ideias ou coment&aacute;rios sem o seu consentimento pr&eacute;vio por escrito.</span></p></textarea></p>
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

 </div>
 <!-- /.container-fluid -->
 </div>
 <!-- /#page-wrapper -->
</div>
 <!-- /#wrapper -->

<script>
    $(function() {
        $("[data-toggle='tooltip']").tooltip();
    });    
    $(document).ready(function(){
        $(".container-fluid").css("height", screen.height);
    });
</script>

<!-- //JS DO TEMA RESPONSIVO EM BOOTSTRAP// -->
<script src="/web-files/startbootstrap-sb-admin-1.0.2/js/plugins/morris/raphael.min.js"></script>
<script src="/web-files/startbootstrap-sb-admin-1.0.2/js/plugins/morris/morris.min.js"></script>
<script src="/web-files/startbootstrap-sb-admin-1.0.2/js/plugins/morris/morris-data.js"></script>



</body>
</html><?php }} ?>

<?php /*%%SmartyHeaderCode:114980854754b96d7499e6a9-10388505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10256ac2af89ac75fd5ec5232e29f6610db58254' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/estoque_baixo.tpl',
      1 => 1418145280,
      2 => 'file',
    ),
    '73de0111ee301fe0c7a0419067a6092ee8c2473b' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/header.tpl',
      1 => 1417410159,
      2 => 'file',
    ),
    '89191d4af7112164523e47456832e67e5aa51378' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/navbar.tpl',
      1 => 1420462714,
      2 => 'file',
    ),
    'e582154db7903ebcd42f80d3c4df27150912bdbe' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/logo.tpl',
      1 => 1417410164,
      2 => 'file',
    ),
    'b5516564ae08b3778b5b55911ea33638d41d12c5' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/footer.tpl',
      1 => 1417410152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114980854754b96d7499e6a9-10388505',
  'variables' => 
  array (
    'falta_produtos_estoque' => 0,
    'web_files' => 0,
    'num_produtos_que_faltam' => 0,
    'referencia_nome_produtos' => 0,
    'referencia_nome_produto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b96d7512c019_06361687',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b96d7512c019_06361687')) {function content_54b96d7512c019_06361687($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Estoque Baixo</title>

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
                                <li  class="" ><a href="/pt/produtos/estoque">Estoque</a></li> 
                <li  class="active"  style="background: #fff;"><a href="/pt/produtos/estoque-baixo" style="position: relative; color: #333">Estoque Baixo  <span style='background: #5F8DE2; display: inline-block; padding: 3px 10px; position: absolute; color: #fff; font-weight: bold; font-size: 19px; bottom: 3px; right: 7px;'>268</span> </a></li> 
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
                <li  class=""  style="background: #fff;"><a href="/pt/nota-fiscal/exportar" style="position: relative; color: #333">Exportar  <span style='background: #5F8DE2; display: inline-block; padding: 3px 10px; position: absolute; color: #fff; font-weight: bold; font-size: 19px; bottom: 4px; right: 7px;'>1</span> </a></li>
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

            <h2><span class="label label-default">Lista de Produtos em Estoque Baixo</span></h2>
            <br/>

            <div class="panel-default hide">
                <h3> <span class="Loader "><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span> &nbsp;Aguarde, verificando estoque... &nbsp;</h3>
            </div>

            <div class="panel-default showEstoque">


                <div class="container" style="width: 100%;">        
                      
                        <div class="row">        
                            <div class="panel panel-default">
                                <div class="panel-heading"><span>ATENÇÃO:</span> Existem 268 produto(s) com estoque baixo!</div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Referência</th>
                                            <th>Produto</th>
                                            <th>Quantidade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           
                                            <tr>
                                                <td>A-00001</td>
                                                <td>Anel dourado com quadrado vazado </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00002</td>
                                                <td>Anel AMORE com pingente </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00003</td>
                                                <td>Anel folhas dourado e fumê</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00004</td>
                                                <td>Anel dourado linhas vazado</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00005</td>
                                                <td>Anel dourado em coração vazado</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00006</td>
                                                <td>Kit 3 anéis com bolinhas de zircônia</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00007</td>
                                                <td>Anel coração regulável</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00009</td>
                                                <td>Anel dourado de linhas</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00010</td>
                                                <td>Anel círculos de zircônia </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00012</td>
                                                <td>Anel dourado de cruz com zircônia preta </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00013</td>
                                                <td>Anel largo cravejado de zircônia </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00014</td>
                                                <td>Anel dourado de cruz com zircônia fumê</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00016</td>
                                                <td>Kit 3 anéis de corações </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00017</td>
                                                <td>Anel folha dourado com zircônia</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00018</td>
                                                <td>Anel gatinho</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00019</td>
                                                <td>Anel dourado lago com faixas de zircônia</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00023</td>
                                                <td>Anel fumê gotas</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00024</td>
                                                <td>Anel dourado Gotas</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00025</td>
                                                <td>Anel dourado 3 elos com zircônia</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00026</td>
                                                <td>Kit anel 3 cores com zircônia</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00027</td>
                                                <td>Anel dourado fosco caixa alta</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00028</td>
                                                <td>Anel dourado caixa alta</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00029</td>
                                                <td>Anel dourado com zircônias caixa alta</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00030</td>
                                                <td>Anel dourado com 3 elos móveis</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00031</td>
                                                <td>Anel dourado 4 elos espaçados</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00032</td>
                                                <td>Anel com 5 elos e bolinhas com zircônia</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00033</td>
                                                <td>Anel escrita giratória </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00034</td>
                                                <td>Anel dourado boleado</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00037</td>
                                                <td>Anel dourado cartier</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00038</td>
                                                <td>Anel dourado rendado de zircônia branca</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00039</td>
                                                <td>Anel dourado rendado com zircônia branca</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00040</td>
                                                <td>Anel dourado meia aliança com zircônia </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00041</td>
                                                <td>Anel dourado com 3 elos de zircônia </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00042</td>
                                                <td>Anel dourado com círculos de zircônia </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00044</td>
                                                <td>Kit 5 anéis dourados </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00048</td>
                                                <td>Anel dourado com detalhe prata, zircônia</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00050</td>
                                                <td>Anel dourado de corrente no centro</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00053</td>
                                                <td>Anel dourado com fios de zircônia</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00054</td>
                                                <td>Anel dourado aliança de zircônia</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00055</td>
                                                <td>Anel dourado detalhe prata com pingente</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00056</td>
                                                <td>Anel dourado grande com pedra</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00059</td>
                                                <td>Conjunto anéis caixa alta</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00060</td>
                                                <td>Anel coração cravejado de zircônia preta</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00061</td>
                                                <td>Anel coração cravejado de zircônias</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00062</td>
                                                <td>Anel dourado com zircônias pretas </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00063</td>
                                                <td>Anel dourado com zircônias pretas </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00064</td>
                                                <td>Anel dourado com zircônias pretas </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00066</td>
                                                <td>Anel dourado gota com cristal rosa </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00067</td>
                                                <td>Anel doudaro com relevo de escamas</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00068</td>
                                                <td>Anel fumê com relevo de escamas</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00069</td>
                                                <td>Anel dourado largo com detalhes </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00070</td>
                                                <td>Anel dourado e pingente de coração </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00071</td>
                                                <td>Anel dourado de falange Chanel </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00075</td>
                                                <td>Anel dourado de falange coração</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00076</td>
                                                <td>Anel fumê de falange coração</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00077</td>
                                                <td>Anel dourado de falange trançado</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00078</td>
                                                <td>Anel fumê de falange trançado</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>A-00079</td>
                                                <td>Kit anel onda rosê e fumê</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00001</td>
                                                <td>Brinco ferradura dourado </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00002</td>
                                                <td>Brinco dourado de cruz pequena</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00003</td>
                                                <td>Brinco dourado de coração vazado</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00004</td>
                                                <td>Brinco dourado formato de diamante </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00005</td>
                                                <td>Brinco fumê com desenhos vazados</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00007</td>
                                                <td>Brinco dourado LOVE</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00008</td>
                                                <td>Brinco Dourado Menininha </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00009</td>
                                                <td>Brinco dourado de circulos</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00010</td>
                                                <td>Brinco dourado com quadradinhos</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00011</td>
                                                <td>Brinco dourado fumê com folhas</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00014</td>
                                                <td>Brinco dourado com círculos de laço </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00015</td>
                                                <td>Brinco dourado fosco quadrado </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00016</td>
                                                <td>Brinco dourado de argola com detalhes</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00018</td>
                                                <td>Brinco rose escovado com círculos largos</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00020</td>
                                                <td>Brinco rose com flores vazadas e base de</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00021</td>
                                                <td>Brinco Dourado Vazado Indiano</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00022</td>
                                                <td>Brinco Fumê Vazado Indiano</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00025</td>
                                                <td>Brinco dourado escovado de folhas longo</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00026</td>
                                                <td>Brinco Dourado com pendente de gota</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00027</td>
                                                <td>Brinco dourado com três elos vazados </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00028</td>
                                                <td>Brinco dourado longo com 2 gotas de lado</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00029</td>
                                                <td>Brinco dourado fumê com circulos</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00033</td>
                                                <td>Brinco dourado de gota com detalhes</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00034</td>
                                                <td>Brinco dourado com gota de cristal</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00035</td>
                                                <td>Brinco dourado com base gota de cristal </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00036</td>
                                                <td>Brinco dourado meia bola</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00037</td>
                                                <td>Brinco dourado argola achatado</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00038</td>
                                                <td>Brinco dourado argola achatado médio</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00040</td>
                                                <td>Brinco dourado argola </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00041</td>
                                                <td>Brinco prata argola rendado com zircônia</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00042</td>
                                                <td>Brinco dourado argola </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00043</td>
                                                <td>Brinco dourado de estrela</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00044</td>
                                                <td>Brinco dourado pequeno de cruz</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00045</td>
                                                <td>Brinco dourado indiano com pedra</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00046</td>
                                                <td>Brinco dourado indiano com duas gotas</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00047</td>
                                                <td>Brinco coração invertido dourado indiano</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00048</td>
                                                <td>Brinco pequeno branco com duas pérolas</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00050</td>
                                                <td>Brinco Indiano com cinco gotas</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00052</td>
                                                <td>Brinco dourado com pedra preta</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00053</td>
                                                <td>Brinco Indiano com detalhes ovais</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00054</td>
                                                <td>Brinco Maxi em formato de gotas</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00055</td>
                                                <td>Brinco Maxi com pedras</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00056</td>
                                                <td>Brinco Maxi em Formato de Gotas</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00057</td>
                                                <td>Brinco Maxi em Formato de Gotas</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00060</td>
                                                <td>Brinco prata de argola pequeno </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00061</td>
                                                <td>Brinco dourado com pedras redondas verde</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00062</td>
                                                <td>Brinco dourado com pedras redondas fumê</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00066</td>
                                                <td>Brinco dourado oval com 9 cristais preto</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00067</td>
                                                <td>Brinco fumê oval com cristais preto </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00068</td>
                                                <td>Brinco fumê oval com 9 cristais rosa </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00069</td>
                                                <td>Brinco dourado com base e pendente oval </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00071</td>
                                                <td>Brinco dourado com pendente de leque</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00072</td>
                                                <td>Brinco dourado com canutilho grande </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00073</td>
                                                <td>Brinco dourado com pendente gota </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00074</td>
                                                <td>Brinco dourado com cristal losango verde</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00075</td>
                                                <td>Brinco dourado com cristal losango </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00076</td>
                                                <td>Brinco dourado com base de zircônias </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00077</td>
                                                <td>Brinco dourado com base de zircônias </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00078</td>
                                                <td>Brinco dourado com cristal fumê gota </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00079</td>
                                                <td>Brinco fumê com cristal verde e roxo</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00080</td>
                                                <td>Brinco dourado base gota de cristal rosa</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00081</td>
                                                <td>Brinco fumê base gota de cristal leitoso</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00083</td>
                                                <td>Brinco fumê com pendente de gotas</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00084</td>
                                                <td>Brinco dourado com pendente de gotas</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00085</td>
                                                <td>Brinco fumê base gota e pendente gota</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00086</td>
                                                <td>Brinco fumê com cristal rosa gota </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00087</td>
                                                <td>Brinco fumê base com cristal losango </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00088</td>
                                                <td>Brinco fumê base gota e pingente redondo</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00089</td>
                                                <td>Brinco fumê com pendente de leque</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00090</td>
                                                <td>Brinco fumê gota com cristal verde </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00091</td>
                                                <td>Brinco fumê com base oval e pendente ova</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00092</td>
                                                <td>Brinco dourado com base oval e pendente </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00093</td>
                                                <td>Brinco fumê 3 elos </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00094</td>
                                                <td>Brinco fumê com pendente de gota </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00095</td>
                                                <td>Brinco fumê com pendente de gota </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00096</td>
                                                <td>Brinco fume com cristal verde grande </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00097</td>
                                                <td>Brinco fumê com base floral </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00098</td>
                                                <td>Brinco fumê com 3 pendentes</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00099</td>
                                                <td>Brinco fumê com canutilho e pendente </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00101</td>
                                                <td>Brinco fumê com base gota </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00103</td>
                                                <td>Brinco fumê vazado indiano</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00104</td>
                                                <td>Brinco fumê com canutilho e pendente </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00105</td>
                                                <td>Brinco replica vivara com zircônia preta</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00106</td>
                                                <td>Brinco dourado com zircônias brancas</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00107</td>
                                                <td>Brinco dourado com zircônias brancas </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00108</td>
                                                <td>Brinco prata com zircônias brancas </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00109</td>
                                                <td>Brinco dourado argola com 2 fileiras </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00110</td>
                                                <td>Brinco dourado argola com zircônia</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00111</td>
                                                <td>Brinco dourado com zircônias brancas </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00112</td>
                                                <td>Brinco dourado com textura em gota</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00113</td>
                                                <td>Brinco dourado com textura em gota </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00114</td>
                                                <td>Brinco fumê com textura em gota </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00115</td>
                                                <td>Brinco dourado com pendente de 3 voltas </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00116</td>
                                                <td>Brinco fumê com pendente de 3 voltas </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00117</td>
                                                <td>Brinco dourado com base gota e pendente </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>B-00118</td>
                                                <td>Brinco fumê em formato de gota </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>BR-00001</td>
                                                <td>Bracelete dourado com pérola grande</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>BR-00004</td>
                                                <td>Bracelete italiano dourado com trevo</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>BR-00005</td>
                                                <td>Bracelete italiano rosê com trevo </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>BR-00010</td>
                                                <td>Bracelete italiano de fio prata </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>BR-00018</td>
                                                <td>Bracelete italiano de fio preto </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>BR-00019</td>
                                                <td>Bracelete italiano rosê com fivela prata</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00001</td>
                                                <td>Colar dourado com pingente de cruz</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00002</td>
                                                <td>Colar dourado três elos</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00003</td>
                                                <td>Colar dourado com pingente bolinha</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00004</td>
                                                <td>Colar dourado cruz fixa lisa</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00005</td>
                                                <td>Colar dourado cruz cravejada de zircônia</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00006</td>
                                                <td>Colar com pingente de cruz </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00007</td>
                                                <td>Colar dourado de terço com cruz</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00008</td>
                                                <td>Colar dourado de terço bolinha</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00009</td>
                                                <td>Colar dourado com pingente de Ave Maria </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00010</td>
                                                <td>Colar dourado com pingente vazado</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00011</td>
                                                <td>Colar dourado com pingente Pai Nosso</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00012</td>
                                                <td>Colar dourado com pingente de menino </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00013</td>
                                                <td>Pingente dourado de menina</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00014</td>
                                                <td>Colar dourado com pingente de menino </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00015</td>
                                                <td>Colar com pingente de menina grande</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00019</td>
                                                <td>Colar dourado pingente coração</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00020</td>
                                                <td>Colar dourado com pingente de flor</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00021</td>
                                                <td>Colar dourado com pingente de flor</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00022</td>
                                                <td>Colar dourado com pingente círculos</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00023</td>
                                                <td>Colar dourado de madre pérola e zircônia</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00024</td>
                                                <td>Colar fumê com pingente de cruz</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00025</td>
                                                <td>Colar com pingente de Nossa Senhora</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00026</td>
                                                <td>Colar dourado Nossa Senhora</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00027</td>
                                                <td>Colar com pingente de Nossa Senhora</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00028</td>
                                                <td>Colar com pingente oval Nossa Senhora</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00029</td>
                                                <td>Colar de couro com canutilhos dourados</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00030</td>
                                                <td>Colar de bolinhas verdes e folhas </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00031</td>
                                                <td>Colar de bolinhas pretas e penas </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00032</td>
                                                <td>Colar de Couro com detalhe triangular</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00033</td>
                                                <td>Colar dourado de gotas coloridas</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00034</td>
                                                <td>Colar dourado de madre perola com franja</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00035</td>
                                                <td>Colar dourado com pingente em gota </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00036</td>
                                                <td>Colar fumê com pingente de franjas </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00038</td>
                                                <td>Colar fumê com pingente de trevo </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00039</td>
                                                <td>Colar dourado de madre pérola</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00040</td>
                                                <td>Colar fumê de correntes</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00041</td>
                                                <td>Colar fumê com pingente em gota</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00042</td>
                                                <td>Colar fumê com pingente de coração </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00043</td>
                                                <td>Colar fumê com pingente redondo </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00044</td>
                                                <td>Colar com pingente de pomba da paz</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00045</td>
                                                <td>Colar dourado com pingente em gota </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00046</td>
                                                <td>Colar dourado com tambor cravejado </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00047</td>
                                                <td>Colar dourado com gota dupla </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00048</td>
                                                <td>Colar dourado com pingente em gota</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00049</td>
                                                <td>Colar dourado com pingente sweets</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00050</td>
                                                <td>Colar dourado com pingente de cristal </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00051</td>
                                                <td>Colar dourado com pingente de verde </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00052</td>
                                                <td>Colar dourado com pingente de cristal </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00053</td>
                                                <td>Colar fumê com pingente de cristal roxo</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00054</td>
                                                <td>Colar fumê circulo com cristais preto </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00055</td>
                                                <td>Colar fumê circulo com cristais verde </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00056</td>
                                                <td>Colar fumê circulo com cristais rosa </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00057</td>
                                                <td>Colar dourado circulo com cristais preto</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00058</td>
                                                <td>Colar dourado com cristal citrino</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00059</td>
                                                <td>Colar fumê com cristal verde em gota </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00060</td>
                                                <td>Colar dourado com pingente de cristal </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00062</td>
                                                <td>Colar fume com pingente de cristal oval </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00063</td>
                                                <td>Colar prata com pingente de zircônias </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>C-00064</td>
                                                <td>Colar dourado com pingente de quadrado</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>CJ-0001</td>
                                                <td>Conjunto dourado chanel cordão/brinco </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>CJ-0002</td>
                                                <td>Conjunto dourado cordão brinco de pérola</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00001</td>
                                                <td>Pulseira de couro com várias voltas.</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00002</td>
                                                <td>Pulseira dourada rabo de rato</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00004</td>
                                                <td>Pulseira rabo de rato trama grossa</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00007</td>
                                                <td>Pulseira dourada torcida</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00008</td>
                                                <td>Pulseira de couro com laço</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00009</td>
                                                <td>Pulseira dourada com detalhe de trevo</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00010</td>
                                                <td>Pulseira de couro com Nossa Senhora </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00011</td>
                                                <td>Pulseira de Couro com detalhes</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00012</td>
                                                <td>Pulseira dourada rabo de rato com trevo</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00019</td>
                                                <td>Pulseira prateada de elos </td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00021</td>
                                                <td>Pulseira de Couro pingente coração</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00022</td>
                                                <td>Pulseira dourada com cristais dentro</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00023</td>
                                                <td>Pulseira de Couro com três argolas</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00024</td>
                                                <td>Pulseira prata com cristais dentro</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00025</td>
                                                <td>Pulseira dourada de bolinhas</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00026</td>
                                                <td>Pulseira dourado escovada com elos Ovais</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00028</td>
                                                <td>Pulseira fumê com folhas cravejadas </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00029</td>
                                                <td>Pulseira dourada com folhas cravejadas</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00030</td>
                                                <td>Pulseira 3 elos redondos prata, dourado </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00031</td>
                                                <td>Pulseira dourada corrente média</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00032</td>
                                                <td>Pulseira dourada rabo de rato larga</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00033</td>
                                                <td>Pulseira fumê rabo de rato larga</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00034</td>
                                                <td>Pulseira dourada com franja fina</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00038</td>
                                                <td>Pulseira dourada com franja grossa</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00039</td>
                                                <td>Pulseira prata com franja grossa</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00040</td>
                                                <td>Pulseira rosê com franja grossa</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00041</td>
                                                <td>Pulseira fumê com franja grossa</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00042</td>
                                                <td>Pulseira rosê 3 elos com pingente cruz</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00043</td>
                                                <td>Pulseira olho grego</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00046</td>
                                                <td>Pulseira rosê com pingente de coração</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00047</td>
                                                <td>Pulseira fumê pingente coração</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00048</td>
                                                <td>Pulseira de couro com canutilhos</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00051</td>
                                                <td>Pulseira prata riviera com aplicações</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00052</td>
                                                <td>Pulseira réplica vivara com zircônia</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00053</td>
                                                <td>Pulseira dourada com detalhe de coração</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00054</td>
                                                <td>Pulseira dourada com símbolo da paz</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00055</td>
                                                <td>Pulseira de couro com detalhe de gancho </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00056</td>
                                                <td>Pulseira de couro com canutilhos </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00058</td>
                                                <td>Pulseira fumê com elos quadrados</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00059</td>
                                                <td>Pulseira rosê com elos quadrados</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00060</td>
                                                <td>Pulseira prata com elos quadrados</td>
                                                <td>0</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00061</td>
                                                <td>Pulseira rosé com bolinhas intercaladas </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00062</td>
                                                <td>Pulseira dourada bolinhas intercaladas </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00063</td>
                                                <td>Pulseira fumê com bolinhas intercaladas</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00064</td>
                                                <td>Pulseira dourada com placa "pai nosso"</td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00065</td>
                                                <td>Pulseira rosé com placa "abençoada" </td>
                                                <td>1</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>P-00066</td>
                                                <td>Pulseira olho grego de madre pérolas</td>
                                                <td>1</td>
                                            </tr>
                                                                            </tbody>
                                </table>
                            </div>        
                        </div> 
                                    </div>

            </div>

        </div>
    </div>
</div>

<script>
    $(function() {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>
</body>
</html>

<?php }} ?>

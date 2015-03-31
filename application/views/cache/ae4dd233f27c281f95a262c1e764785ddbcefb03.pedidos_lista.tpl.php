<?php /*%%SmartyHeaderCode:205343435447f8295cebb0-65248507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae4dd233f27c281f95a262c1e764785ddbcefb03' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/pedidos_lista.tpl',
      1 => 1413395985,
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
    '111d7ae4f4e53aaa3d0d0806256eb8f8ea7f3b1d' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/search.tpl',
      1 => 1411481605,
      2 => 'file',
    ),
    'e803ed1d8fd7cbcd1694b5fbd5b39c1efa8f8ac4' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/footer.tpl',
      1 => 1409231605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205343435447f8295cebb0-65248507',
  'variables' => 
  array (
    'pedidos' => 0,
    'pedido' => 0,
    'i' => 0,
    'language' => 0,
    'star' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447f8299ca7e4_28767505',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447f8299ca7e4_28767505')) {function content_5447f8299ca7e4_28767505($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Lista de Pedidos</title>

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
                <li  class="active" ><a href="/pt/pedidos/pedidos-lista">Lista</a></li>
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
            <form class="navbar-form navbar-right" role="search" method="post">
    <div class="form-group">
        <input type="hidden" name="actionType" value="search"/>
        <input type="text" class="search-input form-control" name="search" placeholder="Pesquisa"/>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>



        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <h2><span class="label label-default">Lista de Produtos</span></h2>
            <br/>
            
            <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span>

            <div class="panel-default">
       
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                    <thead>
                        <th>Data</th>
                        <th>Nº do Pedido</th>
                        <th>Nome</th>
                        <th>Forma de Pagamento</th>
                        <th>Forma de Envio</th>
                        <th>Total Parcial</th>
                        <th>Taxa de Entrega</th>
                        <th>Total</th>
                        <th>Ações</th>
                    </thead>
                    
                     
                      
                                                    <tr >
                                <td>22/10/2014 - 15h24</td>
                                <td>0000000046</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 128,19</td>
                                <td>R$ 17,60</td>
                                <td>R$ 158,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/e2483d47f702d906b700c8b075234c6f"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/e2483d47f702d906b700c8b075234c6f"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>22/10/2014 - 12h06</td>
                                <td>0000000045</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 47,11</td>
                                <td>R$ 17,60</td>
                                <td>R$ 69,20</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/c8e6db5ff901fb4ad22d689ecdd36e31"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/c8e6db5ff901fb4ad22d689ecdd36e31"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>22/10/2014 - 10h18</td>
                                <td>0000000044</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>SEDEX</td>
                                <td>R$ 87,65</td>
                                <td>R$ 31,10</td>
                                <td>R$ 127,10</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/ffd3c5b75e4568dc5243ef384f8ca971"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/ffd3c5b75e4568dc5243ef384f8ca971"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>21/10/2014 - 16h23</td>
                                <td>0000000043</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 23,01</td>
                                <td>R$ 17,60</td>
                                <td>R$ 42,80</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/a50283dfea6fb673449225eeff0e7be3"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/a50283dfea6fb673449225eeff0e7be3"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>21/10/2014 - 11h22</td>
                                <td>0000000042</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 48,39</td>
                                <td>R$ 17,60</td>
                                <td>R$ 70,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/a3f6d3239af6aeb436e01a39a8f4932f"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/a3f6d3239af6aeb436e01a39a8f4932f"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>21/10/2014 - 11h21</td>
                                <td>0000000041</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 178,04</td>
                                <td>R$ </td>
                                <td>R$ 195,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/81f8bd9585b399841acdcbc8229af1f9"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/81f8bd9585b399841acdcbc8229af1f9"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>21/10/2014 - 11h20</td>
                                <td>0000000040</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 178,04</td>
                                <td>R$ </td>
                                <td>R$ 195,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/1d5a19571660101da7b64a1b3bf9f480"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/1d5a19571660101da7b64a1b3bf9f480"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>21/10/2014 - 11h20</td>
                                <td>0000000039</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 178,04</td>
                                <td>R$ </td>
                                <td>R$ 195,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/7a376552edb71a2b893ebd2d06c870b1"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/7a376552edb71a2b893ebd2d06c870b1"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>21/10/2014 - 11h20</td>
                                <td>0000000038</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 178,04</td>
                                <td>R$ </td>
                                <td>R$ 195,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/61ee203a61077a788291a7f443c6839c"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/61ee203a61077a788291a7f443c6839c"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>21/10/2014 - 11h20</td>
                                <td>0000000037</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 178,04</td>
                                <td>R$ </td>
                                <td>R$ 195,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/8e195e85bee1725ecee289acc62784d6"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/8e195e85bee1725ecee289acc62784d6"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>21/10/2014 - 11h18</td>
                                <td>0000000036</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 178,04</td>
                                <td>R$ </td>
                                <td>R$ 195,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/a11fff8911ee99ddaa152a1b199bf88e"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/a11fff8911ee99ddaa152a1b199bf88e"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>21/10/2014 - 11h14</td>
                                <td>0000000035</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 47,66</td>
                                <td>R$ 17,60</td>
                                <td>R$ 69,80</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/fd58fa42943e2db705909e9d93d5a814"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/fd58fa42943e2db705909e9d93d5a814"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>20/10/2014 - 18h07</td>
                                <td>0000000034</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 160,51</td>
                                <td>R$ </td>
                                <td>R$ 175,80</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/4d0baa09b984e1ddcc1a51fe111b6f9f"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/4d0baa09b984e1ddcc1a51fe111b6f9f"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>20/10/2014 - 17h48</td>
                                <td>0000000033</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 29,03</td>
                                <td>R$ 17,60</td>
                                <td>R$ 49,40</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/58943878b997aa0937f8bca2153562f2"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/58943878b997aa0937f8bca2153562f2"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>20/10/2014 - 17h44</td>
                                <td>0000000032</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 1,00</td>
                                <td>R$ 17,60</td>
                                <td>R$ 18,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/f0fda17bd113cd6cb0b9947ecc5cc321"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/f0fda17bd113cd6cb0b9947ecc5cc321"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>20/10/2014 - 15h02</td>
                                <td>0000000031</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 83,27</td>
                                <td>R$ 17,60</td>
                                <td>R$ 108,80</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/aea27882938312e0d5fe3fe4a526f59d"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/aea27882938312e0d5fe3fe4a526f59d"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>20/10/2014 - 14h59</td>
                                <td>0000000030</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 90,39</td>
                                <td>R$ 17,60</td>
                                <td>R$ 116,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/8d7b2d68f7fd32e5a1dcc7a85968424e"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/8d7b2d68f7fd32e5a1dcc7a85968424e"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>17/10/2014 - 15h52</td>
                                <td>0000000029</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 52,04</td>
                                <td>R$ 17,60</td>
                                <td>R$ 74,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/85f9c25e52fac4948d3e423e7c7f1f21"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/85f9c25e52fac4948d3e423e7c7f1f21"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>17/10/2014 - 12h43</td>
                                <td>0000000028</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 235,57</td>
                                <td>R$ </td>
                                <td>R$ 258,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/6605f8a41e251fb598e4aab6ffe85fa9"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/6605f8a41e251fb598e4aab6ffe85fa9"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>15/10/2014 - 14h38</td>
                                <td>0000000027</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 48,39</td>
                                <td>R$ 13,70</td>
                                <td>R$ 66,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/pt/pedidos/status/1/87ed0b44ecc4c3f37ff36173f566a948"><span class="ico-default-star " data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/87ed0b44ecc4c3f37ff36173f566a948"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>10/10/2014 - 17h56</td>
                                <td>0000000026</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 63,27</td>
                                <td>R$ 13,70</td>
                                <td>R$ 83,00</td>
                                                                                                                                           
                                <td>
                                    <a href="/pt/pedidos/status/1/a3f1166e4fb30d0bdaa79c3efe6aa40c"><span class="ico-default-star " data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/a3f1166e4fb30d0bdaa79c3efe6aa40c"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>10/10/2014 - 17h56</td>
                                <td>0000000025</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 82,17</td>
                                <td>R$ 13,70</td>
                                <td>R$ 103,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/pt/pedidos/status/1/7b71e0be5112c65466367e886841cbd7"><span class="ico-default-star " data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/7b71e0be5112c65466367e886841cbd7"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>10/10/2014 - 17h52</td>
                                <td>0000000024</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 13,70</td>
                                <td>R$ 13,70</td>
                                <td>R$ 28,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/77a5601a010da854314b4d225e8d8654"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/77a5601a010da854314b4d225e8d8654"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>10/10/2014 - 17h50</td>
                                <td>0000000023</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>cielo</td>
                                <td>SEDEX 10</td>
                                <td>R$ 31,32</td>
                                <td>R$ 22,60</td>
                                <td>R$ 56,90</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/091904ea9d6647cbac2d09553be6985a"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/091904ea9d6647cbac2d09553be6985a"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>10/10/2014 - 17h48</td>
                                <td>0000000022</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>boleto</td>
                                <td>SEDEX</td>
                                <td>R$ 26,48</td>
                                <td>R$ 14,00</td>
                                <td>R$ 43,00</td>
                                                                                                                                           
                                <td>
                                    <a href="/pt/pedidos/status/1/8fd2f7e6282e706e8fe73b4416db4876"><span class="ico-default-star " data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/8fd2f7e6282e706e8fe73b4416db4876"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>10/10/2014 - 15h08</td>
                                <td>0000000021</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 44,10</td>
                                <td>R$ 17,60</td>
                                <td>R$ 65,90</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/73907d7ec4a4c7e6886644b81ba57968"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/73907d7ec4a4c7e6886644b81ba57968"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>10/10/2014 - 12h39</td>
                                <td>0000000020</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 173,48</td>
                                <td>R$ </td>
                                <td>R$ 190,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/07adb31f2fd3903dd4642170c6f2cb0c"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/07adb31f2fd3903dd4642170c6f2cb0c"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>09/10/2014 - 19h48</td>
                                <td>0000000019</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 23,74</td>
                                <td>R$ 17,60</td>
                                <td>R$ 43,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/f43fb55869abda8453498b5d65eb98c0"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/f43fb55869abda8453498b5d65eb98c0"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>09/10/2014 - 19h48</td>
                                <td>0000000018</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 23,74</td>
                                <td>R$ 17,60</td>
                                <td>R$ 43,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/5cb79c73570a9cf494537e0dc3d1a2fe"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/5cb79c73570a9cf494537e0dc3d1a2fe"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>09/10/2014 - 19h43</td>
                                <td>0000000017</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 72,13</td>
                                <td>R$ 17,60</td>
                                <td>R$ 96,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/0d70d0f2ecb8b73cb466c67d837273ea"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/0d70d0f2ecb8b73cb466c67d837273ea"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>09/10/2014 - 19h42</td>
                                <td>0000000016</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td></td>
                                <td>PAC</td>
                                <td>R$ 28,49</td>
                                <td>R$ 17,60</td>
                                <td>R$ 48,80</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/980768efc9cbffb1fc47cae576969c88"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/980768efc9cbffb1fc47cae576969c88"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>09/10/2014 - 19h40</td>
                                <td>0000000015</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td></td>
                                <td>PAC</td>
                                <td>R$ 391,51</td>
                                <td>R$ </td>
                                <td>R$ 428,80</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/e923b96e9ef6cd35c2d69c979e4b2463"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/e923b96e9ef6cd35c2d69c979e4b2463"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>08/10/2014 - 17h20</td>
                                <td>0000000014</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>moip</td>
                                <td>SEDEX 10</td>
                                <td>R$ 111,67</td>
                                <td>R$ 22,60</td>
                                <td>R$ 144,90</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/e0c9f650432b2628029894d4a09a2f68"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/e0c9f650432b2628029894d4a09a2f68"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>08/10/2014 - 11h39</td>
                                <td>0000000013</td>
                                <td>João Santos</td>
                                <td>moip</td>
                                <td>PAC</td>
                                <td>R$ 631,83</td>
                                <td>R$ </td>
                                <td>R$ 692,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/63effd702bad79daa033bce74db72547"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/63effd702bad79daa033bce74db72547"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>08/10/2014 - 11h30</td>
                                <td>0000000012</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 38,35</td>
                                <td>R$ 13,70</td>
                                <td>R$ 55,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/a64c5b7f65b50e551c081c14c20deb86"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/a64c5b7f65b50e551c081c14c20deb86"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>08/10/2014 - 11h28</td>
                                <td>0000000011</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 53,87</td>
                                <td>R$ 13,70</td>
                                <td>R$ 72,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/7be98316f6b931afc068e19af73ef34d"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/7be98316f6b931afc068e19af73ef34d"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>08/10/2014 - 11h21</td>
                                <td>0000000010</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 99,52</td>
                                <td>R$ 13,70</td>
                                <td>R$ 122,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/11415f1e86fdf91e5e07afbebcfa69f1"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/11415f1e86fdf91e5e07afbebcfa69f1"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>08/10/2014 - 11h13</td>
                                <td>0000000009</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 54,78</td>
                                <td>R$ 13,70</td>
                                <td>R$ 73,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/7495a6760f3e22444535f16f98f29c6f"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/7495a6760f3e22444535f16f98f29c6f"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>08/10/2014 - 11h10</td>
                                <td>0000000008</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 100,80</td>
                                <td>R$ 13,70</td>
                                <td>R$ 124,10</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/a3884f66cdbae9c8aa7d332479031ec1"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/a3884f66cdbae9c8aa7d332479031ec1"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>08/10/2014 - 11h06</td>
                                <td>0000000007</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 54,78</td>
                                <td>R$ 13,70</td>
                                <td>R$ 73,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/7fd1383e599d5f69214cab9dc91510b3"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/7fd1383e599d5f69214cab9dc91510b3"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>07/10/2014 - 17h14</td>
                                <td>0000000006</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>moip</td>
                                <td>PAC</td>
                                <td>R$ 54,78</td>
                                <td>R$ 13,70</td>
                                <td>R$ 73,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/97fdf459c0ea5a3e3eaf8887256d4f6f"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/97fdf459c0ea5a3e3eaf8887256d4f6f"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>07/10/2014 - 17h09</td>
                                <td>0000000005</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 236,48</td>
                                <td>R$ </td>
                                <td>R$ 259,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/e77a11479d2acee0994eabbc499b16fb"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/e77a11479d2acee0994eabbc499b16fb"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>07/10/2014 - 16h44</td>
                                <td>0000000004</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 82,17</td>
                                <td>R$ 13,70</td>
                                <td>R$ 103,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/678d8b6f1d5411bc1bb7c1defcf04bdb"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/678d8b6f1d5411bc1bb7c1defcf04bdb"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>07/10/2014 - 16h40</td>
                                <td>0000000003</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 164,35</td>
                                <td>R$ </td>
                                <td>R$ 180,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/2275267c3d72449e89f6944ca4620776"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/2275267c3d72449e89f6944ca4620776"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>07/10/2014 - 16h25</td>
                                <td>0000000002</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 164,35</td>
                                <td>R$ </td>
                                <td>R$ 180,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/81df55bc8c7b7454f40a10accb436996"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/81df55bc8c7b7454f40a10accb436996"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>07/10/2014 - 16h19</td>
                                <td>0000000001</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 99,52</td>
                                <td>R$ 13,70</td>
                                <td>R$ 122,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/pt/pedidos/status/0/abf1c16e6985f2a16f2bf40eff054e80"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/pt/pedidos/view/codpedido/abf1c16e6985f2a16f2bf40eff054e80"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      

                    
                </table>
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
</html><?php }} ?>

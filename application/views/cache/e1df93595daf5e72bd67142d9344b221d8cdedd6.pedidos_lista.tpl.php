<?php /*%%SmartyHeaderCode:722048356545b89bb4973d9-17768004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1df93595daf5e72bd67142d9344b221d8cdedd6' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/pedidos_lista.tpl',
      1 => 1414768726,
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
      1 => 1415106289,
      2 => 'file',
    ),
    'e582154db7903ebcd42f80d3c4df27150912bdbe' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/logo.tpl',
      1 => 1414178488,
      2 => 'file',
    ),
    '977e15250893ce490435a9a602a9dd3012dc495d' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/search.tpl',
      1 => 1411481605,
      2 => 'file',
    ),
    'b5516564ae08b3778b5b55911ea33638d41d12c5' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/footer.tpl',
      1 => 1409231605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '722048356545b89bb4973d9-17768004',
  'variables' => 
  array (
    'web_files' => 0,
    'pedidos' => 0,
    'pedido' => 0,
    'i' => 0,
    'language' => 0,
    'star' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b89bb9078b9_35683890',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b89bb9078b9_35683890')) {function content_545b89bb9078b9_35683890($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Lista de Pedidos</title>

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
            <li  class="" ><a href="/homolog/pt/admin/welcome">Home</a></li>
                            <div class="panel-heading"><h4>Produtos</h4></div>
                <li  class="" ><a href="/homolog/pt/produtos/produtos-lista">Lista</a></li> 
                <li  class="" ><a href="/homolog/pt/produtos/estoque">Estoque</a></li> 
                <div class="panel-heading"><h4>Pagamentos</h4></div>
                <li  class="active" ><a href="/homolog/pt/pedidos/pedidos-lista">Lista</a></li>
                <li  class="" ><a href="/homolog/pt/pedidos/exportar">Exportar</a></li>
                <div class="panel-heading"><h4>Newsletter</h4></div>
                <li  class="" ><a href="/homolog/pt/informacoes/newsletter-lista">Lista</a></li>
                
                <div class="panel-heading"><h4>Nota Fiscal</h4></div>
                <li  class="" ><a href="/homolog/pt/nota-fiscal/exportar">Exportar</a></li>
                <div class="panel-heading"><h4>Páginas</h4></div>
                <li  class="" ><a href="/homolog/pt/html/quem_somos">Quem somos</a></li>
                <li  class="" ><a href="/homolog/pt/html/promocoes">Promoções</a></li>
                <li  class="" ><a href="/homolog/pt/html/programa-vantagens">Programa de Vantagens</a></li>              
                <li  class="" ><a href="/homolog/pt/html/programa-fidelidade">Programa de Fidelidade</a></li>              
                <li  class="" ><a href="/homolog/pt/html/politica-privacidade">Política de Privacidade</a></li>              
                <li  class="" ><a href="/homolog/pt/html/termos-servicos">Termos de serviço</a></li>              
                <li  class="" ><a href="/homolog/pt/html/forma-pagamento">Forma de Pagamento</a></li>              
                <li  class="" ><a href="/homolog/pt/html/entrega-devolucao">Entrega e Devolução</a></li>              
                <li  class="" ><a href="/homolog/pt/html/procon-rj">PROCON-RJ</a></li>              
                <li  class="" ><a href="/homolog/pt/html/perguntas-frequentes">Perguntas Frequentes</a></li>              
                <li  class="" ><a href="/homolog/pt/html/cuidados-produtos">Cuidado com os Produtos</a></li>              
                        <div class="panel-heading"><h4>Serviços</h4></div>
            <li  class="" ><a href="/homolog/pt/admin/alterar-senha">Alterar senha</a></li>              
            <li  class="" ><a href="/homolog/pt/admin/logout">Sair</a></li>              
            
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
            
            <span class="Loader hide"><img src="/homolog/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span>

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
                                <td>05/11/2014 - 17h35</td>
                                <td>0000000082</td>
                                <td>Rogerio Pontes</td>
                                <td>paypal</td>
                                <td>Total Express</td>
                                <td>R$ 107,74</td>
                                <td>R$ 8,10</td>
                                <td>R$ 126,10</td>
                                                                                                                                           
                                <td>
                                    <a href="/homolog/pt/pedidos/status/1/feac29786d86718e735549f4ba200862"><span class="ico-default-star " data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/feac29786d86718e735549f4ba200862"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>05/11/2014 - 17h30</td>
                                <td>0000000081</td>
                                <td>Rogerio Pontes</td>
                                <td>paypal</td>
                                <td>Total Express</td>
                                <td>R$ 64,83</td>
                                <td>R$ 7,85</td>
                                <td>R$ 78,85</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/a4d150aedeb73456d1eb47a60d9a16e0"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/a4d150aedeb73456d1eb47a60d9a16e0"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>05/11/2014 - 17h12</td>
                                <td>0000000080</td>
                                <td>Rogerio Pontes</td>
                                <td>paypal</td>
                                <td>Total Express</td>
                                <td>R$ 59,35</td>
                                <td>R$ 7,81</td>
                                <td>R$ 72,81</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/2f9d1fbb4867148d50524cdc6c2edbd8"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/2f9d1fbb4867148d50524cdc6c2edbd8"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>05/11/2014 - 11h50</td>
                                <td>0000000079</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>Total Express</td>
                                <td>R$ 47,48</td>
                                <td>R$ 7,70</td>
                                <td>R$ 59,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/06740722b42fb40f88e92637f0a38946"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/06740722b42fb40f88e92637f0a38946"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>05/11/2014 - 11h44</td>
                                <td>0000000078</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>Total Express</td>
                                <td>R$ 442,83</td>
                                <td>R$ </td>
                                <td>R$ 485,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/a2ecfb119fc825de2a16195c61647cdf"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/a2ecfb119fc825de2a16195c61647cdf"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>05/11/2014 - 11h28</td>
                                <td>0000000077</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>Total Express</td>
                                <td>R$ 227,35</td>
                                <td>R$ </td>
                                <td>R$ 249,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/f444d9405496ec42478ed6e22e8323f2"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/f444d9405496ec42478ed6e22e8323f2"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>04/11/2014 - 17h53</td>
                                <td>0000000076</td>
                                <td>Rogerio Pontes</td>
                                <td>paypal</td>
                                <td>Total Express</td>
                                <td>R$ 29,22</td>
                                <td>R$ 7,58</td>
                                <td>R$ 39,58</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/cb64fad857ff823042d6118b0851d2cd"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/cb64fad857ff823042d6118b0851d2cd"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>04/11/2014 - 17h51</td>
                                <td>0000000075</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>Total Express</td>
                                <td>R$ 177,13</td>
                                <td>R$ </td>
                                <td>R$ 194,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/7728c2976ce45651f9b073da668b980c"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/7728c2976ce45651f9b073da668b980c"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>04/11/2014 - 17h48</td>
                                <td>0000000074</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>Total Express</td>
                                <td>R$ 34,70</td>
                                <td>R$ 7,65</td>
                                <td>R$ 45,65</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/d94acc8cbf78014910a18a738b2b2efb"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/d94acc8cbf78014910a18a738b2b2efb"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>31/10/2014 - 19h15</td>
                                <td>0000000073</td>
                                <td>Rogerio Pontes</td>
                                <td>paypal</td>
                                <td>Total Express</td>
                                <td>R$ 47,48</td>
                                <td>R$ 7,70</td>
                                <td>R$ 59,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/0978f6bc5bce950752e15a00ed431c05"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/0978f6bc5bce950752e15a00ed431c05"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>31/10/2014 - 19h00</td>
                                <td>0000000072</td>
                                <td>Rogerio Pontes</td>
                                <td>paypal</td>
                                <td>Total Express</td>
                                <td>R$ 88,57</td>
                                <td>R$ 7,98</td>
                                <td>R$ 104,98</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/580d659102612faa8f557348f260499f"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/580d659102612faa8f557348f260499f"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>31/10/2014 - 18h59</td>
                                <td>0000000071</td>
                                <td>Rogerio Pontes</td>
                                <td>paypal</td>
                                <td>Total Express</td>
                                <td>R$ 64,83</td>
                                <td>R$ 7,85</td>
                                <td>R$ 78,85</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/dc2cb35b42e252954e92300814b1bd8b"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/dc2cb35b42e252954e92300814b1bd8b"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>31/10/2014 - 18h57</td>
                                <td>0000000070</td>
                                <td>Rogerio Pontes</td>
                                <td>paypal</td>
                                <td>Total Express</td>
                                <td>R$ 34,70</td>
                                <td>R$ 7,62</td>
                                <td>R$ 45,62</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/7d3163b2ac9276f541a74d04d25c8770"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/7d3163b2ac9276f541a74d04d25c8770"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>31/10/2014 - 18h39</td>
                                <td>0000000069</td>
                                <td>Rogerio Pontes</td>
                                <td>paypal</td>
                                <td>Total Express</td>
                                <td>R$ 42,00</td>
                                <td>R$ 7,70</td>
                                <td>R$ 53,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/416278a17f37e640e363598e49487f80"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/416278a17f37e640e363598e49487f80"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>31/10/2014 - 15h14</td>
                                <td>0000000068</td>
                                <td>JoÃ£o Ahmad</td>
                                <td>paypal</td>
                                <td>Total Express</td>
                                <td>R$ 142,43</td>
                                <td>R$ 6,19</td>
                                <td>R$ 162,19</td>
                                                                                                                                           
                                <td>
                                    <a href="/homolog/pt/pedidos/status/1/755f67192443d7ffa61023aa099721db"><span class="ico-default-star " data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/755f67192443d7ffa61023aa099721db"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>31/10/2014 - 10h56</td>
                                <td>0000000067</td>
                                <td>Rogerio Pontes</td>
                                <td>paypal</td>
                                <td>Total Express</td>
                                <td>R$ 64,83</td>
                                <td>R$ 7,85</td>
                                <td>R$ 78,85</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/91c4d2ee9a6de8f33290479b1a860671"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/91c4d2ee9a6de8f33290479b1a860671"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>30/10/2014 - 20h02</td>
                                <td>0000000066</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>Total Express</td>
                                <td>R$ 88,57</td>
                                <td>R$ 7,98</td>
                                <td>R$ 104,98</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/36500378a634d3191291d78b58398daf"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/36500378a634d3191291d78b58398daf"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>30/10/2014 - 19h46</td>
                                <td>0000000065</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>Total Express</td>
                                <td>R$ 68,48</td>
                                <td>R$ 7,84</td>
                                <td>R$ 82,84</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/a373f320f271fc41219faaf66fd1d6d6"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/a373f320f271fc41219faaf66fd1d6d6"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>30/10/2014 - 19h46</td>
                                <td>0000000064</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>Total Express</td>
                                <td>R$ 68,48</td>
                                <td>R$ 7,84</td>
                                <td>R$ 82,84</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/0d6fd3892ebd4c08dbbbf0047a444e35"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/0d6fd3892ebd4c08dbbbf0047a444e35"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>29/10/2014 - 14h39</td>
                                <td>0000000063</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>Total Express</td>
                                <td>R$ 127,83</td>
                                <td>R$ 8,26</td>
                                <td>R$ 148,26</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/fc1b74430cf806cf3b2f4b12bd9c4cfc"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/fc1b74430cf806cf3b2f4b12bd9c4cfc"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>29/10/2014 - 12h28</td>
                                <td>0000000062</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>Total Express</td>
                                <td>R$ 241,04</td>
                                <td>R$ </td>
                                <td>R$ 264,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/1fa58dd9e3d7f72b89b0ea57564eb22e"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/1fa58dd9e3d7f72b89b0ea57564eb22e"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>28/10/2014 - 17h53</td>
                                <td>0000000061</td>
                                <td>Luiz Gustavo Silva</td>
                                <td>paypal</td>
                                <td>Total Express</td>
                                <td>R$ 23,01</td>
                                <td>R$ 5,41</td>
                                <td>R$ 30,61</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/8d2bd63f3e7327c92f2a13f09f472ba8"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/8d2bd63f3e7327c92f2a13f09f472ba8"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>28/10/2014 - 17h50</td>
                                <td>0000000060</td>
                                <td>Luiz Gustavo Silva</td>
                                <td>paypal</td>
                                <td>Total Express</td>
                                <td>R$ 117,05</td>
                                <td>R$ 8,08</td>
                                <td>R$ 136,28</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/c8594f467c5abd99c67d60861e31342b"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/c8594f467c5abd99c67d60861e31342b"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>27/10/2014 - 18h34</td>
                                <td>0000000059</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>Total Express</td>
                                <td>R$ 29,03</td>
                                <td>R$ 10,51</td>
                                <td>R$ 42,31</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/d70490a5a0d9d65610f77cbe8b43c0ee"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/d70490a5a0d9d65610f77cbe8b43c0ee"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>27/10/2014 - 14h27</td>
                                <td>0000000058</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 73,04</td>
                                <td>R$ 17,60</td>
                                <td>R$ 97,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/f533a844779c04df4aca8b4bd8bbcaee"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/f533a844779c04df4aca8b4bd8bbcaee"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>27/10/2014 - 13h26</td>
                                <td>0000000057</td>
                                <td>Rogerio Pontes</td>
                                <td>paypal</td>
                                <td>Total Express</td>
                                <td>R$ 41,09</td>
                                <td>R$ 7,69</td>
                                <td>R$ 52,69</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/cb4f0d143cc5c975351f4eb0bff7285c"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/cb4f0d143cc5c975351f4eb0bff7285c"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>27/10/2014 - 13h22</td>
                                <td>0000000056</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>Total Express</td>
                                <td>R$ 58,43</td>
                                <td>R$ 7,81</td>
                                <td>R$ 71,81</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/17981286ba274cee9aed8bdfe273f328"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/17981286ba274cee9aed8bdfe273f328"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>27/10/2014 - 13h04</td>
                                <td>0000000055</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>Total Express</td>
                                <td>R$ 41,09</td>
                                <td>R$ 7,69</td>
                                <td>R$ 52,69</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/4f545f96d9435538f45524cf8315ff70"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/4f545f96d9435538f45524cf8315ff70"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>27/10/2014 - 12h58</td>
                                <td>0000000054</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>Total Express</td>
                                <td>R$ 12,05</td>
                                <td>R$ 7,50</td>
                                <td>R$ 20,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/672d41b397a2d98384a593aee1c51da3"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/672d41b397a2d98384a593aee1c51da3"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>27/10/2014 - 12h49</td>
                                <td>0000000053</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>Total Express</td>
                                <td>R$ 49,85</td>
                                <td>R$ 7,75</td>
                                <td>R$ 62,35</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/98faa69d19cee1044e45b376153b9676"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/98faa69d19cee1044e45b376153b9676"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>27/10/2014 - 12h30</td>
                                <td>0000000052</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>Total Express</td>
                                <td>R$ 112,85</td>
                                <td>R$ 8,17</td>
                                <td>R$ 131,77</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/025f10edde59228202c032e89d14ce57"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/025f10edde59228202c032e89d14ce57"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>23/10/2014 - 17h09</td>
                                <td>0000000051</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>total_express</td>
                                <td>R$ 31,23</td>
                                <td>R$ 5,83</td>
                                <td>R$ 40,03</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/a1e39c725086c9c014a91dc9cae8424d"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/a1e39c725086c9c014a91dc9cae8424d"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>23/10/2014 - 16h53</td>
                                <td>0000000050</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>total_express</td>
                                <td>R$ 35,61</td>
                                <td>R$ </td>
                                <td>R$ 39,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/fa6832ccc69a11809fbb182eec02cff9"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/fa6832ccc69a11809fbb182eec02cff9"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>23/10/2014 - 13h38</td>
                                <td>0000000049</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 76,70</td>
                                <td>R$ 17,60</td>
                                <td>R$ 101,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/d0f6152ee5ccae58356fb16ae8adcab7"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/d0f6152ee5ccae58356fb16ae8adcab7"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>23/10/2014 - 12h45</td>
                                <td>0000000048</td>
                                <td>João Santos</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 29,03</td>
                                <td>R$ 13,70</td>
                                <td>R$ 45,50</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/4c72d5fff82e45bbf30c2622c21547c1"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/4c72d5fff82e45bbf30c2622c21547c1"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>22/10/2014 - 19h11</td>
                                <td>0000000047</td>
                                <td>João Santos</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 420,73</td>
                                <td>R$ </td>
                                <td>R$ 460,80</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/eccdbd67e78bcb3546e2d28f08854760"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/eccdbd67e78bcb3546e2d28f08854760"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>22/10/2014 - 17h24</td>
                                <td>0000000046</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 128,19</td>
                                <td>R$ 17,60</td>
                                <td>R$ 158,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/e2483d47f702d906b700c8b075234c6f"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/e2483d47f702d906b700c8b075234c6f"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>22/10/2014 - 14h06</td>
                                <td>0000000045</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 47,11</td>
                                <td>R$ 17,60</td>
                                <td>R$ 69,20</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/c8e6db5ff901fb4ad22d689ecdd36e31"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/c8e6db5ff901fb4ad22d689ecdd36e31"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>22/10/2014 - 12h18</td>
                                <td>0000000044</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>SEDEX</td>
                                <td>R$ 87,65</td>
                                <td>R$ 31,10</td>
                                <td>R$ 127,10</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/ffd3c5b75e4568dc5243ef384f8ca971"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/ffd3c5b75e4568dc5243ef384f8ca971"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>21/10/2014 - 18h23</td>
                                <td>0000000043</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 23,01</td>
                                <td>R$ 17,60</td>
                                <td>R$ 42,80</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/a50283dfea6fb673449225eeff0e7be3"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/a50283dfea6fb673449225eeff0e7be3"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>21/10/2014 - 13h22</td>
                                <td>0000000042</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 48,39</td>
                                <td>R$ 17,60</td>
                                <td>R$ 70,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/a3f6d3239af6aeb436e01a39a8f4932f"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/a3f6d3239af6aeb436e01a39a8f4932f"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>21/10/2014 - 13h21</td>
                                <td>0000000041</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 178,04</td>
                                <td>R$ </td>
                                <td>R$ 195,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/81f8bd9585b399841acdcbc8229af1f9"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/81f8bd9585b399841acdcbc8229af1f9"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>21/10/2014 - 13h20</td>
                                <td>0000000040</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 178,04</td>
                                <td>R$ </td>
                                <td>R$ 195,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/1d5a19571660101da7b64a1b3bf9f480"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/1d5a19571660101da7b64a1b3bf9f480"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>21/10/2014 - 13h20</td>
                                <td>0000000039</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 178,04</td>
                                <td>R$ </td>
                                <td>R$ 195,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/7a376552edb71a2b893ebd2d06c870b1"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/7a376552edb71a2b893ebd2d06c870b1"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>21/10/2014 - 13h20</td>
                                <td>0000000038</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 178,04</td>
                                <td>R$ </td>
                                <td>R$ 195,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/61ee203a61077a788291a7f443c6839c"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/61ee203a61077a788291a7f443c6839c"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>21/10/2014 - 13h20</td>
                                <td>0000000037</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 178,04</td>
                                <td>R$ </td>
                                <td>R$ 195,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/8e195e85bee1725ecee289acc62784d6"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/8e195e85bee1725ecee289acc62784d6"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>21/10/2014 - 13h18</td>
                                <td>0000000036</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 178,04</td>
                                <td>R$ </td>
                                <td>R$ 195,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/a11fff8911ee99ddaa152a1b199bf88e"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/a11fff8911ee99ddaa152a1b199bf88e"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>21/10/2014 - 13h14</td>
                                <td>0000000035</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 47,66</td>
                                <td>R$ 17,60</td>
                                <td>R$ 69,80</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/fd58fa42943e2db705909e9d93d5a814"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/fd58fa42943e2db705909e9d93d5a814"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>20/10/2014 - 20h07</td>
                                <td>0000000034</td>
                                <td>Rogerio Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 160,51</td>
                                <td>R$ </td>
                                <td>R$ 175,80</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/4d0baa09b984e1ddcc1a51fe111b6f9f"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/4d0baa09b984e1ddcc1a51fe111b6f9f"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>20/10/2014 - 19h48</td>
                                <td>0000000033</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 29,03</td>
                                <td>R$ 17,60</td>
                                <td>R$ 49,40</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/58943878b997aa0937f8bca2153562f2"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/58943878b997aa0937f8bca2153562f2"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>20/10/2014 - 19h44</td>
                                <td>0000000032</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 1,00</td>
                                <td>R$ 17,60</td>
                                <td>R$ 18,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/f0fda17bd113cd6cb0b9947ecc5cc321"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/f0fda17bd113cd6cb0b9947ecc5cc321"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>20/10/2014 - 17h02</td>
                                <td>0000000031</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 83,27</td>
                                <td>R$ 17,60</td>
                                <td>R$ 108,80</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/aea27882938312e0d5fe3fe4a526f59d"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/aea27882938312e0d5fe3fe4a526f59d"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>20/10/2014 - 16h59</td>
                                <td>0000000030</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 90,39</td>
                                <td>R$ 17,60</td>
                                <td>R$ 116,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/8d7b2d68f7fd32e5a1dcc7a85968424e"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/8d7b2d68f7fd32e5a1dcc7a85968424e"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>17/10/2014 - 18h52</td>
                                <td>0000000029</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 52,04</td>
                                <td>R$ 17,60</td>
                                <td>R$ 74,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/85f9c25e52fac4948d3e423e7c7f1f21"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/85f9c25e52fac4948d3e423e7c7f1f21"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>17/10/2014 - 15h43</td>
                                <td>0000000028</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 235,57</td>
                                <td>R$ </td>
                                <td>R$ 258,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/6605f8a41e251fb598e4aab6ffe85fa9"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/6605f8a41e251fb598e4aab6ffe85fa9"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>15/10/2014 - 17h38</td>
                                <td>0000000027</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 48,39</td>
                                <td>R$ 13,70</td>
                                <td>R$ 66,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/homolog/pt/pedidos/status/1/87ed0b44ecc4c3f37ff36173f566a948"><span class="ico-default-star " data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/87ed0b44ecc4c3f37ff36173f566a948"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>10/10/2014 - 20h56</td>
                                <td>0000000026</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 63,27</td>
                                <td>R$ 13,70</td>
                                <td>R$ 83,00</td>
                                                                                                                                           
                                <td>
                                    <a href="/homolog/pt/pedidos/status/1/a3f1166e4fb30d0bdaa79c3efe6aa40c"><span class="ico-default-star " data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/a3f1166e4fb30d0bdaa79c3efe6aa40c"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>10/10/2014 - 20h56</td>
                                <td>0000000025</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 82,17</td>
                                <td>R$ 13,70</td>
                                <td>R$ 103,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/homolog/pt/pedidos/status/1/7b71e0be5112c65466367e886841cbd7"><span class="ico-default-star " data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/7b71e0be5112c65466367e886841cbd7"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>10/10/2014 - 20h52</td>
                                <td>0000000024</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 13,70</td>
                                <td>R$ 13,70</td>
                                <td>R$ 28,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/77a5601a010da854314b4d225e8d8654"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/77a5601a010da854314b4d225e8d8654"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>10/10/2014 - 20h50</td>
                                <td>0000000023</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>cielo</td>
                                <td>SEDEX 10</td>
                                <td>R$ 31,32</td>
                                <td>R$ 22,60</td>
                                <td>R$ 56,90</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/091904ea9d6647cbac2d09553be6985a"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/091904ea9d6647cbac2d09553be6985a"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>10/10/2014 - 20h48</td>
                                <td>0000000022</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>boleto</td>
                                <td>SEDEX</td>
                                <td>R$ 26,48</td>
                                <td>R$ 14,00</td>
                                <td>R$ 43,00</td>
                                                                                                                                           
                                <td>
                                    <a href="/homolog/pt/pedidos/status/1/8fd2f7e6282e706e8fe73b4416db4876"><span class="ico-default-star " data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/8fd2f7e6282e706e8fe73b4416db4876"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>10/10/2014 - 18h08</td>
                                <td>0000000021</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 44,10</td>
                                <td>R$ 17,60</td>
                                <td>R$ 65,90</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/73907d7ec4a4c7e6886644b81ba57968"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/73907d7ec4a4c7e6886644b81ba57968"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>10/10/2014 - 15h39</td>
                                <td>0000000020</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 173,48</td>
                                <td>R$ </td>
                                <td>R$ 190,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/07adb31f2fd3903dd4642170c6f2cb0c"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/07adb31f2fd3903dd4642170c6f2cb0c"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>09/10/2014 - 22h48</td>
                                <td>0000000019</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 23,74</td>
                                <td>R$ 17,60</td>
                                <td>R$ 43,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/f43fb55869abda8453498b5d65eb98c0"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/f43fb55869abda8453498b5d65eb98c0"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>09/10/2014 - 22h48</td>
                                <td>0000000018</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>cielo</td>
                                <td>PAC</td>
                                <td>R$ 23,74</td>
                                <td>R$ 17,60</td>
                                <td>R$ 43,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/5cb79c73570a9cf494537e0dc3d1a2fe"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/5cb79c73570a9cf494537e0dc3d1a2fe"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>09/10/2014 - 22h43</td>
                                <td>0000000017</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 72,13</td>
                                <td>R$ 17,60</td>
                                <td>R$ 96,60</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/0d70d0f2ecb8b73cb466c67d837273ea"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/0d70d0f2ecb8b73cb466c67d837273ea"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>09/10/2014 - 22h42</td>
                                <td>0000000016</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td></td>
                                <td>PAC</td>
                                <td>R$ 28,49</td>
                                <td>R$ 17,60</td>
                                <td>R$ 48,80</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/980768efc9cbffb1fc47cae576969c88"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/980768efc9cbffb1fc47cae576969c88"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>09/10/2014 - 22h40</td>
                                <td>0000000015</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td></td>
                                <td>PAC</td>
                                <td>R$ 391,51</td>
                                <td>R$ </td>
                                <td>R$ 428,80</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/e923b96e9ef6cd35c2d69c979e4b2463"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/e923b96e9ef6cd35c2d69c979e4b2463"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>08/10/2014 - 20h20</td>
                                <td>0000000014</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>moip</td>
                                <td>SEDEX 10</td>
                                <td>R$ 111,67</td>
                                <td>R$ 22,60</td>
                                <td>R$ 144,90</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/e0c9f650432b2628029894d4a09a2f68"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/e0c9f650432b2628029894d4a09a2f68"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>08/10/2014 - 14h39</td>
                                <td>0000000013</td>
                                <td>João Santos</td>
                                <td>moip</td>
                                <td>PAC</td>
                                <td>R$ 631,83</td>
                                <td>R$ </td>
                                <td>R$ 692,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/63effd702bad79daa033bce74db72547"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/63effd702bad79daa033bce74db72547"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>08/10/2014 - 14h30</td>
                                <td>0000000012</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 38,35</td>
                                <td>R$ 13,70</td>
                                <td>R$ 55,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/a64c5b7f65b50e551c081c14c20deb86"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/a64c5b7f65b50e551c081c14c20deb86"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>08/10/2014 - 14h28</td>
                                <td>0000000011</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 53,87</td>
                                <td>R$ 13,70</td>
                                <td>R$ 72,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/7be98316f6b931afc068e19af73ef34d"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/7be98316f6b931afc068e19af73ef34d"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>08/10/2014 - 14h21</td>
                                <td>0000000010</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 99,52</td>
                                <td>R$ 13,70</td>
                                <td>R$ 122,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/11415f1e86fdf91e5e07afbebcfa69f1"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/11415f1e86fdf91e5e07afbebcfa69f1"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>08/10/2014 - 14h13</td>
                                <td>0000000009</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 54,78</td>
                                <td>R$ 13,70</td>
                                <td>R$ 73,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/7495a6760f3e22444535f16f98f29c6f"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/7495a6760f3e22444535f16f98f29c6f"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>08/10/2014 - 14h10</td>
                                <td>0000000008</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 100,80</td>
                                <td>R$ 13,70</td>
                                <td>R$ 124,10</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/a3884f66cdbae9c8aa7d332479031ec1"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/a3884f66cdbae9c8aa7d332479031ec1"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>08/10/2014 - 14h06</td>
                                <td>0000000007</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 54,78</td>
                                <td>R$ 13,70</td>
                                <td>R$ 73,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/7fd1383e599d5f69214cab9dc91510b3"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/7fd1383e599d5f69214cab9dc91510b3"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>07/10/2014 - 20h14</td>
                                <td>0000000006</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>moip</td>
                                <td>PAC</td>
                                <td>R$ 54,78</td>
                                <td>R$ 13,70</td>
                                <td>R$ 73,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/97fdf459c0ea5a3e3eaf8887256d4f6f"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/97fdf459c0ea5a3e3eaf8887256d4f6f"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>07/10/2014 - 20h09</td>
                                <td>0000000005</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 236,48</td>
                                <td>R$ </td>
                                <td>R$ 259,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/e77a11479d2acee0994eabbc499b16fb"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/e77a11479d2acee0994eabbc499b16fb"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>07/10/2014 - 19h44</td>
                                <td>0000000004</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 82,17</td>
                                <td>R$ 13,70</td>
                                <td>R$ 103,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/678d8b6f1d5411bc1bb7c1defcf04bdb"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/678d8b6f1d5411bc1bb7c1defcf04bdb"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>07/10/2014 - 19h40</td>
                                <td>0000000003</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 164,35</td>
                                <td>R$ </td>
                                <td>R$ 180,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/2275267c3d72449e89f6944ca4620776"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/2275267c3d72449e89f6944ca4620776"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>07/10/2014 - 19h25</td>
                                <td>0000000002</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 164,35</td>
                                <td>R$ </td>
                                <td>R$ 180,00</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/81df55bc8c7b7454f40a10accb436996"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/81df55bc8c7b7454f40a10accb436996"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>07/10/2014 - 19h19</td>
                                <td>0000000001</td>
                                <td>Rogerio de Almeida Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 99,52</td>
                                <td>R$ 13,70</td>
                                <td>R$ 122,70</td>
                                                                                                                                            
                                <td>
                                    <a href="/homolog/pt/pedidos/status/0/abf1c16e6985f2a16f2bf40eff054e80"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/homolog/pt/pedidos/view/codpedido/abf1c16e6985f2a16f2bf40eff054e80"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
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

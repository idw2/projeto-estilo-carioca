<?php /*%%SmartyHeaderCode:82409956454b836bd99ca26-43223734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46d9b0c8e71d261f63c88896559a3c84c4def03d' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/contas_lista.tpl',
      1 => 1417534234,
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
    '977e15250893ce490435a9a602a9dd3012dc495d' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/search.tpl',
      1 => 1417410186,
      2 => 'file',
    ),
    'b5516564ae08b3778b5b55911ea33638d41d12c5' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/footer.tpl',
      1 => 1417410152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82409956454b836bd99ca26-43223734',
  'variables' => 
  array (
    'web_files' => 0,
    'contas' => 0,
    'conta' => 0,
    'i' => 0,
    'language' => 0,
    'stt' => 0,
    'eye' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b836bdebd3a6_61926730',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b836bdebd3a6_61926730')) {function content_54b836bdebd3a6_61926730($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Lista de Clientes</title>

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
            <li  class="" ><a href="/en/admin/welcome">Home</a></li>
            
                           
                <div class="panel-heading"><h4>Produtos</h4></div>
                <li  class="" ><a href="/en/produtos/produtos-lista">Lista</a></li> 
                                <li  class="" ><a href="/en/produtos/estoque">Estoque</a></li> 
                <li  class=""  style="background: #fff;"><a href="/en/produtos/estoque-baixo" style="position: relative; color: #333">Estoque Baixo  <span style='background: #5F8DE2; display: inline-block; padding: 3px 10px; position: absolute; color: #fff; font-weight: bold; font-size: 19px; bottom: 3px; right: 7px;'>268</span> </a></li> 
                                <li  class=""  ><a href="/en/produtos/avise-me" style="position: relative; ">Avise-me quando chegar </a></li>  
                <li  class="" ><a href="/en/produtos/mais-vendidos-site">Mais Vendidos</a></li> 
                <div class="panel-heading"><h4>Contas</h4></div>
                <li  class="active" ><a href="/en/conta/lista">Clientes</a></li>
                <li  class=""  ><a href="/en/conta/aniversariantes" style="position: relative; ">Aniversariantes </a></li>
                
                
                <div class="panel-heading"><h4>Pagamentos</h4></div>
                <li  class="" ><a href="/en/pedidos/pedidos-lista">Lista</a></li>
                <li  class="" ><a href="/en/pedidos/exportar">Exportar</a></li>
               
                <div class="panel-heading"><h4>Newsletter</h4></div>
                <li  class="" ><a href="/en/informacoes/newsletter-lista">Lista</a></li>
                
                                <div class="panel-heading"><h4>Nota Fiscal</h4></div>
                <li  class=""  ><a href="/en/nota-fiscal/exportar" style="position: relative; ">Exportar </a></li>
                                <div class="panel-heading"><h4>Páginas</h4></div>
                <li  class="" ><a href="/en/html/quem_somos">Quem somos</a></li>
                <li  class="" ><a href="/en/html/promocoes">Promoções</a></li>
                <li  class="" ><a href="/en/html/programa-vantagens">Programa de Vantagens</a></li>              
                <li  class="" ><a href="/en/html/programa-fidelidade">Programa de Fidelidade</a></li>              
                <li  class="" ><a href="/en/html/politica-privacidade">Política de Privacidade</a></li>              
                <li  class="" ><a href="/en/html/termos-servicos">Termos de serviço</a></li>              
                <li  class="" ><a href="/en/html/forma-pagamento">Forma de Pagamento</a></li>              
                <li  class="" ><a href="/en/html/entrega-devolucao">Entrega e Devolução</a></li>              
                <li  class="" ><a href="/en/html/procon-rj">PROCON-RJ</a></li>              
                <li  class="" ><a href="/en/html/perguntas-frequentes">Perguntas Frequentes</a></li>              
                <li  class="" ><a href="/en/html/cuidados-produtos">Cuidado com os Produtos</a></li>              
            
                        
            <div class="panel-heading"><h4>Serviços</h4></div>
            <li  class="" ><a href="/en/admin/alterar-senha">Alterar senha</a></li>              
            <li  class="" ><a href="/en/admin/logout">Sair</a></li>              
            
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
        <input type="text" class="search-input form-control" name="search" value="" placeholder="Pesquisa"/>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>



        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <h2><span class="label label-default">Lista de Clientes</span></h2>
            <br/>

            <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span>

            <div class="panel-default">
       
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                    <thead>
                        <th>Data</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Nascimento</th>
                        <th>Sexo</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                        <th>Ações</th>
                    </thead>
                    
                     
                      
                                                   <tr >
                                <td>14/01/2015 - 10h59</td>
                                <td>Anna Beatriz Torres</td>
                                <td>anninha_beatriz@hotmail.com</td>
                                <td>01/09/1989</td>
                                <td>F</td>
                                <td>(21)25647267 </td>
                                <td>066.465.884-90</td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/d061b67b12c03129a9dfab14febdad3d"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/d061b67b12c03129a9dfab14febdad3d"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                </td>
                            </tr>     
                                              
                        
                      
                                                   <tr class="myDragClass">
                                <td>06/01/2015 - 14h41</td>
                                <td>Claudia Faria</td>
                                <td>claudiaqfaria@gmail.com</td>
                                <td>06/06/1973</td>
                                <td>F</td>
                                <td>(21)9928039549 </td>
                                <td>018.738.157-78</td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/9b157d49fbd5093cfa4004aeac995c8f"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/9b157d49fbd5093cfa4004aeac995c8f"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                </td>
                            </tr>     
                                              
                        
                      
                                                   <tr >
                                <td>23/12/2014 - 11h06</td>
                                <td>Ana Laura de Barros Marendino</td>
                                <td>marendinoa@gmail.com</td>
                                <td>01/07/1988</td>
                                <td>F</td>
                                <td>(32)88556888 </td>
                                <td>013.894.556-02</td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/5e376f0c392a796aef5c2603129dda2c"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/5e376f0c392a796aef5c2603129dda2c"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                </td>
                            </tr>     
                                              
                        
                      
                                                   <tr class="myDragClass">
                                <td>10/12/2014 - 16h10</td>
                                <td>Thais Alves</td>
                                <td>thais@mariadebarro.com.br</td>
                                <td>23/11/1988</td>
                                <td>F</td>
                                <td>(21)964327132 </td>
                                <td>105.854.387-30</td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/8e46e6d37f10b54930a56a70a6bf7b9f"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/8e46e6d37f10b54930a56a70a6bf7b9f"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                </td>
                            </tr>     
                                              
                        
                      
                                                   <tr >
                                <td>10/12/2014 - 11h37</td>
                                <td>Rogerio Pontes</td>
                                <td>rogerio@designlab.com.br</td>
                                <td>01/01/2000</td>
                                <td>M</td>
                                <td>(61)12313333 </td>
                                <td>338.117.768-00</td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/a1556fee63cd9251d6c66b01206bbdbd"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/a1556fee63cd9251d6c66b01206bbdbd"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                </td>
                            </tr>     
                                              
                        
                      
                                                   <tr class="myDragClass">
                                <td>09/12/2014 - 16h04</td>
                                <td>Fabiano Rangel</td>
                                <td>fabianof.rangel@gmail.com</td>
                                <td>11/12/1986</td>
                                <td>M</td>
                                <td>(21)974733663 </td>
                                <td>125.700.887-06</td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/fcd3dd8e984b959fb8a733316380709d"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/fcd3dd8e984b959fb8a733316380709d"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                </td>
                            </tr>     
                                              
                        
                      
                                                   <tr >
                                <td>09/12/2014 - 15h23</td>
                                <td>Patrícia Nakatani</td>
                                <td>patty_fena@hotmail.com</td>
                                <td>28/11/1986</td>
                                <td>M</td>
                                <td>(21)971566728 </td>
                                <td>118.453.377-60</td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/ebb646595225b4067c7533709bf7e6b8"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/ebb646595225b4067c7533709bf7e6b8"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                </td>
                            </tr>     
                                              
                        
                      
                                                   <tr class="myDragClass">
                                <td>06/12/2014 - 21h18</td>
                                <td>Monica Antonin Soares da Silveira Lobo</td>
                                <td>monicaantonini@ig.com.br</td>
                                <td>02/02/1966</td>
                                <td>M</td>
                                <td>(21)995156365 </td>
                                <td>004.889.467-27</td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/3f332838b479b7224b39427883ffeee8"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/3f332838b479b7224b39427883ffeee8"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                </td>
                            </tr>     
                                              
                        
                      
                                                   <tr >
                                <td>27/11/2014 - 22h11</td>
                                <td>Sonia Regina de Oliveira Gassmann</td>
                                <td>sonia@parceriaconsult.com.br</td>
                                <td>02/12/1951</td>
                                <td>F</td>
                                <td>(21)998017747 </td>
                                <td>367.037.027-72</td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/fd16c64afa3ebeefea4cd36932a3d4fe"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/fd16c64afa3ebeefea4cd36932a3d4fe"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                </td>
                            </tr>     
                                              
                        
                      
                                                   <tr class="myDragClass">
                                <td>27/11/2014 - 07h20</td>
                                <td>Mariana Coutinho Pereira</td>
                                <td>marianacoutinho111@gmail.com</td>
                                <td>02/12/1989</td>
                                <td>F</td>
                                <td>(21)985704394 </td>
                                <td>127.086.767-92</td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/72d980644a3e8e7fe1e38ed366760e28"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/72d980644a3e8e7fe1e38ed366760e28"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                </td>
                            </tr>     
                                              
                        
                      
                                                   <tr >
                                <td>20/11/2014 - 22h34</td>
                                <td>Viviane Leão</td>
                                <td>vivianeleon.90@gmail.com</td>
                                <td>02/12/1983</td>
                                <td>F</td>
                                <td>(21)138266688 </td>
                                <td>133.329.547-31</td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/f9729178ba1d12631fa5f110506c505f"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/f9729178ba1d12631fa5f110506c505f"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                </td>
                            </tr>     
                                              
                        
                      
                                                   <tr class="myDragClass">
                                <td>10/11/2014 - 19h59</td>
                                <td>Luiz Gustavo Silva</td>
                                <td>gus@designlab.com.br</td>
                                <td>15/11/1979</td>
                                <td>M</td>
                                <td>(21)981215253 </td>
                                <td>082.628.497-36</td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/1abf748c1e730477c040784dd77923cb"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/1abf748c1e730477c040784dd77923cb"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                </td>
                            </tr>     
                                              
                        
                      
                                                   <tr >
                                <td>31/10/2014 - 16h25</td>
                                <td>Ana Maria Santos da Silva</td>
                                <td>anamaria.santos.silva@gmail.com</td>
                                <td>24/07/1947</td>
                                <td>F</td>
                                <td>(21)24384845 </td>
                                <td>024.874.587-55</td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/9c8a1e52a4541e4f9dcf504953eb482e"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/9c8a1e52a4541e4f9dcf504953eb482e"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                </td>
                            </tr>     
                                              
                        
                      
                                                   <tr class="myDragClass">
                                <td>31/10/2014 - 14h09</td>
                                <td>João Ahmad</td>
                                <td>joao@designlab.com.br</td>
                                <td>02/12/2000</td>
                                <td>M</td>
                                <td>(12)312312313 <br/>Ramal: 2131</td>
                                <td>330.402.538-32</td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/1c2017b2159b96515106324c548d2282"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/1c2017b2159b96515106324c548d2282"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                </td>
                            </tr>     
                                              
                        
                      
                                                   <tr >
                                <td>23/09/2014 - 15h30</td>
                                <td>Thais Alves</td>
                                <td>tatha.ap@gmail.com</td>
                                <td>02/12/2000</td>
                                <td>F</td>
                                <td>(21)456890987 <br/>Ramal: maria@ma</td>
                                <td></td>
                                                                                                                                          
                                <td>
                                    <a href="/en/conta/status/0/8d35a46ee671afe730d7b7df5984a4b8"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/en/conta/editar/8d35a46ee671afe730d7b7df5984a4b8"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
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

<?php /*%%SmartyHeaderCode:175860739954b52020c3eee6-43218132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '935a43825e10e44b9eb68bc37b4360bcad94b76f' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/mais_vendidos_site.tpl',
      1 => 1420463609,
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
  'nocache_hash' => '175860739954b52020c3eee6-43218132',
  'variables' => 
  array (
    'language' => 0,
    'ERRO_NAO_EXISTE_PRODUTOS' => 0,
    'meus_produtos' => 0,
    'produto' => 0,
    'teste' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b52021711218_18740841',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b52021711218_18740841')) {function content_54b52021711218_18740841($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Lista de Produtos mais Vendidos</title>

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
                <li  class=""  style="background: #fff;"><a href="/en/produtos/estoque-baixo" style="position: relative; color: #333">Estoque Baixo  <span style='background: #5F8DE2; display: inline-block; padding: 3px 10px; position: absolute; color: #fff; font-weight: bold; font-size: 19px; bottom: 3px; right: 7px;'>269</span> </a></li> 
                                <li  class=""  ><a href="/en/produtos/avise-me" style="position: relative; ">Avise-me quando chegar </a></li>  
                <li  class="active" ><a href="/en/produtos/mais-vendidos-site">Mais Vendidos</a></li> 
                <div class="panel-heading"><h4>Contas</h4></div>
                <li  class="" ><a href="/en/conta/lista">Clientes</a></li>
                <li  class=""  ><a href="/en/conta/aniversariantes" style="position: relative; ">Aniversariantes </a></li>
                
                
                <div class="panel-heading"><h4>Pagamentos</h4></div>
                <li  class="" ><a href="/en/pedidos/pedidos-lista">Lista</a></li>
                <li  class="" ><a href="/en/pedidos/exportar">Exportar</a></li>
               
                <div class="panel-heading"><h4>Newsletter</h4></div>
                <li  class="" ><a href="/en/informacoes/newsletter-lista">Lista</a></li>
                
                                <div class="panel-heading"><h4>Nota Fiscal</h4></div>
                <li  class=""  style="background: #fff;"><a href="/en/nota-fiscal/exportar" style="position: relative; color: #333">Exportar  <span style='background: #5F8DE2; display: inline-block; padding: 3px 10px; position: absolute; color: #fff; font-weight: bold; font-size: 19px; bottom: 4px; right: 7px;'>1</span> </a></li>
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

            <h2><span class="label label-default">Lista de Produtos mais Vendidos Site</span></h2>
            <br/>

            <br/>
            <a href="/en/produtos/mais-vendidos-site-xls" class="btn btn-default navbar-btn" target="_blank"><i class="fa fa-exchange"></i> Exportar</a>    
    
            <div class="panel-default showEstoque">

                <table class='table'>
                    <thead>
                    <th>#</th>
                    <th style="width: 10%;">Quantidade Vendida</th>
                    <th>Referência</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th style="width: 10%;">Peso/Kg.</th>
                    <th style="width: 10%;">Preço<br/>Final do Produto<br/>por Unidade</th>
                    <th style="width: 10%;">Preço<br/>Unitário de Compra<br/>do Produto</th>
                    <th style="width: 10%;">Total da Compra</th>
                        
                        
                        
                    </thead>

                    
                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-E5ECB57D9FF97BD557EFBEE3A0DC49E0 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('E5ECB57D9FF97BD557EFBEE3A0DC49E0', 'A-00072')">
                                                                                    <img src="/web-files/upload/thumbs/50701D413B2FE8DF7EC7962A383D4194/5CE0BC6CE4838B1240F2B34A3318BB00.jpg" border="0" alt="Anel fumê de falange coroa" title="Anel fumê de falange coroa">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>2</td>
                                <td>A-00072</td>
                                <td>Anel fumê de falange coroa</td>
                                <td>Anéis</td>
                                <td>0.200</td>
                                <td>32,00</td>
                                <td>14,50</td>
                                <td>29,00</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-78EF1120895BCA2C5CD67F0C8DA84CC0 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('78EF1120895BCA2C5CD67F0C8DA84CC0', 'CJ-0001')">
                                                                                    <img src="/web-files/upload/thumbs/DFF9F637667685CEDE236292F603C150/3AD1FBE775BCFFED9C802B563740AC33.jpg" border="0" alt="Conjunto dourado chanel cordão/brinco " title="Conjunto dourado chanel cordão/brinco ">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>2</td>
                                <td>CJ-0001</td>
                                <td>Conjunto dourado chanel cordão/brinco </td>
                                <td>Conjuntos</td>
                                <td>0.400</td>
                                <td>174,00</td>
                                <td>80,00</td>
                                <td>80,00</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-26BFF624A65DE603393169FC9DFFC593 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('26BFF624A65DE603393169FC9DFFC593', 'B-00069')">
                                                                                    <img src="/web-files/upload/thumbs/D51F65C1618DAA1D13858220FC249D3C/FD9CF683DDC40C4FDE34AA3547FFE0EE.jpg" border="0" alt="Brinco dourado com base e pendente oval " title="Brinco dourado com base e pendente oval ">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00069</td>
                                <td>Brinco dourado com base e pendente oval </td>
                                <td>Brinco</td>
                                <td>0.090</td>
                                <td>53,00</td>
                                <td>24,50</td>
                                <td></td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-0A31103E11592CB89490EFBD05DB5B52 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('0A31103E11592CB89490EFBD05DB5B52', 'B-00010')">
                                                                                    <img src="/web-files/upload/thumbs/31E834D81E62F94E74AC27B61BEA59D3/F7067761A149DAFC54681558984DA3D5.jpg" border="0" alt="Brinco dourado com quadradinhos" title="Brinco dourado com quadradinhos">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00010</td>
                                <td>Brinco dourado com quadradinhos</td>
                                <td>Brinco</td>
                                <td>0.100</td>
                                <td>45,00</td>
                                <td>34,50</td>
                                <td></td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-CCBE9335A1DA91994715C66BE4E22453 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('CCBE9335A1DA91994715C66BE4E22453', 'A-00007')">
                                                                                    <img src="/web-files/upload/thumbs/DA9EF7E00A717B18828EEBDEF052E068/76AD6A79CC0A3CA1A3A55C84BCB0DD36.jpg" border="0" alt="Anel coração regulável" title="Anel coração regulável">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>A-00007</td>
                                <td>Anel coração regulável</td>
                                <td>Anéis</td>
                                <td>0.300</td>
                                <td>58,00</td>
                                <td>35,00</td>
                                <td>35,00</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-E65F0496F1CF81D6F3598BEF979D8A42 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('E65F0496F1CF81D6F3598BEF979D8A42', 'B-00021')">
                                                                                    <img src="/web-files/upload/thumbs/066247DB8100C84768FD5C088F1A4990/32A16AC8704A167DB0AB4D8008D7CF4A.jpg" border="0" alt="Brinco Dourado Vazado Indiano" title="Brinco Dourado Vazado Indiano">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00021</td>
                                <td>Brinco Dourado Vazado Indiano</td>
                                <td>Brinco</td>
                                <td>0.200</td>
                                <td>58,00</td>
                                <td>44,50</td>
                                <td></td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-9D8F7BF16A91344E3463D4E65075F730 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('9D8F7BF16A91344E3463D4E65075F730', 'B-00085')">
                                                                                    <img src="/web-files/upload/thumbs/38D99554A45DA64B46CA48CC7C678C5A/8F7221FFEE44AD288185D45BDD86F31F.jpg" border="0" alt="Brinco fumê base gota e pendente gota" title="Brinco fumê base gota e pendente gota">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00085</td>
                                <td>Brinco fumê base gota e pendente gota</td>
                                <td>Brinco</td>
                                <td>0.018</td>
                                <td>100,00</td>
                                <td>44,50</td>
                                <td>44,50</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-41E1AEDABA20BD7D46EC24CAAC22E285 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('41E1AEDABA20BD7D46EC24CAAC22E285', 'P-00009')">
                                                                                    <img src="/web-files/upload/thumbs/0614377D5923BCF45E8DD910CEA1B4DD/D101D799B95F92AC1AA18950C7DDDA24.jpg" border="0" alt="Pulseira dourada com detalhe de trevo" title="Pulseira dourada com detalhe de trevo">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>P-00009</td>
                                <td>Pulseira dourada com detalhe de trevo</td>
                                <td>Pulseiras</td>
                                <td>0.300</td>
                                <td>32,00</td>
                                <td>24,00</td>
                                <td></td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-2933D10BC715C8B2D53C10FB297F57F8 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('2933D10BC715C8B2D53C10FB297F57F8', 'B-00047')">
                                                                                    <img src="/web-files/upload/thumbs/3A20F5005DFE642CA0B674A2537A6FE4/22831AE6FEEF899D83C61B8AFB552614.jpg" border="0" alt="Brinco coração invertido dourado indiano" title="Brinco coração invertido dourado indiano">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00047</td>
                                <td>Brinco coração invertido dourado indiano</td>
                                <td>Brinco</td>
                                <td>0.200</td>
                                <td>39,00</td>
                                <td>30,00</td>
                                <td>30,00</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-7EF5882323DF77B6A5504D02285547E1 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('7EF5882323DF77B6A5504D02285547E1', 'B-00073')">
                                                                                    <img src="/web-files/upload/thumbs/739A480594F25066BE9F60AE5B447C63/7EC6A70D3514FAFA8482D301EC27E558.jpg" border="0" alt="Brinco dourado com pendente gota " title="Brinco dourado com pendente gota ">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00073</td>
                                <td>Brinco dourado com pendente gota </td>
                                <td>Brinco</td>
                                <td>0.180</td>
                                <td>100,00</td>
                                <td>44,50</td>
                                <td>44,50</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-95AD0FC2E8C176E180846768F579F4B3 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('95AD0FC2E8C176E180846768F579F4B3', 'A-00065')">
                                                                                    <img src="/web-files/upload/thumbs/AB6A3994C6832C22B087587136317B22/234B72F5AD996AF84E0E06D125977259.jpg" border="0" alt="Anel dourado gota com cristal roxo" title="Anel dourado gota com cristal roxo">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>A-00065</td>
                                <td>Anel dourado gota com cristal roxo</td>
                                <td>Anéis</td>
                                <td>0.150</td>
                                <td>118,00</td>
                                <td>54,50</td>
                                <td>109,00</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-9FF3CE8CE43FA57BA3AFF2E0D79F1D32 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('9FF3CE8CE43FA57BA3AFF2E0D79F1D32', 'B-00075')">
                                                                                    <img src="/web-files/upload/thumbs/CC71572E68DAD16800D610D9EC1595A5/E06E36B8C0478268CF8D39EA6B8E3725.jpg" border="0" alt="Brinco dourado com cristal losango " title="Brinco dourado com cristal losango ">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00075</td>
                                <td>Brinco dourado com cristal losango </td>
                                <td>Brinco</td>
                                <td>0.015</td>
                                <td>110,00</td>
                                <td>49,50</td>
                                <td>49,50</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-8B791D07B2084DA4AB31069C67CB203C no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('8B791D07B2084DA4AB31069C67CB203C', 'B-00035')">
                                                                                    <img src="/web-files/upload/thumbs/ABB8E6950DFC384C35BAA75E237771E3/92A27CBFB03C5C2D720949231B303889.jpg" border="0" alt="Brinco dourado com base gota de cristal " title="Brinco dourado com base gota de cristal ">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00035</td>
                                <td>Brinco dourado com base gota de cristal </td>
                                <td>Brinco</td>
                                <td>0.300</td>
                                <td>98,00</td>
                                <td>74,50</td>
                                <td></td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-E1B35FE116D95094C29DBE16746E4F0E no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('E1B35FE116D95094C29DBE16746E4F0E', 'B-00084')">
                                                                                    <img src="/web-files/upload/thumbs/FC47E33F6CA9A984F03DF0A2CCFCFC05/94D23D8F232E173585D87CF9C0AB18F4.jpg" border="0" alt="Brinco dourado com pendente de gotas" title="Brinco dourado com pendente de gotas">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00084</td>
                                <td>Brinco dourado com pendente de gotas</td>
                                <td>Brinco</td>
                                <td>0.017</td>
                                <td>110,00</td>
                                <td>49,50</td>
                                <td></td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-4EACF8823C360AA26261985F58BFD1DD no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('4EACF8823C360AA26261985F58BFD1DD', 'P-00011')">
                                                                                    <img src="/web-files/upload/thumbs/24982BC29E24C535162F604659E3871F/B32B1CCE0A2AE410DFC450E22546B7FA.jpg" border="0" alt="Pulseira de Couro com detalhes" title="Pulseira de Couro com detalhes">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>P-00011</td>
                                <td>Pulseira de Couro com detalhes</td>
                                <td>Pulseiras</td>
                                <td>0.200</td>
                                <td>18,00</td>
                                <td>14,00</td>
                                <td></td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-0398A2A8F31A6607274D4F85656135A5 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('0398A2A8F31A6607274D4F85656135A5', 'B-00048')">
                                                                                    <img src="/web-files/upload/thumbs/A6009BA52EA32EE612598CF6861AED07/E0FC64EEE1FF3D487A41D8099109E67F.jpg" border="0" alt="Brinco pequeno branco com duas pérolas" title="Brinco pequeno branco com duas pérolas">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00048</td>
                                <td>Brinco pequeno branco com duas pérolas</td>
                                <td>Brinco</td>
                                <td>0.100</td>
                                <td>36,00</td>
                                <td>27,45</td>
                                <td>27,45</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-CA1DF5846C0B4C658F7416BDDB27A709 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('CA1DF5846C0B4C658F7416BDDB27A709', 'A-00042')">
                                                                                    <img src="/web-files/upload/thumbs/DFEA4B726A0CBA373C988CEE1857F7E5/61ED6F9DB6EAD2AF01BC943DC7406B28.jpg" border="0" alt="Anel dourado com círculos de zircônia " title="Anel dourado com círculos de zircônia ">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>A-00042</td>
                                <td>Anel dourado com círculos de zircônia </td>
                                <td>Anéis</td>
                                <td>0.600</td>
                                <td>46,00</td>
                                <td>35,90</td>
                                <td>-35,90</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-B63F87255FD9E521E18E0DEC9E3DC948 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('B63F87255FD9E521E18E0DEC9E3DC948', 'B-00060')">
                                                                                    <img src="/web-files/upload/thumbs/AC4A52C318918587D62464F1397A1F42/4FA837665CEE3E8279392D42B11C70D9.jpg" border="0" alt="Brinco prata de argola pequeno " title="Brinco prata de argola pequeno ">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00060</td>
                                <td>Brinco prata de argola pequeno </td>
                                <td>Brinco</td>
                                <td>0.200</td>
                                <td>52,00</td>
                                <td>40,00</td>
                                <td></td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-572FB7B8CC7DB2236557E44B41F6EF49 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('572FB7B8CC7DB2236557E44B41F6EF49', 'A-00055')">
                                                                                    <img src="/web-files/upload/thumbs/877102C0127DCB73054D01EE03DFB936/B38BFEC4931B4D3E9274A4953464A84C.jpg" border="0" alt="Anel dourado detalhe prata com pingente" title="Anel dourado detalhe prata com pingente">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>A-00055</td>
                                <td>Anel dourado detalhe prata com pingente</td>
                                <td>Anéis</td>
                                <td>0.200</td>
                                <td>55,00</td>
                                <td>42,00</td>
                                <td></td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-E8AE9429CA70234DED292E79E9A806AF no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('E8AE9429CA70234DED292E79E9A806AF', 'B-00092')">
                                                                                    <img src="/web-files/upload/thumbs/219E0E87E6DBACDCDB60BEB6943E82E6/C2A660344DAFF406925A7CD46F2C3E33.jpg" border="0" alt="Brinco dourado com base oval e pendente " title="Brinco dourado com base oval e pendente ">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00092</td>
                                <td>Brinco dourado com base oval e pendente </td>
                                <td>Brinco</td>
                                <td>0.013</td>
                                <td>70,00</td>
                                <td>32,00</td>
                                <td>32,00</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-1589F878718549D26A649210B3A08F68 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('1589F878718549D26A649210B3A08F68', 'P-00002')">
                                                                                    <img src="/web-files/upload/thumbs/C0D0A0590BF29626715F6CC9259717C0/8CBE71F4BBDB65900C59CBE255A9B2CC.jpg" border="0" alt="Pulseira dourada rabo de rato" title="Pulseira dourada rabo de rato">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>P-00002</td>
                                <td>Pulseira dourada rabo de rato</td>
                                <td>Pulseiras</td>
                                <td>0.100</td>
                                <td>25,00</td>
                                <td>11,00</td>
                                <td>11,00</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-B7003F21066FD0EA97EEBE5EAA64CCD7 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('B7003F21066FD0EA97EEBE5EAA64CCD7', 'P-00007')">
                                                                                    <img src="/web-files/upload/thumbs/746C031E22B117E973A7B22219DF6931/FC5B9D02E87AB4ED1D5AD5D3BD529045.jpg" border="0" alt="Pulseira dourada torcida" title="Pulseira dourada torcida">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>P-00007</td>
                                <td>Pulseira dourada torcida</td>
                                <td>Pulseiras</td>
                                <td>0.100</td>
                                <td>28,00</td>
                                <td>11,00</td>
                                <td></td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-FACFE69810E1C8AD7A9EA504EC369BD6 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('FACFE69810E1C8AD7A9EA504EC369BD6', 'B-00009')">
                                                                                    <img src="/web-files/upload/thumbs/5D53A6EA6CDEA8F2607C294E8F124062/AB0DE809EC936B9F7197006A1DE31F7A.jpg" border="0" alt="Brinco dourado de circulos" title="Brinco dourado de circulos">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00009</td>
                                <td>Brinco dourado de circulos</td>
                                <td>Brinco</td>
                                <td>0.200</td>
                                <td>84,00</td>
                                <td>64,50</td>
                                <td></td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-8FB1ABCCB3B34F2CF90BF2AC0C81FC04 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('8FB1ABCCB3B34F2CF90BF2AC0C81FC04', 'A-00077')">
                                                                                    <img src="/web-files/upload/thumbs/80EBDC4E155B56E329153583B417CB18/54C1722F239ACF638974027AFB0CB29A.jpg" border="0" alt="Anel dourado de falange trançado" title="Anel dourado de falange trançado">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>A-00077</td>
                                <td>Anel dourado de falange trançado</td>
                                <td>Anéis</td>
                                <td>0.100</td>
                                <td>28,00</td>
                                <td>13,00</td>
                                <td>13,00</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-2BAEC66ACA15D77E8E105EC1BA7CFB99 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('2BAEC66ACA15D77E8E105EC1BA7CFB99', 'A-00067')">
                                                                                    <img src="/web-files/upload/thumbs/9C28EDBF94F004033BEEB81405C54ECE/7DA1865A3CDD83DEB6BA89D048E05927.jpg" border="0" alt="Anel doudaro com relevo de escamas" title="Anel doudaro com relevo de escamas">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>A-00067</td>
                                <td>Anel doudaro com relevo de escamas</td>
                                <td>Anéis</td>
                                <td>0.110</td>
                                <td>97,00</td>
                                <td>44,50</td>
                                <td>44,50</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-61F27F4F7D8039E3F2352D689812809D no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('61F27F4F7D8039E3F2352D689812809D', 'A-00079')">
                                                                                    <img src="/web-files/upload/thumbs/F863C21D7259E484F32C7796027CD86D/C4759EAADA390EE9C2F9A56EC8506E7D.jpg" border="0" alt="Kit anel onda rosê e fumê" title="Kit anel onda rosê e fumê">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>A-00079</td>
                                <td>Kit anel onda rosê e fumê</td>
                                <td>Anéis</td>
                                <td>0.600</td>
                                <td>13,00</td>
                                <td>9,50</td>
                                <td>9,50</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-D1B8073C87BF7922696F624F97D08481 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('D1B8073C87BF7922696F624F97D08481', 'A-00074')">
                                                                                    <img src="/web-files/upload/thumbs/FC7855C102FF9CB170B68B70CB8E0EFD/C24D7D7DE05DAA4CD508A94CD0D8C30E.jpg" border="0" alt="Anel dourado de falange liso" title="Anel dourado de falange liso">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>A-00074</td>
                                <td>Anel dourado de falange liso</td>
                                <td>Anéis</td>
                                <td>0.100</td>
                                <td>26,00</td>
                                <td>12,00</td>
                                <td>24,00</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-23900E1474B81D25BF9EB1B9E62A1E96 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('23900E1474B81D25BF9EB1B9E62A1E96', 'P-00036')">
                                                                                    <img src="/web-files/upload/thumbs/4EB6E7AED802A73E213B3B1ADD19F8ED/FA2892BFDC2CB5834485AE5BF8333ACC.jpg" border="0" alt="Pulseira rosê com franja fina" title="Pulseira rosê com franja fina">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>P-00036</td>
                                <td>Pulseira rosê com franja fina</td>
                                <td>Pulseiras</td>
                                <td>0.013</td>
                                <td>129,00</td>
                                <td>59,50</td>
                                <td>119,00</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-981CE59CD885B14E814ADF09CDB00C41 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('981CE59CD885B14E814ADF09CDB00C41', 'C-00058')">
                                                                                    <img src="/web-files/upload/thumbs/A768F0C6D3FA82D6406EA904B4937643/36FA756FB91A08099148734607FDB284.jpg" border="0" alt="Colar dourado com cristal citrino" title="Colar dourado com cristal citrino">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>C-00058</td>
                                <td>Colar dourado com cristal citrino</td>
                                <td>Colares</td>
                                <td>0.200</td>
                                <td>97,00</td>
                                <td>44,50</td>
                                <td>44,50</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-58782C8B77B913BE2A9928ED6FB888AB no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('58782C8B77B913BE2A9928ED6FB888AB', 'C-00060')">
                                                                                    <img src="/web-files/upload/thumbs/D6D45A0F57B177D01A3314CD5004834F/760A22D0E81E479A0450CB0FB2C3D3EB.jpg" border="0" alt="Colar dourado com pingente de cristal " title="Colar dourado com pingente de cristal ">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>C-00060</td>
                                <td>Colar dourado com pingente de cristal </td>
                                <td>Colares</td>
                                <td>0.200</td>
                                <td>108,00</td>
                                <td>49,50</td>
                                <td>49,50</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-DF69D4DBAA21190DB2B1ADD517835860 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('DF69D4DBAA21190DB2B1ADD517835860', 'C-00061')">
                                                                                    <img src="/web-files/upload/thumbs/15967CC556EA65CBFE2934CA94C1C2E3/6EFC403D584F6E117D30DF7F09AB9A65.jpg" border="0" alt="Colar dourado com pingente de cristal " title="Colar dourado com pingente de cristal ">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>C-00061</td>
                                <td>Colar dourado com pingente de cristal </td>
                                <td>Colares</td>
                                <td>0.200</td>
                                <td>108,00</td>
                                <td>49,50</td>
                                <td>99,00</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-FBD907CD57EAB840AEBADFDE7DE963B7 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('FBD907CD57EAB840AEBADFDE7DE963B7', 'P-00051')">
                                                                                    <img src="/web-files/upload/thumbs/68056882F2F601587B8EB803FA436F04/8CF55D9E0D21D152AF97E5991DF7FCD8.jpg" border="0" alt="Pulseira prata riviera com aplicações" title="Pulseira prata riviera com aplicações">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>P-00051</td>
                                <td>Pulseira prata riviera com aplicações</td>
                                <td>Pulseiras</td>
                                <td>0.100</td>
                                <td>107,00</td>
                                <td>49,00</td>
                                <td>49,00</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-697D515907F95884242CCF97317D9666 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('697D515907F95884242CCF97317D9666', 'B-00105')">
                                                                                    <img src="/web-files/upload/thumbs/F640A8EE009F2BC3862658FDC630C597/E93DAE3003ABF91FD11A27C157E304C9.jpg" border="0" alt="Brinco replica vivara com zircônia preta" title="Brinco replica vivara com zircônia preta">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00105</td>
                                <td>Brinco replica vivara com zircônia preta</td>
                                <td>Brinco</td>
                                <td>0.200</td>
                                <td>325,00</td>
                                <td>199,00</td>
                                <td>199,00</td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-BF66C472454960C4EC9C789222A4D0B3 no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('BF66C472454960C4EC9C789222A4D0B3', 'B-00077')">
                                                                                    <img src="/web-files/upload/thumbs/B91C9542BE6A0F65137A6BD2699B9ABF/D287DFB6A26E2A4B0EDF4ED4AE87B056.jpg" border="0" alt="Brinco dourado com base de zircônias " title="Brinco dourado com base de zircônias ">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>B-00077</td>
                                <td>Brinco dourado com base de zircônias </td>
                                <td>Brinco</td>
                                <td>0.016</td>
                                <td>160,00</td>
                                <td>69,50</td>
                                <td></td>
                            </tr>
                                                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                           
                                                        <tr class="delete-return-36431BF377B88486351AFE4F1480FB2E no">
                                <td>
                                    <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('36431BF377B88486351AFE4F1480FB2E', '00000000')">
                                                                                    <img src="/web-files/upload/thumbs/8EF56B53020C48DDAA89D2AF64C24CD5/CEB6AC5AE957437863C7011F794630E1.jpg" border="0" alt="Teste Ebit" title="Teste Ebit">
                                                                                <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                    </span>
                                </td>
                                <td>1</td>
                                <td>00000000</td>
                                <td>Teste Ebit</td>
                                <td>Anéis</td>
                                <td>0.300</td>
                                <td>90,00</td>
                                <td>29,50</td>
                                <td>29,50</td>
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
</html>
<?php }} ?>

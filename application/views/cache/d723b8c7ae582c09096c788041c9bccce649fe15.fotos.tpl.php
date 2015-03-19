<?php /*%%SmartyHeaderCode:1996016341545b8a067768c4-08305202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd723b8c7ae582c09096c788041c9bccce649fe15' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/fotos.tpl',
      1 => 1414178451,
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
  'nocache_hash' => '1996016341545b8a067768c4-08305202',
  'variables' => 
  array (
    'language' => 0,
    'foto_destaque' => 0,
    'web_files' => 0,
    'produto' => 0,
    'url_amigavel' => 0,
    'fotos' => 0,
    'foto' => 0,
    'key' => 0,
    'item' => 0,
    'CODFOTO' => 0,
    'ORIGINAL' => 0,
    'NOME' => 0,
    'TIPO' => 0,
    'FORMATO' => 0,
    'star' => 0,
    'stt' => 0,
    'eye' => 0,
    'i' => 0,
    'url_del' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b8a06cead25_48394054',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b8a06cead25_48394054')) {function content_545b8a06cead25_48394054($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Lista de fotos</title>

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
                <li  class="" ><a href="/homolog/pt/pedidos/pedidos-lista">Lista</a></li>
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
            <!--
            <form class="navbar-form navbar-right" role="search" method="post">
    <div class="form-group">
        <input type="hidden" name="actionType" value="search"/>
        <input type="text" class="search-input form-control" name="search" placeholder="Pesquisa"/>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>



            -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12"  style="text-align: left;">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h2><span class="label label-default">Lista de Imagens</span></h2>
                </div>
                <br/>
                <div class="col-md-6 text-right">
                    <a href="/homolog/pt/produtos/produtos_lista" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                </div>
                
            </div>
            <br/>

            <div class="container" style="text-align: left; margin-left: 0; padding-left: 0;">

                <div class="col-md-3 text-left">
                    <h4 class="panel-heading x-label">Preview</h4>
                    <div class="thumbnail env-produto" style="margin: 0;"> 
                                                    <div class="auto-img"><img src="/homolog/web-files/upload/thumbs/D579CA62923FA91A5BB57E307016A6C5/6B0B25FFA1BDBEEC0404885207649068.jpg" alt="" border="0" title="" class="img-responsive"/></div>
                                                
                        <div class="row sp1"><div class="col-sm-12 sp2"></div></div>
                        <div class="auto-price text-center"> R$ <span class="view-preco">94,00</span></div>
                        <div class="auto-title text-center view-nome">Bracelete italiano prata com fivela prat</div>
                        <div class="text-center">
                            <a onclick="return false;" class="btn btn-default navbar-btn eu-quero">Eu quero</a> 
                        </div>
                    </div>
                    
                </div>    
                <div class="col-md-9 text-left">
                    
                    
                </div>    
                

            </div>
            <br/>

            <a id="m-btn" href='#single_2' class="btn btn-default navbar-btn fancybox"><i class="fa fa-photo"></i> Enviar fotos</a>
            <span class="Loader hide"><img src="/homolog/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span>
            <div id="single_2" style="display: none; width: 530px; height: 500px;">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div id="mulitplefileuploader">Upload</div>
                        <input type="hidden" id="url_amigavel" value="bracelete-italiano-prata-com-fivela-prat"/>
                    </div>
                    <div class="panel-body">
                        <div id="status"></div>
                    </div>
                    
                </div>
                <div>
                    <p><button type="buttom" class="btn btn-primary btn-primary-maria" onclick="javascript:$('a[title=Close]').click();">FECHAR</button></p>
                </div>    


            </div>

            <div class="panel-default">

                <table class='table' id="table-1" cellspacing="0" cellpadding="2">
                    
                    <thead>
                        <th>#</th>
                        <th>Informações</th>
                        <th>Ações</th>
                        
                    </thead>
                    
                    
                     
                    
                                                                                                                                                                                                                                 
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                                                                                                                                                                      
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                                                                                                                               
                                
                              
                                                    
                        
                        <tr id="c8759b0ed93cb5eac8af44e8b5ae6ad2" style="border-radius: 0;">
                            <td>    
                                <img src="/homolog/web-files/upload/D559B04A5D3BD764B4F1C2597342325F/960CB1E836A526E5C50BA78CAA95A5D9.jpg" alt="Br 00012.jpg" data-toggle="tooltip" title="Br 00012.jpg" border="0" style="width: 150px;"/>
                            </td>    
                            <td>

                                <!--<span style="display: inline-block; margin-right: 10px; margin-left: 10px; cursor: move; float: left;">
                                <img src="/homolog/web-files/img/move.png" alt="Drag" data-toggle="Drag" title="Drag" border="0" style="width: 55px;"/>
                            </span>-->


                                <span style="display: inline-block;">
                                    <strong>Nome: </strong>Br 00012.jpg<br/>
                                    <strong>Tipo: </strong> image/jpeg<br/>
                                    <strong>Formato: </strong>.jpg<br/>
                                    <strong>Abrir imagem em uma nova janela: </strong><a href="/homolog/web-files/upload/D559B04A5D3BD764B4F1C2597342325F/960CB1E836A526E5C50BA78CAA95A5D9.jpg" target="_blank" class="fa fa-camera"></a><br/>
                                </span>
                            </td>    
                            
                            <td>
                                <span style="display: inline-block; margin-right: 10px">
                                    
                                    <a href="/homolog/pt/produtos/foto_destaque/url/bracelete-italiano-prata-com-fivela-prat/codfoto/c8759b0ed93cb5eac8af44e8b5ae6ad2"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>
                                    <a href="/homolog/pt/produtos/foto_status/status/0/url/bracelete-italiano-prata-com-fivela-prat/codfoto/c8759b0ed93cb5eac8af44e8b5ae6ad2"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="#crop_1" class="fancybox-crop" data-id="1" onclick="javascript:getCrop('crop_1');"><span class="ico-default-edit" data-toggle="tooltip" title="Crop"><i class="fa fa-crop"></i></span></a>
                                    <div id="crop_1" style="display: none !important; display: inline-block;">
                                        <form method='post' id='FormSendImage_1' onsubmit='return false' enctype='multipart/form-data'>   

                                            <input type="hidden" id="crop_1_dataX1_1"/>
                                            <input type="hidden" id="crop_1_dataY1_1"/>
                                            <input type="hidden" id="crop_1_dataX2_1"/>
                                            <input type="hidden" id="crop_1_dataY2_1"/>
                                            <input type="hidden" id="crop_1_dataWidth_1" />
                                            <input type="hidden" id="crop_1_dataHeight_1"/>

                                            <input type="hidden" id="crop_1_dataX1_2"/>
                                            <input type="hidden" id="crop_1_dataY1_2"/>
                                            <input type="hidden" id="crop_1_dataX2_2"/>
                                            <input type="hidden" id="crop_1_dataY2_2"/>
                                            <input type="hidden" id="crop_1_dataWidth_2" />
                                            <input type="hidden" id="crop_1_dataHeight_2"/>

                                            <input type="hidden" id="crop_1_dataX1_3"/>
                                            <input type="hidden" id="crop_1_dataY1_3"/>
                                            <input type="hidden" id="crop_1_dataX2_3"/>
                                            <input type="hidden" id="crop_1_dataY2_3"/>
                                            <input type="hidden" id="crop_1_dataWidth_3" />
                                            <input type="hidden" id="crop_1_dataHeight_3"/>


                                            <div class="panel panel-default show_crop_1_1">
                                                <div class="panel-body pn1_crop_1">
                                                    <img class='crop_1_preview_1' src='/homolog/web-files/upload/D559B04A5D3BD764B4F1C2597342325F/960CB1E836A526E5C50BA78CAA95A5D9.jpg' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Retrato. <br/> <br/> 
                                                            <div class="myload_crop_1"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <span class="LoaderCrop hide"><img src="/homolog/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 7%;"/></span>
                                                            <a id="m-btn" onclick="release_crop('crop_1', 'crop_1_preview_1', 'c8759b0ed93cb5eac8af44e8b5ae6ad2', 1, 'retrato', 'crop_1')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>
                                                            
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   


                                            <div class="panel panel-default show_crop_1_2 hidex">  
                                                <div class="panel-body pn2_crop_1">
                                                    <img class='crop_1_preview_2' src='/homolog/web-files/upload/D559B04A5D3BD764B4F1C2597342325F/960CB1E836A526E5C50BA78CAA95A5D9.jpg' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Paisagem.  <br/> <br/> 
                                                            <div class="myload_crop_1"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <span class="LoaderCrop hide"><img src="/homolog/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 7%;"/></span>
                                                            <a id="m-btn" onclick="release_crop('crop_1', 'crop_1_preview_2', 'c8759b0ed93cb5eac8af44e8b5ae6ad2', 2, 'paisagem', 'crop_1')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>                                    

                                    </div>                 
                                    <a onclick="delete_foto('/homolog/pt/produtos/delete_foto/url/bracelete-italiano-prata-com-fivela-prat/codfoto/c8759b0ed93cb5eac8af44e8b5ae6ad2')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                </span>    
                            </td>    
                        </tr>


                        
                                    </table>

                <pre id="serialize_output" style="display: none;">Item 1,Item 3,Item 2,Item 5,Item 4,Item 6</pre>
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

<?php /*%%SmartyHeaderCode:15901065435503349e5791d6-88953114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be8e2b951d0819dc2fdc535de9ca0c292ef515a4' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/fotos.tpl',
      1 => 1425580744,
      2 => 'file',
    ),
    'ac2c18a5081edc217b9c4be02e595167eff25d93' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/header.tpl',
      1 => 1425578453,
      2 => 'file',
    ),
    '7eb677adcd7c0d82e647c09ecee716de8729db60' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/navbar.tpl',
      1 => 1425487032,
      2 => 'file',
    ),
    '96a8ddce0d67da5c866b6fbb6bc0382bff5ef8e7' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/logo.tpl',
      1 => 1425487015,
      2 => 'file',
    ),
    '6fc50a401fce6e162f09141db201a1cafc81ce77' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/search.tpl',
      1 => 1425487044,
      2 => 'file',
    ),
    '242494dac312b69fc8a81bf2c4c5a4ede5022fff' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/btn_voltar.tpl',
      1 => 1425487027,
      2 => 'file',
    ),
    '5d845aeca603183216c663abda55568885594a7e' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/footer.tpl',
      1 => 1425578459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15901065435503349e5791d6-88953114',
  'variables' => 
  array (
    'language' => 0,
    'produto' => 0,
    'foto_destaque' => 0,
    'fotos' => 0,
    'foto' => 0,
    'key' => 0,
    'item' => 0,
    'url_amigavel' => 0,
    'CODFOTO' => 0,
    'ORIGINAL' => 0,
    'NOME' => 0,
    'web_files' => 0,
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
  'unifunc' => 'content_5503349eae41f5_51412838',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503349eae41f5_51412838')) {function content_5503349eae41f5_51412838($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Lista de fotos</title>

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

        <!-- //COLOR PICKER BOOTSTRAP// -->
        <link href="/web-files/bootstrap-colorpicker-master/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="/web-files/bootstrap-colorpicker-master/src/css/docs.css" rel="stylesheet">
        
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


            .aviso-balao{
                display: inline-block;
                padding: 3px 10px;
                position: absolute;
                bottom: 11px;
                right: 13px;
            }
            .hidex{
                max-height: 0;
                overflow: hidden;
                box-shadow: none;
                opacity: 0;
                margin-bottom: 0;
            }
            

        </style>

    </head>
    <body>
        <div id="wrapper">
            <div id="page-wrapper">
                <div class="container-fluid">

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
        <a class="navbar-brand" href="/en/admin/welcome">rodrigo@estilocarioca.com.br</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Estilo Carioca <b class="caret"></b></a>
            <ul class="dropdown-menu">
                
                <li>
                    <a href="/en/admin/alterar-senha"><i class="fa fa-fw fa-gear"></i> Alterar senha</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="/en/admin/logout"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">


            <li  class="" >
                <a href="/en/admin/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li ><a href="/en/produtos/produtos-lista">
                    <i class="fa fa-paper-plane"></i> Produtos</a>
            </li> 
            <li >
                <a href="/en/pedidos/pedidos-lista"><i class="fa fa-file-text"></i> Pedidos</a>
            </li>
            <li >
                <a href="/en/conta/lista"><i class="fa fa-users"></i> Clientes</a>
            </li>
            <li >
                <a href="/en/produtos/estoque"><i class="fa fa-bars"></i> Estoque</a></li> 
            <li >
                <a href="/en/produtos/estoque-baixo" style="position: relative;"><i class="fa fa-sort-alpha-asc"></i> Estoque Baixo  <span class="btn btn-sm btn-danger aviso-balao">34</span> </a>
            </li>
            <li >
                <a href="/en/produtos/avise-me" style="position: relative;"><i class="fa fa-bell"></i> Avise-me </a>
            </li>  
            
            <li  class="" >
                <a href="/en/informacoes/newsletter-lista"><i class="fa fa-paper-plane"></i> Newsletter</a>
            </li>
            <li >
                <a href="/en/conta/aniversariantes" style="position: relative;"><i class="fa fa-users"></i> Aniversariantes  <span class="btn btn-sm btn-danger aviso-balao">1</span> </a>
            </li>
            <li >
                <a href="/en/pedidos/exportar"><i class="fa fa-expand"></i> Exportar Pedidos</a>
            </li>
            
            <li >
                <a href="/en/nota-fiscal/exportar" style="position: relative;"><i class="fa fa-expand"></i> Exportar Nota Fiscal <span class="btn btn-sm btn-danger aviso-balao">10</span> </a>
            </li>
            
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            <a href="/en/admin/welcome"><img class="area-restrita img-responsive" src="/web-files/img/logo.png" alt="" border="0" title="" /></a>
        </div>
        <!--
        <form class="navbar-form navbar-right" role="search" method="post">
    <div class="form-group">
        <input type="hidden" name="actionType" value="search"/>
        <input type="text" class="search-input form-control" name="search" value="" placeholder="Pesquisa"/>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>



        -->
    </div>

</div>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Lista de Imagens
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/en/admin/welcome">Home</a>
            </li>
            <li>
                <i class="fa fa-paper-plane"></i>  <a href="/en/produtos/produtos-lista">Lista de Produtos</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Imagens
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="row">
            <br/>
            <div class="col-md-12 text-right">
                                <a href="/en/produtos/produtos-lista" data-toggle="tooltip"  title="Voltar" style="color:#d9534f; font-size: 30px;"><i class="fa fa-reply">&nbsp</i></a>                
            </div>
        </div>

    </div>
</div>     
            

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <h1>Preview - Camisa Masculina - R$ 129,90 </h1>
                </div>
                                    <img src="/web-files/upload/thumbs/3EB20EA3705800DCDA50232E0C45D8DC/69D44DFC22D874536A1F71F3AC53DC54.jpg" alt="" border="0" title="" class="img-thumbnail"/>
                 
            </div>
        </div>
    </div>
</div>

<br/>

<a id="m-btn" href='#single_2' class="btn btn-lg btn-success fancybox"><i class="fa fa-photo"></i> Enviar Fotos</a>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Imagens</h3>
            </div>
            <div class="panel-body">
                <table class='table' id="table-1" cellspacing="0" cellpadding="2">

                    <thead>
                    <th>#</th>
                    <th>Informações</th>
                    <th>Ações</th>

                    </thead>


                     
                    
                                                                                                                                                                                                                                 
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                                                                                                                                                                      
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                                                                                                                               
                                
                              
                                                    
                        
                        <tr id="c0c22988b94c1cac5e0c4e2473b84234" style="border-radius: 0;">
                            <td>    
                                <img src="/web-files/upload/B5D3B82452FC01A287C0090A455DFEB9/548646DCB6AA3035BD8A82CF4A2F6CA5.jpg" alt="ns_camisa_mas.jpg" data-toggle="tooltip" title="ns_camisa_mas.jpg" border="0" style="width: 150px;"/>
                            </td>    
                            <td>

                                <!--<span style="display: inline-block; margin-right: 10px; margin-left: 10px; cursor: move; float: left;">
                                <img src="/web-files/img/move.png" alt="Drag" data-toggle="Drag" title="Drag" border="0" style="width: 55px;"/>
                            </span>-->


                                <span style="display: inline-block;">
                                    <strong>Nome: </strong>ns_camisa_mas.jpg<br/>
                                    <strong>Tipo: </strong> image/jpeg<br/>
                                    <strong>Formato: </strong>.jpg<br/>
                                    <strong>Abrir imagem em uma nova janela: </strong><a href="/web-files/upload/B5D3B82452FC01A287C0090A455DFEB9/548646DCB6AA3035BD8A82CF4A2F6CA5.jpg" target="_blank" class="fa fa-camera"></a><br/>
                                </span>
                            </td>    

                            <td>
                                <span style="display: inline-block; margin-right: 10px">

                                    <a href="/en/produtos/foto_destaque/url/camisa-masculina-2/codfoto/c0c22988b94c1cac5e0c4e2473b84234"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>
                                    <a href="/en/produtos/foto_status/status/0/url/camisa-masculina-2/codfoto/c0c22988b94c1cac5e0c4e2473b84234"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
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
                                                    <img class='crop_1_preview_1' src='/web-files/upload/B5D3B82452FC01A287C0090A455DFEB9/548646DCB6AA3035BD8A82CF4A2F6CA5.jpg' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Retrato. <br/> <br/> 
                                                            <div class="myload_crop_1"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <span class="LoaderCrop hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 7%;"/></span>
                                                            <a id="m-btn" onclick="release_crop('crop_1', 'crop_1_preview_1', 'c0c22988b94c1cac5e0c4e2473b84234', 1, 'retrato', 'crop_1')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   


                                            <div class="panel panel-default show_crop_1_2 hidex">  
                                                <div class="panel-body pn2_crop_1">
                                                    <img class='crop_1_preview_2' src='/web-files/upload/B5D3B82452FC01A287C0090A455DFEB9/548646DCB6AA3035BD8A82CF4A2F6CA5.jpg' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Paisagem.  <br/> <br/> 
                                                            <div class="myload_crop_1"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <span class="LoaderCrop hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 7%;"/></span>
                                                            <a id="m-btn" onclick="release_crop('crop_1', 'crop_1_preview_2', 'c0c22988b94c1cac5e0c4e2473b84234', 2, 'paisagem', 'crop_1')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>                                    

                                    </div>                 
                                    <a onclick="delete_foto('/en/produtos/delete_foto/url/camisa-masculina-2/codfoto/c0c22988b94c1cac5e0c4e2473b84234')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                </span>    
                            </td>    
                        </tr>


                        
                    
                                                                                                                                                                                                                                 
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                                                                                                                                                                      
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                                                                                                                               
                                
                              
                                                    
                        
                        <tr id="4ada46a3eb842ff7a4975d642ff58be8" style="border-radius: 0;">
                            <td>    
                                <img src="/web-files/upload/4D2ED349207E29F0BF43BCE46553D273/D51E574A2B919BBF2D8318DAA307800D.jpg" alt="ns_camisa_mas_1.jpg" data-toggle="tooltip" title="ns_camisa_mas_1.jpg" border="0" style="width: 150px;"/>
                            </td>    
                            <td>

                                <!--<span style="display: inline-block; margin-right: 10px; margin-left: 10px; cursor: move; float: left;">
                                <img src="/web-files/img/move.png" alt="Drag" data-toggle="Drag" title="Drag" border="0" style="width: 55px;"/>
                            </span>-->


                                <span style="display: inline-block;">
                                    <strong>Nome: </strong>ns_camisa_mas_1.jpg<br/>
                                    <strong>Tipo: </strong> image/jpeg<br/>
                                    <strong>Formato: </strong>.jpg<br/>
                                    <strong>Abrir imagem em uma nova janela: </strong><a href="/web-files/upload/4D2ED349207E29F0BF43BCE46553D273/D51E574A2B919BBF2D8318DAA307800D.jpg" target="_blank" class="fa fa-camera"></a><br/>
                                </span>
                            </td>    

                            <td>
                                <span style="display: inline-block; margin-right: 10px">

                                    <a href="/en/produtos/foto_destaque/url/camisa-masculina-2/codfoto/4ada46a3eb842ff7a4975d642ff58be8"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>
                                    <a href="/en/produtos/foto_status/status/0/url/camisa-masculina-2/codfoto/4ada46a3eb842ff7a4975d642ff58be8"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="#crop_2" class="fancybox-crop" data-id="2" onclick="javascript:getCrop('crop_2');"><span class="ico-default-edit" data-toggle="tooltip" title="Crop"><i class="fa fa-crop"></i></span></a>
                                    <div id="crop_2" style="display: none !important; display: inline-block;">
                                        <form method='post' id='FormSendImage_2' onsubmit='return false' enctype='multipart/form-data'>   

                                            <input type="hidden" id="crop_2_dataX1_1"/>
                                            <input type="hidden" id="crop_2_dataY1_1"/>
                                            <input type="hidden" id="crop_2_dataX2_1"/>
                                            <input type="hidden" id="crop_2_dataY2_1"/>
                                            <input type="hidden" id="crop_2_dataWidth_1" />
                                            <input type="hidden" id="crop_2_dataHeight_1"/>

                                            <input type="hidden" id="crop_2_dataX1_2"/>
                                            <input type="hidden" id="crop_2_dataY1_2"/>
                                            <input type="hidden" id="crop_2_dataX2_2"/>
                                            <input type="hidden" id="crop_2_dataY2_2"/>
                                            <input type="hidden" id="crop_2_dataWidth_2" />
                                            <input type="hidden" id="crop_2_dataHeight_2"/>

                                            <input type="hidden" id="crop_2_dataX1_3"/>
                                            <input type="hidden" id="crop_2_dataY1_3"/>
                                            <input type="hidden" id="crop_2_dataX2_3"/>
                                            <input type="hidden" id="crop_2_dataY2_3"/>
                                            <input type="hidden" id="crop_2_dataWidth_3" />
                                            <input type="hidden" id="crop_2_dataHeight_3"/>


                                            <div class="panel panel-default show_crop_2_1">
                                                <div class="panel-body pn1_crop_2">
                                                    <img class='crop_2_preview_1' src='/web-files/upload/4D2ED349207E29F0BF43BCE46553D273/D51E574A2B919BBF2D8318DAA307800D.jpg' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Retrato. <br/> <br/> 
                                                            <div class="myload_crop_2"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <span class="LoaderCrop hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 7%;"/></span>
                                                            <a id="m-btn" onclick="release_crop('crop_2', 'crop_2_preview_1', '4ada46a3eb842ff7a4975d642ff58be8', 1, 'retrato', 'crop_2')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   


                                            <div class="panel panel-default show_crop_2_2 hidex">  
                                                <div class="panel-body pn2_crop_2">
                                                    <img class='crop_2_preview_2' src='/web-files/upload/4D2ED349207E29F0BF43BCE46553D273/D51E574A2B919BBF2D8318DAA307800D.jpg' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Paisagem.  <br/> <br/> 
                                                            <div class="myload_crop_2"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <span class="LoaderCrop hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 7%;"/></span>
                                                            <a id="m-btn" onclick="release_crop('crop_2', 'crop_2_preview_2', '4ada46a3eb842ff7a4975d642ff58be8', 2, 'paisagem', 'crop_2')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>                                    

                                    </div>                 
                                    <a onclick="delete_foto('/en/produtos/delete_foto/url/camisa-masculina-2/codfoto/4ada46a3eb842ff7a4975d642ff58be8')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                </span>    
                            </td>    
                        </tr>


                        
                    
                                                                                                                                                                                                                                 
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                                                                                                                                                                      
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                                                                                                                               
                                
                              
                                                    
                        
                        <tr id="804596627e9149d7ec0cd942479e108d" style="border-radius: 0;">
                            <td>    
                                <img src="/web-files/upload/679D31F67AE4438D5D0FAB1BC3C37D57/4AD8DA54BD48081EA9F2DE931DE4F4BD.jpg" alt="ns_camisa_mas_3.jpg" data-toggle="tooltip" title="ns_camisa_mas_3.jpg" border="0" style="width: 150px;"/>
                            </td>    
                            <td>

                                <!--<span style="display: inline-block; margin-right: 10px; margin-left: 10px; cursor: move; float: left;">
                                <img src="/web-files/img/move.png" alt="Drag" data-toggle="Drag" title="Drag" border="0" style="width: 55px;"/>
                            </span>-->


                                <span style="display: inline-block;">
                                    <strong>Nome: </strong>ns_camisa_mas_3.jpg<br/>
                                    <strong>Tipo: </strong> image/jpeg<br/>
                                    <strong>Formato: </strong>.jpg<br/>
                                    <strong>Abrir imagem em uma nova janela: </strong><a href="/web-files/upload/679D31F67AE4438D5D0FAB1BC3C37D57/4AD8DA54BD48081EA9F2DE931DE4F4BD.jpg" target="_blank" class="fa fa-camera"></a><br/>
                                </span>
                            </td>    

                            <td>
                                <span style="display: inline-block; margin-right: 10px">

                                    <a href="/en/produtos/foto_destaque/url/camisa-masculina-2/codfoto/804596627e9149d7ec0cd942479e108d"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>
                                    <a href="/en/produtos/foto_status/status/0/url/camisa-masculina-2/codfoto/804596627e9149d7ec0cd942479e108d"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="#crop_3" class="fancybox-crop" data-id="3" onclick="javascript:getCrop('crop_3');"><span class="ico-default-edit" data-toggle="tooltip" title="Crop"><i class="fa fa-crop"></i></span></a>
                                    <div id="crop_3" style="display: none !important; display: inline-block;">
                                        <form method='post' id='FormSendImage_3' onsubmit='return false' enctype='multipart/form-data'>   

                                            <input type="hidden" id="crop_3_dataX1_1"/>
                                            <input type="hidden" id="crop_3_dataY1_1"/>
                                            <input type="hidden" id="crop_3_dataX2_1"/>
                                            <input type="hidden" id="crop_3_dataY2_1"/>
                                            <input type="hidden" id="crop_3_dataWidth_1" />
                                            <input type="hidden" id="crop_3_dataHeight_1"/>

                                            <input type="hidden" id="crop_3_dataX1_2"/>
                                            <input type="hidden" id="crop_3_dataY1_2"/>
                                            <input type="hidden" id="crop_3_dataX2_2"/>
                                            <input type="hidden" id="crop_3_dataY2_2"/>
                                            <input type="hidden" id="crop_3_dataWidth_2" />
                                            <input type="hidden" id="crop_3_dataHeight_2"/>

                                            <input type="hidden" id="crop_3_dataX1_3"/>
                                            <input type="hidden" id="crop_3_dataY1_3"/>
                                            <input type="hidden" id="crop_3_dataX2_3"/>
                                            <input type="hidden" id="crop_3_dataY2_3"/>
                                            <input type="hidden" id="crop_3_dataWidth_3" />
                                            <input type="hidden" id="crop_3_dataHeight_3"/>


                                            <div class="panel panel-default show_crop_3_1">
                                                <div class="panel-body pn1_crop_3">
                                                    <img class='crop_3_preview_1' src='/web-files/upload/679D31F67AE4438D5D0FAB1BC3C37D57/4AD8DA54BD48081EA9F2DE931DE4F4BD.jpg' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Retrato. <br/> <br/> 
                                                            <div class="myload_crop_3"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <span class="LoaderCrop hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 7%;"/></span>
                                                            <a id="m-btn" onclick="release_crop('crop_3', 'crop_3_preview_1', '804596627e9149d7ec0cd942479e108d', 1, 'retrato', 'crop_3')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   


                                            <div class="panel panel-default show_crop_3_2 hidex">  
                                                <div class="panel-body pn2_crop_3">
                                                    <img class='crop_3_preview_2' src='/web-files/upload/679D31F67AE4438D5D0FAB1BC3C37D57/4AD8DA54BD48081EA9F2DE931DE4F4BD.jpg' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Paisagem.  <br/> <br/> 
                                                            <div class="myload_crop_3"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <span class="LoaderCrop hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 7%;"/></span>
                                                            <a id="m-btn" onclick="release_crop('crop_3', 'crop_3_preview_2', '804596627e9149d7ec0cd942479e108d', 2, 'paisagem', 'crop_3')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>                                    

                                    </div>                 
                                    <a onclick="delete_foto('/en/produtos/delete_foto/url/camisa-masculina-2/codfoto/804596627e9149d7ec0cd942479e108d')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                </span>    
                            </td>    
                        </tr>


                        
                                    </table>

                <pre id="serialize_output" style="display: none;">Item 1,Item 3,Item 2,Item 5,Item 4,Item 6</pre>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"  style="text-align: left;">


        <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span>
        <div id="single_2" style="display: none; width: 530px; height: 500px;">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div id="mulitplefileuploader">Upload</div>
                    <input type="hidden" id="url_amigavel" value="camisa-masculina-2"/>
                </div>
                <div class="panel-body">
                    <div id="status"></div>
                </div>

            </div>
            <div>
                <p><button type="buttom" class="btn btn-primary btn-primary-maria" onclick="javascript:$('a[title=Close]').click();">FECHAR</button></p>
            </div>    


        </div>

    </div>
</div>


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
    
</script>

<!-- //COLOR PICKER BOOTSTRAP// -->

<script src="/web-files/bootstrap-colorpicker-master/dist/js/bootstrap-colorpicker.js"></script>
<script src="/web-files/bootstrap-colorpicker-master/src/js/docs.js"></script>

<!-- //JS DO TEMA RESPONSIVO EM BOOTSTRAP// -->
<script src="/web-files/startbootstrap-sb-admin-1.0.2/js/plugins/morris/raphael.min.js"></script>
<script src="/web-files/startbootstrap-sb-admin-1.0.2/js/plugins/morris/morris.min.js"></script>
<script src="/web-files/startbootstrap-sb-admin-1.0.2/js/plugins/morris/morris-data.js"></script>



</body>
</html>

<script>
    function getCrop(id) {

        var $image1 = $("." + id + "_preview_1"),
                $dataX1_1 = $("#" + id + "_dataX1_1"),
                $dataY1_1 = $("#" + id + "_dataY1_1"),
                $dataX2_1 = $("#" + id + "_dataX2_1"),
                $dataY2_1 = $("#" + id + "_dataY2_1"),
                $dataHeight_1 = $("#" + id + "_dataHeight_1"),
                $dataWidth_1 = $("#" + id + "_dataWidth_1");

        $image1.cropper({
            aspectRatio: 0.9,
            done: function(data) {
                console.log(data.x1 + ":" + data.y1 + ":" + data.x2 + ":" + data.y2 + ":" + data.height + ":" + data.width);
                $dataX1_1.val(data.x1);
                $dataY1_1.val(data.y1);
                $dataX2_1.val(data.x2);
                $dataY2_1.val(data.y2);
                $dataHeight_1.val(data.height);
                $dataWidth_1.val(data.width);
            }
        });

        var $image2 = $("." + id + "_preview_2"),
                $dataX1_2 = $("#" + id + "_dataX1_2"),
                $dataY1_2 = $("#" + id + "_dataY1_2"),
                $dataX2_2 = $("#" + id + "_dataX2_2"),
                $dataY2_2 = $("#" + id + "_dataY2_2"),
                $dataHeight_2 = $("#" + id + "_dataHeight_2"),
                $dataWidth_2 = $("#" + id + "_dataWidth_2");

        $image2.cropper({
            aspectRatio: 1.8,
            done: function(data) {
                console.log(data.x1 + ":" + data.y1 + ":" + data.x2 + ":" + data.y2 + ":" + data.height + ":" + data.width);
                $dataX1_2.val(data.x1);
                $dataY1_2.val(data.y1);
                $dataX2_2.val(data.x2);
                $dataY2_2.val(data.y2);
                $dataHeight_2.val(data.height);
                $dataWidth_2.val(data.width);
            }
        });

    }
</script><?php }} ?>

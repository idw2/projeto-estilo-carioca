<?php /*%%SmartyHeaderCode:62530509655032d5f6820c7-84976813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ce3d25e48681e4a89b258543a365c5a103ea28a' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/pedidos_lista.tpl',
      1 => 1425487008,
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
    '5d845aeca603183216c663abda55568885594a7e' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/footer.tpl',
      1 => 1425578459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62530509655032d5f6820c7-84976813',
  'variables' => 
  array (
    'language' => 0,
    'pedidos' => 0,
    'pedido' => 0,
    'i' => 0,
    'star' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55032d5f9ed172_17348532',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55032d5f9ed172_17348532')) {function content_55032d5f9ed172_17348532($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Lista de Pedidos</title>

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
            <li  class="active">
                <a href="/en/pedidos/pedidos-lista"><i class="fa fa-file-text"></i> Pedidos</a>
            </li>
            <li >
                <a href="/en/conta/lista"><i class="fa fa-users"></i> Clientes</a>
            </li>
            <li >
                <a href="/en/produtos/estoque"><i class="fa fa-bars"></i> Estoque</a></li> 
            <li >
                <a href="/en/produtos/estoque-baixo" style="position: relative;"><i class="fa fa-sort-alpha-asc"></i> Estoque Baixo  <span class="btn btn-sm btn-danger aviso-balao">35</span> </a>
            </li>
            <li >
                <a href="/en/produtos/avise-me" style="position: relative;"><i class="fa fa-bell"></i> Avise-me  <span class="btn btn-sm btn-danger aviso-balao">1</span> </a>
            </li>  
            
            <li  class="" >
                <a href="/en/informacoes/newsletter-lista"><i class="fa fa-paper-plane"></i> Newsletter</a>
            </li>
            <li >
                <a href="/en/conta/aniversariantes" style="position: relative;"><i class="fa fa-users"></i> Aniversariantes </a>
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
        <form class="navbar-form navbar-right" role="search" method="post">
    <div class="form-group">
        <input type="hidden" name="actionType" value="search"/>
        <input type="text" class="search-input form-control" name="search" value="" placeholder="Pesquisa"/>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>



    </div>
</div>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Lista de Pedidos
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/en/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Pedidos
            </li>
        </ol>
    </div>
</div>  

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Pedidos</h3>
            </div>
            <div class="panel-body">
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                    <thead>
                    <th>Data</th>
                    <th>Nº do Pedido</th>
                    <th>Nome</th>
                    <th>Forma de Pagamento</th>
                    <th>Forma de Envio</th>
                    <th>Total Parcial</th>
                    <th>Imposto</th>
                    <th>Taxa de Entrega</th>
                    <th>Total</th>
                    <th>Ações</th>
                    </thead>

                     
                      
                                                    <tr >
                                <td>06/03/2015 - 17h26</td>
                                <td>0000000015</td>
                                <td>Rogerio Pontes</td>
                                <td>paypal</td>
                                <td>PAC</td>
                                <td>R$ 159,00</td>
                                <td>R$ </td>
                                <td></td>
                                <td>R$ 159,00</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/1/dd006179f9e449f7db143cbf10c83322"><span class="ico-default-star " data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/dd006179f9e449f7db143cbf10c83322"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>05/03/2015 - 12h54</td>
                                <td>0000000014</td>
                                <td>Thiago Lima</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 9,00</td>
                                <td>R$ </td>
                                <td>R$ 13,70</td>
                                <td>R$ 22,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/0/b0aedf1bd1313c796fe4252136ea56a8"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/b0aedf1bd1313c796fe4252136ea56a8"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                                    <a onclick="delete_produto('en/pedidos/delete/codpedido/b0aedf1bd1313c796fe4252136ea56a8')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>05/03/2015 - 12h51</td>
                                <td>0000000013</td>
                                <td>Thiago Lima</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 18,00</td>
                                <td>R$ </td>
                                <td>R$ 13,70</td>
                                <td>R$ 31,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/0/19b34cfe4a62233dbf17321f175b890b"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/19b34cfe4a62233dbf17321f175b890b"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                                    <a onclick="delete_produto('en/pedidos/delete/codpedido/19b34cfe4a62233dbf17321f175b890b')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>05/03/2015 - 12h50</td>
                                <td>0000000012</td>
                                <td>Thiago Lima</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 27,00</td>
                                <td>R$ </td>
                                <td>R$ 13,70</td>
                                <td>R$ 40,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/0/65b722b5c912756e18410e886499b775"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/65b722b5c912756e18410e886499b775"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                                    <a onclick="delete_produto('en/pedidos/delete/codpedido/65b722b5c912756e18410e886499b775')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>05/03/2015 - 12h15</td>
                                <td>0000000011</td>
                                <td>Thiago Lima</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 27,00</td>
                                <td>R$ </td>
                                <td>R$ 13,70</td>
                                <td>R$ 40,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/0/12be088c71a2e81e0737661fb10b12dc"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/12be088c71a2e81e0737661fb10b12dc"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                                    <a onclick="delete_produto('en/pedidos/delete/codpedido/12be088c71a2e81e0737661fb10b12dc')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>05/03/2015 - 12h14</td>
                                <td>0000000010</td>
                                <td>Thiago Lima</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 18,00</td>
                                <td>R$ </td>
                                <td>R$ 13,70</td>
                                <td>R$ 31,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/0/3f45f509cccb16ceb1fa1375b16cee55"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/3f45f509cccb16ceb1fa1375b16cee55"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                                    <a onclick="delete_produto('en/pedidos/delete/codpedido/3f45f509cccb16ceb1fa1375b16cee55')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>05/03/2015 - 12h13</td>
                                <td>0000000009</td>
                                <td>Thiago Lima</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 18,00</td>
                                <td>R$ </td>
                                <td>R$ 13,70</td>
                                <td>R$ 31,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/0/9787a7ba69cff02eff31c3fce9b6b63a"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/9787a7ba69cff02eff31c3fce9b6b63a"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                                    <a onclick="delete_produto('en/pedidos/delete/codpedido/9787a7ba69cff02eff31c3fce9b6b63a')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>05/03/2015 - 12h12</td>
                                <td>0000000008</td>
                                <td>Thiago Lima</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 18,00</td>
                                <td>R$ </td>
                                <td>R$ 13,70</td>
                                <td>R$ 31,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/0/2199b30e4b5edb483fae7cec7ed25502"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/2199b30e4b5edb483fae7cec7ed25502"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                                    <a onclick="delete_produto('en/pedidos/delete/codpedido/2199b30e4b5edb483fae7cec7ed25502')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>04/03/2015 - 20h09</td>
                                <td>0000000007</td>
                                <td>Thiago Lima</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 36,00</td>
                                <td>R$ </td>
                                <td>R$ 14,90</td>
                                <td>R$ 50,90</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/0/9c022e0a0259cd8bf4a375c97d30e4d7"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/9c022e0a0259cd8bf4a375c97d30e4d7"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                                    <a onclick="delete_produto('en/pedidos/delete/codpedido/9c022e0a0259cd8bf4a375c97d30e4d7')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>04/03/2015 - 20h09</td>
                                <td>0000000006</td>
                                <td>Thiago Lima</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 36,00</td>
                                <td>R$ </td>
                                <td>R$ 14,90</td>
                                <td>R$ 50,90</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/0/98b828ef2dcc2899b969e391697ba5f1"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/98b828ef2dcc2899b969e391697ba5f1"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                                    <a onclick="delete_produto('en/pedidos/delete/codpedido/98b828ef2dcc2899b969e391697ba5f1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>04/03/2015 - 19h14</td>
                                <td>0000000005</td>
                                <td>Cassio Lemos</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 9,00</td>
                                <td>R$ </td>
                                <td>R$ 13,70</td>
                                <td>R$ 22,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/0/322c1042a0d980dc1c1da595f2822029"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/322c1042a0d980dc1c1da595f2822029"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                                    <a onclick="delete_produto('en/pedidos/delete/codpedido/322c1042a0d980dc1c1da595f2822029')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>04/03/2015 - 19h14</td>
                                <td>0000000004</td>
                                <td>Cassio Lemos</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ </td>
                                <td>R$ </td>
                                <td>R$ 13,70</td>
                                <td>R$ 13,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/0/91b2189a76b0a3cdf6e93d761c93f5f8"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/91b2189a76b0a3cdf6e93d761c93f5f8"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                                    <a onclick="delete_produto('en/pedidos/delete/codpedido/91b2189a76b0a3cdf6e93d761c93f5f8')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>04/03/2015 - 19h14</td>
                                <td>0000000003</td>
                                <td>Cassio Lemos</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ </td>
                                <td>R$ </td>
                                <td>R$ 13,70</td>
                                <td>R$ 13,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/0/47a09b76ed612fded202c85db5054472"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/47a09b76ed612fded202c85db5054472"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                                    <a onclick="delete_produto('en/pedidos/delete/codpedido/47a09b76ed612fded202c85db5054472')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr class="myDragClass">
                                <td>04/03/2015 - 18h00</td>
                                <td>0000000002</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 27,00</td>
                                <td>R$ </td>
                                <td>R$ 13,70</td>
                                <td>R$ 40,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/0/9f60dd65f5b26c2acbc82019527752f9"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/9f60dd65f5b26c2acbc82019527752f9"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                                    <a onclick="delete_produto('en/pedidos/delete/codpedido/9f60dd65f5b26c2acbc82019527752f9')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      
                                                    <tr >
                                <td>04/03/2015 - 17h59</td>
                                <td>0000000001</td>
                                <td>Rogerio Pontes</td>
                                <td>boleto</td>
                                <td>PAC</td>
                                <td>R$ 27,00</td>
                                <td>R$ </td>
                                <td>R$ 13,70</td>
                                <td>R$ 40,70</td>
                                                                                                                                           
                                <td>
                                    <a href="/en/pedidos/status/0/32510fc33c66927b2bf022dc6d0b609e"><span class="ico-default-star desative" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/en/pedidos/view/codpedido/32510fc33c66927b2bf022dc6d0b609e"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                                                                    <a onclick="delete_produto('en/pedidos/delete/codpedido/32510fc33c66927b2bf022dc6d0b609e')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                            </tr>     
                                                 
                        
                      


                </table>
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
</html><?php }} ?>

<?php /*%%SmartyHeaderCode:4614296015519a90a0deb90-78784943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfa73154b8c1563fab2218f22483135954bc47fd' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/admin/produtos_lista.tpl',
      1 => 1427121050,
      2 => 'file',
    ),
    '7c14537ebe57b4bc1eedfa371ca2a364bcf50b8d' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/admin/header.tpl',
      1 => 1427145625,
      2 => 'file',
    ),
    '1d3e9687239a536367ce1c38bb19f95041ffa2a4' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/admin/navbar.tpl',
      1 => 1425487032,
      2 => 'file',
    ),
    '923c8f9a996a07b3791cd075bae5ebfa2ecbe9cd' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/admin/logo.tpl',
      1 => 1425487015,
      2 => 'file',
    ),
    '59bb964779cf6740e69f8ec8f6ff2efcbe1a0dba' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/admin/search.tpl',
      1 => 1425487044,
      2 => 'file',
    ),
    '93b428cd07803cfda8ed1b42acaf4676a5b8993f' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/admin/tinymce_2.tpl',
      1 => 1425486997,
      2 => 'file',
    ),
    'e82c9c2beaa0b50186f1f0ee7a58134f935d20d7' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/admin/footer.tpl',
      1 => 1425578459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4614296015519a90a0deb90-78784943',
  'variables' => 
  array (
    'language' => 0,
    'categoria' => 0,
    'qtdd_junior' => 0,
    'qtdd_nilton_santos' => 0,
    'total_produtos' => 0,
    'ERRO_NAO_EXISTE_PRODUTOS' => 0,
    'meus_produtos' => 0,
    'produto' => 0,
    'teste' => 0,
    'email_restricao' => 0,
    'stt' => 0,
    'eye' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5519a90a926598_07128272',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5519a90a926598_07128272')) {function content_5519a90a926598_07128272($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Lista de Produtos</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        <link rel="shortcut icon" href="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5">
        <link rel="shortcut icon" type="image/x-icon" href="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5"/>

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


            <li  class="" >
                <a href="/pt/admin/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li  class="active"><a href="/pt/produtos/produtos-lista">
                    <i class="fa fa-paper-plane"></i> Produtos</a>
            </li> 
            <li >
                <a href="/pt/pedidos/pedidos-lista"><i class="fa fa-file-text"></i> Pedidos</a>
            </li>
            <li >
                <a href="/pt/conta/lista"><i class="fa fa-users"></i> Clientes</a>
            </li>
            <li >
                <a href="/pt/produtos/estoque"><i class="fa fa-bars"></i> Estoque</a></li> 
            <li >
                <a href="/pt/produtos/estoque-baixo" style="position: relative;"><i class="fa fa-sort-alpha-asc"></i> Estoque Baixo  <span class="btn btn-sm btn-danger aviso-balao">34</span> </a>
            </li>
            <li >
                <a href="/pt/produtos/avise-me" style="position: relative;"><i class="fa fa-bell"></i> Avise-me </a>
            </li>  
            
            <li  class="" >
                <a href="/pt/informacoes/newsletter-lista"><i class="fa fa-paper-plane"></i> Newsletter</a>
            </li>
            <li >
                <a href="/pt/conta/aniversariantes" style="position: relative;"><i class="fa fa-users"></i> Aniversariantes </a>
            </li>
            <li >
                <a href="/pt/pedidos/exportar"><i class="fa fa-expand"></i> Exportar Pedidos</a>
            </li>
            
            <li >
                <a href="/pt/nota-fiscal/exportar" style="position: relative;"><i class="fa fa-expand"></i> Exportar Nota Fiscal</a>
            </li>
            
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            <a href="/pt/admin/welcome"><img class="area-restrita img-responsive" src="/web-files/img/logo.png" alt="" border="0" title="" /></a>
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
            Lista de Produtos
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/pt/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Produtos
            </li>
        </ol>
    </div>
</div>    

<div class="row">
    <div class="col-md-12">



        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Busca por Categorias</h3>
                    </div>
                    <div class="panel-body">
                        <div class="flot-chart" style="height: 135px;">
                            <div class="flot-chart-content" id="flot-moving-line-chart">
                                <form method="post" id="formCategoria" style="margin: 3%;">
                                    <input type="radio" name="categoria" value="todos"  onclick="javascript:start_form_categoria();"/> Todos<br/>
                                    <input type="radio" name="categoria" value="junior"   onclick="javascript:start_form_categoria();"/> Junior<br/>
                                    <input type="radio" name="categoria" value="nilton-santos"   onclick="javascript:start_form_categoria();"/> Nilton Santos<br/> 
                                    <input type="hidden" name="actionType" value="pesquisa_categoria">
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Total de Produtos</h3>
                    </div>
                    <div class="panel-body">
                        <div class="flot-chart" style="height: 150px;">
                            <div class="flot-chart-content" id="flot-bar-chart">

                                <table class='table'>
                                    <thead>
                                    <th>Categoria</th>
                                    <th>Quantidade</th>
                                    </thead>
                                    <tr>
                                        <td>Junior</td><td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Nilton Santos</td><td>8</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Geral</strong></td><td>19</td>
                                    </tr>   
                                </table>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        

        <br/>
        <a href="/pt/produtos/cadastrar" class="btn btn-lg btn-success" style="margin-bottom:20px;"><i class="fa fa-plus-square"></i> Cadastro de Produtos</a>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Produtos</h3>
                    </div>
                    <div style="width:100% !important;" class="panel-body">
                        <style>
                            .pNameImput{
                                width: 400px;
                                padding-right: 6px;
                                padding-left: 6px;
                            }

                            .pNameImput.Loader{
                                background: url(/web-files/img/Loader_small.gif) no-repeat;
                                background-position: center right 6px;
                            }
                        </style> 
                        <div class="col-lg-12">
                            <table class='table'>
                                <thead>
                                <th>#</th>
                                <th>Referência</th>
                                <th>Nome</th>
                                    
                                <th style="width: 14%;">Descrição</th>
                                    
                                    
                                <th>Ações</th>
                                </thead>

                                
                                 
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-D6035AC02FE669D1AC9FA96170F086C8 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('D6035AC02FE669D1AC9FA96170F086C8', 'J-0001')">
                                                                                                            <img src="/web-files/upload/thumbs/54620D5C0A45D8BC15A0F1CB1090C7AD/C6AB3851A4BAB996776FEA01C98B1A7F.jpg" border="0" style="width: 80px;" alt="Camisa 60 Anos" title="Camisa 60 Anos">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_D6035AC02FE669D1AC9FA96170F086C8" id="REFERENCIA_D6035AC02FE669D1AC9FA96170F086C8" value="J-0001"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_D6035AC02FE669D1AC9FA96170F086C8', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_D6035AC02FE669D1AC9FA96170F086C8" id="PRECODE_D6035AC02FE669D1AC9FA96170F086C8" value="89,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_D6035AC02FE669D1AC9FA96170F086C8', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_D6035AC02FE669D1AC9FA96170F086C8" id="PRECOPARA_D6035AC02FE669D1AC9FA96170F086C8" value="69,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_D6035AC02FE669D1AC9FA96170F086C8', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_D6035AC02FE669D1AC9FA96170F086C8" value="Camisa 60 Anos"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_D6035AC02FE669D1AC9FA96170F086C8', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_D6035AC02FE669D1AC9FA96170F086C8" id="ORDEM_D6035AC02FE669D1AC9FA96170F086C8" value="10" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_D6035AC02FE669D1AC9FA96170F086C8', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Junior<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 10<br/>
                                                <b>Preço Unitário: </b> 50,00<br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('D6035AC02FE669D1AC9FA96170F086C8', 'pt/produtos/status/0/camisa-60-anos-1')"><span class="ico-default-eye status-return-D6035AC02FE669D1AC9FA96170F086C8 " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/camisa-60-anos-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('D6035AC02FE669D1AC9FA96170F086C8', 'pt/produtos/editar-textarea/camisa-60-anos-1')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/camisa-60-anos-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('D6035AC02FE669D1AC9FA96170F086C8', 'pt/produtos/delete/camisa-60-anos-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-D6035AC02FE669D1AC9FA96170F086C8"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-D6035AC02FE669D1AC9FA96170F086C8"></td>
                                                        <td></td>
                                                        <td class="fotos-D6035AC02FE669D1AC9FA96170F086C8"></td>
                                                        <td class="delete-D6035AC02FE669D1AC9FA96170F086C8"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-D6035AC02FE669D1AC9FA96170F086C8 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa 60 Anos" title="Camisa 60 Anos"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-D6035AC02FE669D1AC9FA96170F086C8 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa 60 Anos" title="Camisa 60 Anos"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-D6035AC02FE669D1AC9FA96170F086C8 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa 60 Anos" title="Camisa 60 Anos"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-D6035AC02FE669D1AC9FA96170F086C8 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa 60 Anos" title="Camisa 60 Anos"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-9AAC2CCDEE44AC8FE37529830C9EA1EC no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('9AAC2CCDEE44AC8FE37529830C9EA1EC', 'J-00011')">
                                                                                                            <img src="/web-files/upload/thumbs/54CCAF32EBCBDA8A09D02FE75BDA3DE4/DECAE8F0AFD39F0A6B5A798268191C60.jpg" border="0" style="width: 80px;" alt="Camisa Mangueira" title="Camisa Mangueira">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_9AAC2CCDEE44AC8FE37529830C9EA1EC" id="REFERENCIA_9AAC2CCDEE44AC8FE37529830C9EA1EC" value="J-00011"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_9AAC2CCDEE44AC8FE37529830C9EA1EC', '9AAC2CCDEE44AC8FE37529830C9EA1EC')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_9AAC2CCDEE44AC8FE37529830C9EA1EC" id="PRECODE_9AAC2CCDEE44AC8FE37529830C9EA1EC" value="189,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_9AAC2CCDEE44AC8FE37529830C9EA1EC', '9AAC2CCDEE44AC8FE37529830C9EA1EC')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_9AAC2CCDEE44AC8FE37529830C9EA1EC" id="PRECOPARA_9AAC2CCDEE44AC8FE37529830C9EA1EC" value="139,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_9AAC2CCDEE44AC8FE37529830C9EA1EC', '9AAC2CCDEE44AC8FE37529830C9EA1EC')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_9AAC2CCDEE44AC8FE37529830C9EA1EC" value="Camisa Mangueira"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_9AAC2CCDEE44AC8FE37529830C9EA1EC', '9AAC2CCDEE44AC8FE37529830C9EA1EC')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_9AAC2CCDEE44AC8FE37529830C9EA1EC" id="ORDEM_9AAC2CCDEE44AC8FE37529830C9EA1EC" value="2" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_9AAC2CCDEE44AC8FE37529830C9EA1EC', '9AAC2CCDEE44AC8FE37529830C9EA1EC')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Junior<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 10<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('9AAC2CCDEE44AC8FE37529830C9EA1EC', 'pt/produtos/status/0/camisa-mangueira-1')"><span class="ico-default-eye status-return-9AAC2CCDEE44AC8FE37529830C9EA1EC " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/camisa-mangueira-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('9AAC2CCDEE44AC8FE37529830C9EA1EC', 'pt/produtos/editar-textarea/camisa-mangueira-1')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/camisa-mangueira-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('9AAC2CCDEE44AC8FE37529830C9EA1EC', 'pt/produtos/delete/camisa-mangueira-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-9AAC2CCDEE44AC8FE37529830C9EA1EC"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-9AAC2CCDEE44AC8FE37529830C9EA1EC"></td>
                                                        <td></td>
                                                        <td class="fotos-9AAC2CCDEE44AC8FE37529830C9EA1EC"></td>
                                                        <td class="delete-9AAC2CCDEE44AC8FE37529830C9EA1EC"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-9AAC2CCDEE44AC8FE37529830C9EA1EC yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Mangueira" title="Camisa Mangueira"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-9AAC2CCDEE44AC8FE37529830C9EA1EC yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Mangueira" title="Camisa Mangueira"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-9AAC2CCDEE44AC8FE37529830C9EA1EC yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Mangueira" title="Camisa Mangueira"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-9AAC2CCDEE44AC8FE37529830C9EA1EC yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Mangueira" title="Camisa Mangueira"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-2A5B5F9F7B309CC071BEE1D49CE92998 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('2A5B5F9F7B309CC071BEE1D49CE92998', 'J-0002')">
                                                                                                            <img src="/web-files/upload/thumbs/DA0CD840011FBEA01A1A19EF07F868B5/773724559E7FCA1FF6055A31E5938BA6.jpg" border="0" style="width: 80px;" alt="Baby Look" title="Baby Look">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_2A5B5F9F7B309CC071BEE1D49CE92998" id="REFERENCIA_2A5B5F9F7B309CC071BEE1D49CE92998" value="J-0002"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_2A5B5F9F7B309CC071BEE1D49CE92998', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_2A5B5F9F7B309CC071BEE1D49CE92998" id="PRECODE_2A5B5F9F7B309CC071BEE1D49CE92998" value="159,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="159,90" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_2A5B5F9F7B309CC071BEE1D49CE92998', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_2A5B5F9F7B309CC071BEE1D49CE92998" id="PRECOPARA_2A5B5F9F7B309CC071BEE1D49CE92998" value="139,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="159,90" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_2A5B5F9F7B309CC071BEE1D49CE92998', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_2A5B5F9F7B309CC071BEE1D49CE92998" value="Baby Look"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_2A5B5F9F7B309CC071BEE1D49CE92998', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_2A5B5F9F7B309CC071BEE1D49CE92998" id="ORDEM_2A5B5F9F7B309CC071BEE1D49CE92998" value="6" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_2A5B5F9F7B309CC071BEE1D49CE92998', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Junior<br/>
                                                <b>Peso: </b> 0.000Kg.<br/>
                                                <b>Quantidade: </b> 0<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('2A5B5F9F7B309CC071BEE1D49CE92998', 'pt/produtos/status/0/baby-look')"><span class="ico-default-eye status-return-2A5B5F9F7B309CC071BEE1D49CE92998 " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/baby-look"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('2A5B5F9F7B309CC071BEE1D49CE92998', 'pt/produtos/editar-textarea/baby-look')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/baby-look"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('2A5B5F9F7B309CC071BEE1D49CE92998', 'pt/produtos/delete/baby-look')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-2A5B5F9F7B309CC071BEE1D49CE92998"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-2A5B5F9F7B309CC071BEE1D49CE92998"></td>
                                                        <td></td>
                                                        <td class="fotos-2A5B5F9F7B309CC071BEE1D49CE92998"></td>
                                                        <td class="delete-2A5B5F9F7B309CC071BEE1D49CE92998"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-2A5B5F9F7B309CC071BEE1D49CE92998 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Baby Look" title="Baby Look"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-2A5B5F9F7B309CC071BEE1D49CE92998 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Baby Look" title="Baby Look"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-2A5B5F9F7B309CC071BEE1D49CE92998 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Baby Look" title="Baby Look"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-2A5B5F9F7B309CC071BEE1D49CE92998 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Baby Look" title="Baby Look"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-4D8F2A4C874712676CD2B07543BBFC2A no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('4D8F2A4C874712676CD2B07543BBFC2A', 'J-0003')">
                                                                                                            <img src="/web-files/upload/thumbs/EEEB3E63240C04F697958560313E5B0C/243671BCEF8B25DE3A5C608EC95CCB16.jpg" border="0" style="width: 80px;" alt="Camisa Regata" title="Camisa Regata">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_4D8F2A4C874712676CD2B07543BBFC2A" id="REFERENCIA_4D8F2A4C874712676CD2B07543BBFC2A" value="J-0003"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_4D8F2A4C874712676CD2B07543BBFC2A', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_4D8F2A4C874712676CD2B07543BBFC2A" id="PRECODE_4D8F2A4C874712676CD2B07543BBFC2A" value="139,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="139,90" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_4D8F2A4C874712676CD2B07543BBFC2A', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_4D8F2A4C874712676CD2B07543BBFC2A" id="PRECOPARA_4D8F2A4C874712676CD2B07543BBFC2A" value="119,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="139,90" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_4D8F2A4C874712676CD2B07543BBFC2A', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_4D8F2A4C874712676CD2B07543BBFC2A" value="Camisa Regata"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_4D8F2A4C874712676CD2B07543BBFC2A', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_4D8F2A4C874712676CD2B07543BBFC2A" id="ORDEM_4D8F2A4C874712676CD2B07543BBFC2A" value="3" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_4D8F2A4C874712676CD2B07543BBFC2A', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Junior<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 1<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('4D8F2A4C874712676CD2B07543BBFC2A', 'pt/produtos/status/0/camisa-regata-1')"><span class="ico-default-eye status-return-4D8F2A4C874712676CD2B07543BBFC2A " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/camisa-regata-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('4D8F2A4C874712676CD2B07543BBFC2A', 'pt/produtos/editar-textarea/camisa-regata-1')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/camisa-regata-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('4D8F2A4C874712676CD2B07543BBFC2A', 'pt/produtos/delete/camisa-regata-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-4D8F2A4C874712676CD2B07543BBFC2A"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-4D8F2A4C874712676CD2B07543BBFC2A"></td>
                                                        <td></td>
                                                        <td class="fotos-4D8F2A4C874712676CD2B07543BBFC2A"></td>
                                                        <td class="delete-4D8F2A4C874712676CD2B07543BBFC2A"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-4D8F2A4C874712676CD2B07543BBFC2A yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Regata" title="Camisa Regata"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-4D8F2A4C874712676CD2B07543BBFC2A yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Regata" title="Camisa Regata"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-4D8F2A4C874712676CD2B07543BBFC2A yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Regata" title="Camisa Regata"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-4D8F2A4C874712676CD2B07543BBFC2A yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Regata" title="Camisa Regata"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-041A0E8131F5EC317CE395D8473E1C99 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('041A0E8131F5EC317CE395D8473E1C99', 'J-0004')">
                                                                                                            <img src="/web-files/upload/thumbs/1CD4B81121275481B6EBAF44651C03AD/0C1964775FD2C4CED574A5048883D0AA.jpg" border="0" style="width: 80px;" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_041A0E8131F5EC317CE395D8473E1C99" id="REFERENCIA_041A0E8131F5EC317CE395D8473E1C99" value="J-0004"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_041A0E8131F5EC317CE395D8473E1C99', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_041A0E8131F5EC317CE395D8473E1C99" id="PRECODE_041A0E8131F5EC317CE395D8473E1C99" value="189,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_041A0E8131F5EC317CE395D8473E1C99', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_041A0E8131F5EC317CE395D8473E1C99" id="PRECOPARA_041A0E8131F5EC317CE395D8473E1C99" value="139,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_041A0E8131F5EC317CE395D8473E1C99', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_041A0E8131F5EC317CE395D8473E1C99" value="Camisa Masculina"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_041A0E8131F5EC317CE395D8473E1C99', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_041A0E8131F5EC317CE395D8473E1C99" id="ORDEM_041A0E8131F5EC317CE395D8473E1C99" value="1" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_041A0E8131F5EC317CE395D8473E1C99', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Junior<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 1<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('041A0E8131F5EC317CE395D8473E1C99', 'pt/produtos/status/0/camisa-masculina-1')"><span class="ico-default-eye status-return-041A0E8131F5EC317CE395D8473E1C99 " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/camisa-masculina-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('041A0E8131F5EC317CE395D8473E1C99', 'pt/produtos/editar-textarea/camisa-masculina-1')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/camisa-masculina-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('041A0E8131F5EC317CE395D8473E1C99', 'pt/produtos/delete/camisa-masculina-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-041A0E8131F5EC317CE395D8473E1C99"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-041A0E8131F5EC317CE395D8473E1C99"></td>
                                                        <td></td>
                                                        <td class="fotos-041A0E8131F5EC317CE395D8473E1C99"></td>
                                                        <td class="delete-041A0E8131F5EC317CE395D8473E1C99"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-041A0E8131F5EC317CE395D8473E1C99 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Masculina" title="Camisa Masculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-041A0E8131F5EC317CE395D8473E1C99 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Masculina" title="Camisa Masculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-041A0E8131F5EC317CE395D8473E1C99 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Masculina" title="Camisa Masculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-041A0E8131F5EC317CE395D8473E1C99 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Masculina" title="Camisa Masculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-984A47DDA59A6362B1AD83631457C561 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('984A47DDA59A6362B1AD83631457C561', 'J-0005')">
                                                                                                            <img src="/web-files/upload/thumbs/53FBF5D924DC3F70D7AC3E8868E653FF/5F59BB2BA81AFF8343CF88A2E6C8178E.jpg" border="0" style="width: 80px;" alt="Casaco Moletom" title="Casaco Moletom">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_984A47DDA59A6362B1AD83631457C561" id="REFERENCIA_984A47DDA59A6362B1AD83631457C561" value="J-0005"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_984A47DDA59A6362B1AD83631457C561', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_984A47DDA59A6362B1AD83631457C561" id="PRECODE_984A47DDA59A6362B1AD83631457C561" value="319,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="319,90" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_984A47DDA59A6362B1AD83631457C561', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_984A47DDA59A6362B1AD83631457C561" id="PRECOPARA_984A47DDA59A6362B1AD83631457C561" value="269,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="319,90" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_984A47DDA59A6362B1AD83631457C561', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_984A47DDA59A6362B1AD83631457C561" value="Casaco Moletom"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_984A47DDA59A6362B1AD83631457C561', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_984A47DDA59A6362B1AD83631457C561" id="ORDEM_984A47DDA59A6362B1AD83631457C561" value="9" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_984A47DDA59A6362B1AD83631457C561', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Junior<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 1<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('984A47DDA59A6362B1AD83631457C561', 'pt/produtos/status/0/casaco-moletom')"><span class="ico-default-eye status-return-984A47DDA59A6362B1AD83631457C561 " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/casaco-moletom"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('984A47DDA59A6362B1AD83631457C561', 'pt/produtos/editar-textarea/casaco-moletom')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/casaco-moletom"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('984A47DDA59A6362B1AD83631457C561', 'pt/produtos/delete/casaco-moletom')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-984A47DDA59A6362B1AD83631457C561"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-984A47DDA59A6362B1AD83631457C561"></td>
                                                        <td></td>
                                                        <td class="fotos-984A47DDA59A6362B1AD83631457C561"></td>
                                                        <td class="delete-984A47DDA59A6362B1AD83631457C561"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-984A47DDA59A6362B1AD83631457C561 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Casaco Moletom" title="Casaco Moletom"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-984A47DDA59A6362B1AD83631457C561 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Casaco Moletom" title="Casaco Moletom"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-984A47DDA59A6362B1AD83631457C561 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Casaco Moletom" title="Casaco Moletom"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-984A47DDA59A6362B1AD83631457C561 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Casaco Moletom" title="Casaco Moletom"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-389AEE333B695B601085D801AAF5138C no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('389AEE333B695B601085D801AAF5138C', 'J-0006')">
                                                                                                            <img src="/web-files/upload/thumbs/975890DD10848F0AA80FE5A46CB46100/E40B9CAA503866EB2219AFC0312C8BEC.jpg" border="0" style="width: 80px;" alt="Vestido com Manga" title="Vestido com Manga">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_389AEE333B695B601085D801AAF5138C" id="REFERENCIA_389AEE333B695B601085D801AAF5138C" value="J-0006"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_389AEE333B695B601085D801AAF5138C', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_389AEE333B695B601085D801AAF5138C" id="PRECODE_389AEE333B695B601085D801AAF5138C" value="189,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_389AEE333B695B601085D801AAF5138C', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_389AEE333B695B601085D801AAF5138C" id="PRECOPARA_389AEE333B695B601085D801AAF5138C" value="159,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_389AEE333B695B601085D801AAF5138C', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_389AEE333B695B601085D801AAF5138C" value="Vestido com Manga"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_389AEE333B695B601085D801AAF5138C', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_389AEE333B695B601085D801AAF5138C" id="ORDEM_389AEE333B695B601085D801AAF5138C" value="6" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_389AEE333B695B601085D801AAF5138C', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Junior<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 1<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('389AEE333B695B601085D801AAF5138C', 'pt/produtos/status/0/vestido-com-manga-1')"><span class="ico-default-eye status-return-389AEE333B695B601085D801AAF5138C " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/vestido-com-manga-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('389AEE333B695B601085D801AAF5138C', 'pt/produtos/editar-textarea/vestido-com-manga-1')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/vestido-com-manga-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('389AEE333B695B601085D801AAF5138C', 'pt/produtos/delete/vestido-com-manga-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-389AEE333B695B601085D801AAF5138C"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-389AEE333B695B601085D801AAF5138C"></td>
                                                        <td></td>
                                                        <td class="fotos-389AEE333B695B601085D801AAF5138C"></td>
                                                        <td class="delete-389AEE333B695B601085D801AAF5138C"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-389AEE333B695B601085D801AAF5138C yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Vestido com Manga" title="Vestido com Manga"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-389AEE333B695B601085D801AAF5138C yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Vestido com Manga" title="Vestido com Manga"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-389AEE333B695B601085D801AAF5138C yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Vestido com Manga" title="Vestido com Manga"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-389AEE333B695B601085D801AAF5138C yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Vestido com Manga" title="Vestido com Manga"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-C52B80CCA47D7DDFEC063B2D4B96A11F no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('C52B80CCA47D7DDFEC063B2D4B96A11F', 'J-0007')">
                                                                                                            <img src="/web-files/upload/thumbs/D6F255B17E88A21C7AD0BF5305244A6D/9EBD82955A18005CE06B105D9D9913D0.jpg" border="0" style="width: 80px;" alt="Vestido sem Manga" title="Vestido sem Manga">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_C52B80CCA47D7DDFEC063B2D4B96A11F" id="REFERENCIA_C52B80CCA47D7DDFEC063B2D4B96A11F" value="J-0007"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_C52B80CCA47D7DDFEC063B2D4B96A11F', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_C52B80CCA47D7DDFEC063B2D4B96A11F" id="PRECODE_C52B80CCA47D7DDFEC063B2D4B96A11F" value="189,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_C52B80CCA47D7DDFEC063B2D4B96A11F', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_C52B80CCA47D7DDFEC063B2D4B96A11F" id="PRECOPARA_C52B80CCA47D7DDFEC063B2D4B96A11F" value="149,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_C52B80CCA47D7DDFEC063B2D4B96A11F', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_C52B80CCA47D7DDFEC063B2D4B96A11F" value="Vestido sem Manga"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_C52B80CCA47D7DDFEC063B2D4B96A11F', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_C52B80CCA47D7DDFEC063B2D4B96A11F" id="ORDEM_C52B80CCA47D7DDFEC063B2D4B96A11F" value="7" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_C52B80CCA47D7DDFEC063B2D4B96A11F', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Junior<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 1<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('C52B80CCA47D7DDFEC063B2D4B96A11F', 'pt/produtos/status/0/vestido-sem-manga')"><span class="ico-default-eye status-return-C52B80CCA47D7DDFEC063B2D4B96A11F " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/vestido-sem-manga"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('C52B80CCA47D7DDFEC063B2D4B96A11F', 'pt/produtos/editar-textarea/vestido-sem-manga')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/vestido-sem-manga"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('C52B80CCA47D7DDFEC063B2D4B96A11F', 'pt/produtos/delete/vestido-sem-manga')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-C52B80CCA47D7DDFEC063B2D4B96A11F"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-C52B80CCA47D7DDFEC063B2D4B96A11F"></td>
                                                        <td></td>
                                                        <td class="fotos-C52B80CCA47D7DDFEC063B2D4B96A11F"></td>
                                                        <td class="delete-C52B80CCA47D7DDFEC063B2D4B96A11F"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-C52B80CCA47D7DDFEC063B2D4B96A11F yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Vestido sem Manga" title="Vestido sem Manga"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-C52B80CCA47D7DDFEC063B2D4B96A11F yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Vestido sem Manga" title="Vestido sem Manga"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-C52B80CCA47D7DDFEC063B2D4B96A11F yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Vestido sem Manga" title="Vestido sem Manga"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-C52B80CCA47D7DDFEC063B2D4B96A11F yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Vestido sem Manga" title="Vestido sem Manga"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-39A78598BB76D5C5ED0B0AB0D9AB37F6 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('39A78598BB76D5C5ED0B0AB0D9AB37F6', 'J-0008')">
                                                                                                            <img src="/web-files/upload/thumbs/FB2A34331A07537DE6256BB00DB1916B/AAD00CA318102A6973E4C6EBFD33476B.jpg" border="0" style="width: 80px;" alt="Junior Regata Branca " title="Junior Regata Branca ">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_39A78598BB76D5C5ED0B0AB0D9AB37F6" id="REFERENCIA_39A78598BB76D5C5ED0B0AB0D9AB37F6" value="J-0008"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_39A78598BB76D5C5ED0B0AB0D9AB37F6', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_39A78598BB76D5C5ED0B0AB0D9AB37F6" id="PRECODE_39A78598BB76D5C5ED0B0AB0D9AB37F6" value="179,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="179,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_39A78598BB76D5C5ED0B0AB0D9AB37F6', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_39A78598BB76D5C5ED0B0AB0D9AB37F6" id="PRECOPARA_39A78598BB76D5C5ED0B0AB0D9AB37F6" value="119,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="179,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_39A78598BB76D5C5ED0B0AB0D9AB37F6', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_39A78598BB76D5C5ED0B0AB0D9AB37F6" value="Junior Regata Branca "/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_39A78598BB76D5C5ED0B0AB0D9AB37F6', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_39A78598BB76D5C5ED0B0AB0D9AB37F6" id="ORDEM_39A78598BB76D5C5ED0B0AB0D9AB37F6" value="5" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_39A78598BB76D5C5ED0B0AB0D9AB37F6', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Junior<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 10<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('39A78598BB76D5C5ED0B0AB0D9AB37F6', 'pt/produtos/status/0/junior-regata-branca')"><span class="ico-default-eye status-return-39A78598BB76D5C5ED0B0AB0D9AB37F6 " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/junior-regata-branca"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('39A78598BB76D5C5ED0B0AB0D9AB37F6', 'pt/produtos/editar-textarea/junior-regata-branca')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/junior-regata-branca"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('39A78598BB76D5C5ED0B0AB0D9AB37F6', 'pt/produtos/delete/junior-regata-branca')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-39A78598BB76D5C5ED0B0AB0D9AB37F6"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-39A78598BB76D5C5ED0B0AB0D9AB37F6"></td>
                                                        <td></td>
                                                        <td class="fotos-39A78598BB76D5C5ED0B0AB0D9AB37F6"></td>
                                                        <td class="delete-39A78598BB76D5C5ED0B0AB0D9AB37F6"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-39A78598BB76D5C5ED0B0AB0D9AB37F6 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Junior Regata Branca " title="Junior Regata Branca "></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-39A78598BB76D5C5ED0B0AB0D9AB37F6 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Junior Regata Branca " title="Junior Regata Branca "></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-39A78598BB76D5C5ED0B0AB0D9AB37F6 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Junior Regata Branca " title="Junior Regata Branca "></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-39A78598BB76D5C5ED0B0AB0D9AB37F6 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Junior Regata Branca " title="Junior Regata Branca "></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-F76082C3A571B5AB20F60525DF3626F3 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('F76082C3A571B5AB20F60525DF3626F3', 'J-0009')">
                                                                                                            <img src="/web-files/upload/thumbs/75D81A6B34F5384267EF36892230AD1D/79FC4CF8DFA38E127ED8B7DFA68DC4DB.jpg" border="0" style="width: 80px;" alt="Vestido Mangueira" title="Vestido Mangueira">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_F76082C3A571B5AB20F60525DF3626F3" id="REFERENCIA_F76082C3A571B5AB20F60525DF3626F3" value="J-0009"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_F76082C3A571B5AB20F60525DF3626F3', 'F76082C3A571B5AB20F60525DF3626F3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_F76082C3A571B5AB20F60525DF3626F3" id="PRECODE_F76082C3A571B5AB20F60525DF3626F3" value="189,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_F76082C3A571B5AB20F60525DF3626F3', 'F76082C3A571B5AB20F60525DF3626F3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_F76082C3A571B5AB20F60525DF3626F3" id="PRECOPARA_F76082C3A571B5AB20F60525DF3626F3" value="149,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_F76082C3A571B5AB20F60525DF3626F3', 'F76082C3A571B5AB20F60525DF3626F3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_F76082C3A571B5AB20F60525DF3626F3" value="Vestido Mangueira"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_F76082C3A571B5AB20F60525DF3626F3', 'F76082C3A571B5AB20F60525DF3626F3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_F76082C3A571B5AB20F60525DF3626F3" id="ORDEM_F76082C3A571B5AB20F60525DF3626F3" value="8" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_F76082C3A571B5AB20F60525DF3626F3', 'F76082C3A571B5AB20F60525DF3626F3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Junior<br/>
                                                <b>Peso: </b> 0.000Kg.<br/>
                                                <b>Quantidade: </b> 5<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('F76082C3A571B5AB20F60525DF3626F3', 'pt/produtos/status/0/vestido-mangueira')"><span class="ico-default-eye status-return-F76082C3A571B5AB20F60525DF3626F3 " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/vestido-mangueira"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('F76082C3A571B5AB20F60525DF3626F3', 'pt/produtos/editar-textarea/vestido-mangueira')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/vestido-mangueira"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('F76082C3A571B5AB20F60525DF3626F3', 'pt/produtos/delete/vestido-mangueira')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-F76082C3A571B5AB20F60525DF3626F3"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-F76082C3A571B5AB20F60525DF3626F3"></td>
                                                        <td></td>
                                                        <td class="fotos-F76082C3A571B5AB20F60525DF3626F3"></td>
                                                        <td class="delete-F76082C3A571B5AB20F60525DF3626F3"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-F76082C3A571B5AB20F60525DF3626F3 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Vestido Mangueira" title="Vestido Mangueira"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-F76082C3A571B5AB20F60525DF3626F3 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Vestido Mangueira" title="Vestido Mangueira"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-83BA0F9CEBF80380776344BF64FA6323 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('83BA0F9CEBF80380776344BF64FA6323', 'J-0010')">
                                                                                                            <img src="/web-files/upload/thumbs/0B4B20A8E436CD319389C3AE467DC5D2/C98030392C6C204DE88DDAC07AAA9333.jpg" border="0" style="width: 80px;" alt="Regata Mangueira" title="Regata Mangueira">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_83BA0F9CEBF80380776344BF64FA6323" id="REFERENCIA_83BA0F9CEBF80380776344BF64FA6323" value="J-0010"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_83BA0F9CEBF80380776344BF64FA6323', '83BA0F9CEBF80380776344BF64FA6323')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_83BA0F9CEBF80380776344BF64FA6323" id="PRECODE_83BA0F9CEBF80380776344BF64FA6323" value="189,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_83BA0F9CEBF80380776344BF64FA6323', '83BA0F9CEBF80380776344BF64FA6323')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_83BA0F9CEBF80380776344BF64FA6323" id="PRECOPARA_83BA0F9CEBF80380776344BF64FA6323" value="119,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_83BA0F9CEBF80380776344BF64FA6323', '83BA0F9CEBF80380776344BF64FA6323')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_83BA0F9CEBF80380776344BF64FA6323" value="Regata Mangueira"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_83BA0F9CEBF80380776344BF64FA6323', '83BA0F9CEBF80380776344BF64FA6323')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_83BA0F9CEBF80380776344BF64FA6323" id="ORDEM_83BA0F9CEBF80380776344BF64FA6323" value="4" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_83BA0F9CEBF80380776344BF64FA6323', '83BA0F9CEBF80380776344BF64FA6323')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Junior<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 10<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('83BA0F9CEBF80380776344BF64FA6323', 'pt/produtos/status/0/regata-mangueira')"><span class="ico-default-eye status-return-83BA0F9CEBF80380776344BF64FA6323 " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/regata-mangueira"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('83BA0F9CEBF80380776344BF64FA6323', 'pt/produtos/editar-textarea/regata-mangueira')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/regata-mangueira"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('83BA0F9CEBF80380776344BF64FA6323', 'pt/produtos/delete/regata-mangueira')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-83BA0F9CEBF80380776344BF64FA6323"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-83BA0F9CEBF80380776344BF64FA6323"></td>
                                                        <td></td>
                                                        <td class="fotos-83BA0F9CEBF80380776344BF64FA6323"></td>
                                                        <td class="delete-83BA0F9CEBF80380776344BF64FA6323"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-83BA0F9CEBF80380776344BF64FA6323 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Regata Mangueira" title="Regata Mangueira"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-83BA0F9CEBF80380776344BF64FA6323 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Regata Mangueira" title="Regata Mangueira"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-AC495248300239DADE219113A0265587 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('AC495248300239DADE219113A0265587', 'NS-0001')">
                                                                                                            <img src="/web-files/upload/thumbs/5D8444F91CF4EEC43E4D73A79564A552/6F785979D3DF825B8BB647D1FDFDDBBD.jpg" border="0" style="width: 80px;" alt="Camisa Bi Mundial" title="Camisa Bi Mundial">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_AC495248300239DADE219113A0265587" id="REFERENCIA_AC495248300239DADE219113A0265587" value="NS-0001"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_AC495248300239DADE219113A0265587', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_AC495248300239DADE219113A0265587" id="PRECODE_AC495248300239DADE219113A0265587" value="159,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="159,90" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_AC495248300239DADE219113A0265587', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_AC495248300239DADE219113A0265587" id="PRECOPARA_AC495248300239DADE219113A0265587" value="129,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="159,90" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_AC495248300239DADE219113A0265587', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_AC495248300239DADE219113A0265587" value="Camisa Bi Mundial"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_AC495248300239DADE219113A0265587', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_AC495248300239DADE219113A0265587" id="ORDEM_AC495248300239DADE219113A0265587" value="14" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_AC495248300239DADE219113A0265587', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Nilton Santos<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 10<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('AC495248300239DADE219113A0265587', 'pt/produtos/status/0/camisa-masculina-2')"><span class="ico-default-eye status-return-AC495248300239DADE219113A0265587 " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/camisa-masculina-2"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('AC495248300239DADE219113A0265587', 'pt/produtos/editar-textarea/camisa-masculina-2')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/camisa-masculina-2"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('AC495248300239DADE219113A0265587', 'pt/produtos/delete/camisa-masculina-2')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-AC495248300239DADE219113A0265587"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-AC495248300239DADE219113A0265587"></td>
                                                        <td></td>
                                                        <td class="fotos-AC495248300239DADE219113A0265587"></td>
                                                        <td class="delete-AC495248300239DADE219113A0265587"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-AC495248300239DADE219113A0265587 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Bi Mundial" title="Camisa Bi Mundial"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-AC495248300239DADE219113A0265587 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Bi Mundial" title="Camisa Bi Mundial"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-AC495248300239DADE219113A0265587 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Bi Mundial" title="Camisa Bi Mundial"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-AC495248300239DADE219113A0265587 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Bi Mundial" title="Camisa Bi Mundial"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-F3DB4A121F5C51A91B26DE8048E259D3 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('F3DB4A121F5C51A91B26DE8048E259D3', 'NS-0002')">
                                                                                                            <img src="/web-files/upload/thumbs/4F95FB489A3E169EE0C55C26F07142E6/13043E6A602FB0A7C08F343CE9570050.jpg" border="0" style="width: 80px;" alt="Nilton Santos Manga Longa" title="Nilton Santos Manga Longa">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_F3DB4A121F5C51A91B26DE8048E259D3" id="REFERENCIA_F3DB4A121F5C51A91B26DE8048E259D3" value="NS-0002"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_F3DB4A121F5C51A91B26DE8048E259D3', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_F3DB4A121F5C51A91B26DE8048E259D3" id="PRECODE_F3DB4A121F5C51A91B26DE8048E259D3" value="159,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="159,90" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_F3DB4A121F5C51A91B26DE8048E259D3', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_F3DB4A121F5C51A91B26DE8048E259D3" id="PRECOPARA_F3DB4A121F5C51A91B26DE8048E259D3" value="149,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="159,90" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_F3DB4A121F5C51A91B26DE8048E259D3', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_F3DB4A121F5C51A91B26DE8048E259D3" value="Nilton Santos Manga Longa"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_F3DB4A121F5C51A91B26DE8048E259D3', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_F3DB4A121F5C51A91B26DE8048E259D3" id="ORDEM_F3DB4A121F5C51A91B26DE8048E259D3" value="12" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_F3DB4A121F5C51A91B26DE8048E259D3', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Nilton Santos<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 10<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('F3DB4A121F5C51A91B26DE8048E259D3', 'pt/produtos/status/0/nilton-santos-manga-longa-1')"><span class="ico-default-eye status-return-F3DB4A121F5C51A91B26DE8048E259D3 " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/nilton-santos-manga-longa-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('F3DB4A121F5C51A91B26DE8048E259D3', 'pt/produtos/editar-textarea/nilton-santos-manga-longa-1')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/nilton-santos-manga-longa-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('F3DB4A121F5C51A91B26DE8048E259D3', 'pt/produtos/delete/nilton-santos-manga-longa-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-F3DB4A121F5C51A91B26DE8048E259D3"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-F3DB4A121F5C51A91B26DE8048E259D3"></td>
                                                        <td></td>
                                                        <td class="fotos-F3DB4A121F5C51A91B26DE8048E259D3"></td>
                                                        <td class="delete-F3DB4A121F5C51A91B26DE8048E259D3"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-F3DB4A121F5C51A91B26DE8048E259D3 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Nilton Santos Manga Longa" title="Nilton Santos Manga Longa"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-F3DB4A121F5C51A91B26DE8048E259D3 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Nilton Santos Manga Longa" title="Nilton Santos Manga Longa"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-F3DB4A121F5C51A91B26DE8048E259D3 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Nilton Santos Manga Longa" title="Nilton Santos Manga Longa"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-F3DB4A121F5C51A91B26DE8048E259D3 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Nilton Santos Manga Longa" title="Nilton Santos Manga Longa"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-83E4A651E3922F43549F642A40EF69D9 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('83E4A651E3922F43549F642A40EF69D9', 'NS-0003')">
                                                                                                            <img src="/web-files/upload/thumbs/6B2FE1F4324B7B39B57CADAD9CD34E2D/A17FA2E34024541956FCA0201D800836.jpg" border="0" style="width: 80px;" alt="Baby Look" title="Baby Look">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_83E4A651E3922F43549F642A40EF69D9" id="REFERENCIA_83E4A651E3922F43549F642A40EF69D9" value="NS-0003"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_83E4A651E3922F43549F642A40EF69D9', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_83E4A651E3922F43549F642A40EF69D9" id="PRECODE_83E4A651E3922F43549F642A40EF69D9" value="189,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_83E4A651E3922F43549F642A40EF69D9', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_83E4A651E3922F43549F642A40EF69D9" id="PRECOPARA_83E4A651E3922F43549F642A40EF69D9" value="129,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_83E4A651E3922F43549F642A40EF69D9', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_83E4A651E3922F43549F642A40EF69D9" value="Baby Look"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_83E4A651E3922F43549F642A40EF69D9', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_83E4A651E3922F43549F642A40EF69D9" id="ORDEM_83E4A651E3922F43549F642A40EF69D9" value="13" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_83E4A651E3922F43549F642A40EF69D9', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Nilton Santos<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 5<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('83E4A651E3922F43549F642A40EF69D9', 'pt/produtos/status/0/baby-look-1')"><span class="ico-default-eye status-return-83E4A651E3922F43549F642A40EF69D9 " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/baby-look-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('83E4A651E3922F43549F642A40EF69D9', 'pt/produtos/editar-textarea/baby-look-1')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/baby-look-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('83E4A651E3922F43549F642A40EF69D9', 'pt/produtos/delete/baby-look-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-83E4A651E3922F43549F642A40EF69D9"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-83E4A651E3922F43549F642A40EF69D9"></td>
                                                        <td></td>
                                                        <td class="fotos-83E4A651E3922F43549F642A40EF69D9"></td>
                                                        <td class="delete-83E4A651E3922F43549F642A40EF69D9"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-83E4A651E3922F43549F642A40EF69D9 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Baby Look" title="Baby Look"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-83E4A651E3922F43549F642A40EF69D9 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Baby Look" title="Baby Look"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-83E4A651E3922F43549F642A40EF69D9 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Baby Look" title="Baby Look"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-83E4A651E3922F43549F642A40EF69D9 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Baby Look" title="Baby Look"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-007389BFCD29E8C70596B125D01035A9 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('007389BFCD29E8C70596B125D01035A9', 'NS-0004')">
                                                                                                            <img src="/web-files/upload/thumbs/463C5EE97CB22B4CE7ACF9CC2A7FE412/89A83E1EC3E2B6D254F15BC17DA9386F.jpg" border="0" style="width: 80px;" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_007389BFCD29E8C70596B125D01035A9" id="REFERENCIA_007389BFCD29E8C70596B125D01035A9" value="NS-0004"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_007389BFCD29E8C70596B125D01035A9', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_007389BFCD29E8C70596B125D01035A9" id="PRECODE_007389BFCD29E8C70596B125D01035A9" value="189,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_007389BFCD29E8C70596B125D01035A9', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_007389BFCD29E8C70596B125D01035A9" id="PRECOPARA_007389BFCD29E8C70596B125D01035A9" value="139,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_007389BFCD29E8C70596B125D01035A9', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_007389BFCD29E8C70596B125D01035A9" value="Camisa Masculina"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_007389BFCD29E8C70596B125D01035A9', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_007389BFCD29E8C70596B125D01035A9" id="ORDEM_007389BFCD29E8C70596B125D01035A9" value="11" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_007389BFCD29E8C70596B125D01035A9', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Nilton Santos<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 5<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('007389BFCD29E8C70596B125D01035A9', 'pt/produtos/status/0/camisa-masculina-3')"><span class="ico-default-eye status-return-007389BFCD29E8C70596B125D01035A9 " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/camisa-masculina-3"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('007389BFCD29E8C70596B125D01035A9', 'pt/produtos/editar-textarea/camisa-masculina-3')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/camisa-masculina-3"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('007389BFCD29E8C70596B125D01035A9', 'pt/produtos/delete/camisa-masculina-3')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-007389BFCD29E8C70596B125D01035A9"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-007389BFCD29E8C70596B125D01035A9"></td>
                                                        <td></td>
                                                        <td class="fotos-007389BFCD29E8C70596B125D01035A9"></td>
                                                        <td class="delete-007389BFCD29E8C70596B125D01035A9"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-007389BFCD29E8C70596B125D01035A9 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Masculina" title="Camisa Masculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-007389BFCD29E8C70596B125D01035A9 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Masculina" title="Camisa Masculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-007389BFCD29E8C70596B125D01035A9 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Masculina" title="Camisa Masculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-007389BFCD29E8C70596B125D01035A9 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Masculina" title="Camisa Masculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-55109831008FCA21AB975C2DF0604B9C no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('55109831008FCA21AB975C2DF0604B9C', 'NS-0005')">
                                                                                                            <img src="/web-files/upload/thumbs/C6A78CC2D79DBEB1EDA0F1FFC103D941/5CF7F805EF9E826D572B8556B9FC8382.jpg" border="0" style="width: 80px;" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_55109831008FCA21AB975C2DF0604B9C" id="REFERENCIA_55109831008FCA21AB975C2DF0604B9C" value="NS-0005"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_55109831008FCA21AB975C2DF0604B9C', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_55109831008FCA21AB975C2DF0604B9C" id="PRECODE_55109831008FCA21AB975C2DF0604B9C" value="189,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_55109831008FCA21AB975C2DF0604B9C', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_55109831008FCA21AB975C2DF0604B9C" id="PRECOPARA_55109831008FCA21AB975C2DF0604B9C" value="149,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_55109831008FCA21AB975C2DF0604B9C', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_55109831008FCA21AB975C2DF0604B9C" value="Camisa Masculina"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_55109831008FCA21AB975C2DF0604B9C', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_55109831008FCA21AB975C2DF0604B9C" id="ORDEM_55109831008FCA21AB975C2DF0604B9C" value="15" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_55109831008FCA21AB975C2DF0604B9C', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Nilton Santos<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 5<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('55109831008FCA21AB975C2DF0604B9C', 'pt/produtos/status/0/camisa-masculina')"><span class="ico-default-eye status-return-55109831008FCA21AB975C2DF0604B9C " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/camisa-masculina"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('55109831008FCA21AB975C2DF0604B9C', 'pt/produtos/editar-textarea/camisa-masculina')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/camisa-masculina"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('55109831008FCA21AB975C2DF0604B9C', 'pt/produtos/delete/camisa-masculina')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-55109831008FCA21AB975C2DF0604B9C"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-55109831008FCA21AB975C2DF0604B9C"></td>
                                                        <td></td>
                                                        <td class="fotos-55109831008FCA21AB975C2DF0604B9C"></td>
                                                        <td class="delete-55109831008FCA21AB975C2DF0604B9C"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-55109831008FCA21AB975C2DF0604B9C yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Masculina" title="Camisa Masculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-55109831008FCA21AB975C2DF0604B9C yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Masculina" title="Camisa Masculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-55109831008FCA21AB975C2DF0604B9C yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Masculina" title="Camisa Masculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-55109831008FCA21AB975C2DF0604B9C yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Masculina" title="Camisa Masculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-21957ACCA13AFC2F1593984B8882361F no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('21957ACCA13AFC2F1593984B8882361F', 'NS-0006')">
                                                                                                            <img src="/web-files/upload/thumbs/C7251D2F3E8873B1A616BDA85D41D19E/9BEE3E02BCF8853E23202BD701030124.jpg" border="0" style="width: 80px;" alt="Camisa Maculina" title="Camisa Maculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_21957ACCA13AFC2F1593984B8882361F" id="REFERENCIA_21957ACCA13AFC2F1593984B8882361F" value="NS-0006"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_21957ACCA13AFC2F1593984B8882361F', '21957ACCA13AFC2F1593984B8882361F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_21957ACCA13AFC2F1593984B8882361F" id="PRECODE_21957ACCA13AFC2F1593984B8882361F" value="189,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_21957ACCA13AFC2F1593984B8882361F', '21957ACCA13AFC2F1593984B8882361F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_21957ACCA13AFC2F1593984B8882361F" id="PRECOPARA_21957ACCA13AFC2F1593984B8882361F" value="129,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="189,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_21957ACCA13AFC2F1593984B8882361F', '21957ACCA13AFC2F1593984B8882361F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_21957ACCA13AFC2F1593984B8882361F" value="Camisa Maculina"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_21957ACCA13AFC2F1593984B8882361F', '21957ACCA13AFC2F1593984B8882361F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_21957ACCA13AFC2F1593984B8882361F" id="ORDEM_21957ACCA13AFC2F1593984B8882361F" value="16" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_21957ACCA13AFC2F1593984B8882361F', '21957ACCA13AFC2F1593984B8882361F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Nilton Santos<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 10<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('21957ACCA13AFC2F1593984B8882361F', 'pt/produtos/status/0/camisa-maculina')"><span class="ico-default-eye status-return-21957ACCA13AFC2F1593984B8882361F " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/camisa-maculina"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('21957ACCA13AFC2F1593984B8882361F', 'pt/produtos/editar-textarea/camisa-maculina')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/camisa-maculina"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('21957ACCA13AFC2F1593984B8882361F', 'pt/produtos/delete/camisa-maculina')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-21957ACCA13AFC2F1593984B8882361F"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-21957ACCA13AFC2F1593984B8882361F"></td>
                                                        <td></td>
                                                        <td class="fotos-21957ACCA13AFC2F1593984B8882361F"></td>
                                                        <td class="delete-21957ACCA13AFC2F1593984B8882361F"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-21957ACCA13AFC2F1593984B8882361F yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Maculina" title="Camisa Maculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-21957ACCA13AFC2F1593984B8882361F yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Maculina" title="Camisa Maculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-21957ACCA13AFC2F1593984B8882361F yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Maculina" title="Camisa Maculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-21957ACCA13AFC2F1593984B8882361F yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Maculina" title="Camisa Maculina"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-B8BF4574A5A9B8C6F43E990C314D4CD6 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('B8BF4574A5A9B8C6F43E990C314D4CD6', 'NS-0007')">
                                                                                                            <img src="/web-files/upload/thumbs/5D9D16352D52238BC5298FAB8947CAB6/22CE7EC855F41D332F44A8B7407BDCD6.jpg" border="0" style="width: 80px;" alt="Vestido Feminino" title="Vestido Feminino">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_B8BF4574A5A9B8C6F43E990C314D4CD6" id="REFERENCIA_B8BF4574A5A9B8C6F43E990C314D4CD6" value="NS-0007"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_B8BF4574A5A9B8C6F43E990C314D4CD6', 'B8BF4574A5A9B8C6F43E990C314D4CD6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_B8BF4574A5A9B8C6F43E990C314D4CD6" id="PRECODE_B8BF4574A5A9B8C6F43E990C314D4CD6" value="159,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="159,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_B8BF4574A5A9B8C6F43E990C314D4CD6', 'B8BF4574A5A9B8C6F43E990C314D4CD6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_B8BF4574A5A9B8C6F43E990C314D4CD6" id="PRECOPARA_B8BF4574A5A9B8C6F43E990C314D4CD6" value="129,90" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="159,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_B8BF4574A5A9B8C6F43E990C314D4CD6', 'B8BF4574A5A9B8C6F43E990C314D4CD6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_B8BF4574A5A9B8C6F43E990C314D4CD6" value="Vestido Feminino"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_B8BF4574A5A9B8C6F43E990C314D4CD6', 'B8BF4574A5A9B8C6F43E990C314D4CD6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_B8BF4574A5A9B8C6F43E990C314D4CD6" id="ORDEM_B8BF4574A5A9B8C6F43E990C314D4CD6" value="17" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_B8BF4574A5A9B8C6F43E990C314D4CD6', 'B8BF4574A5A9B8C6F43E990C314D4CD6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Nilton Santos<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 10<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('B8BF4574A5A9B8C6F43E990C314D4CD6', 'pt/produtos/status/0/vestido-feminino-botafogo')"><span class="ico-default-eye status-return-B8BF4574A5A9B8C6F43E990C314D4CD6 " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/vestido-feminino-botafogo"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('B8BF4574A5A9B8C6F43E990C314D4CD6', 'pt/produtos/editar-textarea/vestido-feminino-botafogo')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/vestido-feminino-botafogo"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('B8BF4574A5A9B8C6F43E990C314D4CD6', 'pt/produtos/delete/vestido-feminino-botafogo')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-B8BF4574A5A9B8C6F43E990C314D4CD6"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-B8BF4574A5A9B8C6F43E990C314D4CD6"></td>
                                                        <td></td>
                                                        <td class="fotos-B8BF4574A5A9B8C6F43E990C314D4CD6"></td>
                                                        <td class="delete-B8BF4574A5A9B8C6F43E990C314D4CD6"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-B8BF4574A5A9B8C6F43E990C314D4CD6 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Vestido Feminino" title="Vestido Feminino"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-B8BF4574A5A9B8C6F43E990C314D4CD6 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Vestido Feminino" title="Vestido Feminino"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-B8BF4574A5A9B8C6F43E990C314D4CD6 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Vestido Feminino" title="Vestido Feminino"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr  class="delete-return-882E2425161B6763ED2156046FFC95C6 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('882E2425161B6763ED2156046FFC95C6', 'NS-0008')">
                                                                                                            <img src="/web-files/upload/thumbs/2DE574B63EDF63D742B5098C7E63DE54/47BD65A943B27375F225C8E10EBC5525.jpg" border="0" style="width: 80px;" alt="Camisa Feminina Regata" title="Camisa Feminina Regata">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_882E2425161B6763ED2156046FFC95C6" id="REFERENCIA_882E2425161B6763ED2156046FFC95C6" value="NS-0008"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_882E2425161B6763ED2156046FFC95C6', '882E2425161B6763ED2156046FFC95C6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_882E2425161B6763ED2156046FFC95C6" id="PRECODE_882E2425161B6763ED2156046FFC95C6" value="159,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="159,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_882E2425161B6763ED2156046FFC95C6', '882E2425161B6763ED2156046FFC95C6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_882E2425161B6763ED2156046FFC95C6" id="PRECOPARA_882E2425161B6763ED2156046FFC95C6" value="99,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="159,00" />
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_882E2425161B6763ED2156046FFC95C6', '882E2425161B6763ED2156046FFC95C6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_882E2425161B6763ED2156046FFC95C6" value="Camisa Feminina Regata"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_882E2425161B6763ED2156046FFC95C6', '882E2425161B6763ED2156046FFC95C6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_882E2425161B6763ED2156046FFC95C6" id="ORDEM_882E2425161B6763ED2156046FFC95C6" value="18" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_882E2425161B6763ED2156046FFC95C6', '882E2425161B6763ED2156046FFC95C6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> Nilton Santos<br/>
                                                <b>Peso: </b> 0.300Kg.<br/>
                                                <b>Quantidade: </b> 10<br/>
                                                <b>Preço Unitário: </b> <br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('882E2425161B6763ED2156046FFC95C6', 'pt/produtos/status/0/camisa-feminina-regata')"><span class="ico-default-eye status-return-882E2425161B6763ED2156046FFC95C6 " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/pt/produtos/editar/camisa-feminina-regata"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('882E2425161B6763ED2156046FFC95C6', 'pt/produtos/editar-textarea/camisa-feminina-regata')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/pt/produtos/fotos/camisa-feminina-regata"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('882E2425161B6763ED2156046FFC95C6', 'pt/produtos/delete/camisa-feminina-regata')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-882E2425161B6763ED2156046FFC95C6"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-882E2425161B6763ED2156046FFC95C6"></td>
                                                        <td></td>
                                                        <td class="fotos-882E2425161B6763ED2156046FFC95C6"></td>
                                                        <td class="delete-882E2425161B6763ED2156046FFC95C6"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-882E2425161B6763ED2156046FFC95C6 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Feminina Regata" title="Camisa Feminina Regata"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-882E2425161B6763ED2156046FFC95C6 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Feminina Regata" title="Camisa Feminina Regata"></td>
                                        </tr>
                                                                            
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                

                                        

                                                                                <tr class="delete-return-882E2425161B6763ED2156046FFC95C6 yes hide">
                                            <td colspan="9"><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="Camisa Feminina Regata" title="Camisa Feminina Regata"></td>
                                        </tr>
                                                                            
                                
                            </table>
                        </div>

                    </div>
                </div>
            </div>
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

        theme_advanced_buttons1: "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,fontsizeselect",
        theme_advanced_buttons2: "",
        theme_advanced_buttons3: "",
        theme_advanced_buttons4: "",
        theme_advanced_toolbar_location: "top",
        theme_advanced_toolbar_align: "center",
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
<?php }} ?>

<?php /*%%SmartyHeaderCode:1544778152550daafe762434-90482835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd41feb777bd992c38469fb277508ae1a9491b81' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/estoque.tpl',
      1 => 1425503102,
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
  'nocache_hash' => '1544778152550daafe762434-90482835',
  'variables' => 
  array (
    'language' => 0,
    'categoria' => 0,
    'qtdd_junior' => 0,
    'qtdd_brincos' => 0,
    'total_produtos' => 0,
    'ERRO_NAO_EXISTE_PRODUTOS' => 0,
    'meus_produtos' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550daafed63f48_11086363',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550daafed63f48_11086363')) {function content_550daafed63f48_11086363($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Lista de Estoque</title>

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
        <a class="navbar-brand" href="/pt/admin/welcome">admin@admin.com</a>
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
            <li ><a href="/pt/produtos/produtos-lista">
                    <i class="fa fa-paper-plane"></i> Produtos</a>
            </li> 
            <li >
                <a href="/pt/pedidos/pedidos-lista"><i class="fa fa-file-text"></i> Pedidos</a>
            </li>
            <li >
                <a href="/pt/conta/lista"><i class="fa fa-users"></i> Clientes</a>
            </li>
            <li  class="active">
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
                <a href="/pt/nota-fiscal/exportar" style="position: relative;"><i class="fa fa-expand"></i> Exportar Nota Fiscal <span class="btn btn-sm btn-danger aviso-balao">13</span> </a>
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
            Lista de Produtos em Estoque
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/pt/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Produtos em Estoque
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
                                        <td>Junior</td><td>8</td>
                                    </tr>
                                    <tr>
                                        <td>Nilton Santos</td><td></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Geral</strong></td><td>13</td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br/>
        <a href="/pt/produtos/exportar-estoque-xls" class="btn btn-lg btn-success" target="_blank"><i class="fa fa-exchange"></i> Exportar estoque</a>

        <div class="panel-default showEstoque">

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

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Estoque</h3>
                        </div>
                        <div class="panel-body">
                            <table class='table'>
                                <thead>
                                <th>#</th>
                                <th>Referência</th>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th style="width: 10%;">Peso/Kg.</th>
                                <th style="width: 10%;">Quantidade</th>
                                <th style="width: 10%;">Preço<br/>Final do Produto<br/>por Unidade</th>
                                <th style="width: 10%;">Preço<br/>Unitário de Compra<br/>do Produto</th>
                                <th style="width: 10%;">Total da Compra</th>
                                </thead>

                                
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-D6035AC02FE669D1AC9FA96170F086C8 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('D6035AC02FE669D1AC9FA96170F086C8', 'J-0001')">
                                                                                                            <img src="/web-files/upload/thumbs/973138E4C42FC8DE93BE75154A36066D/DFD2849389AE35FE9885D969BF6748C2.jpg" border="0" alt="Camisa 60 Anos" title="Camisa 60 Anos">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0001</td>
                                            <td>Camisa 60 Anos<br/><b>Tamanho: </b> P - Pequena</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_D6035AC02FE669D1AC9FA96170F086C8" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_D6035AC02FE669D1AC9FA96170F086C8', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_45459413067B1DF9914631C764527E91" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '45459413067B1DF9914631C764527E91')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="45459413067B1DF9914631C764527E91" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_45459413067B1DF9914631C764527E91', '45459413067B1DF9914631C764527E91','D6035AC02FE669D1AC9FA96170F086C8', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="69,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_D6035AC02FE669D1AC9FA96170F086C8" id="pName_45459413067B1DF9914631C764527E91" value="50,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_45459413067B1DF9914631C764527E91', '45459413067B1DF9914631C764527E91', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_45459413067B1DF9914631C764527E91" name="PRECOCOMPRA_D6035AC02FE669D1AC9FA96170F086C8" id="PRECOCOMPRA_45459413067B1DF9914631C764527E91"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="500,00" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-D6035AC02FE669D1AC9FA96170F086C8 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('D6035AC02FE669D1AC9FA96170F086C8', 'J-0001')">
                                                                                                            <img src="/web-files/upload/thumbs/973138E4C42FC8DE93BE75154A36066D/DFD2849389AE35FE9885D969BF6748C2.jpg" border="0" alt="Camisa 60 Anos" title="Camisa 60 Anos">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0001</td>
                                            <td>Camisa 60 Anos<br/><b>Tamanho: </b> M - Média</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_D6035AC02FE669D1AC9FA96170F086C8" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_D6035AC02FE669D1AC9FA96170F086C8', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_5B32BB8001295BF4F752EA400A458E41" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '5B32BB8001295BF4F752EA400A458E41')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="5B32BB8001295BF4F752EA400A458E41" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_5B32BB8001295BF4F752EA400A458E41', '5B32BB8001295BF4F752EA400A458E41','D6035AC02FE669D1AC9FA96170F086C8', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="69,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_D6035AC02FE669D1AC9FA96170F086C8" id="pName_5B32BB8001295BF4F752EA400A458E41" value="50,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_5B32BB8001295BF4F752EA400A458E41', '5B32BB8001295BF4F752EA400A458E41', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_5B32BB8001295BF4F752EA400A458E41" name="PRECOCOMPRA_D6035AC02FE669D1AC9FA96170F086C8" id="PRECOCOMPRA_5B32BB8001295BF4F752EA400A458E41"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="50,00" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-D6035AC02FE669D1AC9FA96170F086C8 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('D6035AC02FE669D1AC9FA96170F086C8', 'J-0001')">
                                                                                                            <img src="/web-files/upload/thumbs/973138E4C42FC8DE93BE75154A36066D/DFD2849389AE35FE9885D969BF6748C2.jpg" border="0" alt="Camisa 60 Anos" title="Camisa 60 Anos">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0001</td>
                                            <td>Camisa 60 Anos<br/><b>Tamanho: </b> G - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_D6035AC02FE669D1AC9FA96170F086C8" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_D6035AC02FE669D1AC9FA96170F086C8', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_6059188C27FCEAD5E9AC6FA442270430" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '6059188C27FCEAD5E9AC6FA442270430')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="6059188C27FCEAD5E9AC6FA442270430" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_6059188C27FCEAD5E9AC6FA442270430', '6059188C27FCEAD5E9AC6FA442270430','D6035AC02FE669D1AC9FA96170F086C8', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="69,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_D6035AC02FE669D1AC9FA96170F086C8" id="pName_6059188C27FCEAD5E9AC6FA442270430" value="50,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_6059188C27FCEAD5E9AC6FA442270430', '6059188C27FCEAD5E9AC6FA442270430', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_6059188C27FCEAD5E9AC6FA442270430" name="PRECOCOMPRA_D6035AC02FE669D1AC9FA96170F086C8" id="PRECOCOMPRA_6059188C27FCEAD5E9AC6FA442270430"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="50,00" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-D6035AC02FE669D1AC9FA96170F086C8 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('D6035AC02FE669D1AC9FA96170F086C8', 'J-0001')">
                                                                                                            <img src="/web-files/upload/thumbs/973138E4C42FC8DE93BE75154A36066D/DFD2849389AE35FE9885D969BF6748C2.jpg" border="0" alt="Camisa 60 Anos" title="Camisa 60 Anos">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0001</td>
                                            <td>Camisa 60 Anos<br/><b>Tamanho: </b> GG - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_D6035AC02FE669D1AC9FA96170F086C8" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_D6035AC02FE669D1AC9FA96170F086C8', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_C28A8376761146AAAB3194B5ACD1BE8F" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'C28A8376761146AAAB3194B5ACD1BE8F')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="C28A8376761146AAAB3194B5ACD1BE8F" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_C28A8376761146AAAB3194B5ACD1BE8F', 'C28A8376761146AAAB3194B5ACD1BE8F','D6035AC02FE669D1AC9FA96170F086C8', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="69,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_D6035AC02FE669D1AC9FA96170F086C8" id="pName_C28A8376761146AAAB3194B5ACD1BE8F" value="50,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_C28A8376761146AAAB3194B5ACD1BE8F', 'C28A8376761146AAAB3194B5ACD1BE8F', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_C28A8376761146AAAB3194B5ACD1BE8F" name="PRECOCOMPRA_D6035AC02FE669D1AC9FA96170F086C8" id="PRECOCOMPRA_C28A8376761146AAAB3194B5ACD1BE8F"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="50,00" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-D6035AC02FE669D1AC9FA96170F086C8 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('D6035AC02FE669D1AC9FA96170F086C8', 'J-0001')">
                                                                                                            <img src="/web-files/upload/thumbs/973138E4C42FC8DE93BE75154A36066D/DFD2849389AE35FE9885D969BF6748C2.jpg" border="0" alt="Camisa 60 Anos" title="Camisa 60 Anos">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0001</td>
                                            <td>Camisa 60 Anos<br/><b>Tamanho: </b> XG - Extra Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_D6035AC02FE669D1AC9FA96170F086C8" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_D6035AC02FE669D1AC9FA96170F086C8', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_F7F60E201B494C04738BEE4346FF29B1" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'F7F60E201B494C04738BEE4346FF29B1')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="F7F60E201B494C04738BEE4346FF29B1" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_F7F60E201B494C04738BEE4346FF29B1', 'F7F60E201B494C04738BEE4346FF29B1','D6035AC02FE669D1AC9FA96170F086C8', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="69,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_D6035AC02FE669D1AC9FA96170F086C8" id="pName_F7F60E201B494C04738BEE4346FF29B1" value="50,00" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_F7F60E201B494C04738BEE4346FF29B1', 'F7F60E201B494C04738BEE4346FF29B1', 'D6035AC02FE669D1AC9FA96170F086C8')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_F7F60E201B494C04738BEE4346FF29B1" name="PRECOCOMPRA_D6035AC02FE669D1AC9FA96170F086C8" id="PRECOCOMPRA_F7F60E201B494C04738BEE4346FF29B1"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="50,00" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-2A5B5F9F7B309CC071BEE1D49CE92998 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('2A5B5F9F7B309CC071BEE1D49CE92998', 'J-0002')">
                                                                                                            <img src="/web-files/upload/thumbs/750415743A21A447C579AF4FE8C5B5DD/BD7799E93BA78624F2ADC15E3C091FDD.jpg" border="0" alt="Baby Look" title="Baby Look">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0002</td>
                                            <td>Baby Look<br/><b>Tamanho: </b> P - Pequena</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_2A5B5F9F7B309CC071BEE1D49CE92998" value="0.000" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_2A5B5F9F7B309CC071BEE1D49CE92998', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_618C1D556E74308E6E1DC0A9B72C23C9" value="0" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '618C1D556E74308E6E1DC0A9B72C23C9')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="618C1D556E74308E6E1DC0A9B72C23C9" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_618C1D556E74308E6E1DC0A9B72C23C9', '618C1D556E74308E6E1DC0A9B72C23C9','2A5B5F9F7B309CC071BEE1D49CE92998', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_2A5B5F9F7B309CC071BEE1D49CE92998" id="pName_618C1D556E74308E6E1DC0A9B72C23C9" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_618C1D556E74308E6E1DC0A9B72C23C9', '618C1D556E74308E6E1DC0A9B72C23C9', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_618C1D556E74308E6E1DC0A9B72C23C9" name="PRECOCOMPRA_2A5B5F9F7B309CC071BEE1D49CE92998" id="PRECOCOMPRA_618C1D556E74308E6E1DC0A9B72C23C9"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-2A5B5F9F7B309CC071BEE1D49CE92998 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('2A5B5F9F7B309CC071BEE1D49CE92998', 'J-0002')">
                                                                                                            <img src="/web-files/upload/thumbs/750415743A21A447C579AF4FE8C5B5DD/BD7799E93BA78624F2ADC15E3C091FDD.jpg" border="0" alt="Baby Look" title="Baby Look">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0002</td>
                                            <td>Baby Look<br/><b>Tamanho: </b> M - Média</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_2A5B5F9F7B309CC071BEE1D49CE92998" value="0.000" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_2A5B5F9F7B309CC071BEE1D49CE92998', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_BE6A1D6217903F6D25B4D5BA2B634EDF" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'BE6A1D6217903F6D25B4D5BA2B634EDF')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="BE6A1D6217903F6D25B4D5BA2B634EDF" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_BE6A1D6217903F6D25B4D5BA2B634EDF', 'BE6A1D6217903F6D25B4D5BA2B634EDF','2A5B5F9F7B309CC071BEE1D49CE92998', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_2A5B5F9F7B309CC071BEE1D49CE92998" id="pName_BE6A1D6217903F6D25B4D5BA2B634EDF" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_BE6A1D6217903F6D25B4D5BA2B634EDF', 'BE6A1D6217903F6D25B4D5BA2B634EDF', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_BE6A1D6217903F6D25B4D5BA2B634EDF" name="PRECOCOMPRA_2A5B5F9F7B309CC071BEE1D49CE92998" id="PRECOCOMPRA_BE6A1D6217903F6D25B4D5BA2B634EDF"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-2A5B5F9F7B309CC071BEE1D49CE92998 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('2A5B5F9F7B309CC071BEE1D49CE92998', 'J-0002')">
                                                                                                            <img src="/web-files/upload/thumbs/750415743A21A447C579AF4FE8C5B5DD/BD7799E93BA78624F2ADC15E3C091FDD.jpg" border="0" alt="Baby Look" title="Baby Look">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0002</td>
                                            <td>Baby Look<br/><b>Tamanho: </b> G - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_2A5B5F9F7B309CC071BEE1D49CE92998" value="0.000" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_2A5B5F9F7B309CC071BEE1D49CE92998', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_98EBCBE3A379229BAE9A7DEE13A5DBAB" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '98EBCBE3A379229BAE9A7DEE13A5DBAB')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="98EBCBE3A379229BAE9A7DEE13A5DBAB" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_98EBCBE3A379229BAE9A7DEE13A5DBAB', '98EBCBE3A379229BAE9A7DEE13A5DBAB','2A5B5F9F7B309CC071BEE1D49CE92998', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_2A5B5F9F7B309CC071BEE1D49CE92998" id="pName_98EBCBE3A379229BAE9A7DEE13A5DBAB" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_98EBCBE3A379229BAE9A7DEE13A5DBAB', '98EBCBE3A379229BAE9A7DEE13A5DBAB', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_98EBCBE3A379229BAE9A7DEE13A5DBAB" name="PRECOCOMPRA_2A5B5F9F7B309CC071BEE1D49CE92998" id="PRECOCOMPRA_98EBCBE3A379229BAE9A7DEE13A5DBAB"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-2A5B5F9F7B309CC071BEE1D49CE92998 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('2A5B5F9F7B309CC071BEE1D49CE92998', 'J-0002')">
                                                                                                            <img src="/web-files/upload/thumbs/750415743A21A447C579AF4FE8C5B5DD/BD7799E93BA78624F2ADC15E3C091FDD.jpg" border="0" alt="Baby Look" title="Baby Look">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0002</td>
                                            <td>Baby Look<br/><b>Tamanho: </b> GG - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_2A5B5F9F7B309CC071BEE1D49CE92998" value="0.000" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_2A5B5F9F7B309CC071BEE1D49CE92998', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_CE2AEB66CFCEF10E0CD2C000A5E8F747" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'CE2AEB66CFCEF10E0CD2C000A5E8F747')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="CE2AEB66CFCEF10E0CD2C000A5E8F747" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_CE2AEB66CFCEF10E0CD2C000A5E8F747', 'CE2AEB66CFCEF10E0CD2C000A5E8F747','2A5B5F9F7B309CC071BEE1D49CE92998', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_2A5B5F9F7B309CC071BEE1D49CE92998" id="pName_CE2AEB66CFCEF10E0CD2C000A5E8F747" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_CE2AEB66CFCEF10E0CD2C000A5E8F747', 'CE2AEB66CFCEF10E0CD2C000A5E8F747', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_CE2AEB66CFCEF10E0CD2C000A5E8F747" name="PRECOCOMPRA_2A5B5F9F7B309CC071BEE1D49CE92998" id="PRECOCOMPRA_CE2AEB66CFCEF10E0CD2C000A5E8F747"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-2A5B5F9F7B309CC071BEE1D49CE92998 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('2A5B5F9F7B309CC071BEE1D49CE92998', 'J-0002')">
                                                                                                            <img src="/web-files/upload/thumbs/750415743A21A447C579AF4FE8C5B5DD/BD7799E93BA78624F2ADC15E3C091FDD.jpg" border="0" alt="Baby Look" title="Baby Look">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0002</td>
                                            <td>Baby Look<br/><b>Tamanho: </b> XG - Extra Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_2A5B5F9F7B309CC071BEE1D49CE92998" value="0.000" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_2A5B5F9F7B309CC071BEE1D49CE92998', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_AC814A0B22EE289839AEAC2845F5E1F9" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'AC814A0B22EE289839AEAC2845F5E1F9')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="AC814A0B22EE289839AEAC2845F5E1F9" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_AC814A0B22EE289839AEAC2845F5E1F9', 'AC814A0B22EE289839AEAC2845F5E1F9','2A5B5F9F7B309CC071BEE1D49CE92998', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_2A5B5F9F7B309CC071BEE1D49CE92998" id="pName_AC814A0B22EE289839AEAC2845F5E1F9" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_AC814A0B22EE289839AEAC2845F5E1F9', 'AC814A0B22EE289839AEAC2845F5E1F9', '2A5B5F9F7B309CC071BEE1D49CE92998')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_AC814A0B22EE289839AEAC2845F5E1F9" name="PRECOCOMPRA_2A5B5F9F7B309CC071BEE1D49CE92998" id="PRECOCOMPRA_AC814A0B22EE289839AEAC2845F5E1F9"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-4D8F2A4C874712676CD2B07543BBFC2A no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('4D8F2A4C874712676CD2B07543BBFC2A', 'J-0003')">
                                                                                                            <img src="/web-files/upload/thumbs/76113C320B29F99D44696C3BBEC37C5C/71DCDD554D904D6279447CF5D7EA4166.jpg" border="0" alt="Camisa Regata" title="Camisa Regata">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0003</td>
                                            <td>Camisa Regata<br/><b>Tamanho: </b> P - Pequena</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_4D8F2A4C874712676CD2B07543BBFC2A" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_4D8F2A4C874712676CD2B07543BBFC2A', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_17B011E1FE43C1A15C3F7ABFE6BCD51F" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '17B011E1FE43C1A15C3F7ABFE6BCD51F')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="17B011E1FE43C1A15C3F7ABFE6BCD51F" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_17B011E1FE43C1A15C3F7ABFE6BCD51F', '17B011E1FE43C1A15C3F7ABFE6BCD51F','4D8F2A4C874712676CD2B07543BBFC2A', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_4D8F2A4C874712676CD2B07543BBFC2A" id="pName_17B011E1FE43C1A15C3F7ABFE6BCD51F" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_17B011E1FE43C1A15C3F7ABFE6BCD51F', '17B011E1FE43C1A15C3F7ABFE6BCD51F', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_17B011E1FE43C1A15C3F7ABFE6BCD51F" name="PRECOCOMPRA_4D8F2A4C874712676CD2B07543BBFC2A" id="PRECOCOMPRA_17B011E1FE43C1A15C3F7ABFE6BCD51F"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-4D8F2A4C874712676CD2B07543BBFC2A no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('4D8F2A4C874712676CD2B07543BBFC2A', 'J-0003')">
                                                                                                            <img src="/web-files/upload/thumbs/76113C320B29F99D44696C3BBEC37C5C/71DCDD554D904D6279447CF5D7EA4166.jpg" border="0" alt="Camisa Regata" title="Camisa Regata">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0003</td>
                                            <td>Camisa Regata<br/><b>Tamanho: </b> M - Média</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_4D8F2A4C874712676CD2B07543BBFC2A" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_4D8F2A4C874712676CD2B07543BBFC2A', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_2442D7F8944F53E11F6ACF8F9F472068" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '2442D7F8944F53E11F6ACF8F9F472068')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="2442D7F8944F53E11F6ACF8F9F472068" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_2442D7F8944F53E11F6ACF8F9F472068', '2442D7F8944F53E11F6ACF8F9F472068','4D8F2A4C874712676CD2B07543BBFC2A', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_4D8F2A4C874712676CD2B07543BBFC2A" id="pName_2442D7F8944F53E11F6ACF8F9F472068" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_2442D7F8944F53E11F6ACF8F9F472068', '2442D7F8944F53E11F6ACF8F9F472068', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_2442D7F8944F53E11F6ACF8F9F472068" name="PRECOCOMPRA_4D8F2A4C874712676CD2B07543BBFC2A" id="PRECOCOMPRA_2442D7F8944F53E11F6ACF8F9F472068"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-4D8F2A4C874712676CD2B07543BBFC2A no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('4D8F2A4C874712676CD2B07543BBFC2A', 'J-0003')">
                                                                                                            <img src="/web-files/upload/thumbs/76113C320B29F99D44696C3BBEC37C5C/71DCDD554D904D6279447CF5D7EA4166.jpg" border="0" alt="Camisa Regata" title="Camisa Regata">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0003</td>
                                            <td>Camisa Regata<br/><b>Tamanho: </b> G - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_4D8F2A4C874712676CD2B07543BBFC2A" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_4D8F2A4C874712676CD2B07543BBFC2A', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_73D0BFBB2545AE343A5E67D62EE30505" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '73D0BFBB2545AE343A5E67D62EE30505')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="73D0BFBB2545AE343A5E67D62EE30505" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_73D0BFBB2545AE343A5E67D62EE30505', '73D0BFBB2545AE343A5E67D62EE30505','4D8F2A4C874712676CD2B07543BBFC2A', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_4D8F2A4C874712676CD2B07543BBFC2A" id="pName_73D0BFBB2545AE343A5E67D62EE30505" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_73D0BFBB2545AE343A5E67D62EE30505', '73D0BFBB2545AE343A5E67D62EE30505', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_73D0BFBB2545AE343A5E67D62EE30505" name="PRECOCOMPRA_4D8F2A4C874712676CD2B07543BBFC2A" id="PRECOCOMPRA_73D0BFBB2545AE343A5E67D62EE30505"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-4D8F2A4C874712676CD2B07543BBFC2A no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('4D8F2A4C874712676CD2B07543BBFC2A', 'J-0003')">
                                                                                                            <img src="/web-files/upload/thumbs/76113C320B29F99D44696C3BBEC37C5C/71DCDD554D904D6279447CF5D7EA4166.jpg" border="0" alt="Camisa Regata" title="Camisa Regata">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0003</td>
                                            <td>Camisa Regata<br/><b>Tamanho: </b> GG - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_4D8F2A4C874712676CD2B07543BBFC2A" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_4D8F2A4C874712676CD2B07543BBFC2A', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_DDD89987130747C5C08E4595D778BAC9" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'DDD89987130747C5C08E4595D778BAC9')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="DDD89987130747C5C08E4595D778BAC9" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_DDD89987130747C5C08E4595D778BAC9', 'DDD89987130747C5C08E4595D778BAC9','4D8F2A4C874712676CD2B07543BBFC2A', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_4D8F2A4C874712676CD2B07543BBFC2A" id="pName_DDD89987130747C5C08E4595D778BAC9" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_DDD89987130747C5C08E4595D778BAC9', 'DDD89987130747C5C08E4595D778BAC9', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_DDD89987130747C5C08E4595D778BAC9" name="PRECOCOMPRA_4D8F2A4C874712676CD2B07543BBFC2A" id="PRECOCOMPRA_DDD89987130747C5C08E4595D778BAC9"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-4D8F2A4C874712676CD2B07543BBFC2A no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('4D8F2A4C874712676CD2B07543BBFC2A', 'J-0003')">
                                                                                                            <img src="/web-files/upload/thumbs/76113C320B29F99D44696C3BBEC37C5C/71DCDD554D904D6279447CF5D7EA4166.jpg" border="0" alt="Camisa Regata" title="Camisa Regata">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0003</td>
                                            <td>Camisa Regata<br/><b>Tamanho: </b> XG - Extra Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_4D8F2A4C874712676CD2B07543BBFC2A" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_4D8F2A4C874712676CD2B07543BBFC2A', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_C129F8A604DAABEA10E168F67AEC8B84" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'C129F8A604DAABEA10E168F67AEC8B84')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="C129F8A604DAABEA10E168F67AEC8B84" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_C129F8A604DAABEA10E168F67AEC8B84', 'C129F8A604DAABEA10E168F67AEC8B84','4D8F2A4C874712676CD2B07543BBFC2A', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_4D8F2A4C874712676CD2B07543BBFC2A" id="pName_C129F8A604DAABEA10E168F67AEC8B84" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_C129F8A604DAABEA10E168F67AEC8B84', 'C129F8A604DAABEA10E168F67AEC8B84', '4D8F2A4C874712676CD2B07543BBFC2A')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_C129F8A604DAABEA10E168F67AEC8B84" name="PRECOCOMPRA_4D8F2A4C874712676CD2B07543BBFC2A" id="PRECOCOMPRA_C129F8A604DAABEA10E168F67AEC8B84"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-041A0E8131F5EC317CE395D8473E1C99 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('041A0E8131F5EC317CE395D8473E1C99', 'J-0004')">
                                                                                                            <img src="/web-files/upload/thumbs/7935BC6345843AFF9E9234597F27825E/6A4BD4C74868D229DF58B142B33C9C8C.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0004</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> P - Pequena</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_041A0E8131F5EC317CE395D8473E1C99" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_041A0E8131F5EC317CE395D8473E1C99', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_585862A588B25A4DE1F9FD19B87D280E" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '585862A588B25A4DE1F9FD19B87D280E')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="585862A588B25A4DE1F9FD19B87D280E" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_585862A588B25A4DE1F9FD19B87D280E', '585862A588B25A4DE1F9FD19B87D280E','041A0E8131F5EC317CE395D8473E1C99', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_041A0E8131F5EC317CE395D8473E1C99" id="pName_585862A588B25A4DE1F9FD19B87D280E" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_585862A588B25A4DE1F9FD19B87D280E', '585862A588B25A4DE1F9FD19B87D280E', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_585862A588B25A4DE1F9FD19B87D280E" name="PRECOCOMPRA_041A0E8131F5EC317CE395D8473E1C99" id="PRECOCOMPRA_585862A588B25A4DE1F9FD19B87D280E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-041A0E8131F5EC317CE395D8473E1C99 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('041A0E8131F5EC317CE395D8473E1C99', 'J-0004')">
                                                                                                            <img src="/web-files/upload/thumbs/7935BC6345843AFF9E9234597F27825E/6A4BD4C74868D229DF58B142B33C9C8C.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0004</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> M - Média</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_041A0E8131F5EC317CE395D8473E1C99" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_041A0E8131F5EC317CE395D8473E1C99', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_BFDE08BBBD23B611FBC3E8C0CE4013C7" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'BFDE08BBBD23B611FBC3E8C0CE4013C7')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="BFDE08BBBD23B611FBC3E8C0CE4013C7" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_BFDE08BBBD23B611FBC3E8C0CE4013C7', 'BFDE08BBBD23B611FBC3E8C0CE4013C7','041A0E8131F5EC317CE395D8473E1C99', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_041A0E8131F5EC317CE395D8473E1C99" id="pName_BFDE08BBBD23B611FBC3E8C0CE4013C7" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_BFDE08BBBD23B611FBC3E8C0CE4013C7', 'BFDE08BBBD23B611FBC3E8C0CE4013C7', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_BFDE08BBBD23B611FBC3E8C0CE4013C7" name="PRECOCOMPRA_041A0E8131F5EC317CE395D8473E1C99" id="PRECOCOMPRA_BFDE08BBBD23B611FBC3E8C0CE4013C7"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-041A0E8131F5EC317CE395D8473E1C99 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('041A0E8131F5EC317CE395D8473E1C99', 'J-0004')">
                                                                                                            <img src="/web-files/upload/thumbs/7935BC6345843AFF9E9234597F27825E/6A4BD4C74868D229DF58B142B33C9C8C.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0004</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> G - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_041A0E8131F5EC317CE395D8473E1C99" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_041A0E8131F5EC317CE395D8473E1C99', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_02B5533A1D634D4A138828B46235BDDD" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '02B5533A1D634D4A138828B46235BDDD')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="02B5533A1D634D4A138828B46235BDDD" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_02B5533A1D634D4A138828B46235BDDD', '02B5533A1D634D4A138828B46235BDDD','041A0E8131F5EC317CE395D8473E1C99', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_041A0E8131F5EC317CE395D8473E1C99" id="pName_02B5533A1D634D4A138828B46235BDDD" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_02B5533A1D634D4A138828B46235BDDD', '02B5533A1D634D4A138828B46235BDDD', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_02B5533A1D634D4A138828B46235BDDD" name="PRECOCOMPRA_041A0E8131F5EC317CE395D8473E1C99" id="PRECOCOMPRA_02B5533A1D634D4A138828B46235BDDD"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-041A0E8131F5EC317CE395D8473E1C99 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('041A0E8131F5EC317CE395D8473E1C99', 'J-0004')">
                                                                                                            <img src="/web-files/upload/thumbs/7935BC6345843AFF9E9234597F27825E/6A4BD4C74868D229DF58B142B33C9C8C.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0004</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> GG - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_041A0E8131F5EC317CE395D8473E1C99" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_041A0E8131F5EC317CE395D8473E1C99', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_4A90DF7D1D4CD9C56358373A1E43B9F7" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '4A90DF7D1D4CD9C56358373A1E43B9F7')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="4A90DF7D1D4CD9C56358373A1E43B9F7" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_4A90DF7D1D4CD9C56358373A1E43B9F7', '4A90DF7D1D4CD9C56358373A1E43B9F7','041A0E8131F5EC317CE395D8473E1C99', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_041A0E8131F5EC317CE395D8473E1C99" id="pName_4A90DF7D1D4CD9C56358373A1E43B9F7" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_4A90DF7D1D4CD9C56358373A1E43B9F7', '4A90DF7D1D4CD9C56358373A1E43B9F7', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_4A90DF7D1D4CD9C56358373A1E43B9F7" name="PRECOCOMPRA_041A0E8131F5EC317CE395D8473E1C99" id="PRECOCOMPRA_4A90DF7D1D4CD9C56358373A1E43B9F7"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-041A0E8131F5EC317CE395D8473E1C99 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('041A0E8131F5EC317CE395D8473E1C99', 'J-0004')">
                                                                                                            <img src="/web-files/upload/thumbs/7935BC6345843AFF9E9234597F27825E/6A4BD4C74868D229DF58B142B33C9C8C.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0004</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> XG - Extra Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_041A0E8131F5EC317CE395D8473E1C99" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_041A0E8131F5EC317CE395D8473E1C99', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_59F5103626AE0409A02BB400C01E09FB" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '59F5103626AE0409A02BB400C01E09FB')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="59F5103626AE0409A02BB400C01E09FB" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_59F5103626AE0409A02BB400C01E09FB', '59F5103626AE0409A02BB400C01E09FB','041A0E8131F5EC317CE395D8473E1C99', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_041A0E8131F5EC317CE395D8473E1C99" id="pName_59F5103626AE0409A02BB400C01E09FB" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_59F5103626AE0409A02BB400C01E09FB', '59F5103626AE0409A02BB400C01E09FB', '041A0E8131F5EC317CE395D8473E1C99')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_59F5103626AE0409A02BB400C01E09FB" name="PRECOCOMPRA_041A0E8131F5EC317CE395D8473E1C99" id="PRECOCOMPRA_59F5103626AE0409A02BB400C01E09FB"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-984A47DDA59A6362B1AD83631457C561 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('984A47DDA59A6362B1AD83631457C561', 'J-0005')">
                                                                                                            <img src="/web-files/upload/thumbs/153BE2386543D55564E93AF47A3D6DE7/29B18F4A62A3B099DAFA43A31149F026.jpg" border="0" alt="Casaco Moletom" title="Casaco Moletom">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0005</td>
                                            <td>Casaco Moletom<br/><b>Tamanho: </b> P - Pequena</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_984A47DDA59A6362B1AD83631457C561" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_984A47DDA59A6362B1AD83631457C561', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_54C315513D5A0B2C05165BEE9F4F49FC" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '54C315513D5A0B2C05165BEE9F4F49FC')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="54C315513D5A0B2C05165BEE9F4F49FC" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_54C315513D5A0B2C05165BEE9F4F49FC', '54C315513D5A0B2C05165BEE9F4F49FC','984A47DDA59A6362B1AD83631457C561', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="269,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_984A47DDA59A6362B1AD83631457C561" id="pName_54C315513D5A0B2C05165BEE9F4F49FC" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_54C315513D5A0B2C05165BEE9F4F49FC', '54C315513D5A0B2C05165BEE9F4F49FC', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_54C315513D5A0B2C05165BEE9F4F49FC" name="PRECOCOMPRA_984A47DDA59A6362B1AD83631457C561" id="PRECOCOMPRA_54C315513D5A0B2C05165BEE9F4F49FC"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-984A47DDA59A6362B1AD83631457C561 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('984A47DDA59A6362B1AD83631457C561', 'J-0005')">
                                                                                                            <img src="/web-files/upload/thumbs/153BE2386543D55564E93AF47A3D6DE7/29B18F4A62A3B099DAFA43A31149F026.jpg" border="0" alt="Casaco Moletom" title="Casaco Moletom">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0005</td>
                                            <td>Casaco Moletom<br/><b>Tamanho: </b> M - Média</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_984A47DDA59A6362B1AD83631457C561" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_984A47DDA59A6362B1AD83631457C561', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_66C18D4394D21AD83DCB150D1F520B97" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '66C18D4394D21AD83DCB150D1F520B97')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="66C18D4394D21AD83DCB150D1F520B97" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_66C18D4394D21AD83DCB150D1F520B97', '66C18D4394D21AD83DCB150D1F520B97','984A47DDA59A6362B1AD83631457C561', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="269,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_984A47DDA59A6362B1AD83631457C561" id="pName_66C18D4394D21AD83DCB150D1F520B97" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_66C18D4394D21AD83DCB150D1F520B97', '66C18D4394D21AD83DCB150D1F520B97', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_66C18D4394D21AD83DCB150D1F520B97" name="PRECOCOMPRA_984A47DDA59A6362B1AD83631457C561" id="PRECOCOMPRA_66C18D4394D21AD83DCB150D1F520B97"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-984A47DDA59A6362B1AD83631457C561 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('984A47DDA59A6362B1AD83631457C561', 'J-0005')">
                                                                                                            <img src="/web-files/upload/thumbs/153BE2386543D55564E93AF47A3D6DE7/29B18F4A62A3B099DAFA43A31149F026.jpg" border="0" alt="Casaco Moletom" title="Casaco Moletom">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0005</td>
                                            <td>Casaco Moletom<br/><b>Tamanho: </b> G - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_984A47DDA59A6362B1AD83631457C561" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_984A47DDA59A6362B1AD83631457C561', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_5916656E403DF8A80A47B2F43C116B1E" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '5916656E403DF8A80A47B2F43C116B1E')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="5916656E403DF8A80A47B2F43C116B1E" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_5916656E403DF8A80A47B2F43C116B1E', '5916656E403DF8A80A47B2F43C116B1E','984A47DDA59A6362B1AD83631457C561', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="269,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_984A47DDA59A6362B1AD83631457C561" id="pName_5916656E403DF8A80A47B2F43C116B1E" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_5916656E403DF8A80A47B2F43C116B1E', '5916656E403DF8A80A47B2F43C116B1E', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_5916656E403DF8A80A47B2F43C116B1E" name="PRECOCOMPRA_984A47DDA59A6362B1AD83631457C561" id="PRECOCOMPRA_5916656E403DF8A80A47B2F43C116B1E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-984A47DDA59A6362B1AD83631457C561 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('984A47DDA59A6362B1AD83631457C561', 'J-0005')">
                                                                                                            <img src="/web-files/upload/thumbs/153BE2386543D55564E93AF47A3D6DE7/29B18F4A62A3B099DAFA43A31149F026.jpg" border="0" alt="Casaco Moletom" title="Casaco Moletom">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0005</td>
                                            <td>Casaco Moletom<br/><b>Tamanho: </b> GG - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_984A47DDA59A6362B1AD83631457C561" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_984A47DDA59A6362B1AD83631457C561', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_323053838B10DE4D5C195B38F7615BBD" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '323053838B10DE4D5C195B38F7615BBD')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="323053838B10DE4D5C195B38F7615BBD" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_323053838B10DE4D5C195B38F7615BBD', '323053838B10DE4D5C195B38F7615BBD','984A47DDA59A6362B1AD83631457C561', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="269,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_984A47DDA59A6362B1AD83631457C561" id="pName_323053838B10DE4D5C195B38F7615BBD" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_323053838B10DE4D5C195B38F7615BBD', '323053838B10DE4D5C195B38F7615BBD', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_323053838B10DE4D5C195B38F7615BBD" name="PRECOCOMPRA_984A47DDA59A6362B1AD83631457C561" id="PRECOCOMPRA_323053838B10DE4D5C195B38F7615BBD"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-984A47DDA59A6362B1AD83631457C561 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('984A47DDA59A6362B1AD83631457C561', 'J-0005')">
                                                                                                            <img src="/web-files/upload/thumbs/153BE2386543D55564E93AF47A3D6DE7/29B18F4A62A3B099DAFA43A31149F026.jpg" border="0" alt="Casaco Moletom" title="Casaco Moletom">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0005</td>
                                            <td>Casaco Moletom<br/><b>Tamanho: </b> XG - Extra Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_984A47DDA59A6362B1AD83631457C561" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_984A47DDA59A6362B1AD83631457C561', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_35F74CFBDB8C3123235EDED7A7F8A511" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '35F74CFBDB8C3123235EDED7A7F8A511')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="35F74CFBDB8C3123235EDED7A7F8A511" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_35F74CFBDB8C3123235EDED7A7F8A511', '35F74CFBDB8C3123235EDED7A7F8A511','984A47DDA59A6362B1AD83631457C561', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="269,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_984A47DDA59A6362B1AD83631457C561" id="pName_35F74CFBDB8C3123235EDED7A7F8A511" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_35F74CFBDB8C3123235EDED7A7F8A511', '35F74CFBDB8C3123235EDED7A7F8A511', '984A47DDA59A6362B1AD83631457C561')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_35F74CFBDB8C3123235EDED7A7F8A511" name="PRECOCOMPRA_984A47DDA59A6362B1AD83631457C561" id="PRECOCOMPRA_35F74CFBDB8C3123235EDED7A7F8A511"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-389AEE333B695B601085D801AAF5138C no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('389AEE333B695B601085D801AAF5138C', 'J-0006')">
                                                                                                            <img src="/web-files/upload/thumbs/7D3AA265BB077626439F121751069152/C6A01CB388BAF2C42BEB77FEE645FA0C.jpg" border="0" alt="Vestido com Manga" title="Vestido com Manga">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0006</td>
                                            <td>Vestido com Manga<br/><b>Tamanho: </b> P - Pequena</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_389AEE333B695B601085D801AAF5138C" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_389AEE333B695B601085D801AAF5138C', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_81913D4A53D4FCD616A117F88218A8F0" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '81913D4A53D4FCD616A117F88218A8F0')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="81913D4A53D4FCD616A117F88218A8F0" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_81913D4A53D4FCD616A117F88218A8F0', '81913D4A53D4FCD616A117F88218A8F0','389AEE333B695B601085D801AAF5138C', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_389AEE333B695B601085D801AAF5138C" id="pName_81913D4A53D4FCD616A117F88218A8F0" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_81913D4A53D4FCD616A117F88218A8F0', '81913D4A53D4FCD616A117F88218A8F0', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_81913D4A53D4FCD616A117F88218A8F0" name="PRECOCOMPRA_389AEE333B695B601085D801AAF5138C" id="PRECOCOMPRA_81913D4A53D4FCD616A117F88218A8F0"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-389AEE333B695B601085D801AAF5138C no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('389AEE333B695B601085D801AAF5138C', 'J-0006')">
                                                                                                            <img src="/web-files/upload/thumbs/7D3AA265BB077626439F121751069152/C6A01CB388BAF2C42BEB77FEE645FA0C.jpg" border="0" alt="Vestido com Manga" title="Vestido com Manga">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0006</td>
                                            <td>Vestido com Manga<br/><b>Tamanho: </b> M - Média</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_389AEE333B695B601085D801AAF5138C" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_389AEE333B695B601085D801AAF5138C', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_A4F38F564E88EA1F1BAF7018270D26F6" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'A4F38F564E88EA1F1BAF7018270D26F6')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="A4F38F564E88EA1F1BAF7018270D26F6" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_A4F38F564E88EA1F1BAF7018270D26F6', 'A4F38F564E88EA1F1BAF7018270D26F6','389AEE333B695B601085D801AAF5138C', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_389AEE333B695B601085D801AAF5138C" id="pName_A4F38F564E88EA1F1BAF7018270D26F6" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_A4F38F564E88EA1F1BAF7018270D26F6', 'A4F38F564E88EA1F1BAF7018270D26F6', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_A4F38F564E88EA1F1BAF7018270D26F6" name="PRECOCOMPRA_389AEE333B695B601085D801AAF5138C" id="PRECOCOMPRA_A4F38F564E88EA1F1BAF7018270D26F6"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-389AEE333B695B601085D801AAF5138C no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('389AEE333B695B601085D801AAF5138C', 'J-0006')">
                                                                                                            <img src="/web-files/upload/thumbs/7D3AA265BB077626439F121751069152/C6A01CB388BAF2C42BEB77FEE645FA0C.jpg" border="0" alt="Vestido com Manga" title="Vestido com Manga">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0006</td>
                                            <td>Vestido com Manga<br/><b>Tamanho: </b> G - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_389AEE333B695B601085D801AAF5138C" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_389AEE333B695B601085D801AAF5138C', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_EB7ACAD0C070843E248A19D46B35626A" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'EB7ACAD0C070843E248A19D46B35626A')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="EB7ACAD0C070843E248A19D46B35626A" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_EB7ACAD0C070843E248A19D46B35626A', 'EB7ACAD0C070843E248A19D46B35626A','389AEE333B695B601085D801AAF5138C', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_389AEE333B695B601085D801AAF5138C" id="pName_EB7ACAD0C070843E248A19D46B35626A" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_EB7ACAD0C070843E248A19D46B35626A', 'EB7ACAD0C070843E248A19D46B35626A', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_EB7ACAD0C070843E248A19D46B35626A" name="PRECOCOMPRA_389AEE333B695B601085D801AAF5138C" id="PRECOCOMPRA_EB7ACAD0C070843E248A19D46B35626A"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-389AEE333B695B601085D801AAF5138C no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('389AEE333B695B601085D801AAF5138C', 'J-0006')">
                                                                                                            <img src="/web-files/upload/thumbs/7D3AA265BB077626439F121751069152/C6A01CB388BAF2C42BEB77FEE645FA0C.jpg" border="0" alt="Vestido com Manga" title="Vestido com Manga">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0006</td>
                                            <td>Vestido com Manga<br/><b>Tamanho: </b> GG - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_389AEE333B695B601085D801AAF5138C" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_389AEE333B695B601085D801AAF5138C', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_7DA8F24810DC0A06DFF5F510B4C15477" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '7DA8F24810DC0A06DFF5F510B4C15477')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="7DA8F24810DC0A06DFF5F510B4C15477" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_7DA8F24810DC0A06DFF5F510B4C15477', '7DA8F24810DC0A06DFF5F510B4C15477','389AEE333B695B601085D801AAF5138C', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_389AEE333B695B601085D801AAF5138C" id="pName_7DA8F24810DC0A06DFF5F510B4C15477" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_7DA8F24810DC0A06DFF5F510B4C15477', '7DA8F24810DC0A06DFF5F510B4C15477', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_7DA8F24810DC0A06DFF5F510B4C15477" name="PRECOCOMPRA_389AEE333B695B601085D801AAF5138C" id="PRECOCOMPRA_7DA8F24810DC0A06DFF5F510B4C15477"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-389AEE333B695B601085D801AAF5138C no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('389AEE333B695B601085D801AAF5138C', 'J-0006')">
                                                                                                            <img src="/web-files/upload/thumbs/7D3AA265BB077626439F121751069152/C6A01CB388BAF2C42BEB77FEE645FA0C.jpg" border="0" alt="Vestido com Manga" title="Vestido com Manga">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0006</td>
                                            <td>Vestido com Manga<br/><b>Tamanho: </b> XG - Extra Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_389AEE333B695B601085D801AAF5138C" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_389AEE333B695B601085D801AAF5138C', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_EAB53EDFE2646CE7D9E6B52DBAE0AA59" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'EAB53EDFE2646CE7D9E6B52DBAE0AA59')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="EAB53EDFE2646CE7D9E6B52DBAE0AA59" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_EAB53EDFE2646CE7D9E6B52DBAE0AA59', 'EAB53EDFE2646CE7D9E6B52DBAE0AA59','389AEE333B695B601085D801AAF5138C', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_389AEE333B695B601085D801AAF5138C" id="pName_EAB53EDFE2646CE7D9E6B52DBAE0AA59" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_EAB53EDFE2646CE7D9E6B52DBAE0AA59', 'EAB53EDFE2646CE7D9E6B52DBAE0AA59', '389AEE333B695B601085D801AAF5138C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_EAB53EDFE2646CE7D9E6B52DBAE0AA59" name="PRECOCOMPRA_389AEE333B695B601085D801AAF5138C" id="PRECOCOMPRA_EAB53EDFE2646CE7D9E6B52DBAE0AA59"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-C52B80CCA47D7DDFEC063B2D4B96A11F no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('C52B80CCA47D7DDFEC063B2D4B96A11F', 'J-0007')">
                                                                                                            <img src="/web-files/upload/thumbs/E83BAE62D37EB5069926326787E671D6/43A0BB4E14DEE24A228C1AC16096186C.jpg" border="0" alt="Vestido sem Manga" title="Vestido sem Manga">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0007</td>
                                            <td>Vestido sem Manga<br/><b>Tamanho: </b> P - Pequena</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_C52B80CCA47D7DDFEC063B2D4B96A11F" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_C52B80CCA47D7DDFEC063B2D4B96A11F', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_FCEE28294EC261B476D2BD47CA97EAA0" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'FCEE28294EC261B476D2BD47CA97EAA0')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="FCEE28294EC261B476D2BD47CA97EAA0" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_FCEE28294EC261B476D2BD47CA97EAA0', 'FCEE28294EC261B476D2BD47CA97EAA0','C52B80CCA47D7DDFEC063B2D4B96A11F', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_C52B80CCA47D7DDFEC063B2D4B96A11F" id="pName_FCEE28294EC261B476D2BD47CA97EAA0" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_FCEE28294EC261B476D2BD47CA97EAA0', 'FCEE28294EC261B476D2BD47CA97EAA0', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_FCEE28294EC261B476D2BD47CA97EAA0" name="PRECOCOMPRA_C52B80CCA47D7DDFEC063B2D4B96A11F" id="PRECOCOMPRA_FCEE28294EC261B476D2BD47CA97EAA0"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-C52B80CCA47D7DDFEC063B2D4B96A11F no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('C52B80CCA47D7DDFEC063B2D4B96A11F', 'J-0007')">
                                                                                                            <img src="/web-files/upload/thumbs/E83BAE62D37EB5069926326787E671D6/43A0BB4E14DEE24A228C1AC16096186C.jpg" border="0" alt="Vestido sem Manga" title="Vestido sem Manga">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0007</td>
                                            <td>Vestido sem Manga<br/><b>Tamanho: </b> M - Média</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_C52B80CCA47D7DDFEC063B2D4B96A11F" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_C52B80CCA47D7DDFEC063B2D4B96A11F', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_0C7EE98A78FFFD50998AE3D2DFFC45EC" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '0C7EE98A78FFFD50998AE3D2DFFC45EC')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="0C7EE98A78FFFD50998AE3D2DFFC45EC" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_0C7EE98A78FFFD50998AE3D2DFFC45EC', '0C7EE98A78FFFD50998AE3D2DFFC45EC','C52B80CCA47D7DDFEC063B2D4B96A11F', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_C52B80CCA47D7DDFEC063B2D4B96A11F" id="pName_0C7EE98A78FFFD50998AE3D2DFFC45EC" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_0C7EE98A78FFFD50998AE3D2DFFC45EC', '0C7EE98A78FFFD50998AE3D2DFFC45EC', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_0C7EE98A78FFFD50998AE3D2DFFC45EC" name="PRECOCOMPRA_C52B80CCA47D7DDFEC063B2D4B96A11F" id="PRECOCOMPRA_0C7EE98A78FFFD50998AE3D2DFFC45EC"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-C52B80CCA47D7DDFEC063B2D4B96A11F no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('C52B80CCA47D7DDFEC063B2D4B96A11F', 'J-0007')">
                                                                                                            <img src="/web-files/upload/thumbs/E83BAE62D37EB5069926326787E671D6/43A0BB4E14DEE24A228C1AC16096186C.jpg" border="0" alt="Vestido sem Manga" title="Vestido sem Manga">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0007</td>
                                            <td>Vestido sem Manga<br/><b>Tamanho: </b> G - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_C52B80CCA47D7DDFEC063B2D4B96A11F" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_C52B80CCA47D7DDFEC063B2D4B96A11F', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_89890DB31F2321CA78E4CCCCED1568A0" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '89890DB31F2321CA78E4CCCCED1568A0')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="89890DB31F2321CA78E4CCCCED1568A0" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_89890DB31F2321CA78E4CCCCED1568A0', '89890DB31F2321CA78E4CCCCED1568A0','C52B80CCA47D7DDFEC063B2D4B96A11F', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_C52B80CCA47D7DDFEC063B2D4B96A11F" id="pName_89890DB31F2321CA78E4CCCCED1568A0" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_89890DB31F2321CA78E4CCCCED1568A0', '89890DB31F2321CA78E4CCCCED1568A0', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_89890DB31F2321CA78E4CCCCED1568A0" name="PRECOCOMPRA_C52B80CCA47D7DDFEC063B2D4B96A11F" id="PRECOCOMPRA_89890DB31F2321CA78E4CCCCED1568A0"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-C52B80CCA47D7DDFEC063B2D4B96A11F no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('C52B80CCA47D7DDFEC063B2D4B96A11F', 'J-0007')">
                                                                                                            <img src="/web-files/upload/thumbs/E83BAE62D37EB5069926326787E671D6/43A0BB4E14DEE24A228C1AC16096186C.jpg" border="0" alt="Vestido sem Manga" title="Vestido sem Manga">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0007</td>
                                            <td>Vestido sem Manga<br/><b>Tamanho: </b> GG - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_C52B80CCA47D7DDFEC063B2D4B96A11F" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_C52B80CCA47D7DDFEC063B2D4B96A11F', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_432B12F694F285C55BB4DC73C28F68F1" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '432B12F694F285C55BB4DC73C28F68F1')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="432B12F694F285C55BB4DC73C28F68F1" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_432B12F694F285C55BB4DC73C28F68F1', '432B12F694F285C55BB4DC73C28F68F1','C52B80CCA47D7DDFEC063B2D4B96A11F', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_C52B80CCA47D7DDFEC063B2D4B96A11F" id="pName_432B12F694F285C55BB4DC73C28F68F1" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_432B12F694F285C55BB4DC73C28F68F1', '432B12F694F285C55BB4DC73C28F68F1', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_432B12F694F285C55BB4DC73C28F68F1" name="PRECOCOMPRA_C52B80CCA47D7DDFEC063B2D4B96A11F" id="PRECOCOMPRA_432B12F694F285C55BB4DC73C28F68F1"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-C52B80CCA47D7DDFEC063B2D4B96A11F no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('C52B80CCA47D7DDFEC063B2D4B96A11F', 'J-0007')">
                                                                                                            <img src="/web-files/upload/thumbs/E83BAE62D37EB5069926326787E671D6/43A0BB4E14DEE24A228C1AC16096186C.jpg" border="0" alt="Vestido sem Manga" title="Vestido sem Manga">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0007</td>
                                            <td>Vestido sem Manga<br/><b>Tamanho: </b> XG - Extra Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_C52B80CCA47D7DDFEC063B2D4B96A11F" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_C52B80CCA47D7DDFEC063B2D4B96A11F', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_EDB91F69D2D52DFB8F90D36A72E6543C" value="1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'EDB91F69D2D52DFB8F90D36A72E6543C')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="EDB91F69D2D52DFB8F90D36A72E6543C" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_EDB91F69D2D52DFB8F90D36A72E6543C', 'EDB91F69D2D52DFB8F90D36A72E6543C','C52B80CCA47D7DDFEC063B2D4B96A11F', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_C52B80CCA47D7DDFEC063B2D4B96A11F" id="pName_EDB91F69D2D52DFB8F90D36A72E6543C" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_EDB91F69D2D52DFB8F90D36A72E6543C', 'EDB91F69D2D52DFB8F90D36A72E6543C', 'C52B80CCA47D7DDFEC063B2D4B96A11F')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_EDB91F69D2D52DFB8F90D36A72E6543C" name="PRECOCOMPRA_C52B80CCA47D7DDFEC063B2D4B96A11F" id="PRECOCOMPRA_EDB91F69D2D52DFB8F90D36A72E6543C"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-39A78598BB76D5C5ED0B0AB0D9AB37F6 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('39A78598BB76D5C5ED0B0AB0D9AB37F6', 'J-0008')">
                                                                                                            <img src="/web-files/upload/thumbs/DF1954D7836BB3634FDD526E957AE995/9C8815238758A7990415B3EDB198F645.jpg" border="0" alt="Junior Regata Branca " title="Junior Regata Branca ">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0008</td>
                                            <td>Junior Regata Branca <br/><b>Tamanho: </b> P - Pequena</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_39A78598BB76D5C5ED0B0AB0D9AB37F6" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_39A78598BB76D5C5ED0B0AB0D9AB37F6', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_536F863460BFCB76A0E5F759660A5E91" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '536F863460BFCB76A0E5F759660A5E91')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="536F863460BFCB76A0E5F759660A5E91" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_536F863460BFCB76A0E5F759660A5E91', '536F863460BFCB76A0E5F759660A5E91','39A78598BB76D5C5ED0B0AB0D9AB37F6', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="139,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_39A78598BB76D5C5ED0B0AB0D9AB37F6" id="pName_536F863460BFCB76A0E5F759660A5E91" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_536F863460BFCB76A0E5F759660A5E91', '536F863460BFCB76A0E5F759660A5E91', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_536F863460BFCB76A0E5F759660A5E91" name="PRECOCOMPRA_39A78598BB76D5C5ED0B0AB0D9AB37F6" id="PRECOCOMPRA_536F863460BFCB76A0E5F759660A5E91"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-39A78598BB76D5C5ED0B0AB0D9AB37F6 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('39A78598BB76D5C5ED0B0AB0D9AB37F6', 'J-0008')">
                                                                                                            <img src="/web-files/upload/thumbs/DF1954D7836BB3634FDD526E957AE995/9C8815238758A7990415B3EDB198F645.jpg" border="0" alt="Junior Regata Branca " title="Junior Regata Branca ">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0008</td>
                                            <td>Junior Regata Branca <br/><b>Tamanho: </b> M - Média</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_39A78598BB76D5C5ED0B0AB0D9AB37F6" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_39A78598BB76D5C5ED0B0AB0D9AB37F6', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_580229E596B0CE413D5B521E6F1189A4" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '580229E596B0CE413D5B521E6F1189A4')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="580229E596B0CE413D5B521E6F1189A4" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_580229E596B0CE413D5B521E6F1189A4', '580229E596B0CE413D5B521E6F1189A4','39A78598BB76D5C5ED0B0AB0D9AB37F6', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="139,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_39A78598BB76D5C5ED0B0AB0D9AB37F6" id="pName_580229E596B0CE413D5B521E6F1189A4" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_580229E596B0CE413D5B521E6F1189A4', '580229E596B0CE413D5B521E6F1189A4', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_580229E596B0CE413D5B521E6F1189A4" name="PRECOCOMPRA_39A78598BB76D5C5ED0B0AB0D9AB37F6" id="PRECOCOMPRA_580229E596B0CE413D5B521E6F1189A4"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-39A78598BB76D5C5ED0B0AB0D9AB37F6 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('39A78598BB76D5C5ED0B0AB0D9AB37F6', 'J-0008')">
                                                                                                            <img src="/web-files/upload/thumbs/DF1954D7836BB3634FDD526E957AE995/9C8815238758A7990415B3EDB198F645.jpg" border="0" alt="Junior Regata Branca " title="Junior Regata Branca ">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0008</td>
                                            <td>Junior Regata Branca <br/><b>Tamanho: </b> G - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_39A78598BB76D5C5ED0B0AB0D9AB37F6" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_39A78598BB76D5C5ED0B0AB0D9AB37F6', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_A68C078FB4FCD51E5EEAD4C2AD637A8E" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'A68C078FB4FCD51E5EEAD4C2AD637A8E')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="A68C078FB4FCD51E5EEAD4C2AD637A8E" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_A68C078FB4FCD51E5EEAD4C2AD637A8E', 'A68C078FB4FCD51E5EEAD4C2AD637A8E','39A78598BB76D5C5ED0B0AB0D9AB37F6', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="139,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_39A78598BB76D5C5ED0B0AB0D9AB37F6" id="pName_A68C078FB4FCD51E5EEAD4C2AD637A8E" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_A68C078FB4FCD51E5EEAD4C2AD637A8E', 'A68C078FB4FCD51E5EEAD4C2AD637A8E', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_A68C078FB4FCD51E5EEAD4C2AD637A8E" name="PRECOCOMPRA_39A78598BB76D5C5ED0B0AB0D9AB37F6" id="PRECOCOMPRA_A68C078FB4FCD51E5EEAD4C2AD637A8E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-39A78598BB76D5C5ED0B0AB0D9AB37F6 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('39A78598BB76D5C5ED0B0AB0D9AB37F6', 'J-0008')">
                                                                                                            <img src="/web-files/upload/thumbs/DF1954D7836BB3634FDD526E957AE995/9C8815238758A7990415B3EDB198F645.jpg" border="0" alt="Junior Regata Branca " title="Junior Regata Branca ">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0008</td>
                                            <td>Junior Regata Branca <br/><b>Tamanho: </b> GG - Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_39A78598BB76D5C5ED0B0AB0D9AB37F6" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_39A78598BB76D5C5ED0B0AB0D9AB37F6', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_3F72F3D07FB790E1901D4A5E3CFEEE4C" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '3F72F3D07FB790E1901D4A5E3CFEEE4C')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="3F72F3D07FB790E1901D4A5E3CFEEE4C" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_3F72F3D07FB790E1901D4A5E3CFEEE4C', '3F72F3D07FB790E1901D4A5E3CFEEE4C','39A78598BB76D5C5ED0B0AB0D9AB37F6', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="139,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_39A78598BB76D5C5ED0B0AB0D9AB37F6" id="pName_3F72F3D07FB790E1901D4A5E3CFEEE4C" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_3F72F3D07FB790E1901D4A5E3CFEEE4C', '3F72F3D07FB790E1901D4A5E3CFEEE4C', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_3F72F3D07FB790E1901D4A5E3CFEEE4C" name="PRECOCOMPRA_39A78598BB76D5C5ED0B0AB0D9AB37F6" id="PRECOCOMPRA_3F72F3D07FB790E1901D4A5E3CFEEE4C"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-39A78598BB76D5C5ED0B0AB0D9AB37F6 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('39A78598BB76D5C5ED0B0AB0D9AB37F6', 'J-0008')">
                                                                                                            <img src="/web-files/upload/thumbs/DF1954D7836BB3634FDD526E957AE995/9C8815238758A7990415B3EDB198F645.jpg" border="0" alt="Junior Regata Branca " title="Junior Regata Branca ">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>J-0008</td>
                                            <td>Junior Regata Branca <br/><b>Tamanho: </b> XG - Extra Grande</td>
                                            <td>Junior</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_39A78598BB76D5C5ED0B0AB0D9AB37F6" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_39A78598BB76D5C5ED0B0AB0D9AB37F6', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_50ED2C5B104F8E2E98A231005F502A3A" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '50ED2C5B104F8E2E98A231005F502A3A')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="50ED2C5B104F8E2E98A231005F502A3A" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_50ED2C5B104F8E2E98A231005F502A3A', '50ED2C5B104F8E2E98A231005F502A3A','39A78598BB76D5C5ED0B0AB0D9AB37F6', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="139,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_39A78598BB76D5C5ED0B0AB0D9AB37F6" id="pName_50ED2C5B104F8E2E98A231005F502A3A" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_50ED2C5B104F8E2E98A231005F502A3A', '50ED2C5B104F8E2E98A231005F502A3A', '39A78598BB76D5C5ED0B0AB0D9AB37F6')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_50ED2C5B104F8E2E98A231005F502A3A" name="PRECOCOMPRA_39A78598BB76D5C5ED0B0AB0D9AB37F6" id="PRECOCOMPRA_50ED2C5B104F8E2E98A231005F502A3A"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-AC495248300239DADE219113A0265587 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('AC495248300239DADE219113A0265587', 'NS-0001')">
                                                                                                            <img src="/web-files/upload/thumbs/F45FE13EA2279D41DC77453438D053BC/54CA40915593EF4483D752CF448AEFF2.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0001</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> P - Pequena</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_AC495248300239DADE219113A0265587" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_AC495248300239DADE219113A0265587', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_D75753C99AF27F1BB238E0E737A84796" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'D75753C99AF27F1BB238E0E737A84796')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="D75753C99AF27F1BB238E0E737A84796" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_D75753C99AF27F1BB238E0E737A84796', 'D75753C99AF27F1BB238E0E737A84796','AC495248300239DADE219113A0265587', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="129,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_AC495248300239DADE219113A0265587" id="pName_D75753C99AF27F1BB238E0E737A84796" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_D75753C99AF27F1BB238E0E737A84796', 'D75753C99AF27F1BB238E0E737A84796', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_D75753C99AF27F1BB238E0E737A84796" name="PRECOCOMPRA_AC495248300239DADE219113A0265587" id="PRECOCOMPRA_D75753C99AF27F1BB238E0E737A84796"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-AC495248300239DADE219113A0265587 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('AC495248300239DADE219113A0265587', 'NS-0001')">
                                                                                                            <img src="/web-files/upload/thumbs/F45FE13EA2279D41DC77453438D053BC/54CA40915593EF4483D752CF448AEFF2.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0001</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> M - Media</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_AC495248300239DADE219113A0265587" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_AC495248300239DADE219113A0265587', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_6E6B8D4F217D6FDEB8861288E0F76E26" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '6E6B8D4F217D6FDEB8861288E0F76E26')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="6E6B8D4F217D6FDEB8861288E0F76E26" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_6E6B8D4F217D6FDEB8861288E0F76E26', '6E6B8D4F217D6FDEB8861288E0F76E26','AC495248300239DADE219113A0265587', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="129,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_AC495248300239DADE219113A0265587" id="pName_6E6B8D4F217D6FDEB8861288E0F76E26" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_6E6B8D4F217D6FDEB8861288E0F76E26', '6E6B8D4F217D6FDEB8861288E0F76E26', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_6E6B8D4F217D6FDEB8861288E0F76E26" name="PRECOCOMPRA_AC495248300239DADE219113A0265587" id="PRECOCOMPRA_6E6B8D4F217D6FDEB8861288E0F76E26"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-AC495248300239DADE219113A0265587 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('AC495248300239DADE219113A0265587', 'NS-0001')">
                                                                                                            <img src="/web-files/upload/thumbs/F45FE13EA2279D41DC77453438D053BC/54CA40915593EF4483D752CF448AEFF2.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0001</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> G - Grande</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_AC495248300239DADE219113A0265587" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_AC495248300239DADE219113A0265587', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_E359395E40B591BFB5145023D76ABB08" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'E359395E40B591BFB5145023D76ABB08')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="E359395E40B591BFB5145023D76ABB08" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_E359395E40B591BFB5145023D76ABB08', 'E359395E40B591BFB5145023D76ABB08','AC495248300239DADE219113A0265587', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="129,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_AC495248300239DADE219113A0265587" id="pName_E359395E40B591BFB5145023D76ABB08" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_E359395E40B591BFB5145023D76ABB08', 'E359395E40B591BFB5145023D76ABB08', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_E359395E40B591BFB5145023D76ABB08" name="PRECOCOMPRA_AC495248300239DADE219113A0265587" id="PRECOCOMPRA_E359395E40B591BFB5145023D76ABB08"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-AC495248300239DADE219113A0265587 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('AC495248300239DADE219113A0265587', 'NS-0001')">
                                                                                                            <img src="/web-files/upload/thumbs/F45FE13EA2279D41DC77453438D053BC/54CA40915593EF4483D752CF448AEFF2.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0001</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> GG - Grande</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_AC495248300239DADE219113A0265587" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_AC495248300239DADE219113A0265587', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_8E1D8A460E0455F1C67C000ED66E4AD8" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '8E1D8A460E0455F1C67C000ED66E4AD8')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="8E1D8A460E0455F1C67C000ED66E4AD8" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_8E1D8A460E0455F1C67C000ED66E4AD8', '8E1D8A460E0455F1C67C000ED66E4AD8','AC495248300239DADE219113A0265587', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="129,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_AC495248300239DADE219113A0265587" id="pName_8E1D8A460E0455F1C67C000ED66E4AD8" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_8E1D8A460E0455F1C67C000ED66E4AD8', '8E1D8A460E0455F1C67C000ED66E4AD8', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_8E1D8A460E0455F1C67C000ED66E4AD8" name="PRECOCOMPRA_AC495248300239DADE219113A0265587" id="PRECOCOMPRA_8E1D8A460E0455F1C67C000ED66E4AD8"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-AC495248300239DADE219113A0265587 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('AC495248300239DADE219113A0265587', 'NS-0001')">
                                                                                                            <img src="/web-files/upload/thumbs/F45FE13EA2279D41DC77453438D053BC/54CA40915593EF4483D752CF448AEFF2.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0001</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> XG - Extra Grande</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_AC495248300239DADE219113A0265587" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_AC495248300239DADE219113A0265587', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_A5F3E55CB94D40596EF0444C0F3668CB" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'A5F3E55CB94D40596EF0444C0F3668CB')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="A5F3E55CB94D40596EF0444C0F3668CB" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_A5F3E55CB94D40596EF0444C0F3668CB', 'A5F3E55CB94D40596EF0444C0F3668CB','AC495248300239DADE219113A0265587', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="129,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_AC495248300239DADE219113A0265587" id="pName_A5F3E55CB94D40596EF0444C0F3668CB" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_A5F3E55CB94D40596EF0444C0F3668CB', 'A5F3E55CB94D40596EF0444C0F3668CB', 'AC495248300239DADE219113A0265587')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_A5F3E55CB94D40596EF0444C0F3668CB" name="PRECOCOMPRA_AC495248300239DADE219113A0265587" id="PRECOCOMPRA_A5F3E55CB94D40596EF0444C0F3668CB"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-F3DB4A121F5C51A91B26DE8048E259D3 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('F3DB4A121F5C51A91B26DE8048E259D3', 'NS-0002')">
                                                                                                            <img src="/web-files/upload/thumbs/687EE832B83F99A41CA6490C4DCE1B90/41D31ED3708BE746D48A8BBC019678D2.jpg" border="0" alt="Nilton Santos Manga Longa" title="Nilton Santos Manga Longa">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0002</td>
                                            <td>Nilton Santos Manga Longa<br/><b>Tamanho: </b> P - Pequena</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_F3DB4A121F5C51A91B26DE8048E259D3" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_F3DB4A121F5C51A91B26DE8048E259D3', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_FE8DA2BA1FB2B827C4996B714BADAF6E" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'FE8DA2BA1FB2B827C4996B714BADAF6E')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="FE8DA2BA1FB2B827C4996B714BADAF6E" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_FE8DA2BA1FB2B827C4996B714BADAF6E', 'FE8DA2BA1FB2B827C4996B714BADAF6E','F3DB4A121F5C51A91B26DE8048E259D3', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="149,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_F3DB4A121F5C51A91B26DE8048E259D3" id="pName_FE8DA2BA1FB2B827C4996B714BADAF6E" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_FE8DA2BA1FB2B827C4996B714BADAF6E', 'FE8DA2BA1FB2B827C4996B714BADAF6E', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_FE8DA2BA1FB2B827C4996B714BADAF6E" name="PRECOCOMPRA_F3DB4A121F5C51A91B26DE8048E259D3" id="PRECOCOMPRA_FE8DA2BA1FB2B827C4996B714BADAF6E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-F3DB4A121F5C51A91B26DE8048E259D3 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('F3DB4A121F5C51A91B26DE8048E259D3', 'NS-0002')">
                                                                                                            <img src="/web-files/upload/thumbs/687EE832B83F99A41CA6490C4DCE1B90/41D31ED3708BE746D48A8BBC019678D2.jpg" border="0" alt="Nilton Santos Manga Longa" title="Nilton Santos Manga Longa">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0002</td>
                                            <td>Nilton Santos Manga Longa<br/><b>Tamanho: </b> M - Média</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_F3DB4A121F5C51A91B26DE8048E259D3" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_F3DB4A121F5C51A91B26DE8048E259D3', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_CF76E8030DF7A6CCC83809970DD7B292" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'CF76E8030DF7A6CCC83809970DD7B292')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="CF76E8030DF7A6CCC83809970DD7B292" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_CF76E8030DF7A6CCC83809970DD7B292', 'CF76E8030DF7A6CCC83809970DD7B292','F3DB4A121F5C51A91B26DE8048E259D3', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="149,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_F3DB4A121F5C51A91B26DE8048E259D3" id="pName_CF76E8030DF7A6CCC83809970DD7B292" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_CF76E8030DF7A6CCC83809970DD7B292', 'CF76E8030DF7A6CCC83809970DD7B292', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_CF76E8030DF7A6CCC83809970DD7B292" name="PRECOCOMPRA_F3DB4A121F5C51A91B26DE8048E259D3" id="PRECOCOMPRA_CF76E8030DF7A6CCC83809970DD7B292"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-F3DB4A121F5C51A91B26DE8048E259D3 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('F3DB4A121F5C51A91B26DE8048E259D3', 'NS-0002')">
                                                                                                            <img src="/web-files/upload/thumbs/687EE832B83F99A41CA6490C4DCE1B90/41D31ED3708BE746D48A8BBC019678D2.jpg" border="0" alt="Nilton Santos Manga Longa" title="Nilton Santos Manga Longa">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0002</td>
                                            <td>Nilton Santos Manga Longa<br/><b>Tamanho: </b> G - Grande</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_F3DB4A121F5C51A91B26DE8048E259D3" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_F3DB4A121F5C51A91B26DE8048E259D3', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_5BB2454052B2D87437C79DDC93FFD71A" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '5BB2454052B2D87437C79DDC93FFD71A')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="5BB2454052B2D87437C79DDC93FFD71A" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_5BB2454052B2D87437C79DDC93FFD71A', '5BB2454052B2D87437C79DDC93FFD71A','F3DB4A121F5C51A91B26DE8048E259D3', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="149,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_F3DB4A121F5C51A91B26DE8048E259D3" id="pName_5BB2454052B2D87437C79DDC93FFD71A" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_5BB2454052B2D87437C79DDC93FFD71A', '5BB2454052B2D87437C79DDC93FFD71A', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_5BB2454052B2D87437C79DDC93FFD71A" name="PRECOCOMPRA_F3DB4A121F5C51A91B26DE8048E259D3" id="PRECOCOMPRA_5BB2454052B2D87437C79DDC93FFD71A"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-F3DB4A121F5C51A91B26DE8048E259D3 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('F3DB4A121F5C51A91B26DE8048E259D3', 'NS-0002')">
                                                                                                            <img src="/web-files/upload/thumbs/687EE832B83F99A41CA6490C4DCE1B90/41D31ED3708BE746D48A8BBC019678D2.jpg" border="0" alt="Nilton Santos Manga Longa" title="Nilton Santos Manga Longa">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0002</td>
                                            <td>Nilton Santos Manga Longa<br/><b>Tamanho: </b> GG - G</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_F3DB4A121F5C51A91B26DE8048E259D3" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_F3DB4A121F5C51A91B26DE8048E259D3', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_FDF8B9B382DFBACCF0D57332422E0330" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'FDF8B9B382DFBACCF0D57332422E0330')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="FDF8B9B382DFBACCF0D57332422E0330" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_FDF8B9B382DFBACCF0D57332422E0330', 'FDF8B9B382DFBACCF0D57332422E0330','F3DB4A121F5C51A91B26DE8048E259D3', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="149,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_F3DB4A121F5C51A91B26DE8048E259D3" id="pName_FDF8B9B382DFBACCF0D57332422E0330" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_FDF8B9B382DFBACCF0D57332422E0330', 'FDF8B9B382DFBACCF0D57332422E0330', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_FDF8B9B382DFBACCF0D57332422E0330" name="PRECOCOMPRA_F3DB4A121F5C51A91B26DE8048E259D3" id="PRECOCOMPRA_FDF8B9B382DFBACCF0D57332422E0330"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-F3DB4A121F5C51A91B26DE8048E259D3 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('F3DB4A121F5C51A91B26DE8048E259D3', 'NS-0002')">
                                                                                                            <img src="/web-files/upload/thumbs/687EE832B83F99A41CA6490C4DCE1B90/41D31ED3708BE746D48A8BBC019678D2.jpg" border="0" alt="Nilton Santos Manga Longa" title="Nilton Santos Manga Longa">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0002</td>
                                            <td>Nilton Santos Manga Longa<br/><b>Tamanho: </b> XG - Extra Grande</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_F3DB4A121F5C51A91B26DE8048E259D3" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_F3DB4A121F5C51A91B26DE8048E259D3', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_E5AD3E89F9D84449622DC648C8D88871" value="10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'E5AD3E89F9D84449622DC648C8D88871')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="E5AD3E89F9D84449622DC648C8D88871" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_E5AD3E89F9D84449622DC648C8D88871', 'E5AD3E89F9D84449622DC648C8D88871','F3DB4A121F5C51A91B26DE8048E259D3', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="149,90" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_F3DB4A121F5C51A91B26DE8048E259D3" id="pName_E5AD3E89F9D84449622DC648C8D88871" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_E5AD3E89F9D84449622DC648C8D88871', 'E5AD3E89F9D84449622DC648C8D88871', 'F3DB4A121F5C51A91B26DE8048E259D3')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_E5AD3E89F9D84449622DC648C8D88871" name="PRECOCOMPRA_F3DB4A121F5C51A91B26DE8048E259D3" id="PRECOCOMPRA_E5AD3E89F9D84449622DC648C8D88871"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-83E4A651E3922F43549F642A40EF69D9 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('83E4A651E3922F43549F642A40EF69D9', 'NS-0003')">
                                                                                                            <img src="/web-files/upload/thumbs/6F4096CBF0B49E25B1428D81EDF8D35D/8265F3A08E2574C0F1B4AFE29A5CA8C2.jpg" border="0" alt="Baby Look" title="Baby Look">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0003</td>
                                            <td>Baby Look<br/><b>Tamanho: </b> P - Pequena</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_83E4A651E3922F43549F642A40EF69D9" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_83E4A651E3922F43549F642A40EF69D9', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_1FE7CCA551B739A311CAA64866F67EB8" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '1FE7CCA551B739A311CAA64866F67EB8')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="1FE7CCA551B739A311CAA64866F67EB8" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_1FE7CCA551B739A311CAA64866F67EB8', '1FE7CCA551B739A311CAA64866F67EB8','83E4A651E3922F43549F642A40EF69D9', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_83E4A651E3922F43549F642A40EF69D9" id="pName_1FE7CCA551B739A311CAA64866F67EB8" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_1FE7CCA551B739A311CAA64866F67EB8', '1FE7CCA551B739A311CAA64866F67EB8', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_1FE7CCA551B739A311CAA64866F67EB8" name="PRECOCOMPRA_83E4A651E3922F43549F642A40EF69D9" id="PRECOCOMPRA_1FE7CCA551B739A311CAA64866F67EB8"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-83E4A651E3922F43549F642A40EF69D9 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('83E4A651E3922F43549F642A40EF69D9', 'NS-0003')">
                                                                                                            <img src="/web-files/upload/thumbs/6F4096CBF0B49E25B1428D81EDF8D35D/8265F3A08E2574C0F1B4AFE29A5CA8C2.jpg" border="0" alt="Baby Look" title="Baby Look">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0003</td>
                                            <td>Baby Look<br/><b>Tamanho: </b> M - Média</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_83E4A651E3922F43549F642A40EF69D9" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_83E4A651E3922F43549F642A40EF69D9', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_EB9B94E0E8F147532A38DBF6EE70D755" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'EB9B94E0E8F147532A38DBF6EE70D755')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="EB9B94E0E8F147532A38DBF6EE70D755" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_EB9B94E0E8F147532A38DBF6EE70D755', 'EB9B94E0E8F147532A38DBF6EE70D755','83E4A651E3922F43549F642A40EF69D9', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_83E4A651E3922F43549F642A40EF69D9" id="pName_EB9B94E0E8F147532A38DBF6EE70D755" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_EB9B94E0E8F147532A38DBF6EE70D755', 'EB9B94E0E8F147532A38DBF6EE70D755', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_EB9B94E0E8F147532A38DBF6EE70D755" name="PRECOCOMPRA_83E4A651E3922F43549F642A40EF69D9" id="PRECOCOMPRA_EB9B94E0E8F147532A38DBF6EE70D755"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-83E4A651E3922F43549F642A40EF69D9 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('83E4A651E3922F43549F642A40EF69D9', 'NS-0003')">
                                                                                                            <img src="/web-files/upload/thumbs/6F4096CBF0B49E25B1428D81EDF8D35D/8265F3A08E2574C0F1B4AFE29A5CA8C2.jpg" border="0" alt="Baby Look" title="Baby Look">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0003</td>
                                            <td>Baby Look<br/><b>Tamanho: </b> G - Grande</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_83E4A651E3922F43549F642A40EF69D9" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_83E4A651E3922F43549F642A40EF69D9', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_5DDD4440ABEF5012086E8B57B02DB913" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '5DDD4440ABEF5012086E8B57B02DB913')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="5DDD4440ABEF5012086E8B57B02DB913" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_5DDD4440ABEF5012086E8B57B02DB913', '5DDD4440ABEF5012086E8B57B02DB913','83E4A651E3922F43549F642A40EF69D9', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_83E4A651E3922F43549F642A40EF69D9" id="pName_5DDD4440ABEF5012086E8B57B02DB913" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_5DDD4440ABEF5012086E8B57B02DB913', '5DDD4440ABEF5012086E8B57B02DB913', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_5DDD4440ABEF5012086E8B57B02DB913" name="PRECOCOMPRA_83E4A651E3922F43549F642A40EF69D9" id="PRECOCOMPRA_5DDD4440ABEF5012086E8B57B02DB913"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-83E4A651E3922F43549F642A40EF69D9 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('83E4A651E3922F43549F642A40EF69D9', 'NS-0003')">
                                                                                                            <img src="/web-files/upload/thumbs/6F4096CBF0B49E25B1428D81EDF8D35D/8265F3A08E2574C0F1B4AFE29A5CA8C2.jpg" border="0" alt="Baby Look" title="Baby Look">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0003</td>
                                            <td>Baby Look<br/><b>Tamanho: </b> GG - Grande</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_83E4A651E3922F43549F642A40EF69D9" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_83E4A651E3922F43549F642A40EF69D9', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_E7D5B61D6C5B204DA8675FADB8819D4F" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'E7D5B61D6C5B204DA8675FADB8819D4F')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="E7D5B61D6C5B204DA8675FADB8819D4F" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_E7D5B61D6C5B204DA8675FADB8819D4F', 'E7D5B61D6C5B204DA8675FADB8819D4F','83E4A651E3922F43549F642A40EF69D9', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_83E4A651E3922F43549F642A40EF69D9" id="pName_E7D5B61D6C5B204DA8675FADB8819D4F" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_E7D5B61D6C5B204DA8675FADB8819D4F', 'E7D5B61D6C5B204DA8675FADB8819D4F', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_E7D5B61D6C5B204DA8675FADB8819D4F" name="PRECOCOMPRA_83E4A651E3922F43549F642A40EF69D9" id="PRECOCOMPRA_E7D5B61D6C5B204DA8675FADB8819D4F"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-83E4A651E3922F43549F642A40EF69D9 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('83E4A651E3922F43549F642A40EF69D9', 'NS-0003')">
                                                                                                            <img src="/web-files/upload/thumbs/6F4096CBF0B49E25B1428D81EDF8D35D/8265F3A08E2574C0F1B4AFE29A5CA8C2.jpg" border="0" alt="Baby Look" title="Baby Look">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0003</td>
                                            <td>Baby Look<br/><b>Tamanho: </b> XG - Extra Grande</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_83E4A651E3922F43549F642A40EF69D9" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_83E4A651E3922F43549F642A40EF69D9', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_02691C2637F2B17384BDF9B91DBD5CB9" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '02691C2637F2B17384BDF9B91DBD5CB9')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="02691C2637F2B17384BDF9B91DBD5CB9" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_02691C2637F2B17384BDF9B91DBD5CB9', '02691C2637F2B17384BDF9B91DBD5CB9','83E4A651E3922F43549F642A40EF69D9', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_83E4A651E3922F43549F642A40EF69D9" id="pName_02691C2637F2B17384BDF9B91DBD5CB9" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_02691C2637F2B17384BDF9B91DBD5CB9', '02691C2637F2B17384BDF9B91DBD5CB9', '83E4A651E3922F43549F642A40EF69D9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_02691C2637F2B17384BDF9B91DBD5CB9" name="PRECOCOMPRA_83E4A651E3922F43549F642A40EF69D9" id="PRECOCOMPRA_02691C2637F2B17384BDF9B91DBD5CB9"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-007389BFCD29E8C70596B125D01035A9 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('007389BFCD29E8C70596B125D01035A9', 'NS-0004')">
                                                                                                            <img src="/web-files/upload/thumbs/00EE6D59F6BD27EF082991636E2FB39F/B8456F9E7D94F19AA1A7E318F7290BF6.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0004</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> P - Pequena</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_007389BFCD29E8C70596B125D01035A9" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_007389BFCD29E8C70596B125D01035A9', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_820BB72568CE580595FD26624E99608C" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '820BB72568CE580595FD26624E99608C')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="820BB72568CE580595FD26624E99608C" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_820BB72568CE580595FD26624E99608C', '820BB72568CE580595FD26624E99608C','007389BFCD29E8C70596B125D01035A9', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_007389BFCD29E8C70596B125D01035A9" id="pName_820BB72568CE580595FD26624E99608C" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_820BB72568CE580595FD26624E99608C', '820BB72568CE580595FD26624E99608C', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_820BB72568CE580595FD26624E99608C" name="PRECOCOMPRA_007389BFCD29E8C70596B125D01035A9" id="PRECOCOMPRA_820BB72568CE580595FD26624E99608C"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-007389BFCD29E8C70596B125D01035A9 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('007389BFCD29E8C70596B125D01035A9', 'NS-0004')">
                                                                                                            <img src="/web-files/upload/thumbs/00EE6D59F6BD27EF082991636E2FB39F/B8456F9E7D94F19AA1A7E318F7290BF6.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0004</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> M - Média</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_007389BFCD29E8C70596B125D01035A9" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_007389BFCD29E8C70596B125D01035A9', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_48A82DC7A4B2B50315544AE68DB7870D" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '48A82DC7A4B2B50315544AE68DB7870D')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="48A82DC7A4B2B50315544AE68DB7870D" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_48A82DC7A4B2B50315544AE68DB7870D', '48A82DC7A4B2B50315544AE68DB7870D','007389BFCD29E8C70596B125D01035A9', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_007389BFCD29E8C70596B125D01035A9" id="pName_48A82DC7A4B2B50315544AE68DB7870D" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_48A82DC7A4B2B50315544AE68DB7870D', '48A82DC7A4B2B50315544AE68DB7870D', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_48A82DC7A4B2B50315544AE68DB7870D" name="PRECOCOMPRA_007389BFCD29E8C70596B125D01035A9" id="PRECOCOMPRA_48A82DC7A4B2B50315544AE68DB7870D"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-007389BFCD29E8C70596B125D01035A9 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('007389BFCD29E8C70596B125D01035A9', 'NS-0004')">
                                                                                                            <img src="/web-files/upload/thumbs/00EE6D59F6BD27EF082991636E2FB39F/B8456F9E7D94F19AA1A7E318F7290BF6.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0004</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> G - Grande</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_007389BFCD29E8C70596B125D01035A9" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_007389BFCD29E8C70596B125D01035A9', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_B6FAB4E4A6D060B6276B15AE8040FA37" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, 'B6FAB4E4A6D060B6276B15AE8040FA37')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="B6FAB4E4A6D060B6276B15AE8040FA37" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_B6FAB4E4A6D060B6276B15AE8040FA37', 'B6FAB4E4A6D060B6276B15AE8040FA37','007389BFCD29E8C70596B125D01035A9', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_007389BFCD29E8C70596B125D01035A9" id="pName_B6FAB4E4A6D060B6276B15AE8040FA37" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_B6FAB4E4A6D060B6276B15AE8040FA37', 'B6FAB4E4A6D060B6276B15AE8040FA37', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_B6FAB4E4A6D060B6276B15AE8040FA37" name="PRECOCOMPRA_007389BFCD29E8C70596B125D01035A9" id="PRECOCOMPRA_B6FAB4E4A6D060B6276B15AE8040FA37"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-007389BFCD29E8C70596B125D01035A9 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('007389BFCD29E8C70596B125D01035A9', 'NS-0004')">
                                                                                                            <img src="/web-files/upload/thumbs/00EE6D59F6BD27EF082991636E2FB39F/B8456F9E7D94F19AA1A7E318F7290BF6.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0004</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> GG - Grande</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_007389BFCD29E8C70596B125D01035A9" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_007389BFCD29E8C70596B125D01035A9', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_2F4E44AC554A43A02EF5E0D698BE1DD2" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '2F4E44AC554A43A02EF5E0D698BE1DD2')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="2F4E44AC554A43A02EF5E0D698BE1DD2" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_2F4E44AC554A43A02EF5E0D698BE1DD2', '2F4E44AC554A43A02EF5E0D698BE1DD2','007389BFCD29E8C70596B125D01035A9', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_007389BFCD29E8C70596B125D01035A9" id="pName_2F4E44AC554A43A02EF5E0D698BE1DD2" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_2F4E44AC554A43A02EF5E0D698BE1DD2', '2F4E44AC554A43A02EF5E0D698BE1DD2', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_2F4E44AC554A43A02EF5E0D698BE1DD2" name="PRECOCOMPRA_007389BFCD29E8C70596B125D01035A9" id="PRECOCOMPRA_2F4E44AC554A43A02EF5E0D698BE1DD2"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-007389BFCD29E8C70596B125D01035A9 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('007389BFCD29E8C70596B125D01035A9', 'NS-0004')">
                                                                                                            <img src="/web-files/upload/thumbs/00EE6D59F6BD27EF082991636E2FB39F/B8456F9E7D94F19AA1A7E318F7290BF6.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0004</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> XG - Extra Grande</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_007389BFCD29E8C70596B125D01035A9" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_007389BFCD29E8C70596B125D01035A9', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_79B9953515B45EA590BA85353CB80440" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '79B9953515B45EA590BA85353CB80440')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="79B9953515B45EA590BA85353CB80440" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_79B9953515B45EA590BA85353CB80440', '79B9953515B45EA590BA85353CB80440','007389BFCD29E8C70596B125D01035A9', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_007389BFCD29E8C70596B125D01035A9" id="pName_79B9953515B45EA590BA85353CB80440" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_79B9953515B45EA590BA85353CB80440', '79B9953515B45EA590BA85353CB80440', '007389BFCD29E8C70596B125D01035A9')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_79B9953515B45EA590BA85353CB80440" name="PRECOCOMPRA_007389BFCD29E8C70596B125D01035A9" id="PRECOCOMPRA_79B9953515B45EA590BA85353CB80440"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-55109831008FCA21AB975C2DF0604B9C no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('55109831008FCA21AB975C2DF0604B9C', 'NS-0005')">
                                                                                                            <img src="/web-files/upload/thumbs/E6291027FF33CA592D9F944F55BAFACA/9972D3121EE69D03B90CB89171731A48.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0005</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> P - Pequena</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_55109831008FCA21AB975C2DF0604B9C" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_55109831008FCA21AB975C2DF0604B9C', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_9B9892A053543F2A33CDE3936CD79387" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '9B9892A053543F2A33CDE3936CD79387')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="9B9892A053543F2A33CDE3936CD79387" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_9B9892A053543F2A33CDE3936CD79387', '9B9892A053543F2A33CDE3936CD79387','55109831008FCA21AB975C2DF0604B9C', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_55109831008FCA21AB975C2DF0604B9C" id="pName_9B9892A053543F2A33CDE3936CD79387" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_9B9892A053543F2A33CDE3936CD79387', '9B9892A053543F2A33CDE3936CD79387', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_9B9892A053543F2A33CDE3936CD79387" name="PRECOCOMPRA_55109831008FCA21AB975C2DF0604B9C" id="PRECOCOMPRA_9B9892A053543F2A33CDE3936CD79387"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-55109831008FCA21AB975C2DF0604B9C no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('55109831008FCA21AB975C2DF0604B9C', 'NS-0005')">
                                                                                                            <img src="/web-files/upload/thumbs/E6291027FF33CA592D9F944F55BAFACA/9972D3121EE69D03B90CB89171731A48.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0005</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> M - Média</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_55109831008FCA21AB975C2DF0604B9C" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_55109831008FCA21AB975C2DF0604B9C', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_58DB307AB7B74D1AAE3B8B6661ADDFC1" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '58DB307AB7B74D1AAE3B8B6661ADDFC1')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="58DB307AB7B74D1AAE3B8B6661ADDFC1" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_58DB307AB7B74D1AAE3B8B6661ADDFC1', '58DB307AB7B74D1AAE3B8B6661ADDFC1','55109831008FCA21AB975C2DF0604B9C', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_55109831008FCA21AB975C2DF0604B9C" id="pName_58DB307AB7B74D1AAE3B8B6661ADDFC1" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_58DB307AB7B74D1AAE3B8B6661ADDFC1', '58DB307AB7B74D1AAE3B8B6661ADDFC1', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_58DB307AB7B74D1AAE3B8B6661ADDFC1" name="PRECOCOMPRA_55109831008FCA21AB975C2DF0604B9C" id="PRECOCOMPRA_58DB307AB7B74D1AAE3B8B6661ADDFC1"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-55109831008FCA21AB975C2DF0604B9C no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('55109831008FCA21AB975C2DF0604B9C', 'NS-0005')">
                                                                                                            <img src="/web-files/upload/thumbs/E6291027FF33CA592D9F944F55BAFACA/9972D3121EE69D03B90CB89171731A48.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0005</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> G - Grande</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_55109831008FCA21AB975C2DF0604B9C" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_55109831008FCA21AB975C2DF0604B9C', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_2A21CB02E1C83F458023E79CA037B618" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '2A21CB02E1C83F458023E79CA037B618')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="2A21CB02E1C83F458023E79CA037B618" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_2A21CB02E1C83F458023E79CA037B618', '2A21CB02E1C83F458023E79CA037B618','55109831008FCA21AB975C2DF0604B9C', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_55109831008FCA21AB975C2DF0604B9C" id="pName_2A21CB02E1C83F458023E79CA037B618" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_2A21CB02E1C83F458023E79CA037B618', '2A21CB02E1C83F458023E79CA037B618', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_2A21CB02E1C83F458023E79CA037B618" name="PRECOCOMPRA_55109831008FCA21AB975C2DF0604B9C" id="PRECOCOMPRA_2A21CB02E1C83F458023E79CA037B618"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-55109831008FCA21AB975C2DF0604B9C no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('55109831008FCA21AB975C2DF0604B9C', 'NS-0005')">
                                                                                                            <img src="/web-files/upload/thumbs/E6291027FF33CA592D9F944F55BAFACA/9972D3121EE69D03B90CB89171731A48.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0005</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> GG - Grande</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_55109831008FCA21AB975C2DF0604B9C" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_55109831008FCA21AB975C2DF0604B9C', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_1043CCCAB767ECB10565962DA82633BE" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '1043CCCAB767ECB10565962DA82633BE')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="1043CCCAB767ECB10565962DA82633BE" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_1043CCCAB767ECB10565962DA82633BE', '1043CCCAB767ECB10565962DA82633BE','55109831008FCA21AB975C2DF0604B9C', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_55109831008FCA21AB975C2DF0604B9C" id="pName_1043CCCAB767ECB10565962DA82633BE" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_1043CCCAB767ECB10565962DA82633BE', '1043CCCAB767ECB10565962DA82633BE', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_1043CCCAB767ECB10565962DA82633BE" name="PRECOCOMPRA_55109831008FCA21AB975C2DF0604B9C" id="PRECOCOMPRA_1043CCCAB767ECB10565962DA82633BE"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                  
                                                                                                                                                            
                                                                                                                                                              
                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                       
                                                                                <tr class="delete-return-55109831008FCA21AB975C2DF0604B9C no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('55109831008FCA21AB975C2DF0604B9C', 'NS-0005')">
                                                                                                            <img src="/web-files/upload/thumbs/E6291027FF33CA592D9F944F55BAFACA/9972D3121EE69D03B90CB89171731A48.jpg" border="0" alt="Camisa Masculina" title="Camisa Masculina">
                                                                                                        <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>NS-0005</td>
                                            <td>Camisa Masculina<br/><b>Tamanho: </b> XG - Extra Grande</td>
                                            <td>Nilton Santos</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_55109831008FCA21AB975C2DF0604B9C" value="0.300" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_55109831008FCA21AB975C2DF0604B9C', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_1986D7FA5444002C40A3CF0312789DB1" value="5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '1986D7FA5444002C40A3CF0312789DB1')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="1986D7FA5444002C40A3CF0312789DB1" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_1986D7FA5444002C40A3CF0312789DB1', '1986D7FA5444002C40A3CF0312789DB1','55109831008FCA21AB975C2DF0604B9C', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="159,00" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_55109831008FCA21AB975C2DF0604B9C" id="pName_1986D7FA5444002C40A3CF0312789DB1" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_1986D7FA5444002C40A3CF0312789DB1', '1986D7FA5444002C40A3CF0312789DB1', '55109831008FCA21AB975C2DF0604B9C')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_1986D7FA5444002C40A3CF0312789DB1" name="PRECOCOMPRA_55109831008FCA21AB975C2DF0604B9C" id="PRECOCOMPRA_1986D7FA5444002C40A3CF0312789DB1"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/>
                                            </td>
                                        </tr>
                                                                           
                                
                            </table>
                        </div>
                    </div>
                </div>
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
<?php }} ?>

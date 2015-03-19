<?php /*%%SmartyHeaderCode:206636750155033143007386-91952642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44d1af8a43de18adf24dc475b4eeec1b581fe07a' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/cadastrar.tpl',
      1 => 1425575521,
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
    'd2757d9a87afd4a4ee5d3c7003eecfcc561c2f07' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/html_descricao.tpl',
      1 => 1425486998,
      2 => 'file',
    ),
    '07fde81a6255eb6d1646b8a5af808d99c58047ea' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/html_especificacao.tpl',
      1 => 1425662847,
      2 => 'file',
    ),
    'd6fe851a73ae76aa30af1d73a4ad29e2ad509c14' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/btn_enviar.tpl',
      1 => 1425503196,
      2 => 'file',
    ),
    'faf56018874dd26c51cf65ced85a10a407be064d' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/tinymce_2.tpl',
      1 => 1425486997,
      2 => 'file',
    ),
    '5d845aeca603183216c663abda55568885594a7e' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/footer.tpl',
      1 => 1425578459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206636750155033143007386-91952642',
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'de' => 0,
    'preco' => 0,
    'nome' => 0,
    'referencia' => 0,
    'peso' => 0,
    'categoria' => 0,
    'web_files' => 0,
    'descricao' => 0,
    'especificacoes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55033143469f24_69099491',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55033143469f24_69099491')) {function content_55033143469f24_69099491($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Cadastro de Produtos</title>

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
            <li  class="active"><a href="/en/produtos/produtos-lista">
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
        <!-- <form class="navbar-form navbar-right" role="search" method="post">
    <div class="form-group">
        <input type="hidden" name="actionType" value="search"/>
        <input type="text" class="search-input form-control" name="search" value="" placeholder="Pesquisa"/>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>


 -->
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Cadastro de Produtos
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/en/admin/welcome">Home</a>
            </li>
            <li>
                <i class="fa fa-paper-plane"></i>  <a href="/en/produtos/produtos-lista">Lista de Produtos</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Cadastro de Produtos
            </li>
        </ol>
    </div>
</div>    

<div class="row">
    <div class="col-md-12 text-left">
                    <div class="alert alert-info alert-dismissable" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
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
                <div class="row">
                    <form class="navbar-form navbar-left" style="width: 100%" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Produto</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">

                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="de" name="de" value='' placeholder="De" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                                            </div>	
                                            <br/>
                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="preco" name="preco" value='' placeholder="Para" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                                            </div>	
                                            <br/>
                                            
                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="nome" name="nome" value='' maxlength="40" placeholder="Nome"/>
                                            </div>
                                            <br/>
                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="referencia" name="referencia" value='' maxlength="20" placeholder="Referência"/>
                                            </div>
                                            <br/>
                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="peso" name="peso" maxlength="8" value='' placeholder="Peso" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/>
                                            </div>


                                            <br/>

                                            <div class="input-group input-group-lg">
                                                <div>Categoria</div>
                                                <select name="categoria" class="form-control">
                                                    <option value="junior" >Junior</option>
                                                    <option value="nilton-santos" >Nilton Santos</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Gerenciamento de Rótulos - <img src="/web-files/img/less.png" id="less" data-toggle="tooltip" border="0" alt="" title="Retirar Linha"> <img src="/web-files/img/plus.png" id="plus" data-toggle="tooltip" border="0" alt="" title="Adicionar Linha"></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center">Rótulo</th>
                                                        <th style="text-align: center">Especificação</th>
                                                        
                                                        <th style="text-align: center">Quantidade</th>
                                                        <th style="text-align: center">Posição</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="data">
                                                    <tr class="datagrid">
                                                        <td style='text-align: center'><input type='text' name='rotulo_0' id='rotulo_0' value=''/></td>
                                                        <td style='text-align: center'><input type='text' name='especificacao_0' id='especificacao_0' value=''/></td>
                                                        
                                                        <td style='text-align: center'><input type='text' name='quantidade_0' id='quantidade_0' value='' onkeypress='return formataNumDV(event, this, 6);'/></td>
                                                        <td style='text-align: center'><input type='text' name='ordem_0' id='ordem_0' value='1' readonly='readonly'/></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <style>
                                                .colorpicker{
                                                    margin-top: -40px;
                                                    margin-left: 6px;
                                                }
                                            </style>
                                            <script>
                                                $(document).ready(function() {
                                                    $("#less").click(function() {
                                                        datagrid_less()
                                                    });
                                                    $("#plus").click(function() {
                                                        datagrid_plus()
                                                    });

                                                    $(function() {
                                                        $('.demo-0').colorpicker();
                                                    });

                                                });

                                                function datagrid_less() {
                                                    var n = 0;
                                                    $("#data .datagrid").each(function(i) {
                                                        n = i;
                                                    });
                                                    var qntdd = (parseInt(n) - 1);

                                                    if (qntdd > -1) {
                                                        $("#data .datagrid:last").remove();
                                                    }

                                                }
                                                function datagrid_plus() {

                                                    var n = 0;
                                                    $("#data .datagrid").each(function(i) {
                                                        n = i;
                                                    });
                                                    var qntdd = (parseInt(n) + 1);

                                                    var str = "<tr class='datagrid'>";
                                                    str += "<td style='text-align: center'><input type='text' name='rotulo_" + qntdd + "' id='rotulo_" + qntdd + "' value=''/></td>";
                                                    str += "<td style='text-align: center'><input type='text' name='especificacao_" + qntdd + "' id='especificacao_" + qntdd + "' value=''/></td>";
                                                    //str += "<td style='text-align: center'><input type='checkbox' name='is_cor_" + qntdd + "' id='is_cor_" + qntdd + "'/></td>";
                                                    //str += "<td style='text-align: center'>";
                                                    //str += "<div class='input-group colorpicker-component demo-" + qntdd + " demo-auto colorpicker-element'>";
                                                    //str += "<input type='' name='cor_" + qntdd + "' id='cor_" + qntdd + "' value='#000000' class='form-control'>";
                                                    //str += "<span class='input-group-addon'><i style='background-color: rgb(0, 0, 0);'></i></span>";
                                                    //str += "</div>"; 
                                                    //str += "</td>";
                                                    str += "<td style='text-align: center'><input type='text' name='quantidade_" + qntdd + "' id='quantidade_" + qntdd + "' value='' onkeypress='return formataNumDV(event, this, 6);'/></td>";
                                                    str += "<td style='text-align: center'><input type='text' name='ordem_" + qntdd + "' id='ordem_" + qntdd + "' value='" + (qntdd + 1) + "' readonly='readonly'/></td>";
                                                    str += "</tr>";

                                                    $("#data").append(str);

                                                    $('.demo-' + qntdd).colorpicker();
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Descrição Rápida - Apague a que não for necessária!</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">
                                            <p>
                                                <textarea class="form-control" rows="18" style="min-width: 100%" id="descricao" name="descricao">                                
                                                                                                            <div>
    <h3>CAMISAS MASCULINAS</h3>
    <p>1.	Camisa de manga curta, feita de algodão super leve, para aproveitar o clima carioca em grande estilo.</p>
</div>

<div>
    <h3>REGATAS MASCULINAS</h3>
    <p>1.	Regata tinturada, 100% algodão e cheia de moral. Afinal, ela combina com tudo que você imaginar.</p>
</div>

<div>
    <h3>CASACO MASCULINO</h3>
    <p>1.	Aqui conforto também é palavra de ordem. O casaco feito para te proteger do vento pós surfe, futebol, e outras “carioquices”.</p>
</div>

<div>
    <h3>VESTIDO</h3>
    <p>1.	A praticidade do vestidinho, com uma modelagem solta e confortável, 100% algodão. Mais um super trunfo pra sua coleção.</p> 
</div>

<div>
    <h3>REGATAS FEMININAS</h3>
    <p>1.	Regatinha perfeita pros dias de sol berrante. 100% algodão, básica pra ter no armário naquele "fico pronta em 5min!"</p>
</div>

<div>
    <h3>BLUSAS FEMININAS</h3>
    <p>1.	Mais uma pro clube das camisas básicas e práticas.100% algodão, daquele tipo que dá vontade de usar todo dia. Aproveita!</p>
</div>

 
                                                                               
                                                </textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Mais Informações - Apague a que não for necessária ou edite!</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">
                                            <p>
                                                <textarea class="form-control" rows="18" style="min-width: 100%" id="especificacoes" name="especificacoes">
                                                                                                            <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">MASCULINO</div>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th style="padding: 8px !important">Tamanhos</th>
                <th style="padding: 8px !important">Dimensões</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>P – Pequena</td>
                <td>6 / 53 X 66 / 220</td>
            </tr>
            <tr>
                <td>M – Média</td>
                <td>12 / 54 X 70 / 220</td>
            </tr>
            <tr>
                <td>G – Grande</td>
                <td>11 / 56 X 72 / 220</td>
            </tr>
            <tr>
                <td>GG – Grande</td>
                <td>6 / 59 X 73 / 220</td>
            </tr>
            <tr>
                <td>XG – Extra Grande</td>
                <td>5 / 61 X 74 / 220</td>
            </tr>
        </tbody>
    </table>
</div>

<hr/>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">FEMININO</div>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th style="padding: 8px !important">Tamanhos</th>
                <th style="padding: 8px !important">Dimensões</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>P – Pequena</td><td>4 / 42 X 51 / 200 </td>
            </tr>
            <tr>
                <td>M – Média</td><td>4 / 45 X 54 / 200 </td>
            </tr>
            <tr>
                <td>G – Grande</td><td>1 / 49 X 56 / 200 </td>
            </tr>
            <tr>
                <td>GG – Grande</td><td>2 / 51 X 57 / 200 </td>
            </tr>
            <tr>
                <td>XG – Extra Grande</td><td>2 / 51 X 57 / 200 </td>
            </tr>
        </tbody>
    </table>
</div>

<hr/>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">REGATA MASCULINA</div>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th style="padding: 8px !important">Tamanhos</th>
                <th style="padding: 8px !important">Dimensões</th>
                <th style="padding: 8px !important">#</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>P – Pequena</td><td>2 / 50 X 78 / 200 </td><td>GR</td>
            </tr>
            <tr>
                <td>M – Média</td><td>4 / 53 X 78 / 200 </td><td>GR</td>
            </tr>
            <tr>
                <td>G – Grande</td><td>4 / 56 X 81 / 200 </td><td>GR</td>
            </tr>
            <tr>
                <td>GG – Grande</td><td>2 / 57 X 83 / 200 </td><td>GR</td>
            </tr>
            <tr>
                <td>XG – Extra Grande</td><td>1 / 62 X 87 / 200 </td><td>GR</td>
            </tr>
        </tbody>
    </table>
</div>

<hr/>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">VESTIDO</div>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th style="padding: 8px !important">Tamanhos</th>
                <th style="padding: 8px !important">Dimensões</th>
                <th style="padding: 8px !important">#</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>P – Pequena</td><td>5 / 42 X 83 / 220 </td><td>GR</td>
            </tr>
            <tr>
                <td>M – Média</td><td>4 / 45 X 85 / 220 </td><td>GR</td>
            </tr>
            <tr>
                <td>G – Grande</td><td>2 / 47 X 88 / 220</td><td>GR</td>
            </tr>
            <tr>
                <td>GG – Grande</td><td>2 / 50 X 90 / 220</td><td>GR</td>
            </tr>
            <tr>
                <td>XG - Extra Grande</td><td> </td><td> </td>
            </tr>
        </tbody>
    </table>
</div>

<hr/>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">VESTIDO REGATA</div>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th style="padding: 8px !important">Tamanhos</th>
                <th style="padding: 8px !important">Dimensões</th>
                <th style="padding: 8px !important">#</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>P – Pequena</td><td>3 / 39 X 79 / 200 </td><td>GR</td>
            </tr>
            <tr>
                <td>M – Média</td><td>4 / 39 X 81 / 200 </td><td>GR</td>
            </tr>
            <tr>
                <td>G – Grande</td><td>2 / 42 X 83 / 800 </td><td>GR</td>
            </tr>
            <tr>
                <td>GG – Grande</td><td>2 / 45 X 84 / 200 </td><td>GR</td>
            </tr>
            <tr>
                <td>XG – Extra Grande</td><td> </td><td> </td>
            </tr>
        </tbody>
    </table>
</div>

 
                                                              
                                                </textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group input-group-lg">
                                    <button type="submit" class="btn btn-primary btn-lg" role="button">Enviar</button>
                                </div>
                            </div> 
                        </div>
                    </form>
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
</html><?php }} ?>

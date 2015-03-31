<?php /*%%SmartyHeaderCode:88161185555032e24cde384-29364970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c559f3e5ab8f53414b92a16ae655c63717fcc60b' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/contas_lista.tpl',
      1 => 1425487024,
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
  'nocache_hash' => '88161185555032e24cde384-29364970',
  'variables' => 
  array (
    'language' => 0,
    'contas' => 0,
    'conta' => 0,
    'i' => 0,
    'stt' => 0,
    'eye' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55032e251986e0_03235567',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55032e251986e0_03235567')) {function content_55032e251986e0_03235567($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Lista de Clientes</title>

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
            <li  class="active">
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
            Lista de Clientes
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/en/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Clientes
            </li>
        </ol>
    </div>
</div> 

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Clientes</h3>
            </div>
            <div class="panel-body">
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
                                    <td>26/02/2015 - 13h14</td>
                                    <td>Cassio Lemos</td>
                                    <td>cassio@designlab.com.br</td>
                                    <td>15/03/1990</td>
                                    <td>M</td>
                                    <td>(21)981977595 </td>
                                    <td>139.912.497-82</td>
                                                                                                                                                          
                                    <td>
                                        <a href="/en/conta/status/0/a556a5934a1952ee2ab524aeab7f3b54"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/en/conta/editar/a556a5934a1952ee2ab524aeab7f3b54"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                    </td>
                                </tr>     
                                                  
                            
                          
                                                            <tr class="myDragClass">
                                    <td>25/02/2015 - 14h36</td>
                                    <td>Thiago Lima</td>
                                    <td>biss.thiago@gmail.com</td>
                                    <td>01/01/2001</td>
                                    <td>M</td>
                                    <td>(21)1111111 </td>
                                    <td>134.615.827-43</td>
                                                                                                                                                          
                                    <td>
                                        <a href="/en/conta/status/0/35b0543d3a4ebdf2642a019464ded1d1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/en/conta/editar/35b0543d3a4ebdf2642a019464ded1d1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                    </td>
                                </tr>     
                                                  
                            
                          
                                                            <tr >
                                    <td>04/02/2015 - 10h33</td>
                                    <td>Daniel Gassmann</td>
                                    <td>dgassmann@uol.com.br</td>
                                    <td>28/06/1979</td>
                                    <td>M</td>
                                    <td>(21)2124380853 </td>
                                    <td>080.689.437-73</td>
                                                                                                                                                          
                                    <td>
                                        <a href="/en/conta/status/0/a2790f4c07678e50a4a5cc536cdd2ab5"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/en/conta/editar/a2790f4c07678e50a4a5cc536cdd2ab5"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                    </td>
                                </tr>     
                                                  
                            
                          
                                                            <tr class="myDragClass">
                                    <td>31/01/2015 - 00h04</td>
                                    <td>Vladiana Vodopires Coelho</td>
                                    <td>vladiana2006@hotmail.com</td>
                                    <td>14/05/1978</td>
                                    <td>M</td>
                                    <td>(12)78989030 </td>
                                    <td>209.935.138-40</td>
                                                                                                                                                          
                                    <td>
                                        <a href="/en/conta/status/0/9528a616f6f668af6f8d14442311f942"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/en/conta/editar/9528a616f6f668af6f8d14442311f942"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                    </td>
                                </tr>     
                                                  
                            
                          
                                                            <tr >
                                    <td>28/01/2015 - 18h48</td>
                                    <td>André Philipe da Rocha Tafuri</td>
                                    <td>philipetafuri@hotmail.com</td>
                                    <td>30/12/1975</td>
                                    <td>M</td>
                                    <td>(22)992438600 </td>
                                    <td>071.532.467-54</td>
                                                                                                                                                          
                                    <td>
                                        <a href="/en/conta/status/0/f5cd556b8614e742c09be2dbd642fcfe"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/en/conta/editar/f5cd556b8614e742c09be2dbd642fcfe"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                    </td>
                                </tr>     
                                                  
                            
                          
                                                            <tr class="myDragClass">
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
                                                  
                            
                          
                                                            <tr >
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
                                                  
                            
                          
                                                            <tr class="myDragClass">
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
                                                  
                            
                          
                                                            <tr >
                                    <td>10/12/2014 - 16h10</td>
                                    <td>Thais Alves</td>
                                    <td>thais@mariadebarro.com.br</td>
                                    <td>13/03/1988</td>
                                    <td>F</td>
                                    <td>(21)964327132 </td>
                                    <td>105.854.387-30</td>
                                                                                                                                                          
                                    <td>
                                        <a href="/en/conta/status/0/8e46e6d37f10b54930a56a70a6bf7b9f"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/en/conta/editar/8e46e6d37f10b54930a56a70a6bf7b9f"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                    </td>
                                </tr>     
                                                  
                            
                          
                                                            <tr class="myDragClass">
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
                                                  
                            
                          
                                                            <tr >
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
                                                  
                            
                          
                                                            <tr class="myDragClass">
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
                                                  
                            
                          
                                                            <tr >
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
                                                  
                            
                          
                                                            <tr class="myDragClass">
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
                                                  
                            
                          
                                                            <tr >
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
                                                  
                            
                          
                                                            <tr class="myDragClass">
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
                                                  
                            
                          
                                                            <tr >
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
                                                  
                            
                          
                                                            <tr class="myDragClass">
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
                                                  
                            
                          
                                                            <tr >
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
                                                  
                            
                          
                                                            <tr class="myDragClass">
                                    <td>23/09/2014 - 15h30</td>
                                    <td>Thais Alves</td>
                                    <td>tatha.ap@gmail.com</td>
                                    <td>14/03/2000</td>
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

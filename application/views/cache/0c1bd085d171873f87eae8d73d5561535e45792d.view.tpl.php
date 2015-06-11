<?php /*%%SmartyHeaderCode:520504164551176d993b776-62533001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c1bd085d171873f87eae8d73d5561535e45792d' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/admin/view.tpl',
      1 => 1425503105,
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
    'b1dae9349de967450604554e50b1c130bb8bc667' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/admin/btn_voltar.tpl',
      1 => 1425487027,
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
  'nocache_hash' => '520504164551176d993b776-62533001',
  'variables' => 
  array (
    'language' => 0,
    'cadastro' => 0,
    'pessoa' => 0,
    'endereco_entrega' => 0,
    'endereco' => 0,
    'nenhum_produto' => 0,
    'compras' => 0,
    'lista_desejo' => 0,
    'pedido' => 0,
    'anotacoes' => 0,
    'anotacao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551176d9e57f82_00112589',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551176d9e57f82_00112589')) {function content_551176d9e57f82_00112589($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estilo Carioca | Visualizar Pedido</title>

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
            <li ><a href="/pt/produtos/produtos-lista">
                    <i class="fa fa-paper-plane"></i> Produtos</a>
            </li> 
            <li  class="active">
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
                <a href="/pt/nota-fiscal/exportar" style="position: relative;"><i class="fa fa-expand"></i> Exportar Nota Fiscal <span class="btn btn-sm btn-danger aviso-balao">16</span> </a>
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
        
    </div>
</div>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Visualizar Pedido
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/pt/admin/welcome">Home</a>
            </li>
            <li>
                <i class="fa fa-home"></i>  <a href="/pt/pedidos/pedidos-lista">Lista de Pedidos</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Visualizar Pedido
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="row">
            <br/>
            <div class="col-md-12 text-right">
                                <a href="/pt/pedidos/pedidos-lista" data-toggle="tooltip"  title="Voltar" style="color:#d9534f; font-size: 30px;"><i class="fa fa-reply">&nbsp</i></a>                
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Pedido</h3>
            </div>
            <div class="panel-body">
                <h3>1. Dados do comprador</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default"> 
                            <table class="table" style="font-size: 14px">
                                  
                                    <tr>
                                        <td>Nome:</td>
                                        <td>Rogerio Pontes</td>
                                    </tr>
                                    <tr>
                                        <td>E-mail:</td>
                                        <td>rogerio@designlab.com.br</td>
                                    </tr>
                                    <tr>
                                        <td>Data de nascimento:</td>
                                        <td>01/01/2000</td>
                                    </tr>
                                    <tr>
                                        <td>Sexo:</td>
                                        <td>M</td>
                                    </tr>
                                    <tr>
                                        <td>Telefone:</td>
                                        <td>(61) 12313333</td>
                                    </tr>
                                                            </table>
                        </div>
                    </div>
                </div>

                <h3>2. Endereço de Entrega</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default"> 
                            <table class="table" style="font-size: 14px">
                                  
                                    <tr>

                                        <td>CEP:</td>
                                        <td>72450-050</td> 

                                    </tr>    
                                    <tr> <td>Endereço:</td><td>Quadra 5, nº 104 </td> </tr>
                                    <tr> <td>Bairro:</td><td>Setor Leste (Gama)</td> </tr>
                                    <tr> <td>Cidade/UF:</td><td>Brasília/DF</td> </tr>
                                                            </table>
                        </div>
                    </div>
                </div>            

                <h3>3. Produtos escolhidos</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default"> 
                            <table class="table" style="font-size: 14px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome do Produto</th>
                                        <th>Categoria</th>
                                        <th>Referência</th>
                                        <th>Preço Unitário</th>
                                        <th>Peso Unitário</th>
                                        <th>Peso Total</th>
                                        <th style="width: 11%;">Quantidade</th>
                                        <th style="width: 8%;">Total</th>
                                            
                                    </tr>
                                </thead>

                                <tbody>

                                        
                                          

                                            <tr>
                                                <td><a href="/pt/descricao/categoria/junior/baby-look-1"><img src="/web-files/upload/thumbs/17FA110FC1061D6646C2DB21C4C6790C/75C30DE81EBAC591379D505E73DADE6E.png" alt="Baby Look" title="Baby Look" border="0"/></a><br/></td>
                                                <td style="text-transform: uppercase;">Baby Look<br/><b>Tamanho: </b> P - Pequena</td>
                                                <td>Junior</td>
                                                <td>J-0002</td>
                                                <td>159,00</td>
                                                <td>0.000</td>
                                                <td id="peso_total_produto_">0.000</td>
                                                <td id="n_input" align="center">1</td>
                                                <td  id="preco_total_produto_"> 159,00</td>
                                                
                                            </tr>

                                         
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>4. Dados da Transação</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default"> 


                            <table class="table">    
                                <tr>
                                    <td>Código da transação:</td>
                                    <td>dd006179f9e449f7db143cbf10c83322</td>
                                </tr>
                                <tr>
                                    <td>Código do cliente:</td>
                                    <td>a1556fee63cd9251d6c66b01206bbdbd</td>
                                </tr>
                                <tr>
                                    <td>Número do Pedido:</td>
                                    <td>0000000015</td>
                                </tr>
                                <tr>
                                    <td>Data e hora da transação:</td>
                                    <td>2015-03-06 17:26:43</td>
                                </tr>
                                <tr>
                                    <td>Forma de envio:</td>
                                    <td>PAC</td>
                                </tr>
                                <tr>
                                    <td>Forma de pagamento:</td>
                                    <td>paypal</td>
                                </tr>
                                
                                 
                                    <tr>
                                        <td>Total da compra sem impostos:</td>
                                        <td>159,00</td>
                                    </tr>
                                                                <tr>
                                    <td>Imposto:</td>
                                    <td></td>
                                </tr>
                                                                <tr>
                                    <td>Taxa de entrega:</td>
                                    <td>
                                         
                                             
                                                Grátis 
                                             
                                                                            </td>
                                </tr>
                                <tr>
                                    <td>Total à pagar:</td>
                                    <td>159,00</td>
                                </tr>
                            </table>   


                        </div>
                    </div>           
                </div>

                <h3>5. Status do produto</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default"> 
                            <table class="table"> 
                                <thead>
                                    <tr>
                                        <th>Situação</th>
                                        <th>Data</th>
                                        <th>Anotações</th>
                                    </tr>
                                </thead>

                                <tbody>
                                      

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>

                                     
                                </tbody>
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
</html><?php }} ?>

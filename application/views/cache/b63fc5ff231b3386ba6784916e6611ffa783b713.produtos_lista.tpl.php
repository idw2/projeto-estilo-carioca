<?php /*%%SmartyHeaderCode:6522645665449384c1f8797-76241697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b63fc5ff231b3386ba6784916e6611ffa783b713' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/produtos_lista.tpl',
      1 => 1413984682,
      2 => 'file',
    ),
    'c6982c052fcb863c3429c9a12c41006977b75c81' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/header.tpl',
      1 => 1410533859,
      2 => 'file',
    ),
    '0731b73a1e7144101fd76a90427ad49520238e95' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/navbar.tpl',
      1 => 1412107046,
      2 => 'file',
    ),
    '3354c23c2b0994231c448d214524b943620d6cf8' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/logo.tpl',
      1 => 1409231611,
      2 => 'file',
    ),
    '111d7ae4f4e53aaa3d0d0806256eb8f8ea7f3b1d' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/search.tpl',
      1 => 1411481605,
      2 => 'file',
    ),
    'e803ed1d8fd7cbcd1694b5fbd5b39c1efa8f8ac4' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/footer.tpl',
      1 => 1409231605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6522645665449384c1f8797-76241697',
  'variables' => 
  array (
    'categoria' => 0,
    'qtdd_aneis' => 0,
    'qtdd_brincos' => 0,
    'qtdd_colares' => 0,
    'qtdd_pulseiras' => 0,
    'qtdd_conjuntos' => 0,
    'total_produtos' => 0,
    'language' => 0,
    'ERRO_NAO_EXISTE_PRODUTOS' => 0,
    'meus_produtos' => 0,
    'produto' => 0,
    'myDragClass' => 0,
    'dtq' => 0,
    'star' => 0,
    'stt' => 0,
    'eye' => 0,
    'nv' => 0,
    'heart' => 0,
    'pmc' => 0,
    'dolar' => 0,
    'tph' => 0,
    'trophy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5449384c7dee02_75314547',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5449384c7dee02_75314547')) {function content_5449384c7dee02_75314547($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Lista de Produtos</title>

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
            <li  class="" ><a href="/pt/admin/welcome">Home</a></li>
                            <div class="panel-heading"><h4>Produtos</h4></div>
                <li  class="active" ><a href="/pt/produtos/produtos-lista">Lista</a></li> 
                <div class="panel-heading"><h4>Pagamentos</h4></div>
                <li  class="" ><a href="/pt/pedidos/pedidos-lista">Lista</a></li>
                <div class="panel-heading"><h4>Newsletter</h4></div>
                <li  class="" ><a href="/pt/informacoes/newsletter-lista">Lista</a></li>
                <div class="panel-heading"><h4>Atendentes</h4></div>
                <li  class="" ><a href="/pt/admin/atendentes-lista">Lista</a></li>
                <div class="panel-heading"><h4>Páginas</h4></div>
                <li  class="" ><a href="/pt/html/quem_somos">Quem somos</a></li>
                <li  class="" ><a href="/pt/html/promocoes">Promoções</a></li>
                <li  class="" ><a href="/pt/html/programa-vantagens">Programa de Vantagens</a></li>              
                <li  class="" ><a href="/pt/html/programa-fidelidade">Programa de Fidelidade</a></li>              
                <li  class="" ><a href="/pt/html/politica-privacidade">Política de Privacidade</a></li>              
                <li  class="" ><a href="/pt/html/termos-servicos">Termos de serviço</a></li>              
                <li  class="" ><a href="/pt/html/forma-pagamento">Forma de Pagamento</a></li>              
                <li  class="" ><a href="/pt/html/entrega-devolucao">Entrega e Devolução</a></li>              
                <li  class="" ><a href="/pt/html/procon-rj">PROCON-RJ</a></li>              
                <li  class="" ><a href="/pt/html/perguntas-frequentes">Perguntas Frequentes</a></li>              
                <li  class="" ><a href="/pt/html/cuidados-produtos">Cuidado com os Produtos</a></li>              
                        <div class="panel-heading"><h4>Serviços</h4></div>
            <li  class="" ><a href="/pt/admin/alterar-senha">Alterar senha</a></li>              
            <li  class="" ><a href="/pt/admin/logout">Sair</a></li>              
            
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
        <input type="text" class="search-input form-control" name="search" placeholder="Pesquisa"/>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>



        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            
            <h2><span class="label label-default">Lista de Produtos</span></h2>
            <br/>
    
            <div class="row">
                <div class="col-md-6">
                    <form method="post" id="formCategoria">
                        <input type="radio" name="categoria" value="todos"  onclick="javascript:start_form_categoria();"/> Todos
                        <input type="radio" name="categoria" value="aneis"  checked="true"   onclick="javascript:start_form_categoria();"/> Anéis
                        <input type="radio" name="categoria" value="brincos"   onclick="javascript:start_form_categoria();"/> Brinco
                        <input type="radio" name="categoria" value="colares"   onclick="javascript:start_form_categoria();"/> Colares
                        <input type="radio" name="categoria" value="pulseiras"   onclick="javascript:start_form_categoria();"/> Pulseiras
                        <input type="radio" name="categoria" value="conjuntos"   onclick="javascript:start_form_categoria();"/> Conjuntos
                        <input type="hidden" name="actionType" value="pesquisa_categoria">
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="panel-default">
                        <table class='table'>
                            <thead>
                                <th colspan="2">Total de produtos por categoras</th>
                            </thead>
                            <tr>
                                <td>Anéis</td><td>67</td>
                            </tr>
                            <tr>
                                <td>Brincos</td><td>80</td>
                            </tr>
                            <tr>
                                <td>Colares</td><td>45</td>
                            </tr>
                            <tr>
                                <td>Pulseiras</td><td>68</td>
                            </tr>
                            <tr>
                                <td>Conjuntos</td><td>0</td>
                            </tr>
                            <tr>
                                <td><strong>Total geral</strong></td><td>260</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            
            <br/>
            <a href="/pt/produtos/cadastrar" class="btn btn-default navbar-btn"><i class="fa fa-plus-square"></i> Cadastro de Produtos</a>
            <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span>

            <div class="panel-default">
       
                <table class='table' id="table-1" cellspacing="0" cellpadding="2">
                    <thead>
                        <th>Cadastro</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Referência</th>
                        <th>Peso</th>
                        <th style="width: 10%;">Quantidade</th>
                        <th style="width: 10%;">De</th>
                        <th style="width: 10%;">Para</th>
                        <th style="width: 29%;">Ações</th>
                    </thead>
                    
                                        
                     
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="0428BA4D6CED6676D4C903429ACB2110" class="" style="cursor: move;" >
                                    <td>02/09/2014 - 13h08</td>
                                    <td>Anel dourado cruz - preta</td>
                                    <td>Anéis</td>
                                    <td>A-00012</td>
                                    <td>0.500Kg.</td>
                                    <td><input type="text" class="form-control" name="0428BA4D6CED6676D4C903429ACB2110" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="4"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_0428BA4D6CED6676D4C903429ACB2110" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="52,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_0428BA4D6CED6676D4C903429ACB2110" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="34,20"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-cruz-preta"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-cruz-preta"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-cruz-preta"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-cruz-preta"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-cruz-preta"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-cruz-preta"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-cruz-preta"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-cruz-preta')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="BA1059BB37702C988645CE1DA29D996D" class="" style="cursor: move;" >
                                    <td>02/09/2014 - 13h37</td>
                                    <td>Anel dourado Cruz - branca</td>
                                    <td>Anéis</td>
                                    <td>A-00014</td>
                                    <td>0.300Kg.</td>
                                    <td><input type="text" class="form-control" name="BA1059BB37702C988645CE1DA29D996D" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_BA1059BB37702C988645CE1DA29D996D" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="57,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_BA1059BB37702C988645CE1DA29D996D" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="34,20"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-cruz-branca-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-cruz-branca-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-cruz-branca-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-cruz-branca-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-cruz-branca-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-cruz-branca-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-cruz-branca-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-cruz-branca-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="F6E952B25FA3577D9730B5B2FA13E120" class="" style="cursor: move;" >
                                    <td>02/09/2014 - 13h44</td>
                                    <td>Anel largo cravejado de zircônia </td>
                                    <td>Anéis</td>
                                    <td>A-00013</td>
                                    <td>0.010Kg.</td>
                                    <td><input type="text" class="form-control" name="F6E952B25FA3577D9730B5B2FA13E120" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_F6E952B25FA3577D9730B5B2FA13E120" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="173,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_F6E952B25FA3577D9730B5B2FA13E120" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="103,80"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-largo-cravejado-de-zirconia"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-largo-cravejado-de-zirconia"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-largo-cravejado-de-zirconia"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-largo-cravejado-de-zirconia"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-largo-cravejado-de-zirconia"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-largo-cravejado-de-zirconia"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-largo-cravejado-de-zirconia"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-largo-cravejado-de-zirconia')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="F004FF500CA229AF45A66F98A6747D0B" class="" style="cursor: move;" >
                                    <td>02/09/2014 - 13h31</td>
                                    <td> Kit 3 anéis de corações </td>
                                    <td>Anéis</td>
                                    <td>A-00016</td>
                                    <td>0.300Kg.</td>
                                    <td><input type="text" class="form-control" name="F004FF500CA229AF45A66F98A6747D0B" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_F004FF500CA229AF45A66F98A6747D0B" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="216,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_F004FF500CA229AF45A66F98A6747D0B" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="129,60"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/kit-3-aneis-de-coracoes-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/kit-3-aneis-de-coracoes-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/kit-3-aneis-de-coracoes-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/kit-3-aneis-de-coracoes-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/0/kit-3-aneis-de-coracoes-1"><span class="ico-default-trophy " data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/kit-3-aneis-de-coracoes-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/kit-3-aneis-de-coracoes-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/kit-3-aneis-de-coracoes-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="A6BD77F941AB5392E8D19AB4343C57A3" class="" style="cursor: move;" >
                                    <td>02/09/2014 - 13h34</td>
                                    <td>Anel folhas dourado e fumê</td>
                                    <td>Anéis</td>
                                    <td>A-00003</td>
                                    <td>0.300Kg.</td>
                                    <td><input type="text" class="form-control" name="A6BD77F941AB5392E8D19AB4343C57A3" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_A6BD77F941AB5392E8D19AB4343C57A3" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="53,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_A6BD77F941AB5392E8D19AB4343C57A3" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="31,80"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-folhas-dourado-e-fume"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/1/anel-folhas-dourado-e-fume"><span class="ico-default-eye desative" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-folhas-dourado-e-fume"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-folhas-dourado-e-fume"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-folhas-dourado-e-fume"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-folhas-dourado-e-fume"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-folhas-dourado-e-fume"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-folhas-dourado-e-fume')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="CCBE9335A1DA91994715C66BE4E22453" class="" style="cursor: move;" >
                                    <td>01/09/2014 - 18h33</td>
                                    <td>Anel coração regulável</td>
                                    <td>Anéis</td>
                                    <td>A-00007</td>
                                    <td>0.300Kg.</td>
                                    <td><input type="text" class="form-control" name="CCBE9335A1DA91994715C66BE4E22453" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_CCBE9335A1DA91994715C66BE4E22453" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="97,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_CCBE9335A1DA91994715C66BE4E22453" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="58,20"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-coracao-regulavel"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-coracao-regulavel"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-coracao-regulavel"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-coracao-regulavel"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/0/anel-coracao-regulavel"><span class="ico-default-trophy " data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-coracao-regulavel"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-coracao-regulavel"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-coracao-regulavel')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="8FFE9D7D00E6ECE7ACC36257CEF2204E" class="" style="cursor: move;" >
                                    <td>02/09/2014 - 13h42</td>
                                    <td>Anel círculos de zircônia </td>
                                    <td>Anéis</td>
                                    <td>A-00010</td>
                                    <td>0.300Kg.</td>
                                    <td><input type="text" class="form-control" name="8FFE9D7D00E6ECE7ACC36257CEF2204E" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_8FFE9D7D00E6ECE7ACC36257CEF2204E" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="108,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_8FFE9D7D00E6ECE7ACC36257CEF2204E" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,80"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-circulos-de-zirconia-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-circulos-de-zirconia-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-circulos-de-zirconia-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-circulos-de-zirconia-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/0/anel-circulos-de-zirconia-1"><span class="ico-default-trophy " data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-circulos-de-zirconia-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-circulos-de-zirconia-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-circulos-de-zirconia-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="11FF4E0FD4C3EAA7661A1F773561D2B6" class="" style="cursor: move;" >
                                    <td>02/09/2014 - 16h46</td>
                                    <td>Kit 3 anéis com bolinhas de zircônia</td>
                                    <td>Anéis</td>
                                    <td>A-00006</td>
                                    <td>0.300Kg.</td>
                                    <td><input type="text" class="form-control" name="11FF4E0FD4C3EAA7661A1F773561D2B6" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_11FF4E0FD4C3EAA7661A1F773561D2B6" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="108,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_11FF4E0FD4C3EAA7661A1F773561D2B6" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,80"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/kit-3-aneis-com-bolinhas-de-zirconia"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/kit-3-aneis-com-bolinhas-de-zirconia"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/kit-3-aneis-com-bolinhas-de-zirconia"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/kit-3-aneis-com-bolinhas-de-zirconia"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/kit-3-aneis-com-bolinhas-de-zirconia"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/kit-3-aneis-com-bolinhas-de-zirconia"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/kit-3-aneis-com-bolinhas-de-zirconia"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/kit-3-aneis-com-bolinhas-de-zirconia')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="584AF019ABD9F629EBE4A1CF4D5C402B" class="" style="cursor: move;" >
                                    <td>10/09/2014 - 14h49</td>
                                    <td>Anel dourado em coração vazado</td>
                                    <td>Anéis</td>
                                    <td>A-00005</td>
                                    <td>0.300Kg.</td>
                                    <td><input type="text" class="form-control" name="584AF019ABD9F629EBE4A1CF4D5C402B" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_584AF019ABD9F629EBE4A1CF4D5C402B" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_584AF019ABD9F629EBE4A1CF4D5C402B" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="25,20"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-em-coracao-vazado"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-em-coracao-vazado"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-em-coracao-vazado"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-em-coracao-vazado"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-em-coracao-vazado"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-em-coracao-vazado"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-em-coracao-vazado"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-em-coracao-vazado')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="B9ACB57870877B5110EF1563B2376048" class="" style="cursor: move;" >
                                    <td>10/09/2014 - 15h37</td>
                                    <td>Anel dourado linhas vazado</td>
                                    <td>Anéis</td>
                                    <td>A-00004</td>
                                    <td>0.300Kg.</td>
                                    <td><input type="text" class="form-control" name="B9ACB57870877B5110EF1563B2376048" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_B9ACB57870877B5110EF1563B2376048" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="53,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_B9ACB57870877B5110EF1563B2376048" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="31,80"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-linhas-vazado-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-linhas-vazado-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-linhas-vazado-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-linhas-vazado-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-linhas-vazado-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-linhas-vazado-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-linhas-vazado-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-linhas-vazado-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="0A8DDDEF2FDEF2CC7EB3499B77378C31" class="" style="cursor: move;" >
                                    <td>10/09/2014 - 16h30</td>
                                    <td>Anel dourado com quadrado vazado</td>
                                    <td>Anéis</td>
                                    <td>A-00001</td>
                                    <td>0.300Kg.</td>
                                    <td><input type="text" class="form-control" name="0A8DDDEF2FDEF2CC7EB3499B77378C31" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_0A8DDDEF2FDEF2CC7EB3499B77378C31" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_0A8DDDEF2FDEF2CC7EB3499B77378C31" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="38,40"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-com-quadrado-vazado"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-com-quadrado-vazado"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-com-quadrado-vazado"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-com-quadrado-vazado"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-com-quadrado-vazado"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-com-quadrado-vazado"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-com-quadrado-vazado"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-com-quadrado-vazado')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="52A661732F57666B05F76DFCA815E442" class="" style="cursor: move;" >
                                    <td>10/09/2014 - 17h32</td>
                                    <td>Anel AMORE com pingente </td>
                                    <td>Anéis</td>
                                    <td>A-00002</td>
                                    <td>0.300Kg.</td>
                                    <td><input type="text" class="form-control" name="52A661732F57666B05F76DFCA815E442" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_52A661732F57666B05F76DFCA815E442" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="97,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_52A661732F57666B05F76DFCA815E442" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="52,20"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-amore-com-pingente"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-amore-com-pingente"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-amore-com-pingente"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-amore-com-pingente"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-amore-com-pingente"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-amore-com-pingente"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-amore-com-pingente"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-amore-com-pingente')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="24E2B0A66868345A4592A88BE7AA4455" class="" style="cursor: move;" >
                                    <td>12/09/2014 - 16h05</td>
                                    <td>Anel dourado com 3 elos móveis</td>
                                    <td>Anéis</td>
                                    <td>A-00030</td>
                                    <td>0.300Kg.</td>
                                    <td><input type="text" class="form-control" name="24E2B0A66868345A4592A88BE7AA4455" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_24E2B0A66868345A4592A88BE7AA4455" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="53,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_24E2B0A66868345A4592A88BE7AA4455" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="31,80"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-com-3-elos-moveis"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-com-3-elos-moveis"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-com-3-elos-moveis"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-com-3-elos-moveis"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-com-3-elos-moveis"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-com-3-elos-moveis"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-com-3-elos-moveis"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-com-3-elos-moveis')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="773D19073E29B066F226D0BCF6F289D3" class="" style="cursor: move;" >
                                    <td>17/09/2014 - 11h31</td>
                                    <td>Anel escrita giratória </td>
                                    <td>Anéis</td>
                                    <td>A000033</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="773D19073E29B066F226D0BCF6F289D3" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_773D19073E29B066F226D0BCF6F289D3" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="75,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_773D19073E29B066F226D0BCF6F289D3" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-escrita-giratoria-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-escrita-giratoria-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-escrita-giratoria-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-escrita-giratoria-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-escrita-giratoria-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-escrita-giratoria-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-escrita-giratoria-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-escrita-giratoria-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="4B192DEDA5122728AD9D7DDB668D09EA" class="" style="cursor: move;" >
                                    <td>17/09/2014 - 12h37</td>
                                    <td>Anel dourado 3 elos com zircônia</td>
                                    <td>Anéis</td>
                                    <td>A-00025</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="4B192DEDA5122728AD9D7DDB668D09EA" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_4B192DEDA5122728AD9D7DDB668D09EA" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_4B192DEDA5122728AD9D7DDB668D09EA" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="38,40"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-3-elos-com-zirconia-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-3-elos-com-zirconia-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-3-elos-com-zirconia-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-3-elos-com-zirconia-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-3-elos-com-zirconia-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-3-elos-com-zirconia-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-3-elos-com-zirconia-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-3-elos-com-zirconia-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="61F27F4F7D8039E3F2352D689812809D" class="" style="cursor: move;" >
                                    <td>17/09/2014 - 15h11</td>
                                    <td>Kit anel onda. rosê e fumê</td>
                                    <td>Anéis</td>
                                    <td>A-00021</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="61F27F4F7D8039E3F2352D689812809D" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_61F27F4F7D8039E3F2352D689812809D" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="60,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_61F27F4F7D8039E3F2352D689812809D" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="36,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/kit-anel-onda.-rose-e-fume-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/kit-anel-onda.-rose-e-fume-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/kit-anel-onda.-rose-e-fume-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/kit-anel-onda.-rose-e-fume-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/kit-anel-onda.-rose-e-fume-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/kit-anel-onda.-rose-e-fume-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/kit-anel-onda.-rose-e-fume-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/kit-anel-onda.-rose-e-fume-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="8A9606081641099998CE4700EF0B24BD" class="" style="cursor: move;" >
                                    <td>17/09/2014 - 15h38</td>
                                    <td>Anel gatinho</td>
                                    <td>Anéis</td>
                                    <td>A-00018</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="8A9606081641099998CE4700EF0B24BD" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_8A9606081641099998CE4700EF0B24BD" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="97,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_8A9606081641099998CE4700EF0B24BD" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="58,20"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-gatinho"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-gatinho"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-gatinho"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-gatinho"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-gatinho"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-gatinho"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-gatinho"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-gatinho')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="21FDBB31CD4AEAE0751F3536E5533B52" class="" style="cursor: move;" >
                                    <td>17/09/2014 - 15h55</td>
                                    <td>Anel dourado 4 elos espaçados</td>
                                    <td>Anéis</td>
                                    <td>A-00031</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="21FDBB31CD4AEAE0751F3536E5533B52" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_21FDBB31CD4AEAE0751F3536E5533B52" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="57,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_21FDBB31CD4AEAE0751F3536E5533B52" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="34,20"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-4-elos-espacados"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-4-elos-espacados"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-4-elos-espacados"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-4-elos-espacados"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-4-elos-espacados"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-4-elos-espacados"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-4-elos-espacados"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-4-elos-espacados')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="6D50A07F00AF699E14E36897918C0094" class="" style="cursor: move;" >
                                    <td>17/09/2014 - 16h13</td>
                                    <td>Anel folha dourado com zircônia</td>
                                    <td>Anéis</td>
                                    <td>A-00017</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="6D50A07F00AF699E14E36897918C0094" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_6D50A07F00AF699E14E36897918C0094" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="86,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_6D50A07F00AF699E14E36897918C0094" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="51,60"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-folha-dourado-com-zirconia-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-folha-dourado-com-zirconia-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-folha-dourado-com-zirconia-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-folha-dourado-com-zirconia-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-folha-dourado-com-zirconia-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-folha-dourado-com-zirconia-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-folha-dourado-com-zirconia-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-folha-dourado-com-zirconia-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="A6A074ED265D9505364B58512624FEEF" class="" style="cursor: move;" >
                                    <td>17/09/2014 - 16h28</td>
                                    <td>Anel dourado lago com faixas de zircônia</td>
                                    <td>Anéis</td>
                                    <td>A-00019</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="A6A074ED265D9505364B58512624FEEF" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_A6A074ED265D9505364B58512624FEEF" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="93,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_A6A074ED265D9505364B58512624FEEF" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="55,80"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-lago-com-faixas-de-zirconia-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-lago-com-faixas-de-zirconia-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-lago-com-faixas-de-zirconia-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-lago-com-faixas-de-zirconia-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-lago-com-faixas-de-zirconia-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-lago-com-faixas-de-zirconia-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-lago-com-faixas-de-zirconia-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-lago-com-faixas-de-zirconia-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="FF3306A9C8D1F0E525F8230D595BCF0B" class="" style="cursor: move;" >
                                    <td>17/09/2014 - 16h36</td>
                                    <td>Anel dourado Gotas</td>
                                    <td>Anéis</td>
                                    <td>A-00024</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="FF3306A9C8D1F0E525F8230D595BCF0B" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_FF3306A9C8D1F0E525F8230D595BCF0B" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_FF3306A9C8D1F0E525F8230D595BCF0B" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="25,20"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-gotas"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-gotas"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-gotas"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-gotas"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-gotas"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-gotas"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-gotas"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-gotas')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="8A30B37EC367D55BD6E5963F7ABF0F50" class="" style="cursor: move;" >
                                    <td>17/09/2014 - 17h08</td>
                                    <td>Anel fumê gotas</td>
                                    <td>Anéis</td>
                                    <td>A-00023</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="8A30B37EC367D55BD6E5963F7ABF0F50" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_8A30B37EC367D55BD6E5963F7ABF0F50" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_8A30B37EC367D55BD6E5963F7ABF0F50" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="25,20"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-fume-gotas"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-fume-gotas"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-fume-gotas"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-fume-gotas"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-fume-gotas"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-fume-gotas"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-fume-gotas"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-fume-gotas')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="7A1428BA2EDAE3CE008D1F3173AC93FD" class="" style="cursor: move;" >
                                    <td>17/09/2014 - 17h19</td>
                                    <td>Anel dourado cartier</td>
                                    <td>Anéis</td>
                                    <td>A-00037</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="7A1428BA2EDAE3CE008D1F3173AC93FD" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_7A1428BA2EDAE3CE008D1F3173AC93FD" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="85,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_7A1428BA2EDAE3CE008D1F3173AC93FD" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="51,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-cartier"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/1/anel-dourado-cartier"><span class="ico-default-eye desative" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-cartier"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-cartier"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-cartier"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-cartier"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-cartier"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-cartier')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="6D9F37C8A177AE5B42B9B2A8A876C064" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 11h16</td>
                                    <td>Kit anel 3 cores com zircônia</td>
                                    <td>Anéis</td>
                                    <td>A-00026</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="6D9F37C8A177AE5B42B9B2A8A876C064" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_6D9F37C8A177AE5B42B9B2A8A876C064" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="162,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_6D9F37C8A177AE5B42B9B2A8A876C064" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="97,20"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/kit-anel-3-cores-com-zirconia"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/kit-anel-3-cores-com-zirconia"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/kit-anel-3-cores-com-zirconia"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/kit-anel-3-cores-com-zirconia"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/kit-anel-3-cores-com-zirconia"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/kit-anel-3-cores-com-zirconia"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/kit-anel-3-cores-com-zirconia"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/kit-anel-3-cores-com-zirconia')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="2D140CF2BA792DD675A07083BACD260A" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 11h23</td>
                                    <td>anel dourado rendado de zircônia branca</td>
                                    <td>Anéis</td>
                                    <td>A-00038</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="2D140CF2BA792DD675A07083BACD260A" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_2D140CF2BA792DD675A07083BACD260A" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="98,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_2D140CF2BA792DD675A07083BACD260A" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="58,80"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-rendado-de-zirconia-branca"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-rendado-de-zirconia-branca"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-rendado-de-zirconia-branca"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-rendado-de-zirconia-branca"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-rendado-de-zirconia-branca"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-rendado-de-zirconia-branca"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-rendado-de-zirconia-branca"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-rendado-de-zirconia-branca')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="48FD46B81748788308E843449F0A1FF5" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 11h58</td>
                                    <td>Anel dourado rendado com zircônia branca</td>
                                    <td>Anéis</td>
                                    <td>A-00039</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="48FD46B81748788308E843449F0A1FF5" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_48FD46B81748788308E843449F0A1FF5" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="98,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_48FD46B81748788308E843449F0A1FF5" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="58,80"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-rendado-com-zirconia-branca-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-rendado-com-zirconia-branca-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-rendado-com-zirconia-branca-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-rendado-com-zirconia-branca-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-rendado-com-zirconia-branca-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-rendado-com-zirconia-branca-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-rendado-com-zirconia-branca-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-rendado-com-zirconia-branca-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="F3157BC47E9777C96C54E08178124829" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 12h12</td>
                                    <td>Anel dourado meia aliança com zircônia </td>
                                    <td>Anéis</td>
                                    <td>A-00040</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="F3157BC47E9777C96C54E08178124829" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_F3157BC47E9777C96C54E08178124829" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="76,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_F3157BC47E9777C96C54E08178124829" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,60"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-meia-alianca-com-zirconia-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-meia-alianca-com-zirconia-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-meia-alianca-com-zirconia-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-meia-alianca-com-zirconia-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-meia-alianca-com-zirconia-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-meia-alianca-com-zirconia-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-meia-alianca-com-zirconia-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-meia-alianca-com-zirconia-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="7F868632F145363D9755AB07C9A8194E" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 12h21</td>
                                    <td>Anel dourado com 3 elos de zircônia </td>
                                    <td>Anéis</td>
                                    <td>A-00041</td>
                                    <td>0.010Kg.</td>
                                    <td><input type="text" class="form-control" name="7F868632F145363D9755AB07C9A8194E" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_7F868632F145363D9755AB07C9A8194E" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="98,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_7F868632F145363D9755AB07C9A8194E" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="58,80"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-com-3-elos-de-zirconia-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-com-3-elos-de-zirconia-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-com-3-elos-de-zirconia-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-com-3-elos-de-zirconia-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-com-3-elos-de-zirconia-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-com-3-elos-de-zirconia-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-com-3-elos-de-zirconia-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-com-3-elos-de-zirconia-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="FB4A30529C4EFBF83663C32A0791E1B9" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 12h40</td>
                                    <td>Kit 5 anéis dourados </td>
                                    <td>Anéis</td>
                                    <td>A-00044</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="FB4A30529C4EFBF83663C32A0791E1B9" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_FB4A30529C4EFBF83663C32A0791E1B9" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="152,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_FB4A30529C4EFBF83663C32A0791E1B9" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="91,20"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/kit-5-aneis-dourados-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/kit-5-aneis-dourados-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/kit-5-aneis-dourados-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/kit-5-aneis-dourados-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/kit-5-aneis-dourados-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/kit-5-aneis-dourados-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/kit-5-aneis-dourados-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/kit-5-aneis-dourados-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="CA1DF5846C0B4C658F7416BDDB27A709" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 13h33</td>
                                    <td>Anel dourado com círculos de zircônia </td>
                                    <td>Anéis</td>
                                    <td>A-00042</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="CA1DF5846C0B4C658F7416BDDB27A709" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_CA1DF5846C0B4C658F7416BDDB27A709" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="76,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_CA1DF5846C0B4C658F7416BDDB27A709" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,60"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-com-circulos-de-zirconia-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-com-circulos-de-zirconia-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-com-circulos-de-zirconia-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-com-circulos-de-zirconia-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-com-circulos-de-zirconia-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-com-circulos-de-zirconia-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-com-circulos-de-zirconia-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-com-circulos-de-zirconia-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="8628D0FDA920049B2DEA1BD61F96A023" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 14h43</td>
                                    <td>Anel dourado com detalhe prata, zircônia</td>
                                    <td>Anéis</td>
                                    <td>A-00048</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="8628D0FDA920049B2DEA1BD61F96A023" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_8628D0FDA920049B2DEA1BD61F96A023" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="98,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_8628D0FDA920049B2DEA1BD61F96A023" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="58,80"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-com-detalhe-prata-zirconia"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-com-detalhe-prata-zirconia"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-com-detalhe-prata-zirconia"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-com-detalhe-prata-zirconia"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-com-detalhe-prata-zirconia"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-com-detalhe-prata-zirconia"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-com-detalhe-prata-zirconia"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-com-detalhe-prata-zirconia')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="0FD05D1A3C66DC77A77594DEADF58B2C" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 15h12</td>
                                    <td>Anel dourado de corrente no centro</td>
                                    <td>Anéis</td>
                                    <td>A-00050</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="0FD05D1A3C66DC77A77594DEADF58B2C" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="-5"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_0FD05D1A3C66DC77A77594DEADF58B2C" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="91,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_0FD05D1A3C66DC77A77594DEADF58B2C" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,60"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-de-corrente-no-centro-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-de-corrente-no-centro-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-de-corrente-no-centro-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-de-corrente-no-centro-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-de-corrente-no-centro-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-de-corrente-no-centro-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-de-corrente-no-centro-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-de-corrente-no-centro-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="37EA36CA6C6159BB5DE6491983A646DA" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 15h21</td>
                                    <td>Anel dourado de onda com zircônia branca</td>
                                    <td>Anéis</td>
                                    <td>A-00051</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="37EA36CA6C6159BB5DE6491983A646DA" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_37EA36CA6C6159BB5DE6491983A646DA" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="65,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_37EA36CA6C6159BB5DE6491983A646DA" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-de-onda-com-zirconia-branca"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-de-onda-com-zirconia-branca"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-de-onda-com-zirconia-branca"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-de-onda-com-zirconia-branca"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-de-onda-com-zirconia-branca"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-de-onda-com-zirconia-branca"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-de-onda-com-zirconia-branca"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-de-onda-com-zirconia-branca')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="839C9DA3795BDFBA5536CCAE0C556E14" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 15h32</td>
                                    <td>Anel dourado com fios de zirciônia</td>
                                    <td>Anéis</td>
                                    <td>A-00053</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="839C9DA3795BDFBA5536CCAE0C556E14" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_839C9DA3795BDFBA5536CCAE0C556E14" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="98,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_839C9DA3795BDFBA5536CCAE0C556E14" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="98,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-com-fios-de-zircionia"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-com-fios-de-zircionia"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-com-fios-de-zircionia"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-com-fios-de-zircionia"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-com-fios-de-zircionia"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-com-fios-de-zircionia"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-com-fios-de-zircionia"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-com-fios-de-zircionia')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="35478CE36BDEC85DBDAEE518012BF700" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 15h44</td>
                                    <td>Anel dourado aliança de zircônia</td>
                                    <td>Anéis</td>
                                    <td>A-00054</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="35478CE36BDEC85DBDAEE518012BF700" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_35478CE36BDEC85DBDAEE518012BF700" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="65,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_35478CE36BDEC85DBDAEE518012BF700" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-alianca-de-zirconia-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-alianca-de-zirconia-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-alianca-de-zirconia-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-alianca-de-zirconia-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-alianca-de-zirconia-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-alianca-de-zirconia-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-alianca-de-zirconia-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-alianca-de-zirconia-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="8E0C29EBEA61AA12395BB2EF759534C6" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 16h05</td>
                                    <td>Anel dourado grande com pedra</td>
                                    <td>Anéis</td>
                                    <td>A-00056</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="8E0C29EBEA61AA12395BB2EF759534C6" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_8E0C29EBEA61AA12395BB2EF759534C6" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="207,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_8E0C29EBEA61AA12395BB2EF759534C6" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="124,20"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-grande-com-pedra"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-grande-com-pedra"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-grande-com-pedra"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-grande-com-pedra"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-grande-com-pedra"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-grande-com-pedra"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-grande-com-pedra"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-grande-com-pedra')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="572FB7B8CC7DB2236557E44B41F6EF49" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 16h27</td>
                                    <td>Anel dourado detalhe prata com pingente</td>
                                    <td>Anéis</td>
                                    <td>A-00055</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="572FB7B8CC7DB2236557E44B41F6EF49" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_572FB7B8CC7DB2236557E44B41F6EF49" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="91,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_572FB7B8CC7DB2236557E44B41F6EF49" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,60"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-detalhe-prata-com-pingente-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-detalhe-prata-com-pingente-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-detalhe-prata-com-pingente-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-detalhe-prata-com-pingente-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-detalhe-prata-com-pingente-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-detalhe-prata-com-pingente-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-detalhe-prata-com-pingente-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-detalhe-prata-com-pingente-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="3D4613B847C78D9A8C3C2E0AD4326BC6" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 16h38</td>
                                    <td>Anel dourado boleado</td>
                                    <td>Anéis</td>
                                    <td>A-00034</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="3D4613B847C78D9A8C3C2E0AD4326BC6" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_3D4613B847C78D9A8C3C2E0AD4326BC6" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="43,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_3D4613B847C78D9A8C3C2E0AD4326BC6" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="25,80"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-boleado"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-boleado"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-boleado"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-boleado"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-boleado"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-boleado"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-boleado"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-boleado')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="1409F0713CB0B01A76FF914CB76783B0" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 16h45</td>
                                    <td>Anel dourado com zirconias caixa alta</td>
                                    <td>Anéis</td>
                                    <td>A-00029</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="1409F0713CB0B01A76FF914CB76783B0" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_1409F0713CB0B01A76FF914CB76783B0" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_1409F0713CB0B01A76FF914CB76783B0" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="38,40"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-com-zirconias-caixa-alta-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-com-zirconias-caixa-alta-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-com-zirconias-caixa-alta-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-com-zirconias-caixa-alta-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-com-zirconias-caixa-alta-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-com-zirconias-caixa-alta-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-com-zirconias-caixa-alta-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-com-zirconias-caixa-alta-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="45B961F8D174DD9E2753E3B9EE41E967" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 16h47</td>
                                    <td>Anel dourado caixa alta</td>
                                    <td>Anéis</td>
                                    <td>A-00028</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="45B961F8D174DD9E2753E3B9EE41E967" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_45B961F8D174DD9E2753E3B9EE41E967" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_45B961F8D174DD9E2753E3B9EE41E967" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="25,20"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-caixa-alta"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-caixa-alta"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-caixa-alta"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-caixa-alta"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-caixa-alta"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-caixa-alta"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-caixa-alta"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-caixa-alta')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="44E7BC3951220D78FFB794C4641D8905" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 16h51</td>
                                    <td>Anel dourado fosco caixa alta</td>
                                    <td>Anéis</td>
                                    <td>A-00027</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="44E7BC3951220D78FFB794C4641D8905" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_44E7BC3951220D78FFB794C4641D8905" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_44E7BC3951220D78FFB794C4641D8905" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="25,20"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-fosco-caixa-alta"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-fosco-caixa-alta"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-fosco-caixa-alta"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-fosco-caixa-alta"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-fosco-caixa-alta"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-fosco-caixa-alta"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-fosco-caixa-alta"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-fosco-caixa-alta')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="917B88F5FD3E7ECF93C4F91D908C18EA" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 17h40</td>
                                    <td>Conjunto anéis caixa alta</td>
                                    <td>Anéis</td>
                                    <td>A-00059</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="917B88F5FD3E7ECF93C4F91D908C18EA" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_917B88F5FD3E7ECF93C4F91D908C18EA" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="120,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_917B88F5FD3E7ECF93C4F91D908C18EA" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="72,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/conjunto-aneis-caixa-alta"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/conjunto-aneis-caixa-alta"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/conjunto-aneis-caixa-alta"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/conjunto-aneis-caixa-alta"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/conjunto-aneis-caixa-alta"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/conjunto-aneis-caixa-alta"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/conjunto-aneis-caixa-alta"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/conjunto-aneis-caixa-alta')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="0BDF4B16336DBD12B5B3A76573104F0B" class="" style="cursor: move;" >
                                    <td>18/09/2014 - 17h58</td>
                                    <td>Anel dourado de linhas</td>
                                    <td>Anéis</td>
                                    <td>A-00009</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="0BDF4B16336DBD12B5B3A76573104F0B" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="0"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_0BDF4B16336DBD12B5B3A76573104F0B" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="53,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_0BDF4B16336DBD12B5B3A76573104F0B" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="31,80"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-de-linhas"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-de-linhas"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-de-linhas"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-de-linhas"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-de-linhas"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-de-linhas"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-de-linhas"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-de-linhas')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="BAED1946F51353EB4B168EEF3E0A8097" class="" style="cursor: move;" >
                                    <td>25/09/2014 - 18h17</td>
                                    <td>Anel dourado liso regulável</td>
                                    <td>Anéis</td>
                                    <td>A-00058</td>
                                    <td>0.030Kg.</td>
                                    <td><input type="text" class="form-control" name="BAED1946F51353EB4B168EEF3E0A8097" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_BAED1946F51353EB4B168EEF3E0A8097" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="53,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_BAED1946F51353EB4B168EEF3E0A8097" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="31,80"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-dourado-liso-regulavel-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-liso-regulavel-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-liso-regulavel-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-dourado-liso-regulavel-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/0/anel-dourado-liso-regulavel-1"><span class="ico-default-trophy " data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-liso-regulavel-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-liso-regulavel-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-liso-regulavel-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="B25255F233A82F1B261A5DF6265961D1" class="" style="cursor: move;" >
                                    <td>25/09/2014 - 12h52</td>
                                    <td>Anel com 5 elos e bolinhas com zircônia</td>
                                    <td>Anéis</td>
                                    <td>A-00032</td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="B25255F233A82F1B261A5DF6265961D1" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_B25255F233A82F1B261A5DF6265961D1" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="150,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_B25255F233A82F1B261A5DF6265961D1" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="90,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/anel-com-5-elos-e-bolinhas-com-zirconia-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/1/anel-com-5-elos-e-bolinhas-com-zirconia-1"><span class="ico-default-eye desative" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-com-5-elos-e-bolinhas-com-zirconia-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/0/anel-com-5-elos-e-bolinhas-com-zirconia-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-com-5-elos-e-bolinhas-com-zirconia-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-com-5-elos-e-bolinhas-com-zirconia-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-com-5-elos-e-bolinhas-com-zirconia-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-com-5-elos-e-bolinhas-com-zirconia-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="BF66C472454960C4EC9C789222A4D0B3" class="" style="cursor: move;" >
                                    <td>22/10/2014 - 16h27</td>
                                    <td>Brinco dourado com base de zirconias bra</td>
                                    <td>Anéis</td>
                                    <td>B-00077</td>
                                    <td>0.016Kg.</td>
                                    <td><input type="text" class="form-control" name="BF66C472454960C4EC9C789222A4D0B3" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_BF66C472454960C4EC9C789222A4D0B3" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="160,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_BF66C472454960C4EC9C789222A4D0B3" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="151,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/brinco-dourado-com-base-de-zirconias-bra-2"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/brinco-dourado-com-base-de-zirconias-bra-2"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/brinco-dourado-com-base-de-zirconias-bra-2"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/brinco-dourado-com-base-de-zirconias-bra-2"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/brinco-dourado-com-base-de-zirconias-bra-2"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/brinco-dourado-com-base-de-zirconias-bra-2"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/brinco-dourado-com-base-de-zirconias-bra-2"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/brinco-dourado-com-base-de-zirconias-bra-2')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="1D0E868E370FF2D8B7DAF4BFF93F94BB" class="" style="cursor: move;" >
                                    <td>22/10/2014 - 15h06</td>
                                    <td>Brinco fume com canutilho e pendente V</td>
                                    <td>Anéis</td>
                                    <td>B-00099</td>
                                    <td>0.010Kg.</td>
                                    <td><input type="text" class="form-control" name="1D0E868E370FF2D8B7DAF4BFF93F94BB" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_1D0E868E370FF2D8B7DAF4BFF93F94BB" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="80,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_1D0E868E370FF2D8B7DAF4BFF93F94BB" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="70,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/brinco-fume-com-canutilho-e-pendente-v"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/brinco-fume-com-canutilho-e-pendente-v"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/brinco-fume-com-canutilho-e-pendente-v"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/brinco-fume-com-canutilho-e-pendente-v"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/brinco-fume-com-canutilho-e-pendente-v"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/brinco-fume-com-canutilho-e-pendente-v"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/brinco-fume-com-canutilho-e-pendente-v"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/brinco-fume-com-canutilho-e-pendente-v')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="A0A4D2CF441926D3FFC08A2DF1519808" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 13h34</td>
                                    <td>Bracelete dourado com perola grande</td>
                                    <td>Anéis</td>
                                    <td></td>
                                    <td>0.000Kg.</td>
                                    <td><input type="text" class="form-control" name="A0A4D2CF441926D3FFC08A2DF1519808" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_A0A4D2CF441926D3FFC08A2DF1519808" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="141,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_A0A4D2CF441926D3FFC08A2DF1519808" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="141,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/1/bracelete-dourado-com-perola-grande-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/bracelete-dourado-com-perola-grande-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/bracelete-dourado-com-perola-grande-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/bracelete-dourado-com-perola-grande-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/bracelete-dourado-com-perola-grande-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/bracelete-dourado-com-perola-grande-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/bracelete-dourado-com-perola-grande-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/bracelete-dourado-com-perola-grande-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="AF52523758DF994B0809D4AD09244434" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 15h35</td>
                                    <td>Anel dourado com coraçao cravejado de zi</td>
                                    <td>Anéis</td>
                                    <td>A-00060</td>
                                    <td>0.003Kg.</td>
                                    <td><input type="text" class="form-control" name="AF52523758DF994B0809D4AD09244434" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_AF52523758DF994B0809D4AD09244434" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="86,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_AF52523758DF994B0809D4AD09244434" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="86,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-dourado-com-coracao-cravejado-de-zi-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-com-coracao-cravejado-de-zi-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-com-coracao-cravejado-de-zi-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-dourado-com-coracao-cravejado-de-zi-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-com-coracao-cravejado-de-zi-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-com-coracao-cravejado-de-zi-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-com-coracao-cravejado-de-zi-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-com-coracao-cravejado-de-zi-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="A409F0643AE57B3BBDF880AB453812D0" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 15h41</td>
                                    <td>Anel dourado largo com detalhes e zircon</td>
                                    <td>Anéis</td>
                                    <td>A-00069</td>
                                    <td>0.009Kg.</td>
                                    <td><input type="text" class="form-control" name="A409F0643AE57B3BBDF880AB453812D0" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_A409F0643AE57B3BBDF880AB453812D0" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="108,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_A409F0643AE57B3BBDF880AB453812D0" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="108,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-dourado-largo-com-detalhes-e-zircon-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-largo-com-detalhes-e-zircon-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-largo-com-detalhes-e-zircon-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-dourado-largo-com-detalhes-e-zircon-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-largo-com-detalhes-e-zircon-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-largo-com-detalhes-e-zircon-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-largo-com-detalhes-e-zircon-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-largo-com-detalhes-e-zircon-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="866675BC657292CA2DE8127F1D54CBAC" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 15h45</td>
                                    <td>Peças com 1 ano de garantia com 7 milési</td>
                                    <td>Anéis</td>
                                    <td>A-00061</td>
                                    <td>0.003Kg.</td>
                                    <td><input type="text" class="form-control" name="866675BC657292CA2DE8127F1D54CBAC" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_866675BC657292CA2DE8127F1D54CBAC" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="86,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_866675BC657292CA2DE8127F1D54CBAC" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="86,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/pecas-com-1-ano-de-garantia-com-7-milesi-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/pecas-com-1-ano-de-garantia-com-7-milesi-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/pecas-com-1-ano-de-garantia-com-7-milesi-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/pecas-com-1-ano-de-garantia-com-7-milesi-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/pecas-com-1-ano-de-garantia-com-7-milesi-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/pecas-com-1-ano-de-garantia-com-7-milesi-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/pecas-com-1-ano-de-garantia-com-7-milesi-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/pecas-com-1-ano-de-garantia-com-7-milesi-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="2BBA165E25D0F75C836450DE61F33CDD" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 15h48</td>
                                    <td>Anel dourado com pinjente de coraçao cra</td>
                                    <td>Anéis</td>
                                    <td>A-00070</td>
                                    <td>0.007Kg.</td>
                                    <td><input type="text" class="form-control" name="2BBA165E25D0F75C836450DE61F33CDD" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_2BBA165E25D0F75C836450DE61F33CDD" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="162,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_2BBA165E25D0F75C836450DE61F33CDD" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="162,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-dourado-com-pinjente-de-coracao-cra-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-com-pinjente-de-coracao-cra-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-com-pinjente-de-coracao-cra-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-dourado-com-pinjente-de-coracao-cra-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-com-pinjente-de-coracao-cra-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-com-pinjente-de-coracao-cra-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-com-pinjente-de-coracao-cra-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-com-pinjente-de-coracao-cra-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="E7A824E4EEE6822D6695E596D887AE58" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 15h53</td>
                                    <td>Anel dourado com cristal rosa em formato</td>
                                    <td>Anéis</td>
                                    <td>A-00066</td>
                                    <td>0.015Kg.</td>
                                    <td><input type="text" class="form-control" name="E7A824E4EEE6822D6695E596D887AE58" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_E7A824E4EEE6822D6695E596D887AE58" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="118,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_E7A824E4EEE6822D6695E596D887AE58" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="118,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-dourado-com-cristal-rosa-em-formato-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-com-cristal-rosa-em-formato-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-com-cristal-rosa-em-formato-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-dourado-com-cristal-rosa-em-formato-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-com-cristal-rosa-em-formato-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-com-cristal-rosa-em-formato-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-com-cristal-rosa-em-formato-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-com-cristal-rosa-em-formato-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="95AD0FC2E8C176E180846768F579F4B3" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 15h56</td>
                                    <td>Anel dourado com cristal lilas em format</td>
                                    <td>Anéis</td>
                                    <td>A-00065</td>
                                    <td>0.015Kg.</td>
                                    <td><input type="text" class="form-control" name="95AD0FC2E8C176E180846768F579F4B3" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_95AD0FC2E8C176E180846768F579F4B3" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="118,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_95AD0FC2E8C176E180846768F579F4B3" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="118,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-dourado-com-cristal-lilas-em-format-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-com-cristal-lilas-em-format-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-com-cristal-lilas-em-format-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-dourado-com-cristal-lilas-em-format-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-com-cristal-lilas-em-format-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-com-cristal-lilas-em-format-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-com-cristal-lilas-em-format-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-com-cristal-lilas-em-format-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="FF726F4F2F7997DD9C7677B4D44784BF" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 15h58</td>
                                    <td>Anel dourado com zirconias pretas e cris</td>
                                    <td>Anéis</td>
                                    <td>A-00063</td>
                                    <td>0.008Kg.</td>
                                    <td><input type="text" class="form-control" name="FF726F4F2F7997DD9C7677B4D44784BF" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_FF726F4F2F7997DD9C7677B4D44784BF" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="216,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_FF726F4F2F7997DD9C7677B4D44784BF" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="216,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-dourado-com-zirconias-pretas-e-cris-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-com-zirconias-pretas-e-cris-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-com-zirconias-pretas-e-cris-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-dourado-com-zirconias-pretas-e-cris-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-com-zirconias-pretas-e-cris-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-com-zirconias-pretas-e-cris-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-com-zirconias-pretas-e-cris-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-com-zirconias-pretas-e-cris-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="C8E36CE9AE1456C96317663821BDFFB2" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 16h01</td>
                                    <td>Anel dourado com zirconias pretas e cris</td>
                                    <td>Anéis</td>
                                    <td>A-00062</td>
                                    <td>0.009Kg.</td>
                                    <td><input type="text" class="form-control" name="C8E36CE9AE1456C96317663821BDFFB2" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_C8E36CE9AE1456C96317663821BDFFB2" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="216,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_C8E36CE9AE1456C96317663821BDFFB2" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="216,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-dourado-com-zirconias-pretas-e-cris-2"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-com-zirconias-pretas-e-cris-2"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-com-zirconias-pretas-e-cris-2"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-dourado-com-zirconias-pretas-e-cris-2"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-com-zirconias-pretas-e-cris-2"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-com-zirconias-pretas-e-cris-2"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-com-zirconias-pretas-e-cris-2"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-com-zirconias-pretas-e-cris-2')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="25CD80017CFBDF163854F30C9B6FC7AE" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 16h04</td>
                                    <td>Anel dourado com zirconias pretas e cris</td>
                                    <td>Anéis</td>
                                    <td>A-00064</td>
                                    <td>0.009Kg.</td>
                                    <td><input type="text" class="form-control" name="25CD80017CFBDF163854F30C9B6FC7AE" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_25CD80017CFBDF163854F30C9B6FC7AE" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="216,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_25CD80017CFBDF163854F30C9B6FC7AE" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="216,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-dourado-com-zirconias-pretas-e-cris-3"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-com-zirconias-pretas-e-cris-3"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-com-zirconias-pretas-e-cris-3"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-dourado-com-zirconias-pretas-e-cris-3"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-com-zirconias-pretas-e-cris-3"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-com-zirconias-pretas-e-cris-3"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-com-zirconias-pretas-e-cris-3"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-com-zirconias-pretas-e-cris-3')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="2BAEC66ACA15D77E8E105EC1BA7CFB99" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 16h07</td>
                                    <td>Anel doudaro com relevo de escamas</td>
                                    <td>Anéis</td>
                                    <td>A-00067</td>
                                    <td>0.011Kg.</td>
                                    <td><input type="text" class="form-control" name="2BAEC66ACA15D77E8E105EC1BA7CFB99" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_2BAEC66ACA15D77E8E105EC1BA7CFB99" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="97,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_2BAEC66ACA15D77E8E105EC1BA7CFB99" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="97,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-doudaro-com-relevo-de-escamas-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-doudaro-com-relevo-de-escamas-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-doudaro-com-relevo-de-escamas-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-doudaro-com-relevo-de-escamas-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-doudaro-com-relevo-de-escamas-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-doudaro-com-relevo-de-escamas-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-doudaro-com-relevo-de-escamas-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-doudaro-com-relevo-de-escamas-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="961B0AE85C17E14E611193962056510C" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 16h09</td>
                                    <td>Anel fume com relevo de escamas</td>
                                    <td>Anéis</td>
                                    <td>A-00068</td>
                                    <td>0.012Kg.</td>
                                    <td><input type="text" class="form-control" name="961B0AE85C17E14E611193962056510C" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_961B0AE85C17E14E611193962056510C" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="97,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_961B0AE85C17E14E611193962056510C" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="97,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-fume-com-relevo-de-escamas-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-fume-com-relevo-de-escamas-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-fume-com-relevo-de-escamas-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-fume-com-relevo-de-escamas-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-fume-com-relevo-de-escamas-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-fume-com-relevo-de-escamas-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-fume-com-relevo-de-escamas-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-fume-com-relevo-de-escamas-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="30C4EFD4082C4E44B4884AF623CFA23C" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 16h12</td>
                                    <td>Anel fume de falange zig zag</td>
                                    <td>Anéis</td>
                                    <td>A-00078</td>
                                    <td>0.001Kg.</td>
                                    <td><input type="text" class="form-control" name="30C4EFD4082C4E44B4884AF623CFA23C" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_30C4EFD4082C4E44B4884AF623CFA23C" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_30C4EFD4082C4E44B4884AF623CFA23C" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-fume-de-falange-zig-zag-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-fume-de-falange-zig-zag-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-fume-de-falange-zig-zag-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-fume-de-falange-zig-zag-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-fume-de-falange-zig-zag-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-fume-de-falange-zig-zag-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-fume-de-falange-zig-zag-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-fume-de-falange-zig-zag-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="3ED3A96380EF2386A484973EDD97C508" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 16h15</td>
                                    <td>Anel dourado de falange coraçao</td>
                                    <td>Anéis</td>
                                    <td>A-00075</td>
                                    <td>0.001Kg.</td>
                                    <td><input type="text" class="form-control" name="3ED3A96380EF2386A484973EDD97C508" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_3ED3A96380EF2386A484973EDD97C508" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_3ED3A96380EF2386A484973EDD97C508" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-dourado-de-falange-coracao-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-de-falange-coracao-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-de-falange-coracao-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-dourado-de-falange-coracao-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-de-falange-coracao-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-de-falange-coracao-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-de-falange-coracao-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-de-falange-coracao-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="2E1CCA6CEBB66EB521479E25667995F2" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 16h18</td>
                                    <td>Anel fume de falange liso</td>
                                    <td>Anéis</td>
                                    <td>A-00073</td>
                                    <td>0.001Kg.</td>
                                    <td><input type="text" class="form-control" name="2E1CCA6CEBB66EB521479E25667995F2" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_2E1CCA6CEBB66EB521479E25667995F2" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_2E1CCA6CEBB66EB521479E25667995F2" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-fume-de-falange-liso-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-fume-de-falange-liso-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-fume-de-falange-liso-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-fume-de-falange-liso-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-fume-de-falange-liso-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-fume-de-falange-liso-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-fume-de-falange-liso-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-fume-de-falange-liso-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="D1B8073C87BF7922696F624F97D08481" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 16h20</td>
                                    <td>Anel dourado de falange liso</td>
                                    <td>Anéis</td>
                                    <td>A-00074</td>
                                    <td>0.001Kg.</td>
                                    <td><input type="text" class="form-control" name="D1B8073C87BF7922696F624F97D08481" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_D1B8073C87BF7922696F624F97D08481" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_D1B8073C87BF7922696F624F97D08481" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-dourado-de-falange-liso-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-de-falange-liso-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-de-falange-liso-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-dourado-de-falange-liso-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-de-falange-liso-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-de-falange-liso-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-de-falange-liso-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-de-falange-liso-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="E5ECB57D9FF97BD557EFBEE3A0DC49E0" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 16h22</td>
                                    <td>Anel fume de falange coroa</td>
                                    <td>Anéis</td>
                                    <td>A-00072</td>
                                    <td>0.002Kg.</td>
                                    <td><input type="text" class="form-control" name="E5ECB57D9FF97BD557EFBEE3A0DC49E0" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_E5ECB57D9FF97BD557EFBEE3A0DC49E0" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="32,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_E5ECB57D9FF97BD557EFBEE3A0DC49E0" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="32,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-fume-de-falange-coroa-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-fume-de-falange-coroa-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-fume-de-falange-coroa-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-fume-de-falange-coroa-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-fume-de-falange-coroa-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-fume-de-falange-coroa-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-fume-de-falange-coroa-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-fume-de-falange-coroa-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="8FB1ABCCB3B34F2CF90BF2AC0C81FC04" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 16h24</td>
                                    <td>Anel dourado de falange zig zag</td>
                                    <td>Anéis</td>
                                    <td>A-00077</td>
                                    <td>0.001Kg.</td>
                                    <td><input type="text" class="form-control" name="8FB1ABCCB3B34F2CF90BF2AC0C81FC04" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_8FB1ABCCB3B34F2CF90BF2AC0C81FC04" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_8FB1ABCCB3B34F2CF90BF2AC0C81FC04" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-dourado-de-falange-zig-zag-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-de-falange-zig-zag-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-de-falange-zig-zag-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-dourado-de-falange-zig-zag-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-de-falange-zig-zag-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-de-falange-zig-zag-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-de-falange-zig-zag-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-de-falange-zig-zag-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="9A0771BB3DE3033B58B49F5F82B4C05B" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 16h26</td>
                                    <td>Anel fume de falange coraçao</td>
                                    <td>Anéis</td>
                                    <td>A-00076</td>
                                    <td>0.001Kg.</td>
                                    <td><input type="text" class="form-control" name="9A0771BB3DE3033B58B49F5F82B4C05B" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_9A0771BB3DE3033B58B49F5F82B4C05B" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="35,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_9A0771BB3DE3033B58B49F5F82B4C05B" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-fume-de-falange-coracao"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-fume-de-falange-coracao"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-fume-de-falange-coracao"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-fume-de-falange-coracao"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-fume-de-falange-coracao"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-fume-de-falange-coracao"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-fume-de-falange-coracao"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-fume-de-falange-coracao')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
                                </tr>
                                                    
                      
                                                                                                                        
                                                                                                                              
                                                                                                                         
                                                                                                                                                                                                                                                                                
                                <tr id="3D44BE61D646162724AA310DEB630FD1" class="" style="cursor: move;" >
                                    <td>14/10/2014 - 16h31</td>
                                    <td>Anel dourado de falange Chanel cravejado</td>
                                    <td>Anéis</td>
                                    <td>A-00071</td>
                                    <td>0.001Kg.</td>
                                    <td><input type="text" class="form-control" name="3D44BE61D646162724AA310DEB630FD1" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_3D44BE61D646162724AA310DEB630FD1" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_3D44BE61D646162724AA310DEB630FD1" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00"/></td>
                                    <td>
                                        <a href="/pt/produtos/destaque/0/anel-dourado-de-falange-chanel-cravejado-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/pt/produtos/status/0/anel-dourado-de-falange-chanel-cravejado-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/pt/produtos/classificar_novo/0/anel-dourado-de-falange-chanel-cravejado-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/pt/produtos/classificar_promocao/1/anel-dourado-de-falange-chanel-cravejado-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/pt/produtos/classificar_mais_vendidos/1/anel-dourado-de-falange-chanel-cravejado-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/pt/produtos/editar/anel-dourado-de-falange-chanel-cravejado-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/pt/produtos/fotos/anel-dourado-de-falange-chanel-cravejado-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('pt/produtos/delete/anel-dourado-de-falange-chanel-cravejado-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
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

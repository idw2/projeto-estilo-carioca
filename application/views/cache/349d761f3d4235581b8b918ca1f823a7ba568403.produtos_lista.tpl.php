<?php /*%%SmartyHeaderCode:1302329027545cb70d177dd0-69239242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349d761f3d4235581b8b918ca1f823a7ba568403' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/produtos_lista.tpl',
      1 => 1415129746,
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
  'nocache_hash' => '1302329027545cb70d177dd0-69239242',
  'variables' => 
  array (
    'falta_produtos_estoque' => 0,
    'categoria' => 0,
    'qtdd_aneis' => 0,
    'qtdd_brincos' => 0,
    'qtdd_colares' => 0,
    'qtdd_pulseiras' => 0,
    'qtdd_conjuntos' => 0,
    'total_produtos' => 0,
    'num_produtos_que_faltam' => 0,
    'referencia_nome_produtos' => 0,
    'referencia_nome_produto' => 0,
    'language' => 0,
    'web_files' => 0,
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
  'unifunc' => 'content_545cb70d7ad6a4_82329311',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545cb70d7ad6a4_82329311')) {function content_545cb70d7ad6a4_82329311($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Lista de Produtos</title>

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
                <li  class="active" ><a href="/homolog/pt/produtos/produtos-lista">Lista</a></li> 
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

                    <div class="container" style="width: 100%;"> 
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading">Busca por Categorias</div>
                                <form method="post" id="formCategoria" style="margin: 3%;">
                                    <input type="radio" name="categoria" value="todos"  onclick="javascript:start_form_categoria();"/> Todos<br/>
                                    <input type="radio" name="categoria" value="aneis"   onclick="javascript:start_form_categoria();"/> Anéis<br/>
                                    <input type="radio" name="categoria" value="brincos"   onclick="javascript:start_form_categoria();"/> Brinco<br/>
                                    <input type="radio" name="categoria" value="colares"   onclick="javascript:start_form_categoria();"/> Colares<br/>
                                    <input type="radio" name="categoria" value="pulseiras"  checked="true"   onclick="javascript:start_form_categoria();"/> Pulseiras<br/>
                                    <input type="radio" name="categoria" value="conjuntos"   onclick="javascript:start_form_categoria();"/> Conjuntos<br/>
                                    <input type="hidden" name="actionType" value="pesquisa_categoria">
                                </form>
                            </div> 
                        </div> 
                    </div> 

                    <div class="container" style="width: 100%;"> 
                        <div class="row">
                            <div class='panel panel-default'>
                                <div class="panel-heading">Total de Produtos</div>
                                <table class='table'>
                                    <thead>
                                    <th>Categoria</th>
                                    <th>Quantidade</th>
                                    </thead>
                                    <tr>
                                        <td>Anéis</td><td>63</td>
                                    </tr>
                                    <tr>
                                        <td>Brincos</td><td>82</td>
                                    </tr>
                                    <tr>
                                        <td>Colares</td><td>46</td>
                                    </tr>
                                    <tr>
                                        <td>Pulseiras</td><td>67</td>
                                    </tr>
                                    <tr>
                                        <td>Conjuntos</td><td>2</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total geral</strong></td><td>260</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>                

                </div>
                <div class="col-md-6">
                    <div class="container" style="width: 100%;">        
                          
                            <div class="row" style="overflow-x:auto; height: 570px;">        
                                <div class="panel panel-default">
                                    <div class="panel-heading"><span>ATENÇÃO:</span> Existem 77 produto(s) com estoque baixo!</div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Referência</th>
                                                <th>Produto</th>
                                                <th>Quantidade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                               
                                                <tr>
                                                    <td>A-00001</td>
                                                    <td>Anel dourado com quadrado vazado</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>A-00007</td>
                                                    <td>Anel coração regulável</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>A-00009</td>
                                                    <td>Anel dourado de linhas</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>A-00025</td>
                                                    <td>Anel dourado 3 elos com zircônia</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>A-00038</td>
                                                    <td>anel dourado rendado de zircônia branca</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>A-00040</td>
                                                    <td>Anel dourado meia aliança com zircônia </td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>A-00048</td>
                                                    <td>Anel dourado com detalhe prata, zircônia</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>A-00050</td>
                                                    <td>Anel dourado de corrente no centro</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>A-00051</td>
                                                    <td>Anel dourado de onda com zircônia branca</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>A-00054</td>
                                                    <td>Anel dourado aliança de zircônia</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>A-00059</td>
                                                    <td>Conjunto anéis caixa alta</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>A-00067</td>
                                                    <td>Anel doudaro com relevo de escamas</td>
                                                    <td>0</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>A-00072</td>
                                                    <td>Anel fumê de falange coroa</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00004</td>
                                                    <td>Brinco dourado formato de diamante </td>
                                                    <td>0</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00008</td>
                                                    <td>Brinco Dourado Menininha </td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-000104</td>
                                                    <td>Brinco fume com canutilho e pendente flo</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-000105</td>
                                                    <td>Brinco replica vivara com zirconia preta</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00036</td>
                                                    <td>Brinco dourado meia bola</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00040</td>
                                                    <td>Brinco dourado argola </td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00048</td>
                                                    <td>Brinco pequeno branco com duas pérolas</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00056</td>
                                                    <td>Brinco Maxi em Formato de Gotas</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00061</td>
                                                    <td>Brinco dourado com pedras redondas verde</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00062</td>
                                                    <td>Brinco dourado com pedras redondas fumê</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00066</td>
                                                    <td>Brinco dourado oval com 9 cristais preto</td>
                                                    <td>0</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00067</td>
                                                    <td>Brinco fumê oval com cristais preto e fu</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00068</td>
                                                    <td>Brinco fumê oval com 9 cristais rosa den</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00069</td>
                                                    <td>Brinco dourado com base e pendente oval </td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00071</td>
                                                    <td>Brinco dourado com pendende de leque</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00072</td>
                                                    <td>Brinco dourado com canutilho grande e pe</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00073</td>
                                                    <td>Brinco dourado com pendende gota e detal</td>
                                                    <td>-4</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00074</td>
                                                    <td>Brinco dourado com cristal losango verde</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00075</td>
                                                    <td>Brinco dourado com cristal losango marro</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00076</td>
                                                    <td>Brinco dourado com base de zirconias bra</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00077</td>
                                                    <td>Brinco dourado com base de zirconias bra</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00078</td>
                                                    <td>Brinco dourado com cristal fumê gota bas</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00079</td>
                                                    <td>Brinco fumê com cristal verde e roxo</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00080</td>
                                                    <td>Brinco dourado base gota de cristal rosa</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00081</td>
                                                    <td>Brinco fumê base gota de cristal leitoso</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00084</td>
                                                    <td>Brinco dourado com pendente de gotas</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00085</td>
                                                    <td>Brinco fumê base gota e pendente gota gr</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00086</td>
                                                    <td>Brinco fumê com cristal rosa gota e pend</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00087</td>
                                                    <td>Brinco fumê base com cristal losango e p</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00088</td>
                                                    <td>Brinco fumê base gota e pingente redondo</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00089</td>
                                                    <td>Brinco fumê com pendende de leque</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00090</td>
                                                    <td>Brinco fumê gota com cristal verde </td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00091</td>
                                                    <td>Brinco fumê com base oval e pendente ova</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00092</td>
                                                    <td>Brinco dourado com base oval e pendente </td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00093</td>
                                                    <td>Brinco fumê 3 elos cravejado com zirconi</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00094</td>
                                                    <td>Brinco fumê com pendende de gota com zir</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00097</td>
                                                    <td>Brinco fumê com base floral e pendende f</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00098</td>
                                                    <td>Brinco fumê com 3 pendentes</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00099</td>
                                                    <td>Brinco fumê com canutilho e pendente V</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00101</td>
                                                    <td>Brinco fumê com base gota e pendente fum</td>
                                                    <td>0</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>B-00103</td>
                                                    <td>Brinco fumê vazado indiano em formato de</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>C-00002</td>
                                                    <td>Colar dourado três elos</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>C-00003</td>
                                                    <td>Colar dourado com pingente de bola</td>
                                                    <td>0</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>C-00005</td>
                                                    <td>Colar dourado cruz cravejada de zircônia</td>
                                                    <td>0</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>C-00007</td>
                                                    <td>Colar dourado de terço com cruz</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>C-00012</td>
                                                    <td>Colar dourado com pingente de menino </td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>C-00022</td>
                                                    <td>Colar dourado com pingente círculos</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>C-00023</td>
                                                    <td>Colar dourado de madre pérola e zircônia</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>C-00024</td>
                                                    <td>Colar fumê com pingente de cruz</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>C-00026</td>
                                                    <td>Colar dourado com pingente de Nossa Sen</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>C-00029</td>
                                                    <td>Colar de couro com canutilhos dourados</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>CJ-0001</td>
                                                    <td>Conjunto dourado chanel cordao/brinco co</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>CJ-0002</td>
                                                    <td>Conjunto dourado cordão brinco de pérola</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>P-00012</td>
                                                    <td>Pulseira dourada rabo de rato com trevo</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>P-00020</td>
                                                    <td>Pulseira rosé de elos</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>P-00021</td>
                                                    <td>Pulseira de Couro com canutilhos</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>P-00023</td>
                                                    <td>Pulseira de Couro com três argolas</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>P-00026</td>
                                                    <td>Pulseira dourado escovada com elos Ovais</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>P-00034</td>
                                                    <td>Pulseira dourada com franja fina</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>P-00048</td>
                                                    <td>Pulseira de couro com canutilhos.</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>P-00049</td>
                                                    <td>Puseira prata com elos quadrados</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>P-00050</td>
                                                    <td>Puseira rose com elos quadrados</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>P-00053</td>
                                                    <td>Pulseira dourada com detalhe de coração</td>
                                                    <td>1</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>P-00055</td>
                                                    <td>Pulseira de couro com detalhe de gancho </td>
                                                    <td>1</td>
                                                </tr>
                                                                                    </tbody>
                                    </table>
                                </div>        
                            </div> 
                                            </div>
                </div>
            </div>

            <br/>
            <a href="/homolog/pt/produtos/cadastrar" class="btn btn-default navbar-btn"><i class="fa fa-plus-square"></i> Cadastro de Produtos</a>
            <span class="Loader hide"><img src="/homolog/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span>

            <div class="panel-default">

                <table class='table' id="table-1" cellspacing="0" cellpadding="2">
                    <thead>
                        
                    <th>Referência</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Peso</th>
                        
                    <th style="width: 10%;">Preço Unitário</th>
                    <th style="width: 10%;">De</th>
                    <th style="width: 10%;">Para</th>
                    <th>Ações</th>
                    </thead>

                    
                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="C8558317DBB0D64C6FBE1996516EA516" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00001</td>
                                <td>Bracelete dourado com perola grande</td>
                                <td>Pulseiras</td>                                
                                <td>0.025Kg.</td>
                                
                                <td>6,45</td>
                                <td><input type="text" class="form-control" name="PRECODE_C8558317DBB0D64C6FBE1996516EA516" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="140,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_C8558317DBB0D64C6FBE1996516EA516" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="140,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-dourado-com-perola-grande-2"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/1/bracelete-dourado-com-perola-grande-2"><span class="ico-default-eye desative" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-dourado-com-perola-grande-2"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-dourado-com-perola-grande-2"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-dourado-com-perola-grande-2"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-dourado-com-perola-grande-2"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-dourado-com-perola-grande-2"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-dourado-com-perola-grande-2')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="19790CB08FCECAD0C7A2CA4C9B3AC2D0" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00002</td>
                                <td>Bracelete italiano rose</td>
                                <td>Pulseiras</td>                                
                                <td>0.005Kg.</td>
                                
                                <td>39,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_19790CB08FCECAD0C7A2CA4C9B3AC2D0" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="86,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_19790CB08FCECAD0C7A2CA4C9B3AC2D0" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="86,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-rose-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/1/bracelete-italiano-rose-1"><span class="ico-default-eye desative" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-rose-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-rose-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-rose-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-rose-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-rose-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-rose-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="1BB3512482CF5E25E38682F73B60AB8E" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00003</td>
                                <td>Bracelete italiano fumê</td>
                                <td>Pulseiras</td>                                
                                <td>0.006Kg.</td>
                                
                                <td>39,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_1BB3512482CF5E25E38682F73B60AB8E" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="86,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_1BB3512482CF5E25E38682F73B60AB8E" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="86,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-fume-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/1/bracelete-italiano-fume-1"><span class="ico-default-eye desative" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-fume-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-fume-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-fume-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-fume-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-fume-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-fume-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="CCCB2B315D3BCA5D4A09C22DD3D47EDF" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00004</td>
                                <td>Bracelete italiano dourado com trevo com</td>
                                <td>Pulseiras</td>                                
                                <td>0.007Kg.</td>
                                
                                <td>75,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_CCCB2B315D3BCA5D4A09C22DD3D47EDF" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="162,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_CCCB2B315D3BCA5D4A09C22DD3D47EDF" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="162,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-dourado-com-trevo-com-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/1/bracelete-italiano-dourado-com-trevo-com-1"><span class="ico-default-eye desative" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-dourado-com-trevo-com-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-dourado-com-trevo-com-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-dourado-com-trevo-com-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-dourado-com-trevo-com-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-dourado-com-trevo-com-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-dourado-com-trevo-com-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="2AD154F1C938DAE5753837716B94E6E4" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00005</td>
                                <td>Bracelete italiano rose com trevo com zi</td>
                                <td>Pulseiras</td>                                
                                <td>0.006Kg.</td>
                                
                                <td>74,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_2AD154F1C938DAE5753837716B94E6E4" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="162,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_2AD154F1C938DAE5753837716B94E6E4" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="162,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-rose-com-trevo-com-zi-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/bracelete-italiano-rose-com-trevo-com-zi-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-rose-com-trevo-com-zi-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-rose-com-trevo-com-zi-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-rose-com-trevo-com-zi-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-rose-com-trevo-com-zi-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-rose-com-trevo-com-zi-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-rose-com-trevo-com-zi-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="707BE54DA73AB0C5DBB2E598B656ECC2" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00007</td>
                                <td>Bracelete italiano dourado com quadrado </td>
                                <td>Pulseiras</td>                                
                                <td>0.008Kg.</td>
                                
                                <td>74,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_707BE54DA73AB0C5DBB2E598B656ECC2" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="162,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_707BE54DA73AB0C5DBB2E598B656ECC2" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="162,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-dourado-com-quadrado-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/bracelete-italiano-dourado-com-quadrado-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-dourado-com-quadrado-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-dourado-com-quadrado-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-dourado-com-quadrado-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-dourado-com-quadrado-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-dourado-com-quadrado-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-dourado-com-quadrado-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="6A9FC796188CBCC6EB7DF00266559E1D" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00008</td>
                                <td>Bracelete italiano rose com circulo prat</td>
                                <td>Pulseiras</td>                                
                                <td>0.005Kg.</td>
                                
                                <td>85,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_6A9FC796188CBCC6EB7DF00266559E1D" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="78,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_6A9FC796188CBCC6EB7DF00266559E1D" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="78,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-rose-com-circulo-prat-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/1/bracelete-italiano-rose-com-circulo-prat-1"><span class="ico-default-eye desative" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-rose-com-circulo-prat-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-rose-com-circulo-prat-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-rose-com-circulo-prat-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-rose-com-circulo-prat-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-rose-com-circulo-prat-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-rose-com-circulo-prat-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="4235E5CD285F472153CC18B7E52004D5" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00009</td>
                                <td>Bracelete italiano fumê com circulo prat</td>
                                <td>Pulseiras</td>                                
                                <td>0.006Kg.</td>
                                
                                <td>35,90</td>
                                <td><input type="text" class="form-control" name="PRECODE_4235E5CD285F472153CC18B7E52004D5" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="78,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_4235E5CD285F472153CC18B7E52004D5" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="78,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-fume-com-circulo-prat-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/1/bracelete-italiano-fume-com-circulo-prat-1"><span class="ico-default-eye desative" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-fume-com-circulo-prat-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-fume-com-circulo-prat-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-fume-com-circulo-prat-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-fume-com-circulo-prat-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-fume-com-circulo-prat-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-fume-com-circulo-prat-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="F770B156742B3F02A46F40EF0DA11DE9" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00010</td>
                                <td>Bracelete italiano de fio prata com deta</td>
                                <td>Pulseiras</td>                                
                                <td>0.006Kg.</td>
                                
                                <td>22,60</td>
                                <td><input type="text" class="form-control" name="PRECODE_F770B156742B3F02A46F40EF0DA11DE9" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_F770B156742B3F02A46F40EF0DA11DE9" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-de-fio-prata-com-deta-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/1/bracelete-italiano-de-fio-prata-com-deta-1"><span class="ico-default-eye desative" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-de-fio-prata-com-deta-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-de-fio-prata-com-deta-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-de-fio-prata-com-deta-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-de-fio-prata-com-deta-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-de-fio-prata-com-deta-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-de-fio-prata-com-deta-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="061BF38E3F8F8B919A7D7FCDF479C0CF" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00011</td>
                                <td>Bracelete italiano preto com fivela prat</td>
                                <td>Pulseiras</td>                                
                                <td>0.011Kg.</td>
                                
                                <td>42,90</td>
                                <td><input type="text" class="form-control" name="PRECODE_061BF38E3F8F8B919A7D7FCDF479C0CF" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="93,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_061BF38E3F8F8B919A7D7FCDF479C0CF" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="93,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-preto-com-fivela-prat-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/bracelete-italiano-preto-com-fivela-prat-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-preto-com-fivela-prat-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-preto-com-fivela-prat-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-preto-com-fivela-prat-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-preto-com-fivela-prat-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-preto-com-fivela-prat-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-preto-com-fivela-prat-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="673A649A0A3F5AA0EF735DE9B88A1EAE" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00012</td>
                                <td>Bracelete italiano prata com fivela prat</td>
                                <td>Pulseiras</td>                                
                                <td>0.011Kg.</td>
                                
                                <td>42,90</td>
                                <td><input type="text" class="form-control" name="PRECODE_673A649A0A3F5AA0EF735DE9B88A1EAE" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="94,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_673A649A0A3F5AA0EF735DE9B88A1EAE" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="94,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-prata-com-fivela-prat"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/bracelete-italiano-prata-com-fivela-prat"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-prata-com-fivela-prat"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-prata-com-fivela-prat"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-prata-com-fivela-prat"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-prata-com-fivela-prat"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-prata-com-fivela-prat"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-prata-com-fivela-prat')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="6F49BB0F298A4A2C6BC6761B1621B0E0" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00013</td>
                                <td>Bracelete dourado com pedra branca</td>
                                <td>Pulseiras</td>                                
                                <td>0.200Kg.</td>
                                
                                <td>59,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_6F49BB0F298A4A2C6BC6761B1621B0E0" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="129,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_6F49BB0F298A4A2C6BC6761B1621B0E0" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/bracelete-dourado-com-pedra-branca-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/bracelete-dourado-com-pedra-branca-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-dourado-com-pedra-branca-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/0/bracelete-dourado-com-pedra-branca-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-dourado-com-pedra-branca-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-dourado-com-pedra-branca-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-dourado-com-pedra-branca-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-dourado-com-pedra-branca-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A452CB49FC152FEAFC1DECAAB33C8363" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00013</td>
                                <td>Bracelete italiano rose com fivela prata</td>
                                <td>Pulseiras</td>                                
                                <td>0.011Kg.</td>
                                
                                <td>42,75</td>
                                <td><input type="text" class="form-control" name="PRECODE_A452CB49FC152FEAFC1DECAAB33C8363" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="93,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_A452CB49FC152FEAFC1DECAAB33C8363" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="93,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-rose-com-fivela-prata-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/bracelete-italiano-rose-com-fivela-prata-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-rose-com-fivela-prata-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-rose-com-fivela-prata-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-rose-com-fivela-prata-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-rose-com-fivela-prata-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-rose-com-fivela-prata-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-rose-com-fivela-prata-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="F38A5954676EB395FD1F072A2F97A3BB" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00014</td>
                                <td>Bracelete italiano prata com detalhe de </td>
                                <td>Pulseiras</td>                                
                                <td>0.005Kg.</td>
                                
                                <td>74,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_F38A5954676EB395FD1F072A2F97A3BB" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_F38A5954676EB395FD1F072A2F97A3BB" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-prata-com-detalhe-de-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/bracelete-italiano-prata-com-detalhe-de-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-prata-com-detalhe-de-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-prata-com-detalhe-de-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-prata-com-detalhe-de-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-prata-com-detalhe-de-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-prata-com-detalhe-de-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-prata-com-detalhe-de-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8EF22E27DC2770D7B2D1C21EB98A4ECF" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00015</td>
                                <td>Bracelete italiano preto com detalhe de </td>
                                <td>Pulseiras</td>                                
                                <td>0.005Kg.</td>
                                
                                <td>2,72</td>
                                <td><input type="text" class="form-control" name="PRECODE_8EF22E27DC2770D7B2D1C21EB98A4ECF" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_8EF22E27DC2770D7B2D1C21EB98A4ECF" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-preto-com-detalhe-de-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/bracelete-italiano-preto-com-detalhe-de-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-preto-com-detalhe-de-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-preto-com-detalhe-de-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-preto-com-detalhe-de-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-preto-com-detalhe-de-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-preto-com-detalhe-de-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-preto-com-detalhe-de-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="1C469A23C618FD5EAB271850F2447ED5" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00016</td>
                                <td>Bracelete italiano preto com detalhe tri</td>
                                <td>Pulseiras</td>                                
                                <td>0.015Kg.</td>
                                
                                <td>41,90</td>
                                <td><input type="text" class="form-control" name="PRECODE_1C469A23C618FD5EAB271850F2447ED5" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="91,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_1C469A23C618FD5EAB271850F2447ED5" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="91,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-preto-com-detalhe-tri-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/bracelete-italiano-preto-com-detalhe-tri-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-preto-com-detalhe-tri-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-preto-com-detalhe-tri-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-preto-com-detalhe-tri-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-preto-com-detalhe-tri-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-preto-com-detalhe-tri-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-preto-com-detalhe-tri-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A1D7757CB22A37DC9FC231673F218A8B" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00017</td>
                                <td>Bracelete italiano dourado envelhecido c</td>
                                <td>Pulseiras</td>                                
                                <td>0.009Kg.</td>
                                
                                <td>25,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_A1D7757CB22A37DC9FC231673F218A8B" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_A1D7757CB22A37DC9FC231673F218A8B" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-dourado-envelhecido-c-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/bracelete-italiano-dourado-envelhecido-c-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-dourado-envelhecido-c-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-dourado-envelhecido-c-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-dourado-envelhecido-c-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-dourado-envelhecido-c-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-dourado-envelhecido-c-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-dourado-envelhecido-c-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="25F335217708F033F69DDE4C597FAAC2" class="" style="cursor: move; height: 85px;" >
                                
                                <td>BR-00018</td>
                                <td>Bracelete italiano de fio preto com deta</td>
                                <td>Pulseiras</td>                                
                                <td>0.008Kg.</td>
                                
                                <td>39,90</td>
                                <td><input type="text" class="form-control" name="PRECODE_25F335217708F033F69DDE4C597FAAC2" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="87,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_25F335217708F033F69DDE4C597FAAC2" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="87,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/bracelete-italiano-de-fio-preto-com-deta-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/bracelete-italiano-de-fio-preto-com-deta-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/bracelete-italiano-de-fio-preto-com-deta-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/bracelete-italiano-de-fio-preto-com-deta-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/bracelete-italiano-de-fio-preto-com-deta-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/bracelete-italiano-de-fio-preto-com-deta-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/bracelete-italiano-de-fio-preto-com-deta-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/bracelete-italiano-de-fio-preto-com-deta-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7ECF4847663A06F7579EFE931C378F13" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00001</td>
                                <td>Pulseira de couro com várias voltas.</td>
                                <td>Pulseiras</td>                                
                                <td>0.500Kg.</td>
                                
                                <td>72,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_7ECF4847663A06F7579EFE931C378F13" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="113,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_7ECF4847663A06F7579EFE931C378F13" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="68,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-de-couro-com-varias-voltas.-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-de-couro-com-varias-voltas.-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-de-couro-com-varias-voltas.-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-de-couro-com-varias-voltas.-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-de-couro-com-varias-voltas.-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-de-couro-com-varias-voltas.-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-de-couro-com-varias-voltas.-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-de-couro-com-varias-voltas.-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="1589F878718549D26A649210B3A08F68" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00002</td>
                                <td>Pulseira dourada rabo de rato</td>
                                <td>Pulseiras</td>                                
                                <td>0.100Kg.</td>
                                
                                <td>11,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_1589F878718549D26A649210B3A08F68" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_1589F878718549D26A649210B3A08F68" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="25,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-dourada-rabo-de-rato"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-rabo-de-rato"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-rabo-de-rato"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dourada-rabo-de-rato"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-rabo-de-rato"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-rabo-de-rato"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-rabo-de-rato"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-rabo-de-rato')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="AFABCC4C4A1ED44B024A5E239703DBCC" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00003</td>
                                <td>Pulseira Rosé Rabo de Rato</td>
                                <td>Pulseiras</td>                                
                                <td>0.100Kg.</td>
                                
                                <td>11,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_AFABCC4C4A1ED44B024A5E239703DBCC" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_AFABCC4C4A1ED44B024A5E239703DBCC" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="25,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-rose-rabo-de-rato-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-rose-rabo-de-rato-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-rose-rabo-de-rato-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-rose-rabo-de-rato-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-rose-rabo-de-rato-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-rose-rabo-de-rato-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-rose-rabo-de-rato-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-rose-rabo-de-rato-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8870317A8799944F22DC0019328D9C6F" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00004</td>
                                <td>Pulseira rabo de rato trama grossa</td>
                                <td>Pulseiras</td>                                
                                <td>0.100Kg.</td>
                                
                                <td>21,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_8870317A8799944F22DC0019328D9C6F" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="46,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_8870317A8799944F22DC0019328D9C6F" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="46,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-rabo-de-rato-trama-grossa-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-rabo-de-rato-trama-grossa-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-rabo-de-rato-trama-grossa-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-rabo-de-rato-trama-grossa-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-rabo-de-rato-trama-grossa-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-rabo-de-rato-trama-grossa-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-rabo-de-rato-trama-grossa-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-rabo-de-rato-trama-grossa-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7BDC0388F8A960789A2813EFA47F4028" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00005</td>
                                <td>Pulseira com detalhe em acrílico redondo</td>
                                <td>Pulseiras</td>                                
                                <td>0.300Kg.</td>
                                
                                <td>26,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_7BDC0388F8A960789A2813EFA47F4028" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="300,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_7BDC0388F8A960789A2813EFA47F4028" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="38,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-com-detalhe-em-acrilico-redondo"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-com-detalhe-em-acrilico-redondo"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-com-detalhe-em-acrilico-redondo"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-com-detalhe-em-acrilico-redondo"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-com-detalhe-em-acrilico-redondo"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-com-detalhe-em-acrilico-redondo"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-com-detalhe-em-acrilico-redondo"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-com-detalhe-em-acrilico-redondo')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="CCC8C5AB98CE4FDC941B6CC2CDE54DE8" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00006</td>
                                <td>Pulseira dourada com detalhe em acrílico</td>
                                <td>Pulseiras</td>                                
                                <td>0.300Kg.</td>
                                
                                <td>28,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_CCC8C5AB98CE4FDC941B6CC2CDE54DE8" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="63,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_CCC8C5AB98CE4FDC941B6CC2CDE54DE8" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="38,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-dourada-com-detalhe-em-acrilico-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-com-detalhe-em-acrilico-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-com-detalhe-em-acrilico-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dourada-com-detalhe-em-acrilico-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-com-detalhe-em-acrilico-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-com-detalhe-em-acrilico-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-com-detalhe-em-acrilico-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-com-detalhe-em-acrilico-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="B7003F21066FD0EA97EEBE5EAA64CCD7" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00007</td>
                                <td>Pulseira dourada torcida</td>
                                <td>Pulseiras</td>                                
                                <td>0.100Kg.</td>
                                
                                <td>11,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_B7003F21066FD0EA97EEBE5EAA64CCD7" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="46,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_B7003F21066FD0EA97EEBE5EAA64CCD7" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-dourada-torcida-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-torcida-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-torcida-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dourada-torcida-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-torcida-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-torcida-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-torcida-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-torcida-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="69AC0261D47D1A5283082EACA9302EA2" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00008</td>
                                <td>Pulseira de couro com laço</td>
                                <td>Pulseiras</td>                                
                                <td>0.300Kg.</td>
                                
                                <td>23,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_69AC0261D47D1A5283082EACA9302EA2" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="50,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_69AC0261D47D1A5283082EACA9302EA2" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="30,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-de-couro-com-laco"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-de-couro-com-laco"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-de-couro-com-laco"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-de-couro-com-laco"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-de-couro-com-laco"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-de-couro-com-laco"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-de-couro-com-laco"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-de-couro-com-laco')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="41E1AEDABA20BD7D46EC24CAAC22E285" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00009</td>
                                <td>Pulseira dourada com detalhe de trevo</td>
                                <td>Pulseiras</td>                                
                                <td>0.300Kg.</td>
                                
                                <td>24,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_41E1AEDABA20BD7D46EC24CAAC22E285" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="53,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_41E1AEDABA20BD7D46EC24CAAC22E285" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="32,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-dourada-com-detalhe-de-trevo-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-com-detalhe-de-trevo-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-com-detalhe-de-trevo-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dourada-com-detalhe-de-trevo-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-com-detalhe-de-trevo-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-com-detalhe-de-trevo-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-com-detalhe-de-trevo-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-com-detalhe-de-trevo-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="04C126F8F5B48396839D4F5C5F47D1F6" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00010</td>
                                <td>Pulseira de couro com Nossa Senhora </td>
                                <td>Pulseiras</td>                                
                                <td>0.300Kg.</td>
                                
                                <td>31,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_04C126F8F5B48396839D4F5C5F47D1F6" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="67,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_04C126F8F5B48396839D4F5C5F47D1F6" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="40,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-de-couro-com-nossa-senhora-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-de-couro-com-nossa-senhora-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-de-couro-com-nossa-senhora-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-de-couro-com-nossa-senhora-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-de-couro-com-nossa-senhora-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-de-couro-com-nossa-senhora-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-de-couro-com-nossa-senhora-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-de-couro-com-nossa-senhora-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="4EACF8823C360AA26261985F58BFD1DD" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00011</td>
                                <td>Pulseira de Couro com detalhes</td>
                                <td>Pulseiras</td>                                
                                <td>0.200Kg.</td>
                                
                                <td>14,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_4EACF8823C360AA26261985F58BFD1DD" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="30,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_4EACF8823C360AA26261985F58BFD1DD" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="18,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-de-couro-com-detalhes"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-de-couro-com-detalhes"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-de-couro-com-detalhes"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-de-couro-com-detalhes"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-de-couro-com-detalhes"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-de-couro-com-detalhes"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-de-couro-com-detalhes"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-de-couro-com-detalhes')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="9E9DDC073C69F67808213D7AEC41EA49" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00012</td>
                                <td>Pulseira dourada rabo de rato com trevo</td>
                                <td>Pulseiras</td>                                
                                <td>0.200Kg.</td>
                                
                                <td>89,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_9E9DDC073C69F67808213D7AEC41EA49" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="195,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_9E9DDC073C69F67808213D7AEC41EA49" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="117,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-dourada-rabo-de-rato-com-trevo"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-rabo-de-rato-com-trevo"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-rabo-de-rato-com-trevo"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/0/pulseira-dourada-rabo-de-rato-com-trevo"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-rabo-de-rato-com-trevo"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-rabo-de-rato-com-trevo"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-rabo-de-rato-com-trevo"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-rabo-de-rato-com-trevo')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="49C830F39209B1E6430A3BE8AD334091" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00018</td>
                                <td>Pulseira dourada de elos</td>
                                <td>Pulseiras</td>                                
                                <td>0.300Kg.</td>
                                
                                <td>56,60</td>
                                <td><input type="text" class="form-control" name="PRECODE_49C830F39209B1E6430A3BE8AD334091" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="118,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_49C830F39209B1E6430A3BE8AD334091" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="71,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-dourada-de-elos"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-de-elos"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-de-elos"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/0/pulseira-dourada-de-elos"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-de-elos"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-de-elos"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-de-elos"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-de-elos')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="466EF24108AA105E63BC12F4EA97ABBE" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00019</td>
                                <td>Pulseira prateada de elos </td>
                                <td>Pulseiras</td>                                
                                <td>0.300Kg.</td>
                                
                                <td>54,60</td>
                                <td><input type="text" class="form-control" name="PRECODE_466EF24108AA105E63BC12F4EA97ABBE" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="118,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_466EF24108AA105E63BC12F4EA97ABBE" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="71,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-prateada-de-elos"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-prateada-de-elos"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-prateada-de-elos"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-prateada-de-elos"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-prateada-de-elos"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-prateada-de-elos"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-prateada-de-elos"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-prateada-de-elos')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="BDA625B0F47B7A2C731092A77A6EBD16" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00020</td>
                                <td>Pulseira rosé de elos</td>
                                <td>Pulseiras</td>                                
                                <td>0.300Kg.</td>
                                
                                <td>54,60</td>
                                <td><input type="text" class="form-control" name="PRECODE_BDA625B0F47B7A2C731092A77A6EBD16" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="118,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_BDA625B0F47B7A2C731092A77A6EBD16" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="71,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-rose-de-elos-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-rose-de-elos-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-rose-de-elos-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/0/pulseira-rose-de-elos-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-rose-de-elos-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-rose-de-elos-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-rose-de-elos-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-rose-de-elos-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7B557DE68EBE0D34882B5E16065366D9" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00021</td>
                                <td>Pulseira de Couro com canutilhos</td>
                                <td>Pulseiras</td>                                
                                <td>0.200Kg.</td>
                                
                                <td>54,60</td>
                                <td><input type="text" class="form-control" name="PRECODE_7B557DE68EBE0D34882B5E16065366D9" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="118,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_7B557DE68EBE0D34882B5E16065366D9" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="71,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-de-couro-com-canutilhos"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-de-couro-com-canutilhos"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-de-couro-com-canutilhos"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/0/pulseira-de-couro-com-canutilhos"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-de-couro-com-canutilhos"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-de-couro-com-canutilhos"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-de-couro-com-canutilhos"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-de-couro-com-canutilhos')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="AABE0BC6D89BB2239529C8FC66071BC7" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00022</td>
                                <td>Pulseira dourada com cristais dentro</td>
                                <td>Pulseiras</td>                                
                                <td>0.007Kg.</td>
                                
                                <td>19,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_AABE0BC6D89BB2239529C8FC66071BC7" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_AABE0BC6D89BB2239529C8FC66071BC7" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-dourada-com-cristais-dentro-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-com-cristais-dentro-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-com-cristais-dentro-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dourada-com-cristais-dentro-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-com-cristais-dentro-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-com-cristais-dentro-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-com-cristais-dentro-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-com-cristais-dentro-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="71B58AB1A03294F86B42062677835651" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00023</td>
                                <td>Pulseira de Couro com três argolas</td>
                                <td>Pulseiras</td>                                
                                <td>0.300Kg.</td>
                                
                                <td>15,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_71B58AB1A03294F86B42062677835651" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="106,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_71B58AB1A03294F86B42062677835651" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="69,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-de-couro-com-tres-argolas-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-de-couro-com-tres-argolas-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-de-couro-com-tres-argolas-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-de-couro-com-tres-argolas-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-de-couro-com-tres-argolas-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-de-couro-com-tres-argolas-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-de-couro-com-tres-argolas-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-de-couro-com-tres-argolas-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0ECE47D6ABAF730B99685FE5432F0A40" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00024</td>
                                <td>Pulseira prata com cristais dentro</td>
                                <td>Pulseiras</td>                                
                                <td>0.007Kg.</td>
                                
                                <td>19,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_0ECE47D6ABAF730B99685FE5432F0A40" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="46,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_0ECE47D6ABAF730B99685FE5432F0A40" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="46,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-prata-com-cristais-dentro-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-prata-com-cristais-dentro-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-prata-com-cristais-dentro-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-prata-com-cristais-dentro-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-prata-com-cristais-dentro-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-prata-com-cristais-dentro-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-prata-com-cristais-dentro-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-prata-com-cristais-dentro-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="32CCC1D44FF86629B48B0F7E1F45C6A5" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00025</td>
                                <td>Pulseira dourada de bolinhas</td>
                                <td>Pulseiras</td>                                
                                <td>0.200Kg.</td>
                                
                                <td>19,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_32CCC1D44FF86629B48B0F7E1F45C6A5" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="46,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_32CCC1D44FF86629B48B0F7E1F45C6A5" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-dourada-de-bolinhas-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-de-bolinhas-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-de-bolinhas-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dourada-de-bolinhas-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-de-bolinhas-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-de-bolinhas-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-de-bolinhas-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-de-bolinhas-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="DC5D2F3854ACC3E9050C387A65DC3D2A" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00026</td>
                                <td>Pulseira dourado escovada com elos Ovais</td>
                                <td>Pulseiras</td>                                
                                <td>0.200Kg.</td>
                                
                                <td>60,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_DC5D2F3854ACC3E9050C387A65DC3D2A" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="140,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_DC5D2F3854ACC3E9050C387A65DC3D2A" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="84,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-dourado-escovada-com-elos-ovais"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourado-escovada-com-elos-ovais"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourado-escovada-com-elos-ovais"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dourado-escovada-com-elos-ovais"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourado-escovada-com-elos-ovais"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourado-escovada-com-elos-ovais"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourado-escovada-com-elos-ovais"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourado-escovada-com-elos-ovais')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="EE0F145835ED08251A42AC44916C324F" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00027</td>
                                <td>Puseira fumê com elos quadrados</td>
                                <td>Pulseiras</td>                                
                                <td>0.005Kg.</td>
                                
                                <td>19,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_EE0F145835ED08251A42AC44916C324F" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="80,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_EE0F145835ED08251A42AC44916C324F" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="80,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/puseira-fume-com-elos-quadrados-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/puseira-fume-com-elos-quadrados-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/puseira-fume-com-elos-quadrados-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/puseira-fume-com-elos-quadrados-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/puseira-fume-com-elos-quadrados-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/puseira-fume-com-elos-quadrados-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/puseira-fume-com-elos-quadrados-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/puseira-fume-com-elos-quadrados-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="EEE6280EE41E35BE1FA919497AB73CD8" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00028</td>
                                <td>Pulseira dourada com folhas cravejadas d</td>
                                <td>Pulseiras</td>                                
                                <td>0.016Kg.</td>
                                
                                <td>84,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_EEE6280EE41E35BE1FA919497AB73CD8" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="100,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_EEE6280EE41E35BE1FA919497AB73CD8" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="100,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-dourada-com-folhas-cravejadas-d-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-com-folhas-cravejadas-d-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-com-folhas-cravejadas-d-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dourada-com-folhas-cravejadas-d-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-com-folhas-cravejadas-d-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-com-folhas-cravejadas-d-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-com-folhas-cravejadas-d-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-com-folhas-cravejadas-d-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A485CD9CFE390CB17A500A921F0C9448" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00029</td>
                                <td>Pulseira fumê com folhas cravejadas de z</td>
                                <td>Pulseiras</td>                                
                                <td>0.014Kg.</td>
                                
                                <td>84,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_A485CD9CFE390CB17A500A921F0C9448" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="184,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_A485CD9CFE390CB17A500A921F0C9448" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="184,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-fume-com-folhas-cravejadas-de-z-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-fume-com-folhas-cravejadas-de-z-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-fume-com-folhas-cravejadas-de-z-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-fume-com-folhas-cravejadas-de-z-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-fume-com-folhas-cravejadas-de-z-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-fume-com-folhas-cravejadas-de-z-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-fume-com-folhas-cravejadas-de-z-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-fume-com-folhas-cravejadas-de-z-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="D56C572EE74FF7707F544342521828F9" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00030</td>
                                <td>Pulseira 3 elos redondos prata, dourado </td>
                                <td>Pulseiras</td>                                
                                <td>0.016Kg.</td>
                                
                                <td>49,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_D56C572EE74FF7707F544342521828F9" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="110,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_D56C572EE74FF7707F544342521828F9" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="108,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-3-elos-redondos-prata-dourado"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-3-elos-redondos-prata-dourado"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-3-elos-redondos-prata-dourado"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-3-elos-redondos-prata-dourado"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-3-elos-redondos-prata-dourado"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-3-elos-redondos-prata-dourado"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-3-elos-redondos-prata-dourado"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-3-elos-redondos-prata-dourado')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A2627BD95CBBEFAA2E3EE2AD70BF8AEF" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00031</td>
                                <td>Pulseira dourada corrente media</td>
                                <td>Pulseiras</td>                                
                                <td>0.017Kg.</td>
                                
                                <td>99,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_A2627BD95CBBEFAA2E3EE2AD70BF8AEF" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="216,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_A2627BD95CBBEFAA2E3EE2AD70BF8AEF" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="216,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-dourada-corrente-media-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-corrente-media-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-corrente-media-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dourada-corrente-media-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-corrente-media-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-corrente-media-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-corrente-media-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-corrente-media-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="9C8C6AD628E1065904500DA9C65BDF2E" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00032</td>
                                <td>Pulseira dourada rabo de rato larga</td>
                                <td>Pulseiras</td>                                
                                <td>0.008Kg.</td>
                                
                                <td>28,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_9C8C6AD628E1065904500DA9C65BDF2E" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="61,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_9C8C6AD628E1065904500DA9C65BDF2E" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="61,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-dourada-rabo-de-rato-larga"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-rabo-de-rato-larga"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-rabo-de-rato-larga"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dourada-rabo-de-rato-larga"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-rabo-de-rato-larga"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-rabo-de-rato-larga"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-rabo-de-rato-larga"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-rabo-de-rato-larga')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A6B00F213DB1DE6FDA574965DCD3525B" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00033</td>
                                <td>Pulseira fumê rabo de rato larga</td>
                                <td>Pulseiras</td>                                
                                <td>0.008Kg.</td>
                                
                                <td>28,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_A6B00F213DB1DE6FDA574965DCD3525B" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="61,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_A6B00F213DB1DE6FDA574965DCD3525B" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="61,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-fume-rabo-de-rato-larga"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-fume-rabo-de-rato-larga"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-fume-rabo-de-rato-larga"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-fume-rabo-de-rato-larga"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-fume-rabo-de-rato-larga"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-fume-rabo-de-rato-larga"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-fume-rabo-de-rato-larga"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-fume-rabo-de-rato-larga')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="B4E4F3A551C475B99DA423B829FC3478" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00034</td>
                                <td>Pulseira dourada com franja fina</td>
                                <td>Pulseiras</td>                                
                                <td>0.015Kg.</td>
                                
                                <td>59,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_B4E4F3A551C475B99DA423B829FC3478" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="129,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_B4E4F3A551C475B99DA423B829FC3478" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="129,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-dourada-com-franja-fina-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-com-franja-fina-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-com-franja-fina-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dourada-com-franja-fina-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-com-franja-fina-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-com-franja-fina-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-com-franja-fina-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-com-franja-fina-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="DF6FDA22DF15D1EDDC3A961CAE9D24DF" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00035</td>
                                <td>Pulseira prata com franja fina</td>
                                <td>Pulseiras</td>                                
                                <td>0.013Kg.</td>
                                
                                <td>59,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_DF6FDA22DF15D1EDDC3A961CAE9D24DF" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="129,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_DF6FDA22DF15D1EDDC3A961CAE9D24DF" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="129,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-prata-com-franja-fina-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-prata-com-franja-fina-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-prata-com-franja-fina-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-prata-com-franja-fina-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-prata-com-franja-fina-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-prata-com-franja-fina-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-prata-com-franja-fina-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-prata-com-franja-fina-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0BF574FEC621A7A710CF75CE72F88084" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00037</td>
                                <td>Pulseira fumê com franja fina</td>
                                <td>Pulseiras</td>                                
                                <td>0.016Kg.</td>
                                
                                <td>59,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_0BF574FEC621A7A710CF75CE72F88084" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="129,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_0BF574FEC621A7A710CF75CE72F88084" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="129,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-fume-com-franja-fina"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-fume-com-franja-fina"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-fume-com-franja-fina"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-fume-com-franja-fina"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-fume-com-franja-fina"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-fume-com-franja-fina"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-fume-com-franja-fina"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-fume-com-franja-fina')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="29DD44C0AFA8BFA041BF1D2C4B4F4C9A" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00038</td>
                                <td>Pulseira dourada com franja grossa</td>
                                <td>Pulseiras</td>                                
                                <td>0.040Kg.</td>
                                
                                <td>124,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_29DD44C0AFA8BFA041BF1D2C4B4F4C9A" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="271,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_29DD44C0AFA8BFA041BF1D2C4B4F4C9A" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="271,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-dourada-com-franja-grossa"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-com-franja-grossa"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-com-franja-grossa"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dourada-com-franja-grossa"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-com-franja-grossa"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-com-franja-grossa"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-com-franja-grossa"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-com-franja-grossa')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="1F22B476C7ABA54EFF8791C51199A41B" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00039</td>
                                <td>Pulseira prata com franja grossa</td>
                                <td>Pulseiras</td>                                
                                <td>0.040Kg.</td>
                                
                                <td>24,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_1F22B476C7ABA54EFF8791C51199A41B" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="271,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_1F22B476C7ABA54EFF8791C51199A41B" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="271,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-prata-com-franja-grossa-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-prata-com-franja-grossa-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-prata-com-franja-grossa-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-prata-com-franja-grossa-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-prata-com-franja-grossa-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-prata-com-franja-grossa-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-prata-com-franja-grossa-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-prata-com-franja-grossa-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="798FB5665113D1A5ADBD5D29C89FB4F6" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00040</td>
                                <td>Pulseira rose com franja grossa</td>
                                <td>Pulseiras</td>                                
                                <td>0.040Kg.</td>
                                
                                <td>12,40</td>
                                <td><input type="text" class="form-control" name="PRECODE_798FB5665113D1A5ADBD5D29C89FB4F6" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="271,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_798FB5665113D1A5ADBD5D29C89FB4F6" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="271,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-rose-com-franja-grossa-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-rose-com-franja-grossa-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-rose-com-franja-grossa-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-rose-com-franja-grossa-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-rose-com-franja-grossa-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-rose-com-franja-grossa-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-rose-com-franja-grossa-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-rose-com-franja-grossa-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="525617E736B940B7090AF8CE4DB047DB" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00041</td>
                                <td>Pulseira fumê com franja grossa</td>
                                <td>Pulseiras</td>                                
                                <td>0.040Kg.</td>
                                
                                <td>124,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_525617E736B940B7090AF8CE4DB047DB" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="271,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_525617E736B940B7090AF8CE4DB047DB" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="271,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-fume-com-franja-grossa-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-fume-com-franja-grossa-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-fume-com-franja-grossa-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-fume-com-franja-grossa-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-fume-com-franja-grossa-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-fume-com-franja-grossa-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-fume-com-franja-grossa-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-fume-com-franja-grossa-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="669CE5FB1AA8CA52967756289A3C45A9" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00042</td>
                                <td>Pulseira rose 3 elos com pinjente cruz, </td>
                                <td>Pulseiras</td>                                
                                <td>0.025Kg.</td>
                                
                                <td>59,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_669CE5FB1AA8CA52967756289A3C45A9" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="216,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_669CE5FB1AA8CA52967756289A3C45A9" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="216,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-rose-3-elos-com-pinjente-cruz--1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-rose-3-elos-com-pinjente-cruz--1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-rose-3-elos-com-pinjente-cruz--1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-rose-3-elos-com-pinjente-cruz--1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-rose-3-elos-com-pinjente-cruz--1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-rose-3-elos-com-pinjente-cruz--1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-rose-3-elos-com-pinjente-cruz--1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-rose-3-elos-com-pinjente-cruz--1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A13FD3E39DB60AE2156CF12024B0F220" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00043</td>
                                <td>Pulseira dorada com pinejentes de olho g</td>
                                <td>Pulseiras</td>                                
                                <td>0.004Kg.</td>
                                
                                <td>17,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_A13FD3E39DB60AE2156CF12024B0F220" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="37,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_A13FD3E39DB60AE2156CF12024B0F220" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="37,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-dorada-com-pinejentes-de-olho-g"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dorada-com-pinejentes-de-olho-g"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dorada-com-pinejentes-de-olho-g"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dorada-com-pinejentes-de-olho-g"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dorada-com-pinejentes-de-olho-g"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dorada-com-pinejentes-de-olho-g"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dorada-com-pinejentes-de-olho-g"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dorada-com-pinejentes-de-olho-g')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="FBE9D9FAED7A63590A7B602AD061BF4A" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00044</td>
                                <td>Pulseira fumê 3 elos com pinjente de cor</td>
                                <td>Pulseiras</td>                                
                                <td>0.014Kg.</td>
                                
                                <td>89,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_FBE9D9FAED7A63590A7B602AD061BF4A" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="195,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_FBE9D9FAED7A63590A7B602AD061BF4A" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="195,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-fume-3-elos-com-pinjente-de-cor-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-fume-3-elos-com-pinjente-de-cor-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-fume-3-elos-com-pinjente-de-cor-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-fume-3-elos-com-pinjente-de-cor-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-fume-3-elos-com-pinjente-de-cor-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-fume-3-elos-com-pinjente-de-cor-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-fume-3-elos-com-pinjente-de-cor-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-fume-3-elos-com-pinjente-de-cor-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="E5471F77DBC1F3FA19D820254ACD5F3E" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00045</td>
                                <td>Pulseira fumê com pinjente de trevo, cor</td>
                                <td>Pulseiras</td>                                
                                <td>0.025Kg.</td>
                                
                                <td>79,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_E5471F77DBC1F3FA19D820254ACD5F3E" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="173,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_E5471F77DBC1F3FA19D820254ACD5F3E" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="173,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-fume-com-pinjente-de-trevo-cor-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-fume-com-pinjente-de-trevo-cor-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-fume-com-pinjente-de-trevo-cor-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-fume-com-pinjente-de-trevo-cor-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-fume-com-pinjente-de-trevo-cor-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-fume-com-pinjente-de-trevo-cor-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-fume-com-pinjente-de-trevo-cor-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-fume-com-pinjente-de-trevo-cor-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="410A1844CC93994743E863E0416A3319" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00046</td>
                                <td>Pulseira rose 3 elos com pinjente de cor</td>
                                <td>Pulseiras</td>                                
                                <td>0.011Kg.</td>
                                
                                <td>74,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_410A1844CC93994743E863E0416A3319" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="162,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_410A1844CC93994743E863E0416A3319" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="162,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-rose-3-elos-com-pinjente-de-cor-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-rose-3-elos-com-pinjente-de-cor-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-rose-3-elos-com-pinjente-de-cor-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-rose-3-elos-com-pinjente-de-cor-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-rose-3-elos-com-pinjente-de-cor-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-rose-3-elos-com-pinjente-de-cor-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-rose-3-elos-com-pinjente-de-cor-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-rose-3-elos-com-pinjente-de-cor-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="52C036ACE20DA7BC9C6D176C2E5B9EB8" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00047</td>
                                <td>Pulseira fumê 3 elos com pinjente de cor</td>
                                <td>Pulseiras</td>                                
                                <td>0.000Kg.</td>
                                
                                <td>74,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_52C036ACE20DA7BC9C6D176C2E5B9EB8" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="162,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_52C036ACE20DA7BC9C6D176C2E5B9EB8" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="162,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-fume-3-elos-com-pinjente-de-cor-2"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-fume-3-elos-com-pinjente-de-cor-2"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-fume-3-elos-com-pinjente-de-cor-2"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-fume-3-elos-com-pinjente-de-cor-2"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-fume-3-elos-com-pinjente-de-cor-2"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-fume-3-elos-com-pinjente-de-cor-2"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-fume-3-elos-com-pinjente-de-cor-2"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-fume-3-elos-com-pinjente-de-cor-2')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7B82E9A44ACE025D924DE6819B461DFD" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00048</td>
                                <td>Pulseira de couro com canutilhos.</td>
                                <td>Pulseiras</td>                                
                                <td>0.100Kg.</td>
                                
                                <td>15,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_7B82E9A44ACE025D924DE6819B461DFD" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="33,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_7B82E9A44ACE025D924DE6819B461DFD" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="20,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-de-couro-com-canutilhos.-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-de-couro-com-canutilhos.-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-de-couro-com-canutilhos.-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-de-couro-com-canutilhos.-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-de-couro-com-canutilhos.-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-de-couro-com-canutilhos.-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-de-couro-com-canutilhos.-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-de-couro-com-canutilhos.-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="4EE5FE9D975488B4BB81E75C60DFAF7B" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00049</td>
                                <td>Puseira prata com elos quadrados</td>
                                <td>Pulseiras</td>                                
                                <td>0.005Kg.</td>
                                
                                <td>39,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_4EE5FE9D975488B4BB81E75C60DFAF7B" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="140,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_4EE5FE9D975488B4BB81E75C60DFAF7B" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="140,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/puseira-prata-com-elos-quadrados"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/puseira-prata-com-elos-quadrados"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/puseira-prata-com-elos-quadrados"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/puseira-prata-com-elos-quadrados"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/puseira-prata-com-elos-quadrados"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/puseira-prata-com-elos-quadrados"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/puseira-prata-com-elos-quadrados"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/puseira-prata-com-elos-quadrados')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="5A50D923572EAB7E5A855DF68716E20B" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00050</td>
                                <td>Puseira rose com elos quadrados</td>
                                <td>Pulseiras</td>                                
                                <td>0.006Kg.</td>
                                
                                <td>39,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_5A50D923572EAB7E5A855DF68716E20B" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="46,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_5A50D923572EAB7E5A855DF68716E20B" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="46,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/puseira-rose-com-elos-quadrados"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/puseira-rose-com-elos-quadrados"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/puseira-rose-com-elos-quadrados"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/puseira-rose-com-elos-quadrados"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/puseira-rose-com-elos-quadrados"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/puseira-rose-com-elos-quadrados"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/puseira-rose-com-elos-quadrados"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/puseira-rose-com-elos-quadrados')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="E776B7D91C055BED1FCD57CD7F98CCFD" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00053</td>
                                <td>Pulseira dourada com detalhe de coração</td>
                                <td>Pulseiras</td>                                
                                <td>0.200Kg.</td>
                                
                                <td>48,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_E776B7D91C055BED1FCD57CD7F98CCFD" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_E776B7D91C055BED1FCD57CD7F98CCFD" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="38,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-dourada-com-detalhe-de-coracao-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-com-detalhe-de-coracao-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-com-detalhe-de-coracao-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dourada-com-detalhe-de-coracao-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-com-detalhe-de-coracao-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-com-detalhe-de-coracao-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-com-detalhe-de-coracao-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-com-detalhe-de-coracao-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="EAD423A8E00C2718F1197503DECDFAA8" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00054</td>
                                <td>Pulseira dourada com símbolo da paz</td>
                                <td>Pulseiras</td>                                
                                <td>0.200Kg.</td>
                                
                                <td>18,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_EAD423A8E00C2718F1197503DECDFAA8" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="46,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_EAD423A8E00C2718F1197503DECDFAA8" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-dourada-com-simbolo-da-paz-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-dourada-com-simbolo-da-paz-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-dourada-com-simbolo-da-paz-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-dourada-com-simbolo-da-paz-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-dourada-com-simbolo-da-paz-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-dourada-com-simbolo-da-paz-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-dourada-com-simbolo-da-paz-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-dourada-com-simbolo-da-paz-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="670CC6BF696D9AD3F7A73B691B0F2E61" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00055</td>
                                <td>Pulseira de couro com detalhe de gancho </td>
                                <td>Pulseiras</td>                                
                                <td>0.100Kg.</td>
                                
                                <td>37,00</td>
                                <td><input type="text" class="form-control" name="PRECODE_670CC6BF696D9AD3F7A73B691B0F2E61" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="80,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_670CC6BF696D9AD3F7A73B691B0F2E61" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="48,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-de-couro-com-detalhe-de-gancho-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-de-couro-com-detalhe-de-gancho-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-de-couro-com-detalhe-de-gancho-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-de-couro-com-detalhe-de-gancho-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-de-couro-com-detalhe-de-gancho-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-de-couro-com-detalhe-de-gancho-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-de-couro-com-detalhe-de-gancho-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-de-couro-com-detalhe-de-gancho-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="FD3FEBD302D0BEB1AA337C6017701965" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00056</td>
                                <td>Pulseira de couro com canutilhos </td>
                                <td>Pulseiras</td>                                
                                <td>0.200Kg.</td>
                                
                                <td>84,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_FD3FEBD302D0BEB1AA337C6017701965" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="100,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_FD3FEBD302D0BEB1AA337C6017701965" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="60,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/1/pulseira-de-couro-com-canutilhos-1"><span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-de-couro-com-canutilhos-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-de-couro-com-canutilhos-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/0/pulseira-de-couro-com-canutilhos-1"><span class="ico-default-dolar " data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-de-couro-com-canutilhos-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-de-couro-com-canutilhos-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-de-couro-com-canutilhos-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-de-couro-com-canutilhos-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0B83354F1C45DDAECEB8936A8C3A6FF0" class="" style="cursor: move; height: 85px;" >
                                
                                <td>P-00057</td>
                                <td>Pulseira rose com cristais dentro</td>
                                <td>Pulseiras</td>                                
                                <td>0.007Kg.</td>
                                
                                <td>19,50</td>
                                <td><input type="text" class="form-control" name="PRECODE_0B83354F1C45DDAECEB8936A8C3A6FF0" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_0B83354F1C45DDAECEB8936A8C3A6FF0" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,00"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
                                            <a href="/homolog/pt/produtos/destaque/0/pulseira-rose-com-cristais-dentro-1"><span class="ico-default-star " data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/status/0/pulseira-rose-com-cristais-dentro-1"><span class="ico-default-eye " data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_novo/0/pulseira-rose-com-cristais-dentro-1"><span class="ico-default-heart " data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_promocao/1/pulseira-rose-com-cristais-dentro-1"><span class="ico-default-dolar desative" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                            <a href="/homolog/pt/produtos/classificar_mais_vendidos/1/pulseira-rose-com-cristais-dentro-1"><span class="ico-default-trophy desative" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                            <a href="/homolog/pt/produtos/editar/pulseira-rose-com-cristais-dentro-1"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                            <a href="/homolog/pt/produtos/fotos/pulseira-rose-com-cristais-dentro-1"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                            <a onclick="delete_produto('homolog/pt/produtos/delete/pulseira-rose-com-cristais-dentro-1')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                        </div>
                                    </div>
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
</html>


<?php }} ?>

<?php /*%%SmartyHeaderCode:1420658112545a954f4fe729-82675538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2bb973fc2c3b2b29d97a590fb7549397e7b2656' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/estoque.tpl',
      1 => 1415129827,
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
  'nocache_hash' => '1420658112545a954f4fe729-82675538',
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
    'web_files' => 0,
    'ERRO_NAO_EXISTE_PRODUTOS' => 0,
    'meus_produtos' => 0,
    'produto' => 0,
    'myDragClass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545a954fbfea42_23434032',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545a954fbfea42_23434032')) {function content_545a954fbfea42_23434032($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Lista de Estoque</title>

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
            <li  class="" ><a href="/homolog/en/admin/welcome">Home</a></li>
                            <div class="panel-heading"><h4>Produtos</h4></div>
                <li  class="" ><a href="/homolog/en/produtos/produtos-lista">Lista</a></li> 
                <li  class="active" ><a href="/homolog/en/produtos/estoque">Estoque</a></li> 
                <div class="panel-heading"><h4>Pagamentos</h4></div>
                <li  class="" ><a href="/homolog/en/pedidos/pedidos-lista">Lista</a></li>
                <li  class="" ><a href="/homolog/en/pedidos/exportar">Exportar</a></li>
                <div class="panel-heading"><h4>Newsletter</h4></div>
                <li  class="" ><a href="/homolog/en/informacoes/newsletter-lista">Lista</a></li>
                
                <div class="panel-heading"><h4>Nota Fiscal</h4></div>
                <li  class="" ><a href="/homolog/en/nota-fiscal/exportar">Exportar</a></li>
                <div class="panel-heading"><h4>Páginas</h4></div>
                <li  class="" ><a href="/homolog/en/html/quem_somos">Quem somos</a></li>
                <li  class="" ><a href="/homolog/en/html/promocoes">Promoções</a></li>
                <li  class="" ><a href="/homolog/en/html/programa-vantagens">Programa de Vantagens</a></li>              
                <li  class="" ><a href="/homolog/en/html/programa-fidelidade">Programa de Fidelidade</a></li>              
                <li  class="" ><a href="/homolog/en/html/politica-privacidade">Política de Privacidade</a></li>              
                <li  class="" ><a href="/homolog/en/html/termos-servicos">Termos de serviço</a></li>              
                <li  class="" ><a href="/homolog/en/html/forma-pagamento">Forma de Pagamento</a></li>              
                <li  class="" ><a href="/homolog/en/html/entrega-devolucao">Entrega e Devolução</a></li>              
                <li  class="" ><a href="/homolog/en/html/procon-rj">PROCON-RJ</a></li>              
                <li  class="" ><a href="/homolog/en/html/perguntas-frequentes">Perguntas Frequentes</a></li>              
                <li  class="" ><a href="/homolog/en/html/cuidados-produtos">Cuidado com os Produtos</a></li>              
                        <div class="panel-heading"><h4>Serviços</h4></div>
            <li  class="" ><a href="/homolog/en/admin/alterar-senha">Alterar senha</a></li>              
            <li  class="" ><a href="/homolog/en/admin/logout">Sair</a></li>              
            
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

            <h2><span class="label label-default">Lista de Produtos em Estoque</span></h2>
            <br/>

            <div class="row">
                <div class="col-md-6">

                    <div class="container" style="width: 100%;"> 
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading">Busca por Categorias</div>
                                <form method="post" id="formCategoria" style="margin: 3%;">
                                    <input type="radio" name="categoria" value="todos"  checked="true"  onclick="javascript:start_form_categoria();"/> Todos<br/>
                                    <input type="radio" name="categoria" value="aneis"   onclick="javascript:start_form_categoria();"/> Anéis<br/>
                                    <input type="radio" name="categoria" value="brincos"   onclick="javascript:start_form_categoria();"/> Brinco<br/>
                                    <input type="radio" name="categoria" value="colares"   onclick="javascript:start_form_categoria();"/> Colares<br/>
                                    <input type="radio" name="categoria" value="pulseiras"   onclick="javascript:start_form_categoria();"/> Pulseiras<br/>
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
                                    <div class="panel-heading"><span>ATENÇÃO:</span> Existem 75 produto(s) com estoque baixo!</div>
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
                                                    <td>1</td>
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

           
            <div class="panel-default hide">
                <h3> <span class="Loader "><img src="/homolog/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span> &nbsp;Aguarde, verificando estoque... &nbsp;</h3>
            </div>
            
            <div class="panel-default showEstoque">

                <table class='table' id="table-1" cellspacing="0" cellpadding="2">
                    <thead>

                    <th>Referência</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th style="width: 10%;">Quantidade</th>
                    <th style="width: 10%;">Peso/Kg.</th>
                    <th style="width: 10%;">Preço unitário</th>
                    <th style="width: 10%;">Preço de total</th>



                    </thead>

                    
                     
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0A8DDDEF2FDEF2CC7EB3499B77378C31" class="" style="cursor: move; height: 85px;" >

                                <td>A-00001</td>
                                <td>Anel dourado com quadrado vazado</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="0A8DDDEF2FDEF2CC7EB3499B77378C31" id="quantidade_0A8DDDEF2FDEF2CC7EB3499B77378C31" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_0A8DDDEF2FDEF2CC7EB3499B77378C31" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_0A8DDDEF2FDEF2CC7EB3499B77378C31" id="PRECOUNITARIO_0A8DDDEF2FDEF2CC7EB3499B77378C31" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_0A8DDDEF2FDEF2CC7EB3499B77378C31" id="PRECOCOMPRA_0A8DDDEF2FDEF2CC7EB3499B77378C31"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="52A661732F57666B05F76DFCA815E442" class="" style="cursor: move; height: 85px;" >

                                <td>A-00002</td>
                                <td>Anel AMORE com pingente </td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="52A661732F57666B05F76DFCA815E442" id="quantidade_52A661732F57666B05F76DFCA815E442" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_52A661732F57666B05F76DFCA815E442" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_52A661732F57666B05F76DFCA815E442" id="PRECOUNITARIO_52A661732F57666B05F76DFCA815E442" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_52A661732F57666B05F76DFCA815E442" id="PRECOCOMPRA_52A661732F57666B05F76DFCA815E442"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A6BD77F941AB5392E8D19AB4343C57A3" class="" style="cursor: move; height: 85px;" >

                                <td>A-00003</td>
                                <td>Anel folhas dourado e fumê</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="A6BD77F941AB5392E8D19AB4343C57A3" id="quantidade_A6BD77F941AB5392E8D19AB4343C57A3" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_A6BD77F941AB5392E8D19AB4343C57A3" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A6BD77F941AB5392E8D19AB4343C57A3" id="PRECOUNITARIO_A6BD77F941AB5392E8D19AB4343C57A3" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A6BD77F941AB5392E8D19AB4343C57A3" id="PRECOCOMPRA_A6BD77F941AB5392E8D19AB4343C57A3"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="B9ACB57870877B5110EF1563B2376048" class="" style="cursor: move; height: 85px;" >

                                <td>A-00004</td>
                                <td>Anel dourado linhas vazado</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="B9ACB57870877B5110EF1563B2376048" id="quantidade_B9ACB57870877B5110EF1563B2376048" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_B9ACB57870877B5110EF1563B2376048" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_B9ACB57870877B5110EF1563B2376048" id="PRECOUNITARIO_B9ACB57870877B5110EF1563B2376048" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_B9ACB57870877B5110EF1563B2376048" id="PRECOCOMPRA_B9ACB57870877B5110EF1563B2376048"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="584AF019ABD9F629EBE4A1CF4D5C402B" class="" style="cursor: move; height: 85px;" >

                                <td>A-00005</td>
                                <td>Anel dourado em coração vazado</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="584AF019ABD9F629EBE4A1CF4D5C402B" id="quantidade_584AF019ABD9F629EBE4A1CF4D5C402B" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_584AF019ABD9F629EBE4A1CF4D5C402B" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_584AF019ABD9F629EBE4A1CF4D5C402B" id="PRECOUNITARIO_584AF019ABD9F629EBE4A1CF4D5C402B" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_584AF019ABD9F629EBE4A1CF4D5C402B" id="PRECOCOMPRA_584AF019ABD9F629EBE4A1CF4D5C402B"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="11FF4E0FD4C3EAA7661A1F773561D2B6" class="" style="cursor: move; height: 85px;" >

                                <td>A-00006</td>
                                <td>Kit 3 anéis com bolinhas de zircônia</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="11FF4E0FD4C3EAA7661A1F773561D2B6" id="quantidade_11FF4E0FD4C3EAA7661A1F773561D2B6" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_11FF4E0FD4C3EAA7661A1F773561D2B6" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_11FF4E0FD4C3EAA7661A1F773561D2B6" id="PRECOUNITARIO_11FF4E0FD4C3EAA7661A1F773561D2B6" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="50,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_11FF4E0FD4C3EAA7661A1F773561D2B6" id="PRECOCOMPRA_11FF4E0FD4C3EAA7661A1F773561D2B6"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="100,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="CCBE9335A1DA91994715C66BE4E22453" class="" style="cursor: move; height: 85px;" >

                                <td>A-00007</td>
                                <td>Anel coração regulável</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="CCBE9335A1DA91994715C66BE4E22453" id="quantidade_CCBE9335A1DA91994715C66BE4E22453" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_CCBE9335A1DA91994715C66BE4E22453" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_CCBE9335A1DA91994715C66BE4E22453" id="PRECOUNITARIO_CCBE9335A1DA91994715C66BE4E22453" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="35,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_CCBE9335A1DA91994715C66BE4E22453" id="PRECOCOMPRA_CCBE9335A1DA91994715C66BE4E22453"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="35,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0BDF4B16336DBD12B5B3A76573104F0B" class="" style="cursor: move; height: 85px;" >

                                <td>A-00009</td>
                                <td>Anel dourado de linhas</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="0BDF4B16336DBD12B5B3A76573104F0B" id="quantidade_0BDF4B16336DBD12B5B3A76573104F0B" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_0BDF4B16336DBD12B5B3A76573104F0B" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_0BDF4B16336DBD12B5B3A76573104F0B" id="PRECOUNITARIO_0BDF4B16336DBD12B5B3A76573104F0B" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,40"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_0BDF4B16336DBD12B5B3A76573104F0B" id="PRECOCOMPRA_0BDF4B16336DBD12B5B3A76573104F0B"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,40" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8FFE9D7D00E6ECE7ACC36257CEF2204E" class="" style="cursor: move; height: 85px;" >

                                <td>A-00010</td>
                                <td>Anel círculos de zircônia </td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="8FFE9D7D00E6ECE7ACC36257CEF2204E" id="quantidade_8FFE9D7D00E6ECE7ACC36257CEF2204E" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_8FFE9D7D00E6ECE7ACC36257CEF2204E" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_8FFE9D7D00E6ECE7ACC36257CEF2204E" id="PRECOUNITARIO_8FFE9D7D00E6ECE7ACC36257CEF2204E" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="50,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_8FFE9D7D00E6ECE7ACC36257CEF2204E" id="PRECOCOMPRA_8FFE9D7D00E6ECE7ACC36257CEF2204E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="100,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0428BA4D6CED6676D4C903429ACB2110" class="" style="cursor: move; height: 85px;" >

                                <td>A-00012</td>
                                <td>Anel dourado de cruz com zirconia preta </td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="0428BA4D6CED6676D4C903429ACB2110" id="quantidade_0428BA4D6CED6676D4C903429ACB2110" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_0428BA4D6CED6676D4C903429ACB2110" value="0.500" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_0428BA4D6CED6676D4C903429ACB2110" id="PRECOUNITARIO_0428BA4D6CED6676D4C903429ACB2110" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_0428BA4D6CED6676D4C903429ACB2110" id="PRECOCOMPRA_0428BA4D6CED6676D4C903429ACB2110"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="52,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="F6E952B25FA3577D9730B5B2FA13E120" class="" style="cursor: move; height: 85px;" >

                                <td>A-00013</td>
                                <td>Anel largo cravejado de zircônia </td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="F6E952B25FA3577D9730B5B2FA13E120" id="quantidade_F6E952B25FA3577D9730B5B2FA13E120" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_F6E952B25FA3577D9730B5B2FA13E120" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_F6E952B25FA3577D9730B5B2FA13E120" id="PRECOUNITARIO_F6E952B25FA3577D9730B5B2FA13E120" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="79,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_F6E952B25FA3577D9730B5B2FA13E120" id="PRECOCOMPRA_F6E952B25FA3577D9730B5B2FA13E120"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="159,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="BA1059BB37702C988645CE1DA29D996D" class="" style="cursor: move; height: 85px;" >

                                <td>A-00014</td>
                                <td>Anel dourado Cruz - branca</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="BA1059BB37702C988645CE1DA29D996D" id="quantidade_BA1059BB37702C988645CE1DA29D996D" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_BA1059BB37702C988645CE1DA29D996D" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_BA1059BB37702C988645CE1DA29D996D" id="PRECOUNITARIO_BA1059BB37702C988645CE1DA29D996D" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_BA1059BB37702C988645CE1DA29D996D" id="PRECOCOMPRA_BA1059BB37702C988645CE1DA29D996D"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="52,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="F004FF500CA229AF45A66F98A6747D0B" class="" style="cursor: move; height: 85px;" >

                                <td>A-00016</td>
                                <td>Kit 3 anéis de corações </td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="F004FF500CA229AF45A66F98A6747D0B" id="quantidade_F004FF500CA229AF45A66F98A6747D0B" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_F004FF500CA229AF45A66F98A6747D0B" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_F004FF500CA229AF45A66F98A6747D0B" id="PRECOUNITARIO_F004FF500CA229AF45A66F98A6747D0B" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="100,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_F004FF500CA229AF45A66F98A6747D0B" id="PRECOCOMPRA_F004FF500CA229AF45A66F98A6747D0B"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="200,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="6D50A07F00AF699E14E36897918C0094" class="" style="cursor: move; height: 85px;" >

                                <td>A-00017</td>
                                <td>Anel folha dourado com zircônia</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="6D50A07F00AF699E14E36897918C0094" id="quantidade_6D50A07F00AF699E14E36897918C0094" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_6D50A07F00AF699E14E36897918C0094" value="0.050" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_6D50A07F00AF699E14E36897918C0094" id="PRECOUNITARIO_6D50A07F00AF699E14E36897918C0094" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_6D50A07F00AF699E14E36897918C0094" id="PRECOCOMPRA_6D50A07F00AF699E14E36897918C0094"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="79,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8A9606081641099998CE4700EF0B24BD" class="" style="cursor: move; height: 85px;" >

                                <td>A-00018</td>
                                <td>Anel gatinho</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="8A9606081641099998CE4700EF0B24BD" id="quantidade_8A9606081641099998CE4700EF0B24BD" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_8A9606081641099998CE4700EF0B24BD" value="0.700" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_8A9606081641099998CE4700EF0B24BD" id="PRECOUNITARIO_8A9606081641099998CE4700EF0B24BD" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_8A9606081641099998CE4700EF0B24BD" id="PRECOCOMPRA_8A9606081641099998CE4700EF0B24BD"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A6A074ED265D9505364B58512624FEEF" class="" style="cursor: move; height: 85px;" >

                                <td>A-00019</td>
                                <td>Anel dourado lago com faixas de zircônia</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="A6A074ED265D9505364B58512624FEEF" id="quantidade_A6A074ED265D9505364B58512624FEEF" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_A6A074ED265D9505364B58512624FEEF" value="0.800" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A6A074ED265D9505364B58512624FEEF" id="PRECOUNITARIO_A6A074ED265D9505364B58512624FEEF" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="43,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A6A074ED265D9505364B58512624FEEF" id="PRECOCOMPRA_A6A074ED265D9505364B58512624FEEF"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="86,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="61F27F4F7D8039E3F2352D689812809D" class="" style="cursor: move; height: 85px;" >

                                <td>A-00021</td>
                                <td>Kit anel onda rosê e fumê</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="61F27F4F7D8039E3F2352D689812809D" id="quantidade_61F27F4F7D8039E3F2352D689812809D" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_61F27F4F7D8039E3F2352D689812809D" value="0.600" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_61F27F4F7D8039E3F2352D689812809D" id="PRECOUNITARIO_61F27F4F7D8039E3F2352D689812809D" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="9,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_61F27F4F7D8039E3F2352D689812809D" id="PRECOCOMPRA_61F27F4F7D8039E3F2352D689812809D"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8A30B37EC367D55BD6E5963F7ABF0F50" class="" style="cursor: move; height: 85px;" >

                                <td>A-00023</td>
                                <td>Anel fumê gotas</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="8A30B37EC367D55BD6E5963F7ABF0F50" id="quantidade_8A30B37EC367D55BD6E5963F7ABF0F50" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_8A30B37EC367D55BD6E5963F7ABF0F50" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_8A30B37EC367D55BD6E5963F7ABF0F50" id="PRECOUNITARIO_8A30B37EC367D55BD6E5963F7ABF0F50" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_8A30B37EC367D55BD6E5963F7ABF0F50" id="PRECOCOMPRA_8A30B37EC367D55BD6E5963F7ABF0F50"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="FF3306A9C8D1F0E525F8230D595BCF0B" class="" style="cursor: move; height: 85px;" >

                                <td>A-00024</td>
                                <td>Anel dourado Gotas</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="FF3306A9C8D1F0E525F8230D595BCF0B" id="quantidade_FF3306A9C8D1F0E525F8230D595BCF0B" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_FF3306A9C8D1F0E525F8230D595BCF0B" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_FF3306A9C8D1F0E525F8230D595BCF0B" id="PRECOUNITARIO_FF3306A9C8D1F0E525F8230D595BCF0B" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_FF3306A9C8D1F0E525F8230D595BCF0B" id="PRECOCOMPRA_FF3306A9C8D1F0E525F8230D595BCF0B"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="4B192DEDA5122728AD9D7DDB668D09EA" class="" style="cursor: move; height: 85px;" >

                                <td>A-00025</td>
                                <td>Anel dourado 3 elos com zircônia</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="4B192DEDA5122728AD9D7DDB668D09EA" id="quantidade_4B192DEDA5122728AD9D7DDB668D09EA" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_4B192DEDA5122728AD9D7DDB668D09EA" value="0.085" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_4B192DEDA5122728AD9D7DDB668D09EA" id="PRECOUNITARIO_4B192DEDA5122728AD9D7DDB668D09EA" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_4B192DEDA5122728AD9D7DDB668D09EA" id="PRECOCOMPRA_4B192DEDA5122728AD9D7DDB668D09EA"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="6D9F37C8A177AE5B42B9B2A8A876C064" class="" style="cursor: move; height: 85px;" >

                                <td>A-00026</td>
                                <td>Kit anel 3 cores com zircônia</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="6D9F37C8A177AE5B42B9B2A8A876C064" id="quantidade_6D9F37C8A177AE5B42B9B2A8A876C064" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_6D9F37C8A177AE5B42B9B2A8A876C064" value="0.500" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_6D9F37C8A177AE5B42B9B2A8A876C064" id="PRECOUNITARIO_6D9F37C8A177AE5B42B9B2A8A876C064" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_6D9F37C8A177AE5B42B9B2A8A876C064" id="PRECOCOMPRA_6D9F37C8A177AE5B42B9B2A8A876C064"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="149,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="44E7BC3951220D78FFB794C4641D8905" class="" style="cursor: move; height: 85px;" >

                                <td>A-00027</td>
                                <td>Anel dourado fosco caixa alta</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="44E7BC3951220D78FFB794C4641D8905" id="quantidade_44E7BC3951220D78FFB794C4641D8905" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="3"/></td>
                                <td><input type="text" class="form-control" name="PESO_44E7BC3951220D78FFB794C4641D8905" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_44E7BC3951220D78FFB794C4641D8905" id="PRECOUNITARIO_44E7BC3951220D78FFB794C4641D8905" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_44E7BC3951220D78FFB794C4641D8905" id="PRECOCOMPRA_44E7BC3951220D78FFB794C4641D8905"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="58,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="45B961F8D174DD9E2753E3B9EE41E967" class="" style="cursor: move; height: 85px;" >

                                <td>A-00028</td>
                                <td>Anel dourado caixa alta</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="45B961F8D174DD9E2753E3B9EE41E967" id="quantidade_45B961F8D174DD9E2753E3B9EE41E967" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_45B961F8D174DD9E2753E3B9EE41E967" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_45B961F8D174DD9E2753E3B9EE41E967" id="PRECOUNITARIO_45B961F8D174DD9E2753E3B9EE41E967" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_45B961F8D174DD9E2753E3B9EE41E967" id="PRECOCOMPRA_45B961F8D174DD9E2753E3B9EE41E967"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="1409F0713CB0B01A76FF914CB76783B0" class="" style="cursor: move; height: 85px;" >

                                <td>A-00029</td>
                                <td>Anel dourado com zirconias caixa alta</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="1409F0713CB0B01A76FF914CB76783B0" id="quantidade_1409F0713CB0B01A76FF914CB76783B0" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_1409F0713CB0B01A76FF914CB76783B0" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_1409F0713CB0B01A76FF914CB76783B0" id="PRECOUNITARIO_1409F0713CB0B01A76FF914CB76783B0" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="29,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_1409F0713CB0B01A76FF914CB76783B0" id="PRECOCOMPRA_1409F0713CB0B01A76FF914CB76783B0"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="24E2B0A66868345A4592A88BE7AA4455" class="" style="cursor: move; height: 85px;" >

                                <td>A-00030</td>
                                <td>Anel dourado com 3 elos móveis</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="24E2B0A66868345A4592A88BE7AA4455" id="quantidade_24E2B0A66868345A4592A88BE7AA4455" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_24E2B0A66868345A4592A88BE7AA4455" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_24E2B0A66868345A4592A88BE7AA4455" id="PRECOUNITARIO_24E2B0A66868345A4592A88BE7AA4455" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_24E2B0A66868345A4592A88BE7AA4455" id="PRECOCOMPRA_24E2B0A66868345A4592A88BE7AA4455"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="21FDBB31CD4AEAE0751F3536E5533B52" class="" style="cursor: move; height: 85px;" >

                                <td>A-00031</td>
                                <td>Anel dourado 4 elos espaçados</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="21FDBB31CD4AEAE0751F3536E5533B52" id="quantidade_21FDBB31CD4AEAE0751F3536E5533B52" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_21FDBB31CD4AEAE0751F3536E5533B52" value="0.900" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_21FDBB31CD4AEAE0751F3536E5533B52" id="PRECOUNITARIO_21FDBB31CD4AEAE0751F3536E5533B52" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_21FDBB31CD4AEAE0751F3536E5533B52" id="PRECOCOMPRA_21FDBB31CD4AEAE0751F3536E5533B52"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="52,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="B25255F233A82F1B261A5DF6265961D1" class="" style="cursor: move; height: 85px;" >

                                <td>A-00032</td>
                                <td>Anel com 5 elos e bolinhas com zircônia</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="B25255F233A82F1B261A5DF6265961D1" id="quantidade_B25255F233A82F1B261A5DF6265961D1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_B25255F233A82F1B261A5DF6265961D1" value="0.500" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_B25255F233A82F1B261A5DF6265961D1" id="PRECOUNITARIO_B25255F233A82F1B261A5DF6265961D1" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="69,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_B25255F233A82F1B261A5DF6265961D1" id="PRECOCOMPRA_B25255F233A82F1B261A5DF6265961D1"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="138,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="773D19073E29B066F226D0BCF6F289D3" class="" style="cursor: move; height: 85px;" >

                                <td>A-00033</td>
                                <td>Anel escrita giratória </td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="773D19073E29B066F226D0BCF6F289D3" id="quantidade_773D19073E29B066F226D0BCF6F289D3" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_773D19073E29B066F226D0BCF6F289D3" value="0.500" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_773D19073E29B066F226D0BCF6F289D3" id="PRECOUNITARIO_773D19073E29B066F226D0BCF6F289D3" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="34,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_773D19073E29B066F226D0BCF6F289D3" id="PRECOCOMPRA_773D19073E29B066F226D0BCF6F289D3"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="69,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="3D4613B847C78D9A8C3C2E0AD4326BC6" class="" style="cursor: move; height: 85px;" >

                                <td>A-00034</td>
                                <td>Anel dourado boleado</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="3D4613B847C78D9A8C3C2E0AD4326BC6" id="quantidade_3D4613B847C78D9A8C3C2E0AD4326BC6" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_3D4613B847C78D9A8C3C2E0AD4326BC6" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_3D4613B847C78D9A8C3C2E0AD4326BC6" id="PRECOUNITARIO_3D4613B847C78D9A8C3C2E0AD4326BC6" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="20,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_3D4613B847C78D9A8C3C2E0AD4326BC6" id="PRECOCOMPRA_3D4613B847C78D9A8C3C2E0AD4326BC6"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="40,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7A1428BA2EDAE3CE008D1F3173AC93FD" class="" style="cursor: move; height: 85px;" >

                                <td>A-00037</td>
                                <td>Anel dourado cartier</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="7A1428BA2EDAE3CE008D1F3173AC93FD" id="quantidade_7A1428BA2EDAE3CE008D1F3173AC93FD" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_7A1428BA2EDAE3CE008D1F3173AC93FD" value="0.500" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_7A1428BA2EDAE3CE008D1F3173AC93FD" id="PRECOUNITARIO_7A1428BA2EDAE3CE008D1F3173AC93FD" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_7A1428BA2EDAE3CE008D1F3173AC93FD" id="PRECOCOMPRA_7A1428BA2EDAE3CE008D1F3173AC93FD"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="78,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="2D140CF2BA792DD675A07083BACD260A" class="" style="cursor: move; height: 85px;" >

                                <td>A-00038</td>
                                <td>anel dourado rendado de zircônia branca</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="2D140CF2BA792DD675A07083BACD260A" id="quantidade_2D140CF2BA792DD675A07083BACD260A" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_2D140CF2BA792DD675A07083BACD260A" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_2D140CF2BA792DD675A07083BACD260A" id="PRECOUNITARIO_2D140CF2BA792DD675A07083BACD260A" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_2D140CF2BA792DD675A07083BACD260A" id="PRECOCOMPRA_2D140CF2BA792DD675A07083BACD260A"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="48FD46B81748788308E843449F0A1FF5" class="" style="cursor: move; height: 85px;" >

                                <td>A-00039</td>
                                <td>Anel dourado rendado com zircônia branca</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="48FD46B81748788308E843449F0A1FF5" id="quantidade_48FD46B81748788308E843449F0A1FF5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_48FD46B81748788308E843449F0A1FF5" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_48FD46B81748788308E843449F0A1FF5" id="PRECOUNITARIO_48FD46B81748788308E843449F0A1FF5" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_48FD46B81748788308E843449F0A1FF5" id="PRECOCOMPRA_48FD46B81748788308E843449F0A1FF5"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="90,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="F3157BC47E9777C96C54E08178124829" class="" style="cursor: move; height: 85px;" >

                                <td>A-00040</td>
                                <td>Anel dourado meia aliança com zircônia </td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="F3157BC47E9777C96C54E08178124829" id="quantidade_F3157BC47E9777C96C54E08178124829" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_F3157BC47E9777C96C54E08178124829" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_F3157BC47E9777C96C54E08178124829" id="PRECOUNITARIO_F3157BC47E9777C96C54E08178124829" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="70,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_F3157BC47E9777C96C54E08178124829" id="PRECOCOMPRA_F3157BC47E9777C96C54E08178124829"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="70,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7F868632F145363D9755AB07C9A8194E" class="" style="cursor: move; height: 85px;" >

                                <td>A-00041</td>
                                <td>Anel dourado com 3 elos de zircônia </td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="7F868632F145363D9755AB07C9A8194E" id="quantidade_7F868632F145363D9755AB07C9A8194E" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_7F868632F145363D9755AB07C9A8194E" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_7F868632F145363D9755AB07C9A8194E" id="PRECOUNITARIO_7F868632F145363D9755AB07C9A8194E" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_7F868632F145363D9755AB07C9A8194E" id="PRECOCOMPRA_7F868632F145363D9755AB07C9A8194E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="90,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="CA1DF5846C0B4C658F7416BDDB27A709" class="" style="cursor: move; height: 85px;" >

                                <td>A-00042</td>
                                <td>Anel dourado com círculos de zircônia </td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="CA1DF5846C0B4C658F7416BDDB27A709" id="quantidade_CA1DF5846C0B4C658F7416BDDB27A709" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_CA1DF5846C0B4C658F7416BDDB27A709" value="0.600" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_CA1DF5846C0B4C658F7416BDDB27A709" id="PRECOUNITARIO_CA1DF5846C0B4C658F7416BDDB27A709" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="35,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_CA1DF5846C0B4C658F7416BDDB27A709" id="PRECOCOMPRA_CA1DF5846C0B4C658F7416BDDB27A709"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="70,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="FB4A30529C4EFBF83663C32A0791E1B9" class="" style="cursor: move; height: 85px;" >

                                <td>A-00044</td>
                                <td>Kit 5 anéis dourados </td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="FB4A30529C4EFBF83663C32A0791E1B9" id="quantidade_FB4A30529C4EFBF83663C32A0791E1B9" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_FB4A30529C4EFBF83663C32A0791E1B9" value="0.400" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_FB4A30529C4EFBF83663C32A0791E1B9" id="PRECOUNITARIO_FB4A30529C4EFBF83663C32A0791E1B9" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="70,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_FB4A30529C4EFBF83663C32A0791E1B9" id="PRECOCOMPRA_FB4A30529C4EFBF83663C32A0791E1B9"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="140,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8628D0FDA920049B2DEA1BD61F96A023" class="" style="cursor: move; height: 85px;" >

                                <td>A-00048</td>
                                <td>Anel dourado com detalhe prata, zircônia</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="8628D0FDA920049B2DEA1BD61F96A023" id="quantidade_8628D0FDA920049B2DEA1BD61F96A023" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_8628D0FDA920049B2DEA1BD61F96A023" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_8628D0FDA920049B2DEA1BD61F96A023" id="PRECOUNITARIO_8628D0FDA920049B2DEA1BD61F96A023" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,60"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_8628D0FDA920049B2DEA1BD61F96A023" id="PRECOCOMPRA_8628D0FDA920049B2DEA1BD61F96A023"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,60" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0FD05D1A3C66DC77A77594DEADF58B2C" class="" style="cursor: move; height: 85px;" >

                                <td>A-00050</td>
                                <td>Anel dourado de corrente no centro</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="0FD05D1A3C66DC77A77594DEADF58B2C" id="quantidade_0FD05D1A3C66DC77A77594DEADF58B2C" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_0FD05D1A3C66DC77A77594DEADF58B2C" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_0FD05D1A3C66DC77A77594DEADF58B2C" id="PRECOUNITARIO_0FD05D1A3C66DC77A77594DEADF58B2C" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_0FD05D1A3C66DC77A77594DEADF58B2C" id="PRECOCOMPRA_0FD05D1A3C66DC77A77594DEADF58B2C"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="37EA36CA6C6159BB5DE6491983A646DA" class="" style="cursor: move; height: 85px;" >

                                <td>A-00051</td>
                                <td>Anel dourado de onda com zircônia branca</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="37EA36CA6C6159BB5DE6491983A646DA" id="quantidade_37EA36CA6C6159BB5DE6491983A646DA" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_37EA36CA6C6159BB5DE6491983A646DA" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_37EA36CA6C6159BB5DE6491983A646DA" id="PRECOUNITARIO_37EA36CA6C6159BB5DE6491983A646DA" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="31,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_37EA36CA6C6159BB5DE6491983A646DA" id="PRECOCOMPRA_37EA36CA6C6159BB5DE6491983A646DA"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="31,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="839C9DA3795BDFBA5536CCAE0C556E14" class="" style="cursor: move; height: 85px;" >

                                <td>A-00053</td>
                                <td>Anel dourado com fios de zirciônia</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="839C9DA3795BDFBA5536CCAE0C556E14" id="quantidade_839C9DA3795BDFBA5536CCAE0C556E14" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="3"/></td>
                                <td><input type="text" class="form-control" name="PESO_839C9DA3795BDFBA5536CCAE0C556E14" value="0.400" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_839C9DA3795BDFBA5536CCAE0C556E14" id="PRECOUNITARIO_839C9DA3795BDFBA5536CCAE0C556E14" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_839C9DA3795BDFBA5536CCAE0C556E14" id="PRECOCOMPRA_839C9DA3795BDFBA5536CCAE0C556E14"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="135,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="35478CE36BDEC85DBDAEE518012BF700" class="" style="cursor: move; height: 85px;" >

                                <td>A-00054</td>
                                <td>Anel dourado aliança de zircônia</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="35478CE36BDEC85DBDAEE518012BF700" id="quantidade_35478CE36BDEC85DBDAEE518012BF700" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_35478CE36BDEC85DBDAEE518012BF700" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_35478CE36BDEC85DBDAEE518012BF700" id="PRECOUNITARIO_35478CE36BDEC85DBDAEE518012BF700" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="27,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_35478CE36BDEC85DBDAEE518012BF700" id="PRECOCOMPRA_35478CE36BDEC85DBDAEE518012BF700"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="27,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="572FB7B8CC7DB2236557E44B41F6EF49" class="" style="cursor: move; height: 85px;" >

                                <td>A-00055</td>
                                <td>Anel dourado detalhe prata com pingente</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="572FB7B8CC7DB2236557E44B41F6EF49" id="quantidade_572FB7B8CC7DB2236557E44B41F6EF49" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_572FB7B8CC7DB2236557E44B41F6EF49" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_572FB7B8CC7DB2236557E44B41F6EF49" id="PRECOUNITARIO_572FB7B8CC7DB2236557E44B41F6EF49" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_572FB7B8CC7DB2236557E44B41F6EF49" id="PRECOCOMPRA_572FB7B8CC7DB2236557E44B41F6EF49"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="84,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8E0C29EBEA61AA12395BB2EF759534C6" class="" style="cursor: move; height: 85px;" >

                                <td>A-00056</td>
                                <td>Anel dourado grande com pedra</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="8E0C29EBEA61AA12395BB2EF759534C6" id="quantidade_8E0C29EBEA61AA12395BB2EF759534C6" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_8E0C29EBEA61AA12395BB2EF759534C6" value="0.700" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_8E0C29EBEA61AA12395BB2EF759534C6" id="PRECOUNITARIO_8E0C29EBEA61AA12395BB2EF759534C6" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="95,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_8E0C29EBEA61AA12395BB2EF759534C6" id="PRECOCOMPRA_8E0C29EBEA61AA12395BB2EF759534C6"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="190,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="917B88F5FD3E7ECF93C4F91D908C18EA" class="" style="cursor: move; height: 85px;" >

                                <td>A-00059</td>
                                <td>Conjunto anéis caixa alta</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="917B88F5FD3E7ECF93C4F91D908C18EA" id="quantidade_917B88F5FD3E7ECF93C4F91D908C18EA" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_917B88F5FD3E7ECF93C4F91D908C18EA" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_917B88F5FD3E7ECF93C4F91D908C18EA" id="PRECOUNITARIO_917B88F5FD3E7ECF93C4F91D908C18EA" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="110,40"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_917B88F5FD3E7ECF93C4F91D908C18EA" id="PRECOCOMPRA_917B88F5FD3E7ECF93C4F91D908C18EA"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="110,40" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="AF52523758DF994B0809D4AD09244434" class="" style="cursor: move; height: 85px;" >

                                <td>A-00060</td>
                                <td>Anel dourado com coração cravejado de zi</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="AF52523758DF994B0809D4AD09244434" id="quantidade_AF52523758DF994B0809D4AD09244434" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_AF52523758DF994B0809D4AD09244434" value="0.030" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_AF52523758DF994B0809D4AD09244434" id="PRECOUNITARIO_AF52523758DF994B0809D4AD09244434" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_AF52523758DF994B0809D4AD09244434" id="PRECOCOMPRA_AF52523758DF994B0809D4AD09244434"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="79,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="866675BC657292CA2DE8127F1D54CBAC" class="" style="cursor: move; height: 85px;" >

                                <td>A-00061</td>
                                <td>Peças com 1 ano de garantia com 7 milési</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="866675BC657292CA2DE8127F1D54CBAC" id="quantidade_866675BC657292CA2DE8127F1D54CBAC" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_866675BC657292CA2DE8127F1D54CBAC" value="0.030" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_866675BC657292CA2DE8127F1D54CBAC" id="PRECOUNITARIO_866675BC657292CA2DE8127F1D54CBAC" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_866675BC657292CA2DE8127F1D54CBAC" id="PRECOCOMPRA_866675BC657292CA2DE8127F1D54CBAC"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="79,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="C8E36CE9AE1456C96317663821BDFFB2" class="" style="cursor: move; height: 85px;" >

                                <td>A-00062</td>
                                <td>Anel dourado com zircônias pretas e cris</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="C8E36CE9AE1456C96317663821BDFFB2" id="quantidade_C8E36CE9AE1456C96317663821BDFFB2" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_C8E36CE9AE1456C96317663821BDFFB2" value="0.900" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_C8E36CE9AE1456C96317663821BDFFB2" id="PRECOUNITARIO_C8E36CE9AE1456C96317663821BDFFB2" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="99,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_C8E36CE9AE1456C96317663821BDFFB2" id="PRECOCOMPRA_C8E36CE9AE1456C96317663821BDFFB2"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="199,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="FF726F4F2F7997DD9C7677B4D44784BF" class="" style="cursor: move; height: 85px;" >

                                <td>A-00063</td>
                                <td>Anel dourado com zirconias pretas e cris</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="FF726F4F2F7997DD9C7677B4D44784BF" id="quantidade_FF726F4F2F7997DD9C7677B4D44784BF" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_FF726F4F2F7997DD9C7677B4D44784BF" value="0.800" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_FF726F4F2F7997DD9C7677B4D44784BF" id="PRECOUNITARIO_FF726F4F2F7997DD9C7677B4D44784BF" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="99,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_FF726F4F2F7997DD9C7677B4D44784BF" id="PRECOCOMPRA_FF726F4F2F7997DD9C7677B4D44784BF"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="199,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="25CD80017CFBDF163854F30C9B6FC7AE" class="" style="cursor: move; height: 85px;" >

                                <td>A-00064</td>
                                <td>Anel dourado com zirconias pretas e cris</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="25CD80017CFBDF163854F30C9B6FC7AE" id="quantidade_25CD80017CFBDF163854F30C9B6FC7AE" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_25CD80017CFBDF163854F30C9B6FC7AE" value="0.900" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_25CD80017CFBDF163854F30C9B6FC7AE" id="PRECOUNITARIO_25CD80017CFBDF163854F30C9B6FC7AE" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="99,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_25CD80017CFBDF163854F30C9B6FC7AE" id="PRECOCOMPRA_25CD80017CFBDF163854F30C9B6FC7AE"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="199,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="95AD0FC2E8C176E180846768F579F4B3" class="" style="cursor: move; height: 85px;" >

                                <td>A-00065</td>
                                <td>Anel dourado com cristal lilas em format</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="95AD0FC2E8C176E180846768F579F4B3" id="quantidade_95AD0FC2E8C176E180846768F579F4B3" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_95AD0FC2E8C176E180846768F579F4B3" value="0.150" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_95AD0FC2E8C176E180846768F579F4B3" id="PRECOUNITARIO_95AD0FC2E8C176E180846768F579F4B3" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_95AD0FC2E8C176E180846768F579F4B3" id="PRECOCOMPRA_95AD0FC2E8C176E180846768F579F4B3"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="109,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="E7A824E4EEE6822D6695E596D887AE58" class="" style="cursor: move; height: 85px;" >

                                <td>A-00066</td>
                                <td>Anel dourado com cristal rosa em formato</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="E7A824E4EEE6822D6695E596D887AE58" id="quantidade_E7A824E4EEE6822D6695E596D887AE58" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_E7A824E4EEE6822D6695E596D887AE58" value="0.150" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_E7A824E4EEE6822D6695E596D887AE58" id="PRECOUNITARIO_E7A824E4EEE6822D6695E596D887AE58" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_E7A824E4EEE6822D6695E596D887AE58" id="PRECOCOMPRA_E7A824E4EEE6822D6695E596D887AE58"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="109,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="2BAEC66ACA15D77E8E105EC1BA7CFB99" class="" style="cursor: move; height: 85px;" >

                                <td>A-00067</td>
                                <td>Anel doudaro com relevo de escamas</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="2BAEC66ACA15D77E8E105EC1BA7CFB99" id="quantidade_2BAEC66ACA15D77E8E105EC1BA7CFB99" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="0"/></td>
                                <td><input type="text" class="form-control" name="PESO_2BAEC66ACA15D77E8E105EC1BA7CFB99" value="0.110" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_2BAEC66ACA15D77E8E105EC1BA7CFB99" id="PRECOUNITARIO_2BAEC66ACA15D77E8E105EC1BA7CFB99" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_2BAEC66ACA15D77E8E105EC1BA7CFB99" id="PRECOCOMPRA_2BAEC66ACA15D77E8E105EC1BA7CFB99"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="961B0AE85C17E14E611193962056510C" class="" style="cursor: move; height: 85px;" >

                                <td>A-00068</td>
                                <td>Anel fumê com relevo de escamas</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="961B0AE85C17E14E611193962056510C" id="quantidade_961B0AE85C17E14E611193962056510C" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_961B0AE85C17E14E611193962056510C" value="0.120" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_961B0AE85C17E14E611193962056510C" id="PRECOUNITARIO_961B0AE85C17E14E611193962056510C" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_961B0AE85C17E14E611193962056510C" id="PRECOCOMPRA_961B0AE85C17E14E611193962056510C"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A409F0643AE57B3BBDF880AB453812D0" class="" style="cursor: move; height: 85px;" >

                                <td>A-00069</td>
                                <td>Anel dourado largo com detalhes e zircon</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="A409F0643AE57B3BBDF880AB453812D0" id="quantidade_A409F0643AE57B3BBDF880AB453812D0" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_A409F0643AE57B3BBDF880AB453812D0" value="0.090" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A409F0643AE57B3BBDF880AB453812D0" id="PRECOUNITARIO_A409F0643AE57B3BBDF880AB453812D0" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A409F0643AE57B3BBDF880AB453812D0" id="PRECOCOMPRA_A409F0643AE57B3BBDF880AB453812D0"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="99,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="2BBA165E25D0F75C836450DE61F33CDD" class="" style="cursor: move; height: 85px;" >

                                <td>A-00070</td>
                                <td>Anel dourado com pinjente de coraçao cra</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="2BBA165E25D0F75C836450DE61F33CDD" id="quantidade_2BBA165E25D0F75C836450DE61F33CDD" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_2BBA165E25D0F75C836450DE61F33CDD" value="0.070" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_2BBA165E25D0F75C836450DE61F33CDD" id="PRECOUNITARIO_2BBA165E25D0F75C836450DE61F33CDD" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_2BBA165E25D0F75C836450DE61F33CDD" id="PRECOCOMPRA_2BBA165E25D0F75C836450DE61F33CDD"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="149,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="3D44BE61D646162724AA310DEB630FD1" class="" style="cursor: move; height: 85px;" >

                                <td>A-00071</td>
                                <td>Anel dourado de falange Chanel cravejado</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="3D44BE61D646162724AA310DEB630FD1" id="quantidade_3D44BE61D646162724AA310DEB630FD1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_3D44BE61D646162724AA310DEB630FD1" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_3D44BE61D646162724AA310DEB630FD1" id="PRECOUNITARIO_3D44BE61D646162724AA310DEB630FD1" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_3D44BE61D646162724AA310DEB630FD1" id="PRECOCOMPRA_3D44BE61D646162724AA310DEB630FD1"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="E5ECB57D9FF97BD557EFBEE3A0DC49E0" class="" style="cursor: move; height: 85px;" >

                                <td>A-00072</td>
                                <td>Anel fumê de falange coroa</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="E5ECB57D9FF97BD557EFBEE3A0DC49E0" id="quantidade_E5ECB57D9FF97BD557EFBEE3A0DC49E0" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_E5ECB57D9FF97BD557EFBEE3A0DC49E0" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_E5ECB57D9FF97BD557EFBEE3A0DC49E0" id="PRECOUNITARIO_E5ECB57D9FF97BD557EFBEE3A0DC49E0" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="14,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_E5ECB57D9FF97BD557EFBEE3A0DC49E0" id="PRECOCOMPRA_E5ECB57D9FF97BD557EFBEE3A0DC49E0"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="14,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="2E1CCA6CEBB66EB521479E25667995F2" class="" style="cursor: move; height: 85px;" >

                                <td>A-00073</td>
                                <td>Anel fumê de falange liso</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="2E1CCA6CEBB66EB521479E25667995F2" id="quantidade_2E1CCA6CEBB66EB521479E25667995F2" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_2E1CCA6CEBB66EB521479E25667995F2" value="0.010" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_2E1CCA6CEBB66EB521479E25667995F2" id="PRECOUNITARIO_2E1CCA6CEBB66EB521479E25667995F2" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="12,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_2E1CCA6CEBB66EB521479E25667995F2" id="PRECOCOMPRA_2E1CCA6CEBB66EB521479E25667995F2"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="D1B8073C87BF7922696F624F97D08481" class="" style="cursor: move; height: 85px;" >

                                <td>A-00074</td>
                                <td>Anel dourado de falange liso</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="D1B8073C87BF7922696F624F97D08481" id="quantidade_D1B8073C87BF7922696F624F97D08481" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_D1B8073C87BF7922696F624F97D08481" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_D1B8073C87BF7922696F624F97D08481" id="PRECOUNITARIO_D1B8073C87BF7922696F624F97D08481" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="12,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_D1B8073C87BF7922696F624F97D08481" id="PRECOCOMPRA_D1B8073C87BF7922696F624F97D08481"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="3ED3A96380EF2386A484973EDD97C508" class="" style="cursor: move; height: 85px;" >

                                <td>A-00075</td>
                                <td>Anel dourado de falange coraçao</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="3ED3A96380EF2386A484973EDD97C508" id="quantidade_3ED3A96380EF2386A484973EDD97C508" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_3ED3A96380EF2386A484973EDD97C508" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_3ED3A96380EF2386A484973EDD97C508" id="PRECOUNITARIO_3ED3A96380EF2386A484973EDD97C508" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="13,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_3ED3A96380EF2386A484973EDD97C508" id="PRECOCOMPRA_3ED3A96380EF2386A484973EDD97C508"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="9A0771BB3DE3033B58B49F5F82B4C05B" class="" style="cursor: move; height: 85px;" >

                                <td>A-00076</td>
                                <td>Anel fumê de falange coraçao</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="9A0771BB3DE3033B58B49F5F82B4C05B" id="quantidade_9A0771BB3DE3033B58B49F5F82B4C05B" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_9A0771BB3DE3033B58B49F5F82B4C05B" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_9A0771BB3DE3033B58B49F5F82B4C05B" id="PRECOUNITARIO_9A0771BB3DE3033B58B49F5F82B4C05B" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="13,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_9A0771BB3DE3033B58B49F5F82B4C05B" id="PRECOCOMPRA_9A0771BB3DE3033B58B49F5F82B4C05B"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8FB1ABCCB3B34F2CF90BF2AC0C81FC04" class="" style="cursor: move; height: 85px;" >

                                <td>A-00077</td>
                                <td>Anel dourado de falange zig zag</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="8FB1ABCCB3B34F2CF90BF2AC0C81FC04" id="quantidade_8FB1ABCCB3B34F2CF90BF2AC0C81FC04" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_8FB1ABCCB3B34F2CF90BF2AC0C81FC04" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_8FB1ABCCB3B34F2CF90BF2AC0C81FC04" id="PRECOUNITARIO_8FB1ABCCB3B34F2CF90BF2AC0C81FC04" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="13,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_8FB1ABCCB3B34F2CF90BF2AC0C81FC04" id="PRECOCOMPRA_8FB1ABCCB3B34F2CF90BF2AC0C81FC04"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="30C4EFD4082C4E44B4884AF623CFA23C" class="" style="cursor: move; height: 85px;" >

                                <td>A-00078</td>
                                <td>Anel fumê de falange zig zag</td>
                                <td>Anéis</td>
                                <td><input type="text" class="form-control" name="30C4EFD4082C4E44B4884AF623CFA23C" id="quantidade_30C4EFD4082C4E44B4884AF623CFA23C" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_30C4EFD4082C4E44B4884AF623CFA23C" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_30C4EFD4082C4E44B4884AF623CFA23C" id="PRECOUNITARIO_30C4EFD4082C4E44B4884AF623CFA23C" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="13,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_30C4EFD4082C4E44B4884AF623CFA23C" id="PRECOCOMPRA_30C4EFD4082C4E44B4884AF623CFA23C"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="D7B187B4398A6FD34554F9A1EC964201" class="" style="cursor: move; height: 85px;" >

                                <td>B-00001</td>
                                <td>Brinco ferradura dourado </td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="D7B187B4398A6FD34554F9A1EC964201" id="quantidade_D7B187B4398A6FD34554F9A1EC964201" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_D7B187B4398A6FD34554F9A1EC964201" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_D7B187B4398A6FD34554F9A1EC964201" id="PRECOUNITARIO_D7B187B4398A6FD34554F9A1EC964201" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="5,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_D7B187B4398A6FD34554F9A1EC964201" id="PRECOCOMPRA_D7B187B4398A6FD34554F9A1EC964201"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="10,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="00A18927031930FEEAC9BC8463193823" class="" style="cursor: move; height: 85px;" >

                                <td>B-00002</td>
                                <td>Brinco dourado de cruz pequena</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="00A18927031930FEEAC9BC8463193823" id="quantidade_00A18927031930FEEAC9BC8463193823" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_00A18927031930FEEAC9BC8463193823" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_00A18927031930FEEAC9BC8463193823" id="PRECOUNITARIO_00A18927031930FEEAC9BC8463193823" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="12,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_00A18927031930FEEAC9BC8463193823" id="PRECOCOMPRA_00A18927031930FEEAC9BC8463193823"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="3F889AE5443A1DAECA35A9AB00EC795A" class="" style="cursor: move; height: 85px;" >

                                <td>B-00003</td>
                                <td>Brinco dourado de coração vazado</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="3F889AE5443A1DAECA35A9AB00EC795A" id="quantidade_3F889AE5443A1DAECA35A9AB00EC795A" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_3F889AE5443A1DAECA35A9AB00EC795A" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_3F889AE5443A1DAECA35A9AB00EC795A" id="PRECOUNITARIO_3F889AE5443A1DAECA35A9AB00EC795A" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="12,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_3F889AE5443A1DAECA35A9AB00EC795A" id="PRECOCOMPRA_3F889AE5443A1DAECA35A9AB00EC795A"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="107636BD6847B65F080EAA7C66463C58" class="" style="cursor: move; height: 85px;" >

                                <td>B-00004</td>
                                <td>Brinco dourado formato de diamante </td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="107636BD6847B65F080EAA7C66463C58" id="quantidade_107636BD6847B65F080EAA7C66463C58" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_107636BD6847B65F080EAA7C66463C58" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_107636BD6847B65F080EAA7C66463C58" id="PRECOUNITARIO_107636BD6847B65F080EAA7C66463C58" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="9,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_107636BD6847B65F080EAA7C66463C58" id="PRECOCOMPRA_107636BD6847B65F080EAA7C66463C58"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="9,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7CCED85BF89145B63E83684EA4D27C6D" class="" style="cursor: move; height: 85px;" >

                                <td>B-00005</td>
                                <td>Brinco fumê com desenhos vazados</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="7CCED85BF89145B63E83684EA4D27C6D" id="quantidade_7CCED85BF89145B63E83684EA4D27C6D" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_7CCED85BF89145B63E83684EA4D27C6D" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_7CCED85BF89145B63E83684EA4D27C6D" id="PRECOUNITARIO_7CCED85BF89145B63E83684EA4D27C6D" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="8,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_7CCED85BF89145B63E83684EA4D27C6D" id="PRECOCOMPRA_7CCED85BF89145B63E83684EA4D27C6D"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="16,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="9B6CDA860D7540BE3040DC84E3D5B689" class="" style="cursor: move; height: 85px;" >

                                <td>B-00007</td>
                                <td>Brinco dourado LOVE</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="9B6CDA860D7540BE3040DC84E3D5B689" id="quantidade_9B6CDA860D7540BE3040DC84E3D5B689" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_9B6CDA860D7540BE3040DC84E3D5B689" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_9B6CDA860D7540BE3040DC84E3D5B689" id="PRECOUNITARIO_9B6CDA860D7540BE3040DC84E3D5B689" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="7,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_9B6CDA860D7540BE3040DC84E3D5B689" id="PRECOCOMPRA_9B6CDA860D7540BE3040DC84E3D5B689"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="14,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="09D67015BBF887FE9795A913ABD22EC0" class="" style="cursor: move; height: 85px;" >

                                <td>B-00008</td>
                                <td>Brinco Dourado Menininha </td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="09D67015BBF887FE9795A913ABD22EC0" id="quantidade_09D67015BBF887FE9795A913ABD22EC0" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_09D67015BBF887FE9795A913ABD22EC0" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_09D67015BBF887FE9795A913ABD22EC0" id="PRECOUNITARIO_09D67015BBF887FE9795A913ABD22EC0" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="4,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_09D67015BBF887FE9795A913ABD22EC0" id="PRECOCOMPRA_09D67015BBF887FE9795A913ABD22EC0"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="4,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="FACFE69810E1C8AD7A9EA504EC369BD6" class="" style="cursor: move; height: 85px;" >

                                <td>B-00009</td>
                                <td>Brinco dourado de circulos</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="FACFE69810E1C8AD7A9EA504EC369BD6" id="quantidade_FACFE69810E1C8AD7A9EA504EC369BD6" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_FACFE69810E1C8AD7A9EA504EC369BD6" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_FACFE69810E1C8AD7A9EA504EC369BD6" id="PRECOUNITARIO_FACFE69810E1C8AD7A9EA504EC369BD6" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_FACFE69810E1C8AD7A9EA504EC369BD6" id="PRECOCOMPRA_FACFE69810E1C8AD7A9EA504EC369BD6"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="129,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0A31103E11592CB89490EFBD05DB5B52" class="" style="cursor: move; height: 85px;" >

                                <td>B-00010</td>
                                <td>Brinco dourado com quadradinhos</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="0A31103E11592CB89490EFBD05DB5B52" id="quantidade_0A31103E11592CB89490EFBD05DB5B52" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_0A31103E11592CB89490EFBD05DB5B52" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_0A31103E11592CB89490EFBD05DB5B52" id="PRECOUNITARIO_0A31103E11592CB89490EFBD05DB5B52" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="34,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_0A31103E11592CB89490EFBD05DB5B52" id="PRECOCOMPRA_0A31103E11592CB89490EFBD05DB5B52"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="69,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="D0B03CEAB741316E733D311D0A076D8D" class="" style="cursor: move; height: 85px;" >

                                <td>B-000104</td>
                                <td>Brinco fume com canutilho e pendente flo</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="D0B03CEAB741316E733D311D0A076D8D" id="quantidade_D0B03CEAB741316E733D311D0A076D8D" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_D0B03CEAB741316E733D311D0A076D8D" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_D0B03CEAB741316E733D311D0A076D8D" id="PRECOUNITARIO_D0B03CEAB741316E733D311D0A076D8D" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value=""/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_D0B03CEAB741316E733D311D0A076D8D" id="PRECOCOMPRA_D0B03CEAB741316E733D311D0A076D8D"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="697D515907F95884242CCF97317D9666" class="" style="cursor: move; height: 85px;" >

                                <td>B-000105</td>
                                <td>Brinco replica vivara com zirconia preta</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="697D515907F95884242CCF97317D9666" id="quantidade_697D515907F95884242CCF97317D9666" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_697D515907F95884242CCF97317D9666" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_697D515907F95884242CCF97317D9666" id="PRECOUNITARIO_697D515907F95884242CCF97317D9666" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value=""/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_697D515907F95884242CCF97317D9666" id="PRECOCOMPRA_697D515907F95884242CCF97317D9666"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="831951ACE7CBB3BACAE2AB5AF67D14B6" class="" style="cursor: move; height: 85px;" >

                                <td>B-00011</td>
                                <td>Brinco dourado e fumê com folhas</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="831951ACE7CBB3BACAE2AB5AF67D14B6" id="quantidade_831951ACE7CBB3BACAE2AB5AF67D14B6" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_831951ACE7CBB3BACAE2AB5AF67D14B6" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_831951ACE7CBB3BACAE2AB5AF67D14B6" id="PRECOUNITARIO_831951ACE7CBB3BACAE2AB5AF67D14B6" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="22,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_831951ACE7CBB3BACAE2AB5AF67D14B6" id="PRECOCOMPRA_831951ACE7CBB3BACAE2AB5AF67D14B6"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="FFF25BA03BBD1EC366626C990C77295F" class="" style="cursor: move; height: 85px;" >

                                <td>B-00014</td>
                                <td>Brinco dourado com círculos de laço </td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="FFF25BA03BBD1EC366626C990C77295F" id="quantidade_FFF25BA03BBD1EC366626C990C77295F" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_FFF25BA03BBD1EC366626C990C77295F" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_FFF25BA03BBD1EC366626C990C77295F" id="PRECOUNITARIO_FFF25BA03BBD1EC366626C990C77295F" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="9,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_FFF25BA03BBD1EC366626C990C77295F" id="PRECOCOMPRA_FFF25BA03BBD1EC366626C990C77295F"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="18,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="1C8B760C5DF92A5F50CEAFF1A4FF417D" class="" style="cursor: move; height: 85px;" >

                                <td>B-00015</td>
                                <td>Brinco dourado fosco quadrado irregular</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="1C8B760C5DF92A5F50CEAFF1A4FF417D" id="quantidade_1C8B760C5DF92A5F50CEAFF1A4FF417D" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_1C8B760C5DF92A5F50CEAFF1A4FF417D" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_1C8B760C5DF92A5F50CEAFF1A4FF417D" id="PRECOUNITARIO_1C8B760C5DF92A5F50CEAFF1A4FF417D" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="27,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_1C8B760C5DF92A5F50CEAFF1A4FF417D" id="PRECOCOMPRA_1C8B760C5DF92A5F50CEAFF1A4FF417D"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="3A1A6D89C52F92FE354768FEDED5CA96" class="" style="cursor: move; height: 85px;" >

                                <td>B-00016</td>
                                <td>Brinco dourado de argola com detalhes na</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="3A1A6D89C52F92FE354768FEDED5CA96" id="quantidade_3A1A6D89C52F92FE354768FEDED5CA96" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_3A1A6D89C52F92FE354768FEDED5CA96" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_3A1A6D89C52F92FE354768FEDED5CA96" id="PRECOUNITARIO_3A1A6D89C52F92FE354768FEDED5CA96" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="6,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_3A1A6D89C52F92FE354768FEDED5CA96" id="PRECOCOMPRA_3A1A6D89C52F92FE354768FEDED5CA96"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="12,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="F7263BE17CA1C274D753E3844F3710B9" class="" style="cursor: move; height: 85px;" >

                                <td>B-00018</td>
                                <td>Brinco rose escovado com círculos largos</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="F7263BE17CA1C274D753E3844F3710B9" id="quantidade_F7263BE17CA1C274D753E3844F3710B9" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_F7263BE17CA1C274D753E3844F3710B9" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_F7263BE17CA1C274D753E3844F3710B9" id="PRECOUNITARIO_F7263BE17CA1C274D753E3844F3710B9" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="25,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_F7263BE17CA1C274D753E3844F3710B9" id="PRECOCOMPRA_F7263BE17CA1C274D753E3844F3710B9"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="50,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="E65F0496F1CF81D6F3598BEF979D8A42" class="" style="cursor: move; height: 85px;" >

                                <td>B-00021</td>
                                <td>Brinco Dourado Vazado Indiano</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="E65F0496F1CF81D6F3598BEF979D8A42" id="quantidade_E65F0496F1CF81D6F3598BEF979D8A42" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_E65F0496F1CF81D6F3598BEF979D8A42" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_E65F0496F1CF81D6F3598BEF979D8A42" id="PRECOUNITARIO_E65F0496F1CF81D6F3598BEF979D8A42" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_E65F0496F1CF81D6F3598BEF979D8A42" id="PRECOCOMPRA_E65F0496F1CF81D6F3598BEF979D8A42"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="DF8C7AAE0BE173386B4AAA1884C3977F" class="" style="cursor: move; height: 85px;" >

                                <td>B-00022</td>
                                <td>Brinco Fumê Vazado Indiano</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="DF8C7AAE0BE173386B4AAA1884C3977F" id="quantidade_DF8C7AAE0BE173386B4AAA1884C3977F" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_DF8C7AAE0BE173386B4AAA1884C3977F" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_DF8C7AAE0BE173386B4AAA1884C3977F" id="PRECOUNITARIO_DF8C7AAE0BE173386B4AAA1884C3977F" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_DF8C7AAE0BE173386B4AAA1884C3977F" id="PRECOCOMPRA_DF8C7AAE0BE173386B4AAA1884C3977F"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A8E8615598A0D1E8C7EB04E9DA1E2C87" class="" style="cursor: move; height: 85px;" >

                                <td>B-00025</td>
                                <td>Brinco dourado escovado de folhas longo</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="A8E8615598A0D1E8C7EB04E9DA1E2C87" id="quantidade_A8E8615598A0D1E8C7EB04E9DA1E2C87" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_A8E8615598A0D1E8C7EB04E9DA1E2C87" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A8E8615598A0D1E8C7EB04E9DA1E2C87" id="PRECOUNITARIO_A8E8615598A0D1E8C7EB04E9DA1E2C87" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="11,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A8E8615598A0D1E8C7EB04E9DA1E2C87" id="PRECOCOMPRA_A8E8615598A0D1E8C7EB04E9DA1E2C87"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="22,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="9B736D8142A2F1819800EB3F9238BF10" class="" style="cursor: move; height: 85px;" >

                                <td>B-00026</td>
                                <td>Brinco Dourado com pendente de gota</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="9B736D8142A2F1819800EB3F9238BF10" id="quantidade_9B736D8142A2F1819800EB3F9238BF10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_9B736D8142A2F1819800EB3F9238BF10" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_9B736D8142A2F1819800EB3F9238BF10" id="PRECOUNITARIO_9B736D8142A2F1819800EB3F9238BF10" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="10,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_9B736D8142A2F1819800EB3F9238BF10" id="PRECOCOMPRA_9B736D8142A2F1819800EB3F9238BF10"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="20,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="4EA83FE639F28B1E78B9797EF8019FC0" class="" style="cursor: move; height: 85px;" >

                                <td>B-00027</td>
                                <td>Brinco dourado com três elos vazados </td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="4EA83FE639F28B1E78B9797EF8019FC0" id="quantidade_4EA83FE639F28B1E78B9797EF8019FC0" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_4EA83FE639F28B1E78B9797EF8019FC0" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_4EA83FE639F28B1E78B9797EF8019FC0" id="PRECOUNITARIO_4EA83FE639F28B1E78B9797EF8019FC0" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="17,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_4EA83FE639F28B1E78B9797EF8019FC0" id="PRECOCOMPRA_4EA83FE639F28B1E78B9797EF8019FC0"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="34,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="F6E4FC13C4DE57C64DD9F3A5FC9D8EDD" class="" style="cursor: move; height: 85px;" >

                                <td>B-00028</td>
                                <td>Brinco dourado longo com 2 gotas de lado</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="F6E4FC13C4DE57C64DD9F3A5FC9D8EDD" id="quantidade_F6E4FC13C4DE57C64DD9F3A5FC9D8EDD" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_F6E4FC13C4DE57C64DD9F3A5FC9D8EDD" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_F6E4FC13C4DE57C64DD9F3A5FC9D8EDD" id="PRECOUNITARIO_F6E4FC13C4DE57C64DD9F3A5FC9D8EDD" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="10,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_F6E4FC13C4DE57C64DD9F3A5FC9D8EDD" id="PRECOCOMPRA_F6E4FC13C4DE57C64DD9F3A5FC9D8EDD"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="20,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="712C8D36E7F9DD14AA48F6F17D51080D" class="" style="cursor: move; height: 85px;" >

                                <td>B-00029</td>
                                <td>Brinco dourado e fumê com circulos</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="712C8D36E7F9DD14AA48F6F17D51080D" id="quantidade_712C8D36E7F9DD14AA48F6F17D51080D" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_712C8D36E7F9DD14AA48F6F17D51080D" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_712C8D36E7F9DD14AA48F6F17D51080D" id="PRECOUNITARIO_712C8D36E7F9DD14AA48F6F17D51080D" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_712C8D36E7F9DD14AA48F6F17D51080D" id="PRECOCOMPRA_712C8D36E7F9DD14AA48F6F17D51080D"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="79,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="98AE7547322BB73C2530E2DDBEC8B1E5" class="" style="cursor: move; height: 85px;" >

                                <td>B-00033</td>
                                <td>Brinco dourado de gota com detalhes</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="98AE7547322BB73C2530E2DDBEC8B1E5" id="quantidade_98AE7547322BB73C2530E2DDBEC8B1E5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_98AE7547322BB73C2530E2DDBEC8B1E5" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_98AE7547322BB73C2530E2DDBEC8B1E5" id="PRECOUNITARIO_98AE7547322BB73C2530E2DDBEC8B1E5" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_98AE7547322BB73C2530E2DDBEC8B1E5" id="PRECOCOMPRA_98AE7547322BB73C2530E2DDBEC8B1E5"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="149,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="32676332D77ECC33998EE049E49250FC" class="" style="cursor: move; height: 85px;" >

                                <td>B-00034</td>
                                <td>Brinco dourado com gota de cristal</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="32676332D77ECC33998EE049E49250FC" id="quantidade_32676332D77ECC33998EE049E49250FC" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_32676332D77ECC33998EE049E49250FC" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_32676332D77ECC33998EE049E49250FC" id="PRECOUNITARIO_32676332D77ECC33998EE049E49250FC" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_32676332D77ECC33998EE049E49250FC" id="PRECOCOMPRA_32676332D77ECC33998EE049E49250FC"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="149,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8B791D07B2084DA4AB31069C67CB203C" class="" style="cursor: move; height: 85px;" >

                                <td>B-00035</td>
                                <td>Brinco dourado com base gota de cristal </td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="8B791D07B2084DA4AB31069C67CB203C" id="quantidade_8B791D07B2084DA4AB31069C67CB203C" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_8B791D07B2084DA4AB31069C67CB203C" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_8B791D07B2084DA4AB31069C67CB203C" id="PRECOUNITARIO_8B791D07B2084DA4AB31069C67CB203C" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_8B791D07B2084DA4AB31069C67CB203C" id="PRECOCOMPRA_8B791D07B2084DA4AB31069C67CB203C"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="149,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="DCA1DABFA59AC4CC543AE480C157247C" class="" style="cursor: move; height: 85px;" >

                                <td>B-00036</td>
                                <td>Brinco dourado meia bola</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="DCA1DABFA59AC4CC543AE480C157247C" id="quantidade_DCA1DABFA59AC4CC543AE480C157247C" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_DCA1DABFA59AC4CC543AE480C157247C" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_DCA1DABFA59AC4CC543AE480C157247C" id="PRECOUNITARIO_DCA1DABFA59AC4CC543AE480C157247C" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="6,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_DCA1DABFA59AC4CC543AE480C157247C" id="PRECOCOMPRA_DCA1DABFA59AC4CC543AE480C157247C"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="6,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A959A2EFD38BF1976E842C5B0D53CAE5" class="" style="cursor: move; height: 85px;" >

                                <td>B-00037</td>
                                <td>Brinco dourado argola achatado</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="A959A2EFD38BF1976E842C5B0D53CAE5" id="quantidade_A959A2EFD38BF1976E842C5B0D53CAE5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_A959A2EFD38BF1976E842C5B0D53CAE5" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A959A2EFD38BF1976E842C5B0D53CAE5" id="PRECOUNITARIO_A959A2EFD38BF1976E842C5B0D53CAE5" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="9,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A959A2EFD38BF1976E842C5B0D53CAE5" id="PRECOCOMPRA_A959A2EFD38BF1976E842C5B0D53CAE5"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="18,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="CADEA7220ED3BD06B3F24FC619BE8B41" class="" style="cursor: move; height: 85px;" >

                                <td>B-00038</td>
                                <td>Brinco dourado argola achatado médio</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="CADEA7220ED3BD06B3F24FC619BE8B41" id="quantidade_CADEA7220ED3BD06B3F24FC619BE8B41" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_CADEA7220ED3BD06B3F24FC619BE8B41" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_CADEA7220ED3BD06B3F24FC619BE8B41" id="PRECOUNITARIO_CADEA7220ED3BD06B3F24FC619BE8B41" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="13,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_CADEA7220ED3BD06B3F24FC619BE8B41" id="PRECOCOMPRA_CADEA7220ED3BD06B3F24FC619BE8B41"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="27,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="37855BF9612896098D869A52B19378E8" class="" style="cursor: move; height: 85px;" >

                                <td>B-00040</td>
                                <td>Brinco dourado argola </td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="37855BF9612896098D869A52B19378E8" id="quantidade_37855BF9612896098D869A52B19378E8" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_37855BF9612896098D869A52B19378E8" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_37855BF9612896098D869A52B19378E8" id="PRECOUNITARIO_37855BF9612896098D869A52B19378E8" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_37855BF9612896098D869A52B19378E8" id="PRECOCOMPRA_37855BF9612896098D869A52B19378E8"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="9D42338ABC1AD61FB15BAD0514C39F49" class="" style="cursor: move; height: 85px;" >

                                <td>B-00041</td>
                                <td>Brinco prata argola rendado com zircônia</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="9D42338ABC1AD61FB15BAD0514C39F49" id="quantidade_9D42338ABC1AD61FB15BAD0514C39F49" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_9D42338ABC1AD61FB15BAD0514C39F49" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_9D42338ABC1AD61FB15BAD0514C39F49" id="PRECOUNITARIO_9D42338ABC1AD61FB15BAD0514C39F49" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="43,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_9D42338ABC1AD61FB15BAD0514C39F49" id="PRECOCOMPRA_9D42338ABC1AD61FB15BAD0514C39F49"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="87,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="39845C92293B9AA5B790CCD0E71C264C" class="" style="cursor: move; height: 85px;" >

                                <td>B-00042</td>
                                <td>Brinco dourado argola </td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="39845C92293B9AA5B790CCD0E71C264C" id="quantidade_39845C92293B9AA5B790CCD0E71C264C" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_39845C92293B9AA5B790CCD0E71C264C" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_39845C92293B9AA5B790CCD0E71C264C" id="PRECOUNITARIO_39845C92293B9AA5B790CCD0E71C264C" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="48,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_39845C92293B9AA5B790CCD0E71C264C" id="PRECOCOMPRA_39845C92293B9AA5B790CCD0E71C264C"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="96,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A5CE62BF904DA9847B18D1BE03511FFE" class="" style="cursor: move; height: 85px;" >

                                <td>B-00043</td>
                                <td>Brinco dourado de estrela</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="A5CE62BF904DA9847B18D1BE03511FFE" id="quantidade_A5CE62BF904DA9847B18D1BE03511FFE" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_A5CE62BF904DA9847B18D1BE03511FFE" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A5CE62BF904DA9847B18D1BE03511FFE" id="PRECOUNITARIO_A5CE62BF904DA9847B18D1BE03511FFE" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="21,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A5CE62BF904DA9847B18D1BE03511FFE" id="PRECOCOMPRA_A5CE62BF904DA9847B18D1BE03511FFE"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="CC6C36D09B0FDF0F0E04A1063118E26F" class="" style="cursor: move; height: 85px;" >

                                <td>B-00044</td>
                                <td>Brinco dourado pequeno de cruz</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="CC6C36D09B0FDF0F0E04A1063118E26F" id="quantidade_CC6C36D09B0FDF0F0E04A1063118E26F" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_CC6C36D09B0FDF0F0E04A1063118E26F" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_CC6C36D09B0FDF0F0E04A1063118E26F" id="PRECOUNITARIO_CC6C36D09B0FDF0F0E04A1063118E26F" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_CC6C36D09B0FDF0F0E04A1063118E26F" id="PRECOCOMPRA_CC6C36D09B0FDF0F0E04A1063118E26F"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="52,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="D1EBE32C7F098761847442CDD0072C13" class="" style="cursor: move; height: 85px;" >

                                <td>B-00045</td>
                                <td>Brinco dourado indiano com pedra</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="D1EBE32C7F098761847442CDD0072C13" id="quantidade_D1EBE32C7F098761847442CDD0072C13" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_D1EBE32C7F098761847442CDD0072C13" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_D1EBE32C7F098761847442CDD0072C13" id="PRECOUNITARIO_D1EBE32C7F098761847442CDD0072C13" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_D1EBE32C7F098761847442CDD0072C13" id="PRECOCOMPRA_D1EBE32C7F098761847442CDD0072C13"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="129,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="89207DAE537E6256290DC5851C043C08" class="" style="cursor: move; height: 85px;" >

                                <td>B-00046</td>
                                <td>Brinco dourado indiano com duas gotas</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="89207DAE537E6256290DC5851C043C08" id="quantidade_89207DAE537E6256290DC5851C043C08" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_89207DAE537E6256290DC5851C043C08" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_89207DAE537E6256290DC5851C043C08" id="PRECOUNITARIO_89207DAE537E6256290DC5851C043C08" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="30,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_89207DAE537E6256290DC5851C043C08" id="PRECOCOMPRA_89207DAE537E6256290DC5851C043C08"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="60,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="2933D10BC715C8B2D53C10FB297F57F8" class="" style="cursor: move; height: 85px;" >

                                <td>B-00047</td>
                                <td>Brinco coração invertido dourado indiano</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="2933D10BC715C8B2D53C10FB297F57F8" id="quantidade_2933D10BC715C8B2D53C10FB297F57F8" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_2933D10BC715C8B2D53C10FB297F57F8" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_2933D10BC715C8B2D53C10FB297F57F8" id="PRECOUNITARIO_2933D10BC715C8B2D53C10FB297F57F8" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="30,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_2933D10BC715C8B2D53C10FB297F57F8" id="PRECOCOMPRA_2933D10BC715C8B2D53C10FB297F57F8"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="60,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0398A2A8F31A6607274D4F85656135A5" class="" style="cursor: move; height: 85px;" >

                                <td>B-00048</td>
                                <td>Brinco pequeno branco com duas pérolas</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="0398A2A8F31A6607274D4F85656135A5" id="quantidade_0398A2A8F31A6607274D4F85656135A5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_0398A2A8F31A6607274D4F85656135A5" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_0398A2A8F31A6607274D4F85656135A5" id="PRECOUNITARIO_0398A2A8F31A6607274D4F85656135A5" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="55,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_0398A2A8F31A6607274D4F85656135A5" id="PRECOCOMPRA_0398A2A8F31A6607274D4F85656135A5"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="55,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="AC9BD9626F0D86F7C17353FAFFF85E73" class="" style="cursor: move; height: 85px;" >

                                <td>B-00050</td>
                                <td>Brinco Indiano com cinco gotas</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="AC9BD9626F0D86F7C17353FAFFF85E73" id="quantidade_AC9BD9626F0D86F7C17353FAFFF85E73" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_AC9BD9626F0D86F7C17353FAFFF85E73" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_AC9BD9626F0D86F7C17353FAFFF85E73" id="PRECOUNITARIO_AC9BD9626F0D86F7C17353FAFFF85E73" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="32,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_AC9BD9626F0D86F7C17353FAFFF85E73" id="PRECOCOMPRA_AC9BD9626F0D86F7C17353FAFFF85E73"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="65,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="F45275FA76EA454FF1434BA295EF367F" class="" style="cursor: move; height: 85px;" >

                                <td>B-00052</td>
                                <td>Brinco dourado com pedra preta</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="F45275FA76EA454FF1434BA295EF367F" id="quantidade_F45275FA76EA454FF1434BA295EF367F" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_F45275FA76EA454FF1434BA295EF367F" value="0.400" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_F45275FA76EA454FF1434BA295EF367F" id="PRECOUNITARIO_F45275FA76EA454FF1434BA295EF367F" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_F45275FA76EA454FF1434BA295EF367F" id="PRECOCOMPRA_F45275FA76EA454FF1434BA295EF367F"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="90,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A4ADC7E0C107D02C054944F7158C8C49" class="" style="cursor: move; height: 85px;" >

                                <td>B-00053</td>
                                <td>Brinco Indiano com detalhes ovais</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="A4ADC7E0C107D02C054944F7158C8C49" id="quantidade_A4ADC7E0C107D02C054944F7158C8C49" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_A4ADC7E0C107D02C054944F7158C8C49" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A4ADC7E0C107D02C054944F7158C8C49" id="PRECOUNITARIO_A4ADC7E0C107D02C054944F7158C8C49" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="30,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A4ADC7E0C107D02C054944F7158C8C49" id="PRECOCOMPRA_A4ADC7E0C107D02C054944F7158C8C49"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="60,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="5B02A1944413122A17728D461F66ADC7" class="" style="cursor: move; height: 85px;" >

                                <td>B-00054</td>
                                <td>Brinco maxi em formato de gotas</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="5B02A1944413122A17728D461F66ADC7" id="quantidade_5B02A1944413122A17728D461F66ADC7" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_5B02A1944413122A17728D461F66ADC7" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_5B02A1944413122A17728D461F66ADC7" id="PRECOUNITARIO_5B02A1944413122A17728D461F66ADC7" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="100,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_5B02A1944413122A17728D461F66ADC7" id="PRECOCOMPRA_5B02A1944413122A17728D461F66ADC7"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="200,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="2CE9FB24567AB9D9DF308DC7D9EAF877" class="" style="cursor: move; height: 85px;" >

                                <td>B-00055</td>
                                <td>Brinco maxi com pedras</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="2CE9FB24567AB9D9DF308DC7D9EAF877" id="quantidade_2CE9FB24567AB9D9DF308DC7D9EAF877" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_2CE9FB24567AB9D9DF308DC7D9EAF877" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_2CE9FB24567AB9D9DF308DC7D9EAF877" id="PRECOUNITARIO_2CE9FB24567AB9D9DF308DC7D9EAF877" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="92,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_2CE9FB24567AB9D9DF308DC7D9EAF877" id="PRECOCOMPRA_2CE9FB24567AB9D9DF308DC7D9EAF877"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="185,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="913DD24C935F9C37D16AFCB2F913FF46" class="" style="cursor: move; height: 85px;" >

                                <td>B-00056</td>
                                <td>Brinco Maxi em Formato de Gotas</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="913DD24C935F9C37D16AFCB2F913FF46" id="quantidade_913DD24C935F9C37D16AFCB2F913FF46" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_913DD24C935F9C37D16AFCB2F913FF46" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_913DD24C935F9C37D16AFCB2F913FF46" id="PRECOUNITARIO_913DD24C935F9C37D16AFCB2F913FF46" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="92,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_913DD24C935F9C37D16AFCB2F913FF46" id="PRECOCOMPRA_913DD24C935F9C37D16AFCB2F913FF46"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="92,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="CB80D6B104B1AD58BF9D946C261D0831" class="" style="cursor: move; height: 85px;" >

                                <td>B-00057</td>
                                <td>Brinco Maxi em Formato de Gotas</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="CB80D6B104B1AD58BF9D946C261D0831" id="quantidade_CB80D6B104B1AD58BF9D946C261D0831" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_CB80D6B104B1AD58BF9D946C261D0831" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_CB80D6B104B1AD58BF9D946C261D0831" id="PRECOUNITARIO_CB80D6B104B1AD58BF9D946C261D0831" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="100,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_CB80D6B104B1AD58BF9D946C261D0831" id="PRECOCOMPRA_CB80D6B104B1AD58BF9D946C261D0831"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="200,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="B63F87255FD9E521E18E0DEC9E3DC948" class="" style="cursor: move; height: 85px;" >

                                <td>B-00060</td>
                                <td>Brinco prata de argola pequeno </td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="B63F87255FD9E521E18E0DEC9E3DC948" id="quantidade_B63F87255FD9E521E18E0DEC9E3DC948" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_B63F87255FD9E521E18E0DEC9E3DC948" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_B63F87255FD9E521E18E0DEC9E3DC948" id="PRECOUNITARIO_B63F87255FD9E521E18E0DEC9E3DC948" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="40,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_B63F87255FD9E521E18E0DEC9E3DC948" id="PRECOCOMPRA_B63F87255FD9E521E18E0DEC9E3DC948"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="80,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8A1C6884169D133322DC5A9F4C3934C0" class="" style="cursor: move; height: 85px;" >

                                <td>B-00061</td>
                                <td>Brinco dourado com pedras redondas verde</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="8A1C6884169D133322DC5A9F4C3934C0" id="quantidade_8A1C6884169D133322DC5A9F4C3934C0" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_8A1C6884169D133322DC5A9F4C3934C0" value="0.160" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_8A1C6884169D133322DC5A9F4C3934C0" id="PRECOUNITARIO_8A1C6884169D133322DC5A9F4C3934C0" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_8A1C6884169D133322DC5A9F4C3934C0" id="PRECOCOMPRA_8A1C6884169D133322DC5A9F4C3934C0"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="CA3FD8761EBC44865136054895221751" class="" style="cursor: move; height: 85px;" >

                                <td>B-00062</td>
                                <td>Brinco dourado com pedras redondas fumê</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="CA3FD8761EBC44865136054895221751" id="quantidade_CA3FD8761EBC44865136054895221751" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_CA3FD8761EBC44865136054895221751" value="0.170" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_CA3FD8761EBC44865136054895221751" id="PRECOUNITARIO_CA3FD8761EBC44865136054895221751" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_CA3FD8761EBC44865136054895221751" id="PRECOCOMPRA_CA3FD8761EBC44865136054895221751"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="708A8455719562959B711430CC55DF7C" class="" style="cursor: move; height: 85px;" >

                                <td>B-00065</td>
                                <td>Brinco dourado com base de zirconias bra</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="708A8455719562959B711430CC55DF7C" id="quantidade_708A8455719562959B711430CC55DF7C" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_708A8455719562959B711430CC55DF7C" value="0.013" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_708A8455719562959B711430CC55DF7C" id="PRECOUNITARIO_708A8455719562959B711430CC55DF7C" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="84,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_708A8455719562959B711430CC55DF7C" id="PRECOCOMPRA_708A8455719562959B711430CC55DF7C"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="169,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0B433BFED83985B9B2DF30D51E8352C1" class="" style="cursor: move; height: 85px;" >

                                <td>B-00066</td>
                                <td>Brinco dourado oval com 9 cristais preto</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="0B433BFED83985B9B2DF30D51E8352C1" id="quantidade_0B433BFED83985B9B2DF30D51E8352C1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="0"/></td>
                                <td><input type="text" class="form-control" name="PESO_0B433BFED83985B9B2DF30D51E8352C1" value="0.230" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_0B433BFED83985B9B2DF30D51E8352C1" id="PRECOUNITARIO_0B433BFED83985B9B2DF30D51E8352C1" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="114,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_0B433BFED83985B9B2DF30D51E8352C1" id="PRECOCOMPRA_0B433BFED83985B9B2DF30D51E8352C1"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="90AFF7D6B7BB2E04B85EE29BC95ADC72" class="" style="cursor: move; height: 85px;" >

                                <td>B-00067</td>
                                <td>Brinco fumê oval com cristais preto e fu</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="90AFF7D6B7BB2E04B85EE29BC95ADC72" id="quantidade_90AFF7D6B7BB2E04B85EE29BC95ADC72" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_90AFF7D6B7BB2E04B85EE29BC95ADC72" value="0.230" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_90AFF7D6B7BB2E04B85EE29BC95ADC72" id="PRECOUNITARIO_90AFF7D6B7BB2E04B85EE29BC95ADC72" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="114,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_90AFF7D6B7BB2E04B85EE29BC95ADC72" id="PRECOCOMPRA_90AFF7D6B7BB2E04B85EE29BC95ADC72"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="114,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="6245A0325D6C0B4F6217339DA8A9FC13" class="" style="cursor: move; height: 85px;" >

                                <td>B-00068</td>
                                <td>Brinco fumê oval com 9 cristais rosa den</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="6245A0325D6C0B4F6217339DA8A9FC13" id="quantidade_6245A0325D6C0B4F6217339DA8A9FC13" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_6245A0325D6C0B4F6217339DA8A9FC13" value="0.220" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_6245A0325D6C0B4F6217339DA8A9FC13" id="PRECOUNITARIO_6245A0325D6C0B4F6217339DA8A9FC13" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="144,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_6245A0325D6C0B4F6217339DA8A9FC13" id="PRECOCOMPRA_6245A0325D6C0B4F6217339DA8A9FC13"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="144,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="26BFF624A65DE603393169FC9DFFC593" class="" style="cursor: move; height: 85px;" >

                                <td>B-00069</td>
                                <td>Brinco dourado com base e pendente oval </td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="26BFF624A65DE603393169FC9DFFC593" id="quantidade_26BFF624A65DE603393169FC9DFFC593" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_26BFF624A65DE603393169FC9DFFC593" value="0.009" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_26BFF624A65DE603393169FC9DFFC593" id="PRECOUNITARIO_26BFF624A65DE603393169FC9DFFC593" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_26BFF624A65DE603393169FC9DFFC593" id="PRECOCOMPRA_26BFF624A65DE603393169FC9DFFC593"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="5D697B1B9C3AD558582D649728766DC5" class="" style="cursor: move; height: 85px;" >

                                <td>B-00071</td>
                                <td>Brinco dourado com pendende de leque</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="5D697B1B9C3AD558582D649728766DC5" id="quantidade_5D697B1B9C3AD558582D649728766DC5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_5D697B1B9C3AD558582D649728766DC5" value="0.015" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_5D697B1B9C3AD558582D649728766DC5" id="PRECOUNITARIO_5D697B1B9C3AD558582D649728766DC5" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="32,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_5D697B1B9C3AD558582D649728766DC5" id="PRECOCOMPRA_5D697B1B9C3AD558582D649728766DC5"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="32,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="706B827DEED376E518227B638E8EFB43" class="" style="cursor: move; height: 85px;" >

                                <td>B-00072</td>
                                <td>Brinco dourado com canutilho grande e pe</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="706B827DEED376E518227B638E8EFB43" id="quantidade_706B827DEED376E518227B638E8EFB43" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_706B827DEED376E518227B638E8EFB43" value="0.013" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_706B827DEED376E518227B638E8EFB43" id="PRECOUNITARIO_706B827DEED376E518227B638E8EFB43" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="34,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_706B827DEED376E518227B638E8EFB43" id="PRECOCOMPRA_706B827DEED376E518227B638E8EFB43"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="34,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7EF5882323DF77B6A5504D02285547E1" class="" style="cursor: move; height: 85px;" >

                                <td>B-00073</td>
                                <td>Brinco dourado com pendende gota e detal</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="7EF5882323DF77B6A5504D02285547E1" id="quantidade_7EF5882323DF77B6A5504D02285547E1" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="-4"/></td>
                                <td><input type="text" class="form-control" name="PESO_7EF5882323DF77B6A5504D02285547E1" value="0.018" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_7EF5882323DF77B6A5504D02285547E1" id="PRECOUNITARIO_7EF5882323DF77B6A5504D02285547E1" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_7EF5882323DF77B6A5504D02285547E1" id="PRECOCOMPRA_7EF5882323DF77B6A5504D02285547E1"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="-.178,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="129F0DB5383317100A46A992BCD63FA9" class="" style="cursor: move; height: 85px;" >

                                <td>B-00074</td>
                                <td>Brinco dourado com cristal losango verde</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="129F0DB5383317100A46A992BCD63FA9" id="quantidade_129F0DB5383317100A46A992BCD63FA9" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_129F0DB5383317100A46A992BCD63FA9" value="0.014" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_129F0DB5383317100A46A992BCD63FA9" id="PRECOUNITARIO_129F0DB5383317100A46A992BCD63FA9" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_129F0DB5383317100A46A992BCD63FA9" id="PRECOCOMPRA_129F0DB5383317100A46A992BCD63FA9"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="9FF3CE8CE43FA57BA3AFF2E0D79F1D32" class="" style="cursor: move; height: 85px;" >

                                <td>B-00075</td>
                                <td>Brinco dourado com cristal losango marro</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="9FF3CE8CE43FA57BA3AFF2E0D79F1D32" id="quantidade_9FF3CE8CE43FA57BA3AFF2E0D79F1D32" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_9FF3CE8CE43FA57BA3AFF2E0D79F1D32" value="0.015" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_9FF3CE8CE43FA57BA3AFF2E0D79F1D32" id="PRECOUNITARIO_9FF3CE8CE43FA57BA3AFF2E0D79F1D32" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_9FF3CE8CE43FA57BA3AFF2E0D79F1D32" id="PRECOCOMPRA_9FF3CE8CE43FA57BA3AFF2E0D79F1D32"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="4C42A626843C9316265EF61433A51A44" class="" style="cursor: move; height: 85px;" >

                                <td>B-00076</td>
                                <td>Brinco dourado com base de zirconias bra</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="4C42A626843C9316265EF61433A51A44" id="quantidade_4C42A626843C9316265EF61433A51A44" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_4C42A626843C9316265EF61433A51A44" value="0.017" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_4C42A626843C9316265EF61433A51A44" id="PRECOUNITARIO_4C42A626843C9316265EF61433A51A44" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="69,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_4C42A626843C9316265EF61433A51A44" id="PRECOCOMPRA_4C42A626843C9316265EF61433A51A44"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="69,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="BF66C472454960C4EC9C789222A4D0B3" class="" style="cursor: move; height: 85px;" >

                                <td>B-00077</td>
                                <td>Brinco dourado com base de zirconias bra</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="BF66C472454960C4EC9C789222A4D0B3" id="quantidade_BF66C472454960C4EC9C789222A4D0B3" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_BF66C472454960C4EC9C789222A4D0B3" value="0.016" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_BF66C472454960C4EC9C789222A4D0B3" id="PRECOUNITARIO_BF66C472454960C4EC9C789222A4D0B3" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="69,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_BF66C472454960C4EC9C789222A4D0B3" id="PRECOCOMPRA_BF66C472454960C4EC9C789222A4D0B3"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="69,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="45B1E3F4E744B73937D179494B195219" class="" style="cursor: move; height: 85px;" >

                                <td>B-00078</td>
                                <td>Brinco dourado com cristal fumê gota bas</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="45B1E3F4E744B73937D179494B195219" id="quantidade_45B1E3F4E744B73937D179494B195219" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_45B1E3F4E744B73937D179494B195219" value="0.025" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_45B1E3F4E744B73937D179494B195219" id="PRECOUNITARIO_45B1E3F4E744B73937D179494B195219" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_45B1E3F4E744B73937D179494B195219" id="PRECOCOMPRA_45B1E3F4E744B73937D179494B195219"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="FB5929CEF5573F4BA94666FA27F5E004" class="" style="cursor: move; height: 85px;" >

                                <td>B-00079</td>
                                <td>Brinco fumê com cristal verde e roxo</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="FB5929CEF5573F4BA94666FA27F5E004" id="quantidade_FB5929CEF5573F4BA94666FA27F5E004" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_FB5929CEF5573F4BA94666FA27F5E004" value="1.000" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_FB5929CEF5573F4BA94666FA27F5E004" id="PRECOUNITARIO_FB5929CEF5573F4BA94666FA27F5E004" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_FB5929CEF5573F4BA94666FA27F5E004" id="PRECOCOMPRA_FB5929CEF5573F4BA94666FA27F5E004"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="801F7BDCCDB4B558FB18163DDF2F0A52" class="" style="cursor: move; height: 85px;" >

                                <td>B-00080</td>
                                <td>Brinco dourado base gota de cristal rosa</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="801F7BDCCDB4B558FB18163DDF2F0A52" id="quantidade_801F7BDCCDB4B558FB18163DDF2F0A52" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_801F7BDCCDB4B558FB18163DDF2F0A52" value="0.019" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_801F7BDCCDB4B558FB18163DDF2F0A52" id="PRECOUNITARIO_801F7BDCCDB4B558FB18163DDF2F0A52" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_801F7BDCCDB4B558FB18163DDF2F0A52" id="PRECOCOMPRA_801F7BDCCDB4B558FB18163DDF2F0A52"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8E87CB23810C08EDD6387566B2D430DD" class="" style="cursor: move; height: 85px;" >

                                <td>B-00081</td>
                                <td>Brinco fumê base gota de cristal leitoso</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="8E87CB23810C08EDD6387566B2D430DD" id="quantidade_8E87CB23810C08EDD6387566B2D430DD" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_8E87CB23810C08EDD6387566B2D430DD" value="0.014" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_8E87CB23810C08EDD6387566B2D430DD" id="PRECOUNITARIO_8E87CB23810C08EDD6387566B2D430DD" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_8E87CB23810C08EDD6387566B2D430DD" id="PRECOCOMPRA_8E87CB23810C08EDD6387566B2D430DD"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="4DD04185F00C33D8E994490C4B5C4B84" class="" style="cursor: move; height: 85px;" >

                                <td>B-00082</td>
                                <td>Brinco fumê com base de cristal oval ver</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="4DD04185F00C33D8E994490C4B5C4B84" id="quantidade_4DD04185F00C33D8E994490C4B5C4B84" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_4DD04185F00C33D8E994490C4B5C4B84" value="0.015" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_4DD04185F00C33D8E994490C4B5C4B84" id="PRECOUNITARIO_4DD04185F00C33D8E994490C4B5C4B84" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="6,45"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_4DD04185F00C33D8E994490C4B5C4B84" id="PRECOCOMPRA_4DD04185F00C33D8E994490C4B5C4B84"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="12,90" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8BD8CADCD2A901EA59C628C4EDD91BD0" class="" style="cursor: move; height: 85px;" >

                                <td>B-00083</td>
                                <td>Brinco fumê com pendente de gotas</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="8BD8CADCD2A901EA59C628C4EDD91BD0" id="quantidade_8BD8CADCD2A901EA59C628C4EDD91BD0" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_8BD8CADCD2A901EA59C628C4EDD91BD0" value="0.015" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_8BD8CADCD2A901EA59C628C4EDD91BD0" id="PRECOUNITARIO_8BD8CADCD2A901EA59C628C4EDD91BD0" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_8BD8CADCD2A901EA59C628C4EDD91BD0" id="PRECOCOMPRA_8BD8CADCD2A901EA59C628C4EDD91BD0"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="99,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="E1B35FE116D95094C29DBE16746E4F0E" class="" style="cursor: move; height: 85px;" >

                                <td>B-00084</td>
                                <td>Brinco dourado com pendente de gotas</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="E1B35FE116D95094C29DBE16746E4F0E" id="quantidade_E1B35FE116D95094C29DBE16746E4F0E" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_E1B35FE116D95094C29DBE16746E4F0E" value="0.017" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_E1B35FE116D95094C29DBE16746E4F0E" id="PRECOUNITARIO_E1B35FE116D95094C29DBE16746E4F0E" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_E1B35FE116D95094C29DBE16746E4F0E" id="PRECOCOMPRA_E1B35FE116D95094C29DBE16746E4F0E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="9D8F7BF16A91344E3463D4E65075F730" class="" style="cursor: move; height: 85px;" >

                                <td>B-00085</td>
                                <td>Brinco fumê base gota e pendente gota gr</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="9D8F7BF16A91344E3463D4E65075F730" id="quantidade_9D8F7BF16A91344E3463D4E65075F730" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_9D8F7BF16A91344E3463D4E65075F730" value="0.018" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_9D8F7BF16A91344E3463D4E65075F730" id="PRECOUNITARIO_9D8F7BF16A91344E3463D4E65075F730" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_9D8F7BF16A91344E3463D4E65075F730" id="PRECOCOMPRA_9D8F7BF16A91344E3463D4E65075F730"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0C004DFE1201C7B4A20B7CC36AACBF66" class="" style="cursor: move; height: 85px;" >

                                <td>B-00086</td>
                                <td>Brinco fumê com cristal rosa gota e pend</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="0C004DFE1201C7B4A20B7CC36AACBF66" id="quantidade_0C004DFE1201C7B4A20B7CC36AACBF66" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_0C004DFE1201C7B4A20B7CC36AACBF66" value="0.015" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_0C004DFE1201C7B4A20B7CC36AACBF66" id="PRECOUNITARIO_0C004DFE1201C7B4A20B7CC36AACBF66" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="104,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_0C004DFE1201C7B4A20B7CC36AACBF66" id="PRECOCOMPRA_0C004DFE1201C7B4A20B7CC36AACBF66"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="104,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="6E6091E24E7DC7F42F191138E3B0F37E" class="" style="cursor: move; height: 85px;" >

                                <td>B-00087</td>
                                <td>Brinco fumê base com cristal losango e p</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="6E6091E24E7DC7F42F191138E3B0F37E" id="quantidade_6E6091E24E7DC7F42F191138E3B0F37E" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_6E6091E24E7DC7F42F191138E3B0F37E" value="0.022" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_6E6091E24E7DC7F42F191138E3B0F37E" id="PRECOUNITARIO_6E6091E24E7DC7F42F191138E3B0F37E" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_6E6091E24E7DC7F42F191138E3B0F37E" id="PRECOCOMPRA_6E6091E24E7DC7F42F191138E3B0F37E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="5175EA7A7AD78075A0173CD42B024E79" class="" style="cursor: move; height: 85px;" >

                                <td>B-00088</td>
                                <td>Brinco fumê base gota e pingente redondo</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="5175EA7A7AD78075A0173CD42B024E79" id="quantidade_5175EA7A7AD78075A0173CD42B024E79" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_5175EA7A7AD78075A0173CD42B024E79" value="0.018" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_5175EA7A7AD78075A0173CD42B024E79" id="PRECOUNITARIO_5175EA7A7AD78075A0173CD42B024E79" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_5175EA7A7AD78075A0173CD42B024E79" id="PRECOCOMPRA_5175EA7A7AD78075A0173CD42B024E79"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="73F9504DC33E98370D0AE17CEA457D5D" class="" style="cursor: move; height: 85px;" >

                                <td>B-00089</td>
                                <td>Brinco fumê com pendende de leque</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="73F9504DC33E98370D0AE17CEA457D5D" id="quantidade_73F9504DC33E98370D0AE17CEA457D5D" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_73F9504DC33E98370D0AE17CEA457D5D" value="0.010" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_73F9504DC33E98370D0AE17CEA457D5D" id="PRECOUNITARIO_73F9504DC33E98370D0AE17CEA457D5D" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="32,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_73F9504DC33E98370D0AE17CEA457D5D" id="PRECOCOMPRA_73F9504DC33E98370D0AE17CEA457D5D"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="32,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="13103C5665F3A234EEB1AE6A9226CCC9" class="" style="cursor: move; height: 85px;" >

                                <td>B-00090</td>
                                <td>Brinco fumê gota com cristal verde </td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="13103C5665F3A234EEB1AE6A9226CCC9" id="quantidade_13103C5665F3A234EEB1AE6A9226CCC9" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_13103C5665F3A234EEB1AE6A9226CCC9" value="0.170" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_13103C5665F3A234EEB1AE6A9226CCC9" id="PRECOUNITARIO_13103C5665F3A234EEB1AE6A9226CCC9" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="29,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_13103C5665F3A234EEB1AE6A9226CCC9" id="PRECOCOMPRA_13103C5665F3A234EEB1AE6A9226CCC9"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="29,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="BD575108F7AF42D41F45B11546BF1C10" class="" style="cursor: move; height: 85px;" >

                                <td>B-00091</td>
                                <td>Brinco fumê com base oval e pendente ova</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="BD575108F7AF42D41F45B11546BF1C10" id="quantidade_BD575108F7AF42D41F45B11546BF1C10" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_BD575108F7AF42D41F45B11546BF1C10" value="0.013" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_BD575108F7AF42D41F45B11546BF1C10" id="PRECOUNITARIO_BD575108F7AF42D41F45B11546BF1C10" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="32,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_BD575108F7AF42D41F45B11546BF1C10" id="PRECOCOMPRA_BD575108F7AF42D41F45B11546BF1C10"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="32,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="E8AE9429CA70234DED292E79E9A806AF" class="" style="cursor: move; height: 85px;" >

                                <td>B-00092</td>
                                <td>Brinco dourado com base oval e pendente </td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="E8AE9429CA70234DED292E79E9A806AF" id="quantidade_E8AE9429CA70234DED292E79E9A806AF" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_E8AE9429CA70234DED292E79E9A806AF" value="0.013" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_E8AE9429CA70234DED292E79E9A806AF" id="PRECOUNITARIO_E8AE9429CA70234DED292E79E9A806AF" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="32,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_E8AE9429CA70234DED292E79E9A806AF" id="PRECOCOMPRA_E8AE9429CA70234DED292E79E9A806AF"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="32,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="49878B31DB6173DFA77AD724A305E150" class="" style="cursor: move; height: 85px;" >

                                <td>B-00093</td>
                                <td>Brinco fumê 3 elos cravejado com zirconi</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="49878B31DB6173DFA77AD724A305E150" id="quantidade_49878B31DB6173DFA77AD724A305E150" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_49878B31DB6173DFA77AD724A305E150" value="0.009" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_49878B31DB6173DFA77AD724A305E150" id="PRECOUNITARIO_49878B31DB6173DFA77AD724A305E150" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,60"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_49878B31DB6173DFA77AD724A305E150" id="PRECOCOMPRA_49878B31DB6173DFA77AD724A305E150"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,60" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="9E3038CD574CC236884DDA3EE36D8526" class="" style="cursor: move; height: 85px;" >

                                <td>B-00094</td>
                                <td>Brinco fumê com pendende de gota com zir</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="9E3038CD574CC236884DDA3EE36D8526" id="quantidade_9E3038CD574CC236884DDA3EE36D8526" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_9E3038CD574CC236884DDA3EE36D8526" value="0.011" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_9E3038CD574CC236884DDA3EE36D8526" id="PRECOUNITARIO_9E3038CD574CC236884DDA3EE36D8526" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_9E3038CD574CC236884DDA3EE36D8526" id="PRECOCOMPRA_9E3038CD574CC236884DDA3EE36D8526"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7C4BB6B90ABDE9AF143C7B5B3510F47F" class="" style="cursor: move; height: 85px;" >

                                <td>B-00097</td>
                                <td>Brinco fumê com base floral e pendende f</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="7C4BB6B90ABDE9AF143C7B5B3510F47F" id="quantidade_7C4BB6B90ABDE9AF143C7B5B3510F47F" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_7C4BB6B90ABDE9AF143C7B5B3510F47F" value="0.014" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_7C4BB6B90ABDE9AF143C7B5B3510F47F" id="PRECOUNITARIO_7C4BB6B90ABDE9AF143C7B5B3510F47F" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="23,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_7C4BB6B90ABDE9AF143C7B5B3510F47F" id="PRECOCOMPRA_7C4BB6B90ABDE9AF143C7B5B3510F47F"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="23,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="701DAC804FA1327863FB36E62778DEB4" class="" style="cursor: move; height: 85px;" >

                                <td>B-00098</td>
                                <td>Brinco fumê com 3 pendentes</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="701DAC804FA1327863FB36E62778DEB4" id="quantidade_701DAC804FA1327863FB36E62778DEB4" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_701DAC804FA1327863FB36E62778DEB4" value="0.010" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_701DAC804FA1327863FB36E62778DEB4" id="PRECOUNITARIO_701DAC804FA1327863FB36E62778DEB4" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="29,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_701DAC804FA1327863FB36E62778DEB4" id="PRECOCOMPRA_701DAC804FA1327863FB36E62778DEB4"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="29,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="1D0E868E370FF2D8B7DAF4BFF93F94BB" class="" style="cursor: move; height: 85px;" >

                                <td>B-00099</td>
                                <td>Brinco fumê com canutilho e pendente V</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="1D0E868E370FF2D8B7DAF4BFF93F94BB" id="quantidade_1D0E868E370FF2D8B7DAF4BFF93F94BB" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_1D0E868E370FF2D8B7DAF4BFF93F94BB" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_1D0E868E370FF2D8B7DAF4BFF93F94BB" id="PRECOUNITARIO_1D0E868E370FF2D8B7DAF4BFF93F94BB" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="32,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_1D0E868E370FF2D8B7DAF4BFF93F94BB" id="PRECOCOMPRA_1D0E868E370FF2D8B7DAF4BFF93F94BB"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="32,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="EA003FFF029AF367F43CEA4764B76741" class="" style="cursor: move; height: 85px;" >

                                <td>B-00101</td>
                                <td>Brinco fumê com base gota e pendente fum</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="EA003FFF029AF367F43CEA4764B76741" id="quantidade_EA003FFF029AF367F43CEA4764B76741" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="0"/></td>
                                <td><input type="text" class="form-control" name="PESO_EA003FFF029AF367F43CEA4764B76741" value="0.023" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_EA003FFF029AF367F43CEA4764B76741" id="PRECOUNITARIO_EA003FFF029AF367F43CEA4764B76741" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_EA003FFF029AF367F43CEA4764B76741" id="PRECOCOMPRA_EA003FFF029AF367F43CEA4764B76741"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8B4166F39A2F38CE43BF51A8E2E3A01E" class="" style="cursor: move; height: 85px;" >

                                <td>B-00103</td>
                                <td>Brinco fumê vazado indiano em formato de</td>
                                <td>Brinco</td>
                                <td><input type="text" class="form-control" name="8B4166F39A2F38CE43BF51A8E2E3A01E" id="quantidade_8B4166F39A2F38CE43BF51A8E2E3A01E" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_8B4166F39A2F38CE43BF51A8E2E3A01E" value="0.080" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_8B4166F39A2F38CE43BF51A8E2E3A01E" id="PRECOUNITARIO_8B4166F39A2F38CE43BF51A8E2E3A01E" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="30,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_8B4166F39A2F38CE43BF51A8E2E3A01E" id="PRECOCOMPRA_8B4166F39A2F38CE43BF51A8E2E3A01E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="30,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="C8558317DBB0D64C6FBE1996516EA516" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00001</td>
                                <td>Bracelete dourado com perola grande</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="C8558317DBB0D64C6FBE1996516EA516" id="quantidade_C8558317DBB0D64C6FBE1996516EA516" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_C8558317DBB0D64C6FBE1996516EA516" value="0.025" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_C8558317DBB0D64C6FBE1996516EA516" id="PRECOUNITARIO_C8558317DBB0D64C6FBE1996516EA516" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="6,45"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_C8558317DBB0D64C6FBE1996516EA516" id="PRECOCOMPRA_C8558317DBB0D64C6FBE1996516EA516"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="12,90" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="19790CB08FCECAD0C7A2CA4C9B3AC2D0" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00002</td>
                                <td>Bracelete italiano rose</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="19790CB08FCECAD0C7A2CA4C9B3AC2D0" id="quantidade_19790CB08FCECAD0C7A2CA4C9B3AC2D0" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_19790CB08FCECAD0C7A2CA4C9B3AC2D0" value="0.005" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_19790CB08FCECAD0C7A2CA4C9B3AC2D0" id="PRECOUNITARIO_19790CB08FCECAD0C7A2CA4C9B3AC2D0" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_19790CB08FCECAD0C7A2CA4C9B3AC2D0" id="PRECOCOMPRA_19790CB08FCECAD0C7A2CA4C9B3AC2D0"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="79,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="1BB3512482CF5E25E38682F73B60AB8E" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00003</td>
                                <td>Bracelete italiano fumê</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="1BB3512482CF5E25E38682F73B60AB8E" id="quantidade_1BB3512482CF5E25E38682F73B60AB8E" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_1BB3512482CF5E25E38682F73B60AB8E" value="0.006" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_1BB3512482CF5E25E38682F73B60AB8E" id="PRECOUNITARIO_1BB3512482CF5E25E38682F73B60AB8E" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_1BB3512482CF5E25E38682F73B60AB8E" id="PRECOCOMPRA_1BB3512482CF5E25E38682F73B60AB8E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="79,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="CCCB2B315D3BCA5D4A09C22DD3D47EDF" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00004</td>
                                <td>Bracelete italiano dourado com trevo com</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="CCCB2B315D3BCA5D4A09C22DD3D47EDF" id="quantidade_CCCB2B315D3BCA5D4A09C22DD3D47EDF" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_CCCB2B315D3BCA5D4A09C22DD3D47EDF" value="0.007" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_CCCB2B315D3BCA5D4A09C22DD3D47EDF" id="PRECOUNITARIO_CCCB2B315D3BCA5D4A09C22DD3D47EDF" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="75,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_CCCB2B315D3BCA5D4A09C22DD3D47EDF" id="PRECOCOMPRA_CCCB2B315D3BCA5D4A09C22DD3D47EDF"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="151,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="2AD154F1C938DAE5753837716B94E6E4" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00005</td>
                                <td>Bracelete italiano rose com trevo com zi</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="2AD154F1C938DAE5753837716B94E6E4" id="quantidade_2AD154F1C938DAE5753837716B94E6E4" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_2AD154F1C938DAE5753837716B94E6E4" value="0.006" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_2AD154F1C938DAE5753837716B94E6E4" id="PRECOUNITARIO_2AD154F1C938DAE5753837716B94E6E4" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_2AD154F1C938DAE5753837716B94E6E4" id="PRECOCOMPRA_2AD154F1C938DAE5753837716B94E6E4"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="149,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="707BE54DA73AB0C5DBB2E598B656ECC2" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00007</td>
                                <td>Bracelete italiano dourado com quadrado </td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="707BE54DA73AB0C5DBB2E598B656ECC2" id="quantidade_707BE54DA73AB0C5DBB2E598B656ECC2" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_707BE54DA73AB0C5DBB2E598B656ECC2" value="0.008" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_707BE54DA73AB0C5DBB2E598B656ECC2" id="PRECOUNITARIO_707BE54DA73AB0C5DBB2E598B656ECC2" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_707BE54DA73AB0C5DBB2E598B656ECC2" id="PRECOCOMPRA_707BE54DA73AB0C5DBB2E598B656ECC2"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="149,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="6A9FC796188CBCC6EB7DF00266559E1D" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00008</td>
                                <td>Bracelete italiano rose com circulo prat</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="6A9FC796188CBCC6EB7DF00266559E1D" id="quantidade_6A9FC796188CBCC6EB7DF00266559E1D" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_6A9FC796188CBCC6EB7DF00266559E1D" value="0.005" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_6A9FC796188CBCC6EB7DF00266559E1D" id="PRECOUNITARIO_6A9FC796188CBCC6EB7DF00266559E1D" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="85,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_6A9FC796188CBCC6EB7DF00266559E1D" id="PRECOCOMPRA_6A9FC796188CBCC6EB7DF00266559E1D"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="171,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="4235E5CD285F472153CC18B7E52004D5" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00009</td>
                                <td>Bracelete italiano fumê com circulo prat</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="4235E5CD285F472153CC18B7E52004D5" id="quantidade_4235E5CD285F472153CC18B7E52004D5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_4235E5CD285F472153CC18B7E52004D5" value="0.006" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_4235E5CD285F472153CC18B7E52004D5" id="PRECOUNITARIO_4235E5CD285F472153CC18B7E52004D5" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="35,90"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_4235E5CD285F472153CC18B7E52004D5" id="PRECOCOMPRA_4235E5CD285F472153CC18B7E52004D5"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="71,80" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="F770B156742B3F02A46F40EF0DA11DE9" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00010</td>
                                <td>Bracelete italiano de fio prata com deta</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="F770B156742B3F02A46F40EF0DA11DE9" id="quantidade_F770B156742B3F02A46F40EF0DA11DE9" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_F770B156742B3F02A46F40EF0DA11DE9" value="0.006" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_F770B156742B3F02A46F40EF0DA11DE9" id="PRECOUNITARIO_F770B156742B3F02A46F40EF0DA11DE9" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="22,60"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_F770B156742B3F02A46F40EF0DA11DE9" id="PRECOCOMPRA_F770B156742B3F02A46F40EF0DA11DE9"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,20" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="061BF38E3F8F8B919A7D7FCDF479C0CF" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00011</td>
                                <td>Bracelete italiano preto com fivela prat</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="061BF38E3F8F8B919A7D7FCDF479C0CF" id="quantidade_061BF38E3F8F8B919A7D7FCDF479C0CF" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_061BF38E3F8F8B919A7D7FCDF479C0CF" value="0.011" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_061BF38E3F8F8B919A7D7FCDF479C0CF" id="PRECOUNITARIO_061BF38E3F8F8B919A7D7FCDF479C0CF" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,90"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_061BF38E3F8F8B919A7D7FCDF479C0CF" id="PRECOCOMPRA_061BF38E3F8F8B919A7D7FCDF479C0CF"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="85,80" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="673A649A0A3F5AA0EF735DE9B88A1EAE" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00012</td>
                                <td>Bracelete italiano prata com fivela prat</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="673A649A0A3F5AA0EF735DE9B88A1EAE" id="quantidade_673A649A0A3F5AA0EF735DE9B88A1EAE" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_673A649A0A3F5AA0EF735DE9B88A1EAE" value="0.011" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_673A649A0A3F5AA0EF735DE9B88A1EAE" id="PRECOUNITARIO_673A649A0A3F5AA0EF735DE9B88A1EAE" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,90"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_673A649A0A3F5AA0EF735DE9B88A1EAE" id="PRECOCOMPRA_673A649A0A3F5AA0EF735DE9B88A1EAE"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="85,80" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="6F49BB0F298A4A2C6BC6761B1621B0E0" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00013</td>
                                <td>Bracelete dourado com pedra branca</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="6F49BB0F298A4A2C6BC6761B1621B0E0" id="quantidade_6F49BB0F298A4A2C6BC6761B1621B0E0" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_6F49BB0F298A4A2C6BC6761B1621B0E0" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_6F49BB0F298A4A2C6BC6761B1621B0E0" id="PRECOUNITARIO_6F49BB0F298A4A2C6BC6761B1621B0E0" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_6F49BB0F298A4A2C6BC6761B1621B0E0" id="PRECOCOMPRA_6F49BB0F298A4A2C6BC6761B1621B0E0"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="119,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A452CB49FC152FEAFC1DECAAB33C8363" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00013</td>
                                <td>Bracelete italiano rose com fivela prata</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="A452CB49FC152FEAFC1DECAAB33C8363" id="quantidade_A452CB49FC152FEAFC1DECAAB33C8363" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_A452CB49FC152FEAFC1DECAAB33C8363" value="0.011" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A452CB49FC152FEAFC1DECAAB33C8363" id="PRECOUNITARIO_A452CB49FC152FEAFC1DECAAB33C8363" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,75"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A452CB49FC152FEAFC1DECAAB33C8363" id="PRECOCOMPRA_A452CB49FC152FEAFC1DECAAB33C8363"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="85,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="F38A5954676EB395FD1F072A2F97A3BB" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00014</td>
                                <td>Bracelete italiano prata com detalhe de </td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="F38A5954676EB395FD1F072A2F97A3BB" id="quantidade_F38A5954676EB395FD1F072A2F97A3BB" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_F38A5954676EB395FD1F072A2F97A3BB" value="0.005" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_F38A5954676EB395FD1F072A2F97A3BB" id="PRECOUNITARIO_F38A5954676EB395FD1F072A2F97A3BB" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_F38A5954676EB395FD1F072A2F97A3BB" id="PRECOCOMPRA_F38A5954676EB395FD1F072A2F97A3BB"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="149,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8EF22E27DC2770D7B2D1C21EB98A4ECF" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00015</td>
                                <td>Bracelete italiano preto com detalhe de </td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="8EF22E27DC2770D7B2D1C21EB98A4ECF" id="quantidade_8EF22E27DC2770D7B2D1C21EB98A4ECF" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_8EF22E27DC2770D7B2D1C21EB98A4ECF" value="0.005" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_8EF22E27DC2770D7B2D1C21EB98A4ECF" id="PRECOUNITARIO_8EF22E27DC2770D7B2D1C21EB98A4ECF" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="2,72"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_8EF22E27DC2770D7B2D1C21EB98A4ECF" id="PRECOCOMPRA_8EF22E27DC2770D7B2D1C21EB98A4ECF"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="5,44" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="1C469A23C618FD5EAB271850F2447ED5" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00016</td>
                                <td>Bracelete italiano preto com detalhe tri</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="1C469A23C618FD5EAB271850F2447ED5" id="quantidade_1C469A23C618FD5EAB271850F2447ED5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_1C469A23C618FD5EAB271850F2447ED5" value="0.015" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_1C469A23C618FD5EAB271850F2447ED5" id="PRECOUNITARIO_1C469A23C618FD5EAB271850F2447ED5" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="41,90"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_1C469A23C618FD5EAB271850F2447ED5" id="PRECOCOMPRA_1C469A23C618FD5EAB271850F2447ED5"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="83,80" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A1D7757CB22A37DC9FC231673F218A8B" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00017</td>
                                <td>Bracelete italiano dourado envelhecido c</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="A1D7757CB22A37DC9FC231673F218A8B" id="quantidade_A1D7757CB22A37DC9FC231673F218A8B" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_A1D7757CB22A37DC9FC231673F218A8B" value="0.009" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A1D7757CB22A37DC9FC231673F218A8B" id="PRECOUNITARIO_A1D7757CB22A37DC9FC231673F218A8B" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="25,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A1D7757CB22A37DC9FC231673F218A8B" id="PRECOCOMPRA_A1D7757CB22A37DC9FC231673F218A8B"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="50,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="25F335217708F033F69DDE4C597FAAC2" class="" style="cursor: move; height: 85px;" >

                                <td>BR-00018</td>
                                <td>Bracelete italiano de fio preto com deta</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="25F335217708F033F69DDE4C597FAAC2" id="quantidade_25F335217708F033F69DDE4C597FAAC2" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_25F335217708F033F69DDE4C597FAAC2" value="0.008" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_25F335217708F033F69DDE4C597FAAC2" id="PRECOUNITARIO_25F335217708F033F69DDE4C597FAAC2" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,90"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_25F335217708F033F69DDE4C597FAAC2" id="PRECOCOMPRA_25F335217708F033F69DDE4C597FAAC2"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="79,80" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="2C02446159A964E5789F0AA2E01B8074" class="" style="cursor: move; height: 85px;" >

                                <td>C-00001</td>
                                <td>Colar dourado com pingente de cruz</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="2C02446159A964E5789F0AA2E01B8074" id="quantidade_2C02446159A964E5789F0AA2E01B8074" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_2C02446159A964E5789F0AA2E01B8074" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_2C02446159A964E5789F0AA2E01B8074" id="PRECOUNITARIO_2C02446159A964E5789F0AA2E01B8074" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_2C02446159A964E5789F0AA2E01B8074" id="PRECOCOMPRA_2C02446159A964E5789F0AA2E01B8074"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="56,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="B50BD32FDFAC30B57E230D07EADA2819" class="" style="cursor: move; height: 85px;" >

                                <td>C-00002</td>
                                <td>Colar dourado três elos</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="B50BD32FDFAC30B57E230D07EADA2819" id="quantidade_B50BD32FDFAC30B57E230D07EADA2819" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_B50BD32FDFAC30B57E230D07EADA2819" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_B50BD32FDFAC30B57E230D07EADA2819" id="PRECOUNITARIO_B50BD32FDFAC30B57E230D07EADA2819" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="34,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_B50BD32FDFAC30B57E230D07EADA2819" id="PRECOCOMPRA_B50BD32FDFAC30B57E230D07EADA2819"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="34,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="5DEB7E00B695762704D58F9C6E9C6D18" class="" style="cursor: move; height: 85px;" >

                                <td>C-00003</td>
                                <td>Colar dourado com pingente de bola</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="5DEB7E00B695762704D58F9C6E9C6D18" id="quantidade_5DEB7E00B695762704D58F9C6E9C6D18" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="0"/></td>
                                <td><input type="text" class="form-control" name="PESO_5DEB7E00B695762704D58F9C6E9C6D18" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_5DEB7E00B695762704D58F9C6E9C6D18" id="PRECOUNITARIO_5DEB7E00B695762704D58F9C6E9C6D18" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="79,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_5DEB7E00B695762704D58F9C6E9C6D18" id="PRECOCOMPRA_5DEB7E00B695762704D58F9C6E9C6D18"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="1BC779E8BA951EF72E463BCAEEFB5E3C" class="" style="cursor: move; height: 85px;" >

                                <td>C-00004</td>
                                <td>Colar dourado cruz fixa lisa</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="1BC779E8BA951EF72E463BCAEEFB5E3C" id="quantidade_1BC779E8BA951EF72E463BCAEEFB5E3C" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_1BC779E8BA951EF72E463BCAEEFB5E3C" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_1BC779E8BA951EF72E463BCAEEFB5E3C" id="PRECOUNITARIO_1BC779E8BA951EF72E463BCAEEFB5E3C" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="2,80"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_1BC779E8BA951EF72E463BCAEEFB5E3C" id="PRECOCOMPRA_1BC779E8BA951EF72E463BCAEEFB5E3C"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="5,60" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="F39D9E72286AD2F6258AB29C218599CF" class="" style="cursor: move; height: 85px;" >

                                <td>C-00005</td>
                                <td>Colar dourado cruz cravejada de zircônia</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="F39D9E72286AD2F6258AB29C218599CF" id="quantidade_F39D9E72286AD2F6258AB29C218599CF" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="0"/></td>
                                <td><input type="text" class="form-control" name="PESO_F39D9E72286AD2F6258AB29C218599CF" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_F39D9E72286AD2F6258AB29C218599CF" id="PRECOUNITARIO_F39D9E72286AD2F6258AB29C218599CF" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="3,95"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_F39D9E72286AD2F6258AB29C218599CF" id="PRECOCOMPRA_F39D9E72286AD2F6258AB29C218599CF"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="3955A4B8D9BBCACF6FED71D3FCDD63F4" class="" style="cursor: move; height: 85px;" >

                                <td>C-00006</td>
                                <td>Colar com pingente de cruz </td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="3955A4B8D9BBCACF6FED71D3FCDD63F4" id="quantidade_3955A4B8D9BBCACF6FED71D3FCDD63F4" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_3955A4B8D9BBCACF6FED71D3FCDD63F4" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_3955A4B8D9BBCACF6FED71D3FCDD63F4" id="PRECOUNITARIO_3955A4B8D9BBCACF6FED71D3FCDD63F4" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="34,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_3955A4B8D9BBCACF6FED71D3FCDD63F4" id="PRECOCOMPRA_3955A4B8D9BBCACF6FED71D3FCDD63F4"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="69,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="B86B6A000DA3F5B5560F58D063F27E33" class="" style="cursor: move; height: 85px;" >

                                <td>C-00007</td>
                                <td>Colar dourado de terço com cruz</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="B86B6A000DA3F5B5560F58D063F27E33" id="quantidade_B86B6A000DA3F5B5560F58D063F27E33" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_B86B6A000DA3F5B5560F58D063F27E33" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_B86B6A000DA3F5B5560F58D063F27E33" id="PRECOUNITARIO_B86B6A000DA3F5B5560F58D063F27E33" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="27,25"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_B86B6A000DA3F5B5560F58D063F27E33" id="PRECOCOMPRA_B86B6A000DA3F5B5560F58D063F27E33"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="27,25" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="E5B586989DEE9A9AB2D93583FC1F1E9D" class="" style="cursor: move; height: 85px;" >

                                <td>C-00008</td>
                                <td>Colar dourado de terço bolinha</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="E5B586989DEE9A9AB2D93583FC1F1E9D" id="quantidade_E5B586989DEE9A9AB2D93583FC1F1E9D" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_E5B586989DEE9A9AB2D93583FC1F1E9D" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_E5B586989DEE9A9AB2D93583FC1F1E9D" id="PRECOUNITARIO_E5B586989DEE9A9AB2D93583FC1F1E9D" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="29,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_E5B586989DEE9A9AB2D93583FC1F1E9D" id="PRECOCOMPRA_E5B586989DEE9A9AB2D93583FC1F1E9D"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="58,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="55589A0344287978AB3CD9F0F97CC389" class="" style="cursor: move; height: 85px;" >

                                <td>C-00009</td>
                                <td>Colar dourado com pingente de Ave Maria </td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="55589A0344287978AB3CD9F0F97CC389" id="quantidade_55589A0344287978AB3CD9F0F97CC389" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_55589A0344287978AB3CD9F0F97CC389" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_55589A0344287978AB3CD9F0F97CC389" id="PRECOUNITARIO_55589A0344287978AB3CD9F0F97CC389" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_55589A0344287978AB3CD9F0F97CC389" id="PRECOCOMPRA_55589A0344287978AB3CD9F0F97CC389"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="128,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="B96CB276890E26AD8165E45F0CCFEDF4" class="" style="cursor: move; height: 85px;" >

                                <td>C-00010</td>
                                <td>Colar dourado com pingente vazado</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="B96CB276890E26AD8165E45F0CCFEDF4" id="quantidade_B96CB276890E26AD8165E45F0CCFEDF4" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_B96CB276890E26AD8165E45F0CCFEDF4" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_B96CB276890E26AD8165E45F0CCFEDF4" id="PRECOUNITARIO_B96CB276890E26AD8165E45F0CCFEDF4" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_B96CB276890E26AD8165E45F0CCFEDF4" id="PRECOCOMPRA_B96CB276890E26AD8165E45F0CCFEDF4"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A4EE4DCB4703667F89FEE59D3F3A935E" class="" style="cursor: move; height: 85px;" >

                                <td>C-00011</td>
                                <td>Colar dourado com pingente Pai Nosso</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="A4EE4DCB4703667F89FEE59D3F3A935E" id="quantidade_A4EE4DCB4703667F89FEE59D3F3A935E" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_A4EE4DCB4703667F89FEE59D3F3A935E" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A4EE4DCB4703667F89FEE59D3F3A935E" id="PRECOUNITARIO_A4EE4DCB4703667F89FEE59D3F3A935E" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A4EE4DCB4703667F89FEE59D3F3A935E" id="PRECOCOMPRA_A4EE4DCB4703667F89FEE59D3F3A935E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="41474EB20A385B9099B7BBFA3D0BFF5B" class="" style="cursor: move; height: 85px;" >

                                <td>C-00012</td>
                                <td>Colar dourado com pingente de menino </td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="41474EB20A385B9099B7BBFA3D0BFF5B" id="quantidade_41474EB20A385B9099B7BBFA3D0BFF5B" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_41474EB20A385B9099B7BBFA3D0BFF5B" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_41474EB20A385B9099B7BBFA3D0BFF5B" id="PRECOUNITARIO_41474EB20A385B9099B7BBFA3D0BFF5B" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_41474EB20A385B9099B7BBFA3D0BFF5B" id="PRECOCOMPRA_41474EB20A385B9099B7BBFA3D0BFF5B"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="D2F90216F5CD4D9533C24C5E6257DCED" class="" style="cursor: move; height: 85px;" >

                                <td>C-00013</td>
                                <td>Pingente dourado de menina</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="D2F90216F5CD4D9533C24C5E6257DCED" id="quantidade_D2F90216F5CD4D9533C24C5E6257DCED" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_D2F90216F5CD4D9533C24C5E6257DCED" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_D2F90216F5CD4D9533C24C5E6257DCED" id="PRECOUNITARIO_D2F90216F5CD4D9533C24C5E6257DCED" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="20,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_D2F90216F5CD4D9533C24C5E6257DCED" id="PRECOCOMPRA_D2F90216F5CD4D9533C24C5E6257DCED"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="40,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="714B74DAF8846850C7C02FF02DD68987" class="" style="cursor: move; height: 85px;" >

                                <td>C-00014</td>
                                <td>Colar dourado com pingente de menino </td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="714B74DAF8846850C7C02FF02DD68987" id="quantidade_714B74DAF8846850C7C02FF02DD68987" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_714B74DAF8846850C7C02FF02DD68987" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_714B74DAF8846850C7C02FF02DD68987" id="PRECOUNITARIO_714B74DAF8846850C7C02FF02DD68987" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_714B74DAF8846850C7C02FF02DD68987" id="PRECOCOMPRA_714B74DAF8846850C7C02FF02DD68987"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="38,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8A19B55EE70AAC04F6B62B6D12ACE983" class="" style="cursor: move; height: 85px;" >

                                <td>C-00015</td>
                                <td>Colar com pingente de menina grande</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="8A19B55EE70AAC04F6B62B6D12ACE983" id="quantidade_8A19B55EE70AAC04F6B62B6D12ACE983" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_8A19B55EE70AAC04F6B62B6D12ACE983" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_8A19B55EE70AAC04F6B62B6D12ACE983" id="PRECOUNITARIO_8A19B55EE70AAC04F6B62B6D12ACE983" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_8A19B55EE70AAC04F6B62B6D12ACE983" id="PRECOCOMPRA_8A19B55EE70AAC04F6B62B6D12ACE983"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="38,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7B76D8C42FAA4A0860042AF5D588126E" class="" style="cursor: move; height: 85px;" >

                                <td>C-00019</td>
                                <td>Colar dourado pingente coração</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="7B76D8C42FAA4A0860042AF5D588126E" id="quantidade_7B76D8C42FAA4A0860042AF5D588126E" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_7B76D8C42FAA4A0860042AF5D588126E" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_7B76D8C42FAA4A0860042AF5D588126E" id="PRECOUNITARIO_7B76D8C42FAA4A0860042AF5D588126E" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="15,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_7B76D8C42FAA4A0860042AF5D588126E" id="PRECOCOMPRA_7B76D8C42FAA4A0860042AF5D588126E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="30,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="6AA3D866DE825CD5866FC3F38C8A278A" class="" style="cursor: move; height: 85px;" >

                                <td>C-00020</td>
                                <td>Colar dourado com pingente de flor</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="6AA3D866DE825CD5866FC3F38C8A278A" id="quantidade_6AA3D866DE825CD5866FC3F38C8A278A" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_6AA3D866DE825CD5866FC3F38C8A278A" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_6AA3D866DE825CD5866FC3F38C8A278A" id="PRECOUNITARIO_6AA3D866DE825CD5866FC3F38C8A278A" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_6AA3D866DE825CD5866FC3F38C8A278A" id="PRECOCOMPRA_6AA3D866DE825CD5866FC3F38C8A278A"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="119,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="D89154365C94C0F4EC9E5E786AF5D646" class="" style="cursor: move; height: 85px;" >

                                <td>C-00021</td>
                                <td>Colar dourado com pingente de flor</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="D89154365C94C0F4EC9E5E786AF5D646" id="quantidade_D89154365C94C0F4EC9E5E786AF5D646" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_D89154365C94C0F4EC9E5E786AF5D646" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_D89154365C94C0F4EC9E5E786AF5D646" id="PRECOUNITARIO_D89154365C94C0F4EC9E5E786AF5D646" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_D89154365C94C0F4EC9E5E786AF5D646" id="PRECOCOMPRA_D89154365C94C0F4EC9E5E786AF5D646"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="179,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A278D7A8D046A0EE6D3C11C06A901704" class="" style="cursor: move; height: 85px;" >

                                <td>C-00022</td>
                                <td>Colar dourado com pingente círculos</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="A278D7A8D046A0EE6D3C11C06A901704" id="quantidade_A278D7A8D046A0EE6D3C11C06A901704" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_A278D7A8D046A0EE6D3C11C06A901704" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A278D7A8D046A0EE6D3C11C06A901704" id="PRECOUNITARIO_A278D7A8D046A0EE6D3C11C06A901704" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A278D7A8D046A0EE6D3C11C06A901704" id="PRECOCOMPRA_A278D7A8D046A0EE6D3C11C06A901704"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="F7121CD9917A3D5DBAB910C5BA9B39B9" class="" style="cursor: move; height: 85px;" >

                                <td>C-00023</td>
                                <td>Colar dourado de madre pérola e zircônia</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="F7121CD9917A3D5DBAB910C5BA9B39B9" id="quantidade_F7121CD9917A3D5DBAB910C5BA9B39B9" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_F7121CD9917A3D5DBAB910C5BA9B39B9" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_F7121CD9917A3D5DBAB910C5BA9B39B9" id="PRECOUNITARIO_F7121CD9917A3D5DBAB910C5BA9B39B9" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="4,90"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_F7121CD9917A3D5DBAB910C5BA9B39B9" id="PRECOCOMPRA_F7121CD9917A3D5DBAB910C5BA9B39B9"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="4,90" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="EDC1ABC04CF06FDD134B776DDA80A0EE" class="" style="cursor: move; height: 85px;" >

                                <td>C-00024</td>
                                <td>Colar fumê com pingente de cruz</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="EDC1ABC04CF06FDD134B776DDA80A0EE" id="quantidade_EDC1ABC04CF06FDD134B776DDA80A0EE" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_EDC1ABC04CF06FDD134B776DDA80A0EE" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_EDC1ABC04CF06FDD134B776DDA80A0EE" id="PRECOUNITARIO_EDC1ABC04CF06FDD134B776DDA80A0EE" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_EDC1ABC04CF06FDD134B776DDA80A0EE" id="PRECOCOMPRA_EDC1ABC04CF06FDD134B776DDA80A0EE"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0C69AA51DAB686F9A790DAB1FCEB7E00" class="" style="cursor: move; height: 85px;" >

                                <td>C-00025</td>
                                <td>Colar com pingente de Nossa Senh</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="0C69AA51DAB686F9A790DAB1FCEB7E00" id="quantidade_0C69AA51DAB686F9A790DAB1FCEB7E00" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_0C69AA51DAB686F9A790DAB1FCEB7E00" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_0C69AA51DAB686F9A790DAB1FCEB7E00" id="PRECOUNITARIO_0C69AA51DAB686F9A790DAB1FCEB7E00" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="17,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_0C69AA51DAB686F9A790DAB1FCEB7E00" id="PRECOCOMPRA_0C69AA51DAB686F9A790DAB1FCEB7E00"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="34,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="B36754E9F87A430BCF22CC8865015982" class="" style="cursor: move; height: 85px;" >

                                <td>C-00026</td>
                                <td>Colar dourado com pingente de Nossa Sen</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="B36754E9F87A430BCF22CC8865015982" id="quantidade_B36754E9F87A430BCF22CC8865015982" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_B36754E9F87A430BCF22CC8865015982" value="0.400" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_B36754E9F87A430BCF22CC8865015982" id="PRECOUNITARIO_B36754E9F87A430BCF22CC8865015982" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_B36754E9F87A430BCF22CC8865015982" id="PRECOCOMPRA_B36754E9F87A430BCF22CC8865015982"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="129,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="401041022F2CC4ED7B4B4836DF708813" class="" style="cursor: move; height: 85px;" >

                                <td>C-00027</td>
                                <td>Colar com pingente de Nossa Senhora</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="401041022F2CC4ED7B4B4836DF708813" id="quantidade_401041022F2CC4ED7B4B4836DF708813" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_401041022F2CC4ED7B4B4836DF708813" value="0.400" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_401041022F2CC4ED7B4B4836DF708813" id="PRECOUNITARIO_401041022F2CC4ED7B4B4836DF708813" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_401041022F2CC4ED7B4B4836DF708813" id="PRECOCOMPRA_401041022F2CC4ED7B4B4836DF708813"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="149,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="B380E3BBA825D5248491AD07A4159116" class="" style="cursor: move; height: 85px;" >

                                <td>C-00028</td>
                                <td>Colar com pingente oval Nossa Senhora</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="B380E3BBA825D5248491AD07A4159116" id="quantidade_B380E3BBA825D5248491AD07A4159116" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_B380E3BBA825D5248491AD07A4159116" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_B380E3BBA825D5248491AD07A4159116" id="PRECOUNITARIO_B380E3BBA825D5248491AD07A4159116" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_B380E3BBA825D5248491AD07A4159116" id="PRECOCOMPRA_B380E3BBA825D5248491AD07A4159116"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="56,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="44CD798F260D0A91A0FE5231CBD0CF76" class="" style="cursor: move; height: 85px;" >

                                <td>C-00029</td>
                                <td>Colar de couro com canutilhos dourados</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="44CD798F260D0A91A0FE5231CBD0CF76" id="quantidade_44CD798F260D0A91A0FE5231CBD0CF76" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_44CD798F260D0A91A0FE5231CBD0CF76" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_44CD798F260D0A91A0FE5231CBD0CF76" id="PRECOUNITARIO_44CD798F260D0A91A0FE5231CBD0CF76" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_44CD798F260D0A91A0FE5231CBD0CF76" id="PRECOCOMPRA_44CD798F260D0A91A0FE5231CBD0CF76"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="4D61BC1BBEA441F0865C5318810BE6DD" class="" style="cursor: move; height: 85px;" >

                                <td>C-00030</td>
                                <td>Colar de bolinhas verdes e folhas </td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="4D61BC1BBEA441F0865C5318810BE6DD" id="quantidade_4D61BC1BBEA441F0865C5318810BE6DD" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_4D61BC1BBEA441F0865C5318810BE6DD" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_4D61BC1BBEA441F0865C5318810BE6DD" id="PRECOUNITARIO_4D61BC1BBEA441F0865C5318810BE6DD" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="2,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_4D61BC1BBEA441F0865C5318810BE6DD" id="PRECOCOMPRA_4D61BC1BBEA441F0865C5318810BE6DD"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="5,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="AD8E0272C342251DAF675D5AB2053C48" class="" style="cursor: move; height: 85px;" >

                                <td>C-00031</td>
                                <td>Colar de bolinhas pretas e penas </td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="AD8E0272C342251DAF675D5AB2053C48" id="quantidade_AD8E0272C342251DAF675D5AB2053C48" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_AD8E0272C342251DAF675D5AB2053C48" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_AD8E0272C342251DAF675D5AB2053C48" id="PRECOUNITARIO_AD8E0272C342251DAF675D5AB2053C48" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_AD8E0272C342251DAF675D5AB2053C48" id="PRECOCOMPRA_AD8E0272C342251DAF675D5AB2053C48"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="547A935F0291E7E440947647564C1F3C" class="" style="cursor: move; height: 85px;" >

                                <td>C-00032</td>
                                <td>Colar de Couro com detalhe triangular</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="547A935F0291E7E440947647564C1F3C" id="quantidade_547A935F0291E7E440947647564C1F3C" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_547A935F0291E7E440947647564C1F3C" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_547A935F0291E7E440947647564C1F3C" id="PRECOUNITARIO_547A935F0291E7E440947647564C1F3C" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="22,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_547A935F0291E7E440947647564C1F3C" id="PRECOCOMPRA_547A935F0291E7E440947647564C1F3C"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="45,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="455B178F5FEFB599D57A4AC4451940E7" class="" style="cursor: move; height: 85px;" >

                                <td>C-00033</td>
                                <td>Colar dourado de gotas coloridas</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="455B178F5FEFB599D57A4AC4451940E7" id="quantidade_455B178F5FEFB599D57A4AC4451940E7" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_455B178F5FEFB599D57A4AC4451940E7" value="0.400" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_455B178F5FEFB599D57A4AC4451940E7" id="PRECOUNITARIO_455B178F5FEFB599D57A4AC4451940E7" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="65,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_455B178F5FEFB599D57A4AC4451940E7" id="PRECOCOMPRA_455B178F5FEFB599D57A4AC4451940E7"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="130,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0421B54370FAF824DDA9F55B895FC0DE" class="" style="cursor: move; height: 85px;" >

                                <td>C-00034</td>
                                <td>Colar dourado de madre perola com franja</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="0421B54370FAF824DDA9F55B895FC0DE" id="quantidade_0421B54370FAF824DDA9F55B895FC0DE" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_0421B54370FAF824DDA9F55B895FC0DE" value="0.008" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_0421B54370FAF824DDA9F55B895FC0DE" id="PRECOUNITARIO_0421B54370FAF824DDA9F55B895FC0DE" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_0421B54370FAF824DDA9F55B895FC0DE" id="PRECOCOMPRA_0421B54370FAF824DDA9F55B895FC0DE"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="129,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="881122C4BD4247A8996070582D4ED4A6" class="" style="cursor: move; height: 85px;" >

                                <td>C-00034</td>
                                <td>Colar dourado de madre perola com franja</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="881122C4BD4247A8996070582D4ED4A6" id="quantidade_881122C4BD4247A8996070582D4ED4A6" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_881122C4BD4247A8996070582D4ED4A6" value="0.010" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_881122C4BD4247A8996070582D4ED4A6" id="PRECOUNITARIO_881122C4BD4247A8996070582D4ED4A6" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="64,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_881122C4BD4247A8996070582D4ED4A6" id="PRECOCOMPRA_881122C4BD4247A8996070582D4ED4A6"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="129,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="DB712BDF6A6A01CA59804F7C56C2FFEF" class="" style="cursor: move; height: 85px;" >

                                <td>C-00035</td>
                                <td>Colar dourado com pingente em gota e zir</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="DB712BDF6A6A01CA59804F7C56C2FFEF" id="quantidade_DB712BDF6A6A01CA59804F7C56C2FFEF" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_DB712BDF6A6A01CA59804F7C56C2FFEF" value="0.008" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_DB712BDF6A6A01CA59804F7C56C2FFEF" id="PRECOUNITARIO_DB712BDF6A6A01CA59804F7C56C2FFEF" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_DB712BDF6A6A01CA59804F7C56C2FFEF" id="PRECOCOMPRA_DB712BDF6A6A01CA59804F7C56C2FFEF"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="46DF10CC31087EA676409FEF67E321DD" class="" style="cursor: move; height: 85px;" >

                                <td>C-00036</td>
                                <td>Colar fumê com pingente de franjas </td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="46DF10CC31087EA676409FEF67E321DD" id="quantidade_46DF10CC31087EA676409FEF67E321DD" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_46DF10CC31087EA676409FEF67E321DD" value="0.010" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_46DF10CC31087EA676409FEF67E321DD" id="PRECOUNITARIO_46DF10CC31087EA676409FEF67E321DD" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_46DF10CC31087EA676409FEF67E321DD" id="PRECOCOMPRA_46DF10CC31087EA676409FEF67E321DD"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="119,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="123991C75C45FCA63976F22B35228DD3" class="" style="cursor: move; height: 85px;" >

                                <td>C-00037</td>
                                <td>Colar fumê com pingente de coração e zir</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="123991C75C45FCA63976F22B35228DD3" id="quantidade_123991C75C45FCA63976F22B35228DD3" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_123991C75C45FCA63976F22B35228DD3" value="0.008" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_123991C75C45FCA63976F22B35228DD3" id="PRECOUNITARIO_123991C75C45FCA63976F22B35228DD3" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_123991C75C45FCA63976F22B35228DD3" id="PRECOCOMPRA_123991C75C45FCA63976F22B35228DD3"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="99,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="125FAFD290AEEA3DCE0B4C3A6A194B39" class="" style="cursor: move; height: 85px;" >

                                <td>C-00038</td>
                                <td>Colar fumê com pinguente de trevo com zi</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="125FAFD290AEEA3DCE0B4C3A6A194B39" id="quantidade_125FAFD290AEEA3DCE0B4C3A6A194B39" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_125FAFD290AEEA3DCE0B4C3A6A194B39" value="0.010" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_125FAFD290AEEA3DCE0B4C3A6A194B39" id="PRECOUNITARIO_125FAFD290AEEA3DCE0B4C3A6A194B39" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_125FAFD290AEEA3DCE0B4C3A6A194B39" id="PRECOCOMPRA_125FAFD290AEEA3DCE0B4C3A6A194B39"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="99,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="5FDCE81A0073A1ED20A65B7B31C8E7C7" class="" style="cursor: move; height: 85px;" >

                                <td>C-00039</td>
                                <td>Colar dourado de madre perola</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="5FDCE81A0073A1ED20A65B7B31C8E7C7" id="quantidade_5FDCE81A0073A1ED20A65B7B31C8E7C7" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_5FDCE81A0073A1ED20A65B7B31C8E7C7" value="0.006" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_5FDCE81A0073A1ED20A65B7B31C8E7C7" id="PRECOUNITARIO_5FDCE81A0073A1ED20A65B7B31C8E7C7" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="4,90"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_5FDCE81A0073A1ED20A65B7B31C8E7C7" id="PRECOCOMPRA_5FDCE81A0073A1ED20A65B7B31C8E7C7"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="9,80" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="94240A6CA1ABC743F73E03202574F5FD" class="" style="cursor: move; height: 85px;" >

                                <td>C-00040</td>
                                <td>Colar fumê de correntes</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="94240A6CA1ABC743F73E03202574F5FD" id="quantidade_94240A6CA1ABC743F73E03202574F5FD" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_94240A6CA1ABC743F73E03202574F5FD" value="0.008" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_94240A6CA1ABC743F73E03202574F5FD" id="PRECOUNITARIO_94240A6CA1ABC743F73E03202574F5FD" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="44,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_94240A6CA1ABC743F73E03202574F5FD" id="PRECOCOMPRA_94240A6CA1ABC743F73E03202574F5FD"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="337451492E614F47C66CCB868C6337D2" class="" style="cursor: move; height: 85px;" >

                                <td>C-00041</td>
                                <td>Colar fumê com pinguente em forma de got</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="337451492E614F47C66CCB868C6337D2" id="quantidade_337451492E614F47C66CCB868C6337D2" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_337451492E614F47C66CCB868C6337D2" value="0.010" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_337451492E614F47C66CCB868C6337D2" id="PRECOUNITARIO_337451492E614F47C66CCB868C6337D2" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="29,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_337451492E614F47C66CCB868C6337D2" id="PRECOCOMPRA_337451492E614F47C66CCB868C6337D2"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="3BEBAAEEFD1180CE84B2C38D5C2CC2F9" class="" style="cursor: move; height: 85px;" >

                                <td>C-00042</td>
                                <td>Colar dourado com pingente em gota </td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="3BEBAAEEFD1180CE84B2C38D5C2CC2F9" id="quantidade_3BEBAAEEFD1180CE84B2C38D5C2CC2F9" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_3BEBAAEEFD1180CE84B2C38D5C2CC2F9" value="0.008" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_3BEBAAEEFD1180CE84B2C38D5C2CC2F9" id="PRECOUNITARIO_3BEBAAEEFD1180CE84B2C38D5C2CC2F9" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="84,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_3BEBAAEEFD1180CE84B2C38D5C2CC2F9" id="PRECOCOMPRA_3BEBAAEEFD1180CE84B2C38D5C2CC2F9"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="169,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="6448842E7F3D102D86DB20E042900D6E" class="" style="cursor: move; height: 85px;" >

                                <td>C-00043</td>
                                <td>Colar fumê com pinguente redondo de cora</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="6448842E7F3D102D86DB20E042900D6E" id="quantidade_6448842E7F3D102D86DB20E042900D6E" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_6448842E7F3D102D86DB20E042900D6E" value="0.010" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_6448842E7F3D102D86DB20E042900D6E" id="PRECOUNITARIO_6448842E7F3D102D86DB20E042900D6E" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="84,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_6448842E7F3D102D86DB20E042900D6E" id="PRECOCOMPRA_6448842E7F3D102D86DB20E042900D6E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="169,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7E2C83D2CCF9C18AB96C680F0A5269AD" class="" style="cursor: move; height: 85px;" >

                                <td>C-00044</td>
                                <td>Colar dourado com pingente de madre pero</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="7E2C83D2CCF9C18AB96C680F0A5269AD" id="quantidade_7E2C83D2CCF9C18AB96C680F0A5269AD" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_7E2C83D2CCF9C18AB96C680F0A5269AD" value="0.008" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_7E2C83D2CCF9C18AB96C680F0A5269AD" id="PRECOUNITARIO_7E2C83D2CCF9C18AB96C680F0A5269AD" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="79,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_7E2C83D2CCF9C18AB96C680F0A5269AD" id="PRECOCOMPRA_7E2C83D2CCF9C18AB96C680F0A5269AD"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="159,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="E249B48F0DF91519F8AB361A315111B8" class="" style="cursor: move; height: 85px;" >

                                <td>C-00045</td>
                                <td>Colar dourado com pingente em gota crave</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="E249B48F0DF91519F8AB361A315111B8" id="quantidade_E249B48F0DF91519F8AB361A315111B8" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_E249B48F0DF91519F8AB361A315111B8" value="0.008" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_E249B48F0DF91519F8AB361A315111B8" id="PRECOUNITARIO_E249B48F0DF91519F8AB361A315111B8" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_E249B48F0DF91519F8AB361A315111B8" id="PRECOCOMPRA_E249B48F0DF91519F8AB361A315111B8"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="99,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7DE912E18125F029EC9B843971707730" class="" style="cursor: move; height: 85px;" >

                                <td>C-00046</td>
                                <td>Colar dourado com tambor cravejado de zi</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="7DE912E18125F029EC9B843971707730" id="quantidade_7DE912E18125F029EC9B843971707730" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_7DE912E18125F029EC9B843971707730" value="0.014" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_7DE912E18125F029EC9B843971707730" id="PRECOUNITARIO_7DE912E18125F029EC9B843971707730" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="65,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_7DE912E18125F029EC9B843971707730" id="PRECOCOMPRA_7DE912E18125F029EC9B843971707730"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="131,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="89CB0B02A94E9F26628B32292EF763FF" class="" style="cursor: move; height: 85px;" >

                                <td>C-00047</td>
                                <td>Colar dourado com gota dupla </td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="89CB0B02A94E9F26628B32292EF763FF" id="quantidade_89CB0B02A94E9F26628B32292EF763FF" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_89CB0B02A94E9F26628B32292EF763FF" value="0.008" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_89CB0B02A94E9F26628B32292EF763FF" id="PRECOUNITARIO_89CB0B02A94E9F26628B32292EF763FF" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="27,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_89CB0B02A94E9F26628B32292EF763FF" id="PRECOCOMPRA_89CB0B02A94E9F26628B32292EF763FF"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="900844562AD929FFCEBC42759C980347" class="" style="cursor: move; height: 85px;" >

                                <td>C-00048</td>
                                <td>Colar fumê com pingente de coração crave</td>
                                <td>Colares</td>
                                <td><input type="text" class="form-control" name="900844562AD929FFCEBC42759C980347" id="quantidade_900844562AD929FFCEBC42759C980347" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_900844562AD929FFCEBC42759C980347" value="0.010" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_900844562AD929FFCEBC42759C980347" id="PRECOUNITARIO_900844562AD929FFCEBC42759C980347" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_900844562AD929FFCEBC42759C980347" id="PRECOCOMPRA_900844562AD929FFCEBC42759C980347"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="99,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="78EF1120895BCA2C5CD67F0C8DA84CC0" class="" style="cursor: move; height: 85px;" >

                                <td>CJ-0001</td>
                                <td>Conjunto dourado chanel cordao/brinco co</td>
                                <td>Conjuntos</td>
                                <td><input type="text" class="form-control" name="78EF1120895BCA2C5CD67F0C8DA84CC0" id="quantidade_78EF1120895BCA2C5CD67F0C8DA84CC0" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_78EF1120895BCA2C5CD67F0C8DA84CC0" value="0.400" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_78EF1120895BCA2C5CD67F0C8DA84CC0" id="PRECOUNITARIO_78EF1120895BCA2C5CD67F0C8DA84CC0" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="80,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_78EF1120895BCA2C5CD67F0C8DA84CC0" id="PRECOCOMPRA_78EF1120895BCA2C5CD67F0C8DA84CC0"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="80,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="BB5777A1F717D799098143F5D928BF1A" class="" style="cursor: move; height: 85px;" >

                                <td>CJ-0002</td>
                                <td>Conjunto dourado cordão brinco de pérola</td>
                                <td>Conjuntos</td>
                                <td><input type="text" class="form-control" name="BB5777A1F717D799098143F5D928BF1A" id="quantidade_BB5777A1F717D799098143F5D928BF1A" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_BB5777A1F717D799098143F5D928BF1A" value="0.120" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_BB5777A1F717D799098143F5D928BF1A" id="PRECOUNITARIO_BB5777A1F717D799098143F5D928BF1A" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="55,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_BB5777A1F717D799098143F5D928BF1A" id="PRECOCOMPRA_BB5777A1F717D799098143F5D928BF1A"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="55,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7ECF4847663A06F7579EFE931C378F13" class="" style="cursor: move; height: 85px;" >

                                <td>P-00001</td>
                                <td>Pulseira de couro com várias voltas.</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="7ECF4847663A06F7579EFE931C378F13" id="quantidade_7ECF4847663A06F7579EFE931C378F13" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_7ECF4847663A06F7579EFE931C378F13" value="0.500" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_7ECF4847663A06F7579EFE931C378F13" id="PRECOUNITARIO_7ECF4847663A06F7579EFE931C378F13" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="72,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_7ECF4847663A06F7579EFE931C378F13" id="PRECOCOMPRA_7ECF4847663A06F7579EFE931C378F13"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="144,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="1589F878718549D26A649210B3A08F68" class="" style="cursor: move; height: 85px;" >

                                <td>P-00002</td>
                                <td>Pulseira dourada rabo de rato</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="1589F878718549D26A649210B3A08F68" id="quantidade_1589F878718549D26A649210B3A08F68" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_1589F878718549D26A649210B3A08F68" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_1589F878718549D26A649210B3A08F68" id="PRECOUNITARIO_1589F878718549D26A649210B3A08F68" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="11,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_1589F878718549D26A649210B3A08F68" id="PRECOCOMPRA_1589F878718549D26A649210B3A08F68"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="22,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="AFABCC4C4A1ED44B024A5E239703DBCC" class="" style="cursor: move; height: 85px;" >

                                <td>P-00003</td>
                                <td>Pulseira Rosé Rabo de Rato</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="AFABCC4C4A1ED44B024A5E239703DBCC" id="quantidade_AFABCC4C4A1ED44B024A5E239703DBCC" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_AFABCC4C4A1ED44B024A5E239703DBCC" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_AFABCC4C4A1ED44B024A5E239703DBCC" id="PRECOUNITARIO_AFABCC4C4A1ED44B024A5E239703DBCC" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="11,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_AFABCC4C4A1ED44B024A5E239703DBCC" id="PRECOCOMPRA_AFABCC4C4A1ED44B024A5E239703DBCC"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="22,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="8870317A8799944F22DC0019328D9C6F" class="" style="cursor: move; height: 85px;" >

                                <td>P-00004</td>
                                <td>Pulseira rabo de rato trama grossa</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="8870317A8799944F22DC0019328D9C6F" id="quantidade_8870317A8799944F22DC0019328D9C6F" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_8870317A8799944F22DC0019328D9C6F" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_8870317A8799944F22DC0019328D9C6F" id="PRECOUNITARIO_8870317A8799944F22DC0019328D9C6F" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="21,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_8870317A8799944F22DC0019328D9C6F" id="PRECOCOMPRA_8870317A8799944F22DC0019328D9C6F"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="42,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7BDC0388F8A960789A2813EFA47F4028" class="" style="cursor: move; height: 85px;" >

                                <td>P-00005</td>
                                <td>Pulseira com detalhe em acrílico redondo</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="7BDC0388F8A960789A2813EFA47F4028" id="quantidade_7BDC0388F8A960789A2813EFA47F4028" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_7BDC0388F8A960789A2813EFA47F4028" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_7BDC0388F8A960789A2813EFA47F4028" id="PRECOUNITARIO_7BDC0388F8A960789A2813EFA47F4028" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="26,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_7BDC0388F8A960789A2813EFA47F4028" id="PRECOCOMPRA_7BDC0388F8A960789A2813EFA47F4028"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="52,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="CCC8C5AB98CE4FDC941B6CC2CDE54DE8" class="" style="cursor: move; height: 85px;" >

                                <td>P-00006</td>
                                <td>Pulseira dourada com detalhe em acrílico</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="CCC8C5AB98CE4FDC941B6CC2CDE54DE8" id="quantidade_CCC8C5AB98CE4FDC941B6CC2CDE54DE8" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_CCC8C5AB98CE4FDC941B6CC2CDE54DE8" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_CCC8C5AB98CE4FDC941B6CC2CDE54DE8" id="PRECOUNITARIO_CCC8C5AB98CE4FDC941B6CC2CDE54DE8" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_CCC8C5AB98CE4FDC941B6CC2CDE54DE8" id="PRECOCOMPRA_CCC8C5AB98CE4FDC941B6CC2CDE54DE8"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="56,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="B7003F21066FD0EA97EEBE5EAA64CCD7" class="" style="cursor: move; height: 85px;" >

                                <td>P-00007</td>
                                <td>Pulseira dourada torcida</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="B7003F21066FD0EA97EEBE5EAA64CCD7" id="quantidade_B7003F21066FD0EA97EEBE5EAA64CCD7" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_B7003F21066FD0EA97EEBE5EAA64CCD7" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_B7003F21066FD0EA97EEBE5EAA64CCD7" id="PRECOUNITARIO_B7003F21066FD0EA97EEBE5EAA64CCD7" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="11,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_B7003F21066FD0EA97EEBE5EAA64CCD7" id="PRECOCOMPRA_B7003F21066FD0EA97EEBE5EAA64CCD7"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="22,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="69AC0261D47D1A5283082EACA9302EA2" class="" style="cursor: move; height: 85px;" >

                                <td>P-00008</td>
                                <td>Pulseira de couro com laço</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="69AC0261D47D1A5283082EACA9302EA2" id="quantidade_69AC0261D47D1A5283082EACA9302EA2" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_69AC0261D47D1A5283082EACA9302EA2" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_69AC0261D47D1A5283082EACA9302EA2" id="PRECOUNITARIO_69AC0261D47D1A5283082EACA9302EA2" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="23,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_69AC0261D47D1A5283082EACA9302EA2" id="PRECOCOMPRA_69AC0261D47D1A5283082EACA9302EA2"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="46,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="41E1AEDABA20BD7D46EC24CAAC22E285" class="" style="cursor: move; height: 85px;" >

                                <td>P-00009</td>
                                <td>Pulseira dourada com detalhe de trevo</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="41E1AEDABA20BD7D46EC24CAAC22E285" id="quantidade_41E1AEDABA20BD7D46EC24CAAC22E285" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_41E1AEDABA20BD7D46EC24CAAC22E285" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_41E1AEDABA20BD7D46EC24CAAC22E285" id="PRECOUNITARIO_41E1AEDABA20BD7D46EC24CAAC22E285" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_41E1AEDABA20BD7D46EC24CAAC22E285" id="PRECOCOMPRA_41E1AEDABA20BD7D46EC24CAAC22E285"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="48,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="04C126F8F5B48396839D4F5C5F47D1F6" class="" style="cursor: move; height: 85px;" >

                                <td>P-00010</td>
                                <td>Pulseira de couro com Nossa Senhora </td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="04C126F8F5B48396839D4F5C5F47D1F6" id="quantidade_04C126F8F5B48396839D4F5C5F47D1F6" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_04C126F8F5B48396839D4F5C5F47D1F6" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_04C126F8F5B48396839D4F5C5F47D1F6" id="PRECOUNITARIO_04C126F8F5B48396839D4F5C5F47D1F6" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="31,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_04C126F8F5B48396839D4F5C5F47D1F6" id="PRECOCOMPRA_04C126F8F5B48396839D4F5C5F47D1F6"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="62,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="4EACF8823C360AA26261985F58BFD1DD" class="" style="cursor: move; height: 85px;" >

                                <td>P-00011</td>
                                <td>Pulseira de Couro com detalhes</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="4EACF8823C360AA26261985F58BFD1DD" id="quantidade_4EACF8823C360AA26261985F58BFD1DD" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_4EACF8823C360AA26261985F58BFD1DD" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_4EACF8823C360AA26261985F58BFD1DD" id="PRECOUNITARIO_4EACF8823C360AA26261985F58BFD1DD" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="14,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_4EACF8823C360AA26261985F58BFD1DD" id="PRECOCOMPRA_4EACF8823C360AA26261985F58BFD1DD"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="9E9DDC073C69F67808213D7AEC41EA49" class="" style="cursor: move; height: 85px;" >

                                <td>P-00012</td>
                                <td>Pulseira dourada rabo de rato com trevo</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="9E9DDC073C69F67808213D7AEC41EA49" id="quantidade_9E9DDC073C69F67808213D7AEC41EA49" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_9E9DDC073C69F67808213D7AEC41EA49" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_9E9DDC073C69F67808213D7AEC41EA49" id="PRECOUNITARIO_9E9DDC073C69F67808213D7AEC41EA49" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_9E9DDC073C69F67808213D7AEC41EA49" id="PRECOCOMPRA_9E9DDC073C69F67808213D7AEC41EA49"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="49C830F39209B1E6430A3BE8AD334091" class="" style="cursor: move; height: 85px;" >

                                <td>P-00018</td>
                                <td>Pulseira dourada de elos</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="49C830F39209B1E6430A3BE8AD334091" id="quantidade_49C830F39209B1E6430A3BE8AD334091" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="3"/></td>
                                <td><input type="text" class="form-control" name="PESO_49C830F39209B1E6430A3BE8AD334091" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_49C830F39209B1E6430A3BE8AD334091" id="PRECOUNITARIO_49C830F39209B1E6430A3BE8AD334091" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="56,60"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_49C830F39209B1E6430A3BE8AD334091" id="PRECOCOMPRA_49C830F39209B1E6430A3BE8AD334091"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="169,80" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="466EF24108AA105E63BC12F4EA97ABBE" class="" style="cursor: move; height: 85px;" >

                                <td>P-00019</td>
                                <td>Pulseira prateada de elos </td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="466EF24108AA105E63BC12F4EA97ABBE" id="quantidade_466EF24108AA105E63BC12F4EA97ABBE" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_466EF24108AA105E63BC12F4EA97ABBE" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_466EF24108AA105E63BC12F4EA97ABBE" id="PRECOUNITARIO_466EF24108AA105E63BC12F4EA97ABBE" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,60"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_466EF24108AA105E63BC12F4EA97ABBE" id="PRECOCOMPRA_466EF24108AA105E63BC12F4EA97ABBE"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="109,20" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="BDA625B0F47B7A2C731092A77A6EBD16" class="" style="cursor: move; height: 85px;" >

                                <td>P-00020</td>
                                <td>Pulseira rosé de elos</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="BDA625B0F47B7A2C731092A77A6EBD16" id="quantidade_BDA625B0F47B7A2C731092A77A6EBD16" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_BDA625B0F47B7A2C731092A77A6EBD16" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_BDA625B0F47B7A2C731092A77A6EBD16" id="PRECOUNITARIO_BDA625B0F47B7A2C731092A77A6EBD16" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,60"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_BDA625B0F47B7A2C731092A77A6EBD16" id="PRECOCOMPRA_BDA625B0F47B7A2C731092A77A6EBD16"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="109,20" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7B557DE68EBE0D34882B5E16065366D9" class="" style="cursor: move; height: 85px;" >

                                <td>P-00021</td>
                                <td>Pulseira de Couro com canutilhos</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="7B557DE68EBE0D34882B5E16065366D9" id="quantidade_7B557DE68EBE0D34882B5E16065366D9" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_7B557DE68EBE0D34882B5E16065366D9" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_7B557DE68EBE0D34882B5E16065366D9" id="PRECOUNITARIO_7B557DE68EBE0D34882B5E16065366D9" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,60"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_7B557DE68EBE0D34882B5E16065366D9" id="PRECOCOMPRA_7B557DE68EBE0D34882B5E16065366D9"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="54,60" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="AABE0BC6D89BB2239529C8FC66071BC7" class="" style="cursor: move; height: 85px;" >

                                <td>P-00022</td>
                                <td>Pulseira dourada com cristais dentro</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="AABE0BC6D89BB2239529C8FC66071BC7" id="quantidade_AABE0BC6D89BB2239529C8FC66071BC7" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_AABE0BC6D89BB2239529C8FC66071BC7" value="0.007" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_AABE0BC6D89BB2239529C8FC66071BC7" id="PRECOUNITARIO_AABE0BC6D89BB2239529C8FC66071BC7" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_AABE0BC6D89BB2239529C8FC66071BC7" id="PRECOCOMPRA_AABE0BC6D89BB2239529C8FC66071BC7"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="71B58AB1A03294F86B42062677835651" class="" style="cursor: move; height: 85px;" >

                                <td>P-00023</td>
                                <td>Pulseira de Couro com três argolas</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="71B58AB1A03294F86B42062677835651" id="quantidade_71B58AB1A03294F86B42062677835651" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_71B58AB1A03294F86B42062677835651" value="0.300" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_71B58AB1A03294F86B42062677835651" id="PRECOUNITARIO_71B58AB1A03294F86B42062677835651" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="15,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_71B58AB1A03294F86B42062677835651" id="PRECOCOMPRA_71B58AB1A03294F86B42062677835651"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="15,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0ECE47D6ABAF730B99685FE5432F0A40" class="" style="cursor: move; height: 85px;" >

                                <td>P-00024</td>
                                <td>Pulseira prata com cristais dentro</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="0ECE47D6ABAF730B99685FE5432F0A40" id="quantidade_0ECE47D6ABAF730B99685FE5432F0A40" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_0ECE47D6ABAF730B99685FE5432F0A40" value="0.007" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_0ECE47D6ABAF730B99685FE5432F0A40" id="PRECOUNITARIO_0ECE47D6ABAF730B99685FE5432F0A40" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_0ECE47D6ABAF730B99685FE5432F0A40" id="PRECOCOMPRA_0ECE47D6ABAF730B99685FE5432F0A40"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="32CCC1D44FF86629B48B0F7E1F45C6A5" class="" style="cursor: move; height: 85px;" >

                                <td>P-00025</td>
                                <td>Pulseira dourada de bolinhas</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="32CCC1D44FF86629B48B0F7E1F45C6A5" id="quantidade_32CCC1D44FF86629B48B0F7E1F45C6A5" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_32CCC1D44FF86629B48B0F7E1F45C6A5" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_32CCC1D44FF86629B48B0F7E1F45C6A5" id="PRECOUNITARIO_32CCC1D44FF86629B48B0F7E1F45C6A5" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_32CCC1D44FF86629B48B0F7E1F45C6A5" id="PRECOCOMPRA_32CCC1D44FF86629B48B0F7E1F45C6A5"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="38,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="DC5D2F3854ACC3E9050C387A65DC3D2A" class="" style="cursor: move; height: 85px;" >

                                <td>P-00026</td>
                                <td>Pulseira dourado escovada com elos Ovais</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="DC5D2F3854ACC3E9050C387A65DC3D2A" id="quantidade_DC5D2F3854ACC3E9050C387A65DC3D2A" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_DC5D2F3854ACC3E9050C387A65DC3D2A" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_DC5D2F3854ACC3E9050C387A65DC3D2A" id="PRECOUNITARIO_DC5D2F3854ACC3E9050C387A65DC3D2A" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="60,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_DC5D2F3854ACC3E9050C387A65DC3D2A" id="PRECOCOMPRA_DC5D2F3854ACC3E9050C387A65DC3D2A"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="60,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="EE0F145835ED08251A42AC44916C324F" class="" style="cursor: move; height: 85px;" >

                                <td>P-00027</td>
                                <td>Puseira fumê com elos quadrados</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="EE0F145835ED08251A42AC44916C324F" id="quantidade_EE0F145835ED08251A42AC44916C324F" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_EE0F145835ED08251A42AC44916C324F" value="0.005" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_EE0F145835ED08251A42AC44916C324F" id="PRECOUNITARIO_EE0F145835ED08251A42AC44916C324F" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_EE0F145835ED08251A42AC44916C324F" id="PRECOCOMPRA_EE0F145835ED08251A42AC44916C324F"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="EEE6280EE41E35BE1FA919497AB73CD8" class="" style="cursor: move; height: 85px;" >

                                <td>P-00028</td>
                                <td>Pulseira dourada com folhas cravejadas d</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="EEE6280EE41E35BE1FA919497AB73CD8" id="quantidade_EEE6280EE41E35BE1FA919497AB73CD8" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_EEE6280EE41E35BE1FA919497AB73CD8" value="0.016" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_EEE6280EE41E35BE1FA919497AB73CD8" id="PRECOUNITARIO_EEE6280EE41E35BE1FA919497AB73CD8" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="84,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_EEE6280EE41E35BE1FA919497AB73CD8" id="PRECOCOMPRA_EEE6280EE41E35BE1FA919497AB73CD8"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="169,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A485CD9CFE390CB17A500A921F0C9448" class="" style="cursor: move; height: 85px;" >

                                <td>P-00029</td>
                                <td>Pulseira fumê com folhas cravejadas de z</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="A485CD9CFE390CB17A500A921F0C9448" id="quantidade_A485CD9CFE390CB17A500A921F0C9448" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_A485CD9CFE390CB17A500A921F0C9448" value="0.014" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A485CD9CFE390CB17A500A921F0C9448" id="PRECOUNITARIO_A485CD9CFE390CB17A500A921F0C9448" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="84,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A485CD9CFE390CB17A500A921F0C9448" id="PRECOCOMPRA_A485CD9CFE390CB17A500A921F0C9448"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="169,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="D56C572EE74FF7707F544342521828F9" class="" style="cursor: move; height: 85px;" >

                                <td>P-00030</td>
                                <td>Pulseira 3 elos redondos prata, dourado </td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="D56C572EE74FF7707F544342521828F9" id="quantidade_D56C572EE74FF7707F544342521828F9" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_D56C572EE74FF7707F544342521828F9" value="0.016" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_D56C572EE74FF7707F544342521828F9" id="PRECOUNITARIO_D56C572EE74FF7707F544342521828F9" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="49,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_D56C572EE74FF7707F544342521828F9" id="PRECOCOMPRA_D56C572EE74FF7707F544342521828F9"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="99,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A2627BD95CBBEFAA2E3EE2AD70BF8AEF" class="" style="cursor: move; height: 85px;" >

                                <td>P-00031</td>
                                <td>Pulseira dourada corrente media</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="A2627BD95CBBEFAA2E3EE2AD70BF8AEF" id="quantidade_A2627BD95CBBEFAA2E3EE2AD70BF8AEF" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_A2627BD95CBBEFAA2E3EE2AD70BF8AEF" value="0.017" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A2627BD95CBBEFAA2E3EE2AD70BF8AEF" id="PRECOUNITARIO_A2627BD95CBBEFAA2E3EE2AD70BF8AEF" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="99,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A2627BD95CBBEFAA2E3EE2AD70BF8AEF" id="PRECOCOMPRA_A2627BD95CBBEFAA2E3EE2AD70BF8AEF"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="199,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="9C8C6AD628E1065904500DA9C65BDF2E" class="" style="cursor: move; height: 85px;" >

                                <td>P-00032</td>
                                <td>Pulseira dourada rabo de rato larga</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="9C8C6AD628E1065904500DA9C65BDF2E" id="quantidade_9C8C6AD628E1065904500DA9C65BDF2E" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_9C8C6AD628E1065904500DA9C65BDF2E" value="0.008" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_9C8C6AD628E1065904500DA9C65BDF2E" id="PRECOUNITARIO_9C8C6AD628E1065904500DA9C65BDF2E" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_9C8C6AD628E1065904500DA9C65BDF2E" id="PRECOCOMPRA_9C8C6AD628E1065904500DA9C65BDF2E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="56,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A6B00F213DB1DE6FDA574965DCD3525B" class="" style="cursor: move; height: 85px;" >

                                <td>P-00033</td>
                                <td>Pulseira fumê rabo de rato larga</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="A6B00F213DB1DE6FDA574965DCD3525B" id="quantidade_A6B00F213DB1DE6FDA574965DCD3525B" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_A6B00F213DB1DE6FDA574965DCD3525B" value="0.008" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A6B00F213DB1DE6FDA574965DCD3525B" id="PRECOUNITARIO_A6B00F213DB1DE6FDA574965DCD3525B" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="28,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A6B00F213DB1DE6FDA574965DCD3525B" id="PRECOCOMPRA_A6B00F213DB1DE6FDA574965DCD3525B"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="56,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="B4E4F3A551C475B99DA423B829FC3478" class="" style="cursor: move; height: 85px;" >

                                <td>P-00034</td>
                                <td>Pulseira dourada com franja fina</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="B4E4F3A551C475B99DA423B829FC3478" id="quantidade_B4E4F3A551C475B99DA423B829FC3478" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_B4E4F3A551C475B99DA423B829FC3478" value="0.015" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_B4E4F3A551C475B99DA423B829FC3478" id="PRECOUNITARIO_B4E4F3A551C475B99DA423B829FC3478" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_B4E4F3A551C475B99DA423B829FC3478" id="PRECOCOMPRA_B4E4F3A551C475B99DA423B829FC3478"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,50" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="DF6FDA22DF15D1EDDC3A961CAE9D24DF" class="" style="cursor: move; height: 85px;" >

                                <td>P-00035</td>
                                <td>Pulseira prata com franja fina</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="DF6FDA22DF15D1EDDC3A961CAE9D24DF" id="quantidade_DF6FDA22DF15D1EDDC3A961CAE9D24DF" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_DF6FDA22DF15D1EDDC3A961CAE9D24DF" value="0.013" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_DF6FDA22DF15D1EDDC3A961CAE9D24DF" id="PRECOUNITARIO_DF6FDA22DF15D1EDDC3A961CAE9D24DF" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_DF6FDA22DF15D1EDDC3A961CAE9D24DF" id="PRECOCOMPRA_DF6FDA22DF15D1EDDC3A961CAE9D24DF"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="119,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0BF574FEC621A7A710CF75CE72F88084" class="" style="cursor: move; height: 85px;" >

                                <td>P-00037</td>
                                <td>Pulseira fumê com franja fina</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="0BF574FEC621A7A710CF75CE72F88084" id="quantidade_0BF574FEC621A7A710CF75CE72F88084" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_0BF574FEC621A7A710CF75CE72F88084" value="0.016" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_0BF574FEC621A7A710CF75CE72F88084" id="PRECOUNITARIO_0BF574FEC621A7A710CF75CE72F88084" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_0BF574FEC621A7A710CF75CE72F88084" id="PRECOCOMPRA_0BF574FEC621A7A710CF75CE72F88084"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="119,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="29DD44C0AFA8BFA041BF1D2C4B4F4C9A" class="" style="cursor: move; height: 85px;" >

                                <td>P-00038</td>
                                <td>Pulseira dourada com franja grossa</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="29DD44C0AFA8BFA041BF1D2C4B4F4C9A" id="quantidade_29DD44C0AFA8BFA041BF1D2C4B4F4C9A" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_29DD44C0AFA8BFA041BF1D2C4B4F4C9A" value="0.040" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_29DD44C0AFA8BFA041BF1D2C4B4F4C9A" id="PRECOUNITARIO_29DD44C0AFA8BFA041BF1D2C4B4F4C9A" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="124,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_29DD44C0AFA8BFA041BF1D2C4B4F4C9A" id="PRECOCOMPRA_29DD44C0AFA8BFA041BF1D2C4B4F4C9A"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="249,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="1F22B476C7ABA54EFF8791C51199A41B" class="" style="cursor: move; height: 85px;" >

                                <td>P-00039</td>
                                <td>Pulseira prata com franja grossa</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="1F22B476C7ABA54EFF8791C51199A41B" id="quantidade_1F22B476C7ABA54EFF8791C51199A41B" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_1F22B476C7ABA54EFF8791C51199A41B" value="0.040" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_1F22B476C7ABA54EFF8791C51199A41B" id="PRECOUNITARIO_1F22B476C7ABA54EFF8791C51199A41B" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_1F22B476C7ABA54EFF8791C51199A41B" id="PRECOCOMPRA_1F22B476C7ABA54EFF8791C51199A41B"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="48,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="798FB5665113D1A5ADBD5D29C89FB4F6" class="" style="cursor: move; height: 85px;" >

                                <td>P-00040</td>
                                <td>Pulseira rose com franja grossa</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="798FB5665113D1A5ADBD5D29C89FB4F6" id="quantidade_798FB5665113D1A5ADBD5D29C89FB4F6" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_798FB5665113D1A5ADBD5D29C89FB4F6" value="0.040" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_798FB5665113D1A5ADBD5D29C89FB4F6" id="PRECOUNITARIO_798FB5665113D1A5ADBD5D29C89FB4F6" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="12,40"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_798FB5665113D1A5ADBD5D29C89FB4F6" id="PRECOCOMPRA_798FB5665113D1A5ADBD5D29C89FB4F6"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="24,80" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="525617E736B940B7090AF8CE4DB047DB" class="" style="cursor: move; height: 85px;" >

                                <td>P-00041</td>
                                <td>Pulseira fumê com franja grossa</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="525617E736B940B7090AF8CE4DB047DB" id="quantidade_525617E736B940B7090AF8CE4DB047DB" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_525617E736B940B7090AF8CE4DB047DB" value="0.040" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_525617E736B940B7090AF8CE4DB047DB" id="PRECOUNITARIO_525617E736B940B7090AF8CE4DB047DB" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="124,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_525617E736B940B7090AF8CE4DB047DB" id="PRECOCOMPRA_525617E736B940B7090AF8CE4DB047DB"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="249,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="669CE5FB1AA8CA52967756289A3C45A9" class="" style="cursor: move; height: 85px;" >

                                <td>P-00042</td>
                                <td>Pulseira rose 3 elos com pinjente cruz, </td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="669CE5FB1AA8CA52967756289A3C45A9" id="quantidade_669CE5FB1AA8CA52967756289A3C45A9" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_669CE5FB1AA8CA52967756289A3C45A9" value="0.025" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_669CE5FB1AA8CA52967756289A3C45A9" id="PRECOUNITARIO_669CE5FB1AA8CA52967756289A3C45A9" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="59,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_669CE5FB1AA8CA52967756289A3C45A9" id="PRECOCOMPRA_669CE5FB1AA8CA52967756289A3C45A9"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="119,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="A13FD3E39DB60AE2156CF12024B0F220" class="" style="cursor: move; height: 85px;" >

                                <td>P-00043</td>
                                <td>Pulseira dorada com pinejentes de olho g</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="A13FD3E39DB60AE2156CF12024B0F220" id="quantidade_A13FD3E39DB60AE2156CF12024B0F220" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_A13FD3E39DB60AE2156CF12024B0F220" value="0.004" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_A13FD3E39DB60AE2156CF12024B0F220" id="PRECOUNITARIO_A13FD3E39DB60AE2156CF12024B0F220" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="17,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_A13FD3E39DB60AE2156CF12024B0F220" id="PRECOCOMPRA_A13FD3E39DB60AE2156CF12024B0F220"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="34,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="FBE9D9FAED7A63590A7B602AD061BF4A" class="" style="cursor: move; height: 85px;" >

                                <td>P-00044</td>
                                <td>Pulseira fumê 3 elos com pinjente de cor</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="FBE9D9FAED7A63590A7B602AD061BF4A" id="quantidade_FBE9D9FAED7A63590A7B602AD061BF4A" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_FBE9D9FAED7A63590A7B602AD061BF4A" value="0.014" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_FBE9D9FAED7A63590A7B602AD061BF4A" id="PRECOUNITARIO_FBE9D9FAED7A63590A7B602AD061BF4A" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="89,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_FBE9D9FAED7A63590A7B602AD061BF4A" id="PRECOCOMPRA_FBE9D9FAED7A63590A7B602AD061BF4A"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="179,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="E5471F77DBC1F3FA19D820254ACD5F3E" class="" style="cursor: move; height: 85px;" >

                                <td>P-00045</td>
                                <td>Pulseira fumê com pinjente de trevo, cor</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="E5471F77DBC1F3FA19D820254ACD5F3E" id="quantidade_E5471F77DBC1F3FA19D820254ACD5F3E" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_E5471F77DBC1F3FA19D820254ACD5F3E" value="0.025" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_E5471F77DBC1F3FA19D820254ACD5F3E" id="PRECOUNITARIO_E5471F77DBC1F3FA19D820254ACD5F3E" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="79,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_E5471F77DBC1F3FA19D820254ACD5F3E" id="PRECOCOMPRA_E5471F77DBC1F3FA19D820254ACD5F3E"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="159,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="410A1844CC93994743E863E0416A3319" class="" style="cursor: move; height: 85px;" >

                                <td>P-00046</td>
                                <td>Pulseira rose 3 elos com pinjente de cor</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="410A1844CC93994743E863E0416A3319" id="quantidade_410A1844CC93994743E863E0416A3319" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_410A1844CC93994743E863E0416A3319" value="0.011" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_410A1844CC93994743E863E0416A3319" id="PRECOUNITARIO_410A1844CC93994743E863E0416A3319" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_410A1844CC93994743E863E0416A3319" id="PRECOCOMPRA_410A1844CC93994743E863E0416A3319"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="149,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="52C036ACE20DA7BC9C6D176C2E5B9EB8" class="" style="cursor: move; height: 85px;" >

                                <td>P-00047</td>
                                <td>Pulseira fumê 3 elos com pinjente de cor</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="52C036ACE20DA7BC9C6D176C2E5B9EB8" id="quantidade_52C036ACE20DA7BC9C6D176C2E5B9EB8" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_52C036ACE20DA7BC9C6D176C2E5B9EB8" value="0.000" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_52C036ACE20DA7BC9C6D176C2E5B9EB8" id="PRECOUNITARIO_52C036ACE20DA7BC9C6D176C2E5B9EB8" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="74,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_52C036ACE20DA7BC9C6D176C2E5B9EB8" id="PRECOCOMPRA_52C036ACE20DA7BC9C6D176C2E5B9EB8"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="149,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="7B82E9A44ACE025D924DE6819B461DFD" class="" style="cursor: move; height: 85px;" >

                                <td>P-00048</td>
                                <td>Pulseira de couro com canutilhos.</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="7B82E9A44ACE025D924DE6819B461DFD" id="quantidade_7B82E9A44ACE025D924DE6819B461DFD" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_7B82E9A44ACE025D924DE6819B461DFD" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_7B82E9A44ACE025D924DE6819B461DFD" id="PRECOUNITARIO_7B82E9A44ACE025D924DE6819B461DFD" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="15,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_7B82E9A44ACE025D924DE6819B461DFD" id="PRECOCOMPRA_7B82E9A44ACE025D924DE6819B461DFD"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="15,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="4EE5FE9D975488B4BB81E75C60DFAF7B" class="" style="cursor: move; height: 85px;" >

                                <td>P-00049</td>
                                <td>Puseira prata com elos quadrados</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="4EE5FE9D975488B4BB81E75C60DFAF7B" id="quantidade_4EE5FE9D975488B4BB81E75C60DFAF7B" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_4EE5FE9D975488B4BB81E75C60DFAF7B" value="0.005" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_4EE5FE9D975488B4BB81E75C60DFAF7B" id="PRECOUNITARIO_4EE5FE9D975488B4BB81E75C60DFAF7B" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_4EE5FE9D975488B4BB81E75C60DFAF7B" id="PRECOCOMPRA_4EE5FE9D975488B4BB81E75C60DFAF7B"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="5A50D923572EAB7E5A855DF68716E20B" class="" style="cursor: move; height: 85px;" >

                                <td>P-00050</td>
                                <td>Puseira rose com elos quadrados</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="5A50D923572EAB7E5A855DF68716E20B" id="quantidade_5A50D923572EAB7E5A855DF68716E20B" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_5A50D923572EAB7E5A855DF68716E20B" value="0.006" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_5A50D923572EAB7E5A855DF68716E20B" id="PRECOUNITARIO_5A50D923572EAB7E5A855DF68716E20B" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_5A50D923572EAB7E5A855DF68716E20B" id="PRECOCOMPRA_5A50D923572EAB7E5A855DF68716E20B"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="E776B7D91C055BED1FCD57CD7F98CCFD" class="" style="cursor: move; height: 85px;" >

                                <td>P-00053</td>
                                <td>Pulseira dourada com detalhe de coração</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="E776B7D91C055BED1FCD57CD7F98CCFD" id="quantidade_E776B7D91C055BED1FCD57CD7F98CCFD" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_E776B7D91C055BED1FCD57CD7F98CCFD" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_E776B7D91C055BED1FCD57CD7F98CCFD" id="PRECOUNITARIO_E776B7D91C055BED1FCD57CD7F98CCFD" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="48,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_E776B7D91C055BED1FCD57CD7F98CCFD" id="PRECOCOMPRA_E776B7D91C055BED1FCD57CD7F98CCFD"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="48,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="EAD423A8E00C2718F1197503DECDFAA8" class="" style="cursor: move; height: 85px;" >

                                <td>P-00054</td>
                                <td>Pulseira dourada com símbolo da paz</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="EAD423A8E00C2718F1197503DECDFAA8" id="quantidade_EAD423A8E00C2718F1197503DECDFAA8" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_EAD423A8E00C2718F1197503DECDFAA8" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_EAD423A8E00C2718F1197503DECDFAA8" id="PRECOUNITARIO_EAD423A8E00C2718F1197503DECDFAA8" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="18,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_EAD423A8E00C2718F1197503DECDFAA8" id="PRECOCOMPRA_EAD423A8E00C2718F1197503DECDFAA8"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="36,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="670CC6BF696D9AD3F7A73B691B0F2E61" class="" style="cursor: move; height: 85px;" >

                                <td>P-00055</td>
                                <td>Pulseira de couro com detalhe de gancho </td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="670CC6BF696D9AD3F7A73B691B0F2E61" id="quantidade_670CC6BF696D9AD3F7A73B691B0F2E61" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="1"/></td>
                                <td><input type="text" class="form-control" name="PESO_670CC6BF696D9AD3F7A73B691B0F2E61" value="0.100" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_670CC6BF696D9AD3F7A73B691B0F2E61" id="PRECOUNITARIO_670CC6BF696D9AD3F7A73B691B0F2E61" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="37,00"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_670CC6BF696D9AD3F7A73B691B0F2E61" id="PRECOCOMPRA_670CC6BF696D9AD3F7A73B691B0F2E61"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="37,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="FD3FEBD302D0BEB1AA337C6017701965" class="" style="cursor: move; height: 85px;" >

                                <td>P-00056</td>
                                <td>Pulseira de couro com canutilhos </td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="FD3FEBD302D0BEB1AA337C6017701965" id="quantidade_FD3FEBD302D0BEB1AA337C6017701965" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_FD3FEBD302D0BEB1AA337C6017701965" value="0.200" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_FD3FEBD302D0BEB1AA337C6017701965" id="PRECOUNITARIO_FD3FEBD302D0BEB1AA337C6017701965" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="84,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_FD3FEBD302D0BEB1AA337C6017701965" id="PRECOCOMPRA_FD3FEBD302D0BEB1AA337C6017701965"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="169,00" readonly="readonly"/></td>


                                
                            </tr>
                                                    
                      
                                                                                                            
                                                                                                              
                                                                                                         
                                                                                                                                                                                                                                            
                            <tr id="0B83354F1C45DDAECEB8936A8C3A6FF0" class="" style="cursor: move; height: 85px;" >

                                <td>P-00057</td>
                                <td>Pulseira rose com cristais dentro</td>
                                <td>Pulseiras</td>
                                <td><input type="text" class="form-control" name="0B83354F1C45DDAECEB8936A8C3A6FF0" id="quantidade_0B83354F1C45DDAECEB8936A8C3A6FF0" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="2"/></td>
                                <td><input type="text" class="form-control" name="PESO_0B83354F1C45DDAECEB8936A8C3A6FF0" value="0.007" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_0B83354F1C45DDAECEB8936A8C3A6FF0" id="PRECOUNITARIO_0B83354F1C45DDAECEB8936A8C3A6FF0" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="19,50"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_0B83354F1C45DDAECEB8936A8C3A6FF0" id="PRECOCOMPRA_0B83354F1C45DDAECEB8936A8C3A6FF0"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="39,00" readonly="readonly"/></td>


                                
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

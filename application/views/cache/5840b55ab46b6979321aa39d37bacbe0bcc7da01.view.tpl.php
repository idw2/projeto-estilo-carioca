<?php /*%%SmartyHeaderCode:20843397545b7cd4ccc543-20568902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5840b55ab46b6979321aa39d37bacbe0bcc7da01' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/view.tpl',
      1 => 1414766542,
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
    'eac0aadb6e8a08e01ccba7554f40309ddd9f1b17' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/tinymce_2.tpl',
      1 => 1414178738,
      2 => 'file',
    ),
    'b5516564ae08b3778b5b55911ea33638d41d12c5' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/footer.tpl',
      1 => 1409231605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20843397545b7cd4ccc543-20568902',
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
  'unifunc' => 'content_545b7cd52a57c1_36264703',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b7cd52a57c1_36264703')) {function content_545b7cd52a57c1_36264703($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Maria de Barro | Visualizar Pedido</title>

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
                <li  class="" ><a href="/homolog/pt/produtos/produtos-lista">Lista</a></li> 
                <li  class="" ><a href="/homolog/pt/produtos/estoque">Estoque</a></li> 
                <div class="panel-heading"><h4>Pagamentos</h4></div>
                <li  class="active" ><a href="/homolog/pt/pedidos/pedidos-lista">Lista</a></li>
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
          
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-6 text-left">
                    <h2><span class="label label-default">Visualizar Pedido</span></h2>
                </div>
                <br/>
                <div class="col-md-6 text-right">
                    <a href="/homolog/pt/pedidos/pedidos_lista" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                </div>
            </div>
                
        </div>
    </div>

    <h3>1. Dados do comprador</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default"> 
                <table class="table" style="font-size: 14px">
                      
                    <tr>
                        <td>Nome:</td>
                        <td>JoÃ£o Ahmad</td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td>jopejp@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Data de nascimento:</td>
                        <td>01/01/2000</td>
                    </tr>
                    <tr>
                        <td>Sexo:</td>
                        <td>F</td>
                    </tr>
                    <tr>
                        <td>Telefone:</td>
                        <td>(12) 312312313, Ramal: 2131</td>
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
                        <td>21720-000</td> 
                        
                    </tr>    
                    <tr> <td>Endereço:</td><td>Avenida Brasil - de 29661 a 30775 - lado Ã­mpar, nº 222 </td> </tr>
                    <tr> <td>Bairro:</td><td>Realengo</td> </tr>
                    <tr> <td>Cidade/UF:</td><td>Rio de Janeiro/RJ</td> </tr>
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
                                    <td><a href="/homolog/pt/descricao/categoria/colares/colar-dourado-com-pingente-de-bola-1"><img src="/homolog/web-files/upload/thumbs/18A8392EE47E46841C2F4366BFA29D6A/C2FDF2B7C62597176163A4D7D4BAE69E.jpg" alt="Colar dourado com pingente de bola" title="Colar dourado com pingente de bola" border="0"/></a><br/></td>
                                    <td style="text-transform: uppercase;">Colar dourado com pingente de bola</td>
                                    <td>Colares</td>
                                    <td>C-00003</td>
                                    <td>52,00</td>
                                    <td>0.000</td>
                                    <td id="peso_total_produto_">0.000</td>
                                    <td id="n_input" align="center">3</td>
                                    <td  id="preco_total_produto_"> 156,00</td>
                                    
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
                            <td>755f67192443d7ffa61023aa099721db</td>
                        </tr>
                        <tr>
                            <td>Código do cliente:</td>
                            <td>82d5cfd2ee3fcd5842f1187258af9f22</td>
                        </tr>
                        <tr>
                            <td>Número do Pedido:</td>
                            <td>0000000068</td>
                        </tr>
                        <tr>
                            <td>Data e hora da transação:</td>
                            <td>2014-10-31 15:14:56</td>
                        </tr>
                        <tr>
                            <td>Forma de envio:</td>
                            <td>Total Express</td>
                        </tr>
                        <tr>
                            <td>Forma de pagamento:</td>
                            <td>paypal</td>
                        </tr>
                                                <tr>
                            <td>Total da compra:</td>
                            <td>142,43</td>
                        </tr>
                        <tr>
                            <td>Taxa de entrega:</td>
                            <td>6,19</td>
                        </tr>
                        <tr>
                            <td>Total à pagar:</td>
                            <td>162,19</td>
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
                                <td>Concluido</td>
                                <td>2014-11-06 11:50:38</td>
                                <td><p>Lorem ipsum dolor sit amet, et nec prima legere maluisset, sea assum fuisset tincidunt at. Mea cu dicunt pericula instructior, vix sumo argumentum assueverit ea. Vel at impedit invenire liberavisse. Mei ea rebum voluptatibus. Postea consulatu tincidunt qui id. Te sed omnis oratio qualisque, quo eu perpetua reprimique, nec no eruditi reformidans.</p></td>

                            </tr>

                          

                            <tr>
                                <td>Postado</td>
                                <td>2014-11-06 11:50:32</td>
                                <td><p>Lorem ipsum dolor sit amet, et nec prima legere maluisset, sea assum fuisset tincidunt at. Mea cu dicunt pericula instructior, vix sumo argumentum assueverit ea. Vel at impedit invenire liberavisse. Mei ea rebum voluptatibus. Postea consulatu tincidunt qui id. Te sed omnis oratio qualisque, quo eu perpetua reprimique, nec no eruditi reformidans.</p></td>

                            </tr>

                          

                            <tr>
                                <td>Postado</td>
                                <td>2014-11-06 11:50:28</td>
                                <td><p>Lorem ipsum dolor sit amet, et nec prima legere maluisset, sea assum fuisset tincidunt at. Mea cu dicunt pericula instructior, vix sumo argumentum assueverit ea. Vel at impedit invenire liberavisse. Mei ea rebum voluptatibus. Postea consulatu tincidunt qui id. Te sed omnis oratio qualisque, quo eu perpetua reprimique, nec no eruditi reformidans.</p></td>

                            </tr>

                         
                    </tbody>
                </table> 
            </div>           
        </div>           
    </div>
    
    <h3>6. Rastreamento</h3>
    
    <form method="post">
        <select name="situacao" class="form-control">
            <option value="Postado">Postado</option>
            <option value="Devolvido">Devolvido</option>
            <option value="Concluido">Concluído</option>
            <option value="Outros">Outros</option>
        </select>
        <br/>
        <textarea name="observacoes" rows="10" style="width: 100%" ></textarea>
        <br/>
        <div class="input-group input-group-lg">
            <button type="submit" class="btn btn-primary btn-lg btn-primary-maria" role="button">Enviar</button>
        </div>
    </form>
  
</div>                          
<script type="text/javascript" src="/homolog/web-files/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

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

<script>
    $(function() {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>
</body>
</html><?php }} ?>

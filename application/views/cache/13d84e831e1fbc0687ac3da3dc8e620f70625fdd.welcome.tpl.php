<?php /*%%SmartyHeaderCode:28460434853f27475635958-01535494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13d84e831e1fbc0687ac3da3dc8e620f70625fdd' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/welcome.tpl',
      1 => 1408133076,
      2 => 'file',
    ),
    '71b9ba19b7ba381638a98ac68fdf5be84c14099e' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/header.tpl',
      1 => 1408395751,
      2 => 'file',
    ),
    'd030a24b43618f9298f1d4d7cf1039419109200a' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/navbar.tpl',
      1 => 1408133019,
      2 => 'file',
    ),
    '7a0d90734db8dd177babe39169b29f1877d718fc' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/logo.tpl',
      1 => 1408126315,
      2 => 'file',
    ),
    '004797ff37e28bf242d1fe266a69d059889deb38' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/footer.tpl',
      1 => 1408039793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28460434853f27475635958-01535494',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f2747585e546_03855917',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f2747585e546_03855917')) {function content_53f2747585e546_03855917($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Minha Concessionária | Bem vindo</title>


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

        <style>
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
                    font-family: "Arial Black", Gadget, sans-serif;
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
            
            .ico-default-star, .ico-default-eye, .ico-default-trash, .ico-default-photo{
                display: inline-block;
                width: 25px;
                height: 21px;
                border-radius: 27%;
                background: #e9c92e;
                cursor: pointer;
                color: #fff;
                text-align:  center;
                
            }
            
            .ico-default-trash{
                background: #395aa4;
            }
            
            .ico-default-photo{
                background: #2ac364;
            }
            
            .ico-default-star a, .ico-default-eye a, .ico-default-trash a, .ico-default-photo a{ 
                color: #fff;
                text-decoration: none;
            } 
            
            .ico-default-star a:hover, .ico-default-eye a:hover, .ico-default-trash a:hover, .ico-default-photo a:hover{ 
                color: #fff;
                text-decoration: none;
            } 
            
            .ico-default-star.desative, .ico-default-eye.desative, .ico-default-trash.desative, .ico-default-photo.desative{
                background: #ad2138;
            }
            
            
            
            
            
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

    <div class="collapse navbar-collapse" style="padding-bottom: 3%">
        <div class="panel-heading"><h4>Painel Administrativo</h4></div>
        <ul class="nav nav-stacked">
            <li  class="active" ><a href="/en/admin/welcome">Home</a></li>
            <div class="panel-heading"><h4>Páginas</h4></div>
            <li  class="" ><a href="/en/html/empresa">Empresa</a></li>
            <li  class="" ><a href="/en/html/zero_km">Zero KM</a></li>
            <li  class="" ><a href="/en/html/seminovos">Seminovos</a></li>              
            <li  class="" ><a href="/en/html/financiamento">Financie</a></li>              
            <li  class="" ><a href="/en/html/vender_carro">Venda seu carro</a></li>              
            <div class="panel-heading"><h4>Veículos</h4></div>
            <li  class="" ><a href="/en/veiculos/veiculos_lista">Lista</a></li>              
            <div class="panel-heading"><h4>Serviços</h4></div>
            <li  class="" ><a href="/en/admin/alterar_senha">Alterar senha</a></li>              
            <li  class="" ><a href="/en/admin/logout">Sair</a></li>              
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
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2><span class="label label-default">Bem-vindo</span></h2>
        </div>
    </div>
</div>

</body>
</html><?php }} ?>

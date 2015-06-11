<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 13:08:00
         compiled from "/home/maria951/public_html/homolog/application/views/admin/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1174482065460d4d0416bd4-31097871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73de0111ee301fe0c7a0419067a6092ee8c2473b' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/header.tpl',
      1 => 1414431093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1174482065460d4d0416bd4-31097871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'web_files' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460d4d058b2d1_72397969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d4d058b2d1_72397969')) {function content_5460d4d058b2d1_72397969($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/favicon.ico"/>

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/bootstrap/css/bootstrap-theme.css"/>		
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/docs.min.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/style.css"/>

        <script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/funcoes.js"></script>
        <script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/jquery-2.1.1.min.js"></script>
        <script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/jQuery-Mask-Plugin.js"></script>
        <script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/bootstrap/js/bootstrap.js"></script>
        <script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/bootstrap/js/bootstrap-tooltip.js"></script>
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Upload -->
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/jquery.uploadfile.js"></script>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/uploadfile.css" type="text/css" media="screen" />
        <!-- JQuery UI -->
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/jquery-ui-1.11.1.custom/jquery-ui.js"></script>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/jquery-ui-1.11.1.custom/jquery-ui.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/jquery-ui-1.11.1.custom/jquery-ui.structure.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/jquery-ui-1.11.1.custom/jquery-ui.theme.css"/>
        <!-- Drag -->
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/jquery-sortable.js"></script>
        <!-- PLUGIN CROP -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/crop/cropper.css" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/crop/cropper.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/highlight.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/jquery.tablednd.0.7.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/js/default.js"></script>

        <script type="text/javascript">
            if (window.hljs) {
                hljs.tabReplace = '    ';
                hljs.initHighlightingOnLoad();
            }
        </script>

        <style>

            @font-face {
                font-family: Gotham-Black;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-Black.otf);
            }
            @font-face {
                font-family: Gotham-BlackIta;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-BlackIta.otf);
            }
            @font-face {
                font-family: Gotham-Bold;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-Bold.otf);
            }
            @font-face {
                font-family: Gotham-BoldIta;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-BoldIta.otf);
            }
            @font-face {
                font-family: Gotham-Book;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-Book.otf);
            }
            @font-face {
                font-family: Gotham-BookIta;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-BookIta.otf);
            }
            @font-face {
                font-family: Gotham-Light;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-Light.otf);
            }
            @font-face {
                font-family: Gotham-LightIta;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-LightIta.otf);
            }
            @font-face {
                font-family: Gotham-Medium;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-Medium.otf);
            }
            @font-face {
                font-family: Gotham-MediumIta;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-MediumIta.otf);
            }
            @font-face {
                font-family: Gotham-Thin;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-Thin.otf);
            }
            @font-face {
                font-family: Gotham-ThinIta;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-ThinIta.otf);
            }
            @font-face {
                font-family: Gotham-Ultra;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-Ultra.otf);
            }
            @font-face {
                font-family: Gotham-UltraIta;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-UltraIta.otf);
            }
            @font-face {
                font-family: Gotham-XLight;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-XLight.otf);
            }
            @font-face {
                font-family: Gotham-XLightIta;
                src: url(<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/gotham/Gotham-XLightIta.otf);
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
    <body><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2015-04-01 18:47:28
         compiled from "/home/estil450/public_html/homolog/application/views/admin/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:544509172551c2f30d2a951-31020053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c14537ebe57b4bc1eedfa371ca2a364bcf50b8d' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/admin/header.tpl',
      1 => 1427145625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '544509172551c2f30d2a951-31020053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'web_files' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551c2f30de2b46_99767421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c2f30de2b46_99767421')) {function content_551c2f30de2b46_99767421($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        <link rel="shortcut icon" href="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5">
        <link rel="shortcut icon" type="image/x-icon" href="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5"/>

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

        <!-- //COLOR PICKER BOOTSTRAP// -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/bootstrap-colorpicker-master/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/bootstrap-colorpicker-master/src/css/docs.css" rel="stylesheet">
        
        <?php if ($_smarty_tpl->tpl_vars['page']->value!="index") {?>
            <!-- //CSS DO TEMA RESPONSIVO EM BOOTSTRAP -->
            <link href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/startbootstrap-sb-admin-1.0.2/css/sb-admin.css" rel="stylesheet">
            <link href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/startbootstrap-sb-admin-1.0.2/css/plugins/morris.css" rel="stylesheet">
        <?php }?>


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
                <div class="container-fluid"><?php }} ?>

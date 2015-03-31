<?php /* Smarty version Smarty-3.1.19, created on 2015-03-25 22:19:48
         compiled from "/home/estil450/public_html/application/views/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:892618547551334842bd5e4-56196918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9915484c49efae1e853c1be7aa9d8b2c159a82c4' => 
    array (
      0 => '/home/estil450/public_html/application/views/header.tpl',
      1 => 1425767056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '892618547551334842bd5e4-56196918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'web_files' => 0,
    'og_title' => 0,
    'og_type' => 0,
    'og_site_name' => 0,
    'og_descripition' => 0,
    'og_email' => 0,
    'og_phone_number' => 0,
    'og_street_address' => 0,
    'og_locality' => 0,
    'og_region' => 0,
    'og_country_name' => 0,
    'og_postal_code' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551334843947b2_56601241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551334843947b2_56601241')) {function content_551334843947b2_56601241($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

        <meta name="title" content="Estilo Carioca"><meta name="description" content=""><meta name="author" content="Designlab">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
           

        <link rel="shortcut icon" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/slick.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/sweet-alert.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/jquery.raty.css">
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/sweet-alert.css?v=2"/>
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/style.css">
        
        <script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/modernizr.custom.js"></script>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <style>
            
            .sugestao a  { font-size: 16px; display: block; background: #f4f4f4 !important; color:#1f3c8a !important; height: 100% !important; padding: 15px !important;margin-top: 0.3em !important; width: 100% !important;  }
.sugestao a:hover { font-size: 16px; background: #1f3c8a !important; text-decoration: none; color:#fff !important; height: 100% !important; padding: 15px  !important; margin-top: 0.3em !important; width: 100% !important;  }
            
        
        @font-face {
            font-family: helveticaneue;
            src: local('HelveticaNeueLTStd-UltLt.otf'), url('HelveticaNeueLTStd-UltLt.otf');
        }
        
        body, .font-default, .footer-title{
            font-family: helveticaneue, Helvetica, sans-serif !important;
        }
        
        .footer-title{
            font-weight: 600 !important;
            color: #293751 !important;
        }
        
        body{
            line-height: 1.90rem !important;
        }
        
        
        
        
        .title-tag{
            background: #8795ae !important;
        }
        
        .theme-default .section-title3 > h2{
            box-shadow: 0 2px #8795ae !important;
        }
        
        </style>
        <!--[if IE 8]>
        <link rel="stylesheet" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/css/ie8.css" /><script src="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/js/respond.js" ></script>        <![endif]-->

        <script type="text/javascript">
            var App = window.App || {
                base_path: ''
            };
        </script>
        
        <script>$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
}) </script>

        <?php if ($_smarty_tpl->tpl_vars['og_title']->value!='') {?><meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['og_title']->value;?>
" /><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['og_type']->value!='') {?><meta property="og:type" content="<?php echo $_smarty_tpl->tpl_vars['og_type']->value;?>
" /><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['og_site_name']->value!='') {?><meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['og_site_name']->value;?>
" /><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['og_descripition']->value!='') {?><meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['og_descripition']->value;?>
" /><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['og_email']->value!='') {?><meta property="og:email" content="<?php echo $_smarty_tpl->tpl_vars['og_email']->value;?>
"/><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['og_phone_number']->value!='') {?><meta property="og:phone_number" content="<?php echo $_smarty_tpl->tpl_vars['og_phone_number']->value;?>
"/><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['og_street_address']->value!='') {?><meta property="og:street-address" content="<?php echo $_smarty_tpl->tpl_vars['og_street_address']->value;?>
"/><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['og_locality']->value!='') {?><meta property="og:locality" content="<?php echo $_smarty_tpl->tpl_vars['og_locality']->value;?>
"/><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['og_region']->value!='') {?><meta property="og:region" content="<?php echo $_smarty_tpl->tpl_vars['og_region']->value;?>
"/><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['og_country_name']->value!='') {?><meta property="og:country-name" content="<?php echo $_smarty_tpl->tpl_vars['og_country_name']->value;?>
"/><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['og_postal_code']->value!='') {?><meta property="og:postal-code" content="<?php echo $_smarty_tpl->tpl_vars['og_postal_code']->value;?>
"/><?php }?>
    </head>
    <body class="theme-default ">

        <div class="search-popup">
            <div class="search-popup-out popup-close">
                <div class="search-popup-inner">
                    <div class="search-popup-container">
                        <div class="relative">
                            <form class="form search-popup-form" role="search" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/novos-produtos" method="post">
                                <input type="search" placeholder="Buscar" name="search" class="input" autocomplete="off">
                                <button type="submit"><i class="sprite sprite-search"></i></button>
                                 
                            </form>
                            <div class="search-sugestao"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="stt_logado_print">
            <?php echo $_smarty_tpl->getSubTemplate ("top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        </section>
<?php }} ?>

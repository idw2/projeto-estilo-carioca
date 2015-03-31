<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 13:20:27
         compiled from "/home/maria951/public_html/homolog/application/views/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16840652475460d7bbe51e21-17700184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27f9a7a3179d1f7292a60ba13c6a64d672873ee0' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/header.tpl',
      1 => 1415211731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16840652475460d7bbe51e21-17700184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
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
    'web_files' => 0,
    'nome_logon' => 0,
    'language' => 0,
    'saudacao' => 0,
    'total_produtos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460d7bc07d9c2_12860892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d7bc07d9c2_12860892')) {function content_5460d7bc07d9c2_12860892($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

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

        <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/favicon.ico"/>

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/plugins/rs-plugin/css/settings.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/plugins/flexslider/flexslider.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/plugins/fancybox/jquery.fancybox.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/pongstagr.am-master/source/pongstagr.am.css"/>		
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/plugins/magnific-popup.css"/>		
        
        
        
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/css/joker.css"/>

    </head>
    <body style="padding-top: 52px" class="theme-default">

        <header class="header">
            <div class="navbar navbar-fixed-top" role="navigation">
                <div class="container">
                    <a href="#" class="brand-circle"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/brand-circle.png"></a>
                    <ul class="nav navbar-nav">
                        <?php if ($_smarty_tpl->tpl_vars['nome_logon']->value=='') {?>
                            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/login-cadastro/" id="nav-login">Login e Cadastro</a></li>
                        <?php } else { ?>
                        <li><strong style="display: inline-block; line-height: 50px; color: #df5d65;"><?php echo $_smarty_tpl->tpl_vars['saudacao']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nome_logon']->value;?>
!</strong></li>
                        <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/" id="nav-login" style="display: inline-block;"> Minha conta</a></li>
                        <?php }?>
                        
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if ($_smarty_tpl->tpl_vars['nome_logon']->value!='') {?>
                        <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/wishlist">Wishlist</a></li>
                        <?php }?>
                        <li>
                            <a id="shopping-cart" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/checkout/" class="btn-with-icon fa fa-shopping-cart">
                                <?php if ($_smarty_tpl->tpl_vars['total_produtos']->value=='') {?>
                                
                                <?php } else { ?>
                                    <span class="label label-primary"><?php echo $_smarty_tpl->tpl_vars['total_produtos']->value;?>
</span>
                                <?php }?>
                                Meu Carrinho
                            </a>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['nome_logon']->value!='') {?>
                            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/sair" id="nav-login" style="display: inline-block;">Sair</a></li>    
                        <?php }?>
                        

                        
                        

                    </ul>
                </div>
            </div>
            <div class="container header-brand">
                <div class="row">
                    <div class="col-sm-6 col-brand">
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/" class="brand"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/logo.png" alt="Maria de Barro" border="0" title="" class="img-responsive"/></a>
                    </div>
                    <div class="col-sm-6 text-right col-chart">
                        <p>
                            <a href="tel:+5521995765038"><span class="icon-whatsapp"></span> 21 99576.5038</a><br/>
                            <a href="tel:+552132835265"><span class="fa fa-phone" style="margin-right: 12px"></span> 21 3283.5265</a>
                        </p>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header">
                            <a href="#" class="hamburger">
                                <span class="sr-only">Menu</span>
                                <span class="bar"></span>
                            </a>
                        </div>
                        <?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                    </div>
                </div>
            </nav>
        </header>
<?php }} ?>

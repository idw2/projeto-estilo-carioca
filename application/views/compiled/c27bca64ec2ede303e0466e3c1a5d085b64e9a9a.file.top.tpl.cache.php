<?php /* Smarty version Smarty-3.1.19, created on 2015-02-05 08:28:24
         compiled from "/home/maria951/public_html/homolog/application/views/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37373249654d37e08a7f9e4-01280293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c27bca64ec2ede303e0466e3c1a5d085b64e9a9a' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/top.tpl',
      1 => 1417459590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37373249654d37e08a7f9e4-01280293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_files' => 0,
    'nome_logon' => 0,
    'language' => 0,
    'saudacao' => 0,
    'total_produtos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d37e08adf261_23608394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d37e08adf261_23608394')) {function content_54d37e08adf261_23608394($_smarty_tpl) {?><div class="navbar navbar-fixed-top" role="navigation">
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
            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/newsletter">Newsletter</a></li>
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
</nav><?php }} ?>

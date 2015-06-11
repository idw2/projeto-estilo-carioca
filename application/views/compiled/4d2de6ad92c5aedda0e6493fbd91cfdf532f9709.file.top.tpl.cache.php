<?php /* Smarty version Smarty-3.1.19, created on 2015-04-01 20:36:36
         compiled from "/home/estil450/public_html/homolog/application/views/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:398343024551c48c46cf544-43837234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d2de6ad92c5aedda0e6493fbd91cfdf532f9709' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/top.tpl',
      1 => 1427144954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '398343024551c48c46cf544-43837234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'nome_logon' => 0,
    'total_produtos' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551c48c4759ab4_74993292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c48c4759ab4_74993292')) {function content_551c48c4759ab4_74993292($_smarty_tpl) {?><header id="header" class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="header-bar"></div>
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="hamburger"><span></span></a>
            <a class="brand" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/">
                <img src="http://homolog.estilocarioca.com.br/application/template/estilocarioca/assets/img/estilocarioca2.png" width="71" height="68">
            </a>
        </div>
        <nav class="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-social">
                    <a href="https://www.facebook.com/estilocarioca">
                        <b class="entypo-facebook"></b>
                    </a>
                    <a href="https://instagram.com/estilocarioca/">
                        <b class="entypo-instagrem"></b>
                    </a>
                    
                    <!--<a href="">
                        <i class="sprite sprite-twitter"></i>
                    </a>-->
                </li>
                <li class="navbar-search">
                    <a href="" class="search">
                        <i class="sprite sprite-search"></i>
                    </a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['nome_logon']->value=='') {?>
                    <li>
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/login-cadastro/">
                            <i class="icon sprite sprite-user"></i>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/" id="nav-login" style="display: inline-block;"> Minha conta</a>
                    </li>
                    <li>
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/sair" id="nav-login" style="display: inline-block;">Sair</a>
                    </li>   
                <?php }?>
                <li class="navbar-cart">
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/checkout/">
                        <i class="icon sprite sprite-cart"></i>
                        <span class="value"><?php if ($_smarty_tpl->tpl_vars['total_produtos']->value=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['total_produtos']->value;?>
<?php }?></span>
                    </a>
                </li>
            </ul>
                    
            <ul class="nav navbar-nav">
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="index") {?> class="active"<?php }?>>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/">Home</a>
                </li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="quem_somos") {?> class="active"<?php }?>>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/quem-somos">A Estilo Carioca</a>
                </li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="junior") {?> class="active"<?php }?>>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/junior/">Junior</a>
                </li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="nilton-santos") {?> class="active"<?php }?>>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nilton-santos">Nilton Santos</a>
                </li>
            </ul>
        </nav>
    </div>
</header>  <?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2015-03-23 18:55:30
         compiled from "/home/estil450/public_html/application/views/admin/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:567186022551061a220d9a4-66661683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eb677adcd7c0d82e647c09ecee716de8729db60' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/navbar.tpl',
      1 => 1425487032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '567186022551061a220d9a4-66661683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'email_logon' => 0,
    'nome_logon' => 0,
    'page' => 0,
    'num_de_qntdd_produtos' => 0,
    'existe_avise_me' => 0,
    'existe_aniversariantes' => 0,
    'existe_novos_produtos_cadastrados' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551061a2318707_80662437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551061a2318707_80662437')) {function content_551061a2318707_80662437($_smarty_tpl) {?><!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome"><?php echo $_smarty_tpl->tpl_vars['email_logon']->value;?>
</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['nome_logon']->value;?>
 <b class="caret"></b></a>
            <ul class="dropdown-menu">
                
                <li>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/alterar-senha"><i class="fa fa-fw fa-gear"></i> Alterar senha</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/logout"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">


            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="dashboard") {?> class="active" <?php } else { ?> class="" <?php }?>>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="produtos_lista") {?> class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/produtos-lista">
                    <i class="fa fa-paper-plane"></i> Produtos</a>
            </li> 
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="pedidos_lista") {?> class="active"<?php }?>>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/pedidos/pedidos-lista"><i class="fa fa-file-text"></i> Pedidos</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="conta-lista") {?> class="active"<?php }?>>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/lista"><i class="fa fa-users"></i> Clientes</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="estoque") {?> class="active"<?php }?>>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/estoque"><i class="fa fa-bars"></i> Estoque</a></li> 
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="estoque-baixo") {?> class="active"<?php }?>>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/estoque-baixo" style="position: relative;"><i class="fa fa-sort-alpha-asc"></i> Estoque Baixo <?php if ($_smarty_tpl->tpl_vars['num_de_qntdd_produtos']->value!=0) {?> <span class="btn btn-sm btn-danger aviso-balao"><?php echo $_smarty_tpl->tpl_vars['num_de_qntdd_produtos']->value;?>
</span> <?php }?></a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="avise-me") {?> class="active"<?php }?>>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/avise-me" style="position: relative;"><i class="fa fa-bell"></i> Avise-me <?php if ($_smarty_tpl->tpl_vars['existe_avise_me']->value!=0) {?> <span class="btn btn-sm btn-danger aviso-balao"><?php echo $_smarty_tpl->tpl_vars['existe_avise_me']->value;?>
</span> <?php }?></a>
            </li>  
            
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="newsletter_lista") {?> class="active" <?php } else { ?> class="" <?php }?>>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/newsletter-lista"><i class="fa fa-paper-plane"></i> Newsletter</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="aniversariantes-lista") {?> class="active"<?php }?>>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/aniversariantes" style="position: relative;"><i class="fa fa-users"></i> Aniversariantes <?php if ($_smarty_tpl->tpl_vars['existe_aniversariantes']->value!=0) {?> <span class="btn btn-sm btn-danger aviso-balao"><?php echo $_smarty_tpl->tpl_vars['existe_aniversariantes']->value;?>
</span> <?php }?></a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="exportar") {?> class="active"<?php }?>>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/pedidos/exportar"><i class="fa fa-expand"></i> Exportar Pedidos</a>
            </li>
            
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="nota-fiscal") {?> class="active"<?php }?>>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nota-fiscal/exportar" style="position: relative;"><i class="fa fa-expand"></i> Exportar Nota Fiscal<?php if ($_smarty_tpl->tpl_vars['existe_novos_produtos_cadastrados']->value!=0) {?> <span class="btn btn-sm btn-danger aviso-balao"><?php echo $_smarty_tpl->tpl_vars['existe_novos_produtos_cadastrados']->value;?>
</span> <?php }?></a>
            </li>
            
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav><?php }} ?>

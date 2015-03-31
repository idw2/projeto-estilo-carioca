<?php /* Smarty version Smarty-3.1.19, created on 2014-10-15 19:06:48
         compiled from "/home/maria951/public_html/novo/application/views/navbar2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:658105488543eeff8eff8b3-62611592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9aba294bedd1c58ea2a06f3e7f314dbd8ec1b53' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/navbar2.tpl',
      1 => 1412167601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '658105488543eeff8eff8b3-62611592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543eeff9020862_08608434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543eeff9020862_08608434')) {function content_543eeff9020862_08608434($_smarty_tpl) {?><div class="col-lg-12">
    <ul class="nav nav-tabs nav-justified navbar-checkout" role="tablist" style="font-size: 14px">
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="resumo") {?>class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/checkout/">Resumo</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="login") {?>class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/autenticacao/">Login</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="endereco") {?>class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/endereco/">Endereço</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="pagamento") {?>class="active"<?php }?>><a href='/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/pagamento'>Pagamento</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="confirmacao") {?>class="active"<?php }?>><a href='/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/confirmacao'>Confirmação</a></li>
    </ul>
</div><?php }} ?>

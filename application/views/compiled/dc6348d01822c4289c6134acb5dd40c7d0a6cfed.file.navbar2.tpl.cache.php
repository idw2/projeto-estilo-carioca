<?php /* Smarty version Smarty-3.1.19, created on 2015-03-06 21:22:47
         compiled from "/home/estil450/public_html/application/views/navbar2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127416384054fa1aa74c96f8-94435238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc6348d01822c4289c6134acb5dd40c7d0a6cfed' => 
    array (
      0 => '/home/estil450/public_html/application/views/navbar2.tpl',
      1 => 1417455060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127416384054fa1aa74c96f8-94435238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controle' => 0,
    'page' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54fa1aa750b873_26077240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fa1aa750b873_26077240')) {function content_54fa1aa750b873_26077240($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['controle']->value) {?>   

    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs nav-justified navbar-checkout" role="tablist" style="font-size: 14px">
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="meus-pedidos") {?>class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/meus-pedidos/">Meus Pedidos</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="meus-enderecos") {?>class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/endereco/">Meus Endereços</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="meus-dados") {?>class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/meus-dados/">Meus Dados</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="wishlist") {?>class="active"<?php }?>><a href='/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/wishlist'>Wishlist</a></li>
                    
            </ul>
            
        </div>
    </div>

<?php }?><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 14:55:52
         compiled from "/home/maria951/public_html/homolog/application/views/navbar2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1625328747545ba818804943-34560440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '848696f3c9f12a73b5fb277fd7db37b30fd8735f' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/navbar2.tpl',
      1 => 1415280638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1625328747545ba818804943-34560440',
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
  'unifunc' => 'content_545ba81889bf88_12956258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ba81889bf88_12956258')) {function content_545ba81889bf88_12956258($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['controle']->value) {?>   

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

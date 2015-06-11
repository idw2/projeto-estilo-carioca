<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 09:44:18
         compiled from "/home/maria951/public_html/homolog/application/views/admin/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9356393645460a512bbcbe8-20679706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44834d4544b0c532dc00e0c91fcc12b62317b2dc' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/welcome.tpl',
      1 => 1409231623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9356393645460a512bbcbe8-20679706',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460a512c586d1_11767772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460a512c586d1_11767772')) {function content_5460a512c586d1_11767772($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2><span class="label label-default">Bem-vindo</span></h2>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

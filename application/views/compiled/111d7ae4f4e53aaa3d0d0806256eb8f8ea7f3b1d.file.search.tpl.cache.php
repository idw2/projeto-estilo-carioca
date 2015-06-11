<?php /* Smarty version Smarty-3.1.19, created on 2014-10-23 15:19:59
         compiled from "/home/maria951/public_html/novo/application/views/admin/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1835932961544938bfed59c8-12891142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '111d7ae4f4e53aaa3d0d0806256eb8f8ea7f3b1d' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/search.tpl',
      1 => 1411481605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1835932961544938bfed59c8-12891142',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544938bfed7230_37158888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544938bfed7230_37158888')) {function content_544938bfed7230_37158888($_smarty_tpl) {?><form class="navbar-form navbar-right" role="search" method="post">
    <div class="form-group">
        <input type="hidden" name="actionType" value="search"/>
        <input type="text" class="search-input form-control" name="search" placeholder="Pesquisa"/>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>


<?php }} ?>

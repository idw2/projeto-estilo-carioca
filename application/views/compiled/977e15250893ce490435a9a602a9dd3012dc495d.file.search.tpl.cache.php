<?php /* Smarty version Smarty-3.1.19, created on 2014-11-07 10:11:57
         compiled from "/home/maria951/public_html/homolog/application/views/admin/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:248806295545cb70d6c68a4-35689789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '977e15250893ce490435a9a602a9dd3012dc495d' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/search.tpl',
      1 => 1411481605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248806295545cb70d6c68a4-35689789',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545cb70d6c81b4_92231421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545cb70d6c81b4_92231421')) {function content_545cb70d6c81b4_92231421($_smarty_tpl) {?><form class="navbar-form navbar-right" role="search" method="post">
    <div class="form-group">
        <input type="hidden" name="actionType" value="search"/>
        <input type="text" class="search-input form-control" name="search" placeholder="Pesquisa"/>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>


<?php }} ?>

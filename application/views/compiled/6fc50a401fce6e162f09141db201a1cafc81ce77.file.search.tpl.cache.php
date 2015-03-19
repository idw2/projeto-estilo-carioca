<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 19:07:20
         compiled from "/home/estil450/public_html/application/views/admin/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62962140655033568e68aa8-39216308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fc50a401fce6e162f09141db201a1cafc81ce77' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/search.tpl',
      1 => 1425487044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62962140655033568e68aa8-39216308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55033568e6e441_79389510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55033568e6e441_79389510')) {function content_55033568e6e441_79389510($_smarty_tpl) {?><form class="navbar-form navbar-right" role="search" method="post">
    <div class="form-group">
        <input type="hidden" name="actionType" value="search"/>
        <input type="text" class="search-input form-control" name="search" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" placeholder="Pesquisa"/>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>


<?php }} ?>

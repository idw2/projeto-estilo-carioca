<?php /* Smarty version Smarty-3.1.19, created on 2015-03-25 22:19:29
         compiled from "/home/estil450/public_html/application/views/admin/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15356786915513347144e4e4-25873066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '15356786915513347144e4e4-25873066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55133471453308_33102402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55133471453308_33102402')) {function content_55133471453308_33102402($_smarty_tpl) {?><form class="navbar-form navbar-right" role="search" method="post">
    <div class="form-group">
        <input type="hidden" name="actionType" value="search"/>
        <input type="text" class="search-input form-control" name="search" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" placeholder="Pesquisa"/>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>


<?php }} ?>

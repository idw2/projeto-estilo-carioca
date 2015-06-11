<?php /* Smarty version Smarty-3.1.19, created on 2015-03-30 20:50:34
         compiled from "/home/estil450/public_html/homolog/application/views/admin/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5337986405519a90a8117f7-37634007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59bb964779cf6740e69f8ec8f6ff2efcbe1a0dba' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/admin/search.tpl',
      1 => 1425487044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5337986405519a90a8117f7-37634007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5519a90a817764_72299329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5519a90a817764_72299329')) {function content_5519a90a817764_72299329($_smarty_tpl) {?><form class="navbar-form navbar-right" role="search" method="post">
    <div class="form-group">
        <input type="hidden" name="actionType" value="search"/>
        <input type="text" class="search-input form-control" name="search" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" placeholder="Pesquisa"/>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>


<?php }} ?>

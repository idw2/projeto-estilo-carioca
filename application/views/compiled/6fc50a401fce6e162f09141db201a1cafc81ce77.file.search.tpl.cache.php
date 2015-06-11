<?php /* Smarty version Smarty-3.1.19, created on 2015-03-23 18:55:30
         compiled from "/home/estil450/public_html/application/views/admin/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1486352979551061a232e145-23925761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1486352979551061a232e145-23925761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551061a2334799_25098323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551061a2334799_25098323')) {function content_551061a2334799_25098323($_smarty_tpl) {?><form class="navbar-form navbar-right" role="search" method="post">
    <div class="form-group">
        <input type="hidden" name="actionType" value="search"/>
        <input type="text" class="search-input form-control" name="search" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" placeholder="Pesquisa"/>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>


<?php }} ?>

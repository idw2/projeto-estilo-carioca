<?php /* Smarty version Smarty-3.1.19, created on 2015-02-06 13:18:02
         compiled from "/home/estil450/public_html/application/views/politica_privacidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21817300154d4bf0abb4f79-22500414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90307be3411f50bf3955bdc987fd551d4d3e5faa' => 
    array (
      0 => '/home/estil450/public_html/application/views/politica_privacidade.tpl',
      1 => 1423228681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21817300154d4bf0abb4f79-22500414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d4bf0ac1f046_95839128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4bf0ac1f046_95839128')) {function content_54d4bf0ac1f046_95839128($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<div class="container"><hr></div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Política de Privacidade</h2>
                <p class="subtitle">--//--</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>

            </div>
        </div>
    </div>
</section>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>

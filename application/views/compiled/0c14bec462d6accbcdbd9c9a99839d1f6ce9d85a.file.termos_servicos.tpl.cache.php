<?php /* Smarty version Smarty-3.1.19, created on 2015-03-23 21:27:49
         compiled from "/home/estil450/public_html/homolog/application/views/termos_servicos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75988569255108555b32680-72827468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c14bec462d6accbcdbd9c9a99839d1f6ce9d85a' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/termos_servicos.tpl',
      1 => 1424814958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75988569255108555b32680-72827468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55108555bb1cf9_91855497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55108555bb1cf9_91855497')) {function content_55108555bb1cf9_91855497($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container"></div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Termos de Serviço</h2>
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

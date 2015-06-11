<?php /* Smarty version Smarty-3.1.19, created on 2015-03-23 21:27:44
         compiled from "/home/estil450/public_html/homolog/application/views/entrega_devolucao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170126514555108550ba5716-03013183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66f6e776340c61c63fb4e54a7f9eb5a68c9ce95a' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/entrega_devolucao.tpl',
      1 => 1423230070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170126514555108550ba5716-03013183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55108550c01297_20903444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55108550c01297_20903444')) {function content_55108550c01297_20903444($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container"><hr></div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Política de Entrega e Devolução</h2>
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

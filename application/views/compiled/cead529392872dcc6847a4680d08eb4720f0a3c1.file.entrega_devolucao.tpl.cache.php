<?php /* Smarty version Smarty-3.1.19, created on 2015-02-24 21:43:36
         compiled from "/home/estil450/public_html/application/views/entrega_devolucao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163925984754ecf088ee4395-22809896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cead529392872dcc6847a4680d08eb4720f0a3c1' => 
    array (
      0 => '/home/estil450/public_html/application/views/entrega_devolucao.tpl',
      1 => 1423230070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163925984754ecf088ee4395-22809896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ecf089021785_17306987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ecf089021785_17306987')) {function content_54ecf089021785_17306987($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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

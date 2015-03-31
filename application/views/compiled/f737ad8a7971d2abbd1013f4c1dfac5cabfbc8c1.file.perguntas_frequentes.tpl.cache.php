<?php /* Smarty version Smarty-3.1.19, created on 2015-02-06 13:43:44
         compiled from "/home/estil450/public_html/application/views/perguntas_frequentes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192640433654d4c51031e499-35392140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f737ad8a7971d2abbd1013f4c1dfac5cabfbc8c1' => 
    array (
      0 => '/home/estil450/public_html/application/views/perguntas_frequentes.tpl',
      1 => 1423230223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192640433654d4c51031e499-35392140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d4c5103918e9_69881557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4c5103918e9_69881557')) {function content_54d4c5103918e9_69881557($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<div class="container"><hr></div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Perguntas Frequentes</h2>
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

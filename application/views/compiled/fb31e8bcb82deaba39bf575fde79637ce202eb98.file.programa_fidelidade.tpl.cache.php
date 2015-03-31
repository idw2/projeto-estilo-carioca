<?php /* Smarty version Smarty-3.1.19, created on 2015-02-06 13:56:59
         compiled from "/home/estil450/public_html/application/views/programa_fidelidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43966291654d4c82b4018b2-46904825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb31e8bcb82deaba39bf575fde79637ce202eb98' => 
    array (
      0 => '/home/estil450/public_html/application/views/programa_fidelidade.tpl',
      1 => 1423228976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43966291654d4c82b4018b2-46904825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d4c82b4ec0b2_69741140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4c82b4ec0b2_69741140')) {function content_54d4c82b4ec0b2_69741140($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container"><hr></div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Programa de Fidelidade</h2>
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

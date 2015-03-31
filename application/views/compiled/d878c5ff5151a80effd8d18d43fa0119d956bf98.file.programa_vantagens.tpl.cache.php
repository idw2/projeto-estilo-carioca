<?php /* Smarty version Smarty-3.1.19, created on 2015-02-06 13:21:00
         compiled from "/home/estil450/public_html/application/views/programa_vantagens.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188303592154d4bfbca0fd12-09286140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd878c5ff5151a80effd8d18d43fa0119d956bf98' => 
    array (
      0 => '/home/estil450/public_html/application/views/programa_vantagens.tpl',
      1 => 1423228859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188303592154d4bfbca0fd12-09286140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d4bfbcaab979_90403907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4bfbcaab979_90403907')) {function content_54d4bfbcaab979_90403907($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container"><hr></div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Programa de Vantagens</h2>
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

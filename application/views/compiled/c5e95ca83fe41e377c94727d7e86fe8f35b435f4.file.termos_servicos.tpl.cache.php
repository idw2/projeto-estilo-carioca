<?php /* Smarty version Smarty-3.1.19, created on 2015-02-24 21:51:06
         compiled from "/home/estil450/public_html/application/views/termos_servicos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139417226054ecf24a2c4bf3-64377918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5e95ca83fe41e377c94727d7e86fe8f35b435f4' => 
    array (
      0 => '/home/estil450/public_html/application/views/termos_servicos.tpl',
      1 => 1423600192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139417226054ecf24a2c4bf3-64377918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ecf24a320fc0_91185911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ecf24a320fc0_91185911')) {function content_54ecf24a320fc0_91185911($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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

<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 11:26:43
         compiled from "/home/maria951/public_html/novo/application/views/termos_servicos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5950579625447b093f0db37-07314913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29a633323eac32260f6aa40b69cb37a2a2d0f241' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/termos_servicos.tpl',
      1 => 1413983941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5950579625447b093f0db37-07314913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447b09402c4d5_00071877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447b09402c4d5_00071877')) {function content_5447b09402c4d5_00071877($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>Termos</strong> de Serviço
                    </h2>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>

            </div>
        </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

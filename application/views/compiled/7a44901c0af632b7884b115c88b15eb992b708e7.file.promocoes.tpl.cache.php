<?php /* Smarty version Smarty-3.1.19, created on 2015-01-30 23:55:08
         compiled from "/home/maria951/public_html/homolog/application/views/promocoes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113759437054cc6e3cc43103-93640307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a44901c0af632b7884b115c88b15eb992b708e7' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/promocoes.tpl',
      1 => 1417410078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113759437054cc6e3cc43103-93640307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cc6e3ccaf619_65451967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cc6e3ccaf619_65451967')) {function content_54cc6e3ccaf619_65451967($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>Promoções</strong>
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

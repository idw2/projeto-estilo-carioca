<?php /* Smarty version Smarty-3.1.19, created on 2015-01-30 23:56:10
         compiled from "/home/maria951/public_html/homolog/application/views/cuidados_produtos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165663300554cc6e7a064a09-36607223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30c683b8462ce1c5d6fcc597f698282d374a1516' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/cuidados_produtos.tpl',
      1 => 1417410089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165663300554cc6e7a064a09-36607223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cc6e7a0d2370_82920889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cc6e7a0d2370_82920889')) {function content_54cc6e7a0d2370_82920889($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>Cuidado</strong> com os Produtos
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

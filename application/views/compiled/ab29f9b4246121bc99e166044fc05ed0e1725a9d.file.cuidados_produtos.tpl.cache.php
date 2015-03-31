<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 11:23:28
         compiled from "/home/maria951/public_html/novo/application/views/cuidados_produtos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3107302305447afd04a90b6-43590634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab29f9b4246121bc99e166044fc05ed0e1725a9d' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/cuidados_produtos.tpl',
      1 => 1412180543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3107302305447afd04a90b6-43590634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447afd0509314_95736371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447afd0509314_95736371')) {function content_5447afd0509314_95736371($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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

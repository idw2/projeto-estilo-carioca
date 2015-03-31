<?php /* Smarty version Smarty-3.1.19, created on 2015-02-01 19:18:50
         compiled from "/home/maria951/public_html/homolog/application/views/entrega_devolucao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126969999454ced07ad75752-19895613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1f3055022c27d13ef9444913d789cbd8a4cc9d7' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/entrega_devolucao.tpl',
      1 => 1417410084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126969999454ced07ad75752-19895613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ced07adf9c46_34355020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ced07adf9c46_34355020')) {function content_54ced07adf9c46_34355020($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>Política</strong> de Entrega e Devolução
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

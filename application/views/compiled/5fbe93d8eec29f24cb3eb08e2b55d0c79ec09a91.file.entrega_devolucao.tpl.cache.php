<?php /* Smarty version Smarty-3.1.19, created on 2014-10-24 12:29:31
         compiled from "/home/maria951/public_html/novo/application/views/entrega_devolucao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:591859433544a624ba49639-50015813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fbe93d8eec29f24cb3eb08e2b55d0c79ec09a91' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/entrega_devolucao.tpl',
      1 => 1412180521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '591859433544a624ba49639-50015813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a624bac12e9_90487060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a624bac12e9_90487060')) {function content_544a624bac12e9_90487060($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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

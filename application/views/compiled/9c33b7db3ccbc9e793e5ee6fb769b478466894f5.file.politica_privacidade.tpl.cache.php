<?php /* Smarty version Smarty-3.1.19, created on 2014-10-24 12:29:12
         compiled from "/home/maria951/public_html/novo/application/views/politica_privacidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:539005944544a62389da215-53349447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c33b7db3ccbc9e793e5ee6fb769b478466894f5' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/politica_privacidade.tpl',
      1 => 1413984247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '539005944544a62389da215-53349447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a6238a3f634_68748159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a6238a3f634_68748159')) {function content_544a6238a3f634_68748159($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                        <strong>Política</strong> de Privacidade
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

<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 11:17:25
         compiled from "/home/maria951/public_html/novo/application/views/programa_fidelidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2630440025447ae6519c662-01685407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a8ef9727bcc9f29b22d7e2b983a0b5ce362d2ff' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/programa_fidelidade.tpl',
      1 => 1412180440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2630440025447ae6519c662-01685407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447ae65209386_59255979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447ae65209386_59255979')) {function content_5447ae65209386_59255979($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>Programa</strong> de Fidelidade
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

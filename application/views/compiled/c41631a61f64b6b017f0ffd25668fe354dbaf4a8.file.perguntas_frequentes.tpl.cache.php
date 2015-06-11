<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 11:23:35
         compiled from "/home/maria951/public_html/novo/application/views/perguntas_frequentes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2954197175447afd78765b4-66040141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c41631a61f64b6b017f0ffd25668fe354dbaf4a8' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/perguntas_frequentes.tpl',
      1 => 1412180191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2954197175447afd78765b4-66040141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447afd78e5e71_06161103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447afd78e5e71_06161103')) {function content_5447afd78e5e71_06161103($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>Perguntas</strong> Frequentes
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

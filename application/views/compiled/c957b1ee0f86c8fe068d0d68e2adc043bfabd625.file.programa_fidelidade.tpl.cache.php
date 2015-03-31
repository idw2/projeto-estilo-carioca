<?php /* Smarty version Smarty-3.1.19, created on 2014-10-29 14:48:24
         compiled from "/home/maria951/public_html/homolog/application/views/programa_fidelidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190515864054511a581844e7-01523855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c957b1ee0f86c8fe068d0d68e2adc043bfabd625' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/programa_fidelidade.tpl',
      1 => 1412180440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190515864054511a581844e7-01523855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54511a5820a035_69945274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54511a5820a035_69945274')) {function content_54511a5820a035_69945274($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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

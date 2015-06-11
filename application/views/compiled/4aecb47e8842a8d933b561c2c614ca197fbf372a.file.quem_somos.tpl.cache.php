<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 11:10:29
         compiled from "/home/maria951/public_html/homolog/application/views/quem_somos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15490383875460b945601401-39108573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aecb47e8842a8d933b561c2c614ca197fbf372a' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/quem_somos.tpl',
      1 => 1413983065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15490383875460b945601401-39108573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460b9456a7835_55621063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460b9456a7835_55621063')) {function content_5460b9456a7835_55621063($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>Quem</strong> somos
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

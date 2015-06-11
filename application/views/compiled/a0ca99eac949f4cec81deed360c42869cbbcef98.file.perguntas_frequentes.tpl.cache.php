<?php /* Smarty version Smarty-3.1.19, created on 2015-01-30 23:56:58
         compiled from "/home/maria951/public_html/homolog/application/views/perguntas_frequentes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23539421254cc6eaa3df4c1-75677080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0ca99eac949f4cec81deed360c42869cbbcef98' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/perguntas_frequentes.tpl',
      1 => 1417410105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23539421254cc6eaa3df4c1-75677080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cc6eaa41ffc7_83825261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cc6eaa41ffc7_83825261')) {function content_54cc6eaa41ffc7_83825261($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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

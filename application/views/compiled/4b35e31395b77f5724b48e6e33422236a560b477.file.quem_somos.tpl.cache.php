<?php /* Smarty version Smarty-3.1.19, created on 2015-03-23 17:19:25
         compiled from "/home/estil450/public_html/application/views/quem_somos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31884134255104b1db5fe18-16691323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b35e31395b77f5724b48e6e33422236a560b477' => 
    array (
      0 => '/home/estil450/public_html/application/views/quem_somos.tpl',
      1 => 1425397545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31884134255104b1db5fe18-16691323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55104b1dc1e5f7_96497367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55104b1dc1e5f7_96497367')) {function content_55104b1dc1e5f7_96497367($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="section">
    <div style="margin-bottom: 50px;" class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Quem somos</h2>
                <p class="subtitle">--//--</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>

            </div>
        </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

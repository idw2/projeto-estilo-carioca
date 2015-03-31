<?php /* Smarty version Smarty-3.1.19, created on 2015-02-06 17:16:45
         compiled from "/home/estil450/public_html/application/views/promocoes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19412482654d4f6fd61bcd2-48898602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '390f44e99f831e33884e06f9cfd710c25e559879' => 
    array (
      0 => '/home/estil450/public_html/application/views/promocoes.tpl',
      1 => 1423228824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19412482654d4f6fd61bcd2-48898602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d4f6fd683235_66744135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4f6fd683235_66744135')) {function content_54d4f6fd683235_66744135($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container"><hr></div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Promoções</h2>
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

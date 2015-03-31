<?php /* Smarty version Smarty-3.1.19, created on 2015-02-06 13:19:49
         compiled from "/home/estil450/public_html/application/views/procon_rj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5957974654d4bf7590d838-62961391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ce893f69182921ba6475f18f0b57d985844ebaa' => 
    array (
      0 => '/home/estil450/public_html/application/views/procon_rj.tpl',
      1 => 1423228788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5957974654d4bf7590d838-62961391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d4bf75980aa1_80188656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4bf75980aa1_80188656')) {function content_54d4bf75980aa1_80188656($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container"><hr></div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">PROCON-RJ</h2>
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

<?php /* Smarty version Smarty-3.1.19, created on 2014-10-08 17:06:45
         compiled from "/home/maria951/public_html/novo/application/views/forma_pagamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1572120910543599552fdf46-05843805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49e09e4d808d7b67cb6e9a54b65362c20f5c0bb4' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/forma_pagamento.tpl',
      1 => 1412180236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1572120910543599552fdf46-05843805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5435995535ba34_37937354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5435995535ba34_37937354')) {function content_5435995535ba34_37937354($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>Forma</strong> de Pagamento
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

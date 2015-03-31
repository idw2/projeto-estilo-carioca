<?php /* Smarty version Smarty-3.1.19, created on 2014-10-23 12:28:14
         compiled from "/home/maria951/public_html/novo/application/views/promocoes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11145896865449107e8ed5c5-45380857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '489422592cf79b9266599c91195f04021e0bfe36' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/promocoes.tpl',
      1 => 1413983175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11145896865449107e8ed5c5-45380857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5449107e94a7e4_13159560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5449107e94a7e4_13159560')) {function content_5449107e94a7e4_13159560($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>Promoções</strong>
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

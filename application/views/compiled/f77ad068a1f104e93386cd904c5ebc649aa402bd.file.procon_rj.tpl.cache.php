<?php /* Smarty version Smarty-3.1.19, created on 2014-10-24 12:30:22
         compiled from "/home/maria951/public_html/novo/application/views/procon_rj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1477707875544a627e8280c3-21146245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f77ad068a1f104e93386cd904c5ebc649aa402bd' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/procon_rj.tpl',
      1 => 1412180466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1477707875544a627e8280c3-21146245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a627e88bb28_78496404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a627e88bb28_78496404')) {function content_544a627e88bb28_78496404($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>PROCON-RJ</strong>
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

<?php /* Smarty version Smarty-3.1.19, created on 2014-10-24 12:28:32
         compiled from "/home/maria951/public_html/novo/application/views/quem_somos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285298904544a62103bb993-93070709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f4bdb4f668452e288e1724ac658525034e222f2' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/quem_somos.tpl',
      1 => 1413983065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285298904544a62103bb993-93070709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a621046fbc2_25635749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a621046fbc2_25635749')) {function content_544a621046fbc2_25635749($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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

<?php /* Smarty version Smarty-3.1.19, created on 2015-01-30 23:55:14
         compiled from "/home/maria951/public_html/homolog/application/views/procon_rj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122129330854cc6e4229f2d8-91974386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb6676bee41165a78312f3104a2b713b7a3c3a60' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/procon_rj.tpl',
      1 => 1417410022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122129330854cc6e4229f2d8-91974386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cc6e4230ed33_95778968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cc6e4230ed33_95778968')) {function content_54cc6e4230ed33_95778968($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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

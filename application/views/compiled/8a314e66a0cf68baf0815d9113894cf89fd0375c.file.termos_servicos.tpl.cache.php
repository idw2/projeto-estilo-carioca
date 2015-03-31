<?php /* Smarty version Smarty-3.1.19, created on 2015-01-30 23:55:38
         compiled from "/home/maria951/public_html/homolog/application/views/termos_servicos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180077252054cc6e5a688736-21726652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a314e66a0cf68baf0815d9113894cf89fd0375c' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/termos_servicos.tpl',
      1 => 1417410057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180077252054cc6e5a688736-21726652',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cc6e5a6d4e68_09329914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cc6e5a6d4e68_09329914')) {function content_54cc6e5a6d4e68_09329914($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>Termos</strong> de Serviço
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

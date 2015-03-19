<?php /* Smarty version Smarty-3.1.19, created on 2015-02-04 16:35:29
         compiled from "/home/maria951/public_html/homolog/application/views/programa_vantagens.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182638786054d29eb12d14e8-20980541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3379c629abffb61a64a4ba190f1e65c378a701a' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/programa_vantagens.tpl',
      1 => 1417410099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182638786054d29eb12d14e8-20980541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d29eb131c423_60349877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d29eb131c423_60349877')) {function content_54d29eb131c423_60349877($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>
                         <strong>Programa</strong> de Vantagens
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

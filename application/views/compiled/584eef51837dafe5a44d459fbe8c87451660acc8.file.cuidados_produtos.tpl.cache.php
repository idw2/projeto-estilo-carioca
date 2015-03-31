<?php /* Smarty version Smarty-3.1.19, created on 2015-02-06 13:44:50
         compiled from "/home/estil450/public_html/application/views/cuidados_produtos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7831436954d4c55202d0c9-88167451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '584eef51837dafe5a44d459fbe8c87451660acc8' => 
    array (
      0 => '/home/estil450/public_html/application/views/cuidados_produtos.tpl',
      1 => 1423230280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7831436954d4c55202d0c9-88167451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d4c55208a913_49992330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4c55208a913_49992330')) {function content_54d4c55208a913_49992330($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<div class="container"><hr></div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Cuidado com os Produtos</h2>
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

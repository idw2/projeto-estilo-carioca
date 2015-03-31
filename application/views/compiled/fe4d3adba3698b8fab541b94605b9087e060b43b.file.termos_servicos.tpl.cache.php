<?php /* Smarty version Smarty-3.1.19, created on 2015-02-26 19:24:53
         compiled from "/home/estil450/public_html/application/views/admin/termos_servicos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17936800654ef7305226151-92512323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe4d3adba3698b8fab541b94605b9087e060b43b' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/termos_servicos.tpl',
      1 => 1417206320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17936800654ef7305226151-92512323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ef730529e555_36507721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef730529e555_36507721')) {function content_54ef730529e555_36507721($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <form class="navbar-form navbar-left" style="width: 100%" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/termos_servicos" method="post">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h2><span class="label label-default">Termos de Serviço</span></h2>
                    </div>
                    <br/>
                    <div class="col-md-6 text-right">
                        <a href="#" onclick="javascript:window.history.go(-1)" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                    </div>
                </div>
                <br/>
                <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo"><?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>
</textarea></p>
                <p><button type="submit" class="btn btn-primary btn-primary-maria" name="enviar">ENVIAR</button></p>

            </form>

        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/tinymce_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

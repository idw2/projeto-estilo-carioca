<?php /* Smarty version Smarty-3.1.19, created on 2014-10-23 12:50:44
         compiled from "/home/maria951/public_html/novo/application/views/admin/perguntas_frequentes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:706038063544915c4592e92-08734031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db5a6de4694cb4987a7fd1db5f402f423e8377f4' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/perguntas_frequentes.tpl',
      1 => 1409585152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '706038063544915c4592e92-08734031',
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
  'unifunc' => 'content_544915c461fde7_00395208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544915c461fde7_00395208')) {function content_544915c461fde7_00395208($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/html/perguntas_frequentes" method="post">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h2><span class="label label-default">Perguntas Frequentes</span></h2>
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

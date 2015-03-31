<?php /* Smarty version Smarty-3.1.19, created on 2014-10-23 14:51:50
         compiled from "/home/maria951/public_html/novo/application/views/admin/programa_fidelidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206693552054493226e840b8-55634278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9d0cf0d32863b042ee67c3612770cf9068189db' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/programa_fidelidade.tpl',
      1 => 1409581347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206693552054493226e840b8-55634278',
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
  'unifunc' => 'content_54493226efa6a8_04877477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54493226efa6a8_04877477')) {function content_54493226efa6a8_04877477($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/html/programa_fidelidade" method="post">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h2><span class="label label-default">Programa de Fidelidade</span></h2>
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

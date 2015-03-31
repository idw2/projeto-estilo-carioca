<?php /* Smarty version Smarty-3.1.19, created on 2014-08-30 12:30:43
         compiled from "/home/maria951/public_html/novo/application/views/admin/empresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20830871295401ee232b05b5-27491962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd725ffb8b2908d80eca576bf5c04f5af2937fe21' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/empresa.tpl',
      1 => 1409231603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20830871295401ee232b05b5-27491962',
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
  'unifunc' => 'content_5401ee233fa029_98374336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5401ee233fa029_98374336')) {function content_5401ee233fa029_98374336($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/html/empresa" method="post">
                <h2><span class="label label-default">Empresa</span></h2>
                <br/>
                <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo"><?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>
</textarea></p>
                <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

            </form>

        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/tinymce_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

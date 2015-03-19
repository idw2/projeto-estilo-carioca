<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 14:01:27
         compiled from "/home/maria951/public_html/novo/application/views/admin/alterar_senha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1892091632542990676db1e5-47815177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e7b71ce95c1f924e19e567cfa985e943a0e1186' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/alterar_senha.tpl',
      1 => 1409597966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1892091632542990676db1e5-47815177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'sucesso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542990677aa182_19703991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542990677aa182_19703991')) {function content_542990677aa182_19703991($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/admin/alterar_senha" method="post">
                <h2><span class="label label-default">Alterar senha</span></h2>
                <br/>
                <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>

                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

                <?php } else { ?>

                    <?php if ($_smarty_tpl->tpl_vars['sucesso']->value=="FALSE") {?>
                        <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                    <?php } else { ?>
                        <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>	
                    <?php }?>

                <?php }?>

                <br/>
                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                    <input type="password" class="form-control" id="senha_atual" name="senha_atual" placeholder="Senha atual"/>
                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                </div>	
                <br/>
                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                    <input type="password" class="form-control" id="senha_nova" name="senha_nova" placeholder="Nova senha"/>
                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                </div>	
                <br/>
                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                    <input type="password" class="form-control" id="senha_repetir" name="senha_repetir" placeholder="Repetir senha"/>
                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                </div>	
                <br/>
                <div class="input-group input-group-lg">
                    <button type="submit" class="btn btn-primary btn-lg btn-primary-maria" role="button">Entrar</button>
                </div>

            </form>

        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/tinymce_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

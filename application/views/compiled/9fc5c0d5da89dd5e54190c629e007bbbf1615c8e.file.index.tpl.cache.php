<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 13:08:00
         compiled from "/home/maria951/public_html/homolog/application/views/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2727680595460d4d031bab6-34634708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fc5c0d5da89dd5e54190c629e007bbbf1615c8e' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/index.tpl',
      1 => 1414178463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2727680595460d4d031bab6-34634708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
    'sucesso' => 0,
    'web_files' => 0,
    'language' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460d4d040ec21_82066607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d4d040ec21_82066607')) {function content_5460d4d040ec21_82066607($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">
    <div class="row box-login">

        <div class="col-sm-4"> </div>
        <div class="col-sm-4">

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

            <img class="area-restrita img-responsive center-block" src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/logo.png" alt="" border="0" title="" /><br/>
            <form class="form-horizontal" role="form" method="post" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/login">
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/>
                    <span class="input-group-addon"><i class="fa fa-reply-all">&nbsp</i></span>
                </div>
                <br/>
                <div class="input-group input-group-lg">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha"/>
                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                </div>	
                <br/>
                <div class="input-group input-group-lg">
                    <button type="submit" class="btn btn-primary btn-lg btn-primary-maria" role="button">Entrar</button>
                </div>						
            </form>
        </div>
        <div class="col-sm-4">  </div>

    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

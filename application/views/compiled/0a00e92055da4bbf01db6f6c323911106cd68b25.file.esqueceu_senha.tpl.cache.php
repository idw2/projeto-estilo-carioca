<?php /* Smarty version Smarty-3.1.19, created on 2014-10-08 11:35:19
         compiled from "/home/maria951/public_html/novo/application/views/esqueceu_senha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177780106954354ba7425448-92403623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a00e92055da4bbf01db6f6c323911106cd68b25' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/esqueceu_senha.tpl',
      1 => 1410963452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177780106954354ba7425448-92403623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54354ba74cc684_86062369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54354ba74cc684_86062369')) {function content_54354ba74cc684_86062369($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">
    <div class="col-md-6">
    <form class="navbar-form navbar-left" style="width: 100%" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/esqueceu_senha" method="post">

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

        <h2><span class="label label-default">Recuperar senha</span></h2>
        <br/>

        <p><input type="text" class="form-control" style="min-width: 60%" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail" /></p>
        <br/>

        <p>
            <button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button>
            <span class="input-group"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/autenticacao/">» Acessar conta?</a></span>  
        </p>

    </form>
</div>

<div class="col-md-6">

    <div class="jumbotron">
        <div class="container">

            <!-- h1 e p que já tínhamos -->
            <h2>Por que recuperar senha?</h2>
            <br/>
            <p>A sua conta lhe permite realizar compras de forma segura.<br/>
            <p>Lhe enviaremos um e-mail com informações para a recuperação de sua senha.<br/>

        </div>
    </div>
</div> 
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

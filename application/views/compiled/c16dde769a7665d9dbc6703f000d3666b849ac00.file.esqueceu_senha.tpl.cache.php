<?php /* Smarty version Smarty-3.1.19, created on 2014-10-29 14:50:06
         compiled from "/home/maria951/public_html/homolog/application/views/esqueceu_senha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142064426854511abe5893b3-35801694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c16dde769a7665d9dbc6703f000d3666b849ac00' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/esqueceu_senha.tpl',
      1 => 1410963452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142064426854511abe5893b3-35801694',
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
  'unifunc' => 'content_54511abe6e1313_74746890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54511abe6e1313_74746890')) {function content_54511abe6e1313_74746890($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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

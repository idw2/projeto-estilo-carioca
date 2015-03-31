<?php /* Smarty version Smarty-3.1.19, created on 2015-03-02 14:46:05
         compiled from "/home/estil450/public_html/application/views/esqueceu_senha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72072825854f477ad4f7b75-74331896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e2a590235ef624477f8c0ff7398c2b3c5e60f7e' => 
    array (
      0 => '/home/estil450/public_html/application/views/esqueceu_senha.tpl',
      1 => 1425307144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72072825854f477ad4f7b75-74331896',
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
  'unifunc' => 'content_54f477ad5cab27_10678038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f477ad5cab27_10678038')) {function content_54f477ad5cab27_10678038($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container" style="padding-top: 100px; padding-bottom: 150px;">
    <div class="col-md-6">
    <form class="navbar-form navbar-left" style="width: 100%" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/esqueceu-senha" method="post">

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

        <h3 style="margin: 16px 0 12px">Recuperar senha</h3>
        <br/>

        <p><input type="text" class="form-control" style="min-width: 60%" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail" /></p>
        <br/>

        <p>
            <button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button>
            <span class="input-group"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/login-cadastro/">» Acessar conta?</a></span>  
        </p>

    </form>
</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

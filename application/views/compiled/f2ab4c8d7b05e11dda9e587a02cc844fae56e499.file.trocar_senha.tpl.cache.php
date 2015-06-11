<?php /* Smarty version Smarty-3.1.19, created on 2014-12-09 09:10:45
         compiled from "/home/maria951/public_html/homolog/application/views/trocar_senha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:505773464548710f5c41250-32602365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2ab4c8d7b05e11dda9e587a02cc844fae56e499' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/trocar_senha.tpl',
      1 => 1417410111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '505773464548710f5c41250-32602365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'codcadastro' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'senha' => 0,
    'repetir_senha' => 0,
    'novo_lembrete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548710f5ce8742_12060716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548710f5ce8742_12060716')) {function content_548710f5ce8742_12060716($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container" style="padding-top: 50px">
    <div class="col-md-6">
    <form class="navbar-form navbar-left" style="width: 100%" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/trocar-senha/codigo/<?php echo $_smarty_tpl->tpl_vars['codcadastro']->value;?>
" method="post">

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

        <h3 style="margin: 16px 0 12px">Trocar senha</h3>
        <br/>				
        <p>
        <div class="input-group">
            <input type="password" class="form-control" id="senha" name="senha" value="<?php echo $_smarty_tpl->tpl_vars['senha']->value;?>
" autofocus="1" placeholder="Nova senha"/>
            <span class="input-group-addon"><span class="glyphicon glyphicon-cog"></span></span>
        </div>		
        </p>
        <p>
        <div class="input-group">
            <input type="password" class="form-control" id="repetir_senha" name="repetir_senha" value="<?php echo $_smarty_tpl->tpl_vars['repetir_senha']->value;?>
" autofocus="1" placeholder="Repetir senha"/>
            <span class="input-group-addon"><span class="glyphicon glyphicon-cog"></span></span>
        </div>		
        </p>
        <p>
        <div class="input-group">
            <input type="text" class="form-control" id="novo_lembrete" name="novo_lembrete" value="<?php echo $_smarty_tpl->tpl_vars['novo_lembrete']->value;?>
" autofocus="1" placeholder="Novo lembrete"/>
            <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
        </div>
        </p>
        <p>
            <button type="submit" class="btn btn-primary" name="enviar">ALTERAR</button>
            <span class="input-group"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/login-cadastro/">» Acessar conta?</a></span>  
        </p>

    </form>
</div>            
<div class="col-md-6">

    <div class="jumbotron">
        <div class="container">

            <!-- h1 e p que já tínhamos -->
            <h2>Parabéns!</h2>
            <br/>
            <p>Você solicitou a alteração de sua senha.<br/>
            <p>É obrigatório informar uma dica como lembrete para o cadastro da nova senha.<br/>

        </div>
    </div>
</div> 
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

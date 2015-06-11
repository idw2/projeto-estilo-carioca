<?php /* Smarty version Smarty-3.1.19, created on 2015-03-31 20:16:43
         compiled from "/home/estil450/public_html/homolog/application/views/autenticacao2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1210706548551af29b6f4a42-99339287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfe2b8780c5ac481926aba9a0d7cec9335a08f7c' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/autenticacao2.tpl',
      1 => 1425308884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1210706548551af29b6f4a42-99339287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controle' => 0,
    'msg_erro' => 0,
    'email' => 0,
    'language' => 0,
    'msg_erro_login' => 0,
    'email_login' => 0,
    'web_files' => 0,
    'email_conta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551af29b7cd849_35872343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551af29b7cd849_35872343')) {function content_551af29b7cd849_35872343($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>




<div class="container"></div>
<section class="section">
    <div class="container" style="margin-bottom: 7em;">
        <div class="row">
            <div class="section-title">
                <h2 class="title">ÁREA DO CLIENTE</h2>
                <p class="subtitle">--//--</p>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <?php if ($_smarty_tpl->tpl_vars['controle']->value) {?>   


                        <div class="row">       
                            <div class="col-sm-4">    
                                <form class="navbar-form navbar-left" style="width: 100%" onsubmit="return false" method="post">
                                    <?php if ($_smarty_tpl->tpl_vars['msg_erro']->value!='') {?>
                                        <div class="alert alert-info" role="alert" style="font-size: 15px;"><?php echo $_smarty_tpl->tpl_vars['msg_erro']->value;?>
</div>
                                    <?php }?>
                                    <input type="hidden" name="actionType" value="criar_conta"/>
                                    
                                    <p>Você está logado pelo email abaixo!</p>
                                    <p><input type="text" class="form-control" style="min-width: 98%" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail" readonly="readonly"/></p>
                                    <p>
                                        <span class="btn btn-default" onclick="window.location = '/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/sair/'">Sair ou acessar com outra conta!</a>
                                            <input type="hidden" id="EXISTE_USER_LOGADO" value="SIM">
                                        </span>
                                        
                                </form>
                            </div>
                        </div>


                    <?php } else { ?> 

                        <div class="row">
                            <div class="col-sm-5 col-sm-push-1">
                                <div class="auth-form-wrapper">
                                    <h3 class="auth-form-title">Já é cadastrado?</h3>
                                    <form name="form-autenticacao" id="form-autenticacao" class="" method="post">
                                        <?php if ($_smarty_tpl->tpl_vars['msg_erro_login']->value!='') {?>
                                            <div class="alert alert-info" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg_erro_login']->value;?>
</div>
                                        <?php }?>
                                        <input type="hidden" name="actionType" class="actionType-criar-conta" value="login"/>
                                        <p><input type="text" class="form-control email-autenticacao" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email_login']->value;?>
" placeholder="E-mail"/></p>
                                        <p><input type="password" class="form-control  senha-autenticacao" id="senha" name="senha" maxlength="70" value="" placeholder="Senha"/></p>
                                        <p>
                                            <button type="submit" class="btn btn-primary btn-primary-maria" name="enviar" style="margin-right: 5px;">Entrar</button> <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/esqueceu-senha/">Esqueceu sua senha?</a>
                                            <span class="load-autenticacao hide"><img src='<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style='opacity:1; width: 4%'/></span>
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-5 col-sm-push-1">
                                <div class="auth-form-wrapper">
                                    <h3 class="auth-form-title">Cadastre-se aqui.</h3>
                                    <div class="criar-conta">
                                        <form name="form-criar-conta" id="form-criar-conta" method="post">
                                            <?php if ($_smarty_tpl->tpl_vars['msg_erro']->value!='') {?>
                                                <div class="alert alert-info" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg_erro']->value;?>
</div>
                                            <?php }?>
                                            <label style="margin-bottom: 27px;">Por favor, entre com seu endereço de e-mail para criar uma conta!</label>
                                            <input type="hidden" name="actionType" class="actionType-criar-conta" value="criar_conta"/>
                                            <p><input type="email" class="form-control email-criar-conta" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email_conta']->value;?>
" placeholder="E-mail"/></p>
                                            <p>
                                                <button type="buttom" class="btn btn-primary btn-primary-maria" name="enviar">Criar conta</button>
                                                <span class="load-criar-conta hide"><img src='<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style='opacity:1; width: 4%'/></span>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php }?> 
                </div>
            </div>
        </div>

    </div>
</section>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

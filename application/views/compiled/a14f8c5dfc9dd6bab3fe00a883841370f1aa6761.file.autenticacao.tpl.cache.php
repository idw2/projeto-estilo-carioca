<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 13:15:51
         compiled from "/home/maria951/public_html/homolog/application/views/autenticacao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16412644685460d6a7d30335-50847806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a14f8c5dfc9dd6bab3fe00a883841370f1aa6761' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/autenticacao.tpl',
      1 => 1415115834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16412644685460d6a7d30335-50847806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controle' => 0,
    'msg_erro' => 0,
    'saudacao' => 0,
    'nome' => 0,
    'language' => 0,
    'msg_erro_login' => 0,
    'email_login' => 0,
    'web_files' => 0,
    'email_conta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460d6a7e0e4e6_52081418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d6a7e0e4e6_52081418')) {function content_5460d6a7e0e4e6_52081418($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['controle']->value) {?>   
    <div class="row">       
        <div class="col-lg-12">    
            <form class="form" onsubmit="return false" method="post">
                <?php if ($_smarty_tpl->tpl_vars['msg_erro']->value!='') {?>
                    <div class="alert alert-info" role="alert" style="font-size: 15px;"><?php echo $_smarty_tpl->tpl_vars['msg_erro']->value;?>
</div>
                <?php }?>
                <input type="hidden" name="actionType" value="criar_conta"/>
                <h3><?php echo $_smarty_tpl->tpl_vars['saudacao']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
!</h3>
                <p>Veja como é fácil adquirir nossos produtos e serviços.</p>
                
                <p>
                    <span class="btn btn-default" onclick="window.location = '/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/sair/'">Sair e acessar com outra conta!
                        <input type="hidden" id="EXISTE_USER_LOGADO" value="SIM">
                    </span>
                    
                </p>
            </form>
        </div>
    </div>

<?php } else { ?> 

    <div class="row">       

        <div class="col-sm-6">
            <div class="auth-form-wrapper">
                <h3 class="auth-form-title">Já é cadastrado?</h3>
                <form name="form-autenticacao" id="form-autenticacao" class="" onsubmit="return false" method="post" >
                    <?php if ($_smarty_tpl->tpl_vars['msg_erro_login']->value!='') {?>
                        <div class="alert alert-info" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg_erro_login']->value;?>
</div>
                    <?php }?>
                    <input type="hidden" name="actionType" class="actionType-criar-conta" value="login"/>
                    <p><input type="text" class="form-control email-autenticacao" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email_login']->value;?>
" placeholder="E-mail"/></p>
                    <p><input type="password" class="form-control  senha-autenticacao" id="senha" name="senha" maxlength="70" value="" placeholder="Senha"/></p>
                    <p>
                        <button type="submit" class="btn btn-primary btn-primary-maria" name="enviar" onclick="javascript:autenticacao();" style="margin-right: 5px;">Entrar</button> <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/esqueceu_senha/">Esqueceu sua senha?</a>
                        <span class="load-autenticacao hide"><img src='<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style='opacity:1; width: 4%'/></span>
                    </p>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="auth-form-wrapper">
                <h3 class="auth-form-title">Cadastre-se aqui.</h3>
                <div class="criar-conta">
                    <form name="form-criar-conta" id="form-criar-conta" onsubmit="return false" method="post">
                        <?php if ($_smarty_tpl->tpl_vars['msg_erro']->value!='') {?>
                            <div class="alert alert-info" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg_erro']->value;?>
</div>
                        <?php }?>
                        <label>Por favor, entre com seu endereço de e-mail para criar uma conta!</label>
                        <input type="hidden" name="actionType" class="actionType-criar-conta" value="criar_conta"/>
                        <p><input type="email" class="form-control email-criar-conta" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email_conta']->value;?>
" placeholder="E-mail"/></p>
                        <p>
                            <button type="buttom" class="btn btn-primary btn-primary-maria"  onclick="javascript:criar_conta();" name="enviar">Criar conta</button>
                            <span class="load-criar-conta hide"><img src='<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style='opacity:1; width: 4%'/></span>
                        </p>
                    </form>
                </div>
            </div>
        </div>

    </div>
<?php }?>                           
<?php }} ?>

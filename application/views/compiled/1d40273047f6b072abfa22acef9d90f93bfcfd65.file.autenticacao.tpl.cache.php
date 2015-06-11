<?php /* Smarty version Smarty-3.1.19, created on 2015-03-17 21:57:04
         compiled from "/home/estil450/public_html/application/views/autenticacao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15590054655508a33002ca74-52461513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d40273047f6b072abfa22acef9d90f93bfcfd65' => 
    array (
      0 => '/home/estil450/public_html/application/views/autenticacao.tpl',
      1 => 1425511154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15590054655508a33002ca74-52461513',
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
  'unifunc' => 'content_5508a3300d67d5_94329958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508a3300d67d5_94329958')) {function content_5508a3300d67d5_94329958($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['controle']->value) {?>   
    <div class="row">       
        <div class="col-lg-12">    
            <form class="form" onsubmit="return false" method="post">
                <?php if ($_smarty_tpl->tpl_vars['msg_erro']->value!='') {?>
                    <div class="alert alert-info" role="alert" style="font-size: 15px;"><?php echo $_smarty_tpl->tpl_vars['msg_erro']->value;?>
</div>
                <?php }?>
                <input type="hidden" name="actionType" value="criar_conta"/>
                <h3 style="margin-top: 15px; margin-left: 20px; text-align: left;"><?php echo $_smarty_tpl->tpl_vars['saudacao']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
!</h3>
                <p style="margin-top: -5px; margin-left: 20px; text-align: left;">Veja como é fácil adquirir nossos produtos e serviços.</p>
                
                <p>
                    
                    <span class="btn btn-default hide" onclick="window.location = '/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
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
/conta/esqueceu_senha/">Esqueceu sua senha?</a>
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
                        <label >Por favor, entre com seu endereço de e-mail para criar uma conta!</label>
                        
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

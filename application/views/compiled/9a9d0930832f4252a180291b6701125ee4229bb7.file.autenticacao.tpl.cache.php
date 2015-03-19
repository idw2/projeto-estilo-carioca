<?php /* Smarty version Smarty-3.1.19, created on 2014-10-23 15:08:08
         compiled from "/home/maria951/public_html/novo/application/views/autenticacao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2120340477544935f82556b1-70379004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a9d0930832f4252a180291b6701125ee4229bb7' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/autenticacao.tpl',
      1 => 1413239214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2120340477544935f82556b1-70379004',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controle' => 0,
    'msg_erro' => 0,
    'saudacao' => 0,
    'nome' => 0,
    'email' => 0,
    'language' => 0,
    'email_conta' => 0,
    'msg_erro_login' => 0,
    'email_login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544935f84348c4_79338848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544935f84348c4_79338848')) {function content_544935f84348c4_79338848($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['controle']->value) {?>   
    <div class="row">       
        <div class="col-lg-12">    
            <div class="panel panel-primary">
                <div class="panel-body">
                    <form class="navbar-form navbar-left" style="width: 100%" onsubmit="return false" method="post">
                        <?php if ($_smarty_tpl->tpl_vars['msg_erro']->value!='') {?>
                            <div class="alert alert-info" role="alert" style="font-size: 15px;"><?php echo $_smarty_tpl->tpl_vars['msg_erro']->value;?>
</div>
                        <?php }?>
                        <input type="hidden" name="actionType" value="criar_conta"/>
                        <h3><?php echo $_smarty_tpl->tpl_vars['saudacao']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
!</h3>
                        <p>Veja como é fácil adquirir nossos produtos e serviços.</p>
                        <p><input type="text" class="form-control" style="min-width: 40%" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail" readonly="readonly"/></p>
                        <p>
                            <span class="btn btn-default" onclick="window.location='/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/sair/'">Sair e acessar com outra conta!</a>
                            <input type="hidden" id="EXISTE_USER_LOGADO" value="SIM">
                        </span>

                    </form>
                </div>
            </div>
        </div>
    </div>


<?php } else { ?> 

    <div class="row">       
        <div class="col-lg-6">    
            <div class="panel panel-default">    
                <table class="table" style="font-size: 14px">
                    <thead>
                        <tr>
                            <th>Criar uma conta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="criar-conta">
                                <form name="form-criar-conta" id="form-criar-conta" class="navbar-form navbar-left" style="width: 100%" onsubmit="return false" method="post">
                                    <?php if ($_smarty_tpl->tpl_vars['msg_erro']->value!='') {?>
                                        <div class="alert alert-info" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg_erro']->value;?>
</div>
                                    <?php }?>
                                    <label>Por favor, entre com seu endereço de e-mail para criar uma conta!</label>
                                    <input type="hidden" name="actionType" class="actionType-criar-conta" value="criar_conta"/>
                                    <p><input type="text" class="form-control email-criar-conta" style="max-width: 47%" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email_conta']->value;?>
" placeholder="E-mail"/></p>
                                    <p>
                                        <button type="buttom" class="btn btn-primary btn-primary-maria" name="enviar" onclick="javascript:criar_conta();">Criar conta</button>
                                        <span class="load-criar-conta hide"><img src='/web-files/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style='opacity:1; width: 4%'/></span>
                                    </p>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-6">    
            <div class="panel panel-default">    
                <table class="table" style="font-size: 14px">
                    <thead>
                        <tr>
                            <th>Já está registrado?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form name="form-autenticacao" id="form-autenticacao" class="navbar-form navbar-left" style="width: 100%" onsubmit="return false"  method="post">
                                    <?php if ($_smarty_tpl->tpl_vars['msg_erro_login']->value!='') {?>
                                        <div class="alert alert-info" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg_erro_login']->value;?>
</div>
                                    <?php }?>
                                    <p><input type="text" class="form-control email-autenticacao" style="max-width: 47%" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email_login']->value;?>
" placeholder="E-mail"/></p>
                                    <p><input type="password" class="form-control  senha-autenticacao" style="max-width: 47%" id="senha" name="senha" maxlength="70" value="" placeholder="Senha"/></p>
                                    <p>
                                        <button type="submit" class="btn btn-primary btn-primary-maria" name="enviar" onclick="javascript:autenticacao();">Entrar</button>
                                        <span class="load-autenticacao hide"><img src='/web-files/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style='opacity:1; width: 4%'/></span>
                                    </p>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/esqueceu_senha/">Esqueceu sua senha?</a>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
<?php }?>                           
    <?php }} ?>

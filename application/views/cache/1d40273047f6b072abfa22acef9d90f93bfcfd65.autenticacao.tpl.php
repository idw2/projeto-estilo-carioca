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
  'unifunc' => 'content_5508a3300dce22_89822372',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508a3300dce22_89822372')) {function content_5508a3300dce22_89822372($_smarty_tpl) {?> 

    <div class="row">       

        <div class="col-sm-6">
            <div class="auth-form-wrapper">
                <h3 class="auth-form-title">Já é cadastrado?</h3>
                <form name="form-autenticacao" id="form-autenticacao" class="" onsubmit="return false" method="post" >
                                        <input type="hidden" name="actionType" class="actionType-criar-conta" value="login"/>
                    <p><input type="text" class="form-control email-autenticacao" id="email" name="email" maxlength="70" value="" placeholder="E-mail"/></p>
                    <p><input type="password" class="form-control  senha-autenticacao" id="senha" name="senha" maxlength="70" value="" placeholder="Senha"/></p>
                    <p>
                        <button type="submit" class="btn btn-primary btn-primary-maria" name="enviar" onclick="javascript:autenticacao();" style="margin-right: 5px;">Entrar</button> <a href="/pt/conta/esqueceu_senha/">Esqueceu sua senha?</a>
                        <span class="load-autenticacao hide"><img src='/web-files/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style='opacity:1; width: 4%'/></span>
                    </p>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="auth-form-wrapper">
                <h3 class="auth-form-title">Cadastre-se aqui.</h3>
                <div class="criar-conta">
                    <form name="form-criar-conta" id="form-criar-conta" onsubmit="return false" method="post">
                                                <label >Por favor, entre com seu endereço de e-mail para criar uma conta!</label>
                        
                        <input type="hidden" name="actionType" class="actionType-criar-conta" value="criar_conta"/>
                        <p><input type="email" class="form-control email-criar-conta" name="email" maxlength="70" value="" placeholder="E-mail"/></p>
                        <p>
                            <button type="buttom" class="btn btn-primary btn-primary-maria"  onclick="javascript:criar_conta();" name="enviar">Criar conta</button>
                            <span class="load-criar-conta hide"><img src='/web-files/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style='opacity:1; width: 4%'/></span>
                        </p>
                    </form>
                </div>
            </div>
        </div>

    </div>
                           
<?php }} ?>

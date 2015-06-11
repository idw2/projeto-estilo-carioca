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
  'unifunc' => 'content_544935f8484c40_21600394',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544935f8484c40_21600394')) {function content_544935f8484c40_21600394($_smarty_tpl) {?>   
    <div class="row">       
        <div class="col-lg-12">    
            <div class="panel panel-primary">
                <div class="panel-body">
                    <form class="navbar-form navbar-left" style="width: 100%" onsubmit="return false" method="post">
                                                <input type="hidden" name="actionType" value="criar_conta"/>
                        <h3>Bom tarde, Rogerio Pontes!</h3>
                        <p>Veja como é fácil adquirir nossos produtos e serviços.</p>
                        <p><input type="text" class="form-control" style="min-width: 40%" id="email" name="email" maxlength="70" value="rogerio@designlab.com.br" placeholder="E-mail" readonly="readonly"/></p>
                        <p>
                            <span class="btn btn-default" onclick="window.location='/pt/produtos/sair/'">Sair e acessar com outra conta!</a>
                            <input type="hidden" id="EXISTE_USER_LOGADO" value="SIM">
                        </span>

                    </form>
                </div>
            </div>
        </div>
    </div>


                           
    <?php }} ?>

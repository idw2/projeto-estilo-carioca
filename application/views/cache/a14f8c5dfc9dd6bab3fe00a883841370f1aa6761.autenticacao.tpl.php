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
  'unifunc' => 'content_5460d6a7e14f66_55020329',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d6a7e14f66_55020329')) {function content_5460d6a7e14f66_55020329($_smarty_tpl) {?>   
    <div class="row">       
        <div class="col-lg-12">    
            <form class="form" onsubmit="return false" method="post">
                                <input type="hidden" name="actionType" value="criar_conta"/>
                <h3>Boa tarde, Rogerio Pontes!</h3>
                <p>Veja como é fácil adquirir nossos produtos e serviços.</p>
                
                <p>
                    <span class="btn btn-default" onclick="window.location = '/pt/produtos/sair/'">Sair e acessar com outra conta!
                        <input type="hidden" id="EXISTE_USER_LOGADO" value="SIM">
                    </span>
                    
                </p>
            </form>
        </div>
    </div>

                           
<?php }} ?>

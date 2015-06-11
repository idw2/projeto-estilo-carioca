<?php /*%%SmartyHeaderCode:4699540965511749f0ff307-08811958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5344b837db83c8c39fd60765a159b2e9d27720f5' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/autenticacao.tpl',
      1 => 1425511154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4699540965511749f0ff307-08811958',
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
  'unifunc' => 'content_5511749f1a5816_97028998',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5511749f1a5816_97028998')) {function content_5511749f1a5816_97028998($_smarty_tpl) {?>   
    <div class="row">       
        <div class="col-lg-12">    
            <form class="form" onsubmit="return false" method="post">
                                <input type="hidden" name="actionType" value="criar_conta"/>
                <h3 style="margin-top: 15px; margin-left: 20px; text-align: left;">Boa tarde, Luiz Gustavo Silva!</h3>
                <p style="margin-top: -5px; margin-left: 20px; text-align: left;">Veja como é fácil adquirir nossos produtos e serviços.</p>
                
                <p>
                    
                    <span class="btn btn-default hide" onclick="window.location = '/pt/produtos/sair/'">Sair e acessar com outra conta!
                        <input type="hidden" id="EXISTE_USER_LOGADO" value="SIM">
                    </span>
                    
                </p>
            </form>
        </div>
    </div>

                           
<?php }} ?>

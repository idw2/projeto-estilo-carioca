<?php /*%%SmartyHeaderCode:147652576955130c78877951-34589541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d40273047f6b072abfa22acef9d90f93bfcfd65' => 
    array (
      0 => '/home/estil450/public_html/application/views/autenticacao.tpl',
      1 => 1427308590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147652576955130c78877951-34589541',
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
  'unifunc' => 'content_55130c789219c1_15030349',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55130c789219c1_15030349')) {function content_55130c789219c1_15030349($_smarty_tpl) {?>   
    <div class="row">       
        <div class="col-lg-12">    
            <form class="form" onsubmit="return false" method="post">
                                <input type="hidden" name="actionType" value="criar_conta"/>
                <h3 class="nome" style="margin-top: 15px; margin-left: 20px; text-align: left;">Boa noite, Cassio Lemos!</h3>
                <p style="margin-top: -5px; margin-left: 20px; text-align: left;">Veja como é fácil adquirir nossos produtos e serviços.</p>
                
                <p>
                    
                    <span class="btn btn-default hide" onclick="window.location = '/en/produtos/sair/'">Sair e acessar com outra conta!
                        <input type="hidden" id="EXISTE_USER_LOGADO" value="SIM">
                    </span>
                    
                </p>
            </form>
        </div>
    </div>

                           
<?php }} ?>

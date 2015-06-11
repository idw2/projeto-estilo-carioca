<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 10:48:28
         compiled from "/home/maria951/public_html/homolog/application/views/criar_conta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39090807545b6e1c3ee8b8-27389958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e843b6957d0f482b4a47b3867dc176a2c7ca0378' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/criar_conta.tpl',
      1 => 1414786287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39090807545b6e1c3ee8b8-27389958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'email_base' => 0,
    'erro' => 0,
    'nome' => 0,
    'email' => 0,
    'aniversario' => 0,
    'ddd' => 0,
    'tel' => 0,
    'ramal' => 0,
    'cpf' => 0,
    'lembrete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b6e1c4a27e6_94887001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b6e1c4a27e6_94887001')) {function content_545b6e1c4a27e6_94887001($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">
    <br/>   
    
    <div class="row">       
        <div class="col-lg-12">    
            <div class="panel panel-default">    
                <table class="table" style="font-size: 14px">
                    <thead>
                        <tr>
                            <th>Criar uma conta</th>
                        </tr>
                    </thead>
                    </body>

                    <tr>
                        <td>
                            <form class="navbar-form navbar-left" role="search" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/criar_conta/email/<?php echo $_smarty_tpl->tpl_vars['email_base']->value;?>
" method="post">

                                <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>
                                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
                                <?php } else { ?>
                                    <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                                <?php }?>
                                <br/>
                                <h4>Dados pessoais</h4>
                                <p><input type="text" class="form-control" style="min-width: 100%" id="nome" name="nome" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" placeholder="Nome completo"/></p>
                                <p>
                                    <input type="hidden" class="form-control" style="min-width: 47%" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail" readonly/>
                                </p>
                                <h4>E-mail: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</h4>
                                <h4>Data de nascimento</h4>
                                <p><?php echo $_smarty_tpl->tpl_vars['aniversario']->value;?>
</p>
                                <h4>Sexo</h4>
                                <p> 
                                    <select name="sexo" class="form-control">
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                    </select>
                                </p>
                                <p>
                                <h4>Telefone ou celular</h4>
                                <input type="text" class="form-control" style="max-width: 15%" id="ddd" name="ddd" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['ddd']->value;?>
" placeholder="DDD" onkeypress="return formataNumDV(event, this, 2);"/>
                                <input type="text" class="form-control" style="max-width: 30%" id="tel" name="tel" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
" placeholder="Telefone" onkeypress="return formataNumDV(event, this, 9);"/>
                                <input type="text" class="form-control" style="max-width: 30%" id="ramal" name="ramal" maxlength="8" value="<?php echo $_smarty_tpl->tpl_vars['ramal']->value;?>
" placeholder="Ramal" onkeypress="return formataNumDV(event, this, 4);"/>
                                </p>
                                <h4 style="position: relative">CPF 
                                    <span class="CPF-Ask hide">O cadastro do CPF é obrigatório para o envio da Nota Fiscal</span>
                                    <i class="fa fa-question-circle" style="cursor: pointer" onmouseover="showAsk()" onmouseout="hideAsk()"></i>
                                   
                                </h4>
                                <style>
                                    .CPF-Ask{
                                        border: 1px solid #ccc;
                                        display: inline-block;
                                        padding: 20px;
                                        border-radius: 34px;
                                        color: #fff;
                                        background: #df5d65;
                                        position: absolute;
                                        top: -21px;
                                        left: 66px;
                                        z-index: 10000;
                                    }
                                    .fa.fa-question-circle{
                                        color: #df5d65;
                                    }
                                </style>
                                <script>
                                    function showAsk(){
                                        $(".CPF-Ask").removeClass("hide");
                                    }
                                    function hideAsk(){
                                        $(".CPF-Ask").addClass("hide");
                                    }
                                </script>
                                <p><input type="text" class="form-control" style="max-width: 47%" id="cpf" name="cpf" onkeypress="return formataCPF(event, this);" value="<?php echo $_smarty_tpl->tpl_vars['cpf']->value;?>
" placeholder="CPF"/></p>
                                <h4>Sua senha</h4>
                                <p><input type="password" class="form-control" style="max-width: 47%" id="passwd" name="passwd" maxlength="50" value="" placeholder="Senha"/></p>
                                <p><input type="password" class="form-control" style="max-width: 47%" id="passwd2" name="passwd2" maxlength="50" value=""  placeholder="Repetir senha"/></p>
                                <h4>Lembrete de segurança</h4>
                                <p><input type="text" class="form-control" style="min-width: 100%" id="lembrete" name="lembrete" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['lembrete']->value;?>
" placeholder="Lembrete de senha"/></p>
                                <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    
</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>

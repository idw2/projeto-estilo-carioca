<?php /* Smarty version Smarty-3.1.19, created on 2015-03-06 21:22:36
         compiled from "/home/estil450/public_html/application/views/minha_conta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170262183854fa1a9cca5141-17865680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28b8ee1c44bbe892ea92f072ade2a3799458daa3' => 
    array (
      0 => '/home/estil450/public_html/application/views/minha_conta.tpl',
      1 => 1425676916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170262183854fa1a9cca5141-17865680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'success' => 0,
    'erro' => 0,
    'nome' => 0,
    'email' => 0,
    'aniversario' => 0,
    'sexo' => 0,
    'checked1' => 0,
    'checked2' => 0,
    'ddd' => 0,
    'tel' => 0,
    'ramal' => 0,
    'cpf' => 0,
    'updatePassword' => 0,
    'lembrete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54fa1a9cd9d8a0_47621933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fa1a9cd9d8a0_47621933')) {function content_54fa1a9cd9d8a0_47621933($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container"></div>
<section class="section">
    <div class="container" style="margin-bottom: 8%">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Meus Dados</h2>
                <p class="subtitle">--//--</p>
            </div>
        </div>
        <div class="row">
            <?php echo $_smarty_tpl->getSubTemplate ("navbar2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        </div>
        <br/><br/>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">    
                    <table class="table" style="font-size: 14px">
                        <tr>
                            <td>
                                <form class="navbar-form navbar-left" role="search" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/meus-dados/" method="post">

                                    <?php if ($_smarty_tpl->tpl_vars['success']->value==1) {?>
                                        <div class="alert alert-info" role="alert"><strong>Parabéns: </strong>Seus dados foram atualizados com sucesso!</div>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>
                                            <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
                                        <?php } else { ?>
                                            <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                                        <?php }?>
                                    <?php }?>


                                    <br/>
                                    <h4>Dados pessoais</h4>
                                    <p><input type="text" class="form-control" style="min-width: 100%" id="nome" name="nome" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" placeholder="Nome completo"/></p>
                                    <p>
                                        <label><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</label>
                                        <input type="hidden" class="form-control" style="min-width: 47%" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail" readonly/>
                                    </p>
                                    <h4>Data de nascimento</h4>
                                    <p><?php echo $_smarty_tpl->tpl_vars['aniversario']->value;?>
</p>
                                    <?php if ($_smarty_tpl->tpl_vars['sexo']->value=="M") {?>
                                        <?php $_smarty_tpl->tpl_vars["checked1"] = new Smarty_variable("selected", null, 0);?>
                                    <?php } else { ?>    
                                        <?php $_smarty_tpl->tpl_vars["checked2"] = new Smarty_variable("selected", null, 0);?>
                                    <?php }?>    

                                    <h4>Sexo</h4>
                                    <p> 
                                        <select name="sexo" class="form-control">
                                            <option value="M" <?php echo $_smarty_tpl->tpl_vars['checked1']->value;?>
>Masculino</option>
                                            <option value="F" <?php echo $_smarty_tpl->tpl_vars['checked2']->value;?>
>Feminino</option>
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
                                            background: #5d77a5;
                                            position: absolute;
                                            top: -21px;
                                            left: 66px;
                                            z-index: 10000;
                                        }
                                        .fa.fa-question-circle{
                                            color: #9eb6e2;
                                        }
                                    </style>
                                    <script>
                                        function showAsk() {
                                            $(".CPF-Ask").removeClass("hide");
                                        }
                                        function hideAsk() {
                                            $(".CPF-Ask").addClass("hide");
                                        }
                                    </script>
                                    <p> 
                                        <label><?php echo $_smarty_tpl->tpl_vars['cpf']->value;?>
</label>
                                        <input type="hidden" class="form-control" style="min-width: 47%" id="cpf" name="cpf" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['cpf']->value;?>
" placeholder="CPF" readonly/>
                                    </p>
                                    <h4><input type="checkbox" name="updatePassword" id="updatePassword" <?php if ($_smarty_tpl->tpl_vars['updatePassword']->value=="on") {?> checked="true" <?php }?> /> Desejo atualizar a minha senha.</h4>
                                    <div class="updatePassword <?php if ($_smarty_tpl->tpl_vars['updatePassword']->value!="on") {?> hide <?php }?>">
                                        <h4>Sua senha</h4>
                                        <p><input type="password" class="form-control" style="max-width: 47%" id="passwd" name="passwd" maxlength="50" value="" placeholder="Senha"/></p>
                                        <p><input type="password" class="form-control" style="max-width: 47%" id="passwd2" name="passwd2" maxlength="50" value=""  placeholder="Repetir senha"/></p>
                                        <h4>Lembrete de segurança</h4>
                                        <p><input type="text" class="form-control" style="min-width: 100%" id="lembrete" name="lembrete" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['lembrete']->value;?>
" placeholder="Lembrete de senha"/></p>
                                    </div>
                                    <p><button type="submit" class="btn btn-default" name="enviar">ENVIAR</button></p>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <ul class="list-unstyled">
                        <li class="previous pull-left"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nossos-produtos" class="btn btn-dark">&larr; Continuar comprando</a></li>
                    </ul>
                </div> 
            </div>
        </div>
    </div>
</section>


<script>

    window.onload = teste;
    function teste() {
        $(document).ready(function() {
            $("#updatePassword").click(function() {
                if ($("#updatePassword").is(':checked')) {
                    $(".updatePassword").removeClass("hide");
                } else {
                    $(".updatePassword").addClass("hide");
                }
            });
        });
    }


</script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

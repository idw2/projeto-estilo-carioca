<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 13:15:55
         compiled from "/home/maria951/public_html/homolog/application/views/forma_pgto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6243545895460d6ab0a1689-50049623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6de209956f5937478e44be1a71d929fd0cd2b78d' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/forma_pgto.tpl',
      1 => 1415628679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6243545895460d6ab0a1689-50049623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'endereco_list' => 0,
    'endereco' => 0,
    'web_files' => 0,
    'CLIENT_HIDDEN' => 0,
    'CODCADASTRO' => 0,
    'CODENDERECO' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460d6ab2c45d6_56086017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d6ab2c45d6_56086017')) {function content_5460d6ab2c45d6_56086017($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/homolog/libraries/plugins/function.counter.php';
?><div class="row">

    <div class="col-lg-12">

        <?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>
 
        <?php  $_smarty_tpl->tpl_vars['endereco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['endereco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['endereco_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['endereco']->key => $_smarty_tpl->tpl_vars['endereco']->value) {
$_smarty_tpl->tpl_vars['endereco']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['endereco']->value->CODENDERECO!=''&&$_smarty_tpl->tpl_vars['endereco']->value->STATUS=="1") {?>
                <?php $_smarty_tpl->tpl_vars["CODENDERECO"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['endereco']->value->CODENDERECO), null, 0);?>
            <?php }?>    
            <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
    
        <?php } ?>

        
        <ul class="nav nav-tabs nav-tabs-2" role="tablist"> 
            <li class="active"><a href="#tabs-1" role="tab" data-toggle="tab">Cartão de <strong>crédito</strong></a></li>
            <li><a href="#tabs-2" role="tab" data-toggle="tab">Boleto <strong>bancário</strong></a></li>
            <li><a href="#tabs-3" role="tab" data-toggle="tab"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/assets/paypal-logo.png?v=2"></a></li>
        </ul>
        <div class="tab-content">

            <div id="tabs-1" class="tab-pane active">
                <center>
                    <br/>
                    <br/>
                    <form name="CieloForm" id="CieloForm" onsubmit="return false" class="form-cielo" style="display:block;max-width:450px;margin: 0 auto;text-align: left;">
                        <div id="tableCielo" style="display: block;">
                            <h2 style="margin-bottom: 45px;text-align: center;">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/cielo.jpg" alt="Cielo" title="Cielo" border="0"/>
                            </h2>
                            <div class="alert alert-info" id="alert_cielo">
                               * Preencha todos os campos!
                            </div>
                            <div class="cont-cartao">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="btn-group" data-toggle="buttons" style="margin-bottom: 15px;">
                                            <label class="btn btn-default active">
                                                <input type="radio" name="codigoBandeira" value="visa" checked> <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/assets/band_visa.png">
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="codigoBandeira" value="mastercard"> <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/assets/band_master.png">
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="codigoBandeira" value="amex" > <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/assets/band_american.png">
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="codigoBandeira" value="diners" > <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/assets/band_diners.png">
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="codigoBandeira" value="elo" > <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/assets/band_elo.png">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-xs-12 cnt-cc-number">
                                        <label for="cartaoNumero">Número do cartão de crédito</label>
                                        <input type="text" name="cartaoNumero" id="cartaoNumero" class="cc-numero to_mask" value="" placeholder="Número do cartão" data-mask="0000 0000 0000 0009" required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6">
                                        <label for="cartaoValidade">Data de vencimento
                                        </label>
                                        <input type="text" name="cartaoValidade" id="cartaoValidade" class="cc-exp to_mask" value="" placeholder="MM / AAAA" data-mask="00/0000" maxlength="9" required="">
                                    </div>

                                    <div class="col-xs-6">
                                        <label>Código de Segurança
                                        </label>
                                        <input type="text" name="cartaoCodigoSeguranca" id="cartaoCodigoSeguranca" class="cc-cvc to_mask" value="" placeholder="CVC" data-mask="0000" maxlength="4" autocomplete="off" required="">
                                    </div>
                                    <div class="col-xs-12">
                                        <label for="nomeTitulo">Nome do titular do cartão
                                        </label>
                                        <input type="text" name="nomeTitulo" id="nomeTitulo" value="" onkeypress="return caixaAlta();" onkeyout="return caixaAlta();" placeholder="Nome" required="">
                                    </div>
                                </div>

                                <div class="cont-footer" style="display:inline-block;width: 100%;margin-bottom:12px">

                                    <div class="cont-forma push-right">
                                        <label for="formaPagamento">Forma de Pagamento</label>
                                        <select name="formaPagamento" id="formaPagamento" class="form-control">
                                            <option value="1" selected="">Crédito à Vista</option>
                                            <option value='2'>2x</option>
                                            <option value='3'>3x</option>
                                            <option value='4'>4x</option>
                                            <option value='5'>5x</option>
                                            <option value='6'>6x</option>
                                            <option value='7'>7x</option>
                                            <option value='8'>8x</option>
                                            <option value='9'>9x</option>
                                            <option value='10'>10x</option>
                                            <option value='11'>11x</option>
                                            <option value='12'>12x</option>
                                        </select>
                                    </div>
                                </div>
                                <br>

                                <div>
                                    <input type="submit" value="Pagar" class="btn btn-primary" onclick="javascript:cielo('<?php echo $_smarty_tpl->tpl_vars['CLIENT_HIDDEN']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['CODCADASTRO']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['CODENDERECO']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
');">
                                    <input type="hidden" name="capturarAutomaticamente" id="capturarAutomaticamente" value="true">
                                    <input type="hidden" name="tentarAutenticar" id="tentarAutenticar" value="sim">
                                    <input type="hidden" name="indicadorAutorizacao" id="indicadorAutorizacao" value="3">
                                    <input type="hidden" name="tipoParcelamento" id="tipoParcelamento" value="2">                                   
                                </div>
                            </div>
                        </div>
                    </form>
                </center>
            </div>
            <div id="tabs-2" class="tab-pane">

                <div class='form-group'>
                    <h2 class='title-lg'>PAGAMENTO COM BOLETO BANCÁRIO</h2>

                    <br/>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/logocaixa.jpg" style="height: 40px; width: 150px;" border="0" alt="Caixa Economica Federal" title="Caixa Economica Federal"/>
                    <br/>

                    <p>Ao clicar no botão abaixo "PAGAR COM BOLETO", você será direcionada(o) para fazer o pagamento.</p>
                </div>
                <div class='panel panel-highlight'>
                    <div class="panel-body">
                        <p style="font-size: 2rem;line-height: 2.6rem;">Pagável preferêncialmente nas Casas Lotérias ou na InternetBank até a data do vencimento.<br></p>
                        <button type="buttom" class="btn btn-primary" name="enviar" onclick="javascript:boleto('<?php echo $_smarty_tpl->tpl_vars['CLIENT_HIDDEN']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['CODCADASTRO']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['CODENDERECO']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
');">PAGAR COM BOLETO</button>
                    </div>
                </div>
                <div class='form-group'>
                    <h3 class='title-md'>Atenção para alguns detalhes:</h3>
                    <ul>
                        <li>Ao solicitar o pagamento com boleto a data de vencimento é gerado pelo banco emissor. Caso seja feriado ou final de semana, pague no primeiro dia útil após o vencimento</li>
                        <li>Esgotado o prazo de pagamento do boleto você deverá observar seus e-mails que contém explicações de como gerar a segunda via da compra</li>
                        <li>A identificação de pagamento do boleto não é imediata, leva de 1 a 3 nas agências da Caixa Econômica Federal ou nas Casas Lotéricas, em outros bancos pode ocorrer a compensação até 5 dias úteis após a realização do pagamento.</li>
                        <li>Após a identificação de pagamento em nosso sistema, o seu pedido será preparado e enviado para o endereço de entrega cadastrado</li>
                    </ul>
                </div>
            </div>
            <div id="tabs-3" class="tab-pane">
                <div class='form-group'>
                    <h3 class='title-lg'>PAGAMENTO COM PAYPAL</h3>
                    <p>Ao clicar no botão abaixo "PAGAR COM PAYPAL", você será direcionada(o) para fazer o pagamento.<br></p>
                </div>
                <div class='form-group'>
                    <button type="button" id='confirm-payment-paypal' class='btn btn-primary' onclick="javascript:paypal('<?php echo $_smarty_tpl->tpl_vars['CLIENT_HIDDEN']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['CODCADASTRO']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['CODENDERECO']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
');">PAGAR COM PAYPAL</button>
                </div>
            </div>
        </div>
        


        

    </div>

</div>

<div>
    
</div> 



<?php }} ?>

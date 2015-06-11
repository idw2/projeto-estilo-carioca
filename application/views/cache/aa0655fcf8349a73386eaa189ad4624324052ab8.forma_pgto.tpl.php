<?php /*%%SmartyHeaderCode:15320359355511765b415121-05439951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa0655fcf8349a73386eaa189ad4624324052ab8' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/forma_pgto.tpl',
      1 => 1425671973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15320359355511765b415121-05439951',
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
  'unifunc' => 'content_5511765b4f1ce0_06463861',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5511765b4f1ce0_06463861')) {function content_5511765b4f1ce0_06463861($_smarty_tpl) {?> 
                    
        


<ul class="nav nav-tabs nav-tabs-2" role="tablist"> 
    <li class="active"><a href="#tabs-1" role="tab" data-toggle="tab">Cartão de <strong>crédito</strong></a></li>
    <li><a href="#tabs-2" role="tab" data-toggle="tab">Boleto <strong>bancário</strong></a></li>
    <li><a href="#tabs-3" role="tab" data-toggle="tab"><img style="position: relative; top: 0px;" src="/web-files/img/assets/paypal-logo.png?v=2"></a></li>
</ul>
<div class="tab-content">

    <div id="tabs-1" class="tab-pane active">
        
        <br/>
        <br/>
        <form name="CieloForm" id="CieloForm" onsubmit="return false" class="form-cielo" style="display:block;max-width:450px;margin: 0 auto;text-align: left;">

            <div class="alert alert-danger" role="alert">
                <div style="margin-bottom: 3px;"><strong><u>ATENÇÃO</u></strong></div>Este produto irá finalizar em R$ <strong>1,00</strong> para homologação do sistema junto a Cielo.
            </div>

            <div id="tableCielo" style="display: block;">
                <h2 style="margin-bottom: 45px;">
                    <img src="/web-files/img/cielo.jpg" alt="Cielo" title="Cielo" border="0"/>
                </h2>
                <div class="alert alert-info" id="alert_cielo">
                    * Preencha todos os campos!
                </div>
                <div class="cont-cartao">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="btn-group" data-toggle="buttons" style="margin-bottom: 15px;">
                                <label class="  btn btn-default2 ">
                                    <input  type="radio" name="codigoBandeira" value="visa" checked=""> <img src="/web-files/img/assets/band_visa.png">
                                </label>
                                <label class="btn btn-default2">
                                    <input type="radio" name="codigoBandeira" value="mastercard"> <img src="/web-files/img/assets/band_master.png">
                                </label>
                                <label class="btn btn-default2">
                                    <input type="radio" name="codigoBandeira" value="amex"> <img src="/web-files/img/assets/band_american.png">
                                </label>
                                <label class="btn btn-default2">
                                    <input type="radio" name="codigoBandeira" value="diners"> <img src="/web-files/img/assets/band_diners.png">
                                </label>
                                <label class="btn btn-default2">
                                    <input type="radio" name="codigoBandeira" value="elo"> <img src="/web-files/img/assets/band_elo.png">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-xs-12 cnt-cc-number">
                            <label for="cartaoNumero">Número do cartão de crédito</label> <br><br>
                            <input style="width: 100%;" type="text" name="cartaoNumero" id="cartaoNumero" class="cc-numero to_mask" value="" placeholder="Número do cartão" data-mask="0000 0000 0000 0009" required="">
                        </div>
                    </div>

                    <div class="row" style="margin-top: 10px;" >
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
                            <label style="margin-top: 10px;" for="nomeTitulo">Nome do titular do cartão
                            </label> <br>
                            <input style="width: 100%;" type="text" name="nomeTitulo" id="nomeTitulo" value="" onkeypress="return caixaAlta();" onkeyout="return caixaAlta();" placeholder="Nome" required="">
                        </div>
                    </div>

                    <div class="cont-footer" style="display:inline-block;width: 100%;margin-bottom:12px">

                        <div class="cont-forma push-right">
                            <label style="margin-top: 10px;" for="formaPagamento">Forma de Pagamento</label>
                            <select name="formaPagamento" id="formaPagamento" class="form-control">
                                <option value="1" selected="">Crédito à Vista</option>
                                <option value='2'>2x</option>
                                <option value='3'>3x</option>
                                <option value='4'>4x</option>
                                <option value='5'>5x</option>
                                <option value='6'>6x</option>
                                
                            </select>
                        </div>
                    </div>
                    <br>

                    <div>
                        <input style="margin-bottom: 30px;" type="submit" value="Pagar" class="btn btn-default" onclick="javascript:cielo('0F6F8D72336BDC62D559BD9D1EEEABD1', '1ABF748C1E730477C040784DD77923CB', 'E2E7F87B51683CD1A5C605FD00718427', 'pt');">
                        <input type="hidden" name="capturarAutomaticamente" id="capturarAutomaticamente" value="true">
                        <input type="hidden" name="tentarAutenticar" id="tentarAutenticar" value="sim">
                        <input type="hidden" name="indicadorAutorizacao" id="indicadorAutorizacao" value="3">
                        <input type="hidden" name="tipoParcelamento" id="tipoParcelamento" value="2">                                   
                    </div>
                </div>
            </div>
        </form>
        
    </div>
    <div id="tabs-2" class="tab-pane">

        <div>
            <h2 class='title-lg' style="text-align: left;">PAGAMENTO COM BOLETO 5% DE DESCONTO</h2>

            <br/>
            <img src="/web-files/img/santander.png" style="" border="0" alt="Santander" title="Santander"/>
            <br/>
            
            <ul>
                <li style=" margin: 20px 0 0;">Ao clicar no botão abaixo "PAGAR COM BOLETO", você será direcionada(o) para fazer o pagamento.</li>
                <li style=" margin: 20px 0 0;">Pagável preferêncialmente nas Casas Lotérias ou na InternetBank até a data do vencimento.</li>
            </ul>

            <br/>
            
            <p><button style="display:block;max-width:450px;margin: 0 auto;" type="buttom" class="btn btn-default" name="enviar" onclick="javascript:boleto('0F6F8D72336BDC62D559BD9D1EEEABD1', '1ABF748C1E730477C040784DD77923CB', 'E2E7F87B51683CD1A5C605FD00718427', 'pt');">PAGAR COM BOLETO</button></p>
            <h3 class='title-md'>Atenção para alguns detalhes:</h3>
            <ol>
                <li style=" margin: 20px 0 0;">Ao solicitar o pagamento com boleto a data de vencimento é gerado pelo banco emissor. Caso seja feriado ou final de semana, pague no primeiro dia útil após o vencimento</li>
                <li style=" margin: 20px 0 0;">Esgotado o prazo de pagamento do boleto você deverá observar seus e-mails que contém explicações de como gerar a segunda via da compra</li>
                <li style=" margin: 20px 0 0;">A identificação de pagamento do boleto não é imediata, leva de 1 a 3 Santander ou nas Casas Lotéricas, em outros bancos pode ocorrer a compensação até 5 dias úteis após a realização do pagamento.</li>
                <li style=" margin: 20px 0 0;">Após a identificação de pagamento em nosso sistema, o seu pedido será preparado e enviado para o endereço de entrega cadastrado</li>
            </ol>

        </div>
    </div>
    <div id="tabs-3" class="tab-pane">
        <div class='form-group'>
            <h3 class='title-lg'>PAGAMENTO COM PAYPAL</h3>
            <p>Ao clicar no botão abaixo "PAGAR COM PAYPAL", você será direcionada(o) para fazer o pagamento.<br></p>
        </div>
        <div class='form-group'>
            <button style="display:block;max-width:450px;margin: 0 auto;" type="button" id='confirm-payment-paypal' class='btn btn-default' onclick="javascript:paypal('0F6F8D72336BDC62D559BD9D1EEEABD1', '1ABF748C1E730477C040784DD77923CB', 'E2E7F87B51683CD1A5C605FD00718427', 'pt');">PAGAR COM PAYPAL</button>
        </div>
    </div>
</div>
            





<div>
    
</div> 





<?php }} ?>

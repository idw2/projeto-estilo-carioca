<?php /* Smarty version Smarty-3.1.19, created on 2014-10-23 15:08:20
         compiled from "/home/maria951/public_html/novo/application/views/forma_pgto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205838979354493604bbc0d9-61267710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feb16e8957f160917e711f9d14f95a73374391ac' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/forma_pgto.tpl',
      1 => 1414005061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205838979354493604bbc0d9-61267710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'endereco_list' => 0,
    'endereco' => 0,
    'CLIENT_HIDDEN' => 0,
    'CODCADASTRO' => 0,
    'CODENDERECO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54493604c71d34_01699043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54493604c71d34_01699043')) {function content_54493604c71d34_01699043($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/novo/libraries/plugins/function.counter.php';
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
            <li><a href="#tabs-3" role="tab" data-toggle="tab"><img src="/web-files/img/assets/paypal-logo.png?v=2"></a></li>
        </ul>
        <div class="tab-content">

            <div id="tabs-1" class="tab-pane active">
                


                <center>
                    <br/>
                    <br/>
                    <form name="CieloForm" id="CieloForm" onsubmit="return false" class="form-cielo" style="display:block;max-width:450px;margin: 0 auto;text-align: left;">
                        <div id="tableCielo" style="display: block;">
                            <h2 style="margin-bottom: 45px;text-align: center;">
                                <img src="/web-files/img/cielo.jpg" alt="Cielo" title="Cielo" border="0"/>
                            </h2>
                            <input type="hidden" name="codigoBandeira" value="">

                            <div class="cont-cartao">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="btn-group" data-toggle="buttons" style="margin-bottom: 15px;">
                                            <label class="btn btn-default active">
                                                <input type="radio" name="codigoBandeira" checked> <img src="/web-files/img/assets/band_visa.png">
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="codigoBandeira"> <img src="/web-files/img/assets/band_master.png">
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="codigoBandeira"> <img src="/web-files/img/assets/band_american.png">
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="codigoBandeira"> <img src="/web-files/img/assets/band_diners.png">
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="codigoBandeira"> <img src="/web-files/img/assets/band_elo.png">
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
                                        <select name="formaPagamento" class="form-control">
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
                                    <input type="submit" value="Pagar" class="btn btn-primary">
                                    <input type="hidden" name="capturarAutomaticamente" value="true">
                                    <input type="hidden" name="tentarAutenticar" value="sim">
                                    <input type="hidden" name="indicadorAutorizacao" value="3">
                                    <input type="hidden" name="tipoParcelamento" value="2">
                                    <input type="hidden" value="ACTION_CIELO" name="ACTION_CIELO">
                                    <input type="hidden" name="email" value="contato@designlab.com.br">
                                    <input type="hidden" name="language" value="PORTUGUES">
                                    <input type="hidden" name="telefone" value="123">
                                    <input type="hidden" name="observacoes" value="">
                                    <input type="hidden" name="termos" value="on">
                                    <input type="hidden" name="select_quarto_tipo_0" value="3CFFCD5822534F90893EA96EF51FAAC4">
                                    <input type="hidden" name="screen_option_0_ok" value="NOACTION">
                                    <input type="hidden" name="nome_empresa" value="123">
                                    <input type="hidden" name="dtainicio" value="2014-10-22">
                                    <input type="hidden" name="datainicio" value="22/10/2014">
                                    <input type="hidden" name="dtafim" value="2014-10-23">
                                    <input type="hidden" name="datafim" value="23/10/2014">
                                    <input type="hidden" name="Prepara_datainicio" value="2014-10-22">
                                    <input type="hidden" name="Prepara_dtafim" value="2014-10-23">
                                    <input type="hidden" name="screen_pessoa_0" value="2">
                                    <input type="hidden" name="pessoas" value="2">
                                    <input type="hidden" name="Prepara_pessoas" value="2">
                                    <input type="hidden" name="Prepara_adultos" value="2">
                                    <input type="hidden" name="Prepara_criancas_5a" value="0">
                                    <input type="hidden" name="Prepara_criancas_6a12" value="0">
                                    <input type="hidden" name="Prepara_criancas_acima12" value="0">
                                    <input type="hidden" name="nQuartos" value="1">
                                    <input type="hidden" name="ACTION" value="ACTION">
                                    <input type="hidden" name="Prepara_nCrianca" value="0">
                                    <input type="hidden" name="codpacote" value="">
                                    <input type="hidden" name="dias_desconto" value="">
                                    <input type="hidden" name="n_adulto" value="2">
                                    <input type="hidden" name="n_crianca" value="0">
                                    <input type="hidden" name="diffDtainicio" value="2014-10-22">
                                    <input type="hidden" name="diffDtafim" value="2014-10-23">
                                    <input type="hidden" name="nom_temporada" value="Média Temporada">
                                    <input type="hidden" name="valor_Diadasemana" value="39500">
                                    <input type="hidden" name="valor_Finaldesemana" value="42500">
                                    <input type="hidden" name="qntd_Diadasemana" value="1">
                                    <input type="hidden" name="qntd_Finaldesemana" value="0">
                                    <input type="hidden" name="total" value="39500">
                                    <input type="hidden" name="total_formatado" value="395,00">
                                    <input type="hidden" name="total_dia_semana" value="39500">
                                    <input type="hidden" name="total_dia_semana_formatado" value="395,00">
                                    <input type="hidden" name="total_fim_semana" value="0">
                                    <input type="hidden" name="total_fim_semana_formatado" value="0,00">
                                    <input type="hidden" name="codquartotipo" value="3CFFCD5822534F90893EA96EF51FAAC4">
                                    <input type="hidden" name="foto" value="../upload/fotos/C8C920581B9D86547ECA1978CF5AA19B/E65D22B4422F4B1A31973162A385C19E.jpeg">
                                    <input type="hidden" name="quartotipo_name" value="STD - Standard">
                                    <input type="hidden" name="adulto" value="2">
                                    <input type="hidden" name="crianca" value="0">
                                    <input type="hidden" name="crianca0a5" value="0">
                                    <input type="hidden" name="crianca6a12" value="0">
                                    <input type="hidden" name="crianca12" value="0">
                                    <input type="hidden" name="dta_inicio_alta" value="2014-12-19">
                                    <input type="hidden" name="dta_fim_alta" value="2015-02-28">
                                    <input type="hidden" name="dta_inicio_media" value="2014-10-03">
                                    <input type="hidden" name="dta_fim_media" value="2014-12-18">
                                    <input type="hidden" name="dta_inicio_baixa" value="2014-07-01">
                                    <input type="hidden" name="dta_fim_baixa" value="2014-10-02">
                                    <input type="hidden" name="acrescimo" value="0">
                                    <input type="hidden" name="adulto_perc" value="30">
                                    <input type="hidden" name="adulto_perc_mult" value="">
                                    <input type="hidden" name="adulto_valor" value="">
                                    <input type="hidden" name="adulto_excedente" value="">
                                    <input type="hidden" name="crianca_5_perc" value="15">
                                    <input type="hidden" name="crianca_5_perc_mult" value="">
                                    <input type="hidden" name="crianca_5_valor" value="">
                                    <input type="hidden" name="crianca_5_excedente" value="">
                                    <input type="hidden" name="crianca_6a12_perc" value="15">
                                    <input type="hidden" name="crianca_6a12_perc_mult" value="">
                                    <input type="hidden" name="crianca_6a12_valor" value="">
                                    <input type="hidden" name="crianca_6a12_excedente" value="">
                                    <input type="hidden" name="crianca_12_perc" value="30">
                                    <input type="hidden" name="crianca_12_perc_mult" value="">
                                    <input type="hidden" name="crianca_12_valor" value="">
                                    <input type="hidden" name="crianca_12_excedente" value="">
                                    <input type="hidden" name="https" value="https://ssl754.websiteseguro.com/maravista1">
                                    <input type="hidden" name="site" value="http://www.maravista.com.br">
                                    <input type="hidden" name="valorpacote" value="">
                                    <input type="hidden" name="nomepacote" value="">
                                    <input type="hidden" name="existe_acrescimo" value="">
                                    <input type="hidden" name="nom_pacote" value="">
                                    <input type="hidden" name="codquarto" value="9B4A58C140252B9C407EE30141EBAF5A">
                                    <input type="hidden" name="hospede_adulto_1" value="123">
                                    <input type="hidden" name="hospede_adulto_2" value="123">
                                    <input type="hidden" name="responsavel_reserva" value="123">
                                    <input type="hidden" name="Reservar" value="Reservar">
                                    <input type="hidden" name="quarto_1_text_name_0" value="123">
                                    <input type="hidden" name="quarto_1_select_0" value="0">
                                    <input type="hidden" name="quarto_1_text_name_1" value="123">
                                    <input type="hidden" name="quarto_1_select_1" value="0">
                                    <input type="hidden" name="ACTION_FINALIZE" value="ACTION_FINALIZE">
                                    <input type="hidden" name="ADULTO_PERC" value="0">
                                    <input type="hidden" name="ADULTO_PERC_MULT" value="0">
                                    <input type="hidden" name="ADULTO_VALOR" value="0">
                                    <input type="hidden" name="ADULTO_EXCEDENTE" value="0">
                                    <input type="hidden" name="CRIANCA_5_PERC" value="0">
                                    <input type="hidden" name="CRIANCA_5_PERC_MULT" value="0">
                                    <input type="hidden" name="CRIANCA_5_VALOR" value="0">
                                    <input type="hidden" name="CRIANCA_5_EXCEDENTE" value="0">
                                    <input type="hidden" name="CRIANCA_6A12_PERC" value="0">
                                    <input type="hidden" name="CRIANCA_6A12_PERC_MULT" value="0">
                                    <input type="hidden" name="CRIANCA_6A12_VALOR" value="0">
                                    <input type="hidden" name="CRIANCA_6A12_EXCEDENTE" value="0">
                                    <input type="hidden" name="CRIANCA_12_PERC" value="0">
                                    <input type="hidden" name="CRIANCA_12_PERC_MULT" value="0">
                                    <input type="hidden" name="CRIANCA_12_VALOR" value="0">
                                    <input type="hidden" name="CRIANCA_12_EXCEDENTE" value="0">
                                    <input type="hidden" name="VALOR_BRUTO" value="39500">
                                    <input type="hidden" name="VALOR_ACRESCIMO" value="0">
                                    <input type="hidden" name="ACRESCIMO_PERC" value="0">
                                    <input type="hidden" name="VALOR_TOTAL" value="39500">
                                    <input type="hidden" name="PGTO_SINAL" value="19750">
                                    <input type="hidden" name="PGTO_RESTANTE" value="19750">
                                    <input type="hidden" name="N_CONHECIMENTO" value="STD0000005">
                                    <input type="hidden" name="FORMA_PGTO" value="2">
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
                    <img src="/application/controllers/boletophp-master/imagens/logocaixa.jpg" style="height: 40px; width: 150px;" border="0" alt="Caixa Economica Federal" title="Caixa Economica Federal"/>
                    <br/>

                    <p>Ao clicar no botão abaixo "PAGAR COM BOLETO", você será direcionada(o) para fazer o pagamento.</p>
                </div>
                <div class='panel panel-highlight'>
                    <div class="panel-body">
                        <p style="font-size: 2rem;line-height: 2.6rem;">Pagável preferêncialmente nas Casas Lotérias ou na InternetBank até a data do vencimento.<br></p>
                        <button type="buttom" class="btn btn-primary" name="enviar" onclick="javascript:boleto('<?php echo $_smarty_tpl->tpl_vars['CLIENT_HIDDEN']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['CODCADASTRO']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['CODENDERECO']->value;?>
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
                    <button type="button" id='confirm-payment-paypal' class='btn btn-primary'>PAGAR COM PAYPAL</button>
                </div>
            </div>
        </div>
        


        

    </div>

</div>

<div>
    
</div> 



<?php }} ?>

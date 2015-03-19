<?php /*%%SmartyHeaderCode:39602078655032ebbc29a99-84941574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe0b76e688721e881e0674ba82d0ca8a6778a474' => 
    array (
      0 => '/home/estil450/public_html/application/views/pagamento.tpl',
      1 => 1425670186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39602078655032ebbc29a99-84941574',
  'variables' => 
  array (
    'endereco_list' => 0,
    'endereco' => 0,
    'web_files' => 0,
    'nenhum_produto' => 0,
    'total_peso' => 0,
    'cep_remetente' => 0,
    'CEP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55032ebbce8594_73953863',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55032ebbce8594_73953863')) {function content_55032ebbce8594_73953863($_smarty_tpl) {?> 
  
                            
        


<div>
    
    <img src="/web-files/img/correios.jpg" alt="Métodos de Envio" title="Métodos de Envio" border="0" style="width: 168px;"/><br>
    
    (*) Atenção: Alguns serviços de entrega de encomenda poderão não estar disponíveis em algumas localidades 
</div>
   

    <div class="panel panel-default" style="box-shadow: none !important;">
        <br/>
        <!-- Default panel contents -->
        <div class="panel-heading">Estimar custo de envio da encomenda.</div>
        <!-- Table -->
        <table class="table" style="border: 0 !important">
            <thead  style="border: 0 !important">
                <tr style="border: 0">
                    <th style="border: 0 !important; padding: 8px !important">Digite seu CEP</th>
                    <th style="border: 0 !important; padding: 8px !important">Tipo de encomenda</th>
                </tr>
            </thead>
            <tbody  style="border: 0 !important">
                <tr style="border: 0 !important">
                    <td style="border: 0">
                        <input type="hidden" class="form-control" id="total_peso" name="total_peso" value="0.6"/>
                        <input type="hidden" class="form-control" id="cep_destinatario_2" name="cep_destinatario_2" value="22780-084"/>
                        <input type="text" class="form-control" id="cep_destinatario" name="cep_destinatario" maxlength="8" value="22793-690" onkeypress="return formataCEP(event, this);" placeholder="Insira seu CEP" readonly="readonly"/>
                    </td>
                    <td  style="border: 0 !important">
                        <select id="forma_envio" class="select myFormaEnvio">
                            
                            <option value="41106" selected>Correios - PAC</option>
                            <option value="40010">Correios - SEDEX</option>
                            <option value="40215">Correios - SEDEX 10</option>
                            <option value="40290">Correios - SEDEX hoje</option>
                            <option value="Retirada na Loja">Retirada na Loja</option>
                            
                        </select>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="margin-bottom: 10%">                    
        <span class="Loader hide" style="text-align: center; width: 100%; display: inline-block;"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 21px;"/></span>
    </div>
    <div id="msg_erro"></div>
<div style="clear: both;"></div>
<?php }} ?>

<?php /*%%SmartyHeaderCode:1328645051544935f9a131b5-35669414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1f7a7998236dc3083d50b7531de30e5aab311ff' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/pagamento.tpl',
      1 => 1414084074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1328645051544935f9a131b5-35669414',
  'variables' => 
  array (
    'endereco_list' => 0,
    'endereco' => 0,
    'nenhum_produto' => 0,
    'total_peso' => 0,
    'cep_remetente' => 0,
    'CEP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544935f9ba8603_91230296',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544935f9ba8603_91230296')) {function content_544935f9ba8603_91230296($_smarty_tpl) {?> 
  
                            
        
  
        
        


<p style="text-align: center">
    <img src="/web-files/img/transportadoras.jpg" alt="Métodos de Envio" title="Métodos de Envio" border="0" style="width: 268px;"/><br>
    (*) Método de envio preferêncial Total Express Transportadora<br>
    (*) Atenção: Alguns serviços de entrega de encomenda poderão não estar disponíveis em algumas localidades 
</p>
<div class="row">

    <div class="col-lg-12">    
           
            <div class="">    
                <table class="table" style="font-size: 14px">
                    <thead>
                        <tr>
                            <th>Estimar custo de envio da encomenda.</th>
                        </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>
                            <input type="hidden" class="form-control" id="total_peso" name="total_peso" value="0.5"/>
                            <input type="hidden" class="form-control" id="cep_remetente" name="cep_remetente" value="22780-084"/>
                            <input type="text" class="form-control" id="cep_destinatario" name="cep_destinatario" maxlength="8" value="21720-000" onkeypress="return formataCEP(event, this);" placeholder="Insira seu CEP" style="width: 50%" readonly="readonly"/>
                            <br>
                            <label>Tipo de encomenda</label>
                            <select id="forma_envio" class="form-control myFormaEnvio" style="width: 50%">
                                <option value="total_express">Total Express - Transportadora</option>
                                <option value="41106">PAC</option>
                                <option value="40010">SEDEX</option>
                                <option value="40215">SEDEX 10</option>
                                <option value="40290">SEDEX hoje</option>
                                
                            </select>
                            <span class="Loader hide" style="float: left;"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px;"/></span>
                            <br/>
                            <span id="msg_erro"></span>
                            <br/>
                            


                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            </div>
</div>
<div style="clear: both;"></div>
<?php }} ?>

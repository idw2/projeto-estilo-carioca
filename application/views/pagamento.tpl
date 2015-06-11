{counter assign=i start=1 print=false} 
{foreach item=endereco from=$endereco_list}  
    {if $endereco->CODENDERECO != "" && $endereco->STATUS == "1"}
        {assign var="CEP" value="{$endereco->CEP}"}
        {assign var="CODENDERECO" value="{$endereco->CODENDERECO}"}
    {/if}    
    {counter}    
{/foreach}


<div>
    {*    <img src="{$web_files}/img/transportadoras.jpg" alt="Métodos de Envio" title="Métodos de Envio" border="0" style="width: 268px;"/><br>*}
    <img src="{$web_files}/img/correios.jpg" alt="Métodos de Envio" title="Métodos de Envio" border="0" style="width: 168px;"/><br>
    {*    (*) Método de envio preferêncial Total Express Transportadora<br>*}
    (*) Atenção: Alguns serviços de entrega de encomenda poderão não estar disponíveis em algumas localidades 
</div>
{if $nenhum_produto == false}   

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
                        <input type="hidden" class="form-control" id="total_peso" name="total_peso" value="{$total_peso}"/>
                        <input type="hidden" class="form-control" id="cep_destinatario_2" name="cep_destinatario_2" value="{$cep_remetente}"/>
                        <input type="text" class="form-control" id="cep_destinatario" name="cep_destinatario" maxlength="8" value="{$CEP}" onkeypress="return formataCEP(event, this);" placeholder="Insira seu CEP" readonly="readonly"/>
                    </td>
                    <td  style="border: 0 !important">
                        <select id="forma_envio" class="select myFormaEnvio">
                            {*                                <option value="total_express">Total Express - Transportadora</option>*}
                            <option value="41106" selected>Correios - PAC</option>
                            <option value="40010">Correios - SEDEX</option>
                            <option value="40215">Correios - SEDEX 10</option>
                            <option value="40290">Correios - SEDEX hoje</option>
                            <option value="Retirada na Loja">Retirada na Loja</option>
                            {*<option value="81019">e-SEDEX</option>*}
                        </select>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="margin-bottom: 10%">                    
        <span class="Loader hide" style="text-align: center; width: 100%; display: inline-block;"><img src="{$web_files}/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 21px;"/></span>
    </div>
    <div id="msg_erro"></div>
{/if}
<div style="clear: both;"></div>

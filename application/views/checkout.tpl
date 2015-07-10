{include file="header.tpl"}

<section class="section">
    <div class="container" style="padding-top: 25px;">
        <div class="row">
            <div class="col-md-9">
                <div class="section-title2">
                    <h2 class="title">Finalizar Compra</h2>
                    <p  class="subtitle">CHECKOUT</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-9">
                <h2 class="title-lg">SEUS PRODUTOS <img src="/web-files/img/Loader.GIF" alt="Carregando..." alt="Carregando..." boder="0" style="width: 22px;" class="img-load-seus-produtos hide"/></h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default"> 
                            <table class="table table-update" style="font-size: 14px;">
                                <thead  style="border-bottom: solid 2px #e7e7e7; margin-bottom: 15px;">
                                    <tr>
                                        <th>Produto</th>
                                        <th>Nome do Produto</th>
                                        <th>Referência</th>
                                        <th>Preço</th>
                                        <th style="width: 11%;">Quantidade</th>
                                        <th style="width: 8%;">Total</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody-update">
                                    {if $nenhum_produto == true}
                                        <tr>
                                            <th colspan="10">Nenhum produto na sua Lista de Desejos!</th>
                                        </tr>
                                    {else}    
                                        {foreach item=lista_desejo from=$ld}  
                                            {assign var="teste" value="OK"}
                                            <tr style="border-bottom: solid 2px #e7e7e7; margin-bottom: 15px;">
                                                <td><a href="/{$language}/descricao/categoria/{$lista_desejo->CATEG}/{$lista_desejo->URL_AMIGAVEL}"><img src="{$lista_desejo->FOTO}" alt="{$lista_desejo->NOME}" title="{$lista_desejo->NOME}" border="0"/></a><br/></td>
                                                <td style="text-transform: uppercase;">
                                                    {$lista_desejo->NOME}<br/><b>Tamanho: </b> {$lista_desejo->ROTULO} - {$lista_desejo->ESPECIFICACAO}
                                                    {if $lista_desejo->CATEG == 'promocao'}
                                                        {$lista_desejo->TAMANHO_B}
                                                    {/if}
                                                    
                                                    {if $lista_desejo->ALERT != ""}
                                                        <br/><span style="color: #df5d65; font-size: 10px; font-weight: bold;">{$lista_desejo->ALERT}</span>
                                                    {/if}
                                                </td>
                                                <td>{$lista_desejo->REFERENCIA}</td>
                                                <td>{$lista_desejo->PRECO}</td>
                                                <td id="n_input">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                {if $lista_desejo->CATEG != 'promocao'}
                                                                    <span style="cursor: pointer;" class="minus" onclick="javascript:plus_wishlist_checkout('{$url_checkout}{$lista_desejo->CODPRODUTO}&COMANDO=menos&CODLISTADESEJOS={$lista_desejo->CODLISTADESEJOS}&imposto={$imposto}&CODQUANTIDADE={$lista_desejo->CODQUANTIDADE}', '{$lista_desejo->CODLISTADESEJOS}');" title="Menos item"><i class="fa fa-minus-square"></i></span>&nbsp;
                                                                    {/if}
                                                            </td>
                                                            <td>
                                                                <input type="text" name="quantidade" id="input_{$lista_desejo->CODLISTADESEJOS}"  style="width: 44px; text-align: center;" value="{$lista_desejo->QUANTIDADE}" readonly="readonly"/>
                                                            </td>
                                                            <td>
                                                                {if $lista_desejo->CATEG != 'promocao'}
                                                                    &nbsp;<span style="cursor: pointer;" class="plus" onclick="javascript:plus_wishlist_checkout('{$url_checkout}{$lista_desejo->CODPRODUTO}&COMANDO=mais&CODLISTADESEJOS={$lista_desejo->CODLISTADESEJOS}&imposto={$imposto}&CODQUANTIDADE={$lista_desejo->CODQUANTIDADE}', '{$lista_desejo->CODLISTADESEJOS}');" title="Mais item"><i class="fa fa-plus-square"></i></span>
                                                                    {/if}
                                                            </td>
                                                        </tr>
                                                    </table>                
                                                </td>
                                                <td  id="preco_total_produto_{$lista_desejo->CODLISTADESEJOS}"> {if $lista_desejo->TOTAL eq ""}0,00{else}{$lista_desejo->TOTAL}{/if}</td>
                                                <td><span onclick="javascript:del_row_wishlist('{$url_checkout}{$lista_desejo->CODPRODUTO}&CODQUANTIDADE={$lista_desejo->CODPRODUTO}&CODQUANTIDADE={$lista_desejo->CODQUANTIDADE}')"><i class="fa fa-times"></i></span></td>
                                            </tr>
                                        {/foreach} 
                                        <tr>
                                            <td colspan="10" valign="center">
                                                <img src="{$web_files}/img/present.png" border="0" alt="Embalagem para presente" alt="Embalagem para presente"/> <strong>Deseja que embale para presente?</strong> <span style="cursor: pointer; color: #8795ae; font-style: italic;" onclick="embalar_presente()"/>Clique aqui</span> <span {if $embalar_presente eq "1" }class="yes"{else}class="yes hide"{/if}> &nbsp;<img src="{$web_files}/img/yes.png" alt="OK" title="OK" border="0"/></span>
                                                <style>
                                                    .panel-toggle{
                                                        background: #EFEDED;
                                                        border-bottom: solid 2px #D2D2D2 !important;
                                                        padding: 12px;
                                                    }
                                                </style>
                                            </td>
                                        </tr>
                                    {/if}

                                </tbody>
                            </table>    

                            {if $nenhum_produto == false}
                                <table class="table" style="font-size: 11px; margin-top: 12px; border: 0 !important;">
                                    <thead style="border: 0 !important;">
                                        <tr style="border: 0 !important;">
                                            <th colspan="3" style="border: 0 !important;">Calcular frete e prazo: </th>
                                        </tr>
                                    </thead>
                                    <tbody style="border: 0 !important;">
                                        <tr style="border: 0 !important;">
                                            <td style='width: 35%; border: 0 !important;'>
                                                <input type="hidden" class="form-control" id="codproduto" name="codproduto" value="{$codproduto}"/>
                                                <input type="hidden" class="form-control" id="codcadastro" name="codcadastro" value="{$codcadastro}"/>
                                                <input type="hidden" class="form-control" id="total_peso" name="total_peso" value="{$total_peso}"/>
                                                <input type="hidden" class="form-control" id="cep_remetente" name="cep_remetente" value="{$cep_remetente}"/>
                                                <input type="text" class="input" id="cep_destinatario" name="cep_destinatario" maxlength="8" value="{$CEP}" onkeypress="return formataCEP(event, this);" placeholder="CEP" style="width: 95%;"/>
                                            </td>
                                            <td style='width: 35%; border: 0 !important;'>
                                                <select id="forma_envio_rapido" class="select2" style="width: 100%;">
                                                    {*                                                    <option value="total_express">Total Express - Transportadora</option>*}
                                                    <option value="41106">Correios - PAC</option>
                                                    <option value="40010">Correios - SEDEX</option>
                                                    <option value="40215">Correios - SEDEX 10</option>
                                                    <option value="40290">Correios - SEDEX hoje</option>
                                                    {*<option value="81019">e-SEDEX</option>*}
                                                </select>
                                            </td>
                                            <td style="border: 0 !important;">
                                                <button type="button" id="btn_calc_cep_rapido" class="btn btn-default btn-sm" style="width: 100%; border-radius: 0" role="button">Calcular</button>
                                            </td>
                                        </tr>
                                        <tr style="border: 0 !important;">
                                            <td colspan="3" style="border: 0 !important;">
                                                <div style='height: 30px;'>
                                                    <span id="msg_erro" style="color: #df5d65; font-weight: bold; line-height: 4;"></span>
                                                    <div class="LoaderImg hide" style="text-align: center">
                                                        <img src="{$web_files}/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px;"/>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div id="table-frete" style="display: none;">
                                    <hr>
                                    <table style="width: 100%;">
                                        <thead style="border-bottom: solid 1px #e9e9e9;">
                                            <tr>
                                                <th><p style="color: #1f3c8a; font-weight: bold;">Entrega</p></th>
                                        <th><p style="color: #1f3c8a; font-weight: bold;">Frete</p></th>
                                        <th><p style="color: #1f3c8a; font-weight: bold;">Prazo</p></th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td>
                                                <p id='entrega' style="font-weight: 400; margin: 12px 0;"></p>
                                            </td>
                                            <td>
                                                <p id='frete' style="font-weight: 400; margin: 12px 0;"></p>
                                            </td>
                                            <td>
                                                <p id='prazo' style="font-weight: 400; margin: 12px 0;"></p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            {/if} 
                        </div>
                    </div>
                </div>
                <div>
                    <ul class="list-unstyled">
                        <li class="previous pull-left" ><a href="/{$language}/nossos-produtos" >&larr; Continuar comprando</a></li>
                            {if $teste == "OK"}
                            <li class="next pull-right"><a onclick="javascript:scrollToAnchor('step-1')" class="btn btn-primary">Finalizar compra &rarr;</a></li>
                                {*                        <li class="next pull-right hide"><a onclick="javascript:finalizar_compra()" class="btn btn-primary">Finalizar compra &rarr;</a></li>*}
                            {/if}
                    </ul>
                </div> 
                <div class="row">
                    <div class="col-lg-12" style="text-align: center; margin-bottom: 7%;">
                        <hr style="position: relative; top: 18px; border-top: 5px solid #eee; width: 100%"/>
                        <img src="{$web_files}/img/Lock.png" alt="Checkout seguro"  title="Checkout seguro" border="0" style="width: 7%; position: relative; bottom: 30px; border: 8px solid #fff; border-radius: 13px;"/>
                        <h3 style="color: #8795ae;" id="checkout_seguro">CHECKOUT SEGURO</h3>
                        <div style="font-size: 22px;">TOTAL DE 4 PASSOS</div>
                    </div>
                </div>        
                <div class="row steps step-1 hide">
                    <div class="col-lg-12">
                        <div class="section-title3" style="text-align:left; margin-bottom: -2em;">
                            <span class="title-tag">1</span>
                            <h2 class="title">A COMPRA SERÁ REALIZADA POR</h2>
                        </div>
                        <div id="step-1" style="text-align:center; margin-top: 9%; margin-bottom: 4%;"> </div>
                    </div>
                </div>
                <div class="row steps step-2 hide">

                    <div class="col-lg-12">
                        <div class="section-title3" style="text-align: left; margin-bottom: 7%;">
                            <span class="title-tag">2</span>
                            <h2 class="title">MEUS ENDEREÇOS</h2>
                        </div>
                        <div id="step-2" style="margin-bottom: 3%;"> </div>
                    </div>
                </div>  
                <div class="row steps step-3 hide">
                    {* <hr>*}
                    <div class="col-lg-12">
                        <div class="section-title3" style="text-align: left; margin-bottom: 6%;">
                            <span class="title-tag">3</span>
                            <h2 class="title">FORMA DE ENVIO</h2>
                        </div>
                        <div id="step-3"> </div>
                    </div>
                </div>  
                <div class="row steps step-4 hide">
                    {*<hr>*}
                    <div class="col-lg-12">
                        <div class="section-title3" style="text-align: left; margin-bottom: 13%;">
                            <span class="title-tag">4</span>
                            <h2 class="title">FORMA DE PAGAMENTO</h2>
                        </div>
                        <div id="step-4" style="margin-bottom: 17%"> </div>
                    </div>
                </div>
            </div>
            {if $nenhum_produto == false}
                <div id="checkout-panel-2" class="checkout-panel-2 checkout-panel">
                    <div id="total-box-tabela">
                        <table width="100%">
                            <tbody>
                                <tr class="cart_total_price_product" style="font-weight: normal; display: none">
                                    <td colspan="6" style="width: 105px;">Produtos sem impostos :</td>
                                    <td class="sta-right-text" id="total_parcial">
                                        {if $sem_impostos eq ""}
                                            0,00
                                        {else}
                                            {$sem_impostos}    
                                        {/if}                                
                                    </td>
                                </tr>
                                <tr class="cart_total_price_product" style="font-weight: normal; display: none">
                                    <td colspan="6" style="width: 105px;">Impostos :</td>
                                    <td class="sta-right-text" id="total_impostos">
                                        {if $sobre_valor eq ""}
                                            0,00
                                        {else}
                                            {$sobre_valor}    
                                        {/if}                                
                                    </td>
                                </tr>
                                <tr class="cart_total_voucher hide">
                                    <td colspan="6">
                                        Desconto :
                                    </td>
                                    <td class="sta-right-text price-discount" id="total_discount">
                                        R$0,00
                                    </td>
                                </tr> 

                                <tr class="cart_total_voucher hide">
                                    <td colspan="6">
                                        Total gift-wrapping :
                                    </td>
                                    <td class="sta-right-text price-discount" id="total_wrapping">
                                        R$0,00
                                    </td>
                                </tr>

                                <tr class="cart_total_delivery_tp">
                                    <td colspan="6" id="total_product-txt">
                                        Total de Produtos:
                                    </td>
                                    <td class="sta-right-text">
                                        {if $total_geral eq ""}
                                            0,00
                                        {else}
                                            {$total_geral}    
                                        {/if}                                
                                    </td>
                                </tr>

                                <tr class="cart_total_delivery" style="">
                                    <td colspan="6" id="total_product-txt">
                                        Quantidade:
                                    </td>
                                    <td class="sta-right-text">
                                        {if $total_produtos eq ""}
                                            0 Item
                                        {else}
                                            {if $total_produtos == 1 }{$total_produtos} Item{else}{$total_produtos} Itens {/if}
                                        {/if}                                
                                    </td>
                                </tr>

                                <tr class="cart_total_delivery">
                                    <td colspan="6">Frete:</td>

                                    <td id="taxa_entrega" class="sta-right-text">

                                    </td>
                                </tr>

                                <tr class="prazo_entrega_tr hide">
                                    <td colspan="6">Prazo de Entrega:</td>

                                    <td id="prazo_entrega" class="sta-right-text">
                                        0,00
                                    </td>
                                </tr>

                                <tr class="cart_total_price" style="">
                                    <td colspan="6" id="total_product-txt">
                                        Total:
                                    </td>
                                    <td class="sta-right-text" id="total_geral">
                                        {if $total_geral eq ""}
                                            0,00
                                        {else}
                                            {$total_geral}    
                                        {/if}                                
                                    </td>
                                </tr>
                                <tr class="cart_total_tax" style="display:none">
                                    <td colspan="6">
                                        Total:
                                    </td>
                                    <td class="price sta-right-text" id="total_tax">R$0,00</td>
                                </tr>
                                <tr class="cart_total_price" style="display:none">
                                    <td colspan="6">
                                        Total:
                                    </td>
                                    <td class="sta-right-text"> R$380,00 </td>

                            </tbody>
                        </table>
                    </div>
                    <div id="cart_voucher">
                        <form action="#" method="post" id="voucher" onsubmit="return false">
                            <fieldset>
                                <label for="discount_name"><b>CUPOM DE DESCONTO</b> </label>
                                <input type="text" id="discount_name" name="discount_name" value="" style="text-align: center;" class="form-control" style="margin-bottom: 12px" maxlength="6">
                                <p class="submit">
                                    <input type="hidden" name="ticket_desconto" id="ticket_desconto"/>
                                    <button type="button" name="submitAddDiscount" id="submitAddDiscount" class="btn btn-default" onclick="javascript:checar_desconto();" style="margin-top: 10px;">ADICIONAR CUPOM</button>
                                </p>   
                                <div class="cart-voucher-txt-alert" style="color: #8795ae;"></div>
                                <div class="cart-voucher-txt">Caso você possua um cupom de desconto ou presente, adicione acima</div>
                            </fieldset>
                        </form> 
                    </div>
                    <div id="eseguro"> 
                        <h6>É UM SITE SEGURO?</h6>
                        <p>Sim, a Estilo Carioca utiliza criptografia (SSL) e tem auditoria diária.</p>
                        <div style=" margin-top: 12px; ">
                            <div class="selo-top-cart-cartao">
                                <div id="armored_website" style="display: inline-block;">
                                    <param id="aw_preload" value="true" />
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            {/if}
        </div>
    </div>
</section>

{include file="footer.tpl"}
{if $teste == "OK"}
    <script>

        $(document).ready(function () {
            finalizar_compra();
        });


    </script>
{/if}
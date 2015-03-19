{include file="header.tpl"}

<section class="section product">
    <div style="margin-top: 5%;"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <figure class="product-img">

                    <div class="slider-for product-slider ">
                        {counter assign=i start=0 print=false}
                        {foreach item=fful from=$fotos_full}
                            {if $i == 0}
                                {assign var="FOTO_SM" value="{$fful->FOTO_LG}"}
                            {/if}
                            <div>
                                <a  href="{$fful->FOTO_LG}" class="imagem-produto" rel="gallery">

                                    <img   src="{$fful->FOTO_IT}" alt="{$nome}" border="0" title="{$nome}" />
                                </a>
                                <a  href="{$fful->FOTO_LG}" class="imagem-produto-zoom fontawesome-zoom-in">

                                </a>
                            </div>
                            {counter}
                        {/foreach}

                    </div> 

                    <div class="slider-nav product-slider-nav">
                        {counter assign=i start=0 print=false}
                        {foreach item=fful from=$fotos_full}
                            <div style="width: 130px !important;">
                                <img style="cursor:pointer;" width="100" height='100' src="{$fful->FOTO_MD}" alt="{$nome}" border="0" title="{$nome}" />
                            </div>
                            {counter}
                        {/foreach}
                    </div>
                </figure>
                {*                <div class="col-lg-12">*}

                {*                    {if $nome_logon != ""}*}
                {* <div class="panel panel-primary">
                <div class="panel-heading">
                <span class="panel-title">Wishlist</span>
                </div>
                <div class="panel-body">

                <table class="table" style="font-size: 14px">*}

                {*                                    {if $nenhum_produto == true}*}
                {*<tr>
                <th colspan="10">Nenhum produto!</th>
                </tr>*}
                {*                                    {else}    *}
                {*                                        {foreach item=lista_desejo from=$ld}  *}

                {*
                <tr style="font-size: 11px;">
                <td>
                <a href="/{$language}/descricao/categoria/{$lista_desejo->CATEG}/{$lista_desejo->URL_AMIGAVEL}">
                <img src="{$lista_desejo->FOTO}" alt="{$lista_desejo->NOME}" title="{$lista_desejo->NOME}" border="0"/>
                </a>
                </td>
                <td>
                <table>
                <tr>
                <td>
                {$lista_desejo->NOME}
                </td>
                </tr>
                <tr>
                <td>
                {$lista_desejo->REFERENCIA}
                </td>
                </tr>
                <tr>
                <td>
                {$lista_desejo->PRECO}
                </td>
                </tr>
                <tr>
                <td>
                <input type="text" name="quantidade" id="input_{$lista_desejo->CODLISTADESEJOS}"  style="width: 44px; text-align: center;" value="{$lista_desejo->QUANTIDADE}" readonly="readonly"/>
                </td>
                </tr>
                </table>
                </td>
                </tr>
                *}
                {*                                        {/foreach} *}
                {* <tr>
                <td colspan="4" valign="center">
                <strong>Programa de fidelidade:</strong> Com esta compra você vai ganhar R$ <span class="bonus">{$bonus}</span> de bônus para utilizar nas próximas compras. <a href="/{$language}/informacoes/programa-fidelidade" target="_blank" style="color: #df5d65; font-style: italic;">Saiba como funciona</a>
                </td>
                </tr>*}
                {*                                    {/if}*}

                {*                                </table>*}


                {*Nenhum produto*}
                {*
                <div class="text-right">
                <a href="/{$language}/conta/wishlist" class="btn-link">&raquo; Meus Desejos</a>
                </div>
                </div>
                </div>*}
                {*                    {/if}*}
                {*                </div>*}
            </div>
            <div class="col-sm-7">
                <div class="product-infos">
                    <div class="product-infos-row">
                        <h1 class="title">{$nome}</h1>
                        <div class="price-rating">
                            <span class="estrelas e-5"></span>
                            <span class="price" style="text-align: right;">
                                {if $is_promocao eq 1}<span class="price-through">R$ {$de}</span>{/if} <span style="float:right; margin-bottom: 10px">R$ {$preco}</span>
                                <br>
                                <span class="produto-parcelamento" style="font-size: 14px; text-align: right; display: inherit;">ou <strong>6x</strong> de <strong>R$ {$preco_6}</strong></span>
                            </span>
                        </div>
                    </div>


                    <div class="product-infos-row">   

                        <input type="hidden" id="client_hidden" name="client_hidden" value="{$client_hidden}"/>
                        <input type="hidden" id="codproduto" name="codproduto" value="{$codproduto}"/>
                        <table class="table table-datagrid">
                            <thead>
                                <tr>
                                    {*<span style="margin-right:15px;margin-top: 7px; margin-left: 1em;font-family: 'Roboto Slab', 'Helvetica', 'sans-serif';">CLIQUE PARA INCLUIR</span>*}
                                </tr>
                                {*<tr>
                                <img src="{$web_files}/img/plus_1.png" width="25" height="25" style="margin-right:7px; cursor: pointer !important" id="plus" data-toggle="tooltip" border="0" alt="" title="Adicionar Linha"> <img src="{$web_files}/img/less_1.png" id="less" style=" cursor: pointer !important" data-toggle="tooltip" border="0" alt="" width="25" height="25"  title="Retirar Linha">
                                </tr>*}

                                <tr >
                                    <th style="border: 0; text-align: center; font-family: 'Roboto Condensed', 'Helvetica', 'sans-serif';font-weight: 400; letter-spacing: 1px;">TAMANHO</th>
                                    <th style="border: 0; text-align: center!important;font-family: 'Roboto Condensed', 'Helvetica', 'sans-serif';font-weight: 400; letter-spacing: 1px;"">QUANTIDADE</th>
                                    <th style="border: 0; text-align: center;font-family: 'Roboto Condensed', 'Helvetica', 'sans-serif';font-weight: 400; letter-spacing: 1px;"">{*DISPONIBILIDADE*}</th>
                                </tr>
                            </thead>
                            <tbody id="data">
                                <tr class="datagrid">
                                    <td>
                                        <div class='label-top inline-middle'>
                                            <select name='tamanho_0' id='tamanho_0' class='select select-loop' onchange='javascript:is_disponibilidade(this.value, this.name);'>
                                                {counter assign=i start=0 print=false}
                                                <option value='' selected></option>
                                                {foreach item=rotulo from=$rotulos}
                                                    <option value='{$rotulo->CODQUANTIDADE}' >{$rotulo->ROTULO}{if $rotulo->ESPECIFICACAO != ""} - {$rotulo->ESPECIFICACAO}{/if}</option>
                                                    {counter}
                                                {/foreach}
                                            </select>
                                        </div>
                                    </td>
                                    <td valign='left'>
                                        <div class='label-top inline-middle'>
                                            <select name='quantidade_0' id='quantidade_0' class='select select-loop' onchange='javascript:is_disponibilidade_row(0);'/>
                                            <option value='' selected></option>
                                            {counter assign=i start=1 print=false}
                                            {while $i < 11}
                                                <option style='margin-left:20px; position: absolute;' value='{$i}'>{if strlen($i) == 1}0{$i}{else}{$i}{/if}</option>
                                                {counter}
                                            {/while}
                                            </select> 
                                        </div>
                                    </td>
                                    <td id='verificar_0' style='width: 30%;'> <div style='line-height: 35px; color: #8795ae;'>VERIFICAR!</div> </td>

                                </tr>
                                {* <tr class='avise-me-hide-0 hide'> 
                                <td colspan='3'>
                                <div class='product-infos-row hide-email'>
                                <label style="text-align: center!important; font-family: 'Roboto Condensed', 'Helvetica', 'sans-serif'; font-weight: 400; letter-spacing: 1px; text-transform: uppercase;">Avise-me ao chegar: </label> 
                                <div class="input-group">
                                <input type='hidden' class='form-control avise-me-ao-referencia' value='{$referencia}'>
                                <input type="text" class='form-control avise-me-ao-chegar-0' id='' value='{$email_logon}' placeholder='E-mail'>
                                <span class='input-group-btn'>
                                <button class='btn btn-default avise-me-ao-chegar-button-0' type='button' onclick=''><b>ENVIAR</b></button>
                                </span>
                                </div>
                                </div>
                                <span class='avise-me-load-0 Loader hide'><img src="{$web_files}/img/Loader.GIF" alt='Carregando...' title='Carregando...'  style='width: 20px'/></span>
                                <div class='avise-me-ao-chegar-error-0' style='color: #df5d65; font-weight: bold; line-height: 4;'></div>
                                <div style='clear: both'> </div>
                                </td>
                                </tr>*}
                            </tbody> 
                        </table>


                    </div>   
                    <div class='avise-me-hide-0 hide product-infos-row hide-email'>
                        <label style="text-align: center!important; font-family: 'Roboto Condensed', 'Helvetica', 'sans-serif'; font-weight: 400; letter-spacing: 1px; text-transform: uppercase;">Avise-me ao chegar: </label> 
                        <div class="input-group">
                            <input type='hidden' class='form-control avise-me-ao-referencia' value='{$referencia}'>
                            <input type="text" class='form-control avise-me-ao-chegar-0' id='' value='{$email_logon}' placeholder='E-mail'>
                            <span class='input-group-btn'>
                                <button class='btn btn-default avise-me-ao-chegar-button-0' type='button' onclick=''><b>ENVIAR</b></button>
                            </span>
                        </div>
                    </div>

                    {*<table class="table" style=" text-transform: uppercase; font-family: 'Roboto Condensed', 'Helvetica', 'sans-serif'; ">
                    <thead>
                    <tr>
                    <th style=' padding-left: 10em; font-weight: 400;' colspan="3">Calcular frete e prazo: </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td style='width: 35%;'>
                    <input type="hidden" id="total_peso" name="total_peso" value="{$peso}"/>
                    <input type="hidden" id="cep_remetente" name="cep_remetente" value="{$cep_remetente}"/>
                    <input type="text"  class="input" id="cep_destinatario" name="cep_destinatario" maxlength="8" value="{$CEP}" onkeypress="return formataCEP(event, this);" placeholder="CEP" style="width: 210px; position: absolute;border-color: #8795ae !important;height: 38px;"/>
                    <input type="hidden" id="total_parcial" name="total_parcial" maxlength="8" value="{$preco}" onkeypress="return formataCEP(event, this);" placeholder="CEP"/>
                    <input type="hidden" id="total_impostos" name="total_impostos" maxlength="8" value="{$total_impostos}" onkeypress="return formataCEP(event, this);" placeholder="CEP"/>
                    </td>
                    <td width='175'>
                    <select id="forma_envio_rapido" class="select">*}
                    {*                                                <option value="total_express">Total Express - Transportadora</option>*}
                    {* <option value="41106">Correios - PAC</option>
                    <option value="40010">Correios - SEDEX</option>
                    <option value="40215">Correios - SEDEX 10</option>
                    <option value="40290">Correios - SEDEX hoje</option>*}
                    {*<option value="81019">e-SEDEX</option>*}
                    {* </select>
                    </td>
                    <td>
                    <button style='width:200px; margin-left: 30px; float: right;' type="button" id="btn_calc_cep_rapido" class="btn btn-default btn-sm" role="button">Calcular</button>
                    </td>
                    </tr>
                    <tr>
                    <td colspan="3">
                    <div style='height: 30px;'>
                    <span id="msg_erro" style="color: #1f3c8a; font-weight: bold; line-height: 4;"></span>
                    <span class="LoaderImg hide">
                    <img src="{$web_files}/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 22px;"/>
                    </span>
                    </div>
                    </td>
                    </tr>
                    <tbody>
                    </table>*}

                    {*<div class="product-infos-row">    
                    <div class="label-outline label-outline-light" style="border:none;">Disponibilidade: <strong>{if $quantidade == "0"}Esgotado{else}Em Estoque{/if}</strong></div>
                    </div>*}


                    <div class="product-infos-row show-btn-comprar">

                        <a href="" class="btn btn-default btn-buy btn-block comprar" data-params="{$lista_desejos}" data-id="{$produto->CODPRODUTO}" data-img="{$FOTO_SM}" data-redirect="/{$language}/produtos/checkout/" data-name="{$nome}">INCLUIR NO CARRINHO</a>
                        <br>

                        <span class="Loader hide"><img src="{$web_files}/img/Loader.GIF" alt="Carregando..." title="Carregando..."/></span>
                    </div>
                    {*                    <div class="product-infos-row">*}
                    {*                        {if (int)$quantidade > 0}*}


                    {* <div class="product-infos-row" id="table-frete" style="display: none !important;">
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
                    </div>*}
                    {*                        {/if}*}
                    {*                    </div>    *}


                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Descrição do Produto</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Tamanhos</a></li>

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" style="padding: 1%;"> 
                                <div class="product-infos-row product-description"> 
                                    <br/>
                                    {$descricao}
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile" style="padding: 1%;">
                                <div class="product-infos-row">
                                    <br/>
                                    {$especificacoes}
                                </div>
                            </div>
                        </div>

                        <style>
                            .tab-content{
                                max-width: 100%;
                            }
                            .tab-content table{
                                width: 100%;
                            }
                            .tab-content table thead td:last-child{
                                width: 20%;
                            }
                            .tab-content table thead td{
                                width: 40%;
                            }
                        </style>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="share">
                                    <span>COMPARTILHE:</span>
                                    <ul class="list-inline list-social">
                                        {*                        <li><a href="http://twitter.com/share?text={$titulo}&url={$url}&via=maria_de_barro" target="_blank"><i class="sprite sprite-twitter-2"></i></a></li>*}
                                        <li style="margin: 0 !important;"><a href="http://www.facebook.com/sharer.php?u={$site}{$language}/{$ctgr}/{$url_amigavel}?news=s&utm_source=fbBTshare" target="_blank" ><b class="entypo-facebook"></b></a></li>
                                        <li style="margin: 0 !important;"><a href=""><b class="entypo-mail"></b></a></li>    
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

</section>

<section class="section section-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="title">Produtos Relacionados</h2>
                    <a href="" class="subtitle">VEJA TODOS</a>
                </div>
            </div>
        </div>
        <div class="row">
            {foreach item=produto from=$arr}
                {if $produto->CODPRODUTO != ""}
                    <div class="col-sm-3">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}">
                                    <img src="{$produto->CROP268}" alt="{$produto->NOME}" title="{$produto->NOME}" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ {$produto->PRECO}</h2>
                                        <p class="name">{if $produto->CATEGORIA == "junior"}Junior{else}Nilton Santos{/if}<br/><span style="font-size: 18px !important;">{$produto->NOME}</span></p>
                                        <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {/if}
            {/foreach}


        </div>
        <hr style="margin-top: 9%;">
    </div>
</section>



<style>
    .datagrid > td {
        border: 0 !important;
        padding: 0 !important;
    }
    .table-datagrid > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
        border: 0 !important;
        padding: 0 !important;
    }
    .select{
        position: relative !important;
    }
    .product-infos .label-top {
        margin-right: 0;
    }
    .product-infos .title {
        margin: 25px 0 0 !important;
    }
</style>
{include file="footer.tpl"}

<script>

    $(document).ready(function () {
        $("#less").click(function () {
            datagrid_less()
        });
        $("#plus").click(function () {
            datagrid_plus()
        });
    });

    function datagrid_less() {
        var n = 0;
        $("#data .datagrid").each(function (i) {
            n = i;
        });
        var qntdd = (parseInt(n) - 1);

        if (qntdd > -1) {
            $("#data .datagrid:last").remove();
        }

    }

    function datagrid_plus() {

        var n = 0;
        $("#data .datagrid").each(function (i) {
            n = i;
        });
        var qntdd = (parseInt(n) + 1);


        var str = "<tr class='datagrid'>";
        str += "<td style='text-align: center'>";
        str += "<div class='label-top inline-middle'>";
        str += "<select name='tamanho_" + qntdd + "' id='tamanho_" + qntdd + "' class='select select-loop' onchange='javascript:is_disponibilidade(this.value, this.name);'>";
        str += "<option value='' selected></option>";
    {counter assign=i start=0 print=false}
    {foreach item=rotulo from=$rotulos}
        str += "<option value='{$rotulo->CODQUANTIDADE}'>{$rotulo->ROTULO}{if $rotulo->ESPECIFICACAO != ""} - {$rotulo->ESPECIFICACAO}{/if}</option>";
        {counter}
    {/foreach}
        str += "</select>";
        str += "</div>";
        str += "</td>";
        str += "<td style='text-align: center'>";
        str += "<div class='label-top inline-middle'>";
        str += "<select name='quantidade_" + qntdd + "' id='quantidade_" + qntdd + "' class='select select-loop' onchange='javascript:is_disponibilidade_row(" + qntdd + ");'>";
        str += "<option value='' selected></option>";
    {counter assign=i start=1 print=false}
    {while $i < 11}
        str += "<option value='{$i}'>{if strlen($i) == 1}0{$i}{else}{$i}{/if}</option>";
        {counter}
    {/while}
        str += "</select>";
        str += "</div>";
        str += "</td><td id='verificar_" + qntdd + "' style='width: 30%;'> <span style='color: #8795ae'>VERIFICAR!</span> </td>";
        str += "</tr>";
        str += "<tr class='avise-me-hide-" + qntdd + " hide'>";
        str += "<td colspan='3'>";
        str += "<div class='product-infos-row hide-email'>";
        str += "<label style=\"margin-bottom: 15px; margin-top: 10px; color: #87020b; float: left; font-family: 'Roboto Slab', 'Helvetica', 'sans-serif'\">Avise-me ao chegar: </label> ";
        str += "<div class='input-group'>";
        str += "<input type='hidden' class='form-control avise-me-ao-referencia' value='{$referencia}'>";
        str += "<input type='text' class='form-control avise-me-ao-chegar-" + qntdd + "' id='' value='{$email_logon}' placeholder='E-mail'>";
        str += "<span class='input-group-btn'>";
        str += "<button class='btn btn-default avise-me-ao-chegar-button-" + qntdd + "' type='button' onclick=''><b>ENVIAR</b></button>";
        str += "</span>";
        str += "</div>";
        str += "</div>";
        str += "<span class='avise-me-load-" + qntdd + " Loader hide'><img src='{$web_files}/img/Loader.GIF' alt='Carregando...' title='Carregando...' style='width: 20px'/></span>";
        str += "<div class='avise-me-ao-chegar-error-" + qntdd + "' style='color: #df5d65; font-weight: bold; line-height: 4;'></div>";
        str += "<div style='clear: both'> </div>";
        str += "</td>";
        str += "</tr>";

        $("#data").append(str);

    }

    function is_disponibilidade(codquantidade, nome) {

        var n = nome.replace("tamanho_", "");
        var verificar = "verificar_" + n;
        var quantidade = "quantidade_" + n;

        $("#" + verificar).html("<div style='line-height: 0; color: #8795ae; position: relative; top: 9px;'><img src='{$web_files}/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style='opacity:1; width: 20px'/><br/><br/></div>");

        $.ajax({
            type: 'post',
            data: "codquantidade=" + codquantidade,
            url: '{$web_files}/ajax/is-disponibilidade',
            success: function (data) {

                console.log(Math.random() + ": " + data + ": " + $("#" + quantidade).val() + ": " + codquantidade);

                var qntdd = parseInt(data);
                var qntdd_compare = parseInt($("#" + quantidade).val());
                if (qntdd_compare > qntdd || qntdd == 0 || qntdd == "") {
                    var html1 = "<div style='line-height: 35px; color: #8795ae;'>INDISPONÍVEL!</div> <br>";
    {*                    html1 += $(".hide-email").html();*}
                    $("#" + verificar).html(html1);
                    $(".avise-me-hide-" + n).removeClass("hide");
                    if (codquantidade != "") {
                        var carragar = "avise-me-load-" + n;
                        var error = "avise-me-ao-chegar-error-" + n;
                        var email = "avise-me-ao-chegar-" + n;
                        $(".avise-me-ao-chegar-" + n).attr('id', codquantidade);
                        var jscrt = "javascript:avise_me_chegar('" + codquantidade + "', '" + error + "', '" + carragar + "', '" + email + "');";
                        $(".avise-me-ao-chegar-button-" + n).attr('onclick', jscrt);
                    }

                    $(".show-btn-comprar").addClass("hide");

                } else {
                    $("#" + verificar).html("<div style='line-height: 35px; color: #8795ae;'>DISPONÍVEL!</div>");
                    $(".avise-me-hide-" + n).addClass("hide");
                    $(".show-btn-comprar").removeClass("hide");
                }
            }
        });
    }

    function is_disponibilidade_row(indice) {

        var nome = "tamanho_" + indice;
        var codquantidade = $("#" + nome).val();
        if (codquantidade != "" || codquantidade != null) {
            is_disponibilidade(codquantidade, nome);
        }
    }

</script>
"
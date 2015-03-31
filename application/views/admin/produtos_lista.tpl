{include file="admin/header.tpl"}

<div class="sidebar">
    {include file="admin/navbar.tpl"}
</div>

<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            {include file="admin/logo.tpl"}
        </div>
        {include file="admin/search.tpl"}
    </div>
</div>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Lista de Produtos
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/{$language}/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Produtos
            </li>
        </ol>
    </div>
</div>    

<div class="row">
    <div class="col-md-12">



        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Busca por Categorias</h3>
                    </div>
                    <div class="panel-body">
                        <div class="flot-chart" style="height: 135px;">
                            <div class="flot-chart-content" id="flot-moving-line-chart">
                                <form method="post" id="formCategoria" style="margin: 3%;">
                                    <input type="radio" name="categoria" value="todos" {if $categoria == "todos"} checked="true" {/if} onclick="javascript:start_form_categoria();"/> Todos<br/>
                                    <input type="radio" name="categoria" value="junior" {if $categoria == "junior"} checked="true" {/if}  onclick="javascript:start_form_categoria();"/> Junior<br/>
                                    <input type="radio" name="categoria" value="nilton-santos" {if $categoria == "nilton-santos"} checked="true" {/if}  onclick="javascript:start_form_categoria();"/> Nilton Santos<br/> 
                                    <input type="hidden" name="actionType" value="pesquisa_categoria">
                                </form>
                            </div>
                        </div>
                        {*<div class="text-right">
                        <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                        </div>*}
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Total de Produtos</h3>
                    </div>
                    <div class="panel-body">
                        <div class="flot-chart" style="height: 150px;">
                            <div class="flot-chart-content" id="flot-bar-chart">

                                <table class='table'>
                                    <thead>
                                    <th>Categoria</th>
                                    <th>Quantidade</th>
                                    </thead>
                                    <tr>
                                        <td>Junior</td><td>{$qtdd_junior}</td>
                                    </tr>
                                    <tr>
                                        <td>Nilton Santos</td><td>{$qtdd_nilton_santos}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Geral</strong></td><td>{$total_produtos}</td>
                                    </tr>   
                                </table>

                            </div>
                        </div>
                        {*<div class="text-right">
                        <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                        </div>*}
                    </div>
                </div>
            </div>
        </div>


        {*<div class="row">
        <div class="col-md-6">

        <div class="container" style="width: 100%;"> 
        <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading">Busca por Categorias</div>
        <form method="post" id="formCategoria" style="margin: 3%;">
        <input type="radio" name="categoria" value="todos" {if $categoria == "todos"} checked="true" {/if} onclick="javascript:start_form_categoria();"/> Todos<br/>
        <input type="radio" name="categoria" value="aneis" {if $categoria == "aneis"} checked="true" {/if}  onclick="javascript:start_form_categoria();"/> Anéis<br/>
        <input type="radio" name="categoria" value="brincos" {if $categoria == "brincos"} checked="true" {/if}  onclick="javascript:start_form_categoria();"/> Brinco<br/>
        <input type="radio" name="categoria" value="colares" {if $categoria == "colares"} checked="true" {/if}  onclick="javascript:start_form_categoria();"/> Colares<br/>
        <input type="radio" name="categoria" value="pulseiras" {if $categoria == "pulseiras"} checked="true" {/if}  onclick="javascript:start_form_categoria();"/> Pulseiras<br/>
        <input type="radio" name="categoria" value="conjuntos" {if $categoria == "conjuntos"} checked="true" {/if}  onclick="javascript:start_form_categoria();"/> Conjuntos<br/>
        <input type="hidden" name="actionType" value="pesquisa_categoria">
        </form>
        </div> 
        </div> 
        </div> 

        </div>
        <div class="col-md-6">

        <div class="container" style="width: 100%;"> 
        <div class="row">
        <div class='panel panel-default'>
        <div class="panel-heading">Total de Produtos</div>
        <table class='table'>
        <thead>
        <th>Categoria</th>
        <th>Quantidade</th>
        </thead>
        <tr>
        <td>Anéis</td><td>{$qtdd_aneis}</td>
        </tr>
        <tr>
        <td>Brincos</td><td>{$qtdd_brincos}</td>
        </tr>
        <tr>
        <td>Colares</td><td>{$qtdd_colares}</td>
        </tr>
        <tr>
        <td>Pulseiras</td><td>{$qtdd_pulseiras}</td>
        </tr>
        <tr>
        <td>Conjuntos</td><td>{$qtdd_conjuntos}</td>
        </tr>
        <tr>
        <td><strong>Total geral</strong></td><td>{$total_produtos}</td>
        </tr>
        </table>
        </div>
        </div>
        </div>

        </div>
        </div>*}

        <br/>
        <a href="/{$language}/produtos/cadastrar" class="btn btn-lg btn-success" style="margin-bottom:20px;"><i class="fa fa-plus-square"></i> Cadastro de Produtos</a>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Produtos</h3>
                    </div>
                    <div style="width:100% !important;" class="panel-body">
                        <style>
                            .pNameImput{
                                width: 400px;
                                padding-right: 6px;
                                padding-left: 6px;
                            }

                            .pNameImput.Loader{
                                background: url(/web-files/img/Loader_small.gif) no-repeat;
                                background-position: center right 6px;
                            }
                        </style> 
                        <div class="col-lg-12">
                            <table class='table'>
                                <thead>
                                <th>#</th>
                                <th>Referência</th>
                                <th>Nome</th>
                                    {*<th>Categoria</th>
                                    <th>Peso</th>
                                    <th>Quantidade</th>*}
                                <th style="width: 14%;">Descrição</th>
                                    {*                            <th>Preço Unitário</th>*}
                                    {*<th>De</th>
                                    <th>Para</th>*}
                                <th>Ações</th>
                                </thead>

                                {if $ERRO_NAO_EXISTE_PRODUTOS == "ERRO_NAO_EXISTE_PRODUTOS"}
                                    <tr>
                                        <td colspan="7">Não existem produtos desta categoria cadastrados!</td>
                                    </tr>
                                {/if}

                                {counter assign=i start=0 print=false} 
                                {foreach item=produto from=$meus_produtos}  
                                    {if $produto->DESTAQUE == "0"}
                                        {$star = "desative"}
                                        {$dtq = "1"}
                                    {else}
                                        {$star = ""}
                                        {$dtq = "0"}
                                    {/if}    
                                    {if $produto->STATUS == "0"}
                                        {$eye = "desative"}
                                        {$stt = "1"}
                                    {else}
                                        {$eye = ""}
                                        {$stt = "0"}
                                    {/if}      
                                    {if $produto->IS_NOVO == "0"}
                                        {$heart = "desative"}
                                        {$nv = "1"}
                                    {else}
                                        {$heart = ""}
                                        {$nv = "0"}
                                    {/if} 
                                    {if $produto->IS_PROMOCAO == "0"}
                                        {$dolar = "desative"}
                                        {$pmc = "1"}
                                    {else}
                                        {$dolar = ""}
                                        {$pmc = "0"}
                                    {/if}
                                    {if $produto->MAIS_VENDIDO == "0"}
                                        {$trophy = "desative"}
                                        {$tph = "1"}
                                    {else}
                                        {$trophy = ""}
                                        {$tph = "0"}
                                    {/if}


                                    {if $produto->CODPRODUTO != "" && $teste != $produto->REFERENCIA}    

                                        {assign var="teste" value=$produto->REFERENCIA}
                                        <tr  class="delete-return-{$produto->CODPRODUTO} no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('{$produto->CODPRODUTO}', '{$produto->REFERENCIA}')">
                                                    {if $produto->IMG != ""}
                                                        <img src="{$produto->IMG}" border="0" style="width: 80px;" alt="{$produto->NOME}" title="{$produto->NOME}">
                                                    {else}
                                                        <img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="{$produto->NOME}" title="{$produto->NOME}">
                                                    {/if}
                                                    <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_{$produto->CODPRODUTO}" id="REFERENCIA_{$produto->CODPRODUTO}" value="{$produto->REFERENCIA}"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_{$produto->CODPRODUTO}', '{$produto->CODPRODUTO}')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_{$produto->CODPRODUTO}" id="PRECODE_{$produto->CODPRODUTO}" value="{$produto->DE}" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="{$produto->DE}" {if $email_restricao == "fabiano@mariadebarro.com.br" || $email_restricao == "thais@mariadebarro.com.br"}readonly="readonly"{/if}/>
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_{$produto->CODPRODUTO}', '{$produto->CODPRODUTO}')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_{$produto->CODPRODUTO}" id="PRECOPARA_{$produto->CODPRODUTO}" value="{$produto->PRECO}" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="{$produto->DE}" {if $email_restricao == "fabiano@mariadebarro.com.br" || $email_restricao == "thais@mariadebarro.com.br"}readonly="readonly"{/if}/>
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_{$produto->CODPRODUTO}', '{$produto->CODPRODUTO}')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_{$produto->CODPRODUTO}" value="{$produto->NOME}"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_{$produto->CODPRODUTO}', '{$produto->CODPRODUTO}')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_{$produto->CODPRODUTO}" id="ORDEM_{$produto->CODPRODUTO}" value="{$produto->ORD}" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_{$produto->CODPRODUTO}', '{$produto->CODPRODUTO}')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> {$produto->CATEGORIA}<br/>
                                                <b>Peso: </b> {$produto->PESO}Kg.<br/>
                                                <b>Quantidade: </b> {$produto->QUANTIDADE}<br/>
                                                <b>Preço Unitário: </b> {$produto->PRECO_UNITARIO}<br>
                                            </td>
                                            {*<td>{$produto->CATEGORIA}</td>                                
                                            <td>{$produto->PESO}Kg.</td>
                                            <td style="width:40px; text-align: center" >{$produto->QUANTIDADE}</td>*}
                                            {*                                        <td style="width:40px; text-align: center" >{$produto->PRECO_UNITARIO}</td>*}
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        {*                                                    <td><a style="cursor: pointer;" onclick="javascript:pDestaqueUpdate('{$produto->CODPRODUTO}', '{$language}/produtos/destaque/{$dtq}/{$produto->URL_AMIGAVEL}')"><span class="ico-default-star destaque-return-{$produto->CODPRODUTO} {$star}" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a></td>                                *}
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('{$produto->CODPRODUTO}', '{$language}/produtos/status/{$stt}/{$produto->URL_AMIGAVEL}')"><span class="ico-default-eye status-return-{$produto->CODPRODUTO} {$eye}" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    {*                                                    <td><a style="cursor: pointer;" onclick="javascript:pClassificarNovoUpdate('{$produto->CODPRODUTO}', '{$language}/produtos/classificar_novo/{$nv}/{$produto->URL_AMIGAVEL}')"><span class="ico-default-heart classificar-novo-return-{$produto->CODPRODUTO} {$heart}" data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a></td>*}
                                                                    {*                                                    <td><a style="cursor: pointer;" onclick="javascript:pClassificarPromocaoUpdate('{$produto->CODPRODUTO}', '{$language}/produtos/classificar_promocao/{$pmc}/{$produto->URL_AMIGAVEL}')"><span class="ico-default-dolar classificar-promocao-return-{$produto->CODPRODUTO} {$dolar}" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a></td>*}
                                                                    {*                                                    <td><a style="cursor: pointer;" onclick="javascript:pClassificarMaisVendidosUpdate('{$produto->CODPRODUTO}', '{$language}/produtos/classificar_mais_vendidos/{$tph}/{$produto->URL_AMIGAVEL}')"><span class="ico-default-trophy classificar-mais-vendidos-return-{$produto->CODPRODUTO} {$trophy}" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a></td>*}
                                                        <td><a href="/{$language}/produtos/editar/{$produto->URL_AMIGAVEL}"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('{$produto->CODPRODUTO}', '{$language}/produtos/editar-textarea/{$produto->URL_AMIGAVEL}')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/{$language}/produtos/fotos/{$produto->URL_AMIGAVEL}"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('{$produto->CODPRODUTO}', '{$language}/produtos/delete/{$produto->URL_AMIGAVEL}')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        {*                                                    <td class="destaque-{$produto->CODPRODUTO}"></td>*}
                                                        <td class="status-{$produto->CODPRODUTO}"></td>
                                                        {*                                                    <td class="classificar-novo-{$produto->CODPRODUTO}"></td>*}
                                                        {*                                                    <td class="classificar-promocao-{$produto->CODPRODUTO}"></td>*}
                                                        {*                                                    <td class="classificar-mais-vendidos-{$produto->CODPRODUTO}"></td>*}
                                                        <td class="editar-{$produto->CODPRODUTO}"></td>
                                                        <td></td>
                                                        <td class="fotos-{$produto->CODPRODUTO}"></td>
                                                        <td class="delete-{$produto->CODPRODUTO}"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    {else}    

                                        {assign var="teste" value=$produto->REFERENCIA}
                                        <tr class="delete-return-{$produto->CODPRODUTO} yes hide">
                                            <td colspan="9">{if $produto->CROP80 != ""}<img src="{$produto->CROP80}" border="0" alt="{$produto->NOME}" title="{$produto->NOME}">{else}<img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="{$produto->NOME}" title="{$produto->NOME}">{/if}</td>
                                        </tr>
                                    {/if}
                                    {counter}    
                                {/foreach}

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>



{include file="admin/tinymce_2.tpl"}
{include file="admin/footer.tpl"}

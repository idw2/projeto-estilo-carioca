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
            Lista de Produtos em Estoque
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/{$language}/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Produtos em Estoque
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
                                    <input type="radio" name="categoria" value="junior" {if $categoria == "aneis"} checked="true" {/if}  onclick="javascript:start_form_categoria();"/> Junior<br/>
                                    <input type="radio" name="categoria" value="nilton-santos" {if $categoria == "brincos"} checked="true" {/if}  onclick="javascript:start_form_categoria();"/> Nilton Santos<br/> 
                                    <input type="hidden" name="actionType" value="pesquisa_categoria">
                                </form>
                            </div>
                        </div>
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
                                        <td>Nilton Santos</td><td>{$qtdd_brincos}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Geral</strong></td><td>{$total_produtos}</td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br/>
        <a href="/{$language}/produtos/exportar-estoque-xls" class="btn btn-lg btn-success" target="_blank"><i class="fa fa-exchange"></i> Exportar estoque</a>

        <div class="panel-default showEstoque">

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

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Estoque</h3>
                        </div>
                        <div class="panel-body">
                            <table class='table'>
                                <thead>
                                <th>#</th>
                                <th>Referência</th>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th style="width: 10%;">Peso/Kg.</th>
                                <th style="width: 10%;">Quantidade</th>
                                <th style="width: 10%;">Preço<br/>Final do Produto<br/>por Unidade</th>
                                <th style="width: 10%;">Preço<br/>Unitário de Compra<br/>do Produto</th>
                                <th style="width: 10%;">Total da Compra</th>
                                </thead>

                                {if $ERRO_NAO_EXISTE_PRODUTOS == "ERRO_NAO_EXISTE_PRODUTOS"}
                                    <tr>
                                        <td colspan="7">Não existem produtos desta categoria cadastrados!</td>
                                    </tr>
                                {/if}

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
                                    {if $produto->CODPRODUTO != ""}   
                                        {assign var="teste" value=$produto->REFERENCIA}
                                        <tr class="delete-return-{$produto->CODPRODUTO} no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('{$produto->CODPRODUTO}', '{$produto->REFERENCIA}')">
                                                    {if $produto->CROP80 != ""}
                                                        <img src="{$produto->CROP80}" border="0" alt="{$produto->NOME}" title="{$produto->NOME}">
                                                    {else}
                                                        <img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="{$produto->NOME}" title="{$produto->NOME}">
                                                    {/if}
                                                    <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td>{$produto->REFERENCIA}</td>
                                            <td>{$produto->NOME}<br/><b>Tamanho: </b> {$produto->ROTULO} - {$produto->ESPECIFICACAO}</td>
                                            <td>{$produto->CATEGORIA}</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_{$produto->CODPRODUTO}" value="{$produto->PESO}" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_{$produto->CODPRODUTO}', '{$produto->CODPRODUTO}')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_{$produto->CODQUANTIDADE}" value="{$produto->QTD}" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '{$produto->CODQUANTIDADE}')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="{$produto->CODQUANTIDADE}" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_{$produto->CODQUANTIDADE}', '{$produto->CODQUANTIDADE}','{$produto->CODPRODUTO}', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="{$produto->PRECO}" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_{$produto->CODPRODUTO}" id="pName_{$produto->CODQUANTIDADE}" value="{$produto->PRECO_UNITARIO}" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_{$produto->CODQUANTIDADE}', '{$produto->CODQUANTIDADE}', '{$produto->CODPRODUTO}')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_{$produto->CODQUANTIDADE}" name="PRECOCOMPRA_{$produto->CODPRODUTO}" id="PRECOCOMPRA_{$produto->CODQUANTIDADE}" {*onkeyup="javascript:update_precocompra(this.name, this.value)"*}  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="{$produto->PRECO_COMPRA}" readonly="readonly"/>
                                            </td>
                                        </tr>
                                    {else}    

                                        {assign var="teste" value=$produto->REFERENCIA}
                                        <tr class="delete-return-{$produto->CODPRODUTO} yes hide">
                                            <td colspan="8">{if $produto->CROP80 != ""}<img src="{$produto->CROP80}" border="0" alt="{$produto->NOME}" title="{$produto->NOME}">{else}<img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="{$produto->NOME}" title="{$produto->NOME}">{/if}</td>
                                        </tr>
                                    {/if}
                                       
                                {/foreach}

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

{include file="admin/footer.tpl"}

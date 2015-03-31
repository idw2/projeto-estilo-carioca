{include file="admin/header.tpl"}

<div class="sidebar">
    {include file="admin/navbar.tpl"}
</div>

<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            {include file="admin/logo.tpl"}
        </div>
        {*{include file="admin/search.tpl"}*}
    </div>
</div>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Exportar Cliente / Produtos 
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/{$language}/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Exportar Cliente / Produtos 
            </li>
        </ol>
    </div>
</div>     


<a href="/{$language}/nota-fiscal/exportar-clientes-xls" class="btn btn-lg btn-success"><i class="fa fa-exchange"></i> Exportar Clientes</a>
<a href="/{$language}/nota-fiscal/exportar-produtos-xls" class="btn btn-lg btn-success"><i class="fa fa-exchange"></i> Exportar Produtos</a>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Expostações para CONTA AZUL</h3>
            </div>
            <div class="panel-body">
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                    <thead>
                    <th>Data Exportação</th>
                    <th>Tipo</th>
                    <th>Link</th>
                    <th>Conta Azul</th>
                    </thead>
                    {counter assign=i start=0 print=false} 
                    {foreach item=arq_csv from=$arquivo_csv_resultado} 
                        {if $arq_csv->CODCSV != ""}
                            <tbody>
                                <tr {if $i % 2 == 1}class="myDragClass"{/if}>
                                    <td>{$arq_csv->DTA}</td>
                                    <td>{$arq_csv->TIPO}</td>
                                    <td>
                                        <textarea class="form-control">{$arq_csv->LINK}</textarea>
                                    </td>
                                    <td>
                                        <a href="{$arq_csv->LINK}" target="_blank" download="{if $arq_csv->TIPO=='produto'} Planilha de Produtos {else} Planilha de Clientes {/if}.xls"><i class="fa fa-download"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        {/if}
                        {counter}    
                    {/foreach} 

                </table>
            </div>
        </div>
    </div>
</div>


{include file="admin/footer.tpl"}
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
            Exportar Pedidos 
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/{$language}/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Exportar Pedidos 
            </li>
        </ol>
    </div>
</div>     

<a href="/{$language}/pedidos/exportar-endereco" class="btn btn-lg btn-success"><i class="fa fa-exchange"></i> Exportar Endereço</a>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Expostações</h3>
            </div>
            <div class="panel-body">
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                <thead>
                <th style="width: 15%">Data Exportação</th>
                <th>Tipo</th>
                <th style="width: 20%">Link</th>
                <th style="width: 15%" align='center'><center>Planilha</center></th>
                <th style="width: 15%" align='center'><center>Bloco de Textos<BR/>(MAC e LINUX)</center></th>
                <th style="width: 15%" align='center'><center>Bloco de Textos (WINDOWS)</center></th>
                </thead>
                {counter assign=i start=0 print=false} 
                {foreach item=arq_xls from=$arquivo_xls_resultado} 
                    {if $arq_xls->CODXLS != ""}
                        <tbody>
                            <tr {if $i % 2 == 1}class="myDragClass"{/if}>
                                <td>{$arq_xls->DTA}</td>
                                <td>{$arq_xls->TIPO}</td>
                                <td>
                                    {*                                     <textarea class="form-control">{$arq_xls->LINK}</textarea>*}
                                    {$arq_xls->LINK}
                                </td>
                                <td align='center'>
                                    <a href="{$arq_xls->LINK}" target="_blank" download="Planilha Endereços de Entrega.xls"><i class="fa fa-download"></i></a>
                                </td>
                                <td align='center'>
                                    <a href="{$arq_xls->LINK2}" target="_blank" download="Endereços de Entrega.txt"><i class="fa fa-download"></i></a>
                                </td>
                                <td align='center'>
                                    <a href="{$arq_xls->LINK3}" target="_blank" download="Endereços de Entrega.txt"><i class="fa fa-download"></i></a>
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
{include file="admin/header.tpl"}

{*
{foreach item=compras from=$compras_all}  
    
update compras set nome=(select p.nome from produtos as p where p.codproduto='{$compras->CODPRODUTO}') where codcompra='{$compras->CODCOMPRA}';<br/>

{/foreach}  
*}

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
            Lista de Aniversariantes
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/{$language}/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Aniversariantes
            </li>
        </ol>
    </div>
</div>    

<a href="/{$language}/conta/email-aniversariantes" class="btn btn-lg btn-success"><i class="fa fa-mail-forward"></i> Enviar E-mail com "CUPOM PROMOCIONAL" para Aniversariantes?</a>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Cupons</h3>
            </div>
            <div class="panel-body">
                <div class="panel-default">

                    <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                        <thead>
                        <th>Data</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Nascimento</th>
                        <th>Sexo</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                            {*                        <th>Ações</th>*}
                        </thead>

                        {counter assign=i start=1 print=false} 
                        {foreach item=conta from=$contas}  
                            {if $conta->CODCADASTRO != ""}
                                <tr {if $i % 2 == 0 }class="myDragClass"{/if}>
                                    <td>{$conta->DTA}</td>
                                    <td>{$conta->NOME}</td>
                                    <td>{$conta->EMAIL}</td>
                                    <td>{$conta->NASCIMENTO}</td>
                                    <td>{$conta->SEXO}</td>
                                    <td>({$conta->DDD}){$conta->TELEFONE} {if $conta->RAMAL != ""}<br/>Ramal: {$conta->RAMAL}{/if}</td>
                                    <td>{$conta->CPF}</td>
                                    {if $conta->STATUS == "0"}
                                        {$eye = "desative"}
                                        {$stt = "1"}
                                    {else}
                                        {$eye = ""}
                                        {$stt = "0"}
                                    {/if}  
                                    {*<td>
                                    <a href="/{$language}/conta/status/{$stt}/{$conta->CODCADASTRO}"><span class="ico-default-eye {$eye}" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/{$language}/conta/editar/{$conta->CODCADASTRO}"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
                                    </td>*}
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


{include file="admin/footer.tpl"}
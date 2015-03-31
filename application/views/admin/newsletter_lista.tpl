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
            Lista de Newsletter
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/{$language}/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Newsletter
            </li>
        </ol>
    </div>
</div>  

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Newsletter</h3>
            </div>
            <div class="panel-body">
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                    <thead>
                    <th>Data cadastro</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Sexo</th>
                    <th>Situação</th>
                    </thead>

                    {if $ERRO_NAO_NEWSLETTER == "ERRO_NAO_NEWSLETTER"}
                        <tr>
                            <td colspan="5">Não existe newsletter cadastrada!</td>
                        </tr>
                    {/if}

                    {counter assign=i start=0 print=false} 
                    {foreach item=newsletter from=$newsletters}  
                        {if $newsletter->CODNEWSLETTER != ""}
                            <tbody>
                                <tr {if $i % 2 == 1}class="myDragClass"{/if}>
                                    <td>{$newsletter->DTA}</td>
                                    <td>{$newsletter->NOME}</td>
                                    <td>{$newsletter->EMAIL}</td>
                                    <td>{$newsletter->SEXO}</td>
                                    <td>
                                        {if $newsletter->STATUS == "0"}
                                            {$eye = "desative"}
                                            {$stt = "1"}
                                        {else}
                                            {$eye = ""}
                                            {$stt = "0"}
                                        {/if}
                                        <a href="/{$language}/informacoes/newsletter_status/{$stt}/{$newsletter->EMAIL}"><span class="ico-default-eye {$eye}" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
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
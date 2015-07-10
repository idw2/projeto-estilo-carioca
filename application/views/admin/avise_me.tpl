{include file="admin/header.tpl"}

<div class="sidebar">
    {include file="admin/navbar.tpl"}
</div>

<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            {include file="admin/logo.tpl"}
        </div>
        {*            {include file="admin/search.tpl"}*}
    </div>
</div>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Avise-me quando chegar
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/{$language}/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Avise-me quando chegar
            </li>
        </ol>
    </div>
</div>  

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Clientes e suas Solicitações</h3>
            </div>
            <div class="panel-body">
                <div class="panel-default showEstoque">

                    <table class="table">
                        <thead>                
                        <th>Nome/E-mail</th>
                        <th></th>
                        </thead>

                        {if $ERRO_NAO_EXISTE_SOLICITACAO == "ERRO_NAO_EXISTE_SOLICITACAO"}
                            <tr>
                                <td colspan="3">Não existem solicitações!</td>
                            </tr>
                        {/if}

                        {counter assign=i start=0 print=false} 
                        {foreach item=ame from=$avise_me}  

                            <tr {if i % 2 == 1} class="{$myDragClass}"{/if}>
                                <td>{if $ame->NOME eq "" } {$ame->EMAIL} {else}{$ame->NOME}<br/>{$ame->EMAIL}{/if}</td>
                                <td>
                                    <div class="row">        
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome</th>
                                                    <th>Referência</th>
                                                    <th>Tamanho</th>
                                                    <th>Quantidade</th>
                                                    <th>Preço</th>
                                                    <th>Categoria</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            {*                                            {$ame->ITENS|@var_dump}*}
                                            {foreach item=it from=$ame->ITENS}
                                                <tbody>
                                                    <tr>
                                                        <td><a href="/pt/produtos/editar/{$it->URL_AMIGAVEL}" target="_blank"><img src="{$it->CROP80}" border="0" title="{$it->NOME}" alt="{$it->NOME}"></a></td>
                                                        <td style="width: 50%">{$it->NOME}</td>
                                                        <td style="width: 10%">{$it->REFERENCIA}</td>
                                                        <td style="width: 10%">{$it->TAMANHO}</td>
                                                        <td style="width: 10%">{$it->QUANTIDADE}</td>
                                                        <td style="width: 10%">{$it->PRECO}</td>
                                                        <td style="width: 10%">{$it->CATEGORIA}</td>
                                                        <td style="width: 5%"><a class="ico-default-edit" data-toggle="tooltip" title="Enviar aviso deste produto ao cliente?" href="/pt/produtos/enviar-aviso/{$it->CODAVISEME}/{$ame->EMAIL_B64}"><i class="fa fa-paper-plane"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            {/foreach}

                                        </table>       
                                    </div> 
                                </td>
                            </tr>

                            {counter}    
                        {/foreach}

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="panel-default hide">
            <h3> <span class="Loader "><img src="{$web_files}/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span> &nbsp;Aguarde, verificando estoque... &nbsp;{*<span class="contador" style="color: #df5d65">0</span>*}</h3>
        </div>



    </div>
</div>


{include file="admin/footer.tpl"}

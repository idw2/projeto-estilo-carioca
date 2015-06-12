{include file="admin/header.tpl"}

<div class="sidebar">
    {include file="admin/navbar.tpl"}
</div>

<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            {include file="admin/logo.tpl"}
        </div>
        <!-- {include file="admin/search.tpl"} -->
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Configurar Promoção
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/{$language}/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-smile-o"></i>  Promoções
            </li>
        </ol>
    </div>
</div>    

<div class="row">
    <div class="col-md-12 text-left">
        {if $erro eq ""}
            <div class="alert alert-info alert-dismissable" role="alert"><strong>Atenção: </strong>Selecione dois produtos</div>
        {else}
            {if $sucesso eq FALSE}
                <div class="alert alert-danger" role="alert"><strong>Atenção: </strong>{$erro}</div>
            {else}
                <div class="alert alert-success" role="alert">{$erro}</div>	
            {/if}
        {/if}
    </div>
</div>            

<div class="row">
    <div class="col-md-12">

        <div class="row">
            <br/>
            <div class="col-md-12 text-right">
                {assign var="link_btn_voltar" value="/{$language}/produtos/produtos-lista"}
                {include file="admin/btn_voltar.tpl"}                
            </div>
        </div>

    </div>
</div>            

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <form class="navbar-form navbar-left" style="width: 100%" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Produto Destaque</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">

                                            <br/>

                                            <div class="input-group input-group-lg  col-xs-12">
                                                <select name="CODPRODUTO" class="form-control"  multiple="" style="width: 100%">
                                                    {foreach item=produto from=$produtos} 
                                                        
                                                        
            
            
                                                        <option value="{$produto->CODPRODUTO}" {if $promocao->CODPRODUTO == $produto->CODPRODUTO}selected{/if}>{$produto->NOME}</option>
                                                        {counter}    
                                                    {/foreach}

                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Produto Promocional</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">

                                            <br/>

                                            <div class="input-group input-group-lg col-xs-12">
                                                <select name="CODPRODUTOPROMOCAO" class="form-control" multiple="" style="width: 100%">

                                                    {counter assign=i start=0 print=false} 
                                                    {foreach item=produto from=$produtos} 

                                                        <option value="{$produto->CODPRODUTO}" {if $promocao->CODPRODUTOPROMOCAO == $produto->CODPRODUTO}selected{/if}>{$produto->NOME}</option>
                                                        {counter}    
                                                    {/foreach}
                                                </select>
                                            </div>
                                            <script>
                                                $(document).ready(function () {

                                                    $('select').each(function (i) {
                                                        $(this).height($(this).parent().parent().height() - 60);

                                                    });

                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group input-group-lg">
                                    {include file="admin/btn_enviar.tpl"}
                                </div>
                            </div> 
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div> 

{include file="admin/tinymce_2.tpl"}
{include file="admin/footer.tpl"}
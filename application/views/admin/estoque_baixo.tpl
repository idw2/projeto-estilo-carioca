{include file="admin/header.tpl"}

<div class="sidebar">
    {include file="admin/navbar.tpl"}
</div>

<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            {include file="admin/logo.tpl"}
        </div>
    </div>
</div>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Lista de Produtos em Estoque Baixo
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/{$language}/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Produtos em Estoque Baixo
            </li>
        </ol>
    </div>
</div>      


<div class="panel-default showEstoque">


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> <span>ATENÇÃO:</span> Existem {$num_produtos_que_faltam} produto(s) com estoque baixo!</h3>
                </div>
                <div class="panel-body">
                    {if $falta_produtos_estoque == TRUE }  
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Referência</th>
                                    <th>Produto</th>
                                    <th>Quantidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach item=referencia_nome_produto from=$referencia_nome_produtos}   
                                    <tr>
                                        <td>{$referencia_nome_produto->REFERENCIA}</td>
                                        <td>{$referencia_nome_produto->NOME}</td>
                                        <td>{$referencia_nome_produto->QUANTIDADE}</td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    {else}
                        * Nada na lista!
                    {/if}
                </div>
            </div>
        </div>
    </div>


</div>


{include file="admin/footer.tpl"}


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
            Cadastro de Produtos
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/{$language}/admin/welcome">Home</a>
            </li>
            <li>
                <i class="fa fa-paper-plane"></i>  <a href="/{$language}/produtos/produtos-lista">Lista de Produtos</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Editar Produtos
            </li>
        </ol>
    </div>
</div>    

<div class="row">
    <div class="col-md-12 text-left">
        {if $erro eq ""}
            <div class="alert alert-info alert-dismissable" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
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
                            <div class="col-lg-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Produto</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">

                                            <div class="page-header">
                                                <h1>Preview - {$produto->NOME} - R$ {$produto->PRECO} </h1>
                                            </div>
                                            {if $foto_destaque eq ""}
                                                <img src="http://placehold.it/400x400" alt="" border="0" title="" class="img-thumbnail"/>
                                            {else}
                                                <img src="{$foto_destaque}" alt="" border="0" title="" class="img-thumbnail"/>
                                            {/if} 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Produto</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">

                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="de" name="de" placeholder="De" value="{$produto->DE}"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" {if $email_restricao == "fabiano@mariadebarro.com.br" || $email_restricao == "thais@mariadebarro.com.br"}readonly="readonly"{/if}/>
                                            </div>	
                                            <br/>
                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="preco" name="preco" placeholder="Para" value="{$produto->PRECO}" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" {if $email_restricao == "fabiano@mariadebarro.com.br" || $email_restricao == "thais@mariadebarro.com.br"}readonly="readonly"{/if}/>
                                            </div>	
                                            <br/>
                                            {* <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                            <input type="text" class="form-control" id="preco" name="quantidade" placeholder="Quantidade" value="{$produto->QUANTIDADE}" onkeypress="return formataNumDV(event, this, 6);" {if $email_restricao == "fabiano@mariadebarro.com.br" || $email_restricao == "thais@mariadebarro.com.br"}readonly="readonly"{/if}/>
                                            </div>*}	
                                            <br/>
                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="nome" name="nome" maxlength="40" value="{$produto->NOME}" placeholder="Nome"/>
                                            </div>	
                                            <br/>
                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="referencia" name="referencia" maxlength="20" value="{$produto->REFERENCIA}" placeholder="Referência"/>
                                                {*                            <label>Referência: {$produto->REFERENCIA}</label>*}
                                            </div>
                                            <br/>
                                            <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                                <input type="text" class="form-control" id="peso" name="peso" maxlength="8" value="{$produto->PESO}" placeholder="Peso" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/>
                                            </div>
                                            <br/>

                                            <div class="input-group input-group-lg">
                                                <div>Categoria</div>
                                                <select name="categoria" class="form-control">
                                                    <option value="junior" {if $produto->CATEGORIA eq "junior"}selected{/if}>Junior</option>
                                                    <option value="nilton-santos" {if $produto->CATEGORIA eq "nilton-santos"}selected{/if}>Nilton Santos</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Gerenciamento de Rótulos - <img src="{$web_files}/img/less.png" id="less" data-toggle="tooltip" border="0" alt="" title="Retirar Linha"> <img src="{$web_files}/img/plus.png" id="plus" data-toggle="tooltip" border="0" alt="" title="Adicionar Linha"></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">
                                            <table class="table">
                                                {if isset($rotulos)}
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center">Rótulo</th>
                                                            <th style="text-align: center">Especificação</th>
                                                            {*<th style="text-align: center">Exibir Cor?</th>
                                                            <th style="text-align: center">Cor</th>*}
                                                            <th style="text-align: center">Quantidade</th>
                                                            <th style="text-align: center">Posição</th>
                                                        </tr>
                                                    </thead><tbody id="data">
                                                    {counter assign=i start=0 print=false}
                                                    {foreach item=rotulo from=$rotulos}
                                                            <tr class="datagrid">
                                                                <td style='text-align: center'><input type='text' name='rotulo_{$i}' id='rotulo_{$i}' value='{$rotulo->ROTULO}'/></td>
                                                                <td style='text-align: center'><input type='text' name='especificacao_{$i}' id='especificacao_{$i}' value='{$rotulo->ESPECIFICACAO}'/></td>
                                                                {*<td style='text-align: center'><input type='checkbox' name='is_cor_{$i}' id='is_cor_{$i}' {if $rotulo->IS_COR == 1}checked="true"{/if}/></td>
                                                                <td style='text-align: center'>
                                                                    <div class='input-group colorpicker-component demo-{$i} demo-auto colorpicker-element'>
                                                                        <input type="text" name='cor_{$i}' id='cor_{$i}' value="{$rotulo->COR}" class="form-control">
                                                                        <span class='input-group-addon'><i style='background-color: rgb(0, 0, 0);'></i></span>
                                                                    </div> 
                                                                </td>*}
                                                                <td style='text-align: center'><input type='text' name='quantidade_{$i}' id='quantidade_{$i}' value='{$rotulo->QUANTIDADE}' onkeypress='return formataNumDV(event, this, 6);'/></td>
                                                                <td style='text-align: center'><input type='text' name='ordem_{$i}' id='ordem_{$i}' value='{$rotulo->ORDEM}' readonly='readonly'/></td>

                                                        {counter}
                                                    {/foreach}
                                                    </tbody>

                                                {else}    
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center">Rótulo</th>
                                                            <th style="text-align: center">Especificação</th>
                                                            <th style="text-align: center">Exibir Cor?</th>
                                                            <th style="text-align: center">Cor</th>
                                                            <th style="text-align: center">Quantidade</th>
                                                            <th style="text-align: center">Posição</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="data">
                                                        <tr class="datagrid">
                                                            <td style='text-align: center'><input type='text' name='rotulo_0' id='rotulo_0' value=''/></td>
                                                            <td style='text-align: center'><input type='text' name='especificacao_0' id='especificacao_0' value=''/></td>
                                                            <td style='text-align: center'><input type='checkbox' name='is_cor_0' id='is_cor_0'/></td>
                                                            <td style='text-align: center'>
                                                                <div class='input-group colorpicker-component demo-0 demo-auto colorpicker-element'>
                                                                    <input type="text" name='cor_0' id='cor_0' value="000000" class="form-control">
                                                                    <span class='input-group-addon'><i style='background-color: rgb(0, 0, 0);'></i></span>
                                                                </div>
                                                            </td>
                                                            <td style='text-align: center'><input type='text' name='quantidade_0' id='quantidade_0' value='' onkeypress='return formataNumDV(event, this, 6);'/></td>
                                                            <td style='text-align: center'><input type='text' name='ordem_0' id='ordem_0' value='1' readonly='readonly'/></td>
                                                        </tr>
                                                    </tbody>

                                                {/if}  
                                            </table>
                                            <style>
                                                .colorpicker{
                                                    margin-top: -40px;
                                                    margin-left: 6px;
                                                }
                                            </style>
                                            <script>
                                                $(document).ready(function() {
                                                    $("#less").click(function() {
                                                        datagrid_less()
                                                    });
                                                    $("#plus").click(function() {
                                                        datagrid_plus()
                                                    });

                                                {counter assign=i start=0 print=false}
                                                {foreach item=rotulo from=$rotulos}
                                                    $(function() {
                                                        $('.demo-{$i}').colorpicker();
                                                    });
                                                    {counter}
                                                {/foreach}

                                                });

                                                function datagrid_less() {
                                                    var n = 0;
                                                    $("#data .datagrid").each(function(i) {
                                                        n = i;
                                                    });
                                                    var qntdd = (parseInt(n) - 1);

                                                    if (qntdd > -1) {
                                                        $("#data .datagrid:last").remove();
                                                    }

                                                }
                                                function datagrid_plus() {

                                                    var n = 0;
                                                    $("#data .datagrid").each(function(i) {
                                                        n = i;
                                                    });
                                                    var qntdd = (parseInt(n) + 1);

                                                    var str = "<tr class='datagrid'>";
                                                    str += "<td style='text-align: center'><input type='text' name='rotulo_" + qntdd + "' id='rotulo_" + qntdd + "' value=''/></td>";
                                                    str += "<td style='text-align: center'><input type='text' name='especificacao_" + qntdd + "' id='especificacao_" + qntdd + "' value=''/></td>";
                                                    //str += "<td style='text-align: center'><input type='checkbox' name='is_cor_" + qntdd + "' id='is_cor_" + qntdd + "'/></td>";
                                                    //str += "<td style='text-align: center'>";
                                                    //str += "<div class='input-group colorpicker-component demo-" + qntdd + " demo-auto colorpicker-element'>";
                                                    //str += "<input type='' name='cor_" + qntdd + "' id='cor_" + qntdd + "' value='#000000' class='form-control'>";
                                                    //str += "<span class='input-group-addon'><i style='background-color: rgb(0, 0, 0);'></i></span>";
                                                    //str += "</div>";
                                                    //str += "</td>";
                                                    str += "<td style='text-align: center'><input type='text' name='quantidade_" + qntdd + "' id='quantidade_" + qntdd + "' value='' onkeypress='return formataNumDV(event, this, 6);'/></td>";
                                                    str += "<td style='text-align: center'><input type='text' name='ordem_" + qntdd + "' id='ordem_" + qntdd + "' value='" + (qntdd + 1) + "' readonly='readonly'/></td>";
                                                    str += "</tr>";

                                                    $("#data").append(str);

                                                    $('.demo-' + qntdd).colorpicker();
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Descrição Rápida - Apague a que não for necessária!</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">
                                            <p>
                                                <textarea class="form-control" rows="18" style="min-width: 100%" id="descricao" name="descricao">
                                                    {if $produto->DESCRICAO == ""}
                                                        {include file="admin/html_descricao.tpl"} 
                                                    {else}
                                                        {$produto->DESCRICAO}
                                                    {/if}
                                                </textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Mais Informações - Apague a que não for necessária ou edite!</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">
                                            <p>
                                                <textarea class="form-control" rows="18" style="min-width: 100%" id="especificacoes" name="especificacoes">
                                                    {if $produto->ESPECIFICACOES == ""}
                                                        {include file="admin/html_especificacao.tpl"} 
                                                    {else}
                                                        {$produto->ESPECIFICACOES}
                                                    {/if}
                                                </textarea>
                                            </p>
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


{*
{include file="admin/header.tpl"}

<div class="sidebar">
{include file="admin/navbar.tpl"}
</div>

*}

{*
<div class="row">
<div class="col-md-12">
<div class="pull-left">
{include file="admin/logo.tpl"}
</div>
{include file="admin/search.tpl"}
</div>
<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
Editar Produto
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-home"></i>  <a href="/{$language}/admin/welcome">Home</a>
</li>
<li>
<i class="fa fa-paper-plane"></i>  <a href="/{$language}/produtos/produtos-lista">Lista de Produtos</a>
</li>
<li class="active">
<i class="fa fa-child"></i>  Editar Produto
</li>
</ol>
</div>
</div>

</div>*}

{*
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
</div>    *}      

{*
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">
<div class="page-header">
<h1>Preview - {$produto->NOME} - R$ {$produto->PRECO} </h1>
</div>
{if $foto_destaque eq ""}
<img src="http://placehold.it/400x400" alt="" border="0" title="" class="img-thumbnail"/>
{else}
<img src="{$foto_destaque}" alt="" border="0" title="" class="img-thumbnail"/>
{/if} 
</div>
</div>
</div>
</div>    *}            
{*
<div class="row">
<div class="col-md-12">

<form class="navbar-form navbar-left" style="width: 100%" action="/{$language}/produtos/editar/{$url_amigavel}" method="post">

<div class="row">
<div class="col-md-12 text-left">
{if $erro eq ""}

<div class="alert alert-info alert-dismissable" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

{else}

{if $sucesso eq FALSE}
<div class="alert alert-danger" role="alert"><strong>Atenção: </strong>{$erro}</div>
{else}
<div class="alert alert-success" role="alert">{$erro}</div>	
{/if}

{/if}

</div>
<div class="col-md-6 text-right"></div>
</div>

<div class="row">

<div class="col-md-3 text-left">
<h4 class="panel-heading x-label">Produtos</h4>


</div>

<div class="col-md-5" style="padding-left: 0;">*}
{*
<h4 class="panel-heading x-label">Descrição Rápida</h4>
<p><textarea class="form-control" rows="10" style="min-width: 100%" id="descricao" name="descricao">{$produto->DESCRICAO}</textarea></p>
<br/> <br/>
<h4 class="panel-heading x-label">Mais Informações</h4>
<p><textarea class="form-control" rows="10" style="min-width: 100%" id="especificacoes" name="especificacoes">{$produto->ESPECIFICACOES}</textarea></p>
<br/> <br/>
*}
{* <div class="input-group input-group-lg">
{include file="admin/btn_enviar.tpl"}
</div>

</div> 
<div class="col-md-4" style="padding-left: 0;"></div>

</div>


</form>
</div>
</div>*}
{*
{include file="admin/tinymce_2.tpl"}
{include file="admin/footer.tpl"}*}
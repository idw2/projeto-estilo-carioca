{include file="header.tpl"}

<style>

    .divisor-dashed {
        display: block;
        border-bottom: dashed 1px #e9e9e9;
        margin: 0 0 15px;
    }

    .theme-default .pagination > li > a, .theme-default .pagination > li > span {
        color: #919191;
        background-color: #e9e9e9;
        border: none;
        font-weight: 400;
        font-size: 13px;
        font-size: 1.3rem;
        border-radius: 2px;
    }

    .theme-default .pagination > li:last-child > a, .theme-default .pagination > li:last-child > span {
        border-radius: 0;
    }

    .theme-default .pagination > li {
        display: inline-block;
        float: left;
        margin-left: 4px;
    }

    .theme-default .pagination > .active > a, .theme-default .pagination > .active > span, .theme-default .pagination > .active > a:hover, .theme-default .pagination > .active > span:hover, .theme-default .pagination > .active > a:focus, .theme-default .pagination > .active > span:focus {
        color: #fff;
        border-color: #8795ae;
        background: #8795ae;
    }

    .theme-default .pagination > .active > a, .theme-default .pagination > .active > span, .theme-default .pagination > .active > a:hover, .theme-default .pagination > .active > span:hover, .theme-default .pagination > .active > a:focus, .theme-default .pagination > .active > span:focus {
        color: #fff;
        border-color: #8795ae;
        background: #8795ae;
    }

</style>

<section class="pag-section">
    <div class="container">

        <div class="row">
            <div class="col col-lg-6 col-md-6">
                <div class="page-controls">
                    <ul class="pagination">
                        <li {if $btn_anterior == ""}class="disabled"{/if} >{if $btn_anterior == ""}<span>« Anterior</span>{else}<a href="{$btn_anterior}">« Anterior</a>{/if}</li>
                            {foreach item=pgn from=$paginacao}
                                {if $total_produto != 0}
                                    {if $pagina == $pgn }
                                    <li class="active"><a href="#">{$pgn} <span class="sr-only">(atual)</span></a></li>
                                    {else}
                                        {if $search == ""}

                                        {if $categoria == "geral"}
                                            <li><a href="/{$language}/nossos-produtos/sort/{$sort}/qntdd/{$qntdd}/pagina/{$pgn}">{$pgn}</a></li>
                                            {else}
                                            <li><a href="/{$language}/{$categoria}/sort/{$sort}/qntdd/{$qntdd}/pagina/{$pgn}">{$pgn}</a></li>                                            
                                            {/if}         

                                    {else}

                                        {if $categoria == "geral"}
                                            <li><a href="/{$language}/nossos-produtos/sort/{$sort}/qntdd/{$qntdd}/pagina/{$pgn}/search/{$search}">{$pgn}</a></li>
                                            {else}
                                            <li><a href="/{$language}/{$categoria}/sort/{$sort}/qntdd/{$qntdd}/pagina/{$pgn}/search/{$search}">{$pgn}</a></li>                                            
                                            {/if}

                                    {/if}
                                {/if}                        
                            {/if}                         
                        {/foreach}

                        {*<li><span class="dots">...</span></li>
                        <li><a href="#">10</a></li>*}

                        <li class="{if $btn_proximo == ""}disabled{/if}"><a href="{if $btn_proximo == ""}#{else}{$btn_proximo}{/if}">Próxima »</a></li>
                    </ul>

                </div>
            </div>
            <div class="col col-lg-6 col-md-6 text-right">
                <div class="page-controls">
                    <p></p>
                    <div class="form-inline page-controls-options">
                        <label>Mostrar por: <select name="selectPrductSort" id="selectPrductSort" class="form-control">
                                <option value="">--</option>
                                <option value="mais-novos" {if $sort == "mais_novos"}selected{/if}>Mais novos</option>
                                <option value="preco-crescente" {if $sort == "preco_crescente"}selected{/if}>Preço: Menor para o maior</option>
                                <option value="preco-decrescente" {if $sort == "preco_decrescente"}selected{/if}>Preço: Maior para o menor</option>
                                <option value="nome-crescente" {if $sort == "nome_crescente"}selected{/if}>Listar por nome: A para o Z</option>
                                <option value="nome-decrescente" {if $sort == "nome_decrescente"}selected{/if}>Listar por nome: Z para o A</option>
                                <option value="quantidade" {if $sort == "quantidade"}selected{/if}>Em estoque</option>
                            </select>
                        </label>
                        {if $categoria == "geral"}
                            {if $search == ""}
                                <input type="hidden" name="url" id="url" value="/{$language}/nossos-produtos"/>
                            {else}
                                <input type="hidden" name="url" id="url" value="/{$language}/nossos-produtos/search/{$search}"/>
                            {/if}    
                        {else}
                            <input type="hidden" name="url" id="url" value="/{$language}/{$categoria}"/>
                        {/if}
                        <input type="hidden" name="pagina" id="pagina" value="{if $pagina != ""}{$pagina}{/if}"/>
                        <input type="hidden" name="qntdd_produtos" id="qntdd_produtos" value="{if $qntdd != ""}{$qntdd}{/if}"/>
                    </div>
                </div>
            </div>
            <div class="col col-lg-12 col-md-12 divisor-dashed"></div>        
        </div>

        <div class="row">
            <div class="col-lg-12 section-title">
                <h2 class="title">{if $page == "junior"}Junior{else}{if $page == "index"}Conheça a Estilo Carioca{else}Nilton Santos{/if}{/if}</h2>
                <p class="subtitle">Produtos</p>
            </div>
        </div>            

        <div class="row">

            {foreach item=produto from=$arr}
                {if $produto->CODPRODUTO != ""}
                    <div class="col-xs-6 col-sm-3">
                        <div class="thumb">
                            <div class="thumb-img">
                                <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}">
                                    <img src="{$produto->CROP268}" alt="{$produto->NOME}" title="{$produto->NOME}" width="312" height="312">
                                </a>
                            </div>
                            <div class="thumb-holder">
                                <div class="thumb-holder-out">
                                    <div class="thumb-holder-in">
                                        <h2 class="price">R$ {$produto->PRECO}</h2>
                                        <p class="name">{if $produto->CATEGORIA == "junior"}Junior{else}Nilton Santos{/if}<br/><span style="font-size: 18px !important;">{$produto->NOME}</span></p>
                                        <a href="/{$language}/{$produto->CATEGORIA}/{$produto->URL_AMIGAVEL}" class="btn btn-default btn-buy">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {/if}
            {/foreach}
        </div>

        <div class="row"  style="margin-top: 6%;">
            <div class="col col-lg-12 col-md-12 divisor-dashed"></div>
            <div class="col col-lg-6 col-md-6">
                <div class="page-controls">
                    <ul class="pagination">
                        <li {if $btn_anterior == ""}class="disabled"{/if} >{if $btn_anterior == ""}<span>« Anterior</span>{else}<a href="{$btn_anterior}">« Anterior</a>{/if}</li>
                            {foreach item=pgn from=$paginacao}
                                {if $total_produto != 0}
                                    {if $pagina == $pgn }
                                    <li class="active"><a href="#">{$pgn} <span class="sr-only">(atual)</span></a></li>
                                    {else}
                                        {if $search == ""}

                                        {if $categoria == "geral"}
                                            <li><a href="/{$language}/nossos-produtos/sort/{$sort}/qntdd/{$qntdd}/pagina/{$pgn}">{$pgn}</a></li>
                                            {else}
                                            <li><a href="/{$language}/{$categoria}/sort/{$sort}/qntdd/{$qntdd}/pagina/{$pgn}">{$pgn}</a></li>                                            
                                            {/if}         

                                    {else}

                                        {if $categoria == "geral"}
                                            <li><a href="/{$language}/nossos-produtos/sort/{$sort}/qntdd/{$qntdd}/pagina/{$pgn}/search/{$search}">{$pgn}</a></li>
                                            {else}
                                            <li><a href="/{$language}/{$categoria}/sort/{$sort}/qntdd/{$qntdd}/pagina/{$pgn}/search/{$search}">{$pgn}</a></li>                                            
                                            {/if}

                                    {/if}                                    
                                {/if}                        
                            {/if}                         
                        {/foreach}

                        <li class="{if $btn_proximo == ""}disabled{/if}"><a href="{if $btn_proximo == ""}#{else}{$btn_proximo}{/if}">Próxima »</a></li>
                    </ul>
                </div>
            </div>
            <div class="col col-lg-6 col-md-6 text-right">
                <div class="page-controls">
                    <div class="form-inline page-controls-options">
                        <p></p>
                        <label>Mostrar por: <select name="selectPrductSort_2" id="selectPrductSort_2" class="form-control">
                                <option value="">--</option>
                                <option value="mais_novos" {if $sort == "mais_novos"}selected{/if}>Mais novos</option>
                                <option value="preco-crescente" {if $sort == "preco_crescente"}selected{/if}>Preço: Menor para o maior</option>
                                <option value="preco-decrescente" {if $sort == "preco_decrescente"}selected{/if}>Preço: Maior para o menor</option>
                                <option value="nome-crescente" {if $sort == "nome_crescente"}selected{/if}>Listar por nome: A para o Z</option>
                                <option value="nome-decrescente" {if $sort == "nome_decrescente"}selected{/if}>Listar por nome: Z para o A</option>
                                <option value="quantidade" {if $sort == "quantidade"}selected{/if}>Em estoque</option>
                            </select>
                        </label>


                        {if $categoria == "geral"}
                            {if $search == ""}
                                <input type="hidden" name="url" id="url" value="/{$language}/nossos-produtos"/>
                            {else}
                                <input type="hidden" name="url" id="url" value="/{$language}/nossos-produtos/search/{$search}"/>
                            {/if}    
                        {else}
                            <input type="hidden" name="url" id="url" value="/{$language}/{$categoria}"/>
                        {/if}

                        <input type="hidden" name="pagina" id="pagina" value="{if $pagina != ""}{$pagina}{/if}"/>
                    </div>
                </div>
            </div>
        </div>





    </div>
</section>

{include file="footer.tpl"}
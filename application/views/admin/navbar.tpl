<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/{$language}/admin/welcome">{$email_logon}</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {$nome_logon} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                {*<li>
                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>*}
                <li>
                    <a href="/{$language}/admin/alterar-senha"><i class="fa fa-fw fa-gear"></i> Alterar senha</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="/{$language}/admin/logout"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">


            <li {if $page eq "dashboard"} class="active" {else} class="" {/if}>
                <a href="/{$language}/admin/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li {if $page eq "produtos_lista"} class="active"{/if}><a href="/{$language}/produtos/produtos-lista">
                    <i class="fa fa-paper-plane"></i> Produtos</a>
            </li> 
            {*<li {if $page eq "promocao"} class="active"{/if}><a href="/{$language}/produtos/promocao">
                    <i class="fa fa-smile-o"></i> Promoção</a>
            </li>*} 
            <li {if $page eq "pedidos_lista"} class="active"{/if}>
                <a href="/{$language}/pedidos/pedidos-lista"><i class="fa fa-file-text"></i> Pedidos</a>
            </li>
            <li {if $page eq "conta-lista"} class="active"{/if}>
                <a href="/{$language}/conta/lista"><i class="fa fa-users"></i> Clientes</a>
            </li>
            <li {if $page eq "estoque"} class="active"{/if}>
                <a href="/{$language}/produtos/estoque"><i class="fa fa-bars"></i> Estoque</a></li> 
            <li {if $page eq "estoque-baixo"} class="active"{/if}>
                <a href="/{$language}/produtos/estoque-baixo" style="position: relative;"><i class="fa fa-sort-alpha-asc"></i> Estoque Baixo {if $num_de_qntdd_produtos != 0} <span class="btn btn-sm btn-danger aviso-balao">{$num_de_qntdd_produtos}</span> {/if}</a>
            </li>
            <li {if $page eq "avise-me"} class="active"{/if}>
                <a href="/{$language}/produtos/avise-me" style="position: relative;"><i class="fa fa-bell"></i> Avise-me {if $existe_avise_me != 0} <span class="btn btn-sm btn-danger aviso-balao">{$existe_avise_me}</span> {/if}</a>
            </li>  
            {*<li {if $page eq "mais-vendidos-site"} class="active"{/if}>
            <a href="/{$language}/produtos/mais-vendidos-site"><i class="fa fa-plus-circle"></i> Produtos Mais Vendidos</a>
            </li> *}
            <li {if $page eq "newsletter_lista"} class="active" {else} class="" {/if}>
                <a href="/{$language}/informacoes/newsletter-lista"><i class="fa fa-paper-plane"></i> Newsletter</a>
            </li>
            <li {if $page eq "aniversariantes-lista"} class="active"{/if}>
                <a href="/{$language}/conta/aniversariantes" style="position: relative;"><i class="fa fa-users"></i> Aniversariantes {if $existe_aniversariantes != 0} <span class="btn btn-sm btn-danger aviso-balao">{$existe_aniversariantes}</span> {/if}</a>
            </li>
            <li {if $page eq "exportar"} class="active"{/if}>
                <a href="/{$language}/pedidos/exportar"><i class="fa fa-expand"></i> Exportar Pedidos</a>
            </li>
            {*<li {if $page eq "atendentes_lista"} class="active" {else} class="" {/if}><a href="/{$language}/admin/atendentes-lista">Lista</a></li>*}
            <li {if $page eq "nota-fiscal"} class="active"{/if}>
                <a href="/{$language}/nota-fiscal/exportar" style="position: relative;"><i class="fa fa-expand"></i> Exportar Nota Fiscal{if $existe_novos_produtos_cadastrados != 0} <span class="btn btn-sm btn-danger aviso-balao">{$existe_novos_produtos_cadastrados}</span> {/if}</a>
            </li>
            {* <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Páginas HTML <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
            <li {if $page eq "quem_somos"} class="active" {else} class="" {/if}><a href="/{$language}/html/quem_somos"><i class="fa fa-code"></i> Quem somos</a></li>
            <li {if $page eq "entrega_devolucao"} class="active" {else} class="" {/if}><a href="/{$language}/html/entrega-devolucao"><i class="fa fa-code"></i> Entrega e Devolução</a></li>              
            <li {if $page eq "termos_servicos"} class="active" {else} class="" {/if}><a href="/{$language}/html/termos-servicos"><i class="fa fa-code"></i> Termos de Serviço</a></li>
            </ul>
            </li>*}
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
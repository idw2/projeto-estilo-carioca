{include file="admin/header.tpl"}


{include file="admin/navbar.tpl"}


{include file="admin/logo.tpl"}

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            {$saudacao} {$nome_logon}!
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/{$language}/admin/welcome">Home</a>
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <h1>Bem-vindo a Área Restrita!</h1>
    <p>Clique no botão abaixo para gerenciar seus produtos!</p>
    <p><a href="/{$language}/produtos/produtos-lista" class="btn btn-primary btn-lg" role="button">Gerenciar Produtos</a>
    </p>
</div>

{include file="admin/footer.tpl"}


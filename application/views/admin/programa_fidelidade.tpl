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
            Programa de Fidelidade
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/{$language}/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Programa de Fidelidade
            </li>
        </ol>
    </div>
</div>   

<div class="row">
    <div class="col-md-12">

        <form class="navbar-form navbar-left" style="width: 100%" action="/{$language}/html/programa_fidelidade" method="post">
            <div class="row">
                <br/>
                <div class="col-md-12 text-right">
                    <a href="#" onclick="javascript:window.history.go(-1)" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                </div>
            </div>
            <br/>
            <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo">{$conteudo}</textarea></p>
            <p><button type="submit" class="btn btn-primary btn-primary-maria" name="enviar">ENVIAR</button></p>

        </form>

    </div>
</div>

{include file="admin/tinymce_1.tpl"}
{include file="admin/footer.tpl"}
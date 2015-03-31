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
            Alterar senha
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/{$language}/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Alterar senha
            </li>
        </ol>
    </div>
</div>  

<div class="row">
    <div class="col-lg-12">
        {if $erro eq ""}

            <div class="alert alert-info alert-dismissable" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

        {else}

            {if $sucesso eq "FALSE"}
                <div class="alert alert-danger" role="alert"><strong>Atenção: </strong>{$erro}</div>
            {else}
                <div class="alert alert-success" role="alert">{$erro}</div>	
            {/if}

        {/if}
    </div>
</div>



<br/>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="navbar-form navbar-left" style="width: 100%" action="/{$language}/admin/alterar-senha" method="post">


                    <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                        <input type="password" class="form-control" id="senha_atual" name="senha_atual" placeholder="Senha atual"/>
                        <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                    </div>	
                    <br/>
                    <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                        <input type="password" class="form-control" id="senha_nova" name="senha_nova" placeholder="Nova senha"/>
                        <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                    </div>	
                    <br/>
                    <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                        <input type="password" class="form-control" id="senha_repetir" name="senha_repetir" placeholder="Repetir senha"/>
                        <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                    </div>	
                    <br/>
                    <div class="input-group input-group-lg">
                        {include file="admin/btn_enviar.tpl"}
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>            


{include file="admin/tinymce_1.tpl"}
{include file="admin/footer.tpl"}
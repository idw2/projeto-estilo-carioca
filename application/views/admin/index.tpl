<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <link rel="stylesheet" href="{$web_files}/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="{$web_files}/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="{$web_files}/bootstrap/css/bootstrap-theme.css"/>	
        <link rel="stylesheet" href="{$web_files}/css/sweet-alert.css?v=2"/>
        <link rel="shortcut icon" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5">
        <link rel="shortcut icon" type="image/x-icon" href="http://www.estilocarioca.com.br/application/template/estilocarioca/assets/img/favicon.png?v=5"/>
        <title></title>
    </head>
    <body>

        <div class="container">
            <div class="row box-login">

                <div class="col-sm-4"> </div>
                <div class="col-sm-4">

                    {if $erro eq ""}

                        <div class="alert alert-success" style="text-align: center" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

                    {else}

                        {if $sucesso eq "FALSE"}
                            <div class="alert alert-danger" style="text-align: center" role="alert"><strong>Atenção: </strong>{$erro}</div>
                        {else}
                            <div class="alert alert-success" style="text-align: center" role="alert">{$erro}</div>	
                        {/if}

                    {/if}

                    <img class="area-restrita img-responsive center-block" src="{$web_files}/img/logo.png" alt="" border="0" title="" style="margin: 0 auto;"/><br/>
                    <form class="form-horizontal" role="form" novalidate="" method="post" action="/{$language}/admin/login">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="{$email}" required/>
                            <span class="input-group-addon"><i class="fa fa-reply-all">&nbsp</i></span>
                        </div>
                        <br/>
                        <div class="input-group input-group-lg">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required/>
                            <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg">
                            <button type="submit" class="btn btn-primary btn-lg btn-primary-maria" role="button">Entrar</button>
                        </div>						
                    </form>
                </div>
                <div class="col-sm-4">  </div>

            </div>
        </div>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script language="javascript" src="{$web_files}/js/sweet-alert.js"></script>
<script language="javascript" src="{$web_files}/js/default.js"></script>
    </body>
</html>


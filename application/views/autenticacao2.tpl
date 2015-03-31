
{include file="header.tpl"}



<div class="container"></div>
<section class="section">
    <div class="container" style="margin-bottom: 7em;">
        <div class="row">
            <div class="section-title">
                <h2 class="title">ÁREA DO CLIENTE</h2>
                <p class="subtitle">--//--</p>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    {if $controle}   


                        <div class="row">       
                            <div class="col-sm-4">    
                                <form class="navbar-form navbar-left" style="width: 100%" onsubmit="return false" method="post">
                                    {if $msg_erro != ""}
                                        <div class="alert alert-info" role="alert" style="font-size: 15px;">{$msg_erro}</div>
                                    {/if}
                                    <input type="hidden" name="actionType" value="criar_conta"/>
                                    {*<h3>{$saudacao} {$nome}!</h3>*}
                                    <p>Você está logado pelo email abaixo!</p>
                                    <p><input type="text" class="form-control" style="min-width: 98%" id="email" name="email" maxlength="70" value="{$email}" placeholder="E-mail" readonly="readonly"/></p>
                                    <p>
                                        <span class="btn btn-default" onclick="window.location = '/{$language}/produtos/sair/'">Sair ou acessar com outra conta!</a>
                                            <input type="hidden" id="EXISTE_USER_LOGADO" value="SIM">
                                        </span>
                                        {*                        <p><a class="btn btn-default" href="/{$language}/produtos/minha_conta/">Minha conta!</a></p>*}
                                </form>
                            </div>
                        </div>


                    {else} 

                        <div class="row">
                            <div class="col-sm-5 col-sm-push-1">
                                <div class="auth-form-wrapper">
                                    <h3 class="auth-form-title">Já é cadastrado?</h3>
                                    <form name="form-autenticacao" id="form-autenticacao" class="" method="post">
                                        {if $msg_erro_login != ""}
                                            <div class="alert alert-info" role="alert">{$msg_erro_login}</div>
                                        {/if}
                                        <input type="hidden" name="actionType" class="actionType-criar-conta" value="login"/>
                                        <p><input type="text" class="form-control email-autenticacao" id="email" name="email" maxlength="70" value="{$email_login}" placeholder="E-mail"/></p>
                                        <p><input type="password" class="form-control  senha-autenticacao" id="senha" name="senha" maxlength="70" value="" placeholder="Senha"/></p>
                                        <p>
                                            <button type="submit" class="btn btn-primary btn-primary-maria" name="enviar" style="margin-right: 5px;">Entrar</button> <a href="/{$language}/conta/esqueceu-senha/">Esqueceu sua senha?</a>
                                            <span class="load-autenticacao hide"><img src='{$web_files}/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style='opacity:1; width: 4%'/></span>
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-5 col-sm-push-1">
                                <div class="auth-form-wrapper">
                                    <h3 class="auth-form-title">Cadastre-se aqui.</h3>
                                    <div class="criar-conta">
                                        <form name="form-criar-conta" id="form-criar-conta" method="post">
                                            {if $msg_erro != ""}
                                                <div class="alert alert-info" role="alert">{$msg_erro}</div>
                                            {/if}
                                            <label style="margin-bottom: 27px;">Por favor, entre com seu endereço de e-mail para criar uma conta!</label>
                                            <input type="hidden" name="actionType" class="actionType-criar-conta" value="criar_conta"/>
                                            <p><input type="email" class="form-control email-criar-conta" name="email" maxlength="70" value="{$email_conta}" placeholder="E-mail"/></p>
                                            <p>
                                                <button type="buttom" class="btn btn-primary btn-primary-maria" name="enviar">Criar conta</button>
                                                <span class="load-criar-conta hide"><img src='{$web_files}/img/Loader.GIF' alt='Carregando...' title='Carregando...' border='0' style='opacity:1; width: 4%'/></span>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    {/if} 
                </div>
            </div>
        </div>

    </div>
</section>


{include file="footer.tpl"}
{include file="header.tpl"}


<div class="container"></div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Pedido Confirmado</h2>
                <p class="subtitle"><img src="{$web_files}/img/Loader.GIF" width="30px" > Aguarde... Redirecionando para pagamento!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="container">
                    <br/>   

                    <div class='section-title'>
                        <h2><strong>Pedido</strong> confirmado!</h2>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body" style="border: solid 0 #e9e9e9;">

                                    {if $forma_pgto == "paypal"}                 
                                        <form id="redirectPayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                            <!--Tipo do botão-->
                                            <input type="hidden" name="cmd" value="_xclick" />

                                            <!--Vendedor e URL de retorno, cancelamento e notificação-->
                                            <input type="hidden" name="business" value="{$email_paypal}" />
                                            <input type="hidden" name="return" value="{$url_retorno}" />
                                            <input type="hidden" name="cancel" value="{$url_cancelamento}" />
                                            <input type="hidden" name="notify_url" value="{$url_notificacao}" />

                                            <!--Internacionalização e localização da página de pagamento-->
                                            <input type="hidden" name="charset" value="utf-8" />
                                            <input type="hidden" name="lc" value="BR" />
                                            <input type="hidden" name="country_code" value="BR" />
                                            <input type="hidden" name="currency_code" value="BRL" />

                                            <input type="hidden" name="image_url" value="{$site}/web-files/img/logo.png">

                                            <!--Informações sobre o produto e seu valor-->
                                            <input type="hidden" name="amount" value="{$pedido->TOTAL_PAYPAL}" />
                                            <input type="hidden" name="item_name" value="Maria de Barro {$pedido->N_PEDIDO}" />
                                            <input type="hidden" name="quantity" value="1" />

                                            <!--Botão para submissão do formulário-->
                                            <input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_buynowCC_LG.gif" border="0" style="width: 0;" />
                                        </form>  
                                    {/if}
                                    <script>

                                        window.onload = redirectPayPal;
                                        function redirectPayPal() {
                                            document.getElementById("redirectPayPal").submit();
                                        }

                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div style="clear: both;"></div>


            </div>
        </div>
    </div>
</section>



{include file="footer.tpl"}
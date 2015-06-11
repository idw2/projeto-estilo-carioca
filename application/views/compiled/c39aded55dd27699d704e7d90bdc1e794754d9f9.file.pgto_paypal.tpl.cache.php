<?php /* Smarty version Smarty-3.1.19, created on 2015-03-06 20:26:51
         compiled from "/home/estil450/public_html/application/views/pgto_paypal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47785815654fa0d8befb251-39831539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c39aded55dd27699d704e7d90bdc1e794754d9f9' => 
    array (
      0 => '/home/estil450/public_html/application/views/pgto_paypal.tpl',
      1 => 1424815015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47785815654fa0d8befb251-39831539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_files' => 0,
    'forma_pgto' => 0,
    'email_paypal' => 0,
    'url_retorno' => 0,
    'url_cancelamento' => 0,
    'url_notificacao' => 0,
    'site' => 0,
    'pedido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54fa0d8c040fb3_46306676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fa0d8c040fb3_46306676')) {function content_54fa0d8c040fb3_46306676($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<div class="container"></div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class="title">Pedido Confirmado</h2>
                <p class="subtitle"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" width="30px" > Aguarde... Redirecionando para pagamento!</p>
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

                                    <?php if ($_smarty_tpl->tpl_vars['forma_pgto']->value=="paypal") {?>                 
                                        <form id="redirectPayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                            <!--Tipo do botão-->
                                            <input type="hidden" name="cmd" value="_xclick" />

                                            <!--Vendedor e URL de retorno, cancelamento e notificação-->
                                            <input type="hidden" name="business" value="<?php echo $_smarty_tpl->tpl_vars['email_paypal']->value;?>
" />
                                            <input type="hidden" name="return" value="<?php echo $_smarty_tpl->tpl_vars['url_retorno']->value;?>
" />
                                            <input type="hidden" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['url_cancelamento']->value;?>
" />
                                            <input type="hidden" name="notify_url" value="<?php echo $_smarty_tpl->tpl_vars['url_notificacao']->value;?>
" />

                                            <!--Internacionalização e localização da página de pagamento-->
                                            <input type="hidden" name="charset" value="utf-8" />
                                            <input type="hidden" name="lc" value="BR" />
                                            <input type="hidden" name="country_code" value="BR" />
                                            <input type="hidden" name="currency_code" value="BRL" />

                                            <input type="hidden" name="image_url" value="<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
/web-files/img/logo.png">

                                            <!--Informações sobre o produto e seu valor-->
                                            <input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value->TOTAL_PAYPAL;?>
" />
                                            <input type="hidden" name="item_name" value="Maria de Barro <?php echo $_smarty_tpl->tpl_vars['pedido']->value->N_PEDIDO;?>
" />
                                            <input type="hidden" name="quantity" value="1" />

                                            <!--Botão para submissão do formulário-->
                                            <input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_buynowCC_LG.gif" border="0" style="width: 0;" />
                                        </form>  
                                    <?php }?>
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



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 14:01:10
         compiled from "/home/maria951/public_html/homolog/application/views/pgto_paypal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:786521192545b9b46ac6bd8-18000162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0b7a8854408db537ab79fc5339f8bb1ccd36f44' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/pgto_paypal.tpl',
      1 => 1415215981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '786521192545b9b46ac6bd8-18000162',
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
  'unifunc' => 'content_545b9b46b8fa94_49148549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b9b46b8fa94_49148549')) {function content_545b9b46b8fa94_49148549($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">
    <br/>   
    
    

    <div class='section-title'>
        <h2><strong>Pedido</strong> confirmado!</h2>
    </div>
    <h3><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" width="30px" > Aguarde... Redirecionando para pagamento!</h3>


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
                        function redirectPayPal(){
                            document.getElementById("redirectPayPal").submit();
                        }
                        
                    </script>
                </div>
            </div>
        </div>
    </div>



</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

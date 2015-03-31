<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 13:20:32
         compiled from "/home/maria951/public_html/homolog/application/views/confirmacao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7676698705460d7c094a2d2-94845718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '366ba4c59dd35f15d692f6688aeb5f9c1e983456' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/confirmacao.tpl',
      1 => 1415632829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7676698705460d7c094a2d2-94845718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dados' => 0,
    'forma_pgto' => 0,
    'email_paypal' => 0,
    'url_retorno' => 0,
    'url_cancelamento' => 0,
    'url_notificacao' => 0,
    'site' => 0,
    'pedido' => 0,
    'email_moip' => 0,
    'web_files' => 0,
    'CODPEDIDO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460d7c0a35928_31948036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d7c0a35928_31948036')) {function content_5460d7c0a35928_31948036($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">
    <br/>   
    
    

    <div class='section-title'>
        <h2><strong>Pedido</strong> confirmado!</h2>
    </div>
    <h3 style="font-weight: 300;margin-top: 25px">Obrigado <?php echo $_smarty_tpl->tpl_vars['dados']->value['NOME'];?>
 por adquirir nossos produtos!</h3>

    <h4 style="font-weight: 300;">
        <?php if ($_smarty_tpl->tpl_vars['forma_pgto']->value=="cielo") {?> Pagamento confirmado com sucesso!<br/>Foi pago por esta transação o valor de R$ 1,00 
        <?php } else { ?> 
            Segue abaixo o link para confirmação de pagamento!
        <?php }?>

    </h4>


    <div class="row">
        <div class="col-lg-12">

            
            <?php if ($_smarty_tpl->tpl_vars['forma_pgto']->value=="paypal") {?>                 
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
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

                    <input type="hidden" name="image_url" value="http://<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
web-files/img/logo.png">

                    <!--Informações sobre o produto e seu valor-->
                    <input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value->TOTAL_PAYPAL;?>
" />
                    <input type="hidden" name="item_name" value="Maria de Barro <?php echo $_smarty_tpl->tpl_vars['pedido']->value->N_PEDIDO;?>
" />
                    <input type="hidden" name="quantity" value="1" />

                    <!--Botão para submissão do formulário-->
                    <input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_buynowCC_LG.gif" border="0" />
                </form>  
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['forma_pgto']->value=="moip") {?>         
                <form action="https://www.moip.com.br/PagamentoMoIP.do" method="post" target="_blank">
                    <input type="hidden" name="id_carteira" value="<?php echo $_smarty_tpl->tpl_vars['email_moip']->value;?>
">
                    <input type="hidden" name="valor" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value->TOTAL_MOIP;?>
">
                    <input type="hidden" name="nome" value="Maria de Barro <?php echo $_smarty_tpl->tpl_vars['pedido']->value->N_PEDIDO;?>
">   
                    <input type='image' name='submit' src='https://desenvolvedor.moip.com.br/sandbox/imgs/buttons/bt_pagar_c02_e04.png' alt='Pagar via Moip' border='0' />
                </form>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['forma_pgto']->value=="boleto") {?>         
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/produtos/boleto/pedido/<?php echo $_smarty_tpl->tpl_vars['CODPEDIDO']->value;?>
" target="_blank" class='btn btn-default' style='padding: 6px 8px;height: auto;line-height: auto;'>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/assets/band_boleto.png" alt="Boleto Bancário" title="Boleto Bancário"  border="0" style='margin-right: 5px;'/> Visualizar Boleto
                </a>
            <?php }?>
        </div>
    </div>



</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

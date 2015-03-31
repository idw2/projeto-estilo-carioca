<?php /* Smarty version Smarty-3.1.19, created on 2015-03-06 20:11:38
         compiled from "/home/estil450/public_html/application/views/checkout_cupom_desconto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130852415554fa09fac77502-24763788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a67b3b453b0835e1eafe492903f026aadbbe47c9' => 
    array (
      0 => '/home/estil450/public_html/application/views/checkout_cupom_desconto.tpl',
      1 => 1425481940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130852415554fa09fac77502-24763788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sem_impostos' => 0,
    'sobre_valor' => 0,
    'total_geral' => 0,
    'total_produtos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54fa09fadcaf03_37597345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fa09fadcaf03_37597345')) {function content_54fa09fadcaf03_37597345($_smarty_tpl) {?><div id="total-box-tabela">
    <table width="100%">
        <tbody>
            <tr class="cart_total_price_product" style="font-weight: normal; display: none">
                <td colspan="6" style="width: 105px;">Produtos sem impostos :</td>
                <td class="sta-right-text" id="total_parcial">
                    <?php if ($_smarty_tpl->tpl_vars['sem_impostos']->value=='') {?>
                        0,00
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['sem_impostos']->value;?>
    
                    <?php }?>                                
                </td>
            </tr>
            <tr class="cart_total_price_product" style="font-weight: normal; display: none">
                <td colspan="6" style="width: 105px;">Impostos :</td>
                <td class="sta-right-text" id="total_impostos">
                    <?php if ($_smarty_tpl->tpl_vars['sobre_valor']->value=='') {?>
                        0,00
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['sobre_valor']->value;?>
    
                    <?php }?>                                
                </td>
            </tr>
            <tr class="cart_total_voucher hide">
                <td colspan="6">
                    Desconto :
                </td>
                <td class="sta-right-text price-discount" id="total_discount">
                    R$0,00
                </td>
            </tr> 

            <tr class="cart_total_voucher hide">
                <td colspan="6">
                    Total gift-wrapping :
                </td>
                <td class="sta-right-text price-discount" id="total_wrapping">
                    R$0,00
                </td>
            </tr>

            <tr class="cart_total_delivery_tp">
                <td colspan="6" id="total_product-txt">
                    Total de Produtos:
                </td>
                <td class="sta-right-text">
                    <?php if ($_smarty_tpl->tpl_vars['total_geral']->value=='') {?>
                        0,00
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['total_geral']->value;?>
    
                    <?php }?>                                
                </td>
            </tr>

            <tr class="cart_total_delivery" style="">
                <td colspan="6" id="total_product-txt">
                    Quantidade:
                </td>
                <td class="sta-right-text">
                    <?php if ($_smarty_tpl->tpl_vars['total_produtos']->value=='') {?>
                        0 Item
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['total_produtos']->value==1) {?><?php echo $_smarty_tpl->tpl_vars['total_produtos']->value;?>
 Item<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['total_produtos']->value;?>
 Itens <?php }?>
                    <?php }?>                                
                </td>
            </tr>

            <tr class="cart_total_delivery">
                <td colspan="6">Frete:</td>

                <td id="taxa_entrega" class="sta-right-text">
                    
                </td>
            </tr>

            <tr class="prazo_entrega_tr hide">
                <td colspan="6">Prazo de Entrega:</td>

                <td id="prazo_entrega" class="sta-right-text">
                    0,00
                </td>
            </tr>

            <tr class="cart_total_price" style="">
                <td colspan="6" id="total_product-txt">
                    Total:
                </td>
                <td class="sta-right-text" id="total_geral">
                    <?php if ($_smarty_tpl->tpl_vars['total_geral']->value=='') {?>
                        0,00
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['total_geral']->value;?>
    
                    <?php }?>                                
                </td>
            </tr>
            <tr class="cart_total_tax" style="display:none">
                <td colspan="6">
                    Total:
                </td>
                <td class="price sta-right-text" id="total_tax">R$0,00</td>
            </tr>
            <tr class="cart_total_price" style="display:none">
                <td colspan="6">
                    Total:
                </td>
                <td class="sta-right-text"> R$380,00 </td>

        </tbody>
    </table>
</div>
<div id="cart_voucher">
    <form action="#" method="post" id="voucher" onsubmit="return false">
        <fieldset>
            <label for="discount_name"><b>CUPOM DE DESCONTO</b> </label>
            <input type="text" id="discount_name" name="discount_name" value="" style="text-align: center;" class="form-control" style="margin-bottom: 12px" maxlength="6">
            <p class="submit">
                <input type="hidden" name="ticket_desconto" id="ticket_desconto"/>
                <button type="button" name="submitAddDiscount" id="submitAddDiscount" class="btn btn-default" onclick="javascript:checar_desconto();">ADICIONAR CUPOM</button>
            </p>   
            <div class="cart-voucher-txt-alert" style="color: #db4851;"></div>
            <div class="cart-voucher-txt">Caso você possua um cupom de desconto ou presente, adicione acima</div>
        </fieldset>
    </form> 
</div>
<div id="eseguro"> 
    <h6>É UM SITE SEGURO?</h6>
    <p>Sim, a Estilo Carioca utiliza criptografia (SSL) e tem auditoria diária da empresa Site Blindado.</p>
    <div style=" margin-top: 12px; ">
        <div class="selo-top-cart-cartao">
            <div id="armored_website" style="display: inline-block;">
                <param id="aw_preload" value="true" />
            </div>
        </div>
    </div> 
</div><?php }} ?>

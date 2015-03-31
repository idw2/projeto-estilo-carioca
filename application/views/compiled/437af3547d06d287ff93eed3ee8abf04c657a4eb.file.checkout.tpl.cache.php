<?php /* Smarty version Smarty-3.1.19, created on 2014-11-10 12:56:20
         compiled from "/home/maria951/public_html/homolog/application/views/checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9400459315460d214b0cf64-02409503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '437af3547d06d287ff93eed3ee8abf04c657a4eb' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/checkout.tpl',
      1 => 1415194976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9400459315460d214b0cf64-02409503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nenhum_produto' => 0,
    'ld' => 0,
    'language' => 0,
    'lista_desejo' => 0,
    'url_checkout' => 0,
    'web_files' => 0,
    'embalar_presente' => 0,
    'bonus' => 0,
    'sem_impostos' => 0,
    'sobre_valor' => 0,
    'total_geral' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5460d214c68ae3_53742950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460d214c68ae3_53742950')) {function content_5460d214c68ae3_53742950($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="pag-section pag-section-top" style="margin-bottom: 50px;">
    <div class="container">
        <h2 class="title-lg">SEUS PRODUTOS</h2>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default"> 
                            <table class="table" style="font-size: 14px">
                                <thead>
                                    <tr>
                                        <th>Produto</th>
                                        <th>Nome do Produto</th>
                                        <th>Referência</th>
                                        <th>Preço</th>
                                        <th style="width: 11%;">Quantidade</th>
                                        <th style="width: 8%;">Total</th>
                                        <th>#</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php if ($_smarty_tpl->tpl_vars['nenhum_produto']->value==true) {?>
                                        <tr>
                                            <th colspan="10">Nenhum produto na sua Lista de Desejos!</th>
                                        </tr>
                                    <?php } else { ?>    
                                        <?php  $_smarty_tpl->tpl_vars['lista_desejo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lista_desejo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ld']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lista_desejo']->key => $_smarty_tpl->tpl_vars['lista_desejo']->value) {
$_smarty_tpl->tpl_vars['lista_desejo']->_loop = true;
?>  

                                            <tr>
                                                <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/descricao/categoria/<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CATEG;?>
/<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->URL_AMIGAVEL;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->FOTO;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->NOME;?>
" border="0"/></a><br/></td>
                                                <td style="text-transform: uppercase;"><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->NOME;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->REFERENCIA;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->PRECO;?>
</td>
                                                <td id="n_input">
                                                    
                                                    <input type="text" name="quantidade"  id="input_<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
"  style="width: 44px; text-align: center; border: 0; color: #777; cursor: text; padding: 0px 0px 17px 20px;" value="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->QUANTIDADE;?>
" readonly="readonly"/>
                                                    
                                                </td>
                                                <td  id="preco_total_produto_<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
"> <?php if ($_smarty_tpl->tpl_vars['lista_desejo']->value->TOTAL=='') {?>0,00<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->TOTAL;?>
<?php }?></td>
                                                <td><span onclick="javascript:del_row_wishlist('<?php echo $_smarty_tpl->tpl_vars['url_checkout']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODPRODUTO;?>
')"><i class="fa fa-times"></i></span></td>
                                            </tr>

                                        <?php } ?> 
                                        <tr>
                                            <td colspan="10" valign="center">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/present.png" border="0" alt="Embalagem para presente" alt="Embalagem para presente"/> <strong>Deseja que embale para presente?</strong> <span style="cursor: pointer; color: #df5d65; font-style: italic;" onclick="embalar_presente()"/>Clique aqui</span> <span <?php if ($_smarty_tpl->tpl_vars['embalar_presente']->value=="1") {?>class="yes"<?php } else { ?>class="yes hide"<?php }?>> &nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/yes.png" alt="OK" title="OK" border="0"/></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="10" valign="center">
                                                <strong>Programa de fidelidade:</strong> Com esta compra você vai ganhar R$ <span class="bonus"><?php echo $_smarty_tpl->tpl_vars['bonus']->value;?>
</span> de bônus para utilizar nas próximas compras. <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/programa-fidelidade" target="_blank" style="color: #df5d65; font-style: italic;">Saiba como funciona</a>
                                            </td>
                                        </tr>
                                    <?php }?>


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div>
                    <ul class="list-unstyled">
                        <li class="previous pull-left"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/" class="btn btn-dark">&larr; Continuar comprando</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['nenhum_produto']->value==false) {?>
                            <li class="next pull-right"><a onclick="javascript:finalizar_compra()" class="btn btn-primary">Finalizar compra &rarr;</a></li>
                            <?php }?>
                    </ul>
                </div> 

                <div class="row">
                    <div class="col-lg-12" style="text-align: center;margin-bottom: 25px;">
                        <hr style="position: relative; top: 18px; border-top: 5px solid #eee;"/>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Lock.png" alt="Checkout seguro"  title="Checkout seguro" border="0" style="width: 7%; position: relative; bottom: 30px; border: 8px solid #fff; border-radius: 13px;"/>
                        <h3 style="color: #df5d65;">CHECKOUT SEGURO</h3>
                        <div style="font-size: 22px;">TOTAL DE 4 PASSOS</div>
                    </div>
                </div>

                <div class="row step-1 hide">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>
                                <span class='title-tag'>1</span><strong>A COMPRA </strong> SERÁ REALIZADA POR
                            </h2>
                        </div>
                        <div id="step-1">

                        </div>
                    </div>
                </div>

                <div class="row step-2 hide">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>
                                <span class='title-tag'>2</span><strong>MEUS </strong> ENDEREÇOS
                            </h2>
                        </div>
                        <div id="step-2">

                        </div>
                    </div>
                </div>  

                <div class="row step-3 hide">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>
                                <span class='title-tag'>3</span><strong>FORMA </strong> DE ENVIO
                            </h2>
                        </div>
                        <div id="step-3">

                        </div>
                    </div>
                </div>  

                <div class="row step-4 hide">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>
                                <span class='title-tag'>4</span><strong>FORMA </strong> DE PAGAMENTO
                            </h2>
                        </div>
                        <div id="step-4">

                        </div>
                    </div>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['nenhum_produto']->value==false) {?>
                <div id="checkout-panel-2" class="checkout-panel-2 checkout-panel">
                    <div id="total-box-tabela">
                        
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
                                <tr class="cart_total_voucher" style="display: none;">
                                    <td colspan="6">
                                        Desconto :
                                    </td>
                                    <td class="sta-right-text price-discount" id="total_discount">
                                        R$0,00
                                    </td>
                                </tr> 

                                <tr class="cart_total_voucher" style="display: none;">
                                    <td colspan="6">
                                        Total gift-wrapping :
                                    </td>
                                    <td class="sta-right-text price-discount" id="total_wrapping">
                                        R$0,00
                                    </td>
                                </tr>

                                <tr class="cart_total_delivery">
                                    <td colspan="6">Frete :</td>

                                    <td id="taxa_entrega" class="sta-right-text">
                                        0,00
                                    </td>
                                </tr>
                                
                                <tr class="cart_total_price" style="">
                                    <td colspan="6" id="total_product-txt">
                                        Total
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
                                        Total
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
                                    
                                <div class="cart-voucher-txt-alert" style="color: #db4851;"></div>
                                <div class="cart-voucher-txt">Caso você possua um cupom de desconto ou presente, adicione acima</div>
                            </fieldset>
                        </form> 
                    </div>
                    <div id="eseguro"> 
                        <h6>É UM SITE SEGURO?</h6>
                        <p>Sim, a Maria de Barro utiliza criptografia (SSL) e tem auditoria diária da empresa Site Blindado.</p>
                        <div style=" margin-top: 12px; ">
                            <div class="selo-top-cart-cartao">
                                <div id="armored_website" style="width: 115px; height: 32px;"><a rel="canonical" href="" onclick="javascript:window.open(this.href);
                                        return false;" title="Visualizou o selo Site Blindado? Navegue tranquilamente, esse site esta BLINDADO CONTRA ATAQUES. Realizamos milhares de testes simulando ataques de hacker, para garantir a segurança do site. Clique no selo e confira o certificado."><img src="https://s3-sa-east-1.amazonaws.com/selo.siteblindado.com/seals_aw/amomuito.com/siteblindado.gif" oncontextmenu="alert(&quot;Cópia&nbsp;Proibida&nbsp;por&nbsp;Lei&nbsp;-&nbsp;Site&nbsp;Blindado®&nbsp;é&nbsp;marca&nbsp;registrada&nbsp;de&nbsp;Site&nbsp;Blindado&nbsp;S.A.&quot;);return" style="border-style: none"></a><param id="aw_pg_post" value="1"></div>
                            </div>
                        </div> 
                    </div>
                </div>
            <?php }?>
        </div>

    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<script>
    $(function () {
        $('.tab-credit-cards a').click(function () {

        });
    });

</script><?php }} ?>

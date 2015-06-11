<?php /* Smarty version Smarty-3.1.19, created on 2015-03-24 14:27:45
         compiled from "/home/estil450/public_html/homolog/application/views/checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126212322355117461afff53-58970198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b875fbef9db3bef22e3775624d564a726736e05' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/checkout.tpl',
      1 => 1425673073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126212322355117461afff53-58970198',
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
    'imposto' => 0,
    'web_files' => 0,
    'embalar_presente' => 0,
    'codproduto' => 0,
    'codcadastro' => 0,
    'total_peso' => 0,
    'cep_remetente' => 0,
    'CEP' => 0,
    'teste' => 0,
    'sem_impostos' => 0,
    'sobre_valor' => 0,
    'total_geral' => 0,
    'total_produtos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55117461cf6593_94792790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55117461cf6593_94792790')) {function content_55117461cf6593_94792790($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="section">
    <div class="container" style="padding-top: 25px;">
        <div class="row">
            <div class="col-md-9">
                <div class="section-title2">
                    <h2 class="title">Finalizar Compra</h2>
                    <p  class="subtitle">CHECKOUT</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-9">
                <h2 class="title-lg">SEUS PRODUTOS <img src="/web-files/img/Loader.GIF" alt="Carregando..." alt="Carregando..." boder="0" style="width: 22px;" class="img-load-seus-produtos hide"/></h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default"> 
                            <table class="table table-update" style="font-size: 14px;">
                                <thead  style="border-bottom: solid 2px #e7e7e7; margin-bottom: 15px;">
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
                                <tbody class="tbody-update">
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
                                            <?php $_smarty_tpl->tpl_vars["teste"] = new Smarty_variable("OK", null, 0);?>
                                            <tr style="border-bottom: solid 2px #e7e7e7; margin-bottom: 15px;">
                                                <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/descricao/categoria/<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CATEG;?>
/<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->URL_AMIGAVEL;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->FOTO;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->NOME;?>
" border="0"/></a><br/></td>
                                                <td style="text-transform: uppercase;">
                                                    <?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->NOME;?>
<br/><b>Tamanho: </b> <?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->ROTULO;?>
 - <?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->ESPECIFICACAO;?>

                                                    <?php if ($_smarty_tpl->tpl_vars['lista_desejo']->value->ALERT!='') {?>
                                                        <br/><span style="color: #df5d65; font-size: 10px; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->ALERT;?>
</span>
                                                    <?php }?>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->REFERENCIA;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->PRECO;?>
</td>
                                                <td id="n_input">
                                                    <table>
                                                        <tr>
                                                            <td><span style="cursor: pointer;" class="minus" onclick="javascript:plus_wishlist_checkout('<?php echo $_smarty_tpl->tpl_vars['url_checkout']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODPRODUTO;?>
&COMANDO=menos&CODLISTADESEJOS=<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
&imposto=<?php echo $_smarty_tpl->tpl_vars['imposto']->value;?>
&CODQUANTIDADE=<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODQUANTIDADE;?>
', '<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
');" title="Menos item"><i class="fa fa-minus-square"></i></span>&nbsp;</td>
                                                            <td><input type="text" name="quantidade" id="input_<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
"  style="width: 44px; text-align: center;" value="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->QUANTIDADE;?>
" readonly="readonly"/></td>
                                                            <td>&nbsp;<span style="cursor: pointer;" class="plus" onclick="javascript:plus_wishlist_checkout('<?php echo $_smarty_tpl->tpl_vars['url_checkout']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODPRODUTO;?>
&COMANDO=mais&CODLISTADESEJOS=<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
&imposto=<?php echo $_smarty_tpl->tpl_vars['imposto']->value;?>
&CODQUANTIDADE=<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODQUANTIDADE;?>
', '<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
');" title="Mais item"><i class="fa fa-plus-square"></i></span></td>
                                                        </tr>
                                                    </table>                
                                                </td>
                                                <td  id="preco_total_produto_<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
"> <?php if ($_smarty_tpl->tpl_vars['lista_desejo']->value->TOTAL=='') {?>0,00<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->TOTAL;?>
<?php }?></td>
                                                <td><span onclick="javascript:del_row_wishlist('<?php echo $_smarty_tpl->tpl_vars['url_checkout']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODPRODUTO;?>
&CODQUANTIDADE=<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODPRODUTO;?>
&CODQUANTIDADE=<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODQUANTIDADE;?>
')"><i class="fa fa-times"></i></span></td>
                                            </tr>
                                        <?php } ?> 
                                        <tr>
                                            <td colspan="10" valign="center">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/present.png" border="0" alt="Embalagem para presente" alt="Embalagem para presente"/> <strong>Deseja que embale para presente?</strong> <span style="cursor: pointer; color: #8795ae; font-style: italic;" onclick="embalar_presente()"/>Clique aqui</span> <span <?php if ($_smarty_tpl->tpl_vars['embalar_presente']->value=="1") {?>class="yes"<?php } else { ?>class="yes hide"<?php }?>> &nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/yes.png" alt="OK" title="OK" border="0"/></span>
                                                <style>
                                                    .panel-toggle{
                                                        background: #EFEDED;
                                                        border-bottom: solid 2px #D2D2D2 !important;
                                                        padding: 12px;
                                                    }
                                                </style>
                                            </td>
                                        </tr>
                                    <?php }?>

                                </tbody>
                            </table>    

                            <?php if ($_smarty_tpl->tpl_vars['nenhum_produto']->value==false) {?>
                                <table class="table" style="font-size: 11px; margin-top: 12px; border: 0 !important;">
                                    <thead style="border: 0 !important;">
                                        <tr style="border: 0 !important;">
                                            <th colspan="3" style="border: 0 !important;">Calcular frete e prazo: </th>
                                        </tr>
                                    </thead>
                                    <tbody style="border: 0 !important;">
                                        <tr style="border: 0 !important;">
                                            <td style='width: 35%; border: 0 !important;'>
                                                <input type="hidden" class="form-control" id="codproduto" name="codproduto" value="<?php echo $_smarty_tpl->tpl_vars['codproduto']->value;?>
"/>
                                                <input type="hidden" class="form-control" id="codcadastro" name="codcadastro" value="<?php echo $_smarty_tpl->tpl_vars['codcadastro']->value;?>
"/>
                                                <input type="hidden" class="form-control" id="total_peso" name="total_peso" value="<?php echo $_smarty_tpl->tpl_vars['total_peso']->value;?>
"/>
                                                <input type="hidden" class="form-control" id="cep_remetente" name="cep_remetente" value="<?php echo $_smarty_tpl->tpl_vars['cep_remetente']->value;?>
"/>
                                                <input type="text" class="input" id="cep_destinatario" name="cep_destinatario" maxlength="8" value="<?php echo $_smarty_tpl->tpl_vars['CEP']->value;?>
" onkeypress="return formataCEP(event, this);" placeholder="CEP" style="width: 95%;"/>
                                            </td>
                                            <td style='width: 35%; border: 0 !important;'>
                                                <select id="forma_envio_rapido" class="select2" style="width: 100%;">
                                                    
                                                    <option value="41106">Correios - PAC</option>
                                                    <option value="40010">Correios - SEDEX</option>
                                                    <option value="40215">Correios - SEDEX 10</option>
                                                    <option value="40290">Correios - SEDEX hoje</option>
                                                    
                                                </select>
                                            </td>
                                            <td style="border: 0 !important;">
                                                <button type="button" id="btn_calc_cep_rapido" class="btn btn-default btn-sm" style="width: 100%; border-radius: 0" role="button">Calcular</button>
                                            </td>
                                        </tr>
                                        <tr style="border: 0 !important;">
                                            <td colspan="3" style="border: 0 !important;">
                                                <div style='height: 30px;'>
                                                    <span id="msg_erro" style="color: #df5d65; font-weight: bold; line-height: 4;"></span>
                                                    <div class="LoaderImg hide" style="text-align: center">
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px;"/>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div id="table-frete" style="display: none;">
                                    <hr>
                                    <table style="width: 100%;">
                                        <thead style="border-bottom: solid 1px #e9e9e9;">
                                            <tr>
                                                <th><p style="color: #1f3c8a; font-weight: bold;">Entrega</p></th>
                                        <th><p style="color: #1f3c8a; font-weight: bold;">Frete</p></th>
                                        <th><p style="color: #1f3c8a; font-weight: bold;">Prazo</p></th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td>
                                                <p id='entrega' style="font-weight: 400; margin: 12px 0;"></p>
                                            </td>
                                            <td>
                                                <p id='frete' style="font-weight: 400; margin: 12px 0;"></p>
                                            </td>
                                            <td>
                                                <p id='prazo' style="font-weight: 400; margin: 12px 0;"></p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            <?php }?> 
                        </div>
                    </div>
                </div>
                <div>
                    <ul class="list-unstyled">
                        <li class="previous pull-left" ><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nossos-produtos" >&larr; Continuar comprando</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['teste']->value=="OK") {?>
                            <li class="next pull-right"><a onclick="javascript:scrollToAnchor('step-1')" class="btn btn-primary">Finalizar compra &rarr;</a></li>
                                
                            <?php }?>
                    </ul>
                </div> 
                <div class="row">
                    <div class="col-lg-12" style="text-align: center; margin-bottom: 7%;">
                        <hr style="position: relative; top: 18px; border-top: 5px solid #eee; width: 100%"/>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Lock.png" alt="Checkout seguro"  title="Checkout seguro" border="0" style="width: 7%; position: relative; bottom: 30px; border: 8px solid #fff; border-radius: 13px;"/>
                        <h3 style="color: #8795ae;" id="checkout_seguro">CHECKOUT SEGURO</h3>
                        <div style="font-size: 22px;">TOTAL DE 4 PASSOS</div>
                    </div>
                </div>        
                <div class="row steps step-1 hide">
                    <div class="col-lg-12">
                        <div class="section-title3" style="text-align:left; margin-bottom: -2em;">
                            <span class="title-tag">1</span>
                            <h2 class="title">A COMPRA SERÁ REALIZADA POR</h2>
                        </div>
                        <div id="step-1" style="text-align:center; margin-top: 9%; margin-bottom: 4%;"> </div>
                    </div>
                </div>
                <div class="row steps step-2 hide">

                    <div class="col-lg-12">
                        <div class="section-title3" style="text-align: left; margin-bottom: 7%;">
                            <span class="title-tag">2</span>
                            <h2 class="title">MEUS ENDEREÇOS</h2>
                        </div>
                        <div id="step-2" style="margin-bottom: 3%;"> </div>
                    </div>
                </div>  
                <div class="row steps step-3 hide">
                    
                    <div class="col-lg-12">
                        <div class="section-title3" style="text-align: left; margin-bottom: 6%;">
                            <span class="title-tag">3</span>
                            <h2 class="title">FORMA DE ENVIO</h2>
                        </div>
                        <div id="step-3"> </div>
                    </div>
                </div>  
                <div class="row steps step-4 hide">
                    
                    <div class="col-lg-12">
                        <div class="section-title3" style="text-align: left; margin-bottom: 13%;">
                            <span class="title-tag">4</span>
                            <h2 class="title">FORMA DE PAGAMENTO</h2>
                        </div>
                        <div id="step-4" style="margin-bottom: 17%"> </div>
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
                                    <button type="button" name="submitAddDiscount" id="submitAddDiscount" class="btn btn-default" onclick="javascript:checar_desconto();" style="margin-top: 10px;">ADICIONAR CUPOM</button>
                                </p>   
                                <div class="cart-voucher-txt-alert" style="color: #8795ae;"></div>
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
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['teste']->value=="OK") {?>
    <script>

        $(document).ready(function() {
            finalizar_compra();
        });


    </script>
<?php }?><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2014-09-19 12:20:30
         compiled from "/home/maria951/public_html/novo/application/views/enviar_produtos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1758676359541c49bece2c00-07578800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '387997e30a3bc703caee09763131570d58fb22ff' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/enviar_produtos.tpl',
      1 => 1411063211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1758676359541c49bece2c00-07578800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nenhum_produto' => 0,
    'ld' => 0,
    'language' => 0,
    'lista_desejo' => 0,
    'total_peso' => 0,
    'cep_remetente' => 0,
    'total_geral' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541c49bee8fa35_17759625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c49bee8fa35_17759625')) {function content_541c49bee8fa35_17759625($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">
    <br/>   
    <div class="row" style="margin-bottom: 10%;">

        <?php echo $_smarty_tpl->getSubTemplate ("navbar2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


    </div>


        
        <div class="col-lg-12">
            <div class="panel panel-default"> 
                <table class="table" style="font-size: 14px">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome do Produto</th>
                            <th>Categoria</th>
                            <th>Referência</th>
                            <th>Preço Unitário</th>
                            <th>Peso Unitário</th>
                            <th>Peso Total</th>
                            <th style="width: 11%;">Quantidade</th>
                            <th style="width: 8%;">Total</th>
                            
                        </tr>
                    </thead>

                    <tbody>

                        <?php if ($_smarty_tpl->tpl_vars['nenhum_produto']->value==true) {?>
                            <tr>
                                <th colspan="8">Nenhum produto na sua Lista de Desejos!</th>
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CATEGORIA;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->REFERENCIA;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->PRECO;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->PESO;?>
</td>
                                    <td id="peso_total_produto_<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
"><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->PESO_TOTAL;?>
</td>
                                    <td id="n_input">

                                        <input type="text" name="quantidade"  id="input_<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
"  style="width: 44px; text-align: center;" value="<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->QUANTIDADE;?>
" readonly="readonly"/>

                                    </td>
                                    <td  id="preco_total_produto_<?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->CODLISTADESEJOS;?>
"> <?php if ($_smarty_tpl->tpl_vars['lista_desejo']->value->TOTAL=='') {?>0,00<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->TOTAL;?>
<?php }?></td>

                                </tr>

                            <?php } ?> 
                        <?php }?>

                    </tbody>
                </table>
            </div>
        </div>

                        
       
           
           
       
                        
        
            <div class="col-lg-8">    
                <?php if ($_smarty_tpl->tpl_vars['nenhum_produto']->value==false) {?>   
                    <div class="panel panel-default">    
                        <table class="table" style="font-size: 14px">
                            <thead>
                                <tr>
                                    <th>Estimar custo de envio da encomenda.</th>
                                </tr>
                                <tr>
                                    <th>Peso Total:&nbsp;<span id="peso_total"><?php echo $_smarty_tpl->tpl_vars['total_peso']->value;?>
</span>Kg. </th>  
                                </tr>
                            </thead>
                            </body>

                            <tr>
                                <td>
                                    <input type="hidden" class="form-control" id="total_peso" name="total_peso" value="<?php echo $_smarty_tpl->tpl_vars['total_peso']->value;?>
"/>
                                    <input type="hidden" class="form-control" id="cep_remetente" name="cep_remetente" value="<?php echo $_smarty_tpl->tpl_vars['cep_remetente']->value;?>
"/>
                                    <input type="text" class="form-control" id="cep_destinatario" name="cep_destinatario" maxlength="8" value="" onkeypress="return formataCEP(event, this);" placeholder="Insira seu CEP" style="width: 50%"/>
                                    <label>Tipo de encomenda</label>
                                    <select id="forma_envio" class="form-control" style="width: 50%">
                                        <option value="41106">PAC</option>
                                        <option value="40010">SEDEX</option>
                                        <option value="40215">SEDEX 10</option>
                                        <option value="40290">SEDEX hoje</option>
                                        
                                    </select>
                                    <br/>
                                    <span id="msg_erro"></span><br/>
                                    <button type="button" id="btn_cep" class="btn btn-primary btn-lg btn-primary-maria" role="button">Entrar</button>

                                    <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 7%;"/></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                <?php }?>
            </div>
            <div class="col-lg-4">        
                <?php if ($_smarty_tpl->tpl_vars['nenhum_produto']->value==false) {?>            
                    <div class="panel panel-default">    
                        <table class="table" style="font-size: 14px">
                            <tbody>
                                <tr>
                                    <td>Total de Produtos</td>
                                    <td>R$&nbsp;                                 
                                        <span id="total_parcial">
                                        <?php if ($_smarty_tpl->tpl_vars['total_geral']->value=='') {?>
                                            0,00
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['total_geral']->value;?>
    
                                        <?php }?>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Taxa de Entrega</td>
                                    <td>R$&nbsp;
                                        <span id="taxa_entrega">0,00</span></td>
                                </tr>
                                <tr>
                                    <td style="width: 42%;"></td>
                                    <td>
                                        <div class="panel panel-default">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>TOTAL</th>
                                                    </tr>    
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p class="auto-price text-left" style="padding: 11px 0 0 0;">R$&nbsp;
                                                                <span id="total_geral">
                                                                    <?php if ($_smarty_tpl->tpl_vars['total_geral']->value=='') {?>
                                                                        0,00
                                                                    <?php } else { ?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['total_geral']->value;?>
    
                                                                    <?php }?>                                                            
                                                                </span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>   
                        </table>   
                    </div>

                <?php }?>                                     
            </div>


    
    <div>
        <ul class="pager">
            <li class="previous"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/">&larr; Continuar comprando</a></li>
            <li class="next"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/autenticacao/">Finalizar compra &rarr;</a></li>
        </ul>
    </div> 
</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

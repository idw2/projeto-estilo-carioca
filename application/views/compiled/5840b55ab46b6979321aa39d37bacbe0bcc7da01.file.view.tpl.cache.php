<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 11:51:16
         compiled from "/home/maria951/public_html/homolog/application/views/admin/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20843397545b7cd4ccc543-20568902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5840b55ab46b6979321aa39d37bacbe0bcc7da01' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/view.tpl',
      1 => 1414766542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20843397545b7cd4ccc543-20568902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'cadastro' => 0,
    'pessoa' => 0,
    'endereco_entrega' => 0,
    'endereco' => 0,
    'nenhum_produto' => 0,
    'compras' => 0,
    'lista_desejo' => 0,
    'pedido' => 0,
    'anotacoes' => 0,
    'anotacao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b7cd4eaff72_04247052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b7cd4eaff72_04247052')) {function content_545b7cd4eaff72_04247052($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
          
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-6 text-left">
                    <h2><span class="label label-default">Visualizar Pedido</span></h2>
                </div>
                <br/>
                <div class="col-md-6 text-right">
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/pedidos/pedidos_lista" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                </div>
            </div>
                
        </div>
    </div>

    <h3>1. Dados do comprador</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default"> 
                <table class="table" style="font-size: 14px">
                    <?php  $_smarty_tpl->tpl_vars['pessoa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pessoa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cadastro']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pessoa']->key => $_smarty_tpl->tpl_vars['pessoa']->value) {
$_smarty_tpl->tpl_vars['pessoa']->_loop = true;
?>  
                    <tr>
                        <td>Nome:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pessoa']->value->NOME;?>
</td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pessoa']->value->EMAIL;?>
</td>
                    </tr>
                    <tr>
                        <td>Data de nascimento:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pessoa']->value->NASCIMENTO;?>
</td>
                    </tr>
                    <tr>
                        <td>Sexo:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pessoa']->value->SEXO;?>
</td>
                    </tr>
                    <tr>
                        <td>Telefone:</td>
                        <td>(<?php echo $_smarty_tpl->tpl_vars['pessoa']->value->DDD;?>
) <?php echo $_smarty_tpl->tpl_vars['pessoa']->value->TELEFONE;?>
, Ramal: <?php echo $_smarty_tpl->tpl_vars['pessoa']->value->RAMAL;?>
</td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    
     <h3>2. Endereço de Entrega</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default"> 
                <table class="table" style="font-size: 14px">
                    <?php  $_smarty_tpl->tpl_vars['endereco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['endereco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['endereco_entrega']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['endereco']->key => $_smarty_tpl->tpl_vars['endereco']->value) {
$_smarty_tpl->tpl_vars['endereco']->_loop = true;
?>  
                    <tr>
                        
                        <td>CEP:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['endereco']->value->CEP;?>
</td> 
                        
                    </tr>    
                    <tr> <td>Endereço:</td><td><?php echo $_smarty_tpl->tpl_vars['endereco']->value->LOGRADOURO;?>
, nº <?php echo $_smarty_tpl->tpl_vars['endereco']->value->NUMERO;?>
 <?php if ($_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO!='') {?>- <?php echo $_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO;?>
<?php }?></td> </tr>
                    <tr> <td>Bairro:</td><td><?php echo $_smarty_tpl->tpl_vars['endereco']->value->BAIRRO;?>
</td> </tr>
                    <tr> <td>Cidade/UF:</td><td><?php echo $_smarty_tpl->tpl_vars['endereco']->value->CIDADE;?>
/<?php echo $_smarty_tpl->tpl_vars['endereco']->value->UF;?>
</td> </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>            
    
    <h3>3. Produtos escolhidos</h3>
    <div class="row">
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
 $_from = $_smarty_tpl->tpl_vars['compras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                    <td id="n_input" align="center"><?php echo $_smarty_tpl->tpl_vars['lista_desejo']->value->QUANTIDADE;?>
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
    </div>

    <h3>4. Dados da Transação</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default"> 

                
                    <table class="table">    
                        <tr>
                            <td>Código da transação:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->CODPEDIDO;?>
</td>
                        </tr>
                        <tr>
                            <td>Código do cliente:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->CODCADASTRO;?>
</td>
                        </tr>
                        <tr>
                            <td>Número do Pedido:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->N_PEDIDO;?>
</td>
                        </tr>
                        <tr>
                            <td>Data e hora da transação:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->DTA;?>
</td>
                        </tr>
                        <tr>
                            <td>Forma de envio:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->FORMA_ENVIO;?>
</td>
                        </tr>
                        <tr>
                            <td>Forma de pagamento:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->FORMA_PGTO;?>
</td>
                        </tr>
                        <?php if ($_smarty_tpl->tpl_vars['pedido']->value->FORMA_PGTO=="boleto") {?>
                        <tr>
                            <td>Nosso Número:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->NOSSO_NUMERO;?>
</td>
                        </tr>    
                        <?php }?>
                        <tr>
                            <td>Total da compra:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->TOTAL_PARCIAL;?>
</td>
                        </tr>
                        <tr>
                            <td>Taxa de entrega:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->TAXA_ENTREGA;?>
</td>
                        </tr>
                        <tr>
                            <td>Total à pagar:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->TOTAL_GERAL;?>
</td>
                        </tr>
                    </table>   
                

            </div>
        </div>           
    </div>
                        
    <h3>5. Status do produto</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default"> 
                <table class="table"> 
                    <thead>
                        <tr>
                            <th>Situação</th>
                            <th>Data</th>
                            <th>Anotações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['anotacao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['anotacao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['anotacoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['anotacao']->key => $_smarty_tpl->tpl_vars['anotacao']->value) {
$_smarty_tpl->tpl_vars['anotacao']->_loop = true;
?>  

                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['anotacao']->value->STATUS;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['anotacao']->value->DTA;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['anotacao']->value->APONTAMENTO;?>
</td>

                            </tr>

                        <?php } ?> 
                    </tbody>
                </table> 
            </div>           
        </div>           
    </div>
    
    <h3>6. Rastreamento</h3>
    
    <form method="post">
        <select name="situacao" class="form-control">
            <option value="Postado">Postado</option>
            <option value="Devolvido">Devolvido</option>
            <option value="Concluido">Concluído</option>
            <option value="Outros">Outros</option>
        </select>
        <br/>
        <textarea name="observacoes" rows="10" style="width: 100%" ></textarea>
        <br/>
        <div class="input-group input-group-lg">
            <button type="submit" class="btn btn-primary btn-lg btn-primary-maria" role="button">Enviar</button>
        </div>
    </form>
  
</div>                          
<?php echo $_smarty_tpl->getSubTemplate ("admin/tinymce_2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

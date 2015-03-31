<?php /* Smarty version Smarty-3.1.19, created on 2014-11-05 19:23:27
         compiled from "/home/maria951/public_html/homolog/application/views/admin/estoque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1420658112545a954f4fe729-82675538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2bb973fc2c3b2b29d97a590fb7549397e7b2656' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/estoque.tpl',
      1 => 1415129827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1420658112545a954f4fe729-82675538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'falta_produtos_estoque' => 0,
    'categoria' => 0,
    'qtdd_aneis' => 0,
    'qtdd_brincos' => 0,
    'qtdd_colares' => 0,
    'qtdd_pulseiras' => 0,
    'qtdd_conjuntos' => 0,
    'total_produtos' => 0,
    'num_produtos_que_faltam' => 0,
    'referencia_nome_produtos' => 0,
    'referencia_nome_produto' => 0,
    'web_files' => 0,
    'ERRO_NAO_EXISTE_PRODUTOS' => 0,
    'meus_produtos' => 0,
    'produto' => 0,
    'myDragClass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545a954f747ed7_56828443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545a954f747ed7_56828443')) {function content_545a954f747ed7_56828443($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/homolog/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("admin/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['falta_produtos_estoque']->value==true) {?>    
            

        

    <?php }?> 

    <div class="row">
        <div class="col-md-12">

            <h2><span class="label label-default">Lista de Produtos em Estoque</span></h2>
            <br/>

            <div class="row">
                <div class="col-md-6">

                    <div class="container" style="width: 100%;"> 
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading">Busca por Categorias</div>
                                <form method="post" id="formCategoria" style="margin: 3%;">
                                    <input type="radio" name="categoria" value="todos" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="todos") {?> checked="true" <?php }?> onclick="javascript:start_form_categoria();"/> Todos<br/>
                                    <input type="radio" name="categoria" value="aneis" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="aneis") {?> checked="true" <?php }?>  onclick="javascript:start_form_categoria();"/> Anéis<br/>
                                    <input type="radio" name="categoria" value="brincos" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="brincos") {?> checked="true" <?php }?>  onclick="javascript:start_form_categoria();"/> Brinco<br/>
                                    <input type="radio" name="categoria" value="colares" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="colares") {?> checked="true" <?php }?>  onclick="javascript:start_form_categoria();"/> Colares<br/>
                                    <input type="radio" name="categoria" value="pulseiras" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="pulseiras") {?> checked="true" <?php }?>  onclick="javascript:start_form_categoria();"/> Pulseiras<br/>
                                    <input type="radio" name="categoria" value="conjuntos" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="conjuntos") {?> checked="true" <?php }?>  onclick="javascript:start_form_categoria();"/> Conjuntos<br/>
                                    <input type="hidden" name="actionType" value="pesquisa_categoria">
                                </form>
                            </div> 
                        </div> 
                    </div> 

                    <div class="container" style="width: 100%;"> 
                        <div class="row">
                            <div class='panel panel-default'>
                                <div class="panel-heading">Total de Produtos</div>
                                <table class='table'>
                                    <thead>
                                    <th>Categoria</th>
                                    <th>Quantidade</th>
                                    </thead>
                                    <tr>
                                        <td>Anéis</td><td><?php echo $_smarty_tpl->tpl_vars['qtdd_aneis']->value;?>
</td>
                                    </tr>
                                    <tr>
                                        <td>Brincos</td><td><?php echo $_smarty_tpl->tpl_vars['qtdd_brincos']->value;?>
</td>
                                    </tr>
                                    <tr>
                                        <td>Colares</td><td><?php echo $_smarty_tpl->tpl_vars['qtdd_colares']->value;?>
</td>
                                    </tr>
                                    <tr>
                                        <td>Pulseiras</td><td><?php echo $_smarty_tpl->tpl_vars['qtdd_pulseiras']->value;?>
</td>
                                    </tr>
                                    <tr>
                                        <td>Conjuntos</td><td><?php echo $_smarty_tpl->tpl_vars['qtdd_conjuntos']->value;?>
</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total geral</strong></td><td><?php echo $_smarty_tpl->tpl_vars['total_produtos']->value;?>
</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>                

                </div>
                <div class="col-md-6">
                    <div class="container" style="width: 100%;">        
                        <?php if ($_smarty_tpl->tpl_vars['falta_produtos_estoque']->value==true) {?>  
                            <div class="row" style="overflow-x:auto; height: 570px;">        
                                <div class="panel panel-default">
                                    <div class="panel-heading"><span>ATENÇÃO:</span> Existem <?php echo $_smarty_tpl->tpl_vars['num_produtos_que_faltam']->value;?>
 produto(s) com estoque baixo!</div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Referência</th>
                                                <th>Produto</th>
                                                <th>Quantidade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  $_smarty_tpl->tpl_vars['referencia_nome_produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['referencia_nome_produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['referencia_nome_produtos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['referencia_nome_produto']->key => $_smarty_tpl->tpl_vars['referencia_nome_produto']->value) {
$_smarty_tpl->tpl_vars['referencia_nome_produto']->_loop = true;
?>   
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['referencia_nome_produto']->value->REFERENCIA;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['referencia_nome_produto']->value->NOME;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['referencia_nome_produto']->value->QUANTIDADE;?>
</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>        
                            </div> 
                        <?php }?>
                    </div>
                </div>
            </div>

           
            <div class="panel-default hide">
                <h3> <span class="Loader "><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span> &nbsp;Aguarde, verificando estoque... &nbsp;</h3>
            </div>
            
            <div class="panel-default showEstoque">

                <table class='table' id="table-1" cellspacing="0" cellpadding="2">
                    <thead>

                    <th>Referência</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th style="width: 10%;">Quantidade</th>
                    <th style="width: 10%;">Peso/Kg.</th>
                    <th style="width: 10%;">Preço unitário</th>
                    <th style="width: 10%;">Preço de total</th>



                    </thead>

                    <?php if ($_smarty_tpl->tpl_vars['ERRO_NAO_EXISTE_PRODUTOS']->value=="ERRO_NAO_EXISTE_PRODUTOS") {?>
                        <tr>
                            <td colspan="7">Não existem produtos desta categoria cadastrados!</td>
                        </tr>
                    <?php }?>

                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['meus_produtos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>  
                        <?php if ($_smarty_tpl->tpl_vars['produto']->value->DESTAQUE=="0") {?>
                            <?php $_smarty_tpl->tpl_vars['star'] = new Smarty_variable("desative", null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['dtq'] = new Smarty_variable("1", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['star'] = new Smarty_variable('', null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['dtq'] = new Smarty_variable("0", null, 0);?>
                        <?php }?>    
                        <?php if ($_smarty_tpl->tpl_vars['produto']->value->STATUS=="0") {?>
                            <?php $_smarty_tpl->tpl_vars['eye'] = new Smarty_variable("desative", null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['stt'] = new Smarty_variable("1", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['eye'] = new Smarty_variable('', null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['stt'] = new Smarty_variable("0", null, 0);?>
                        <?php }?>      
                        <?php if ($_smarty_tpl->tpl_vars['produto']->value->IS_NOVO=="0") {?>
                            <?php $_smarty_tpl->tpl_vars['heart'] = new Smarty_variable("desative", null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['nv'] = new Smarty_variable("1", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['heart'] = new Smarty_variable('', null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['nv'] = new Smarty_variable("0", null, 0);?>
                        <?php }?> 
                        <?php if ($_smarty_tpl->tpl_vars['produto']->value->IS_PROMOCAO=="0") {?>
                            <?php $_smarty_tpl->tpl_vars['dolar'] = new Smarty_variable("desative", null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['pmc'] = new Smarty_variable("1", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['dolar'] = new Smarty_variable('', null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['pmc'] = new Smarty_variable("0", null, 0);?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['produto']->value->MAIS_VENDIDO=="0") {?>
                            <?php $_smarty_tpl->tpl_vars['trophy'] = new Smarty_variable("desative", null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['tph'] = new Smarty_variable("1", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['trophy'] = new Smarty_variable('', null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['tph'] = new Smarty_variable("0", null, 0);?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO!='') {?>    
                            <tr id="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" class="<?php echo $_smarty_tpl->tpl_vars['myDragClass']->value;?>
" style="cursor: move; height: 85px;" >

                                <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->REFERENCIA;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
</td>
                                <td><input type="text" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" id="quantidade_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" onkeyup="javascript:update_qntdd_estoque(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->QUANTIDADE;?>
"/></td>
                                <td><input type="text" class="form-control" name="PESO_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PESO;?>
" placeholder="Peso/Kg"  onkeypress="update_peso(this.name, this.value);" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);"/></td>
                                <td><input type="text" class="form-control unitary" name="PRECOUNITARIO_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" id="PRECOUNITARIO_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" onkeyup="javascript:update_precounitario(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO_UNITARIO;?>
"/></td>
                                <td><input type="text" class="form-control" name="PRECOCOMPRA_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" id="PRECOCOMPRA_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO_COMPRA;?>
" readonly="readonly"/></td>


                                
                            </tr>
                        <?php }?>
                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
    
                    <?php } ?>

                </table>
            </div>

        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<?php }} ?>

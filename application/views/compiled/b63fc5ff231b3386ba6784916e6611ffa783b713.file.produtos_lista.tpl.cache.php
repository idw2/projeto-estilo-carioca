<?php /* Smarty version Smarty-3.1.19, created on 2014-10-23 15:18:04
         compiled from "/home/maria951/public_html/novo/application/views/admin/produtos_lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6522645665449384c1f8797-76241697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b63fc5ff231b3386ba6784916e6611ffa783b713' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/produtos_lista.tpl',
      1 => 1413984682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6522645665449384c1f8797-76241697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoria' => 0,
    'qtdd_aneis' => 0,
    'qtdd_brincos' => 0,
    'qtdd_colares' => 0,
    'qtdd_pulseiras' => 0,
    'qtdd_conjuntos' => 0,
    'total_produtos' => 0,
    'language' => 0,
    'ERRO_NAO_EXISTE_PRODUTOS' => 0,
    'meus_produtos' => 0,
    'produto' => 0,
    'myDragClass' => 0,
    'dtq' => 0,
    'star' => 0,
    'stt' => 0,
    'eye' => 0,
    'nv' => 0,
    'heart' => 0,
    'pmc' => 0,
    'dolar' => 0,
    'tph' => 0,
    'trophy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5449384c4a4504_62548805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5449384c4a4504_62548805')) {function content_5449384c4a4504_62548805($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/novo/libraries/plugins/function.counter.php';
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
    <div class="row">
        <div class="col-md-12">
            
            <h2><span class="label label-default">Lista de Produtos</span></h2>
            <br/>
    
            <div class="row">
                <div class="col-md-6">
                    <form method="post" id="formCategoria">
                        <input type="radio" name="categoria" value="todos" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="todos") {?> checked="true" <?php }?> onclick="javascript:start_form_categoria();"/> Todos
                        <input type="radio" name="categoria" value="aneis" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="aneis") {?> checked="true" <?php }?>  onclick="javascript:start_form_categoria();"/> Anéis
                        <input type="radio" name="categoria" value="brincos" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="brincos") {?> checked="true" <?php }?>  onclick="javascript:start_form_categoria();"/> Brinco
                        <input type="radio" name="categoria" value="colares" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="colares") {?> checked="true" <?php }?>  onclick="javascript:start_form_categoria();"/> Colares
                        <input type="radio" name="categoria" value="pulseiras" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="pulseiras") {?> checked="true" <?php }?>  onclick="javascript:start_form_categoria();"/> Pulseiras
                        <input type="radio" name="categoria" value="conjuntos" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="conjuntos") {?> checked="true" <?php }?>  onclick="javascript:start_form_categoria();"/> Conjuntos
                        <input type="hidden" name="actionType" value="pesquisa_categoria">
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="panel-default">
                        <table class='table'>
                            <thead>
                                <th colspan="2">Total de produtos por categoras</th>
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
            
            <br/>
            <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/cadastrar" class="btn btn-default navbar-btn"><i class="fa fa-plus-square"></i> Cadastro de Produtos</a>
            <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span>

            <div class="panel-default">
       
                <table class='table' id="table-1" cellspacing="0" cellpadding="2">
                    <thead>
                        <th>Cadastro</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Referência</th>
                        <th>Peso</th>
                        <th style="width: 10%;">Quantidade</th>
                        <th style="width: 10%;">De</th>
                        <th style="width: 10%;">Para</th>
                        <th style="width: 29%;">Ações</th>
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
" style="cursor: move;" >
                                    <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->DTA;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->REFERENCIA;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->PESO;?>
Kg.</td>
                                    <td><input type="text" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" onkeyup="javascript:update_qntdd(this.name, this.value)" onkeypress="return formataNumDV(event, this, 6);" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->QUANTIDADE;?>
"/></td>
                                    <td><input type="text" class="form-control" name="PRECODE_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->DE;?>
"/></td>
                                    <td><input type="text" class="form-control" name="PRECOPARA_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
"/></td>
                                    <td>
                                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/destaque/<?php echo $_smarty_tpl->tpl_vars['dtq']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
"><span class="ico-default-star <?php echo $_smarty_tpl->tpl_vars['star']->value;?>
" data-toggle="tooltip" title="Destaque"><i class="fa fa-star"></i></span></a>                                
                                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/status/<?php echo $_smarty_tpl->tpl_vars['stt']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
"><span class="ico-default-eye <?php echo $_smarty_tpl->tpl_vars['eye']->value;?>
" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/classificar_novo/<?php echo $_smarty_tpl->tpl_vars['nv']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
"><span class="ico-default-heart <?php echo $_smarty_tpl->tpl_vars['heart']->value;?>
" data-toggle="tooltip" title="Classificar como novo"><i class="fa fa-heart"></i></span></a>
                                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/classificar_promocao/<?php echo $_smarty_tpl->tpl_vars['pmc']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
"><span class="ico-default-dolar <?php echo $_smarty_tpl->tpl_vars['dolar']->value;?>
" data-toggle="tooltip" title="Classificar como Promoção"><i class="fa fa-dollar"></i></span></a>
                                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/classificar_mais_vendidos/<?php echo $_smarty_tpl->tpl_vars['tph']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
"><span class="ico-default-trophy <?php echo $_smarty_tpl->tpl_vars['trophy']->value;?>
" data-toggle="tooltip" title="Mais Vendido"><i class="fa fa-trophy"></i></span></a>
                                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/editar/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                                
                                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/fotos/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a>
                                        <a onclick="delete_produto('<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/delete/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                    </td>
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

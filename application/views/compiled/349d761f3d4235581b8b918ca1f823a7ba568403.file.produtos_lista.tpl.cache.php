<?php /* Smarty version Smarty-3.1.19, created on 2014-11-07 10:11:57
         compiled from "/home/maria951/public_html/homolog/application/views/admin/produtos_lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1302329027545cb70d177dd0-69239242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349d761f3d4235581b8b918ca1f823a7ba568403' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/produtos_lista.tpl',
      1 => 1415129746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1302329027545cb70d177dd0-69239242',
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
    'language' => 0,
    'web_files' => 0,
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
  'unifunc' => 'content_545cb70d40ba96_06878542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545cb70d40ba96_06878542')) {function content_545cb70d40ba96_06878542($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/homolog/libraries/plugins/function.counter.php';
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

            <h2><span class="label label-default">Lista de Produtos</span></h2>
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

            <br/>
            <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/cadastrar" class="btn btn-default navbar-btn"><i class="fa fa-plus-square"></i> Cadastro de Produtos</a>
            <span class="Loader hide"><img src="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span>

            <div class="panel-default">

                <table class='table' id="table-1" cellspacing="0" cellpadding="2">
                    <thead>
                        
                    <th>Referência</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Peso</th>
                        
                    <th style="width: 10%;">Preço Unitário</th>
                    <th style="width: 10%;">De</th>
                    <th style="width: 10%;">Para</th>
                    <th>Ações</th>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->PESO;?>
Kg.</td>
                                
                                <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO_UNITARIO;?>
</td>
                                <td><input type="text" class="form-control" name="PRECODE_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" onkeyup="javascript:update_precode(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->DE;?>
"/></td>
                                <td><input type="text" class="form-control" name="PRECOPARA_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" onkeyup="javascript:update_precopara(this.name, this.value)"  onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
"/></td>
                                <td>
                                    <div class="showAction">
                                        <div class="comando">
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
                                        </div>
                                    </div>
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

<?php /* Smarty version Smarty-3.1.19, created on 2015-03-30 17:28:54
         compiled from "/home/estil450/public_html/homolog/application/views/admin/estoque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1367458657551979c6b0dd13-48739707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4096ed987750514d853cf7b779239f30552c8bfb' => 
    array (
      0 => '/home/estil450/public_html/homolog/application/views/admin/estoque.tpl',
      1 => 1425503102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1367458657551979c6b0dd13-48739707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'categoria' => 0,
    'qtdd_junior' => 0,
    'qtdd_brincos' => 0,
    'total_produtos' => 0,
    'ERRO_NAO_EXISTE_PRODUTOS' => 0,
    'meus_produtos' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551979c7033d22_93155648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551979c7033d22_93155648')) {function content_551979c7033d22_93155648($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("admin/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    </div>
</div>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Lista de Produtos em Estoque
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Produtos em Estoque
            </li>
        </ol>
    </div>
</div>    


<div class="row">
    <div class="col-md-12">


        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Busca por Categorias</h3>
                    </div>
                    <div class="panel-body">
                        <div class="flot-chart" style="height: 135px;">
                            <div class="flot-chart-content" id="flot-moving-line-chart">

                                <form method="post" id="formCategoria" style="margin: 3%;">
                                    <input type="radio" name="categoria" value="todos" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="todos") {?> checked="true" <?php }?> onclick="javascript:start_form_categoria();"/> Todos<br/>
                                    <input type="radio" name="categoria" value="junior" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="aneis") {?> checked="true" <?php }?>  onclick="javascript:start_form_categoria();"/> Junior<br/>
                                    <input type="radio" name="categoria" value="nilton-santos" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="brincos") {?> checked="true" <?php }?>  onclick="javascript:start_form_categoria();"/> Nilton Santos<br/> 
                                    <input type="hidden" name="actionType" value="pesquisa_categoria">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Total de Produtos</h3>
                    </div>
                    <div class="panel-body">
                        <div class="flot-chart" style="height: 150px;">
                            <div class="flot-chart-content" id="flot-bar-chart">

                                <table class='table'>
                                    <thead>
                                    <th>Categoria</th>
                                    <th>Quantidade</th>
                                    </thead>
                                    <tr>
                                        <td>Junior</td><td><?php echo $_smarty_tpl->tpl_vars['qtdd_junior']->value;?>
</td>
                                    </tr>
                                    <tr>
                                        <td>Nilton Santos</td><td><?php echo $_smarty_tpl->tpl_vars['qtdd_brincos']->value;?>
</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Geral</strong></td><td><?php echo $_smarty_tpl->tpl_vars['total_produtos']->value;?>
</td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br/>
        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/exportar-estoque-xls" class="btn btn-lg btn-success" target="_blank"><i class="fa fa-exchange"></i> Exportar estoque</a>

        <div class="panel-default showEstoque">

            <style>
                .pNameImput{
                    width: 400px;
                    padding-right: 6px;
                    padding-left: 6px;
                }

                .pNameImput.Loader{
                    background: url(/web-files/img/Loader_small.gif) no-repeat;
                    background-position: center right 6px;
                }
            </style> 

            <style>
                .pNameImput{
                    width: 400px;
                    padding-right: 6px;
                    padding-left: 6px;
                }

                .pNameImput.Loader{
                    background: url(/web-files/img/Loader_small.gif) no-repeat;
                    background-position: center right 6px;
                }
            </style> 

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Estoque</h3>
                        </div>
                        <div class="panel-body">
                            <table class='table'>
                                <thead>
                                <th>#</th>
                                <th>Referência</th>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th style="width: 10%;">Peso/Kg.</th>
                                <th style="width: 10%;">Quantidade</th>
                                <th style="width: 10%;">Preço<br/>Final do Produto<br/>por Unidade</th>
                                <th style="width: 10%;">Preço<br/>Unitário de Compra<br/>do Produto</th>
                                <th style="width: 10%;">Total da Compra</th>
                                </thead>

                                <?php if ($_smarty_tpl->tpl_vars['ERRO_NAO_EXISTE_PRODUTOS']->value=="ERRO_NAO_EXISTE_PRODUTOS") {?>
                                    <tr>
                                        <td colspan="7">Não existem produtos desta categoria cadastrados!</td>
                                    </tr>
                                <?php }?>

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
                                        <?php $_smarty_tpl->tpl_vars["teste"] = new Smarty_variable($_smarty_tpl->tpl_vars['produto']->value->REFERENCIA, null, 0);?>
                                        <tr class="delete-return-<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->REFERENCIA;?>
')">
                                                    <?php if ($_smarty_tpl->tpl_vars['produto']->value->CROP80!='') {?>
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CROP80;?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
">
                                                    <?php } else { ?>
                                                        <img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
">
                                                    <?php }?>
                                                    <span style="display: none;min-width: 80px;position: absolute;left: 100%;bottom: 0px;cursor: default;width: 300px;zoom: 115%;background: rgb(255, 255, 255);border: 1px solid #ccc;border-radius: 20px; padding: 10px 0px 0px 15px; z-index: 1000;">teste</span>
                                                </span>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->REFERENCIA;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
<br/><b>Tamanho: </b> <?php echo $_smarty_tpl->tpl_vars['produto']->value->ROTULO;?>
 - <?php echo $_smarty_tpl->tpl_vars['produto']->value->ESPECIFICACAO;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="psName_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PESO;?>
" onkeydown="javascript: return mascaraPeso(this, event, 5, 3);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePesoUpdate('psName_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="qName_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODQUANTIDADE;?>
" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->QTD;?>
" onkeyup="javascript:update_qntdd_estoque(this.name, this.value, '<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODQUANTIDADE;?>
')" onkeypress="return formataNumDV(event, this, 6);" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        
                                                        <span class="btn btn-default" id="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODQUANTIDADE;?>
" type="button" onclick="javascript:eQuantidadeEstoqueUpdate('qName_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODQUANTIDADE;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODQUANTIDADE;?>
','<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', this)"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
" readonly="readonly"/>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput PRECOCOMPRA_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" id="pName_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODQUANTIDADE;?>
" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO_UNITARIO;?>
" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" style="width: 120px;"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:ePrecoUnitarioEstoqueUpdate('pName_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODQUANTIDADE;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODQUANTIDADE;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control PRECOCOMPRA_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODQUANTIDADE;?>
" name="PRECOCOMPRA_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" id="PRECOCOMPRA_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODQUANTIDADE;?>
"   onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO_COMPRA;?>
" readonly="readonly"/>
                                            </td>
                                        </tr>
                                    <?php } else { ?>    

                                        <?php $_smarty_tpl->tpl_vars["teste"] = new Smarty_variable($_smarty_tpl->tpl_vars['produto']->value->REFERENCIA, null, 0);?>
                                        <tr class="delete-return-<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
 yes hide">
                                            <td colspan="8"><?php if ($_smarty_tpl->tpl_vars['produto']->value->CROP80!='') {?><img src="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CROP80;?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
"><?php } else { ?><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
"><?php }?></td>
                                        </tr>
                                    <?php }?>
                                       
                                <?php } ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>

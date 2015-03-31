<?php /* Smarty version Smarty-3.1.19, created on 2015-03-25 22:17:03
         compiled from "/home/estil450/public_html/application/views/admin/produtos_lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2115429912551333df2f27e2-45311548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b1cab1efb7b3be289c45cf40283fdacb2584c44' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/produtos_lista.tpl',
      1 => 1427121050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2115429912551333df2f27e2-45311548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'categoria' => 0,
    'qtdd_junior' => 0,
    'qtdd_nilton_santos' => 0,
    'total_produtos' => 0,
    'ERRO_NAO_EXISTE_PRODUTOS' => 0,
    'meus_produtos' => 0,
    'produto' => 0,
    'teste' => 0,
    'email_restricao' => 0,
    'stt' => 0,
    'eye' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551333df6568c5_40481371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551333df6568c5_40481371')) {function content_551333df6568c5_40481371($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/estil450/public_html/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
            Lista de Produtos
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Produtos
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
                                    <input type="radio" name="categoria" value="junior" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="junior") {?> checked="true" <?php }?>  onclick="javascript:start_form_categoria();"/> Junior<br/>
                                    <input type="radio" name="categoria" value="nilton-santos" <?php if ($_smarty_tpl->tpl_vars['categoria']->value=="nilton-santos") {?> checked="true" <?php }?>  onclick="javascript:start_form_categoria();"/> Nilton Santos<br/> 
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
                                        <td>Nilton Santos</td><td><?php echo $_smarty_tpl->tpl_vars['qtdd_nilton_santos']->value;?>
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
/produtos/cadastrar" class="btn btn-lg btn-success" style="margin-bottom:20px;"><i class="fa fa-plus-square"></i> Cadastro de Produtos</a>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Produtos</h3>
                    </div>
                    <div style="width:100% !important;" class="panel-body">
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
                        <div class="col-lg-12">
                            <table class='table'>
                                <thead>
                                <th>#</th>
                                <th>Referência</th>
                                <th>Nome</th>
                                    
                                <th style="width: 14%;">Descrição</th>
                                    
                                    
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


                                    <?php if ($_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO!=''&&$_smarty_tpl->tpl_vars['teste']->value!=$_smarty_tpl->tpl_vars['produto']->value->REFERENCIA) {?>    

                                        <?php $_smarty_tpl->tpl_vars["teste"] = new Smarty_variable($_smarty_tpl->tpl_vars['produto']->value->REFERENCIA, null, 0);?>
                                        <tr  class="delete-return-<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
 no">
                                            <td>
                                                <span style="cursor: pointer; position: relative; display: block; width: 80px;" onclick="javascript:pGetImagesShow('<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->REFERENCIA;?>
')">
                                                    <?php if ($_smarty_tpl->tpl_vars['produto']->value->IMG!='') {?>
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['produto']->value->IMG;?>
" border="0" style="width: 80px;" alt="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
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
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" name="REFERENCIA_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" id="REFERENCIA_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->REFERENCIA;?>
"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pReferenciaUpdate('REFERENCIA_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>
                                                <div class="row" style="margin-bottom: 25px;">
                                                    <div class="col-xs-6">
                                                        <b>De: </b> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control pNameImput" name="PRECODE_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" id="PRECODE_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->DE;?>
" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->DE;?>
" <?php if ($_smarty_tpl->tpl_vars['email_restricao']->value=="fabiano@mariadebarro.com.br"||$_smarty_tpl->tpl_vars['email_restricao']->value=="thais@mariadebarro.com.br") {?>readonly="readonly"<?php }?>/>
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecodeUpdate('PRECODE_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div><b>Para: </b> </div>
                                                        <div class="input-group">    
                                                            <input type="text" class="form-control pNameImput" name="PRECOPARA_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" id="PRECOPARA_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->DE;?>
" <?php if ($_smarty_tpl->tpl_vars['email_restricao']->value=="fabiano@mariadebarro.com.br"||$_smarty_tpl->tpl_vars['email_restricao']->value=="thais@mariadebarro.com.br") {?>readonly="readonly"<?php }?>/>
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-default" type="button" onclick="javascript:pPrecoparaUpdate('PRECOPARA_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control pNameImput" id="pName_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
"/>
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default" type="button" onclick="javascript:pNameUpdate('pName_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                    </span>
                                                </div>  
                                                    <div class="col-xs-6">
                                                        <b>Ordem: </b> 
                                                        <div class="input-group">
                                                <input type="text" class="form-control pNameImput" name="ORDEM_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" id="ORDEM_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->ORD;?>
" style="width: 120px;"/>
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default" type="button" onclick="javascript:pOrdemUpdate('ORDEM_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
')"><i class="glyphicon glyphicon-refresh"></i></span>
                                                </span>
                                            </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <b>Categoria: </b> <?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
<br/>
                                                <b>Peso: </b> <?php echo $_smarty_tpl->tpl_vars['produto']->value->PESO;?>
Kg.<br/>
                                                <b>Quantidade: </b> <?php echo $_smarty_tpl->tpl_vars['produto']->value->QUANTIDADE;?>
<br/>
                                                <b>Preço Unitário: </b> <?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO_UNITARIO;?>
<br>
                                            </td>
                                            
                                            
                                            <td>
                                                <table style="width: 173px">
                                                    <tr> 
                                                        
                                                        <td><a style="cursor: pointer;" onclick="javascript:pStatusUpdate('<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/status/<?php echo $_smarty_tpl->tpl_vars['stt']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
')"><span class="ico-default-eye status-return-<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
 <?php echo $_smarty_tpl->tpl_vars['eye']->value;?>
" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a></td>
                                                                    
                                                                    
                                                                    
                                                        <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/editar/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a></td>                                
                                                        <td><a style="cursor: pointer;" onclick="javascript:pTextAreaUpdate('<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/editar-textarea/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
')"><span class="ico-default-edit" data-toggle="tooltip" title="Editores" style="background: #62ACBA"><i class="fa fa-file-text"></i></span></a></td>                                
                                                        <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/fotos/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
"><span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><i class="fa fa-photo"></i></span></a></td>
                                                        <td><a style="cursor: pointer;" onclick="pDeleteUpdate('<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/delete/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a></td>
                                                    </tr>  
                                                    <tr>
                                                        
                                                        <td class="status-<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
"></td>
                                                        
                                                        
                                                        
                                                        <td class="editar-<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
"></td>
                                                        <td></td>
                                                        <td class="fotos-<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
"></td>
                                                        <td class="delete-<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    <?php } else { ?>    

                                        <?php $_smarty_tpl->tpl_vars["teste"] = new Smarty_variable($_smarty_tpl->tpl_vars['produto']->value->REFERENCIA, null, 0);?>
                                        <tr class="delete-return-<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
 yes hide">
                                            <td colspan="9"><?php if ($_smarty_tpl->tpl_vars['produto']->value->CROP80!='') {?><img src="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CROP80;?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
"><?php } else { ?><img src="/web-files/img/no-image.png" style="width: 80px;" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
"><?php }?></td>
                                        </tr>
                                    <?php }?>
                                    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
    
                                <?php } ?>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("admin/tinymce_2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>

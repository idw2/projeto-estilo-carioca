<?php /* Smarty version Smarty-3.1.19, created on 2015-01-13 07:39:44
         compiled from "/home/maria951/public_html/homolog/application/views/admin/mais_vendidos_site.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175860739954b52020c3eee6-43218132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '935a43825e10e44b9eb68bc37b4360bcad94b76f' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/mais_vendidos_site.tpl',
      1 => 1420463609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175860739954b52020c3eee6-43218132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'ERRO_NAO_EXISTE_PRODUTOS' => 0,
    'meus_produtos' => 0,
    'produto' => 0,
    'teste' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b520212ba910_51117251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b520212ba910_51117251')) {function content_54b520212ba910_51117251($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/homolog/libraries/plugins/function.counter.php';
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

            <h2><span class="label label-default">Lista de Produtos mais Vendidos Site</span></h2>
            <br/>

            <br/>
            <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/mais-vendidos-site-xls" class="btn btn-default navbar-btn" target="_blank"><i class="fa fa-exchange"></i> Exportar</a>    
    
            <div class="panel-default showEstoque">

                <table class='table'>
                    <thead>
                    <th>#</th>
                    <th style="width: 10%;">Quantidade Vendida</th>
                    <th>Referência</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th style="width: 10%;">Peso/Kg.</th>
                    <th style="width: 10%;">Preço<br/>Final do Produto<br/>por Unidade</th>
                    <th style="width: 10%;">Preço<br/>Unitário de Compra<br/>do Produto</th>
                    <th style="width: 10%;">Total da Compra</th>
                        
                        
                        
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
                                <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->MAIS_VENDIDOS;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->REFERENCIA;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->PESO;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO_UNITARIO;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO_COMPRA;?>
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
                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
    
                    <?php } ?>

                </table>
            </div>

        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>

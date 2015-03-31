<?php /* Smarty version Smarty-3.1.19, created on 2015-03-21 17:35:00
         compiled from "/home/estil450/public_html/application/views/admin/pedidos_lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:557694233550dabc4db2bb4-64814548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ce3d25e48681e4a89b258543a365c5a103ea28a' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/pedidos_lista.tpl',
      1 => 1425487008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '557694233550dabc4db2bb4-64814548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'pedidos' => 0,
    'pedido' => 0,
    'i' => 0,
    'star' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550dabc51117d9_91100776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550dabc51117d9_91100776')) {function content_550dabc51117d9_91100776($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/estil450/public_html/libraries/plugins/function.counter.php';
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
            Lista de Pedidos
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Pedidos
            </li>
        </ol>
    </div>
</div>  

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Pedidos</h3>
            </div>
            <div class="panel-body">
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                    <thead>
                    <th>Data</th>
                    <th>Nº do Pedido</th>
                    <th>Nome</th>
                    <th>Forma de Pagamento</th>
                    <th>Forma de Envio</th>
                    <th>Total Parcial</th>
                    <th>Imposto</th>
                    <th>Taxa de Entrega</th>
                    <th>Total</th>
                    <th>Ações</th>
                    </thead>

                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['pedido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pedido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pedido']->key => $_smarty_tpl->tpl_vars['pedido']->value) {
$_smarty_tpl->tpl_vars['pedido']->_loop = true;
?>  
                        <?php if ($_smarty_tpl->tpl_vars['pedido']->value->CODPEDIDO!='') {?>
                            <tr <?php if ($_smarty_tpl->tpl_vars['i']->value%2==0) {?>class="myDragClass"<?php }?>>
                                <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->DTA;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->N_PEDIDO;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->NOME;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->FORMA_PGTO;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->FORMA_ENVIO;?>
</td>
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['pedido']->value->TOTAL_PARCIAL;?>
</td>
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['pedido']->value->IMPOSTOS;?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['pedido']->value->TAXA_ENTREGA!='') {?>R$ <?php echo $_smarty_tpl->tpl_vars['pedido']->value->TAXA_ENTREGA;?>
<?php }?></td>
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['pedido']->value->TOTAL_GERAL;?>
</td>
                                <?php if ($_smarty_tpl->tpl_vars['pedido']->value->STATUS=="0") {?>
                                    <?php $_smarty_tpl->tpl_vars['star'] = new Smarty_variable("desative", null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['dtq'] = new Smarty_variable("1", null, 0);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['star'] = new Smarty_variable('', null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['dtq'] = new Smarty_variable("0", null, 0);?>
                                <?php }?>   
                                <td>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/pedidos/status/<?php echo $_smarty_tpl->tpl_vars['pedido']->value->STATUS;?>
/<?php echo $_smarty_tpl->tpl_vars['pedido']->value->CODPEDIDO;?>
"><span class="ico-default-star <?php echo $_smarty_tpl->tpl_vars['star']->value;?>
" data-toggle="tooltip" title="Pago?"><i class="fa fa-thumbs-o-up"></i></span></a>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/pedidos/view/codpedido/<?php echo $_smarty_tpl->tpl_vars['pedido']->value->CODPEDIDO;?>
"><span class="ico-default-photo" data-toggle="tooltip" title="Visualizar Pedido"><i class="fa fa-th-list"></i></span></a>
                                            <?php if ($_smarty_tpl->tpl_vars['pedido']->value->STATUS=="0") {?>
                                        <a onclick="delete_produto('<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/pedidos/delete/codpedido/<?php echo $_smarty_tpl->tpl_vars['pedido']->value->CODPEDIDO;?>
')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
                                            <?php }?>
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

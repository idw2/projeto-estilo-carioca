<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 16:32:09
         compiled from "/home/maria951/public_html/novo/application/views/admin/pedidos_lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205343435447f8295cebb0-65248507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae4dd233f27c281f95a262c1e764785ddbcefb03' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/pedidos_lista.tpl',
      1 => 1413395985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205343435447f8295cebb0-65248507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pedidos' => 0,
    'pedido' => 0,
    'i' => 0,
    'language' => 0,
    'star' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447f829704579_91497665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447f829704579_91497665')) {function content_5447f829704579_91497665($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/novo/libraries/plugins/function.counter.php';
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
            
            <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span>

            <div class="panel-default">
       
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                    <thead>
                        <th>Data</th>
                        <th>Nº do Pedido</th>
                        <th>Nome</th>
                        <th>Forma de Pagamento</th>
                        <th>Forma de Envio</th>
                        <th>Total Parcial</th>
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
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['pedido']->value->TAXA_ENTREGA;?>
</td>
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

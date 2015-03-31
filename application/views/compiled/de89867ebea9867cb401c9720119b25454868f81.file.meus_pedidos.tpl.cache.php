<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 14:20:59
         compiled from "/home/maria951/public_html/homolog/application/views/meus_pedidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:479163386545b9feb8fbb07-17930390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de89867ebea9867cb401c9720119b25454868f81' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/meus_pedidos.tpl',
      1 => 1415290478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '479163386545b9feb8fbb07-17930390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pedidos' => 0,
    'pedido' => 0,
    'i' => 0,
    'language' => 0,
    'web_files' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b9feba33328_52658679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b9feba33328_52658679')) {function content_545b9feba33328_52658679($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/homolog/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">
    <?php echo $_smarty_tpl->getSubTemplate ("navbar2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">  
       
                <table class='table table-pedidos' id="table-1-2" cellspacing="0" cellpadding="2">
                    <thead>
                        <th>Nº do Pedido</th>
                        <th>Data</th>
                        <th>Pagamento</th>
                        <th>Valor</th>
                        <th>Status</th>
                    </thead>
                    
                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['pedido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pedido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pedido']->key => $_smarty_tpl->tpl_vars['pedido']->value) {
$_smarty_tpl->tpl_vars['pedido']->_loop = true;
?>  
                        <?php if ($_smarty_tpl->tpl_vars['pedido']->value->CODPEDIDO!='') {?>
                            <tr <?php if ($_smarty_tpl->tpl_vars['i']->value%2==0) {?>class="myDragClass"<?php }?>>
                                <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/view/codpedido/<?php echo $_smarty_tpl->tpl_vars['pedido']->value->CODPEDIDO;?>
"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->N_PEDIDO;?>
</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->DTA;?>
</td>
                                <td>
                                <?php if ($_smarty_tpl->tpl_vars['pedido']->value->STATUS=="0") {?>
                                        
                                        <?php if ($_smarty_tpl->tpl_vars['pedido']->value->FORMA_PGTO=="paypal") {?>
                                            <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/produtos/pgto-paypal/pedido/<?php echo $_smarty_tpl->tpl_vars['pedido']->value->CODPEDIDO;?>
">PayPal</a>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['pedido']->value->FORMA_PGTO=="cielo") {?>
                                            <a href="#">Cielo</a>                                            
                                        <?php } else { ?> 
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['web_files']->value;?>
/produtos/boleto/pedido/<?php echo $_smarty_tpl->tpl_vars['pedido']->value->CODPEDIDO;?>
" target="_blank">Boleto</a>
                                        <?php }?> 
                                        
                                <?php } else { ?>
                                     Pagamento efetuado
                                <?php }?>
                                </td>
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['pedido']->value->TOTAL_GERAL;?>
</td>
                                <td>
                                    
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/view/codpedido/<?php echo $_smarty_tpl->tpl_vars['pedido']->value->CODPEDIDO;?>
">Ver detalhes</a>
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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

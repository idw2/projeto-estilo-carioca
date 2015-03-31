<?php /* Smarty version Smarty-3.1.19, created on 2014-11-05 19:57:58
         compiled from "/home/maria951/public_html/homolog/application/views/admin/exportar_pedidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:519311916545a9d661625d2-36278300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbd43c4856b4fa82451e26d0521e5433659611ce' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/exportar_pedidos.tpl',
      1 => 1414781071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '519311916545a9d661625d2-36278300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'arquivo_xls_resultado' => 0,
    'arq_xls' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545a9d66246981_82170640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545a9d66246981_82170640')) {function content_545a9d66246981_82170640($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/homolog/libraries/plugins/function.counter.php';
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
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            
            <h2><span class="label label-default">Exportar Pedidos </span></h2>
            <br/>
            
            <br/>
            <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/pedidos/exportar-endereco" class="btn btn-default navbar-btn"><i class="fa fa-exchange"></i> Exportar endereço</a>
            <div class="panel-default">
       
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                    <thead>
                        <th>Data Exportação</th>
                        <th>Tipo</th>
                        <th>Link</th>
                        <th style="width: 20px" align='center'>Baixar .XLS</th>
                        <th style="width: 20px" align='center'>Baixar .TXT</th>
                    </thead>
                   <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                   <?php  $_smarty_tpl->tpl_vars['arq_xls'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arq_xls']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arquivo_xls_resultado']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arq_xls']->key => $_smarty_tpl->tpl_vars['arq_xls']->value) {
$_smarty_tpl->tpl_vars['arq_xls']->_loop = true;
?> 
                      <?php if ($_smarty_tpl->tpl_vars['arq_xls']->value->CODXLS!='') {?>
                        <tbody>
                             <tr <?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {?>class="myDragClass"<?php }?>>
                                 <td><?php echo $_smarty_tpl->tpl_vars['arq_xls']->value->DTA;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['arq_xls']->value->TIPO;?>
</td>
                                 <td>
                                     <textarea class="form-control"><?php echo $_smarty_tpl->tpl_vars['arq_xls']->value->LINK;?>
</textarea>
                                 </td>
                                 <td align='center'>
                                     <a href="<?php echo $_smarty_tpl->tpl_vars['arq_xls']->value->LINK;?>
" target="_blank" download="Planilha Endereços de Entrega"><i class="fa fa-download"></i></a>
                                 </td>
                                 <td align='center'>
                                     <a href="<?php echo $_smarty_tpl->tpl_vars['arq_xls']->value->LINK2;?>
" target="_blank" download="Endereços de Entrega"><i class="fa fa-download"></i></a>
                                 </td>
                             </tr>
                         </tbody>
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

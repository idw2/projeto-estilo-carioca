<?php /* Smarty version Smarty-3.1.19, created on 2014-11-05 20:39:34
         compiled from "/home/maria951/public_html/homolog/application/views/admin/exportar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1964330177545aa7261ad413-28758019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ae687f5a8099c90935038d7b5ec1bad60081aa5' => 
    array (
      0 => '/home/maria951/public_html/homolog/application/views/admin/exportar.tpl',
      1 => 1414781229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1964330177545aa7261ad413-28758019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'arquivo_csv_resultado' => 0,
    'arq_csv' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545aa72628cca6_70255141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545aa72628cca6_70255141')) {function content_545aa72628cca6_70255141($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/homolog/libraries/plugins/function.counter.php';
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
            
            <h2><span class="label label-default">Exportar Cliente / Produtos </span></h2>
            <br/>
            
            <br/>
            <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nota-fiscal/exportar-clientes" class="btn btn-default navbar-btn"><i class="fa fa-exchange"></i> Exportar clientes</a>
            <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nota-fiscal/exportar-produtos" class="btn btn-default navbar-btn"><i class="fa fa-exchange"></i> Exportar produtos</a>

            <div class="panel-default">
       
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                    <thead>
                        <th>Data Exportação</th>
                        <th>Tipo</th>
                        <th>Link</th>
                        <th>Baixar</th>
                    </thead>
                   <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                   <?php  $_smarty_tpl->tpl_vars['arq_csv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arq_csv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arquivo_csv_resultado']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arq_csv']->key => $_smarty_tpl->tpl_vars['arq_csv']->value) {
$_smarty_tpl->tpl_vars['arq_csv']->_loop = true;
?> 
                      <?php if ($_smarty_tpl->tpl_vars['arq_csv']->value->CODCSV!='') {?>
                        <tbody>
                             <tr <?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {?>class="myDragClass"<?php }?>>
                                 <td><?php echo $_smarty_tpl->tpl_vars['arq_csv']->value->DTA;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['arq_csv']->value->TIPO;?>
</td>
                                 <td>
                                     <textarea class="form-control"><?php echo $_smarty_tpl->tpl_vars['arq_csv']->value->LINK;?>
</textarea>
                                 </td>
                                 <td>
                                     <a href="<?php echo $_smarty_tpl->tpl_vars['arq_csv']->value->LINK;?>
" target="_blank" download=" <?php if ($_smarty_tpl->tpl_vars['arq_csv']->value->TIPO=='produto') {?> Planilha de Produtos <?php } else { ?> Planilha de Clientes <?php }?> "><i class="fa fa-download"></i></a>
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

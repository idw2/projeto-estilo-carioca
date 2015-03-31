<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 18:48:33
         compiled from "/home/estil450/public_html/application/views/admin/exportar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14258342615503310119c7e0-08507148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c7c16ba1907def244ed7187103b2533f20f8251' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/exportar.tpl',
      1 => 1425487000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14258342615503310119c7e0-08507148',
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
  'unifunc' => 'content_550331012fce10_45004028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550331012fce10_45004028')) {function content_550331012fce10_45004028($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/estil450/public_html/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        </div>
        
    </div>
</div>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Exportar Cliente / Produtos 
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Exportar Cliente / Produtos 
            </li>
        </ol>
    </div>
</div>     


<a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nota-fiscal/exportar-clientes-xls" class="btn btn-lg btn-success"><i class="fa fa-exchange"></i> Exportar Clientes</a>
<a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nota-fiscal/exportar-produtos-xls" class="btn btn-lg btn-success"><i class="fa fa-exchange"></i> Exportar Produtos</a>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Expostações para CONTA AZUL</h3>
            </div>
            <div class="panel-body">
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                    <thead>
                    <th>Data Exportação</th>
                    <th>Tipo</th>
                    <th>Link</th>
                    <th>Conta Azul</th>
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
" target="_blank" download="<?php if ($_smarty_tpl->tpl_vars['arq_csv']->value->TIPO=='produto') {?> Planilha de Produtos <?php } else { ?> Planilha de Clientes <?php }?>.xls"><i class="fa fa-download"></i></a>
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

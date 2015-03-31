<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 18:48:16
         compiled from "/home/estil450/public_html/application/views/admin/exportar_pedidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1281579405550330f0d87f01-14255401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f6cb86c64cc87d1f1b98bbc1032132d635d3bd5' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/exportar_pedidos.tpl',
      1 => 1425487030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1281579405550330f0d87f01-14255401',
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
  'unifunc' => 'content_550330f0e91cf0_72519681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550330f0e91cf0_72519681')) {function content_550330f0e91cf0_72519681($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/estil450/public_html/libraries/plugins/function.counter.php';
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
            Exportar Pedidos 
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Exportar Pedidos 
            </li>
        </ol>
    </div>
</div>     

<a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/pedidos/exportar-endereco" class="btn btn-lg btn-success"><i class="fa fa-exchange"></i> Exportar Endereço</a>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Expostações</h3>
            </div>
            <div class="panel-body">
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                <thead>
                <th style="width: 15%">Data Exportação</th>
                <th>Tipo</th>
                <th style="width: 20%">Link</th>
                <th style="width: 15%" align='center'><center>Planilha</center></th>
                <th style="width: 15%" align='center'><center>Bloco de Textos<BR/>(MAC e LINUX)</center></th>
                <th style="width: 15%" align='center'><center>Bloco de Textos (WINDOWS)</center></th>
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
                                    
                                    <?php echo $_smarty_tpl->tpl_vars['arq_xls']->value->LINK;?>

                                </td>
                                <td align='center'>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['arq_xls']->value->LINK;?>
" target="_blank" download="Planilha Endereços de Entrega.xls"><i class="fa fa-download"></i></a>
                                </td>
                                <td align='center'>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['arq_xls']->value->LINK2;?>
" target="_blank" download="Endereços de Entrega.txt"><i class="fa fa-download"></i></a>
                                </td>
                                <td align='center'>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['arq_xls']->value->LINK3;?>
" target="_blank" download="Endereços de Entrega.txt"><i class="fa fa-download"></i></a>
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

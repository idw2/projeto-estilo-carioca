<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 18:36:20
         compiled from "/home/estil450/public_html/application/views/admin/contas_lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88161185555032e24cde384-29364970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c559f3e5ab8f53414b92a16ae655c63717fcc60b' => 
    array (
      0 => '/home/estil450/public_html/application/views/admin/contas_lista.tpl',
      1 => 1425487024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88161185555032e24cde384-29364970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'contas' => 0,
    'conta' => 0,
    'i' => 0,
    'stt' => 0,
    'eye' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55032e24e69982_14991190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55032e24e69982_14991190')) {function content_55032e24e69982_14991190($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/estil450/public_html/libraries/plugins/function.counter.php';
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
            Lista de Clientes
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>  <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i>  Lista de Clientes
            </li>
        </ol>
    </div>
</div> 

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gerenciamento de Clientes</h3>
            </div>
            <div class="panel-body">
                <div class="panel-default">

                    <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                        <thead>
                        <th>Data</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Nascimento</th>
                        <th>Sexo</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                        <th>Ações</th>
                        </thead>

                        <?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>
 
                        <?php  $_smarty_tpl->tpl_vars['conta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conta']->key => $_smarty_tpl->tpl_vars['conta']->value) {
$_smarty_tpl->tpl_vars['conta']->_loop = true;
?>  
                            <?php if ($_smarty_tpl->tpl_vars['conta']->value->CODCADASTRO!='') {?>
                                <tr <?php if ($_smarty_tpl->tpl_vars['i']->value%2==0) {?>class="myDragClass"<?php }?>>
                                    <td><?php echo $_smarty_tpl->tpl_vars['conta']->value->DTA;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['conta']->value->NOME;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['conta']->value->EMAIL;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['conta']->value->NASCIMENTO;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['conta']->value->SEXO;?>
</td>
                                    <td>(<?php echo $_smarty_tpl->tpl_vars['conta']->value->DDD;?>
)<?php echo $_smarty_tpl->tpl_vars['conta']->value->TELEFONE;?>
 <?php if ($_smarty_tpl->tpl_vars['conta']->value->RAMAL!='') {?><br/>Ramal: <?php echo $_smarty_tpl->tpl_vars['conta']->value->RAMAL;?>
<?php }?></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['conta']->value->CPF;?>
</td>
                                    <?php if ($_smarty_tpl->tpl_vars['conta']->value->STATUS=="0") {?>
                                        <?php $_smarty_tpl->tpl_vars['eye'] = new Smarty_variable("desative", null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['stt'] = new Smarty_variable("1", null, 0);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->tpl_vars['eye'] = new Smarty_variable('', null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['stt'] = new Smarty_variable("0", null, 0);?>
                                    <?php }?>  
                                    <td>
                                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/status/<?php echo $_smarty_tpl->tpl_vars['stt']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCADASTRO;?>
"><span class="ico-default-eye <?php echo $_smarty_tpl->tpl_vars['eye']->value;?>
" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/conta/editar/<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCADASTRO;?>
"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>
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
</div>



<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>

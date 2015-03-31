<?php /* Smarty version Smarty-3.1.19, created on 2014-10-15 12:48:29
         compiled from "/home/maria951/public_html/novo/application/views/admin/atendentes_lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1243944852543e974d06e335-79560307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59ed2a972691fc417b81e7c4939d394a8f8dde85' => 
    array (
      0 => '/home/maria951/public_html/novo/application/views/admin/atendentes_lista.tpl',
      1 => 1412004087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1243944852543e974d06e335-79560307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'ERRO_NAO_EXITE_ATENDENTE' => 0,
    'atendentes' => 0,
    'atendente' => 0,
    'i' => 0,
    'stt' => 0,
    'eye' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543e974d1d26e3_12340275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543e974d1d26e3_12340275')) {function content_543e974d1d26e3_12340275($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/maria951/public_html/novo/libraries/plugins/function.counter.php';
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

            <h2><span class="label label-default">Lista de Atendentes</span></h2>
            <br/>
            <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/cadastrar_atendente" class="btn btn-default navbar-btn"><i class="glyphicon glyphicon-user"></i> Cadastrar Atendente</a>
            <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0"/></span>

            <div class="panel-default">
       
                <table class='table' id="table-1-2" cellspacing="0" cellpadding="2">
                    <thead>
                        <th>Data cadastro</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Sexo</th>
                        <th>Situação</th>
                    </thead>
                    
                   <?php if ($_smarty_tpl->tpl_vars['ERRO_NAO_EXITE_ATENDENTE']->value=="ERRO_NAO_EXITE_ATENDENTE") {?>
                       <tr>
                          <td colspan="5">Não existe atendentes cadastrados!</td>
                       </tr>
                    <?php }?>
                    
                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['atendente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['atendente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['atendentes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['atendente']->key => $_smarty_tpl->tpl_vars['atendente']->value) {
$_smarty_tpl->tpl_vars['atendente']->_loop = true;
?>  
                        <?php if ($_smarty_tpl->tpl_vars['atendente']->value->CODCONTA!='') {?>
                        <tbody>
                            <tr <?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {?>class="myDragClass"<?php }?>>
                                <td><?php echo $_smarty_tpl->tpl_vars['atendente']->value->DTA;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['atendente']->value->NOME;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['atendente']->value->EMAIL;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['atendente']->value->SEXO;?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['atendente']->value->STATUS=="0") {?>
                                        <?php $_smarty_tpl->tpl_vars['eye'] = new Smarty_variable("desative", null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['stt'] = new Smarty_variable("1", null, 0);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->tpl_vars['eye'] = new Smarty_variable('', null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['stt'] = new Smarty_variable("0", null, 0);?>
                                    <?php }?>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/status/<?php echo $_smarty_tpl->tpl_vars['stt']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['atendente']->value->EMAIL;?>
"><span class="ico-default-eye <?php echo $_smarty_tpl->tpl_vars['eye']->value;?>
" data-toggle="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>
                                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/editar/<?php echo $_smarty_tpl->tpl_vars['atendente']->value->EMAIL;?>
"><span class="ico-default-edit" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>                             
                                    <a onclick="delete_produto('<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/delete/<?php echo $_smarty_tpl->tpl_vars['atendente']->value->EMAIL;?>
')"><span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></span></a>
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
